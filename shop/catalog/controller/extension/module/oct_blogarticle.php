<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerExtensionModuleOCTBlogArticle extends Controller {
	public function index($setting) {
		if (!$this->config->get('oct_blogsettings_status')) {
			return;
		}

		if ($this->registry->has('oct_mobiledetect')) {
			if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet()) {
				$data['oct_isMobile'] = $this->oct_mobiledetect->isMobile();
			}

			if ($this->oct_mobiledetect->isTablet()) {
				$data['oct_isTablet'] = $this->oct_mobiledetect->isTablet();
			}
		}

		static $module = 0;

		$this->load->language('octemplates/module/oct_blogarticle');

		$this->load->model('octemplates/blog/oct_blogarticle');
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

		$data['position'] = isset($setting['position']) ? $setting['position'] : '';
		$data['limit']    = $setting['limit'] ? $setting['limit'] : 8;

		$data['articles'] = [];

		$filter_data = array(
			'filter_blogcategory_id' => isset($setting['blog_categories']) && !empty($setting['blog_categories']) ? $setting['blog_categories'] : '',
			'sort'  => $setting['sort'],
			'order' => $setting['order'],
			'start' => 0,
			'limit' => $setting['limit'] ? $setting['limit'] : 8
		);

		$data['heading_title'] = (isset($setting['title'][(int)$this->config->get('config_language_id')]) && !empty($setting['title'][(int)$this->config->get('config_language_id')])) ? $setting['title'][(int)$this->config->get('config_language_id')] : $this->language->get('heading_title');

		$results = $this->model_octemplates_blog_oct_blogarticle->getArticles($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				$description = !empty(trim(strip_tags($result['shot_description']))) ? $result['shot_description'] : $result['description'];

				$data['articles'][] = array(
					'blogarticle_id'		=> $result['blogarticle_id'],
					'thumb'					=> $image,
					'width'					=> $setting['width'],
					'height'				=> $setting['height'],
					'name'					=> $result['name'],
					'description'			=> utf8_substr(trim(strip_tags(html_entity_decode($description, ENT_QUOTES, 'UTF-8'))), 0, $setting['limit_description']) . '..',
					'date_added'			=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'href'			        => $this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $result['blogarticle_id'])
				);
			}

			$data['module'] = $module++;

			if ($data['articles']) {
				return $this->load->view('octemplates/module/oct_blogarticle', $data);
			}
		}
	}
}
