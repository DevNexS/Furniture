<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support		https://octemplates.net/			  */
/*	@license		LICENSE.txt							  */
/**********************************************************/

class ControllerExtensionModuleOctProductViews extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_product_views');

        $this->document->setTitle($this->language->get('heading_title'));
        $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->load->model('setting/module');
        	$this->load->model('localisation/language');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('oct_product_views', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->cache->delete('product');

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

		$errors = [
	        'warning',
	        'name',
	        'heading',
	        'width',
	        'height'
        ];

		foreach ($errors as $error) {
			if (isset($this->error[$error])) {
	            $data['error_'. $error] = $this->error[$error];
	        } else {
	            $data['error_'. $error] = '';
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
				'href' => $this->url->link('extension/module/oct_product_views', 'user_token=' . $this->session->data['user_token'], true)
			];
		} else {
			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/oct_product_views', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			];
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/oct_product_views', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/oct_product_views', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

        if (isset($this->request->post['limit'])) {
            $data['limit'] = $this->request->post['limit'];
        } elseif (!empty($module_info)) {
            $data['limit'] = $module_info['limit'];
        } else {
            $data['limit'] = 8;
        }

        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($module_info)) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = 200;
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($module_info)) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = 200;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info) && isset($module_info['status'])) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($this->request->post['show_type'])) {
            $data['show_type'] = $this->request->post['show_type'];
        } elseif (!empty($module_info) && isset($module_info['show_type'])) {
            $data['show_type'] = $module_info['show_type'];
        } else {
            $data['show_type'] = '';
        }

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_product_views', $data));
    }

	public function install() {
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/oct_product_views');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/oct_product_views');
	}

	public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/module/oct_product_views');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/module/oct_product_views');

	    $this->model_setting_setting->deleteSetting('oct_product_views');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/oct_product_views')) {
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

        if (is_array($this->request->post['heading'])) {
            foreach ($this->request->post['heading'] as $language_id => $heading) {
                if ((utf8_strlen($heading) < 3) || (utf8_strlen($heading) > 64)) {
                    $this->error['heading'][$language_id] = $this->language->get('error_heading');
                    $this->error['warning']                 = $this->language->get('error_heading');
                }
            }
        }

        return !$this->error;
    }
}
