<?php
/**********************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesModuleOctProductTabsSettings extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_product_tabs_settings');

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
        $this->load->model('octemplates/module/oct_product_tabs_settings');
        $this->load->model('octemplates/module/oct_product_tabs');

        $data['user_token'] = $this->session->data['user_token'];

        $this->load->model('localisation/language');

		$oct_product_tabs_info = $this->model_setting_setting->getSetting('oct_product_tabs');

		if (!$oct_product_tabs_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_product_tabs_settings/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->request->post['oct_product_tabs_status'] = isset($this->request->post['oct_product_tabs_status']) ? 1 : 0;

            $this->model_setting_setting->editSetting('oct_product_tabs', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('octemplates/module/oct_product_tabs_settings', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
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

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_product_tabs_settings', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['action'] = $this->url->link('octemplates/module/oct_product_tabs_settings', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['oct_product_tabs_status'])) {
            $data['oct_product_tabs_status'] = $this->request->post['oct_product_tabs_status'];
        } else {
            $data['oct_product_tabs_status'] = $this->config->get('oct_product_tabs_status');
        }

        $categories = $this->model_octemplates_module_oct_product_tabs_settings->getCategories();

        $data['categories'] = $this->getAllCategories($categories);

        $data['tabs'] = $this->model_octemplates_module_oct_product_tabs->getProductTabs();

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_product_tabs_settings', $data));
    }

    private function getAllCategories($categories, $parent_id = 0, $parent_name = '') {
        $output = [];

        if (array_key_exists($parent_id, $categories)) {
            if ($parent_name != '') {
                $parent_name .= ' &gt; ';
            }

            foreach ($categories[$parent_id] as $category) {
                $output[$category['category_id']] = [
                    'category_id' => $category['category_id'],
                    'name' => $parent_name . $category['name']
                ];

                $output += $this->getAllCategories($categories, $category['category_id'], $parent_name . $category['name']);
            }
        }

        uasort($output, [
            $this,
            'sortByName'
        ]);

        return $output;
    }

    function sortByName($a, $b) {
        return strcmp($a['name'], $b['name']);
    }

    public function install() {
        $this->load->language('octemplates/module/oct_product_tabs_settings');

        $this->load->model('octemplates/module/oct_product_tabs_settings');
        $this->load->model('setting/setting');
        $this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_product_tabs_settings');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_product_tabs_settings');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_product_tabs');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_product_tabs');

        $this->model_setting_setting->editSetting('oct_product_tabs', [
            'oct_product_tabs_status' => '1'
        ]);

        $this->model_octemplates_module_oct_product_tabs_settings->makeDB();

        $this->session->data['success'] = $this->language->get('text_success_install');

		$this->response->redirect($this->url->link('octemplates/module/oct_product_tabs_settings', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
        $this->load->model('setting/setting');
        $this->load->model('octemplates/module/oct_product_tabs_settings');

        $this->model_octemplates_module_oct_product_tabs_settings->removeDB();
        $this->model_setting_setting->deleteSetting('oct_product_tabs_status');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_product_tabs_settings')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function tap_processing() {
        $json = [];

        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_product_tabs_settings')) {
            $json['error'] = $this->language->get('error_permission');
        } else {
            if (isset($this->request->request['type'])) {
                if (isset($this->request->request['module_categories']) && isset($this->request->request['module_tab']) && isset($this->request->request['tab_description'])) {

                    $this->load->model('octemplates/module/oct_product_tabs_settings');
                    $this->load->language('octemplates/module/oct_product_tabs_settings');

                    if (empty($this->request->request['module_tab'])) {
                        $json['error'] = $this->language->get('error_enter_tab');
                    }

                    if (isset($this->request->request['type']) &&  $this->request->request['type'] == 'add') {
                        foreach ($this->request->request['tab_description'] as $language_id => $value) {
                            if (empty($value['text'])) {
                                $json['error'] = $this->language->get('error_enter_text');
                                break;
                            }
                        }
                    }


                    if (!isset($json['error'])) {
                        if (isset($this->request->request['type']) &&  $this->request->request['type'] == 'add') {
                            $status = $this->model_octemplates_module_oct_product_tabs_settings->updateTab($this->request->request['module_categories'], $this->request->request['module_tab'], $this->request->request['tab_description']);
                        } else {
                            $status = $this->model_octemplates_module_oct_product_tabs_settings->removeTab($this->request->request['module_categories'], $this->request->request['module_tab']);
                        }

                        if ($status) {
                            $json['success'] = $this->language->get('text_bulk_tabs_success');
                        } else {
                            $json['error'] = $this->language->get('error_select_produts');
                        }

                        $this->cache->delete('product');
                    }

                }
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
