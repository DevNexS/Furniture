<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerOCTemplatesModuleOCTInformationBar extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_information_bar');

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

		$this->document->addStyle('view/javascript/octemplates/spectrum/spectrum.css');
		$this->document->addScript('view/javascript/octemplates/spectrum/spectrum.js');

		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');
        $this->load->model('localisation/language');

		$oct_information_bar_info = $this->model_setting_setting->getSetting('oct_information_bar');

		if (!$oct_information_bar_info) {
            $this->response->redirect($this->url->link('octemplates/module/oct_information_bar/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_information_bar', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('octemplates/module/oct_information_bar', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_information_bar', 'user_token=' . $this->session->data['user_token'], true)
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

        $data['action'] = $this->url->link('octemplates/module/oct_information_bar', 'user_token=' . $this->session->data['user_token'], true);
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

        if (isset($this->request->post['oct_information_bar_status'])) {
			$data['oct_information_bar_status'] = $this->request->post['oct_information_bar_status'];
		} else {
			$data['oct_information_bar_status'] = $this->config->get('oct_information_bar_status');
		}

        if (isset($this->request->post['oct_information_bar_data'])) {
			$data['oct_information_bar_data'] = $this->request->post['oct_information_bar_data'];
		} else {
			$data['oct_information_bar_data'] = $this->config->get('oct_information_bar_data');
		}

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_information_bar', $data));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_information_bar');

        $this->load->model('setting/setting');
        $this->load->model('localisation/language');
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_information_bar');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_information_bar');

        $results = $this->model_localisation_language->getLanguages();

		$module_text = [];

        foreach ($results as $result) {
            $module_text[$result['language_id']] = '';
        }

        $this->model_setting_setting->editSetting('oct_information_bar', [
	        'oct_information_bar_status' => '0',
            'oct_information_bar_data' => [
	            'indormation_id' => 0,
	            'max_day' => 1,
	            'background_bar' => 'rgb(101, 108, 125)',
	            'color_text' => 'rgb(248, 248, 248)',
	            'color_url' => 'rgb(248, 248, 248)',
	            'background_button' => 'rgb(251, 145, 48)',
	            'background_button_hover' => 'rgb(255, 255, 255)',
	            'color_text_button' => 'rgb(255, 255, 255)',
	            'color_text_button_hover' => 'rgb(39, 35, 35)',
	            'value' => 'oct_information_bar',
	            'module_text' => $module_text
            ]
        ]);

        $this->session->data['success'] = $this->language->get('text_success_install');

        $this->response->redirect($this->url->link('octemplates/module/oct_information_bar', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

	    $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_information_bar');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_information_bar');

	    $this->model_setting_setting->deleteSetting('oct_information_bar');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_information_bar')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
