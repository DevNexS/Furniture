<?php
/************************************************************/
/*	@copyright	OCTemplates 2015-2020.					  	*/
/*	@support	https://octemplates.net/					*/
/*	@license	LICENSE.txt									*/
/************************************************************/

class ControllerOCTemplatesBlogOCTBlogArticle extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$this->load->model('setting/setting');

		$oct_blog_info = $this->model_setting_setting->getSetting('oct_blogsettings');

		if (!$oct_blog_info) {
            $this->response->redirect($this->url->link('octemplates/blog/oct_blogsettings/install', 'user_token=' . $this->session->data['user_token'], true));
        }

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/blog/oct_blogarticle');

		$this->getList();
	}

	public function add() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/blog/oct_blogarticle');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_octemplates_blog_oct_blogarticle->addArticle($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_blog_category_id'])) {
				$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/blog/oct_blogarticle');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_octemplates_blog_oct_blogarticle->editArticle($this->request->get['blogarticle_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_blog_category_id'])) {
				$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/blog/oct_blogarticle');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $blogarticle_id) {
				$this->model_octemplates_blog_oct_blogarticle->deleteArticle($blogarticle_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_blog_category_id'])) {
				$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	public function copy() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/blog/oct_blogarticle');

		if (isset($this->request->post['selected']) && $this->validateCopy()) {
			foreach ($this->request->post['selected'] as $blogarticle_id) {
				$this->model_octemplates_blog_oct_blogarticle->copyArticle($blogarticle_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_blog_category_id'])) {
				$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_blog_category_id'])) {
			$filter_blog_category_id = $this->request->get['filter_blog_category_id'];
		} else {
			$filter_blog_category_id = 0;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'a.date_added';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_blog_category_id'])) {
			$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
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
			'href' => $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true)
		];

		$data['add'] = $this->url->link('octemplates/blog/oct_blogarticle/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['copy'] = $this->url->link('octemplates/blog/oct_blogarticle/copy', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('octemplates/blog/oct_blogarticle/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['articles'] = [];

		$filter_data = [
			'filter_name'				=> $filter_name,
			'filter_status'				=> $filter_status,
			'filter_blog_category_id'	=> $filter_blog_category_id,
			'sort'						=> $sort,
			'order'						=> $order,
			'start'						=> ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'						=> $this->config->get('config_limit_admin')
		];

		$this->load->model('tool/image');

		$articles_total = $this->model_octemplates_blog_oct_blogarticle->getTotalArticles($filter_data);

		$results = $this->model_octemplates_blog_oct_blogarticle->getArticles($filter_data);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 40, 40);
			}

			$data['articles'][] = [
				'blogarticle_id' => $result['blogarticle_id'],
				'image'      => $image,
				'name'       => $result['name'],
				'status'     => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
				'edit'       => $this->url->link('octemplates/blog/oct_blogarticle/edit', 'user_token=' . $this->session->data['user_token'] . '&blogarticle_id=' . $result['blogarticle_id'] . $url, true)
			];
		}

		$data['user_token'] = $this->session->data['user_token'];

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

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_blog_category_id'])) {
			$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . '&sort=ad.name' . $url, true);
		$data['sort_status'] = $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . '&sort=a.status' . $url, true);
		$data['sort_order'] = $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . '&sort=a.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_blog_category_id'])) {
			$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $articles_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($articles_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($articles_total - $this->config->get('config_limit_admin'))) ? $articles_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $articles_total, ceil($articles_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_status'] = $filter_status;
		$data['filter_blog_category_id'] = $filter_blog_category_id;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/blog/oct_blogarticle_list', $data));
	}

	protected function getForm() {
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/codemirror/lib/codemirror.js');
		$this->document->addScript('view/javascript/octemplates/codemirror/mode/javascript/javascript.js');
		$this->document->addScript('view/javascript/octemplates/codemirror/mode/css/css.js');
		$this->document->addStyle('view/javascript/octemplates/codemirror/lib/codemirror.css');

		//Add Summernote Styles && Scripts
        $this->document->addScript('view/javascript/summernote/summernote.js');
        $this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
        $this->document->addScript('view/javascript/summernote/opencart.js');
        $this->document->addStyle('view/javascript/summernote/summernote.css');

		$this->document->addStyle('view/javascript/octemplates/spectrum/spectrum.css');
		$this->document->addScript('view/javascript/octemplates/spectrum/spectrum.js');

		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->load->model('octemplates/blog/oct_blogarticle');

		$data['text_form'] = !isset($this->request->get['blogarticle_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = [];
		}

		if (isset($this->error['meta_title'])) {
			$data['error_meta_title'] = $this->error['meta_title'];
		} else {
			$data['error_meta_title'] = [];
		}

		if (isset($this->error['keyword'])) {
			$data['error_keyword'] = $this->error['keyword'];
		} else {
			$data['error_keyword'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_blog_category_id'])) {
			$url .= '&filter_blog_category_id=' . $this->request->get['filter_blog_category_id'];
		}

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
			'href' => $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true)
		];

		if (!isset($this->request->get['blogarticle_id'])) {
			$data['action'] = $this->url->link('octemplates/blog/oct_blogarticle/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('octemplates/blog/oct_blogarticle/edit', 'user_token=' . $this->session->data['user_token'] . '&blogarticle_id=' . $this->request->get['blogarticle_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('octemplates/blog/oct_blogarticle', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['blogarticle_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$article_info = $this->model_octemplates_blog_oct_blogarticle->getArticle($this->request->get['blogarticle_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['article_description'])) {
			$data['article_description'] = $this->request->post['article_description'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$data['article_description'] = $this->model_octemplates_blog_oct_blogarticle->getArticleDescriptions($this->request->get['blogarticle_id']);
		} else {
			$data['article_description'] = [];
		}

		$this->load->model('setting/store');

		$data['stores'] = [];

		$data['stores'][] = [
			'store_id' => 0,
			'name'     => $this->language->get('text_default')
		];

		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$data['stores'][] = [
				'store_id' => $store['store_id'],
				'name'     => $store['name']
			];
		}

		if (isset($this->request->post['article_store'])) {
			$data['article_store'] = $this->request->post['article_store'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$data['article_store'] = $this->model_octemplates_blog_oct_blogarticle->getArticleStores($this->request->get['blogarticle_id']);
		} else {
			$data['article_store'] = [0];
		}

		if (isset($this->request->post['date_available'])) {
			$data['date_available'] = $this->request->post['date_available'];
		} elseif (!empty($article_info)) {
			$data['date_available'] = ($article_info['date_available'] != '0000-00-00') ? $article_info['date_available'] : '';
		} else {
			$data['date_available'] = date('Y-m-d H:i:s');
		}

		if (isset($this->request->post['date_added'])) {
			$data['date_added'] = $this->request->post['date_added'];
		} elseif (!empty($article_info)) {
			$data['date_added'] = ($article_info['date_added'] != '0000-00-00') ? $article_info['date_added'] : '';
		} else {
			$data['date_added'] = date('Y-m-d H:i:s');
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($article_info)) {
			$data['sort_order'] = $article_info['sort_order'];
		} else {
			$data['sort_order'] = 1;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($article_info)) {
			$data['status'] = $article_info['status'];
		} else {
			$data['status'] = true;
		}

		// Categories
		$this->load->model('octemplates/blog/oct_blogcategory');

		if (isset($this->request->post['article_category'])) {
			$categories = $this->request->post['article_category'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$categories = $this->model_octemplates_blog_oct_blogarticle->getArticleCategories($this->request->get['blogarticle_id']);
		} else {
			$categories = [];
		}

		$data['article_categories'] = [];

		foreach ($categories as $blogcategory_id) {
			$blog_category_info = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($blogcategory_id);

			if ($blog_category_info) {
				$data['article_categories'][] = [
					'blogcategory_id' => $blog_category_info['blogcategory_id'],
					'name'        => ($blog_category_info['path']) ? $blog_category_info['path'] . ' &gt; ' . $blog_category_info['name'] : $blog_category_info['name']
				];
			}
		}

		// Image
		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($article_info)) {
			$data['image'] = $article_info['image'];
		} else {
			$data['image'] = '';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
		} elseif (!empty($article_info) && is_file(DIR_IMAGE . $article_info['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($article_info['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		// Images
		if (isset($this->request->post['article_image'])) {
			$article_images = $this->request->post['article_image'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$article_images = $this->model_octemplates_blog_oct_blogarticle->getArticleImages($this->request->get['blogarticle_id']);
		} else {
			$article_images = array();
		}

		$data['article_images'] = array();

		foreach ($article_images as $article_image) {
			if (is_file(DIR_IMAGE . $article_image['image'])) {
				$image = $article_image['image'];
				$thumb = $article_image['image'];
			} else {
				$image = '';
				$thumb = 'no_image.png';
			}

			$data['article_images'][] = array(
				'image'      => $image,
				'thumb'      => $this->model_tool_image->resize($thumb, 100, 100),
				'sort_order' => $article_image['sort_order']
			);
		}

		if (isset($this->request->post['article_related'])) {
			$articles = $this->request->post['article_related'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$articles = $this->model_octemplates_blog_oct_blogarticle->getArticleRelated($this->request->get['blogarticle_id']);
		} else {
			$articles = [];
		}

		$data['article_relateds'] = [];

		foreach ($articles as $blogarticle_id) {
			$related_info = $this->model_octemplates_blog_oct_blogarticle->getArticle($blogarticle_id);

			if ($related_info) {
				$data['article_relateds'][] = [
					'blogarticle_id' => $related_info['blogarticle_id'],
					'name'       => $related_info['name']
				];
			}
		}

		$this->load->model('catalog/product');

		if (isset($this->request->post['article_related_product'])) {
			$products = $this->request->post['article_related_product'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$products = $this->model_octemplates_blog_oct_blogarticle->getArticleRelatedProducts($this->request->get['blogarticle_id']);
		} else {
			$products = [];
		}

		$data['article_related_products'] = [];

		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['article_related_products'][] = [
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				];
			}
		}

		if (isset($this->request->post['article_seo_url'])) {
			$data['article_seo_url'] = $this->request->post['article_seo_url'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$data['article_seo_url'] = $this->model_octemplates_blog_oct_blogarticle->getArticleSeoUrls($this->request->get['blogarticle_id']);
		} else {
			$data['article_seo_url'] = [];
		}

		if (isset($this->request->post['article_layout'])) {
			$data['article_layout'] = $this->request->post['article_layout'];
		} elseif (isset($this->request->get['blogarticle_id'])) {
			$data['article_layout'] = $this->model_octemplates_blog_oct_blogarticle->getArticleLayouts($this->request->get['blogarticle_id']);
		} else {
			$data['article_layout'] = [];
		}

		$this->load->model('design/layout');

		$data['layouts'] = $this->model_design_layout->getLayouts();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/blog/oct_blogarticle_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'octemplates/blog/oct_blogarticle')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['article_description'] as $language_id => $value) {
			if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 255)) {
				$this->error['name'][$language_id] = $this->language->get('error_name');
			}

			if ((utf8_strlen($value['meta_title']) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
				$this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
			}
		}

		if ($this->request->post['article_seo_url']) {
			$this->load->model('design/seo_url');

			foreach ($this->request->post['article_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						if (count(array_keys($language, $keyword)) > 1) {
							$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
						}

						$seo_urls = $this->model_design_seo_url->getSeoUrlsByKeyword($keyword);

						foreach ($seo_urls as $seo_url) {
							if (($seo_url['store_id'] == $store_id) && (!isset($this->request->get['blogarticle_id']) || (($seo_url['query'] != 'blogarticle_id=' . $this->request->get['blogarticle_id'])))) {
								$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');

								break;
							}
						}
					}
				}
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'octemplates/blog/oct_blogarticle')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	protected function validateCopy() {
		if (!$this->user->hasPermission('modify', 'octemplates/blog/oct_blogarticle')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_model'])) {
			$this->load->model('octemplates/blog/oct_blogarticle');

			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['limit'])) {
				$limit = $this->request->get['limit'];
			} else {
				$limit = 5;
			}

			$filter_data = array(
				'filter_name'  => $filter_name,
				'start'        => 0,
				'limit'        => $limit
			);

			$results = $this->model_octemplates_blog_oct_blogarticle->getArticles($filter_data);

			foreach ($results as $result) {
				$json[] = [
					'blogarticle_id' => $result['blogarticle_id'],
					'name'       => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
				];
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
