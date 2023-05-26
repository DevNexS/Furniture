<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOCTSreviewSetting extends Controller {
    private $error = [];

    public function index() {
        $data = [];

        $this->load->language('octemplates/module/oct_sreview_setting');

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
        $this->load->model('octemplates/module/oct_sreview_reviews');

		$sreview_setting_page_info = $this->model_setting_setting->getSetting('oct_sreview_setting');

		if (!$sreview_setting_page_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_sreview_setting/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['user_token'] = $this->session->data['user_token'];

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_sreview_setting', $this->request->post);
            $this->model_octemplates_module_oct_sreview_reviews->editSeoUrls($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('octemplates/module/oct_sreview_setting', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['config_email'] = $this->config->get('config_email');

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_sreview_setting', 'user_token=' . $this->session->data['user_token'], true)
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

        $data['action'] = $this->url->link('octemplates/module/oct_sreview_setting', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['oct_sreview_setting_status'])) {
			$data['oct_sreview_setting_status'] = $this->request->post['oct_sreview_setting_status'];
		} else {
			$data['oct_sreview_setting_status'] = $this->config->get('oct_sreview_setting_status');
		}

        if (isset($this->request->post['oct_sreview_setting_data'])) {
            $data['oct_sreview_setting_data'] = $this->request->post['oct_sreview_setting_data'];
        } else {
            $data['oct_sreview_setting_data'] = $this->config->get('oct_sreview_setting_data');
        }

        $data['sreview_seo_url'] = [];

        if (isset($this->request->post['sreview_seo_url'])) {
            $data['sreview_seo_url'] = $this->request->post['sreview_seo_url'];
        } else {
            $data['sreview_seo_url'] = $this->model_octemplates_module_oct_sreview_reviews->getSeoUrls();
        }

        if (isset($this->error['keyword'])) {
            $data['error_keyword'] = $this->error['keyword'];
        } else {
            $data['error_keyword'] = '';
        }

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/module/oct_sreview_setting', $data));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_sreview_setting');

        $this->load->model('octemplates/module/oct_sreview_reviews');
        $this->load->model('setting/setting');
		$this->load->model('user/user_group');
		$this->load->model('localisation/language');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_sreview_setting');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_sreview_setting');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_sreview_subject');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_sreview_subject');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_sreview_reviews');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_sreview_reviews');

		$this->model_octemplates_module_oct_sreview_reviews->installTables();

		foreach ($this->model_localisation_language->getLanguages() as $language) {
			$default_language_data[$language['language_id']] = [
				'seo_title' => '',
				'seo_meta_description' => '',
				'seo_meta_keywords' => '',
				'seo_h1' => '',
				'seo_description' => ''
			];
		}

		$this->model_setting_setting->editSetting('oct_sreview_setting', [
			'oct_sreview_setting_status' => '1',
			'oct_sreview_setting_data' => [
				'review_moderation' => '1',
				'review_admin_email' => '1',
				'review_email_to' => $this->config->get('config_email'),
				'language' => $default_language_data
			]
		]);

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route WHERE route = 'octemplates/module/oct_sreview_reviews'");

		if ($query->num_rows == 0) {
            $layout_add = [
                'name' => 'Octemplates - Store Reviews',
                'layout_route' => [
                    0 => [
                        'store_id' => '0',
                        'route' => 'octemplates/module/oct_sreview_reviews'
                    ]
                ],
                'layout_module' => []
            ];

            $this->load->model('design/layout');

            $this->model_design_layout->addLayout($layout_add);
        }

        $this->session->data['success'] = $this->language->get('text_success_install');

		$this->response->redirect($this->url->link('octemplates/module/oct_sreview_setting', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');
		$this->load->model('octemplates/module/oct_sreview_reviews');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_sreview_setting');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_sreview_setting');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_sreview_subject');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_sreview_subject');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_sreview_reviews');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_sreview_reviews');

		$this->model_setting_setting->deleteSetting('oct_sreview_setting');

		$this->model_octemplates_module_oct_sreview_reviews->deleteTables();
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_sreview_setting')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ($this->request->post['sreview_seo_url']) {
            foreach ($this->request->post['sreview_seo_url'] as $store_id => $language) {
                foreach ($language as $language_id => $keyword) {
                    if (!empty($keyword)) {
                        if (count(array_keys($language, $keyword)) > 1) {
                            $this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
                        }

                    }
                }
            }
        }

        return !$this->error;
    }
}
