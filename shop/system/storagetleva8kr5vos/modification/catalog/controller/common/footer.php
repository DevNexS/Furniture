<?php
class ControllerCommonFooter extends Controller {
	public function index() {

			$data['oct_remarket_data'] = $oct_remarket_data = $this->config->get('theme_oct_remarket_data');
			$data['oct_popup_call_phone_status'] = $this->config->get('oct_popup_call_phone_status');

			$data['oct_lang_id'] = (int)$this->config->get('config_language_id');

			$data['oct_jscode'] = html_entity_decode($this->config->get('theme_oct_remarket_js_code'), ENT_QUOTES, 'UTF-8');

			$this->load->model('tool/image');

			$data['oct_customer_paymets'] = [];

			if (isset($oct_remarket_data['payments']['customers']) && !empty($oct_remarket_data['payments']['customers'])) {
				foreach ($oct_remarket_data['payments']['customers'] as $oct_c_payment) {
					if ((isset($oct_c_payment['status']) && $oct_c_payment['status'] == 'on') && isset($oct_c_payment['image']) && !empty($oct_c_payment['image']) && file_exists(DIR_IMAGE.$oct_c_payment['image'])) {
						$data['oct_customer_paymets'][] = $this->model_tool_image->resize($oct_c_payment['image'], 52, 32);
					}
				}
			}

			if ($this->registry->has('oct_mobiledetect')) {
		        if (($this->oct_mobiledetect->isiOS() || $this->oct_mobiledetect->isiPad()) && ((isset($this->request->get['product_id']) && $this->request->get['product_id']) || ((isset($this->request->get['route']) && $this->request->get['route'] == 'common/home' || (isset($this->request->get['route']) && $this->request->get['route'] == 'checkout/oct_fastorder')) || $this->request->server['REQUEST_URI'] == '/'))) {
		            $data['oct_isiOS'] = 1;
		        }
		    }

			$data['oct_subscribe_form_data'] = $this->config->get('oct_subscribe_form_data');
			$data['oct_subscribe_status'] = $this->config->get('oct_subscribe_status');
			$data['oct_subscribe_day_now'] = date("Y-m-d H:i:s");

			if (isset($data['oct_remarket_data']['footer_subscribe']) && $data['oct_remarket_data']['footer_subscribe'] == 'on') {
				$data['oct_subscribe'] = $this->load->controller('octemplates/module/oct_subscribe');
			}

			if ($this->config->get('theme_oct_remarket_feedback_status')) {
				$data['oct_feedback_data'] = $this->config->get('theme_oct_remarket_feedback_data');
				$data['oct_popup_call_phone_status'] = $this->config->get('oct_popup_call_phone_status');
			}

			$data['oct_policy_value'] = false;

	        $oct_policy_status = $this->config->get('oct_policy_status');
			$oct_policy_data = $this->config->get('oct_policy_data');

	        if (isset($oct_policy_data['value']) && $oct_policy_data['value'] && !empty($oct_policy_data['value']) && ($oct_policy_status && (!isset($this->request->cookie[$oct_policy_data['value']]) || !$this->request->cookie[$oct_policy_data['value']])) && $this->config->get('config_maintenance') == 0) {
            	$data['oct_policy_value'] = $oct_policy_data['value'];
        	}

			$lazy_link = 'catalog/view/theme/oct_remarket/js/lozad.js';

			if ($this->registry->has('oct_mobiledetect')) {
		        if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet() && $this->config->get('theme_oct_remarket_lazyload_mobile')) {
		            $this->document->addScript($lazy_link, 'footer');
		        } elseif ($this->oct_mobiledetect->isTablet() && $this->config->get('theme_oct_remarket_lazyload_tablet')) {
                    $this->document->addScript($lazy_link, 'footer');
                } elseif ($this->config->get('theme_oct_remarket_lazyload_desktop')) {
                    $this->document->addScript($lazy_link, 'footer');
                }
		    } elseif ($this->config->get('theme_oct_remarket_lazyload_desktop')) {
                $this->document->addScript($lazy_link, 'footer');
            }
			
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		
			if (isset($data['oct_remarket_data']['footer_links']) && !empty($data['oct_remarket_data']['footer_links'])) {
				//$site_link = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

				foreach ($oct_remarket_data['footer_links'] as $footer_link) {
					$data['informations'][] = array(
						'title' => html_entity_decode($footer_link[(int)$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8'),
						'href'  => $footer_link[(int)$this->config->get('config_language_id')]['link']
					);
				}
			} else {
				foreach ($this->model_catalog_information->getInformations() as $result) {
					if ($result['bottom']) {
						$data['informations'][] = array(
							'title' => $result['title'],
							'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
						);
					}
				}
			}

			if (isset($data['oct_remarket_data']['footer_link_contact']) && $data['oct_remarket_data']['footer_link_contact'] == 'on') {
				$data['informations'][] = array(
					'title' => $this->language->get('text_contact'),
					'href'  => $this->url->link('information/contact')
				);
			}

			if (isset($data['oct_remarket_data']['footer_link_return']) && $data['oct_remarket_data']['footer_link_return'] == 'on') {
				$data['informations'][] = array(
					'title' => $this->language->get('text_return'),
					'rel'	=> 1,
					'href'  => $this->url->link('account/return/add', '', true)
				);
			}

			if (isset($data['oct_remarket_data']['footer_link_sitemap']) && $data['oct_remarket_data']['footer_link_sitemap'] == 'on') {
				$data['informations'][] = array(
					'title' => $this->language->get('text_sitemap'),
					'href'  => $this->url->link('information/sitemap')
				);
			}

			if (isset($data['oct_remarket_data']['footer_link_man']) && $data['oct_remarket_data']['footer_link_man'] == 'on') {
				$data['informations'][] = array(
					'title' => $this->language->get('text_manufacturer'),
					'href'  => $this->url->link('product/manufacturer')
				);
			}

			if (isset($data['oct_remarket_data']['footer_link_cert']) && $data['oct_remarket_data']['footer_link_cert'] == 'on') {
				$data['informations'][] = array(
					'title' => $this->language->get('text_voucher'),
					'rel'	=> 1,
					'href'  => $this->url->link('account/voucher', '', true)
				);
			}

			if (isset($data['oct_remarket_data']['footer_link_specials']) && $data['oct_remarket_data']['footer_link_specials'] == 'on') {
				$data['informations'][] = array(
					'title' => $this->language->get('text_special'),
					'href'  => $this->url->link('product/special')
				);
			}

			if (isset($data['oct_remarket_data']['footer_category_links']) && !empty($data['oct_remarket_data']['footer_category_links'])) {
				if(isset($this->request->server['HTTP_ACCEPT']) && strpos($this->request->server['HTTP_ACCEPT'], 'webp')) {
					$oct_webP = 1 . '-' . $this->session->data['currency'];
				} else {
					$oct_webP = 0 . '-' . $this->session->data['currency'];
				}

				$footer_cat_links = $this->cache->get('octemplates.footer_category.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . $oct_webP);

				if (!$footer_cat_links) {
					$this->load->model('catalog/category');

					$footer_cat_links = [];

					foreach ($data['oct_remarket_data']['footer_category_links'] as $category_id) {
						$category_info = $this->model_catalog_category->getOCTCategory($category_id);

						if ($category_info) {
							$path = ($category_info['path']) ? $category_info['path'] . '_' . $category_info['category_id'] : $category_info['category_id'];

							$footer_cat_links[] = array(
								'name' => $category_info['name'],
								'href'  => $this->url->link('product/category', 'path=' . $path, true)
							);
						}
					}

					$this->cache->set('octemplates.footer_category.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . $oct_webP, $footer_cat_links);
				}

				$data['categories'] = $footer_cat_links;
			}

			if (isset($data['oct_remarket_data']['contact_open'][(int)$this->config->get('config_language_id')])){
				$oct_contact_opens = explode(PHP_EOL, $data['oct_remarket_data']['contact_open'][(int)$this->config->get('config_language_id')]);

				foreach ($oct_contact_opens as $oct_contact_open) {
					if (!empty($oct_contact_open)) {
						$data['oct_contact_opens'][] = html_entity_decode($oct_contact_open, ENT_QUOTES, 'UTF-8');
					}
				}
			}

			$oct_contact_telephones = explode(PHP_EOL, $data['oct_remarket_data']['contact_telephone']);

			foreach ($oct_contact_telephones as $oct_contact_telephone) {
				if (!empty($oct_contact_telephone)) {
					$data['oct_contact_telephones'][] = html_entity_decode($oct_contact_telephone, ENT_QUOTES, 'UTF-8');
				}
			}

			if (isset($oct_remarket_data['contact_address'])) {
				foreach ($oct_remarket_data['contact_address'] as $oct_lang_id => $oct_adress) {
					$data['oct_remarket_data']['contact_address'][$oct_lang_id] = html_entity_decode($oct_adress, ENT_QUOTES, 'UTF-8');
				}
			}
			

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		

            if ($this->config->get('analytics_oct_analytics_status') && $this->config->get('analytics_oct_analytics_position') == 1) {

				$data['oct_analytics_google_status'] = $this->config->get('analytics_oct_analytics_google_status');
                $data['oct_analytics_yandex_status'] = $this->config->get('analytics_oct_analytics_yandex_status');
                $data['oct_analytics_yandex_code'] = $this->config->get('analytics_oct_analytics_yandex_status') ? $this->config->get('analytics_oct_analytics_yandex_code') : '';

                if ((isset($data['oct_analytics_google_status']) && $data['oct_analytics_google_status']) || (isset($data['oct_analytics_yandex_status']) && $data['oct_analytics_yandex_status'])) {
                    $data['oct_analytics_targets'] = $this->config->get('analytics_oct_analytics_targets');
                } else {
                    $data['oct_analytics_targets'] = [];
                }
			}
			
		return $this->load->view('common/footer', $data);
	}
}
