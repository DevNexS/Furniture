<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022							  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerExtensionModuleOctCategoryWall extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_category_wall');

        $this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

        $this->load->model('setting/module');
        $this->load->model('localisation/language');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('oct_category_wall', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

		$errors = [
			'warning',
			'name',
			'heading',
			'width',
			'height',
			'limit',
		];

		foreach ($errors as $error) {
			if (isset($this->error[$error])) {
	            $data['error_' . $error] = $this->error[$error];
	        } else {
	            $data['error_' . $error] = '';
	        }
		}

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        ];

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/oct_category_wall', 'user_token=' . $this->session->data['user_token'], true)
            ];
        } else {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/oct_category_wall', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            ];
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/oct_category_wall', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/oct_category_wall', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['heading'])) {
            $data['heading'] = $this->request->post['heading'];
        } elseif (!empty($module_info)) {
            $data['heading'] = $module_info['heading'];
        } else {
            $data['heading'] = [];
        }

        $this->load->model('catalog/category');

        $filter_data = [
			'sort'        => 'name',
			'order'       => 'ASC'
		];

        $data['categories'] = $this->model_catalog_category->getCategories($filter_data);

        if (isset($this->request->post['module_categories'])) {
            $data['module_categories'] = $this->request->post['module_categories'];
        } elseif (!empty($module_info)) {
            $data['module_categories'] = (isset($module_info['module_categories'])) ? $module_info['module_categories'] : [];
        } else {
            $data['module_categories'] = [];
        }

        if (isset($this->request->post['limit'])) {
            $data['limit'] = $this->request->post['limit'];
        } elseif (!empty($module_info)) {
            $data['limit'] = $module_info['limit'];
        } else {
            $data['limit'] = 5;
        }

        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($module_info)) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = 95;
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($module_info)) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = 95;
        }

        if (isset($this->request->post['show_image'])) {
            $data['show_image'] = $this->request->post['show_image'];
        } elseif (!empty($module_info) && isset($module_info['show_image'])) {
            $data['show_image'] = $module_info['show_image'];
        } else {
            $data['show_image'] = '';
        }

        if (isset($this->request->post['show_sub_categories'])) {
            $data['show_sub_categories'] = $this->request->post['show_sub_categories'];
        } elseif (!empty($module_info) && isset($module_info['show_sub_categories'])) {
            $data['show_sub_categories'] = $module_info['show_sub_categories'];
        } else {
            $data['show_sub_categories'] = '';
        }

        if (isset($this->request->post['sort'])) {
            $data['sort'] = $this->request->post['sort'];
        } elseif (!empty($module_info) && isset($module_info['sort'])) {
            $data['sort'] = $module_info['sort'];
        } else {
            $data['sort'] = 'c.sort_order';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info) && isset($module_info['status'])) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = 0;
        }

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_category_wall', $data));
    }

	public function install() {
	    $this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/oct_category_wall');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/oct_category_wall');
    }

	public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/module/oct_category_wall');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/module/oct_category_wall');

	    $this->model_setting_setting->deleteSetting('oct_category_wall');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/oct_category_wall')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!$this->request->post['width']) {
            $this->error['width'] = $this->language->get('error_width');
        }

        if (!$this->request->post['height']) {
            $this->error['height'] = $this->language->get('error_height');
        }

        if (!$this->request->post['limit']) {
            $this->error['limit'] = $this->language->get('error_limit');
        }

        if (is_array($this->request->post['heading'])) {
            foreach ($this->request->post['heading'] as $language_code => $heading) {
                if ((utf8_strlen($heading) < 1) || (utf8_strlen($heading) > 255)) {
                    $this->error['heading'][$language_code] = $this->language->get('error_heading');
                }
            }
        }

        return !$this->error;
    }
}
