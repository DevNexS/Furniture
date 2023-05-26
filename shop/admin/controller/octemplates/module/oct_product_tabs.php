<?php
/**********************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesModuleOctProductTabs extends Controller {
    private $error = [];
    
    public function index() {
	    $this->load->model('setting/setting');
	    
        $oct_product_tabs_info = $this->model_setting_setting->getSetting('oct_product_tabs');

		if (!$oct_product_tabs_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_product_tabs_settings/install', 'user_token=' . $this->session->data['user_token'], true));
        }
		
        $this->load->language('octemplates/module/oct_product_tabs');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_product_tabs');
        
        $this->getList();
    }
    
    public function add() {
        $this->load->language('octemplates/module/oct_product_tabs');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_product_tabs');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_module_oct_product_tabs->addProductTab($this->request->post);
            
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }
        
        $this->getForm();
    }
    
    public function edit() {
        $this->load->language('octemplates/module/oct_product_tabs');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_product_tabs');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_octemplates_module_oct_product_tabs->editProductTab($this->request->get['extra_tab_id'], $this->request->post);
            
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }
        
        $this->getForm();
    }
    
    public function delete() {
        $this->load->language('octemplates/module/oct_product_tabs');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('octemplates/module/oct_product_tabs');
        
        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $extra_tab_id) {
                $this->model_octemplates_module_oct_product_tabs->deleteProductTab($extra_tab_id);
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
            
            $this->response->redirect($this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . $url, true));
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
            $sort = 'id.title';
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
            'href' => $this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'], true)
        ];
        
        $data['add']    = $this->url->link('octemplates/module/oct_product_tabs/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('octemplates/module/oct_product_tabs/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
        
        $data['oct_product_tabs'] = [];
        
        $filter_data = [
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        ];
        
        $oct_product_tabs_total = $this->model_octemplates_module_oct_product_tabs->getTotalProductTabs();
        
        $results = $this->model_octemplates_module_oct_product_tabs->getProductTabs($filter_data);
        
        foreach ($results as $result) {
            $data['oct_product_tabs'][] = [
                'extra_tab_id' => $result['extra_tab_id'],
                'title' => $result['title'],
                'sort_order' => $result['sort_order'],
                'edit' => $this->url->link('octemplates/module/oct_product_tabs/edit', 'user_token=' . $this->session->data['user_token'] . '&extra_tab_id=' . $result['extra_tab_id'] . $url, true)
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
        
        $data['sort_title']      = $this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . '&sort=id.title' . $url, true);
        $data['sort_sort_order'] = $this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . '&sort=b.sort_order' . $url, true);
        
        $url = '';
        
        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }
        
        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }
        
        $pagination        = new Pagination();
        $pagination->total = $oct_product_tabs_total;
        $pagination->page  = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url   = $this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
        
        $data['pagination'] = $pagination->render();
        
        $data['results'] = sprintf($this->language->get('text_pagination'), ($oct_product_tabs_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($oct_product_tabs_total - $this->config->get('config_limit_admin'))) ? $oct_product_tabs_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $oct_product_tabs_total, ceil($oct_product_tabs_total / $this->config->get('config_limit_admin')));
        
        $data['sort']  = $sort;
        $data['order'] = $order;
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('octemplates/module/oct_product_tabs_list', $data));
    }
    
    protected function getForm() {
	    $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
	    $this->document->addStyle('view/stylesheet/oct_remarket.css');
	    
        $data['heading_title'] = $this->language->get('heading_title');
        
        $data['text_form']     = !isset($this->request->get['extra_tab_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }
        
        if (isset($this->error['title'])) {
            $data['error_title'] = $this->error['title'];
        } else {
            $data['error_title'] = [];
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
            'href' => $this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . $url, true)
        ];
        
        if (!isset($this->request->get['extra_tab_id'])) {
            $data['action'] = $this->url->link('octemplates/module/oct_product_tabs/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('octemplates/module/oct_product_tabs/edit', 'user_token=' . $this->session->data['user_token'] . '&extra_tab_id=' . $this->request->get['extra_tab_id'] . $url, true);
        }
        
        $data['cancel'] = $this->url->link('octemplates/module/oct_product_tabs', 'user_token=' . $this->session->data['user_token'] . $url, true);
        
        if (isset($this->request->get['extra_tab_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $oct_product_tabs_info = $this->model_octemplates_module_oct_product_tabs->getProductTab($this->request->get['extra_tab_id']);
        }
        
        $data['user_token'] = $this->session->data['user_token'];
        
        $this->load->model('localisation/language');
        
        $data['languages'] = $this->model_localisation_language->getLanguages();
        
        if (isset($this->request->post['oct_product_tabs_description'])) {
            $data['oct_product_tabs_description'] = $this->request->post['oct_product_tabs_description'];
        } elseif (isset($this->request->get['extra_tab_id'])) {
            $data['oct_product_tabs_description'] = $this->model_octemplates_module_oct_product_tabs->getProductTabsDescriptions($this->request->get['extra_tab_id']);
        } else {
            $data['oct_product_tabs_description'] = [];
        }
        
        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($oct_product_tabs_info)) {
            $data['status'] = $oct_product_tabs_info['status'];
        } else {
            $data['status'] = true;
        }
        
        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($oct_product_tabs_info)) {
            $data['sort_order'] = $oct_product_tabs_info['sort_order'];
        } else {
            $data['sort_order'] = '';
        }
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('octemplates/module/oct_product_tabs_form', $data));
    }
    
    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_product_tabs')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        foreach ($this->request->post['oct_product_tabs_description'] as $language_id => $value) {
            if (empty($value['title'])) {
                $this->error['title'][$language_id] = $this->language->get('error_title');
            }
        }
        
        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }
        
        return !$this->error;
    }
    
    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_product_tabs')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        return !$this->error;
    }
    
    public function autocomplete() {
        $json = [];
        
        if (isset($this->request->get['filter_name'])) {
            $this->load->model('octemplates/module/oct_product_tabs');
            
            $filter_data = [
                'filter_name' => $this->request->get['filter_name'],
                'start' => 0,
                'limit' => 5
            ];
            
            $results = $this->model_octemplates_module_oct_product_tabs->getProductTabs($filter_data);
            
            foreach ($results as $result) {
                $json[] = [
                    'extra_tab_id' => $result['extra_tab_id'],
                    'title' => strip_tags(html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'))
                ];
            }
        }
        
        $sort_order = [];
        
        foreach ($json as $key => $value) {
            $sort_order[$key] = $value['title'];
        }
        
        array_multisort($sort_order, SORT_ASC, $json);
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}