<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022							  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOctPopupPurchase extends Controller {
    private $error = [];
    
    public function index() {
        $this->load->language('octemplates/module/oct_popup_purchase');
        
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
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('setting/setting');
        $this->load->model('catalog/option');
        $this->load->model('localisation/language');
        
        $oct_popup_purchase_info = $this->model_setting_setting->getSetting('oct_popup_purchase');
		
		if (!$oct_popup_purchase_info) {
            $this->response->redirect($this->url->link('octemplates/module/oct_popup_purchase/install', 'user_token=' . $this->session->data['user_token'], true));
        }
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_popup_purchase', $this->request->post);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link('octemplates/module/oct_popup_purchase', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
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
        
        if (isset($this->error['notify_email'])) {
            $data['error_notify_email'] = $this->error['notify_email'];
        } else {
            $data['error_notify_email'] = '';
        }
        
        if (isset($this->error['notify_byoneclick_email'])) {
            $data['error_notify_byoneclick_email'] = $this->error['notify_byoneclick_email'];
        } else {
            $data['error_notify_byoneclick_email'] = '';
        }
        
        $data['breadcrumbs'] = [];
        
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];
        
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_popup_purchase', 'user_token=' . $this->session->data['user_token'], true)
        ];
        
        $data['action'] = $this->url->link('octemplates/module/oct_popup_purchase', 'user_token=' . $this->session->data['user_token'], true);
        
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
        
        if (isset($this->request->post['oct_popup_purchase_status'])) {
            $data['oct_popup_purchase_status'] = $this->request->post['oct_popup_purchase_status'];
        } else {
            $data['oct_popup_purchase_status'] = $this->config->get('oct_popup_purchase_status');
        }
        
        if (isset($this->request->post['oct_popup_purchase_byoneclick_status'])) {
            $data['oct_popup_purchase_byoneclick_status'] = $this->request->post['oct_popup_purchase_byoneclick_status'];
        } else {
            $data['oct_popup_purchase_byoneclick_status'] = $this->config->get('oct_popup_purchase_byoneclick_status');
        }
        
        if (isset($this->request->post['oct_popup_purchase_data'])) {
            $data['oct_popup_purchase_data'] = $this->request->post['oct_popup_purchase_data'];
        } else {
            $data['oct_popup_purchase_data'] = $this->config->get('oct_popup_purchase_data');
        }
        
        if (isset($this->request->post['oct_popup_purchase_byoneclick_data'])) {
            $data['oct_popup_purchase_byoneclick_data'] = $this->request->post['oct_popup_purchase_byoneclick_data'];
        } else {
            $data['oct_popup_purchase_byoneclick_data'] = $this->config->get('oct_popup_purchase_byoneclick_data');
        }
        
        if (isset($this->request->post['oct_popup_purchase_template'])) {
            $data['oct_popup_purchase_template'] = $this->request->post['oct_popup_purchase_template'];
        } else {
            $data['oct_popup_purchase_template'] = $this->config->get('oct_popup_purchase_template');
        }
        
        $data['options'] = [];
        
        foreach ($this->model_catalog_option->getOptions() as $product_option) {
            $data['options'][] = [
                'option_id' => $product_option['option_id'],
                'name' => $product_option['name']
            ];
        }
        
        $data['languages'] = $this->model_localisation_language->getLanguages();
        
        $this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('octemplates/module/oct_popup_purchase', $data));
    }
    
    public function install() {
        $this->load->model('setting/setting');
        
        $oct_popup_purchase_info = $this->model_setting_setting->getSetting('oct_popup_purchase');
		
		if (!$oct_popup_purchase_info) {
			$this->load->language('octemplates/module/oct_popup_purchase');
			$this->load->model('user/user_group');
			$this->load->model('localisation/language');
			
	        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_popup_purchase');
	        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_popup_purchase');
	        
	        $results = $this->model_localisation_language->getLanguages();
		
			$template_text = [];
			
	        foreach ($results as $result) {
	            $template_text[$result['language_id']] = [
	                'subject' => '',
	                'text' => ''
	            ];
	        }
	        
	        $this->model_setting_setting->editSetting('oct_popup_purchase', [
		        'oct_popup_purchase_status' => 1,
		        'oct_popup_purchase_byoneclick_status' => 1,
	            'oct_popup_purchase_data' => [
	                'template_status' => '0',
	                'firstname' => '2',
	                'email' => '2',
	                'telephone' => '2',
	                'comment' => '1',
	                'quantity' => '1',
	                'stock_check' => '0',
	                'order_status_id' => $this->config->get('config_order_status_id'),
	                'image' => '1',
	                'image_width' => $this->config->get('theme_oct_remarket_image_thumb_width'),
	                'image_height' => $this->config->get('theme_oct_remarket_image_thumb_height'),
	                'mask' => '8 (999) 999-99-99',
	                'allowed_options' => [],
	                'notify_email' => $this->config->get('config_email')
	            ],
	            'oct_popup_purchase_byoneclick_data' => [
	                'template_status' => '0',
	                'product' => '1',
	                'product_view' => '1',
	                'popup_cart' => '1',
	                'cart' => '1',
	                'order_status_id' => $this->config->get('config_order_status_id'),
	                'mask' => '8 (999) 999-99-99',
	                'notify_email' => $this->config->get('config_email')
	            ],
	            'oct_popup_purchase_template' => $template_text,
	            'oct_popup_purchase_byoneclick_template' => $template_text
	        ]);
	        
	        $this->session->data['success'] = $this->language->get('text_success_install');   
        }
        
        $this->response->redirect($this->url->link('octemplates/module/oct_popup_purchase', 'user_token=' . $this->session->data['user_token'], true));
    }
    
    public function uninstall() {
        $this->load->model('setting/setting');
        $this->load->model('user/user_group');
        
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_popup_purchase');
	    $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_popup_purchase');
        
        $this->model_setting_setting->deleteSetting('oct_popup_purchase');
    }
    
    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_popup_purchase')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        foreach ($this->request->post['oct_popup_purchase_data'] as $key => $field) {
            if (empty($field) && $key == "notify_email") {
                $this->error['notify_email'] = $this->language->get('error_notify_email');
            }
        }
        
        foreach ($this->request->post['oct_popup_purchase_byoneclick_data'] as $key => $field) {
            if (empty($field) && $key == "notify_email") {
                $this->error['notify_byoneclick_email'] = $this->language->get('error_notify_email');
            }
        }
        
        return !$this->error;
    }
}