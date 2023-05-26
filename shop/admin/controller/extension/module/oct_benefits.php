<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2020.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerExtensionModuleOCTBenefits extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('octemplates/module/oct_benefits');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');
        //Add Spectrum
		$this->document->addStyle('view/javascript/octemplates/spectrum/spectrum.css');
		$this->document->addScript('view/javascript/octemplates/spectrum/spectrum.js');

        $this->load->model('setting/module');
        $this->load->model('localisation/language');
		$this->load->model('catalog/information');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('oct_benefits', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/oct_benefits', 'user_token=' . $this->session->data['user_token'], true)
            ];
        } else {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/oct_benefits', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            ];
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/oct_benefits', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/oct_benefits', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['user_token'] = $this->session->data['user_token'];
        $data['language_id'] = (int)$this->config->get('config_language_id');
		$data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        $errors = [
            'warning',
            'name',
			'oct_benegits_data'
        ];

        foreach ($errors as $error) {
			if (isset($this->error[$error])) {
	            $data['error_'.$error] = $this->error[$error];
	        } else {
	            $data['error_'.$error] = '';
	        }
		}

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info) && isset($module_info['status'])) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = 1;
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info) && isset($module_info['name'])) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['oct_benegits_data'])) {
            $data['oct_benegits_data'] = $this->request->post['oct_benegits_data'];
        } elseif (!empty($module_info) && isset($module_info['oct_benegits_data'])) {
            $data['oct_benegits_data'] = $module_info['oct_benegits_data'];
        } else {
            $data['oct_benegits_data'] = [];
        }

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_benefits', $data));
	}

	public function install() {
		$this->load->model('user/user_group');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/oct_benefits');
	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/oct_benefits');
	}

    public function uninstall() {
        $this->load->model('setting/setting');
        $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/module/oct_benefits');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/module/oct_benefits');

        $this->model_setting_setting->deleteSetting('oct_benefits');
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/oct_benefits')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

		if (isset($this->request->post['oct_benegits_data'])) {
			foreach ($this->request->post['oct_benegits_data'] as $benegit_data_id => $oct_benegit_data) {
		    	foreach ($oct_benegit_data['title'] as $language_id => $oct_benegit_data_description) {
					if ((utf8_strlen($oct_benegit_data_description) < 2) || (utf8_strlen($oct_benegit_data_description) > 64)) {
						$this->error['oct_benegits_data'][$benegit_data_id]['title'][$language_id] = $this->language->get('error_title');
					}
				}

		    	foreach ($oct_benegit_data['text'] as $language_id => $oct_benegit_data_description) {
					if ((utf8_strlen($oct_benegit_data_description) < 2) || (utf8_strlen($oct_benegit_data_description) > 64)) {
						$this->error['oct_benegits_data'][$benegit_data_id]['text'][$language_id] = $this->language->get('error_text');
					}
				}

				if (empty($oct_benegit_data['icon'])) {
					$this->error['oct_benegits_data'][$benegit_data_id]['icon'] = $this->language->get('error_icon');
				}
			}
		}

		return !$this->error;
	}
}
