<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOCTSreviewSubject extends Controller {
    private $error = [];
    
    public function index() {
        $this->load->model('setting/setting');
	    
        $sreview_setting_page_info = $this->model_setting_setting->getSetting('oct_sreview_setting');

		if (!$sreview_setting_page_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_sreview_setting/install', 'user_token=' . $this->session->data['user_token'], true));
        }
        
        $this->load->language('octemplates/module/oct_sreview_subject');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_sreview_reviews');
        
        $this->getList();
    }
    
    public function add() {
        $this->load->language('octemplates/module/oct_sreview_subject');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_sreview_reviews');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_module_oct_sreview_reviews->addSubject($this->request->post);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $url = '';
            
            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }
            
            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }
        
        $this->getForm();
    }
    
    public function edit() {
        $this->load->language('octemplates/module/oct_sreview_subject');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_sreview_reviews');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_module_oct_sreview_reviews->editSubject($this->request->get['oct_sreview_subject_id'], $this->request->post);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $url = '';
            
            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }
            
            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }
        
        $this->getForm();
    }
    
    public function delete() {
        $this->load->language('octemplates/module/oct_sreview_subject');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_sreview_reviews');
        
        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $oct_sreview_subject_id) {
                $this->model_octemplates_module_oct_sreview_reviews->deleteSubject($oct_sreview_subject_id);
            }
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $url = '';
            
            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }
            
            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }
        
        $this->getList();
    }
    
    public function copy() {
        $this->load->language('octemplates/module/oct_sreview_subject');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_sreview_reviews');
        
        if (isset($this->request->post['selected']) && $this->validateCopy()) {
            foreach ($this->request->post['selected'] as $oct_sreview_subject_id) {
                $this->model_octemplates_module_oct_sreview_reviews->copySubject($oct_sreview_subject_id);
            }
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $url = '';
            
            if (isset($this->request->get['filter_name'])) {
                $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
            }
            
            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true));
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
            $filter_name = null;
        }
        
        if (isset($this->request->get['filter_status'])) {
            $filter_status = $this->request->get['filter_status'];
        } else {
            $filter_status = null;
        }
        
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'sd.name';
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
        
        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }
        
        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
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
            'href' => $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];
        
        $data['add']    = $this->url->link('octemplates/module/oct_sreview_subject/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['copy']   = $this->url->link('octemplates/module/oct_sreview_subject/copy', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('octemplates/module/oct_sreview_subject/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
        
        $data['subjects'] = [];
        
        $filter_data = [
            'filter_name' => $filter_name,
            'filter_status' => $filter_status,
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        ];
        
        $this->load->model('tool/image');
        
        $subject_total = $this->model_octemplates_module_oct_sreview_reviews->getTotalSubjects($filter_data);
        
        $results = $this->model_octemplates_module_oct_sreview_reviews->getSubjects($filter_data);
        
        foreach ($results as $result) {
            $data['subjects'][] = array(
                'oct_sreview_subject_id' => $result['oct_sreview_subject_id'],
                'name' => $result['name'],
                'sort_order' => $result['sort_order'],
                'status' => ($result['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
                'edit' => $this->url->link('octemplates/module/oct_sreview_subject/edit', 'user_token=' . $this->session->data['user_token'] . '&oct_sreview_subject_id=' . $result['oct_sreview_subject_id'] . $url, true)
            );
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
        
        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }
        
        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }
        
        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }
        
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }
        
        $data['sort_name']       = $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . '&sort=sd.name' . $url, true);
        $data['sort_status']     = $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . '&sort=s.status' . $url, true);
        $data['sort_sort_order'] = $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . '&sort=s.sort_order' . $url, true);
        
        $url = '';
        
        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }
        
        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }
        
        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }
        
        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }
        
        $pagination        = new Pagination();
        $pagination->total = $subject_total;
        $pagination->page  = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url   = $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
        
        $data['pagination'] = $pagination->render();
        
        $data['results'] = sprintf($this->language->get('text_pagination'), ($subject_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($subject_total - $this->config->get('config_limit_admin'))) ? $subject_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $subject_total, ceil($subject_total / $this->config->get('config_limit_admin')));
        
        $data['filter_name']   = $filter_name;
        $data['filter_status'] = $filter_status;
        
        $data['sort']  = $sort;
        $data['order'] = $order;
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('octemplates/module/oct_sreview_subject_list', $data));
    }
    
    protected function getForm() {
        $this->load->language('octemplates/module/oct_sreview_subject');
		
		$data['text_form'] = !isset($this->request->get['oct_sreview_subject_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
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
        
        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = [];
        }
        
        $url = '';
        
        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }
        
        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
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
            'href' => $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];
        
        if (!isset($this->request->get['oct_sreview_subject_id'])) {
            $data['action'] = $this->url->link('octemplates/module/oct_sreview_subject/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('octemplates/module/oct_sreview_subject/edit', 'user_token=' . $this->session->data['user_token'] . '&oct_sreview_subject_id=' . $this->request->get['oct_sreview_subject_id'] . $url, true);
        }
        
        $data['cancel'] = $this->url->link('octemplates/module/oct_sreview_subject', 'user_token=' . $this->session->data['user_token'] . $url, true);
        
        if (isset($this->request->get['oct_sreview_subject_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $subject_info = $this->model_octemplates_module_oct_sreview_reviews->getSubject($this->request->get['oct_sreview_subject_id']);
        }
        
        $data['user_token'] = $this->session->data['user_token'];
        
        $this->load->model('localisation/language');
        
        $data['languages'] = $this->model_localisation_language->getLanguages();
        
        if (isset($this->request->post['subject_description'])) {
            $data['subject_description'] = $this->request->post['subject_description'];
        } elseif (isset($this->request->get['oct_sreview_subject_id'])) {
            $data['subject_description'] = $this->model_octemplates_module_oct_sreview_reviews->getSubjectDescriptions($this->request->get['oct_sreview_subject_id']);
        } else {
            $data['subject_description'] = [];
        }
        
        $this->load->model('setting/store');
        
        $data['stores'] = $this->model_setting_store->getStores();
        
        if (isset($this->request->post['subject_store'])) {
            $data['subject_store'] = $this->request->post['subject_store'];
        } elseif (isset($this->request->get['oct_sreview_subject_id'])) {
            $data['subject_store'] = $this->model_octemplates_module_oct_sreview_reviews->getSubjectStores($this->request->get['oct_sreview_subject_id']);
        } else {
            $data['subject_store'] = [
                0
            ];
        }
        
        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($subject_info)) {
            $data['sort_order'] = $subject_info['sort_order'];
        } else {
            $data['sort_order'] = 1;
        }
        
        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($subject_info)) {
            $data['status'] = $subject_info['status'];
        } else {
            $data['status'] = true;
        }
        
        $this->load->model('customer/customer_group');
        
        $data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('octemplates/module/oct_sreview_subject_form', $data));
    }
    
    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_sreview_subject')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        foreach ($this->request->post['subject_description'] as $language_id => $value) {
            if ((utf8_strlen($value['name']) < 3) || (utf8_strlen($value['name']) > 255)) {
                $this->error['name'][$language_id] = $this->language->get('error_name');
            }
        }
        
        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }
        
        return !$this->error;
    }
    
    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_sreview_subject')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        return !$this->error;
    }
    
    protected function validateCopy() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_sreview_subject')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        return !$this->error;
    }
    
    public function autocomplete() {
        $json = [];
        
        if (isset($this->request->get['filter_name'])) {
            $this->load->model('octemplates/module/oct_sreview_reviews');
            
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
                'filter_name' => $filter_name,
                'start' => 0,
                'limit' => $limit
            );
            
            $results = $this->model_octemplates_module_oct_sreview_reviews->getSubjects($filter_data);
            
            foreach ($results as $result) {
                $json[] = array(
                    'oct_sreview_subject_id' => $result['oct_sreview_subject_id'],
                    'name' => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
                );
            }
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}