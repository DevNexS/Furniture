<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesDesignOctSlideshowPlus extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/design/oct_slideshow_plus');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/design/oct_slideshow_plus');

        $this->getList();
    }

    public function add() {
        $this->load->language('octemplates/design/oct_slideshow_plus');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/design/oct_slideshow_plus');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_design_oct_slideshow_plus->addSlideshow($this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('octemplates/design/oct_slideshow_plus');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/design/oct_slideshow_plus');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_design_oct_slideshow_plus->editSlideshow($this->request->get['slideshow_id'], $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete() {
        $this->load->language('octemplates/design/oct_slideshow_plus');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/design/oct_slideshow_plus');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $slideshow_id) {
                $this->model_octemplates_design_oct_slideshow_plus->deleteSlideshow($slideshow_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList() {
	    $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'name';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs']   = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];

        $data['add']                 = $this->url->link('octemplates/design/oct_slideshow_plus/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete']              = $this->url->link('octemplates/design/oct_slideshow_plus/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['oct_slideshow_pluss'] = [];

        $filter_data = [
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        ];

        $oct_slideshow_plus_total = $this->model_octemplates_design_oct_slideshow_plus->getTotalSlideshows();
        $results                  = $this->model_octemplates_design_oct_slideshow_plus->getSlideshows($filter_data);

        foreach ($results as $result) {
            $data['oct_slideshow_pluss'][] = [
                'slideshow_id' => $result['slideshow_id'],
                'name' => $result['name'],
                'status' => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
                'edit' => $this->url->link('octemplates/design/oct_slideshow_plus/edit', 'user_token=' . $this->session->data['user_token'] . '&slideshow_id=' . $result['slideshow_id'] . $url, true)
            ];
        }

        $data['heading_title']   = $this->language->get('heading_title');
        $data['text_list']       = $this->language->get('text_list');
        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_confirm']    = $this->language->get('text_confirm');
        $data['column_name']     = $this->language->get('column_name');
        $data['column_status']   = $this->language->get('column_status');
        $data['column_action']   = $this->language->get('column_action');
        $data['button_add']      = $this->language->get('button_add');
        $data['button_edit']     = $this->language->get('button_edit');
        $data['button_delete']   = $this->language->get('button_delete');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array) $this->request->post['selected'];
        } else {
            $data['selected'] = [];
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_name']   = $this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
        $data['sort_status'] = $this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination          = new Pagination();
        $pagination->total   = $oct_slideshow_plus_total;
        $pagination->page    = $page;
        $pagination->limit   = $this->config->get('config_limit_admin');
        $pagination->url     = $this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}
		', true);

        $data['pagination']  = $pagination->render();
        $data['results']     = sprintf($this->language->get('text_pagination'), ($oct_slideshow_plus_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($oct_slideshow_plus_total - $this->config->get('config_limit_admin'))) ? $oct_slideshow_plus_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $oct_slideshow_plus_total, ceil($oct_slideshow_plus_total / $this->config->get('config_limit_admin')));

        $data['sort']        = $sort;
        $data['order']       = $order;
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/design/oct_slideshow_plus_list', $data));
    }

    protected function getForm() {
	    $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
  		$this->document->addScript('view/javascript/octemplates/oct_main.js');
  		$this->document->addStyle('view/stylesheet/oct_remarket.css');

  		//Add Spectrum
  		$this->document->addStyle('view/javascript/octemplates/spectrum/spectrum.css');
  		$this->document->addScript('view/javascript/octemplates/spectrum/spectrum.js');

        $data['text_form'] = !isset($this->request->get['slideshow_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['oct_slideshow_plus_image'])) {
            $data['error_oct_slideshow_plus_image'] = $this->error['oct_slideshow_plus_image'];
        } else {
            $data['error_oct_slideshow_plus_image'] = [];
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs']   = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];

        if (!isset($this->request->get['slideshow_id'])) {
            $data['action'] = $this->url->link('octemplates/design/oct_slideshow_plus/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('octemplates/design/oct_slideshow_plus/edit', 'user_token=' . $this->session->data['user_token'] . '&slideshow_id=' . $this->request->get['slideshow_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('octemplates/design/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['slideshow_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $oct_slideshow_plus_info = $this->model_octemplates_design_oct_slideshow_plus->getSlideshow($this->request->get['slideshow_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } else if (!empty($oct_slideshow_plus_info)) {
            $data['name'] = $oct_slideshow_plus_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['status_additional_banners'])) {
            $data['status_additional_banners'] = $this->request->post['status_additional_banners'];
        } else if (!empty($oct_slideshow_plus_info)) {
            $data['status_additional_banners'] = $oct_slideshow_plus_info['status_additional_banners'];
        } else {
            $data['status_additional_banners'] = 1;
        }

        if (isset($this->request->post['position_banners'])) {
            $data['position_banners'] = $this->request->post['position_banners'];
        } else if (!empty($oct_slideshow_plus_info)) {
            $data['position_banners'] = $oct_slideshow_plus_info['position_banners'];
        } else {
            $data['position_banners'] = 1;
        }

        if (isset($this->request->post['timer_view'])) {
            $data['timer_view'] = $this->request->post['timer_view'];
        } else if (!empty($oct_slideshow_plus_info) && isset($oct_slideshow_plus_info['timer_view'])) {
            $data['timer_view'] = $oct_slideshow_plus_info['timer_view'];
        } else {
            $data['timer_view'] = 1;
        }

        if (isset($this->request->post['full'])) {
            $data['full'] = $this->request->post['full'];
        } else if (!empty($oct_slideshow_plus_info) && isset($oct_slideshow_plus_info['full'])) {
            $data['full'] = $oct_slideshow_plus_info['full'];
        } else {
            $data['full'] = 0;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } else if (!empty($oct_slideshow_plus_info)) {
            $data['status'] = $oct_slideshow_plus_info['status'];
        } else {
            $data['status'] = true;
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $this->load->model('tool/image');

        if (isset($this->request->post['oct_slideshow_plus_image']) && isset($this->request->post['oct_discount_products'])) {
            $oct_slideshow_plus_images = $this->request->post['oct_slideshow_plus_image'];
			$products = $this->request->post['oct_discount_products'];
		} else if (isset($this->request->get['slideshow_id'])) {
            $oct_slideshow_plus_images = $this->model_octemplates_design_oct_slideshow_plus->getSlideshowImages($this->request->get['slideshow_id']);
            $products = $this->model_octemplates_design_oct_slideshow_plus->getDiscountProduct($this->request->get['slideshow_id']);
        } else {
            $oct_slideshow_plus_images = [];
            $products = [];
        }

        $this->load->model('catalog/product');

        $data['products'] = [];

        if ($products) {
            foreach ($products as $product_id) {
                $product_info = $this->model_catalog_product->getProduct($product_id);

                if ($product_info) {
                    $data['products'][] = [
                        'product_id' => $product_info['product_id'],
                        'name' => $product_info['name']
                    ];
                }
            }
        }

        $data['oct_slideshow_plus_images'] = [];

		$data['oct_default_colors'] = [
			'background_color' => 'rgb(255, 255, 255)',
			'title_color' => 'rgb(39, 35, 35)',
			'text_color' => 'rgb(101, 108, 125)',
			'button_color' => 'rgb(39, 35, 35)',
			'button_background' => 'rgb(233, 233, 233)',
			'button_color_hover' => 'rgb(255, 255, 255)',
			'button_background_hover' => 'rgb(251, 145, 48)'
		];

        foreach ($oct_slideshow_plus_images as $key=>$oct_slideshow_plus_image) {
            $key++;

            $image = $thumb = $mobile_image = $mobile_thumb = [];

            foreach ($oct_slideshow_plus_image['image'] as $lang_id => $img) {
                if (is_file(DIR_IMAGE . $img)) {
                    $image[$lang_id] = $img;
                    $thumb[$lang_id] = $this->model_tool_image->resize($img, 100, 100);
                } else {
                    $image[$lang_id] = '';
                    $thumb[$lang_id] = $this->model_tool_image->resize('no_image.png', 100, 100);
                }
            }

            foreach ($oct_slideshow_plus_image['mobile_image'] as $lang_id => $img_mobile) {
                if (is_file(DIR_IMAGE . $img_mobile)) {
                    $mobile_image[$lang_id] = $img_mobile;
                    $mobile_thumb[$lang_id] = $this->model_tool_image->resize($img_mobile, 100, 100);
                } else {
                    $mobile_image[$lang_id] = '';
                    $mobile_thumb[$lang_id] = $this->model_tool_image->resize('no_image.png', 100, 100);
                }
            }

            $data['oct_slideshow_plus_images'][] = [
                'oct_slideshow_plus_image_description' => $oct_slideshow_plus_image['oct_slideshow_plus_image_description'],
                'title' => (isset($oct_slideshow_plus_image['oct_slideshow_plus_image_description'][(int)$this->config->get('config_language_id')]['title']) && !empty($oct_slideshow_plus_image['oct_slideshow_plus_image_description'][(int)$this->config->get('config_language_id')]['title'])) ? $oct_slideshow_plus_image['oct_slideshow_plus_image_description'][(int)$this->config->get('config_language_id')]['title'] : $this->language->get('text_banner_title') . $key,
                'image' => $image,
                'thumb' => $thumb,
                'mobile_image' => $mobile_image,
                'mobile_thumb' => $mobile_thumb,
                'background_color' => $oct_slideshow_plus_image['background_color'] ? $oct_slideshow_plus_image['background_color'] : $data['oct_default_colors']['background_color'],
                'title_color' => $oct_slideshow_plus_image['title_color'] ? $oct_slideshow_plus_image['title_color'] : $data['oct_default_colors']['title_color'],
                'text_color' => $oct_slideshow_plus_image['text_color'] ? $oct_slideshow_plus_image['text_color'] : $data['oct_default_colors']['text_color'],
                'button_color' => $oct_slideshow_plus_image['button_color'] ? $oct_slideshow_plus_image['button_color'] : $data['oct_default_colors']['button_color'],
                'button_background' => $oct_slideshow_plus_image['button_background'] ? $oct_slideshow_plus_image['button_background'] : $data['oct_default_colors']['button_background'],
                'button_color_hover' => $oct_slideshow_plus_image['button_color_hover'] ? $oct_slideshow_plus_image['button_color_hover'] : $data['oct_default_colors']['button_color_hover'],
                'button_background_hover' => $oct_slideshow_plus_image['button_background_hover'] ? $oct_slideshow_plus_image['button_background_hover'] : $data['oct_default_colors']['button_background_hover'],
                'sort_order' => $oct_slideshow_plus_image['sort_order']
            ];
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/design/oct_slideshow_plus_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'octemplates/design/oct_slideshow_plus')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (isset($this->request->post['oct_slideshow_plus_image'])) {
            foreach ($this->request->post['oct_slideshow_plus_image'] as $slideshow_image_id => $oct_slideshow_plus_image) {
                foreach ($oct_slideshow_plus_image['oct_slideshow_plus_image_description'] as $language_id => $oct_slideshow_plus_image_description) {
                    if (((utf8_strlen($oct_slideshow_plus_image_description['title']) < 2) || (utf8_strlen($oct_slideshow_plus_image_description['title']) > 64)) && !isset($this->request->post['full'])) {
                        $this->error['oct_slideshow_plus_image'][$slideshow_image_id][$language_id] = $this->language->get('error_title');
                    }
                }
            }
        }

        return !$this->error;
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'octemplates/design/oct_slideshow_plus')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
