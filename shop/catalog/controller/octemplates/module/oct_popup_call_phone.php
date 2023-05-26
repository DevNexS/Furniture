<?php
/********************************************************/
/*	@copyright	OCTemplates 2015-2022					*/
/*	@support	https://octemplates.net/				*/
/*	@license	LICENSE.txt								*/
/********************************************************/

class ControllerOCTemplatesModuleOctPopupCallPhone extends Controller {
	private $error = [];

    public function index() {
	    if ($this->config->get('oct_popup_call_phone_status') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	        $this->load->language('octemplates/module/oct_popup_call_phone');

	        $data['oct_popup_call_phone_data'] = $oct_popup_call_phone_data = $this->config->get('oct_popup_call_phone_data');

	        $data['name']      = $this->customer->isLogged() ? $this->customer->getFirstName() : '';
	        $data['telephone'] = $this->customer->isLogged() ? $this->customer->getTelephone() : '';

	        $data['comment'] = '';
	        $data['mask']    = (isset($oct_popup_call_phone_data['mask']) && !empty($oct_popup_call_phone_data['mask'])) ? $oct_popup_call_phone_data['mask'] : '';

			if ($this->config->get('config_account_id')) {
	            $this->load->model('catalog/information');

	            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

	            if ($information_info) {
	                $data['text_terms'] = sprintf($this->language->get('text_oct_terms'), $this->url->link('information/information', 'information_id=' . $this->config->get('config_account_id'), 'SSL'), $information_info['title'], $information_info['title']);
	            } else {
	                $data['text_terms'] = '';
	            }
	        } else {
	            $data['text_terms'] = '';
	        }

	        $this->response->setOutput($this->load->view('octemplates/module/oct_popup_call_phone', $data));
        } else {
	        $this->response->redirect($this->url->link('error/not_found', '', true));
        }
    }

    public function send() {
	    if ($this->config->get('oct_popup_call_phone_status') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	        $json = [];

	        $this->language->load('octemplates/module/oct_popup_call_phone');

	        if ($this->validate()) {
		        $this->load->model('octemplates/module/oct_popup_call_phone');

		        $oct_popup_call_phone_data = $this->config->get('oct_popup_call_phone_data');

		        $data = [];

	            if (isset($this->request->post['name'])) {
	                $data[] = [
	                    'name' => $this->language->get('enter_name'),
	                    'value' => $this->request->post['name']
	                ];
	            }

	            if (isset($this->request->post['telephone'])) {
	                $data[] = [
	                    'name' => $this->language->get('enter_telephone'),
	                    'value' => $this->request->post['telephone']
	                ];
	            }

	            if (isset($this->request->post['comment'])) {
	                $data[] = [
	                    'name' => $this->language->get('enter_comment'),
	                    'value' => $this->request->post['comment']
	                ];
	            }

	            if (isset($this->request->post['url_page'])) {
	                $data[] = [
	                    'name' => $this->language->get('enter_url_page'),
	                    'value' => $this->request->post['url_page']
	                ];
	            }

	            $data_send = [
	                'info' => serialize($data)
	            ];

	            $this->model_octemplates_module_oct_popup_call_phone->addRequest($data_send);

	            if (isset($oct_popup_call_phone_data['notify_status']) && $oct_popup_call_phone_data['notify_status']) {
	                $html_data['date_added']      = date('d.m.Y H:i:s', time());
	                $html_data['logo']            = $this->config->get('config_url') . 'image/' . $this->config->get('config_logo');
	                $html_data['store_name']      = $this->config->get('config_name');
	                $html_data['store_url']       = $this->config->get('config_url');
	                $html_data['text_info']       = $this->language->get('text_info');
	                $html_data['text_date_added'] = $this->language->get('text_date_added');
	                $html_data['data_info']       = $data;

	                $html = $this->load->view('octemplates/mail/oct_popup_call_phone_mail', $html_data);

					$mail = new Mail($this->config->get('config_mail_engine'));
					$mail->parameter = $this->config->get('config_mail_parameter');
					$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
					$mail->smtp_username = $this->config->get('config_mail_smtp_username');
					$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
					$mail->smtp_port     = $this->config->get('config_mail_smtp_port');
					$mail->smtp_timeout  = $this->config->get('config_mail_smtp_timeout');
	                $mail->setFrom($this->config->get('config_email'));
	                $mail->setSender($this->config->get('config_name'));
	                $mail->setSubject($this->language->get('heading_title') . " -- " . $html_data['date_added']);
	                $mail->setHtml($html);

	                $emails = explode(',', $oct_popup_call_phone_data['notify_email']);

	                foreach ($emails as $email) {
	                    if ($email && preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $email)) {
	                        $mail->setTo($email);
	                        $mail->send();
	                    }
	                }
	            }

	            $json['output'] = $this->language->get('text_success_send');
	        } else {
		        $json['error'] = $this->error;
	        }

	        $this->response->addHeader('Content-Type: application/json');
	        $this->response->setOutput(json_encode($json));
        } else {
	        $this->response->redirect($this->url->link('error/not_found', '', true));
        }
    }

    protected function validate() {
    	$oct_popup_call_phone_data = $this->config->get('oct_popup_call_phone_data');

        if (isset($this->request->post['name']) && (isset($oct_popup_call_phone_data['name']) && $oct_popup_call_phone_data['name'] == 2) && (utf8_strlen(trim($this->request->post['name'])) < 1 || utf8_strlen(trim($this->request->post['name'])) > 32)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (isset($this->request->post['telephone'])) {
			$this->request->post['telephone'] = preg_replace("/[^0-9,\(\),\-,_,+]/", '', $this->request->post['telephone']);
		}

        if (isset($this->request->post['telephone']) && !empty($oct_popup_call_phone_data['mask'])) {
            $phone_count = utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $oct_popup_call_phone_data['mask']));

            if ((isset($oct_popup_call_phone_data['telephone']) && $oct_popup_call_phone_data['telephone'] == 2) && (utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $this->request->post['telephone'])) < $phone_count || !preg_match('/[0-9,\-,+,\(,\),_]/', $this->request->post['telephone']))) {
                $this->error['telephone'] = $this->language->get('error_telephone_mask');
            }
        } elseif (isset($this->request->post['telephone']) && ((isset($oct_popup_call_phone_data['telephone']) && $oct_popup_call_phone_data['telephone'] == 2) && (utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $this->request->post['telephone'])) > 15 || utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $this->request->post['telephone'])) < 3) || !preg_match('/[0-9,\-,+,\(,\),_]/', $this->request->post['telephone']))) {
            $this->error['telephone'] = $this->language->get('error_telephone');
        }

        if ($this->config->get('config_account_id') && !isset($this->request->post['agree'])) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

			if (isset($information_info) && !empty($information_info)) {
				$this->error['agree'] = sprintf($this->language->get('error_oct_terms'), $information_info['title']);
			}
        }

	    return !$this->error;
    }
}
