<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesModuleOctPopupCallPhone extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_popup_call_phone');
        $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        $this->load->model('localisation/language');

		$oct_popup_call_phone_page_info = $this->model_setting_setting->getSetting('oct_popup_call_phone');

		if (!$oct_popup_call_phone_page_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_popup_call_phone/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_popup_call_phone', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('octemplates/module/oct_popup_call_phone', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_popup_call_phone', 'user_token=' . $this->session->data['user_token'], true)
		];

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

        $data['action'] = $this->url->link('octemplates/module/oct_popup_call_phone', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->error['notify_email'])) {
            $data['error_notify_email'] = $this->error['notify_email'];
        } else {
            $data['error_notify_email'] = '';
        }

        if (isset($this->request->post['oct_popup_call_phone_status'])) {
            $data['oct_popup_call_phone_status'] = $this->request->post['oct_popup_call_phone_status'];
        } else {
            $data['oct_popup_call_phone_status'] = $this->config->get('oct_popup_call_phone_status');
        }

        if (isset($this->request->post['oct_popup_call_phone_data'])) {
            $data['oct_popup_call_phone_data'] = $this->request->post['oct_popup_call_phone_data'];
        } else {
            $data['oct_popup_call_phone_data'] = $this->config->get('oct_popup_call_phone_data');
        }

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_popup_call_phone', $data));
    }

    public function history() {
        $data = [];
        $this->load->model('octemplates/module/oct_popup_call_phone');
        $this->load->language('octemplates/module/oct_popup_call_phone');

        $page          = (isset($this->request->get['page'])) ? $this->request->get['page'] : 1;
        $data['user_token'] = $this->session->data['user_token'];

        $data['histories'] = [];

        $filter_data = [
            'start' => ($page - 1) * 20,
            'limit' => 20,
            'sort' => 'r.date_added',
            'order' => 'DESC'
        ];

        $results = $this->model_octemplates_module_oct_popup_call_phone->getCallArray($filter_data);

        foreach ($results as $result) {
            $info = [];

            $fields = unserialize($result['info']);

            foreach ($fields as $field) {
                $info[] = [
                    'name' => $field['name'],
                    'value' => $field['value']
                ];
            }

            $data['histories'][] = [
                'request_id' => $result['request_id'],
                'info' => $info,
                'processed' => $result['processed'],
                'date_added' => $result['date_added']
            ];
        }

        $history_total = $this->model_octemplates_module_oct_popup_call_phone->getTotalCallArray();

        $pagination        = new Pagination();
        $pagination->total = $history_total;
        $pagination->page  = $page;
        $pagination->limit = 20;
        $pagination->url   = $this->url->link('octemplates/module/oct_popup_call_phone/history', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($history_total) ? (($page - 1) * 20) + 1 : 0, ((($page - 1) * 20) > ($history_total - 20)) ? $history_total : ((($page - 1) * 20) + 20), $history_total, ceil($history_total / 20));

        $this->response->setOutput($this->load->view('octemplates/module/oct_popup_call_phone_history', $data));
    }

    public function history_add_processed() {
        $json = [];
        $this->load->model('octemplates/module/oct_popup_call_phone');
        $this->load->language('octemplates/module/oct_popup_call_phone');

        $results = $this->model_octemplates_module_oct_popup_call_phone->addProcessed((int) $this->request->get['request_id'], (int) $this->request->get['processed_status']);

		$json['output'] = $results;

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }

    public function delete_selected() {
        $json = [];
        $this->load->model('octemplates/module/oct_popup_call_phone');

        $info = $this->model_octemplates_module_oct_popup_call_phone->getCall((int) $this->request->get['delete']);

        if ($info) {
            $this->model_octemplates_module_oct_popup_call_phone->deleteCall((int) $this->request->get['delete']);
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete_all() {
        $json = [];
        $this->load->model('octemplates/module/oct_popup_call_phone');

        $this->model_octemplates_module_oct_popup_call_phone->deleteAllCallArray();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete_all_selected() {
        $json = [];
        $this->load->model('octemplates/module/oct_popup_call_phone');

        if (isset($this->request->request['selected'])) {
            foreach ($this->request->request['selected'] as $request_id) {
                $info = $this->model_octemplates_module_oct_popup_call_phone->getCall((int) $request_id);

                if ($info) {
                    $this->model_octemplates_module_oct_popup_call_phone->deleteCall((int) $request_id);
                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_popup_call_phone');

        $this->load->model('octemplates/module/oct_popup_call_phone');
        $this->load->model('setting/setting');
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_popup_call_phone');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_popup_call_phone');

        $this->model_octemplates_module_oct_popup_call_phone->makeDB();

        $this->model_setting_setting->editSetting('oct_popup_call_phone', [
            'oct_popup_call_phone_status' => '1',
            'oct_popup_call_phone_data' => [
                'notify_status' => '1',
                'notify_email' => $this->config->get('config_email'),
                'name' => '2',
                'telephone' => '2',
                'comment' => '1',
                'mask' => '8 (999) 999-99-99'
            ]
        ]);

        $this->session->data['success'] = $this->language->get('text_success_install');

		$this->response->redirect($this->url->link('octemplates/module/oct_popup_call_phone', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
        $this->load->model('setting/setting');
        $this->load->model('octemplates/module/oct_popup_call_phone');
        $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_popup_call_phone');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_popup_call_phone');

        $this->model_octemplates_module_oct_popup_call_phone->deleteDB();

        $this->model_setting_setting->deleteSetting('oct_popup_call_phone');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_popup_call_phone')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        foreach ($this->request->post['oct_popup_call_phone_data'] as $key => $field) {
            if (empty($field) && $key == "notify_email") {
                $this->error['notify_email'] = $this->language->get('error_notify_email');
            }
        }

        return !$this->error;
    }
}
