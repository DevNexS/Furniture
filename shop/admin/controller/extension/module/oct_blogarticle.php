<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerExtensionModuleOCTBlogArticle extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/module/oct_blogarticle');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->load->model('setting/module');
		$this->load->model('localisation/language');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('oct_blogarticle', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->cache->delete('oct_blog_articles');

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

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = [];
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
				'href' => $this->url->link('extension/module/oct_blogarticle', 'user_token=' . $this->session->data['user_token'], true)
			];
		} else {
			$data['breadcrumbs'][] = [
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			];
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/oct_blogarticle', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['user_token'] = $this->session->data['user_token'];

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

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($module_info)) {
			$data['title'] = $module_info['title'];
		} else {
			$data['title'] = [];
		}

		if (isset($this->request->post['limit'])) {
			$data['limit'] = $this->request->post['limit'];
		} elseif (!empty($module_info)) {
			$data['limit'] = $module_info['limit'];
		} else {
			$data['limit'] = 8;
		}

		if (isset($this->request->post['limit_description'])) {
			$data['limit_description'] = $this->request->post['limit_description'];
		} elseif (!empty($module_info)) {
			$data['limit_description'] = $module_info['limit_description'];
		} else {
			$data['limit_description'] = 255;
		}

		if (isset($this->request->post['blog_categories'])) {
			$data['blog_categories'] = $this->request->post['blog_categories'];
		} elseif (!empty($module_info)) {
			$data['blog_categories'] = isset($module_info['blog_categories']) ? $module_info['blog_categories'] : [];
		} else {
			$data['blog_categories'] = [];
		}

		$this->load->model('octemplates/blog/oct_blogcategory');

		$data['blog_categories'] = [];

		if (!empty($this->request->post['blog_categories'])) {
			$blog_categories = $this->request->post['blog_categories'];
		} elseif (!empty($module_info['blog_categories'])) {
			$blog_categories = $module_info['blog_categories'];
		} else {
			$blog_categories = [];
		}

		foreach ($blog_categories as $blogcategory_id) {
			$blog_category_info = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($blogcategory_id);

			if ($blog_category_info) {
				$data['blog_categories'][] = [
					'blogcategory_id' => $blog_category_info['blogcategory_id'],
					'name'       => $blog_category_info['name']
				];
			}
		}

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 400;
		}

		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 300;
		}

		if (isset($this->request->post['sort'])) {
			$data['sort'] = $this->request->post['sort'];
		} elseif (!empty($module_info)) {
			$data['sort'] = $module_info['sort'];
		} else {
			$data['sort'] = 'a.date_added';
		}

		if (isset($this->request->post['order'])) {
			$data['order'] = $this->request->post['order'];
		} elseif (!empty($module_info)) {
			$data['order'] = $module_info['order'];
		} else {
			$data['order'] = 'DESC';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info) && isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = 1;
		}

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_blogarticle', $data));
	}

	public function install() {
		$this->load->language('octemplates/blog/oct_blogsettings');

        $this->load->model('setting/setting');
		$this->load->model('user/user_group');

		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_blogarticle');
	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_blogarticle');

        $oct_blog_info = $this->model_setting_setting->getSetting('oct_blogsettings');

		if (!$oct_blog_info) {
	        $this->response->redirect($this->url->link('octemplates/blog/oct_blogsettings/install', 'user_token=' . $this->session->data['user_token'], true));
	    }
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/oct_blogarticle')) {
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
