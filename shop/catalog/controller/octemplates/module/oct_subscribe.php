<?php
/**********************************************************/
/*	@copyright	OCTemplates 2019-2022					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerOCTemplatesModuleOctSubscribe extends Controller {
    public function index() {
	    if ($this->config->get('oct_subscribe_status') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	        $this->load->model('catalog/product');
			$this->load->model('tool/image');
			$this->load->model('octemplates/module/oct_subscribe');
	        $this->load->language('octemplates/module/oct_subscribe');

			$oct_subscribe_text_data = $this->config->get('oct_subscribe_text_data');
			$data['oct_subscribe_form_data'] = $oct_subscribe_form_data = $this->config->get('oct_subscribe_form_data');

			$data['expire'] = $oct_subscribe_form_data['expire'] ? $oct_subscribe_form_data['expire'] : '1';

			if ($oct_subscribe_form_data['image']) {
				$data['thumb'] = $oct_subscribe_form_data['image'];
			} else {
				$data['thumb'] = false;
			}

			if (isset($oct_subscribe_text_data[$this->session->data['language']])) {
				$data['promo_text'] = html_entity_decode($oct_subscribe_text_data[$this->session->data['language']]['promo_text'], ENT_QUOTES, 'UTF-8');
			}

			if ($this->customer->isLogged()) {
				$data['email'] = $this->customer->getEmail();
			} else {
				$data['email'] = '';
			}

			if ($this->config->get('config_account_id')) {
	            $this->load->model('catalog/information');

	            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

	            if ($information_info) {
	                $data['text_terms'] = sprintf($this->language->get('text_oct_terms'), $this->url->link('information/information', 'information_id=' . $this->config->get('config_account_id'), 'SSL'), $information_info['title'], $information_info['title']);
	            } else {
	                $data['text_terms'] = '';
	            }
	        } else {
	            $data['text_terms'] = '';
	        }

			$this->response->setOutput($this->load->view('octemplates/module/oct_popup_subscribe', $data));
        } else {
		    $this->load->language('octemplates/module/oct_subscribe');

		    if ($this->config->get('config_account_id')) {
	            $this->load->model('catalog/information');

	            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

	            if ($information_info) {
	                $data['text_terms'] = sprintf($this->language->get('text_oct_terms'), $this->url->link('information/information', 'information_id=' . $this->config->get('config_account_id'), 'SSL'), $information_info['title']);
	            } else {
	                $data['text_terms'] = '';
	            }
	        } else {
	            $data['text_terms'] = '';
	        }

	        return $this->load->view('octemplates/module/oct_static_subscribe', $data);
        }
    }

    public function subscribe_confirm(){
		$this->load->language('octemplates/module/oct_subscribe');
        $this->load->model('octemplates/module/oct_subscribe');

        $this->document->setTitle($this->language->get('title_subscribe'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('title_subscribe'),
            'href' => $this->url->link('octemplates/module/oct_subscribe/subscribe_confirm')
        );

		$oct_data['breadcrumbs'] = $data['breadcrumbs'];

 		$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);

        $data['heading_title'] = $this->language->get('title_subscribe');

        $data['text_message'] = $this->language->get('text_message_default');

        if (isset($this->request->get['unsubscribe']) && isset($this->request->get['hash'])) {
            $subscribe_info = $this->model_octemplates_module_oct_subscribe->getSubscribe($this->request->get['unsubscribe'], $this->request->get['hash']);

            if ($subscribe_info) {
                $this->model_octemplates_module_oct_subscribe->unSubscribe($subscribe_info['subscribe_id']);
                $data['text_message'] = $this->language->get('text_message_unsubscribe');
            }
        }

        if (isset($this->request->get['approve']) && isset($this->request->get['hash'])) {
            $subscribe_info = $this->model_octemplates_module_oct_subscribe->getSubscribe($this->request->get['approve'], $this->request->get['hash']);

            if ($subscribe_info) {
                $this->model_octemplates_module_oct_subscribe->approve($subscribe_info['subscribe_id']);
                $data['text_message'] = $this->language->get('text_message_approve');
            }
        }

        $data['button_continue'] = $this->language->get('button_continue');

        $data['continue'] = $this->url->link('common/home');

        $data['column_left']    = $this->load->controller('common/column_left');
        $data['column_right']   = $this->load->controller('common/column_right');
        $data['content_top']    = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/success', $data));
    }

    public function makeSubscribe() {
	    if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	        $json = [];

	        $this->language->load('octemplates/module/oct_subscribe');
	        $this->load->model('octemplates/module/oct_subscribe');

	        $oct_subscribe_form_data = (array)$this->config->get('oct_subscribe_form_data');

	        if (isset($this->request->post['email'])) {
	            if (empty($this->request->post['email'])) {
	                $json['error']['email'] = $this->language->get('error_enter_email');
	            }

	            if (!preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email'])) {
	                $json['error']['email']  = $this->language->get('error_valid_email');
	            }

	            $subscribe_status = $this->model_octemplates_module_oct_subscribe->checkSubscribe($this->request->post['email']);

	            if ($subscribe_status) {
	                $json['error']['email'] = $this->language->get('error_already_subscribed_email');
	            }

				if ($this->config->get('config_account_id') && !isset($this->request->post['agree'])) {
					$this->load->model('catalog/information');

					$information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

					$json['error']['agree'] = sprintf($this->language->get('error_oct_terms'), $information_info['title']);
				}

	            if (!isset($json['error'])) {
	                if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
	                    $ip = $this->request->server['HTTP_X_FORWARDED_FOR'];
	                } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
	                    $ip = $this->request->server['HTTP_CLIENT_IP'];
	                } else {
	                    $ip = $this->request->server['REMOTE_ADDR'];
	                }

	                $subscribe_data = [
	                    'email' => $this->request->post['email'],
	                    'ip' => $ip
	                ];

	                $this->model_octemplates_module_oct_subscribe->addSubscribe($subscribe_data);

	                $json['output'] = $this->language->get('text_success_subscribe');
	            }
	        }

	        $this->response->addHeader('Content-Type: application/json');
	        $this->response->setOutput(json_encode($json));
        } else {
	        $this->response->redirect($this->url->link('error/not_found', '', true));
        }
    }
}
