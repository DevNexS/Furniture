<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022							  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOctPopupView extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_popup_view');

        $this->document->setTitle($this->language->get('heading_title'));
        $this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
        $this->document->addStyle('view/stylesheet/oct_remarket.css');

        $this->load->model('setting/setting');

        $oct_popup_view_info = $this->model_setting_setting->getSetting('oct_popup_view');

        if (!$oct_popup_view_info) {
            $this->response->redirect($this->url->link('octemplates/module/oct_popup_view/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_popup_view', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('octemplates/module/oct_popup_view', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
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
            'href' => $this->url->link('octemplates/module/oct_popup_view', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['action'] = $this->url->link('octemplates/module/oct_popup_view', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['oct_popup_view_status'])) {
			$data['oct_popup_view_status'] = $this->request->post['oct_popup_view_status'];
		} else {
			$data['oct_popup_view_status'] = $this->config->get('oct_popup_view_status');
		}

        if (isset($this->request->post['oct_popup_view_data'])) {
            $data['oct_popup_view_data'] = $this->request->post['oct_popup_view_data'];
        } else {
            $data['oct_popup_view_data'] = $this->config->get('oct_popup_view_data');
        }

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_popup_view', $data));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_popup_view');

        $this->load->model('setting/setting');
        $this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_popup_view');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_popup_view');

        $this->model_setting_setting->editSetting('oct_popup_view', [
	        'oct_popup_view_status' => '0',
            'oct_popup_view_data' => [
                'quantity' => '1',
                'specification' => '1',
                'review' => '1',
                'wishlist' => '1',
                'compare' => '1',
                'description' => '1',
                'description_max' => '2555',
                'image' => '1',
                'image_width' => 800,
                'image_height' => 600,
                'additional_image' => '1',
                'image_additional_width' => 90,
                'image_additional_height' => 90
            ]
        ]);

        $this->response->redirect($this->url->link('octemplates/module/oct_popup_view', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
        $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_popup_view');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_popup_view');

	    $this->model_setting_setting->deleteSetting('oct_popup_view');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_popup_view')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
