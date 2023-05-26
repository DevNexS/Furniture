<?php
/********************************************************/
/*	@copyright	OCTemplates 2015-2022					*/
/*	@support	https://octemplates.net/				*/
/*	@license	LICENSE.txt								*/
/********************************************************/

class ControllerOCTemplatesMenuOCTMenu extends Controller {
    public function getMenu() {
        $this->load->language('octemplates/theme/oct_remarket');

        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->load->model('octemplates/main/oct_settings');
            $this->load->model('tool/image');

            $data['menu_id'] = $menu_id = isset($this->request->get['menu_id']) ? $this->request->get['menu_id'] : 0;
            $data['oct_menu'] = $this->model_octemplates_main_oct_settings->getMenuItemsByMenuId($menu_id);

            $type = isset($this->request->get['type']) ? $this->request->get['type'] : (isset($data['oct_menu']['type']) ? $data['oct_menu']['type'] : '');

            $data['thumb'] = (isset($data['oct_menu']['settings']['image']) && !empty($data['oct_menu']['settings']['image']) && file_exists(DIR_IMAGE . $data['oct_menu']['settings']['image'])) ? $this->model_tool_image->resize($data['oct_menu']['settings']['image'], 50, 50) : $this->model_tool_image->resize('no-thumb.png', 50, 50);

            $data['placeholder'] = $this->model_tool_image->resize('no-thumb.png', 50, 50);

            if (!isset($data['oct_menu']['type']) || $data['oct_menu']['type'] != $type) {
                $data['oct_menu'] = [];
            }

            if ($type) {
                $fun_name = 'getMenu'.$type;

                $data['elements'] = $this->{$fun_name}();
            }

            if (isset($type) && $type) {
                $this->response->setOutput($this->load->view('octemplates/menu/oct_menu_'. $type , $data));
            }
        }
    }

    private function getMenuCategory() {
        $this->load->model('catalog/category');

        $categories = [];

        $filter_data = array(
            'sort'  => 'name',
            'order' => 'ASC',
            'start' => 0,
            'limit' => 100000
        );

        $results = $this->model_catalog_category->getCategories($filter_data);

        foreach ($results as $result) {
            $categories[] = [
                'category_id' => $result['category_id'],
                'name'        => $result['name']
            ];
        }

        return $categories;
    }

    private function getMenuManufacturer() {
        $this->load->model('catalog/manufacturer');

        $manufacturers = [];

		$filter_data = [
			'sort'  => 'name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 100000
		];

		$results = $this->model_catalog_manufacturer->getManufacturers($filter_data);

		foreach ($results as $result) {
			$manufacturers[] = array(
				'manufacturer_id' => $result['manufacturer_id'],
				'name'            => $result['name'],
			);
		}

        return $manufacturers;
    }

    private function getMenuOCT_BlogCategory() {
        $this->load->model('octemplates/blog/oct_blogcategory');

        $blog_categories = [];

		$filter_data = [
			'sort'  => 'name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 100000
		];

        $results = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories($filter_data);

		foreach ($results as $result) {
			$blog_categories[] = [
				'blogcategory_id' => $result['blogcategory_id'],
				'name'        => $result['name']
			];
		}

        return $blog_categories;
    }

    private function getMenuLink() {
        return;
    }
}
