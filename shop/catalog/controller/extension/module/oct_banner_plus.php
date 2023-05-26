<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerExtensionModuleOctBannerPlus extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('octemplates/module/oct_banner_plus');

		$this->load->model('tool/image');

		$data['oct_banner_pluss'] = $results = [];

		$data['position'] = isset($setting['position']) ? $setting['position'] : '';

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

		if (isset($this->request->get['path'])) {
            $parts = explode('_', (string)$this->request->get['path']);
        } else {
            $parts = [];
        }

        $category_id = (int)array_pop($parts);

		if (isset($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];
            unset($setting['show_in_categories']);
        } else {
            $product_id = 0;
        }

        if (isset($setting['show_in_categories']) && $setting['show_in_categories']) {
            if (in_array($category_id, $setting['show_in_categories'])) {
                $results = $this->model_octemplates_module_oct_banner_plus->getBanner($setting['banner_id']);
            }
        } else {
            if (isset($setting['show_in_products']) && $setting['show_in_products']) {
	            if (in_array($product_id, $setting['show_in_products'])) {
	                $results = $this->model_octemplates_module_oct_banner_plus->getBanner($setting['banner_id']);
	            }
	        } else {
	            $results = $this->model_octemplates_module_oct_banner_plus->getBanner($setting['banner_id']);
	        }
        }

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE.$result['image'])) {
				$data['oct_banner_pluss'][] = [
					'title'              => $result['title'],
					'button'             => $result['button'],
					'link'               => ($result['link'] == '#' or empty($result['link'])) ? 'javascript:;' : $result['link'],
					'description'        => html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'),
					'image'              => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']),
					'width'				 => $setting['width'],
					'height'			 => $setting['height'],
					'background_color'   => $result['background_color'],
					'title_color'        => $result['title_color'],
					'text_color'         => $result['text_color'],
					'button_color'       => $result['button_color'],
					'button_background'  => $result['button_background'],
					'button_background_hover'  => $result['button_background_hover'],
					'button_text_hover'  => $result['button_text_hover'],
				];
			}
		}

		$data['module'] = $module++;

		return $this->load->view('octemplates/module/oct_banner_plus', $data);
	}
}
