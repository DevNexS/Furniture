<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		$data['title'] = $this->document->getTitle();

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}

		if ($this->request->server['HTTPS']) {
            $server = HTTPS_CATALOG;
        } else {
            $server = HTTP_CATALOG;
        }

        if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
        }

		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$this->load->language('common/header');

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->user->getUserName());

		if (!isset($this->request->get['user_token']) || !isset($this->session->data['user_token']) || ($this->request->get['user_token'] != $this->session->data['user_token'])) {
			$data['logged'] = '';

			$data['home'] = $this->url->link('common/login', '', true);
		} else {
			$data['logged'] = true;

			$data['home'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);
			$data['logout'] = $this->url->link('common/logout', 'user_token=' . $this->session->data['user_token'], true);
			$data['profile'] = $this->url->link('common/profile', 'user_token=' . $this->session->data['user_token'], true);


			if ($this->config->get('theme_oct_remarket_alert_status')) {
				$data['oct_alert_status'] = $this->config->get('theme_oct_remarket_alert_status');

				$data['oct_alert_data'] = $oct_alert_data = $this->config->get('theme_oct_remarket_alert_data');
				$oct_total_calls = $oct_total_found_cheaper = $oct_total_reviews = $oct_total_faqs = $product_total = $review_total = $return_total = 0;

				if (isset($oct_alert_data['oct_modules']) && $oct_alert_data['oct_modules']) {
					if ($this->config->get('oct_popup_call_phone_status')) {
						$this->load->model('octemplates/module/oct_popup_call_phone');

						$filter_data = [
							'filter_processed' => 0
						];

						$data['oct_total_calls'] = $oct_total_calls = $this->model_octemplates_module_oct_popup_call_phone->getTotalCallArray($filter_data);
						$data['oct_popup_call_phone'] = $this->url->link('octemplates/module/oct_popup_call_phone', 'user_token=' . $this->session->data['user_token'], true);
					}

					if ($this->config->get('oct_popup_found_cheaper_status')) {
						$this->load->model('octemplates/module/oct_popup_found_cheaper');

						$filter_data = [
							'filter_processed' => 0
						];

						$data['oct_total_found_cheaper'] = $oct_total_found_cheaper = $this->model_octemplates_module_oct_popup_found_cheaper->getTotalCallArray($filter_data);
						$data['oct_popup_found_cheaper'] = $this->url->link('octemplates/module/oct_popup_found_cheaper', 'user_token=' . $this->session->data['user_token'], true);
					}

					if ($this->config->get('oct_sreview_setting_status')) {
						$this->load->model('octemplates/module/oct_sreview_reviews');

						$filter_data = [
							'filter_status' => 0
						];

						$data['oct_total_reviews'] = $oct_total_reviews = $this->model_octemplates_module_oct_sreview_reviews->getTotalReviews($filter_data);
						$data['oct_reviews'] = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . '&filter_status=0', true);
					}

					$this->load->model('octemplates/faq/oct_product_faq');

					$filter_data = [
						'filter_status' => 0
					];

					$data['oct_total_faqs'] = $oct_total_faqs = $this->model_octemplates_faq_oct_product_faq->getTotalFaqs($filter_data);
					$data['oct_faqs'] = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . '&filter_status=0', true);
				}

				if (isset($oct_alert_data['orders']) && $oct_alert_data['orders']) {
					// Orders
					$this->load->model('sale/order');

					// Processing Orders
					$data['processing_status_total'] = $this->model_sale_order->getTotalOrders(array('filter_order_status' => implode(',', $this->config->get('config_processing_status'))));
					$data['processing_status'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&filter_order_status=' . implode(',', $this->config->get('config_processing_status')), true);

					// Complete Orders
					$data['complete_status_total'] = $this->model_sale_order->getTotalOrders(array('filter_order_status' => implode(',', $this->config->get('config_complete_status'))));
					$data['complete_status'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'] . '&filter_order_status=' . implode(',', $this->config->get('config_complete_status')), true);

					// Returns
					$this->load->model('sale/return');

					$return_total = $this->model_sale_return->getTotalReturns(array('filter_return_status_id' => $this->config->get('config_return_status_id')));

					$data['return_total'] = $return_total;

					$data['return'] = $this->url->link('sale/return', 'user_token=' . $this->session->data['user_token'], true);
				}

				if (isset($oct_alert_data['products']) && $oct_alert_data['products']) {
					// Products
					$this->load->model('catalog/product');

					$product_total = $this->model_catalog_product->getTotalProducts(array('filter_quantity' => 0));

					$data['product_total'] = $product_total;

					$data['product'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&filter_quantity=0', true);

					// Reviews
					$this->load->model('catalog/review');

					$review_total = $this->model_catalog_review->getTotalReviews(array('filter_status' => 0));

					$data['review_total'] = $review_total;

					$data['review'] = $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . '&filter_status=0', true);
				}

				$data['oct_alerts'] = $oct_total_calls + $oct_total_found_cheaper + $oct_total_reviews + $oct_total_faqs + $product_total + $review_total + $return_total;
			}
			
			$this->load->model('user/user');

			$this->load->model('tool/image');

			$user_info = $this->model_user_user->getUser($this->user->getId());

			if ($user_info) {
				$data['firstname'] = $user_info['firstname'];
				$data['lastname'] = $user_info['lastname'];
				$data['username']  = $user_info['username'];
				$data['user_group'] = $user_info['user_group'];

				if (is_file(DIR_IMAGE . $user_info['image'])) {
					$data['image'] = $this->model_tool_image->resize($user_info['image'], 45, 45);
				} else {
					$data['image'] = $this->model_tool_image->resize('profile.png', 45, 45);
				}
			} else {
				$data['firstname'] = '';
				$data['lastname'] = '';
				$data['user_group'] = '';
				$data['image'] = '';
			}

			// Online Stores
			$data['stores'] = array();

			$data['stores'][] = array(
				'name' => $this->config->get('config_name'),
				'href' => HTTP_CATALOG
			);

			$this->load->model('setting/store');

			$results = $this->model_setting_store->getStores();

			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}
		}

		return $this->load->view('common/header', $data);
	}
}
