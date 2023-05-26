<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOctPolicy extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_policy');

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
        $this->load->model('localisation/language');

		$oct_policy_info = $this->model_setting_setting->getSetting('oct_policy');

		if (!$oct_policy_info) {
            $this->response->redirect($this->url->link('octemplates/module/oct_policy/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_policy', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('octemplates/module/oct_policy', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_policy', 'user_token=' . $this->session->data['user_token'], true)
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

        $data['action'] = $this->url->link('octemplates/module/oct_policy', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];
		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('catalog/information');

		$data['informations'] = [];

		$filter_data = [
			'sort'  => 'id.title',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 10000
		];

		$informations_info = $this->model_catalog_information->getInformations($filter_data);

		foreach ($informations_info as $result) {
			$data['informations'][] = [
				'information_id' => $result['information_id'],
				'title'          => $result['title']
			];
		}

        if (isset($this->request->post['oct_policy_status'])) {
			$data['oct_policy_status'] = $this->request->post['oct_policy_status'];
		} else {
			$data['oct_policy_status'] = $this->config->get('oct_policy_status');
		}

        if (isset($this->request->post['oct_policy_data'])) {
			$data['oct_policy_data'] = $this->request->post['oct_policy_data'];
		} else {
			$data['oct_policy_data'] = $this->config->get('oct_policy_data');
		}

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_policy', $data));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_policy');

        $this->load->model('setting/setting');
        $this->load->model('localisation/language');
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_policy');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_policy');

        $results = $this->model_localisation_language->getLanguages();

		$module_text = [];

        foreach ($results as $result) {
            $module_text[$result['language_id']] = '';
        }

        $this->model_setting_setting->editSetting('oct_policy', [
	        'oct_policy_status' => '1',
            'oct_policy_data' => [
	            'indormation_id' => 0,
	            'max_day' => 7,
	            'value' => 'oct_policy',
	            'module_text' => $module_text
            ]
        ]);

        $this->session->data['success'] = $this->language->get('text_success_install');

        $this->response->redirect($this->url->link('octemplates/module/oct_policy', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

	    $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_policy');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_policy');

	    $this->model_setting_setting->deleteSetting('oct_policy');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_policy')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
