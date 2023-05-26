<?php
class ControllerCommonHeader extends Controller {
	public function index() {

			$data['oct_remarket_data'] = $oct_remarket_data = $this->config->get('theme_oct_remarket_data');

			$data['oct_lang_id'] = (int)$this->config->get('config_language_id');

			if (isset($data['oct_remarket_data']['contact_open'][(int)$this->config->get('config_language_id')])){
				$oct_contact_opens = explode(PHP_EOL, $data['oct_remarket_data']['contact_open'][(int)$this->config->get('config_language_id')]);

				foreach ($oct_contact_opens as $oct_contact_open) {
					if (!empty($oct_contact_open)) {
						$data['oct_contact_opens'][] = html_entity_decode($oct_contact_open, ENT_QUOTES, 'UTF-8');
					}
				}
			}

			$data['logo_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width');
			$data['logo_height'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height');

			$data['oct_info_bar_close'] = $this->language->get('oct_info_bar_close');
			$data['oct_information_bar_more'] = $this->language->get('oct_policy_more');

			$oct_information_bar_status = $this->config->get('oct_information_bar_status');
			$oct_information_bar_data = $this->config->get('oct_information_bar_data');
			$data['oct_information_bar_value'] = false;

	        if (isset($oct_information_bar_data['value']) && $oct_information_bar_data['value'] && !empty($oct_information_bar_data['value']) && ($oct_information_bar_status && (!isset($this->request->cookie[$oct_information_bar_data['value']]) || !$this->request->cookie[$oct_information_bar_data['value']])) && $this->config->get('config_maintenance') == 0) {
            	$data['oct_information_bar_value'] = $oct_information_bar_data['value'];
				$data['oct_information_bar_day_now'] = date("Y-m-d H:i:s");

				if (isset($oct_information_bar_data['module_text'][(int)$this->config->get('config_language_id')]) && !empty($oct_information_bar_data['module_text'][(int)$this->config->get('config_language_id')])) {
	                $data['text_oct_information_bar'] = strip_tags(html_entity_decode($oct_information_bar_data['module_text'][(int)$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'), '<img><ul><li><b><strong><a><i><u><br></br><span><div>');

	                if (isset($oct_information_bar_data['indormation_id']) && $oct_information_bar_data['indormation_id']) {
	                    $data['text_oct_information_bar'] .= ' <a target="_blank" href="'. $this->url->link('information/information', 'information_id=' . $oct_information_bar_data['indormation_id']) . '">' . $data['oct_information_bar_more'] . '</a>';
	                }

	                if (isset($oct_information_bar_data['max_day']) && $oct_information_bar_data['max_day'] && !empty($oct_information_bar_data['max_day'])) {
	                    $data['oct_info_max_day'] = (int)$oct_information_bar_data['max_day'];
	                }
	            }

				$data['oct_information_bar_background']					= $oct_information_bar_data['background_bar'];
            	$data['oct_information_bar_color_text']					= $oct_information_bar_data['color_text'];
            	$data['oct_information_bar_color_url']					= $oct_information_bar_data['color_url'];
            	$data['oct_information_bar_background_button']			= $oct_information_bar_data['background_button'];
            	$data['oct_information_bar_background_button_hover']	= $oct_information_bar_data['background_button_hover'];
            	$data['oct_information_bar_color_text_button']			= $oct_information_bar_data['color_text_button'];
            	$data['oct_information_bar_color_text_button_hover']	= $oct_information_bar_data['color_text_button_hover'];
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

			if (isset($oct_remarket_data['contact_map']) && !empty($oct_remarket_data['contact_map'])) {
				$data['contact_map'] = html_entity_decode($oct_remarket_data['contact_map'], ENT_QUOTES, 'UTF-8');
			}

			if ((isset($this->request->get['route']) && $this->request->get['route'] == 'common/home') || $this->request->server['REQUEST_URI'] == '/') {
				$data['oct_home'] = true;
			}

			$data['header_informations'] = [];

			if (isset($oct_remarket_data['header_links']) && !empty($oct_remarket_data['header_links']) && (isset($oct_remarket_data['header_menu']) && $oct_remarket_data['header_menu'])) {
				foreach ($oct_remarket_data['header_links'] as $header_link) {
					$data['header_informations'][] = array(
						'title' => html_entity_decode($header_link[(int)$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8'),
						'href'  => $header_link[(int)$this->config->get('config_language_id')]['link']
					);
				}
			}

			$data['oct_bar_data'] = $oct_bar_data = $this->config->get('theme_oct_remarket_bar_data');

			if (isset($oct_bar_data['status']) && $oct_bar_data['status']) {
				$data['bar_position'] = isset($oct_bar_data['position']) ? $oct_bar_data['position'] : 'left';

				if (isset($oct_bar_data['show_cart']) && $oct_bar_data['show_cart']) {
					$data['cart_total_bar'] = $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0);
				}

				if (isset($oct_bar_data['show_wishlist']) && $oct_bar_data['show_wishlist']) {
					$data['wishlist_link'] = $this->url->link('account/wishlist','', true);
					if ($this->customer->isLogged()) {
						$this->load->model('account/wishlist');

						$data['wishlist_total'] = $this->model_account_wishlist->getTotalWishlist();
					} else {
						$data['wishlist_total'] = (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0);
					}
				}

				if (isset($oct_bar_data['show_compare']) && $oct_bar_data['show_compare']) {
					$data['compare_link'] = $this->url->link('product/compare','', true);
					$data['compare_total'] = (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0);
				}

				if (isset($oct_bar_data['show_account']) && $oct_bar_data['show_account']) {
					$data['account_link'] = $this->customer->isLogged() ? $this->url->link('account/account', '', true) : false;
				}

				if (isset($oct_bar_data['show_views']) && $oct_bar_data['show_views']) {
					$product_views = [];

					if (isset($this->request->cookie['oct_product_views'])) {
					    $product_views = explode(',', $this->request->cookie['oct_product_views']);
					} elseif (isset($this->session->data['oct_product_views'])) {
					    $product_views = $this->session->data['oct_product_views'];
					}

					if (isset($this->request->cookie['viewed'])) {
					    $product_views = array_merge($product_views, explode(',', $this->request->cookie['viewed']));
					} elseif (isset($this->session->data['viewed'])) {
					    $product_views = array_merge($product_views, $this->session->data['viewed']);
					}

					$data['product_views_count'] = count($product_views);
				}
			}

			$data['oct_popup_call_phone_status'] = $this->config->get('oct_popup_call_phone_status');
			$data['oct_popup_cart_status'] = $this->config->get('theme_oct_remarket_popup_cart_status');

			if (isset($oct_remarket_data['preload_images']) && $oct_remarket_data['preload_images'] && is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
				$server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

				$this->document->setOCTPreload($server . 'image/' . $this->config->get('config_logo'));
			}

			$data['oct_preloads'] = $this->document->getOCTPreload();
			$data['oct_menu_catalog'] = (isset($oct_remarket_data['megamenu']['dtitle'][(int)$this->config->get('config_language_id')]) && !empty($oct_remarket_data['megamenu']['dtitle'][(int)$this->config->get('config_language_id')])) ? $oct_remarket_data['megamenu']['dtitle'][(int)$this->config->get('config_language_id')] : $this->language->get('oct_menu_catalog');
			$data['oct_mobile_sidebar'] = $this->load->controller('octemplates/main/oct_functions/mobileSideBar', 1);
			$data['oct_minify'] = (isset($oct_remarket_data['minify']) && $oct_remarket_data['minify']) ? true : false;
			$data['oct_preload_styles'] = (isset($oct_remarket_data['preload_styles']) && $oct_remarket_data['preload_styles']) ? true : false;
			$data['oct_footer_scripts'] = (isset($oct_remarket_data['footer_scripts']) && $oct_remarket_data['footer_scripts']) ? true : false;

			if ($this->registry->has('oct_mobiledetect')) {
				if (!$this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet()) {
					$data['oct_desktop'] = true;
				}
			}

			if (isset($oct_remarket_data['contact_view_locations']) && $oct_remarket_data['contact_view_locations'] == 'on') {
				$this->load->model('octemplates/widgets/oct_locations');

				$data['oct_locations'] = $this->model_octemplates_widgets_oct_locations->getOCTLocations();
			}

			(isset($this->request->get['product_id'])) ? $data['body_class'] = true : $data['body_class'] = false;
			
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}


			if ($this->config->get('analytics_oct_analytics_google_status') && $this->config->get('analytics_oct_analytics_google_webmaster_code')) {
				$data['oct_analytics_google_webmaster_code'] = html_entity_decode($this->config->get('analytics_oct_analytics_google_webmaster_code'), ENT_QUOTES, 'UTF-8');
			}
            
			if ($this->config->get('analytics_oct_analytics_status') && $this->config->get('analytics_oct_analytics_googletm_code')) {
				$data['oct_analytics_googletm_code'] = html_entity_decode($this->config->get('analytics_oct_analytics_googletm_code'), ENT_QUOTES, 'UTF-8');
			}

			if ($this->config->get('analytics_oct_analytics_yandex_status') && $this->config->get('analytics_oct_analytics_yandex_webmaster_code')) {
				$data['oct_analytics_yandex_webmaster_code'] = html_entity_decode($this->config->get('analytics_oct_analytics_yandex_webmaster_code'), ENT_QUOTES, 'UTF-8');
			}
			
		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		
			$this->load->model('octemplates/widgets/oct_minify');

			$main_css = $this->config->get('developer_sass') ? 'main' : 'main';

			$this->document->addOctStyle('catalog/view/theme/oct_remarket/stylesheet/'. $main_css .'.css');

			if (file_exists(DIR_TEMPLATE.'oct_remarket/stylesheet/oct_stickers.css')) {
				$file_size = filesize(DIR_TEMPLATE.'oct_remarket/stylesheet/oct_stickers.css');

				if ($file_size) {
					$this->document->addOctStyle('catalog/view/theme/oct_remarket/stylesheet/oct_stickers.css');
				}
			}

			if (file_exists(DIR_TEMPLATE.'oct_remarket/stylesheet/dynamic_stylesheet_'. (int)$this->config->get('config_store_id') .'.css')) {
				$file_size = filesize(DIR_TEMPLATE.'oct_remarket/stylesheet/dynamic_stylesheet_'. (int)$this->config->get('config_store_id') .'.css');

				if ($file_size) {
					$this->document->addOctStyle('catalog/view/theme/oct_remarket/stylesheet/dynamic_stylesheet_'. (int)$this->config->get('config_store_id') .'.css');
				}
			}

			$data['styles'] = $this->model_octemplates_widgets_oct_minify->octMinifyCss($this->document->getOctStyles());
			
		$data['scripts'] = $this->document->getScripts('header');

			$this->document->addOctScript('catalog/view/theme/oct_remarket/js/jquery-3.6.0.min.js');
			$this->document->addOctScript('catalog/view/theme/oct_remarket/js/popper.min.js');
			$this->document->addOctScript('catalog/view/theme/oct_remarket/js/bootstrap.min.js');
			$this->document->addOctScript('catalog/view/theme/oct_remarket/js/main.js');
			$this->document->addOctScript('catalog/view/theme/oct_remarket/js/bootstrap-notify/bootstrap-notify.js');
			//$this->document->addOctScript('catalog/view/theme/oct_remarket/js/lozad.js');
			$this->document->addOctScript('catalog/view/theme/oct_remarket/js/common.js');

			$data['scripts'] = $this->model_octemplates_widgets_oct_minify->octMinifyJs($this->document->getOctScripts());
			
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

            $data['octOpenGraphs'] = (isset($oct_remarket_data['open_graph']) && $oct_remarket_data['open_graph']) ? $this->document->getOCTOpenGraph() : [];
			

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		
			$data['language'] = (isset($oct_remarket_data['header_lang']) && $oct_remarket_data['header_lang']) ? $this->load->controller('common/language') : false;
			
		
			$data['currency'] = (isset($oct_remarket_data['header_cur']) && $oct_remarket_data['header_cur']) ? $this->load->controller('common/currency') : false;
			
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		
			if (isset($oct_remarket_data['megamenu']['status']) && $oct_remarket_data['megamenu']['status']) {
				$data['menu'] = $this->load->controller('octemplates/menu/oct_menu');
			} else {
				$data['menu'] = $this->load->controller('common/menu');
			}
			

		return $this->load->view('common/header', $data);
	}
}
