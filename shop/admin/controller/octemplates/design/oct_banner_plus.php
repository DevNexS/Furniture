<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022							  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesDesignOctBannerPlus extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/design/oct_banner_plus');
		$this->load->model('octemplates/design/oct_banner_plus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();
	}

	public function add() {
		$this->load->language('octemplates/design/oct_banner_plus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/design/oct_banner_plus');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_octemplates_design_oct_banner_plus->addBanner($this->request->post);
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

			$this->response->redirect($this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('octemplates/design/oct_banner_plus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/design/oct_banner_plus');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_octemplates_design_oct_banner_plus->editBanner($this->request->get['banner_id'], $this->request->post);

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

			$this->response->redirect($this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('octemplates/design/oct_banner_plus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/design/oct_banner_plus');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $banner_id) {
				$this->model_octemplates_design_oct_banner_plus->deleteBanner($banner_id);
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

			$this->response->redirect($this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url, true));
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

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url, true)
		];

		$data['add'] = $this->url->link('octemplates/design/oct_banner_plus/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('octemplates/design/oct_banner_plus/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['oct_banner_pluss'] = [];

		$filter_data = [
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		];

		$oct_banner_plus_total = $this->model_octemplates_design_oct_banner_plus->getTotalBanners();

		$results = $this->model_octemplates_design_oct_banner_plus->getBanners($filter_data);

		foreach ($results as $result) {
			$data['oct_banner_pluss'][] = [
				'banner_id' => $result['banner_id'],
				'name'      => $result['name'],
				'status'    => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'edit'      => $this->url->link('octemplates/design/oct_banner_plus/edit', 'user_token=' . $this->session->data['user_token'] . '&banner_id=' . $result['banner_id'] . $url, true)
			];
		}

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
			$data['selected'] = (array)$this->request->post['selected'];
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

		$data['sort_name'] = $this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_status'] = $this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $oct_banner_plus_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}
		', true);

		$data['pagination'] = $pagination->render();
		$data['results'] = sprintf($this->language->get('text_pagination'), ($oct_banner_plus_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($oct_banner_plus_total - $this->config->get('config_limit_admin'))) ? $oct_banner_plus_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $oct_banner_plus_total, ceil($oct_banner_plus_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/design/oct_banner_plus_list', $data));
	}

	protected function getForm() {
		$this->document->addStyle('view/stylesheet/oct_remarket.css');
		$this->document->addStyle('view/javascript/octemplates/spectrum/spectrum.css');
		$this->document->addScript('view/javascript/octemplates/spectrum/spectrum.js');
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');

		$data['text_form'] = !isset($this->request->get['banner_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

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

		if (isset($this->error['oct_banner_plus_image'])) {
			$data['error_oct_banner_plus_image'] = $this->error['oct_banner_plus_image'];
		} else {
			$data['error_oct_banner_plus_image'] = [];
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

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url, true)
		];

		if (!isset($this->request->get['banner_id'])) {
			$data['action'] = $this->url->link('octemplates/design/oct_banner_plus/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('octemplates/design/oct_banner_plus/edit', 'user_token=' . $this->session->data['user_token'] . '&banner_id=' . $this->request->get['banner_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('octemplates/design/oct_banner_plus', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['banner_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$oct_banner_plus_info = $this->model_octemplates_design_oct_banner_plus->getBanner($this->request->get['banner_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($oct_banner_plus_info)) {
			$data['name'] = $oct_banner_plus_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($oct_banner_plus_info)) {
			$data['status'] = $oct_banner_plus_info['status'];
		} else {
			$data['status'] = true;
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('tool/image');

		if (isset($this->request->post['oct_banner_plus_image'])) {
			$oct_banner_plus_images = $this->request->post['oct_banner_plus_image'];
		} elseif (isset($this->request->get['banner_id'])) {
			$oct_banner_plus_images = $this->model_octemplates_design_oct_banner_plus->getBannerImages($this->request->get['banner_id']);
		} else {
			$oct_banner_plus_images = [];
		}

		$data['oct_default_colors'] = [
			'background_color'   => 'rgb(255, 255, 255)',
			'title_color'        => 'rgb(39, 35, 35)',
			'text_color'         => 'rgb(101, 108, 125)',
			'button_color'       => 'rgb(39, 35, 35)',
			'button_background'  => 'rgb(244, 244, 244)',
			'button_background_hover'  => 'rgb(251, 145, 48)',
			'button_text_hover'  => 'rgb(255, 255, 255)',
		];

		$data['oct_banner_plus_images'] = [];

		foreach ($oct_banner_plus_images as $oct_banner_plus_image) {
			if (is_file(DIR_IMAGE . $oct_banner_plus_image['image'])) {
				$image = $oct_banner_plus_image['image'];
				$thumb = $oct_banner_plus_image['image'];
			}
			else {
				$image = '';
				$thumb = 'no_image.png';
			}

			$data['oct_banner_plus_images'][] = [
				'oct_banner_plus_image_description' => $oct_banner_plus_image['oct_banner_plus_image_description'],
				'image'              => $image,
				'thumb'              => $this->model_tool_image->resize($thumb, 100, 100),
		        'background_color'   => $oct_banner_plus_image['background_color'] ? $oct_banner_plus_image['background_color'] : $data['oct_default_colors']['background_color'],
				'title_color'        => $oct_banner_plus_image['title_color'] ? $oct_banner_plus_image['title_color'] : $data['oct_default_colors']['title_color'],
		        'text_color'         => $oct_banner_plus_image['text_color'] ? $oct_banner_plus_image['text_color'] : $data['oct_default_colors']['text_color'],
		        'button_color'       => $oct_banner_plus_image['button_color'] ? $oct_banner_plus_image['button_color'] : $data['oct_default_colors']['button_color'],
		        'button_background'  => $oct_banner_plus_image['button_background'] ? $oct_banner_plus_image['button_background'] : $data['oct_default_colors']['button_background'],
		        'button_background_hover'  => $oct_banner_plus_image['button_background_hover'] ? $oct_banner_plus_image['button_background_hover'] : $data['oct_default_colors']['button_background_hover'],
		        'button_text_hover'  => $oct_banner_plus_image['button_text_hover'] ? $oct_banner_plus_image['button_text_hover'] : $data['oct_default_colors']['button_text_hover'],
				'sort_order'         => $oct_banner_plus_image['sort_order']
			];
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/design/oct_banner_plus_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'octemplates/design/oct_banner_plus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (isset($this->request->post['oct_banner_plus_image'])) {
			foreach ($this->request->post['oct_banner_plus_image'] as $banner_image_id => $oct_banner_plus_image) {
		    	foreach ($oct_banner_plus_image['oct_banner_plus_image_description'] as $language_id => $oct_banner_plus_image_description) {
					if ((utf8_strlen($oct_banner_plus_image_description['title']) < 2) || (utf8_strlen($oct_banner_plus_image_description['title']) > 64)) {
						$this->error['oct_banner_plus_image'][$banner_image_id][$language_id] = $this->language->get('error_title');
					}
				}
			}
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'octemplates/design/oct_banner_plus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
