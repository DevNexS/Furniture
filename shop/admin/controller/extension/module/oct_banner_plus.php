<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022							  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/
class ControllerExtensionModuleOctBannerPlus extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/module/oct_banner_plus');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->load->model('octemplates/design/oct_banner_plus');
		$this->load->model('setting/module');
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('oct_banner_plus', $this->request->post);
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

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		];

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/oct_banner_plus', 'user_token=' . $this->session->data['user_token'], true)
			];
		} else {
			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			];
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/oct_banner_plus', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

		if (isset($this->request->post['banner_id'])) {
			$data['banner_id'] = $this->request->post['banner_id'];
		} elseif (!empty($module_info)) {
			$data['banner_id'] = $module_info['banner_id'];
		} else {
			$data['banner_id'] = '';
		}

		$data['user_token'] = $this->session->data['user_token'];
		
		$filter_data = [
			'sort'        => 'name',
			'order'       => 'ASC'
		];

        $data['categories'] = $this->model_catalog_category->getCategories($filter_data);

        if (isset($this->request->post['show_in_categories'])) {
            $data['show_in_categories'] = $this->request->post['show_in_categories'];
        } elseif (!empty($module_info)) {
            $data['show_in_categories'] = (isset($module_info['show_in_categories'])) ? $module_info['show_in_categories'] : [];
        } else {
            $data['show_in_categories'] = [];
        }

		$data['products'] = [];

		if (!empty($this->request->post['show_in_products'])) {
			$products = $this->request->post['show_in_products'];
		} elseif (!empty($module_info['show_in_products'])) {
			$products = $module_info['show_in_products'];
		} else {
			$products = [];
		}

		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['products'][] = [
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				];
			}
		}

		$data['banners'] = $this->model_octemplates_design_oct_banner_plus->getBanners();

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = '';
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info) && isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_banner_plus', $data));
	}

	public function install() {
		$this->load->model('octemplates/design/oct_banner_plus');
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/oct_banner_plus');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/oct_banner_plus');

		$this->model_octemplates_design_oct_banner_plus->createDBTables();
	}

	public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/module/oct_banner_plus');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/module/oct_banner_plus');

	    $this->model_setting_setting->deleteSetting('oct_banner_plus');
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/oct_banner_plus')) {
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

		return !$this->error;
	}
}