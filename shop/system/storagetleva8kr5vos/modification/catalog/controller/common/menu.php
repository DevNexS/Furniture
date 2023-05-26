<?php
class ControllerCommonMenu extends Controller {
	
			public function index($data = []) {
				$data['language_id'] = (int)$this->config->get('config_language_id');

				$oct_remarket_data = $this->config->get('theme_oct_remarket_data');

				if (isset($data['oct_detect']) && $data['oct_detect']) {
			        $categories_icon = isset($oct_remarket_data['mobile_menu']['icon']) ? true : false;
			    } else {
					$categories_icon = isset($oct_remarket_data['megamenu']['icon']) ? true : false;
				}
			
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		
			if(isset($this->request->server['HTTP_ACCEPT']) && strpos($this->request->server['HTTP_ACCEPT'], 'webp')) {
				$oct_webP = 1 . '-' . $this->session->data['currency'];
			} else {
				$oct_webP = 0 . '-' . $this->session->data['currency'];
			}

			if (isset($data) && !empty($data) && (isset($data['mobile']) && $data['mobile'])) {
				$oct_webP = $oct_webP . "mobile";
			}

			$result_all_categories = $this->cache->get('octemplates.category_in_menu.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . $oct_webP);

			$oct_cats_limit = $this->config->get('oct_megamenu_categories_limit') ? $this->config->get('oct_megamenu_categories_limit') : 0;

			if (!$result_all_categories) {
				$categories = $this->model_catalog_category->getCategories(0);

				$result_all_categories = [];
			

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					
			// Level 3
			$children_data_2 = [];
			$children_2 = $this->model_catalog_category->getCategories($child['category_id']);

			foreach ($children_2 as $child_2) {
				$filter_data2 = [
					'filter_category_id'  => $child_2['category_id'],
					'filter_sub_category' => true
				];

				$children_3 = $this->model_catalog_category->getCategories($child_2['category_id']);

				$children_data_3 = [];

				foreach ($children_3 as $child_3) {
					$filter_data3 = [
						'filter_category_id'  => $child_3['category_id'],
						'filter_sub_category' => true
					];

					$children_data_3[] = [
						'category_id' => $child_3['category_id'],
						'name'  => $child_3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data3) . ')' : ''),
						'oct_pages' => isset($oct_remarket_data['megamenu']['page']) ? unserialize($child_3['page_group_links']) : [],
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_2['category_id'] . '_' . $child_3['category_id'])
					];
				}

				$children_data_2[] = [
					'children' => $children_data_3,
					'category_id' => $child_2['category_id'],
					'name'  => $child_2['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data2) . ')' : ''),
					'oct_pages' => isset($oct_remarket_data['megamenu']['page']) ? unserialize($child_2['page_group_links']) : [],
					'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_2['category_id'])
				];
			}

			$children_data[] = array(
				'children' => $children_data_2,
				'oct_pages' => isset($oct_remarket_data['megamenu']['page']) ? unserialize($child['page_group_links']) : [],
			
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1

			if ($categories_icon) {
				$this->load->model('tool/image');

				$oct_image = $this->model_tool_image->resize($category['oct_image'], 30, 30);
			} else {
				$oct_image = false;
			}
			
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					
			'column'   => 1,
			'oct_pages' => isset($oct_remarket_data['megamenu']['page']) ? unserialize($category['page_group_links']) : [],
			'oct_image'     => $oct_image,
			
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		
				$result_all_categories = $data['categories'];

				$this->cache->set('octemplates.category_in_menu.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . $oct_webP, $result_all_categories);
			}

			if ((count($result_all_categories) == $oct_cats_limit) && $oct_cats_limit) {
				$data['oct_all_categories'] = $this->url->link('octemplates/main/oct_functions/octallcategories', '', true);
			}

			$data['categories'] = $result_all_categories;

			return (isset($data['oct_detect']) && $data['oct_detect']) ? $data['categories'] : $this->load->view('common/menu', $data);
			
	}
}
