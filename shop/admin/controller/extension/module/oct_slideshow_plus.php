<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerExtensionModuleOctSlideshowPlus extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/module/oct_slideshow_plus');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('oct_slideshow_plus', $this->request->post);
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

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}

		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
		}

		if (isset($this->error['dop_width'])) {
			$data['error_dop_width'] = $this->error['dop_width'];
		} else {
			$data['error_dop_width'] = '';
		}

		if (isset($this->error['dop_height'])) {
			$data['error_dop_height'] = $this->error['dop_height'];
		} else {
			$data['error_dop_height'] = '';
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
				'href' => $this->url->link('extension/module/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'], true)
			];
		} else {
			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			];
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/oct_slideshow_plus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

		if (isset($this->request->post['slideshow_id'])) {
			$data['slideshow_id'] = $this->request->post['slideshow_id'];
		} elseif (!empty($module_info)) {
			$data['slideshow_id'] = $module_info['slideshow_id'];
		} else {
			$data['slideshow_id'] = '';
		}

		$this->load->model('octemplates/design/oct_slideshow_plus');

		$data['slideshows_plus'] = $this->model_octemplates_design_oct_slideshow_plus->getSlideshows();

		if (isset($this->request->post['paginations_status'])) {
			$data['paginations_status'] = $this->request->post['paginations_status'];
		} elseif (!empty($module_info)) {
			$data['paginations_status'] = isset($module_info['paginations_status']) ? $module_info['paginations_status'] : '';
		} else {
			$data['paginations_status'] = '';
		}

		if (isset($this->request->post['preload_img'])) {
			$data['preload_img'] = $this->request->post['preload_img'];
		} elseif (!empty($module_info)) {
			$data['preload_img'] = isset($module_info['preload_img']) ? $module_info['preload_img'] : '';
		} else {
			$data['preload_img'] = '';
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = isset($module_info['width']) ? $module_info['width'] : '';
		} else {
			$data['width'] = '300';
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = isset($module_info['height']) ? $module_info['height'] : '';
		} else {
			$data['height'] = '300';
		}

		if (isset($this->request->post['dop_width'])) {
			$data['dop_width'] = $this->request->post['dop_width'];
		} elseif (!empty($module_info)) {
			$data['dop_width'] = isset($module_info['dop_width']) ? $module_info['dop_width'] : '';
		} else {
			$data['dop_width'] = '255';
		}

		if (isset($this->request->post['dop_height'])) {
			$data['dop_height'] = $this->request->post['dop_height'];
		} elseif (!empty($module_info)) {
			$data['dop_height'] = isset($module_info['dop_height']) ? $module_info['dop_height'] : '';
		} else {
			$data['dop_height'] = '190';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = isset($module_info['status']) ? $module_info['status'] : '';
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_slideshow_plus', $data));
	}

	public function install() {
		$this->load->model('octemplates/design/oct_slideshow_plus');
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/oct_slideshow_plus');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/oct_slideshow_plus');

		$this->model_octemplates_design_oct_slideshow_plus->createDBTables();
	}

	public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/module/oct_slideshow_plus');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/module/oct_slideshow_plus');

	    $this->model_setting_setting->deleteSetting('oct_slideshow_plus');
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/oct_slideshow_plus')) {
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

		if (!$this->request->post['dop_width']) {
			$this->error['dop_width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['dop_height']) {
			$this->error['dop_height'] = $this->language->get('error_height');
		}

		return !$this->error;
	}
}
