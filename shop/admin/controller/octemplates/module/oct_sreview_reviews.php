<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOCTSreviewReviews extends Controller {
    private $error = [];

    public function index() {
	    $this->load->model('setting/setting');
	    
        $sreview_setting_page_info = $this->model_setting_setting->getSetting('oct_sreview_setting');

		if (!$sreview_setting_page_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_sreview_setting/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->load->language('octemplates/module/oct_sreview_reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_sreview_reviews');

        $this->getList();
    }

    public function add() {
        $this->load->language('octemplates/module/oct_sreview_reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_sreview_reviews');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_module_oct_sreview_reviews->addReview($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_author'])) {
                $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit() {
        $this->load->language('octemplates/module/oct_sreview_reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_sreview_reviews');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_module_oct_sreview_reviews->editReview($this->request->get['oct_sreview_review_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_author'])) {
                $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete() {
        $this->load->language('octemplates/module/oct_sreview_reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_sreview_reviews');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $oct_sreview_review_id) {
                $this->model_octemplates_module_oct_sreview_reviews->deleteReview($oct_sreview_review_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_author'])) {
                $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList() {
	    $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
	    $this->document->addStyle('view/stylesheet/oct_remarket.css');
	    
        if (isset($this->request->get['filter_author'])) {
            $filter_author = $this->request->get['filter_author'];
        } else {
            $filter_author = null;
        }

        if (isset($this->request->get['filter_status'])) {
            $filter_status = $this->request->get['filter_status'];
        } else {
            $filter_status = null;
        }

        if (isset($this->request->get['filter_date_added'])) {
            $filter_date_added = $this->request->get['filter_date_added'];
        } else {
            $filter_date_added = null;
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort  = 'date_added';
            $order = 'DESC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['filter_author'])) {
            $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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
            'href' => $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];

        $data['add']    = $this->url->link('octemplates/module/oct_sreview_reviews/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('octemplates/module/oct_sreview_reviews/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['reviews'] = [];

        $filter_data = [
            'filter_author' => $filter_author,
            'filter_status' => $filter_status,
            'filter_date_added' => $filter_date_added,
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        ];

        $review_total = $this->model_octemplates_module_oct_sreview_reviews->getTotalReviews($filter_data);

        $results = $this->model_octemplates_module_oct_sreview_reviews->getReviews($filter_data);

        foreach ($results as $result) {
            $data['reviews'][] = [
                'oct_sreview_review_id' => $result['oct_sreview_review_id'],
                'author' => $result['author'],
                'status' => ($result['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'edit' => $this->url->link('octemplates/module/oct_sreview_reviews/edit', 'user_token=' . $this->session->data['user_token'] . '&oct_sreview_review_id=' . $result['oct_sreview_review_id'] . $url, true)
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

        $data['sort_author']     = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=author' . $url, true);
        $data['sort_rating']     = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=rating' . $url, true);
        $data['sort_status']     = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
        $data['sort_date_added'] = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);

        $url = '';

        if (isset($this->request->get['filter_author'])) {
            $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination        = new Pagination();
        $pagination->total = $review_total;
        $pagination->page  = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url   = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($review_total - $this->config->get('config_limit_admin'))) ? $review_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $review_total, ceil($review_total / $this->config->get('config_limit_admin')));

        $data['filter_author']     = $filter_author;
        $data['filter_status']     = $filter_status;
        $data['filter_date_added'] = $filter_date_added;

        $data['sort']  = $sort;
        $data['order'] = $order;

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_sreview_reviews_list', $data));
    }

    protected function getForm() {
        $this->load->language('octemplates/module/oct_sreview_reviews');
        
		$data['text_form'] = !isset($this->request->get['oct_sreview_review_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		//Add Codemirror Styles && Scripts 
        $this->document->addScript('view/javascript/codemirror/lib/codemirror.js');
        $this->document->addScript('view/javascript/codemirror/lib/xml.js');
        $this->document->addScript('view/javascript/codemirror/lib/formatting.js');
        $this->document->addStyle('view/javascript/codemirror/lib/codemirror.css');
        $this->document->addStyle('view/javascript/codemirror/theme/monokai.css');
        
        //Add Summernote Styles && Scripts 
        $this->document->addScript('view/javascript/summernote/summernote.js');
        $this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
        $this->document->addScript('view/javascript/summernote/opencart.js');
        $this->document->addStyle('view/javascript/summernote/summernote.css'); 
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['author'])) {
            $data['error_author'] = $this->error['author'];
        } else {
            $data['error_author'] = '';
        }

        if (isset($this->error['text'])) {
            $data['error_text'] = $this->error['text'];
        } else {
            $data['error_text'] = '';
        }

        if (isset($this->error['rating'])) {
            $data['error_rating'] = $this->error['rating'];
        } else {
            $data['error_rating'] = '';
        }

        $url = '';

        if (isset($this->request->get['filter_author'])) {
            $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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
            'href' => $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];

        if (!isset($this->request->get['oct_sreview_review_id'])) {
            $data['action'] = $this->url->link('octemplates/module/oct_sreview_reviews/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('octemplates/module/oct_sreview_reviews/edit', 'user_token=' . $this->session->data['user_token'] . '&oct_sreview_review_id=' . $this->request->get['oct_sreview_review_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('octemplates/module/oct_sreview_reviews', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['oct_sreview_review_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $review_info = $this->model_octemplates_module_oct_sreview_reviews->getReview($this->request->get['oct_sreview_review_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['author'])) {
            $data['author'] = $this->request->post['author'];
        } elseif (!empty($review_info)) {
            $data['author'] = $review_info['author'];
        } else {
            $data['author'] = '';
        }

        if (isset($this->request->post['text'])) {
            $data['text'] = $this->request->post['text'];
        } elseif (!empty($review_info)) {
            $data['text'] = $review_info['text'];
        } else {
            $data['text'] = '';
        }

        if (isset($this->request->post['date_added'])) {
			$data['date_added'] = $this->request->post['date_added'];
		} elseif (!empty($review_info)) {
			$data['date_added'] = ($review_info['date_added'] != '0000-00-00 00:00' ? $review_info['date_added'] : date("Y-m-d H:i"));
		} else {
			$data['date_added'] = date("Y-m-d H:i");
		}

        if (isset($this->request->post['admin_text'])) {
            $data['admin_text'] = $this->request->post['admin_text'];
        } elseif (!empty($review_info)) {
            $data['admin_text'] = isset($review_info['admin_text']) ? $review_info['admin_text'] : '';
        } else {
            $data['admin_text'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($review_info)) {
            $data['status'] = $review_info['status'];
        } else {
            $data['status'] = '';
        }

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_sreview_reviews_form', $data));
    }

    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_sreview_reviews')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['author']) < 3) || (utf8_strlen($this->request->post['author']) > 64)) {
            $this->error['author'] = $this->language->get('error_author');
        }

        if (utf8_strlen($this->request->post['text']) < 1) {
            $this->error['text'] = $this->language->get('error_text');
        }

        return !$this->error;
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_sreview_reviews')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function autocomplete() {
        $json = [];

        if (isset($this->request->get['filter_author'])) {
            $this->load->model('octemplates/module/oct_sreview_reviews');

            if (isset($this->request->get['filter_author'])) {
                $filter_author = $this->request->get['filter_author'];
            } else {
                $filter_author = '';
            }

            if (isset($this->request->get['limit'])) {
                $limit = $this->request->get['limit'];
            } else {
                $limit = 5;
            }

            $filter_data = [
                'filter_author' => $filter_author,
                'start' => 0,
                'limit' => $limit
            ];

            $results = $this->model_octemplates_module_oct_sreview_reviews->getReviews($filter_data);

            foreach ($results as $result) {
                $json[] = [
                    'oct_sreview_review_id' => $result['oct_sreview_review_id'],
                    'author' => strip_tags(html_entity_decode($result['author'], ENT_QUOTES, 'UTF-8'))
                ];
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}