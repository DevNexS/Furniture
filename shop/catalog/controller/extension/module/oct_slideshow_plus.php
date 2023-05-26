<?php
/**************************************************************/
/*	@copyright	OCTemplates 2016-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerExtensionModuleOctSlideshowPlus extends Controller {
	public function index($setting) {

		if ($this->registry->has('oct_mobiledetect')) {
			if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet()) {
				$data['oct_isMobile'] = $this->oct_mobiledetect->isMobile();
			}

			if ($this->oct_mobiledetect->isTablet()) {
				$data['oct_isTablet'] = $this->oct_mobiledetect->isTablet();
			}
		}

		static $module = 0;

		$this->load->model('octemplates/module/oct_slideshow_plus');
		$this->load->model('tool/image');

		$data['oct_lazyload'] = false;

		$data['oct_lazy_image'] = $this->model_tool_image->resize($this->config->get('theme_oct_remarket_lazyload_image') ? $this->config->get('theme_oct_remarket_lazyload_image') : 'catalog/remarket/lazy-image.svg', 30, 30);

		if ($this->registry->has('oct_mobiledetect')) {
			if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet() && $this->config->get('theme_oct_remarket_lazyload_mobile')) {
				$data['oct_lazyload'] = true;
			} elseif ($this->oct_mobiledetect->isTablet() && $this->config->get('theme_oct_remarket_lazyload_tablet')) {
				$data['oct_lazyload'] = true;
			} elseif ($this->config->get('theme_oct_remarket_lazyload_desktop')) {
				$data['oct_lazyload'] = true;
			}
		} elseif ($this->config->get('theme_oct_remarket_lazyload_desktop')) {
			$data['oct_lazyload'] = true;
		}

		$this->document->addScript('catalog/view/theme/oct_remarket/js/slick/slick.min.js');
		$this->document->addStyle('catalog/view/theme/oct_remarket/js/slick/slick.min.css');

		$data['oct_slideshows_plus'] = [];

		$results = $this->model_octemplates_module_oct_slideshow_plus->getSlideshow($setting['slideshow_id']);

		$server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

		foreach ($results as $key => $result) {

			$image = json_decode($result['image'], true);

			if (isset($image[(int)$this->config->get('config_language_id')]) && is_file(DIR_IMAGE.$image[(int)$this->config->get('config_language_id')])) {
				$data['status_additional_banners']	= $result['status_additional_banners'];
				$data['position_banners']			= $result['position_banners'];
				$data['timer_view']					= $result['timer_view'];
				$data['full_img']					= $result['full'];

				if (isset($setting['preload_img']) && $setting['preload_img'] && $key == 0) {
					$this->document->setOCTPreload($this->model_tool_image->resize($image[(int)$this->config->get('config_language_id')], $setting['width'], $setting['height']));
				}

				$mobile_image = json_decode($result['mobile_image'], true);

				if ($data['full_img'] && isset($image[(int)$this->config->get('config_language_id')])) {
					$image_info = @getimagesize(DIR_IMAGE . $image[(int)$this->config->get('config_language_id')]);
					$image_width = $image_info[0];
					$image_height = $image_info[1];
				}

				if ($data['full_img'] && isset($mobile_image[(int)$this->config->get('config_language_id')])) {
					$mobile_image_info = @getimagesize(DIR_IMAGE . $mobile_image[(int)$this->config->get('config_language_id')]);
					$mobile_image_width = $mobile_image_info[0];
					$mobile_image_height = $mobile_image_info[1];
				}

				$data['oct_slideshows_plus'][] = [
					'title'                  => $result['title'],
					'button'                 => $result['button'],
					'link'                   => ($result['link'] == '#' or empty($result['link'])) ? 'javascript:;' : $result['link'],
					'background_color'       => $result['background_color'],
					'title_color'            => $result['title_color'],
					'text_color'             => $result['text_color'],
					'button_color'           => $result['button_color'],
					'button_background'      => $result['button_background'],
					'button_color_hover'     => $result['button_color_hover'],
					'button_background_hover' => $result['button_background_hover'],
					'description'            => html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'),
					'image'                  => ($data['full_img'] && isset($image_width) && isset($image_height)) ? $this->model_tool_image->resize($image[(int)$this->config->get('config_language_id')], $image_width, $image_height) : $this->model_tool_image->resize($image[(int)$this->config->get('config_language_id')], $setting['width'], $setting['height']),
					'image_width'			 => isset($image_width) ? $image_width : $setting['width'],
					'image_height'			 => isset($image_height) ? $image_height : $setting['height'],
					'mobile_image'           => ($data['full_img'] && isset($mobile_image_width) && isset($mobile_image_height)) ? $this->model_tool_image->resize($mobile_image[(int)$this->config->get('config_language_id')], $mobile_image_width, $mobile_image_height) : false,
					'mobile_width'			 => isset($mobile_image_width) ? $mobile_image_width : false,
					'mobile_height'			 => isset($mobile_image_height) ? $mobile_image_height : false,
				];
			}
		}

		$products_data = $this->model_octemplates_module_oct_slideshow_plus->getSlideshowProduct($setting['slideshow_id']);

		$data['paginations_status'] = isset($setting['paginations_status']) && $setting['paginations_status'] ? true : false;

		if ($products_data) {
			$this->load->model('catalog/product');

			foreach ($products_data as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['dop_width'], $setting['dop_height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['dop_width'], $setting['dop_height']);
					}

					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$product_price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$product_price = false;
					}

					if ((float) $product_info['special']) {
						$ptoduct_special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$ptoduct_special = false;
					}

					$can_buy = true;

					if ($product_info['quantity'] <= 0 && !$this->config->get('config_stock_checkout')) {
						$can_buy = false;
					} elseif ($product_info['quantity'] <= 0 && $this->config->get('config_stock_checkout')) {
						$can_buy = true;
					}

					$oct_grayscale = ($this->config->get('theme_oct_remarket_no_quantity_grayscale') && !$can_buy) ? true : false;

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}

					$data['products'][] = [
						'you_save'		=> $product_info['you_save'],
						'can_buy'		=> $can_buy,
						'oct_grayscale' => $oct_grayscale,
						'width'			=> $setting['dop_width'],
						'height'		=> $setting['dop_height'],
						'tax'			=> $tax,
						'rating'		=> $rating,
						'reviews'		=> $product_info['reviews'],
						'product_id'	=> $product_info['product_id'],
						'sort_order'	=> $product_info['sort_order'],
						'thumb'			=> $image,
						'name'			=> $product_info['name'],
						'price'			=> $product_price,
						'special'		=> $ptoduct_special,
						'href'			=> $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					];
				}
			}
		}

		$data['module'] = $module++;

		$data['slideshow_id'] = $setting['slideshow_id'];

		return $this->load->view('octemplates/module/oct_slideshow_plus', $data);
	}
}
