<?php
/**********************************************************/
/*	@copyright	OCTemplates 2019-2022					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerExtensionModuleOctCategoryWall extends Controller {
    public function index($setting) {
	    static $module = 0;

        $this->load->language('octemplates/module/oct_category_wall');

        $data['heading_title'] = $setting['heading'][$this->session->data['language']];
        $data['text_see_more'] = $this->language->get('text_see_more');

        $data['position'] = isset($setting['position']) ? $setting['position'] : '';
        $data['limit']    = $setting['limit'];

        $this->load->model('catalog/category');
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

        $data['categories'] = [];
        $categories_wall = [];

        if (isset($setting['module_categories']) && $setting['module_categories']) {
	        if(isset($this->request->server['HTTP_ACCEPT']) && strpos($this->request->server['HTTP_ACCEPT'], 'webp')) {
				$oct_webP = 1 . '-' . $this->session->data['currency'];
			} else {
				$oct_webP = 0 . '-' . $this->session->data['currency'];
			}

	        $categories_wall = $this->cache->get('octemplates.category_wall.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . md5(json_encode($setting)) . '.' . $oct_webP);

			if (!$categories_wall) {
				$filter_data = [
					'categories_id' => is_array($setting['module_categories']) ? $setting['module_categories'] : [],
					'sort' => (isset($setting['sort']) && !empty($setting['sort'])) ? $setting['sort'] : 'c.sort_order'
				];

				$categories_info = $this->model_catalog_category->getOCTCategories(0, 0, $filter_data);

	            foreach ($categories_info as $category_info) {
	                if (isset($setting['show_image']) && $setting['show_image'] == 'on') {
	                    if ($category_info['image'] && file_exists(DIR_IMAGE.$category_info['image'])) {
	                        $category_image = $this->model_tool_image->resize($category_info['image'], $setting['width'], $setting['height']);
	                    } else {
	                        $category_image = $this->model_tool_image->resize('no-thumb.png', $setting['width'], $setting['height']);
	                    }
                    } else {
	                    $category_image = false;
                    }

                    $sub_categories = [];

                    if (isset($setting['show_sub_categories']) && $setting['show_sub_categories'] == 'on') {
	                    $filter_data = [
		                    'category_id' => $category_info['category_id'],
							'sort' => (isset($setting['sort']) && !empty($setting['sort'])) ? $setting['sort'] : 'c.sort_order',
							'limit' => $data['limit']
						];

                        $category_children = $this->model_catalog_category->getOCTCategories($category_info['category_id'], $data['limit'], $filter_data);

                        foreach ($category_children as $child) {
                            $sub_categories[] = [
                                'name' => $child['name'],
                                'href' => $this->url->link('product/category', 'path=' . $category_info['category_id'] . '_' . $child['category_id'])
                            ];
                        }
                    }

                    $categories_wall[] = [
                        'category_id'   => $category_info['category_id'],
                        'sort_order'    => $category_info['sort_order'],
                        'thumb'         => $category_image,
                        'width'         => $setting['width'],
                        'height'        => $setting['height'],
                        'name'          => $category_info['name'],
                        'children'      => $sub_categories,
                        'href'          => $this->url->link('product/category', 'path=' . $category_info['category_id'])
                    ];
	            }

	            $this->cache->set('octemplates.category_wall.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . md5(json_encode($setting)) . '.' . $oct_webP, $categories_wall);
	        }

            $data['categories'] = $categories_wall;

			$data['module'] = $module++;

            return $this->load->view('octemplates/module/oct_category_wall', $data);
        }
    }
}
