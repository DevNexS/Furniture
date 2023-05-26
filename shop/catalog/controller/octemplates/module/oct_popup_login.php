<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOctPopupLogin extends Controller {
	public function index() {
		if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$this->language->load('octemplates/module/oct_popup_login');

			$data['register_url'] = $this->url->link('account/register', '', true);
			$data['forgotten_url'] = $this->url->link('account/forgotten', '', true);
			$data['account_url'] = $this->url->link('account/account', '', true);

			if (isset($this->request->post['redirect']) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
				$data['redirect'] = $this->request->post['redirect'];
			} elseif (isset($this->session->data['redirect'])) {
				$data['redirect'] = $this->session->data['redirect'];

				unset($this->session->data['redirect']);
			} else {
				if (isset($this->request->server['HTTP_REFERER'])) {
					$data['redirect'] = $this->request->server['HTTP_REFERER'];
				} else {
					$data['redirect'] = '';
				}
			}

			$this->response->setOutput($this->load->view('octemplates/module/oct_popup_login', $data));
		} else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	}

	public function account() {
		if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$this->load->language('extension/module/account');

			$data['logged'] = $this->customer->isLogged();
			$data['register'] = $this->url->link('account/register', '', true);
			$data['login'] = $this->url->link('account/login', '', true);
			$data['logout'] = $this->url->link('account/logout', '', true);
			$data['forgotten'] = $this->url->link('account/forgotten', '', true);
			$data['account'] = $this->url->link('account/account', '', true);
			$data['edit'] = $this->url->link('account/edit', '', true);
			$data['password'] = $this->url->link('account/password', '', true);
			$data['address'] = $this->url->link('account/address', '', true);
			$data['wishlist'] = $this->url->link('account/wishlist');
			$data['order'] = $this->url->link('account/order', '', true);
			$data['download'] = $this->url->link('account/download', '', true);
			$data['reward'] = $this->url->link('account/reward', '', true);
			$data['return'] = $this->url->link('account/return', '', true);
			$data['transaction'] = $this->url->link('account/transaction', '', true);
			$data['newsletter'] = $this->url->link('account/newsletter', '', true);
			$data['recurring'] = $this->url->link('account/recurring', '', true);

			if ($this->customer->isLogged()) {
				$this->load->model('account/customer');

				$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());

				if (!$affiliate_info) {
					$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
					$data['tracking'] = '';
				} else {
					$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);
					$data['tracking'] = $this->url->link('account/tracking', '', true);
				}
			} else {
				$data['affiliate'] = $this->url->link('affiliate/login', '', true);
			}

			$this->response->setOutput($this->load->view('extension/module/account', $data));
		} else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	}

	public function login() {
		if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		    $json = [];

		    $this->language->load('octemplates/module/oct_popup_login');
		    $this->load->model('account/customer');

	    		// Check how many login attempts have been made.
			$login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

			if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
				$json['warning'] = $this->language->get('error_attempts');
			}

			// Check if customer has been approved.
			$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

			if ($customer_info && !$customer_info['status']) {
				$json['warning'] = $this->language->get('error_approved');
			}

			$json['redirect'] = '';

			if (!isset($json['warning'])) {
				if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
					$json['warning'] = $this->language->get('error_login');

					$this->model_account_customer->addLoginAttempt($this->request->post['email']);
				} else {
					// Unset guest
					unset($this->session->data['guest']);

					// Default Shipping Address
					$this->load->model('account/address');

					if ($this->config->get('config_tax_customer') == 'payment') {
						$this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
					}

					if ($this->config->get('config_tax_customer') == 'shipping') {
						$this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
					}

					// Wishlist
					if (isset($this->session->data['wishlist']) && is_array($this->session->data['wishlist'])) {
						$this->load->model('account/wishlist');

						foreach ($this->session->data['wishlist'] as $key => $product_id) {
							$this->model_account_wishlist->addWishlist($product_id);

							unset($this->session->data['wishlist'][$key]);
						}
					}

					if (isset($this->request->post['redirect']) && $this->request->post['redirect'] != $this->url->link('account/logout', '', true) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
						$json['redirect'] = str_replace('&amp;', '&', $this->request->post['redirect']);
					}

					$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
				}
			}

		    $this->response->addHeader('Content-Type: application/json');
		    $this->response->setOutput(json_encode($json));
	    } else {
		    $this->response->redirect($this->url->link('error/not_found', '', true));
	    }
    }
}
