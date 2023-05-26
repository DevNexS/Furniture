<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/
class ControllerOCTemplatesModuleOctFastorder extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/module/oct_fastorder');

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
		$this->load->model('localisation/country');

        $oct_fastorder_data = $this->model_setting_setting->getSetting('oct_fastorder_data');
        
        if (!$oct_fastorder_data) {
            $this->response->redirect($this->url->link('octemplates/module/oct_fastorder/install', 'user_token=' . $this->session->data['user_token'], true));
        }

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('oct_fastorder_data', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('octemplates/module/oct_fastorder', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
		$data['button_custom_field_value_add'] = $this->language->get('button_custom_field_value_add');
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['user_token'] = $this->session->data['user_token'];
		
		if (isset($this->error['notify_email'])) {
			$data['error_notify_email'] = $this->error['notify_email'];
		} else {
			$data['error_notify_email'] = '';
		}

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['default_country'])) {
			$data['error_default_country'] = $this->error['default_country'];
		} else {
			$data['error_default_country'] = '';
		}

		if (isset($this->error['default_region'])) {
			$data['error_default_region'] = $this->error['default_region'];
		} else {
			$data['error_default_region'] = '';
		}

		if (isset($this->error['default_city'])) {
			$data['error_default_city'] = $this->error['default_city'];
		} else {
			$data['error_default_city'] = '';
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('octemplates/module/oct_fastorder', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('octemplates/module/oct_fastorder', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['action'] = $this->url->link('octemplates/module/oct_fastorder', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('octemplates/module/oct_fastorder', 'user_token=' . $this->session->data['user_token'], true);

		$data['custom_fields_link'] = $this->url->link('customer/custom_field', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->post['oct_fastorder_data'])) {
			$data['oct_fastorder_data'] = $this->request->post['oct_fastorder_data'];
		} else {
			$data['oct_fastorder_data'] = $this->config->get('oct_fastorder_data');
		}

		$data['countries'] = [];

		$countries = $this->model_localisation_country->getCountries();

		foreach ($countries as $country) {
			$data['countries'][] = [
				'country_id' => $country['country_id'],
				'name'       => $country['name'] . (($country['country_id'] == $this->config->get('config_country_id')) ? $this->language->get('text_default') : null)
			];
		}
		
		$this->load->model('customer/custom_field');
		$data['custom_fields'] = [];

		$filter_data = [
			'start' => 0,
			'limit' => 1000
		];

		$custom_field_total = $this->model_customer_custom_field->getTotalCustomFields();

		$results = $this->model_customer_custom_field->getCustomFields($filter_data);

		foreach ($results as $result) {
			$type = '';

			switch ($result['type']) {
				case 'select':
					$type = $this->language->get('text_select');
					break;
				case 'radio':
					$type = $this->language->get('text_radio');
					break;
				case 'checkbox':
					$type = $this->language->get('text_checkbox');
					break;
				case 'input':
					$type = $this->language->get('text_input');
					break;
				case 'text':
					$type = $this->language->get('text_text');
					break;
				case 'textarea':
					$type = $this->language->get('text_textarea');
					break;
				case 'file':
					$type = $this->language->get('text_file');
					break;
				case 'date':
					$type = $this->language->get('text_date');
					break;
				case 'datetime':
					$type = $this->language->get('text_datetime');
					break;
				case 'time':
					$type = $this->language->get('text_time');
					break;
			}

			$data['custom_fields'][] = [
				'custom_field_id' => $result['custom_field_id'],
				'name'            => $result['name'],
				'location'        => $this->language->get('text_' . $result['location']),
				'type'            => $type,
				'status'          => $result['status'],
				'sort_order'      => $result['sort_order']
			];
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_fastorder', $data));
	}
	
	public function addCustomerField() {
		$this->load->language('octemplates/module/oct_fastorder');
		$this->load->model('customer/custom_field');
		
		$json = [];
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateCustomerForm()) {
			$this->model_customer_custom_field->addCustomField($this->request->post);

			$json['success']['text'] = $this->language->get('text_success_dop');
			$json['success']['name'] = $this->request->post['custom_field_description'][(int)$this->config->get('config_language_id')]['name'];
			$json['success']['location'] = $this->language->get('text_' . $this->request->post['location']);
			$json['success']['sort_order'] = $this->request->post['sort_order'] ? $this->request->post['sort_order'] : 0;
			
			$type = '';
			
			switch ($this->request->post['type']) {
				case 'select':
					$type = $this->language->get('text_select');
					break;
				case 'radio':
					$type = $this->language->get('text_radio');
					break;
				case 'checkbox':
					$type = $this->language->get('text_checkbox');
					break;
				case 'input':
					$type = $this->language->get('text_input');
					break;
				case 'text':
					$type = $this->language->get('text_text');
					break;
				case 'textarea':
					$type = $this->language->get('text_textarea');
					break;
				case 'file':
					$type = $this->language->get('text_file');
					break;
				case 'date':
					$type = $this->language->get('text_date');
					break;
				case 'datetime':
					$type = $this->language->get('text_datetime');
					break;
				case 'time':
					$type = $this->language->get('text_time');
					break;
			}
			
			$json['success']['type'] = $type;
		} else {
			$json['error'] = $this->error;
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	private function validateCustomerForm() {
		if (!$this->user->hasPermission('modify', 'customer/custom_field')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['custom_field_description'] as $language_id => $value) {
			if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 128)) {
				$this->error['name'][$language_id] = $this->language->get('error_name');
			}
		}

		if (($this->request->post['type'] == 'select' || $this->request->post['type'] == 'radio' || $this->request->post['type'] == 'checkbox')) {
			if (!isset($this->request->post['custom_field_value'])) {
				$this->error['warning'] = $this->language->get('error_type');
			}

			if (isset($this->request->post['custom_field_value'])) {
				foreach ($this->request->post['custom_field_value'] as $custom_field_value_id => $custom_field_value) {
					foreach ($custom_field_value['custom_field_value_description'] as $language_id => $custom_field_value_description) {
						if ((utf8_strlen($custom_field_value_description['name']) < 1) || (utf8_strlen($custom_field_value_description['name']) > 128)) {
							$this->error['custom_field_value'][$custom_field_value_id][$language_id] = $this->language->get('error_custom_value');
						}
					}
				}
			}
		}

		return !$this->error;
	}
	
	public function install() {
		$this->load->language('octemplates/module/oct_fastorder');

		$this->load->model('setting/setting');
		$this->load->model('user/user_group');

		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_fastorder');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_fastorder');

		$this->model_setting_setting->editSetting('oct_fastorder_data', [
			'oct_fastorder_data' => [
				'status'                           	=> '1',
				'fax'                              	=> '1',
				'company'                          	=> '1',
				'address_1'                        	=> '1',
				'address_2'                        	=> '1',
				'postcode'                         	=> '0',
				'city'							 	=> '1',
				'comment'                          	=> '1',
				'country_and_region'				=> '1',
				'registration'						=> '1',
				'lastname'                         	=> '1',
				'email'								=> '2',
				'minimum_order'						=> '',
				'max_order'							=> '',
				'order_in_popup'					=> '0',
				'cart_weight'						=> '0',
				'cart_rewards'						=> '0',
				'cart_view_is'						=> '1',
				'cart_coupon'						=> '1',
				'cart_voucher'						=> '0',
				'notify_email' 	  				    => $this->config->get('config_email'),
				'customer_groups'					=> '1',
				'default_country'					=> $this->config->get('config_country_id'),
				'default_region'					=> $this->config->get('config_zone_id'),
				'default_city'						=> '',
				'mask'								=> '8 (999) 999-99-99'
			]
   	]);        

	$this->session->data['success'] = $this->language->get('text_success_install');   

	$this->response->redirect($this->url->link('octemplates/module/oct_fastorder', 'user_token=' . $this->session->data['user_token'], true));
  }

  public function country() {
		$json = [];

		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('localisation/zone');

			$json = [
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			];
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}	

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'octemplates/module/oct_fastorder')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['oct_fastorder_data'] as $key => $field) {
      if (empty($field) && $key == "default_country") {
        $this->error['default_country'] = $this->language->get('error_default_country');
      }

		if (empty($field) && $key == "notify_email") {
			$this->error['notify_email'] = $this->language->get('error_notify_email');
		}

      if (empty($field) && $key == "default_region") {
        $this->error['default_region'] = $this->language->get('error_default_region');
      }

    }

		return !$this->error;
	}
}