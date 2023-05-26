<?php
/********************************************************/
/*	@copyright	OCTemplates 2015-2022					*/
/*	@support	https://octemplates.net/				*/
/*	@license	LICENSE.txt								*/
/********************************************************/

class ModelOCTemplatesMenuOCTMenu extends Controller {
    public function getOCTMenuItems($types) {
        $this->load->model('tool/image');

        $customer_group_id = ($this->customer->isLogged()) ? $this->customer->getGroupId() : $this->config->get('config_customer_group_id');

        $inType = $oct_items = [];

        foreach ($types as $key => $value) {
            if ($value) {
                $inType[] = "'". $this->db->escape($key) ."'";
            }
        }

        if ($inType) {
            $query = $this->db->query("
                SELECT * FROM `" . DB_PREFIX . "oct_menu` om
                LEFT JOIN `" . DB_PREFIX . "oct_menu_description` omd
                    ON (om.oct_menu_id = omd.oct_menu_id)
                LEFT JOIN `" . DB_PREFIX . "oct_menu_to_customer_group` omc
                    ON (om.oct_menu_id = omc.oct_menu_id)
                LEFT JOIN `" . DB_PREFIX . "oct_menu_to_store` oms
                    ON (om.oct_menu_id = oms.oct_menu_id)
                WHERE
                    om.status = '1'
                    AND om.type IN (". implode(',', $inType) .")
                    AND omc.customer_group_id = '" . (int)$customer_group_id . "'
            		AND oms.store_id = '" . (int)$this->config->get('config_store_id') . "'
            		AND omd.language_id = '" . (int)$this->config->get('config_language_id') . "'
                ORDER BY
            		om.sort_order ASC
            ");

            foreach ($query->rows as $oct_item) {
                $fn_name = "getMenuType". $oct_item['type'];

                $settings = json_decode($oct_item['settings'], true);

                $children = $this->{$fn_name}($settings);

                $oct_pages = isset($children['pages']) ? $children['pages'] : [];
                unset($children['pages']);

                $oct_items[] = [
                    'name' => $oct_item['title'],
                    'sort'     => $oct_item['sort_order'],
                    'type' => $oct_item['type'],
                    'view' => (isset($settings['view']) && $settings['view']) ? $settings['view'] : 0,
                    'column' => 1,
                    'target' => (isset($settings['target']) && $settings['target']) ? 'target="_blank"' : '',
                    'children' => $children ? $children : false,
                    'oct_pages' => $oct_pages,
                    'oct_image' => $settings['image'] ? $this->model_tool_image->resize($settings['image'], 50, 50) : false,
                    'width' => 50,
                    'height' => 50,
                    'href' => ($oct_item['link'] == "#" || empty($oct_item['link'])) ? "javascript:void(0);" : $oct_item['link']
                ];
            }
        }

        return $oct_items;
    }

    private function getMenuTypeCategory($settings) {
        $this->load->model('catalog/category');

        $oct_remarket_data = $this->config->get('theme_oct_remarket_data');

        $categories = $oct_pages = [];

        if (isset($settings['id']) && !empty($settings['id'])) {
            foreach ($settings['id'] as $category_id) {
                $result = $this->model_catalog_category->getCategory($category_id);

                $children_data = [];

                if (isset($oct_remarket_data['megamenu']['page']) && !empty($result['page_group_links'])) {
                    $oct_pages[] = unserialize($result['page_group_links']);
                }

                if (isset($settings['sub']) && $settings['sub']) {
                    $results = $this->model_catalog_category->getOCTCategories($category_id, $settings['limit']);

                    foreach ($results as $child) {
                        if (isset($oct_remarket_data['megamenu']['page']) && !empty($child['page_group_links'])) {
                            $oct_pages[] = unserialize($child['page_group_links']);
                        }

                        $children_data2 = [];
        				$children = $this->model_catalog_category->getCategories($child['category_id']);

                        foreach ($children as $ch) {
                            if ((isset($ch['name']) && !empty($ch['name'])) && (isset($ch['category_id']) && !empty($ch['category_id']))) {
                                $children_data2[] = [
                                    'name' => $ch['name'],
                                    'oct_pages' => (isset($oct_remarket_data['megamenu']['page']) && !empty($ch['page_group_links'])) ? unserialize($ch['page_group_links']) : [],
                                    'href' => $this->url->link('product/category', 'path=' . $ch['category_id'])
                                ];
                            }
                        }

                        if ((isset($child['name']) && !empty($child['name'])) && (isset($child['category_id']) && !empty($child['category_id']))) {
                            $children_data[] = [
                                'name' => $child['name'],
                                'children' => $children_data2,
                                'oct_pages' => (isset($oct_remarket_data['megamenu']['page']) && !empty($child['page_group_links'])) ? unserialize($child['page_group_links']) : [],
                                'href' => $this->url->link('product/category', 'path=' . $child['category_id'])
                            ];
                        }
                    }
                }

                if ((isset($result['name']) && !empty($result['name'])) && (isset($result['category_id']) && !empty($result['category_id']))) {
                    $categories[] = [
                        'name'     => $result['name'],
                        'sort' 	=> $result['sort_order'],
                        'children' => $children_data,
                        'oct_pages' => (isset($oct_remarket_data['megamenu']['page']) && !empty($result['page_group_links'])) ? unserialize($result['page_group_links']) : [],
                        'oct_image'=> (isset($settings['show_image']) && $settings['show_image']) ? $this->model_tool_image->resize($result['image'] ? $result['image'] : 'no-thumb.png', $settings['width'], $settings['height']) : false,
                        'width' => $settings['width'],
                        'height' => $settings['height'],
                        'href'     => $this->url->link('product/category', 'path=' . $result['category_id'])
                    ];
                }
            }
        }

        $sort = array();

        foreach ($categories as $key => $row) {
          $sort[$key]  = $row['sort'];
        }

        array_multisort($sort, SORT_ASC, $categories);

        $categories['pages'] = $oct_pages;

        return $categories;
    }

    private function getMenuTypeManufacturer($settings) {
        $this->load->model('catalog/manufacturer');
        $manufacturers = [];

        if (isset($settings['id']) && !empty($settings['id'])) {
            foreach ($settings['id'] as $manufacturer_id) {
                $result = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);

                if ((isset($result['name']) && !empty($result['name'])) && (isset($result['manufacturer_id']) && !empty($result['manufacturer_id']))) {
                    $manufacturers[] = [
                        'name'     => $result['name'],
                        'oct_image'=> (isset($settings['show_image']) && $settings['show_image']) ? $this->model_tool_image->resize($result['image'] ? $result['image'] : 'no-thumb.png', $settings['width'], $settings['height']) : false,
                        'width' => $settings['width'],
                        'height' => $settings['height'],
                        'oct_pages' => [],
                        'href'     => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
                    ];
                }
            }
        }

        return $manufacturers;
    }

    private function getMenuTypeOCT_BlogCategory($settings) {
        $this->load->model('octemplates/blog/oct_blogcategory');

        $blogs = [];

        if (isset($settings['id']) && !empty($settings['id'])) {
            foreach ($settings['id'] as $path_id) {
                $result = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($path_id);

                $children_data = [];

                if (isset($settings['sub']) && $settings['sub']) {
                    $results = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories($path_id);

                    foreach ($results as $child) {
                        if ((isset($child['name']) && !empty($child['name'])) && (isset($child['blogcategory_id']) && !empty($child['blogcategory_id']))) {
                            $children_data[] = [
                                'name' => $child['name'],
                                'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $result['blogcategory_id'] . '_' . $child['blogcategory_id'] )
                            ];
                        }
                    }
                }

                if ((isset($result['name']) && !empty($result['name'])) && (isset($result['blogcategory_id']) && !empty($result['blogcategory_id']))) {
                    $blogs[] = [
                        'name'     => $result['name'],
                        'children' => $children_data,
                        'oct_image'=> (isset($settings['show_image']) && $settings['show_image']) ? $this->model_tool_image->resize($result['image'] ? $result['image'] : 'no-thumb.png', $settings['width'], $settings['height']) : false,
                        'width' => $settings['width'],
                        'height' => $settings['height'],
                        'oct_pages' => [],
                        'href'     => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $result['blogcategory_id'])
                    ];
                }
            }
        }

        return $blogs;
    }

    private function getMenuTypeLink($settings) {
        return [];
    }
}
