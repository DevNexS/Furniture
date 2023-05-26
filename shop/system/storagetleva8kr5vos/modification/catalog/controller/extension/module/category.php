<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/category');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}


			if (isset($parts[2])) {
				$data['ch_id'] = $parts[2];
			} else {
				$data['ch_id'] = 0;
			}
			
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

			$data['position'] = isset($setting['position']) ? $setting['position'] : '';
			

		$data['categories'] = array();


			if(isset($this->request->server['HTTP_ACCEPT']) && strpos($this->request->server['HTTP_ACCEPT'], 'webp')) {
				$oct_webP = 1 . '-' . $this->session->data['currency'];
			} else {
				$oct_webP = 0 . '-' . $this->session->data['currency'];
			}

			$result_all_categories = $this->cache->get('octemplates.module_category.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . $oct_webP);

			if (!$result_all_categories) {
			
		$categories = $this->model_catalog_category->getCategories(0);

			$result_all_categories = [];
			

		foreach ($categories as $category) {
			$children_data = array();

			
			$oct_full_view = true;

			if ($oct_full_view) {
			
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

					
			if ($this->registry->has('oct_mobiledetect')) {
				$data['oct_detect'] = ($this->oct_mobiledetect->isMobile() || $this->oct_mobiledetect->isTablet()) ? true : false;
			}
			
			// Level 3
			$children_data_2 = [];
			$children_2 = $this->model_catalog_category->getCategories($child['category_id']);

			foreach ($children_2 as $child_2) {
				$filter_data2 = [
					'filter_category_id'  => $child_2['category_id'],
					'filter_sub_category' => true
				];

				/*
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
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_2['category_id'] . '_' . $child_3['category_id'])
					];
				}
				*/

				$children_data_2[] = [
					//'children' => $children_data_3,
					'category_id' => $child_2['category_id'],
					'name'  => $child_2['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data2) . ')' : ''),
					'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $child_2['category_id'])
				];
			}

			$children_data[] = array(
				'children' => $children_data_2,
			
						'category_id' => $child['category_id'],
						'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}
			}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}


				$result_all_categories = $data['categories'];

				$this->cache->set('octemplates.module_category.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $this->config->get('config_customer_group_id') . '.' . $oct_webP, $result_all_categories);
			}

			$data['categories'] = $result_all_categories;
			
		return $this->load->view('extension/module/category', $data);
	}
}