<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerExtensionAnalyticsOCTAnalytics extends Controller {
    public function index() {
		$data = [];

        $data['oct_analytics_google_status'] = $this->config->get('analytics_oct_analytics_google_status');
        $data['oct_analytics_google_code'] = $this->config->get('analytics_oct_analytics_google_status') ? $this->config->get('analytics_oct_analytics_google_code') : '';
        $data['oct_analytics_googleads_code'] = $this->config->get('analytics_oct_analytics_google_status') ? $this->config->get('analytics_oct_analytics_googleads_code') : '';

        $data['oct_analytics_yandex_status'] = $this->config->get('analytics_oct_analytics_yandex_status');
        $data['oct_analytics_yandex_code'] = $this->config->get('analytics_oct_analytics_yandex_status') ? $this->config->get('analytics_oct_analytics_yandex_code') : '';
        $data['oct_analytics_yandex_ecommerce'] = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
        $data['oct_analytics_yandex_container'] = $this->config->get('analytics_oct_analytics_yandex_container');

        if ((isset($data['oct_analytics_google_status']) && $data['oct_analytics_google_status']) || (isset($data['oct_analytics_yandex_status']) && $data['oct_analytics_yandex_status'])) {
            $data['oct_analytics_targets'] = $this->config->get('analytics_oct_analytics_targets');
        } else {
            $data['oct_analytics_targets'] = [];
        }

		return $this->load->view('octemplates/analytics/oct_analytics', $data);
	}
}
