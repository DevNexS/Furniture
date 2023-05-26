<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2019					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerExtensionAnalyticsOCTAnalytics extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/analytics/oct_analytics');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('analytics_oct_analytics', $this->request->post, $this->request->get['store_id']);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['google_code'])) {
			$data['error_google_code'] = $this->error['google_code'];
		} else {
			$data['error_google_code'] = '';
		}

		if (isset($this->error['yandex_code'])) {
			$data['error_yandex_code'] = $this->error['yandex_code'];
		} else {
			$data['error_yandex_code'] = '';
		}

		if (isset($this->error['yandex_container'])) {
			$data['error_yandex_container'] = $this->error['yandex_container'];
		} else {
			$data['error_yandex_container'] = '';
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true)
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/analytics/oct_analytics', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true)
		];

		$data['action'] = $this->url->link('extension/analytics/oct_analytics', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true);

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->post['analytics_oct_analytics_status'])) {
			$data['analytics_oct_analytics_status'] = $this->request->post['analytics_oct_analytics_status'];
		} else {
			$data['analytics_oct_analytics_status'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_status', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_position'])) {
			$data['analytics_oct_analytics_position'] = $this->request->post['analytics_oct_analytics_position'];
		} else {
			$data['analytics_oct_analytics_position'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_position', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_targets'])) {
			$data['analytics_oct_analytics_targets'] = $this->request->post['analytics_oct_analytics_targets'];
		} else {
			$data['analytics_oct_analytics_targets'] = json_decode($this->model_setting_setting->getSettingValue('analytics_oct_analytics_targets', $this->request->get['store_id']));
		}

		if (isset($this->request->post['analytics_oct_analytics_google_status'])) {
			$data['analytics_oct_analytics_google_status'] = $this->request->post['analytics_oct_analytics_google_status'];
		} else {
			$data['analytics_oct_analytics_google_status'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_google_status', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_google_code'])) {
			$data['analytics_oct_analytics_google_code'] = $this->request->post['analytics_oct_analytics_google_code'];
		} else {
			$data['analytics_oct_analytics_google_code'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_google_code', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_googleads_code'])) {
			$data['analytics_oct_analytics_googleads_code'] = $this->request->post['analytics_oct_analytics_googleads_code'];
		} else {
			$data['analytics_oct_analytics_googleads_code'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_googleads_code', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_googletm_code'])) {
			$data['analytics_oct_analytics_googletm_code'] = $this->request->post['analytics_oct_analytics_googletm_code'];
		} else {
			$data['analytics_oct_analytics_googletm_code'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_googletm_code', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_google_webmaster_code'])) {
			$data['analytics_oct_analytics_google_webmaster_code'] = $this->request->post['analytics_oct_analytics_google_webmaster_code'];
		} else {
			$data['analytics_oct_analytics_google_webmaster_code'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_google_webmaster_code', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_google_ecommerce'])) {
			$data['analytics_oct_analytics_google_ecommerce'] = $this->request->post['analytics_oct_analytics_google_ecommerce'];
		} else {
			$data['analytics_oct_analytics_google_ecommerce'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_google_ecommerce', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_yandex_status'])) {
			$data['analytics_oct_analytics_yandex_status'] = $this->request->post['analytics_oct_analytics_yandex_status'];
		} else {
			$data['analytics_oct_analytics_yandex_status'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_yandex_status', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_yandex_code'])) {
			$data['analytics_oct_analytics_yandex_code'] = $this->request->post['analytics_oct_analytics_yandex_code'];
		} else {
			$data['analytics_oct_analytics_yandex_code'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_yandex_code', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_yandex_webmaster_code'])) {
			$data['analytics_oct_analytics_yandex_webmaster_code'] = $this->request->post['analytics_oct_analytics_yandex_webmaster_code'];
		} else {
			$data['analytics_oct_analytics_yandex_webmaster_code'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_yandex_webmaster_code', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_yandex_container'])) {
			$data['analytics_oct_analytics_yandex_container'] = $this->request->post['analytics_oct_analytics_yandex_container'];
		} else {
			$data['analytics_oct_analytics_yandex_container'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_yandex_container', $this->request->get['store_id']);
		}

		if (isset($this->request->post['analytics_oct_analytics_yandex_ecommerce'])) {
			$data['analytics_oct_analytics_yandex_ecommerce'] = $this->request->post['analytics_oct_analytics_yandex_ecommerce'];
		} else {
			$data['analytics_oct_analytics_yandex_ecommerce'] = $this->model_setting_setting->getSettingValue('analytics_oct_analytics_yandex_ecommerce', $this->request->get['store_id']);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/analytics/oct_analytics', $data));
	}

	public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/analytics/oct_analytics');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/analytics/oct_analytics');

	    $this->model_setting_setting->deleteSetting('analytics_oct_analytics');
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/analytics/oct_analytics')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((isset($this->request->post['analytics_oct_analytics_google_status']) && $this->request->post['analytics_oct_analytics_google_status'] == 'on') && empty($this->request->post['analytics_oct_analytics_google_code'])) {
			$this->error['google_code'] = $this->language->get('error_code');
		}

		if ((isset($this->request->post['analytics_oct_analytics_yandex_status']) && $this->request->post['analytics_oct_analytics_yandex_status'] == 'on') && empty($this->request->post['analytics_oct_analytics_yandex_code'])) {
			$this->error['yandex_code'] = $this->language->get('error_code');
		}

		if ((isset($this->request->post['analytics_oct_analytics_yandex_ecommerce']) && $this->request->post['analytics_oct_analytics_yandex_ecommerce'] == 'on') && empty($this->request->post['analytics_oct_analytics_yandex_container'])) {
			$this->error['yandex_container'] = $this->language->get('error_code');
		}

		return !$this->error;
	}
}
