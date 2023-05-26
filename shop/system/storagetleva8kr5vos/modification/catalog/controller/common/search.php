<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');


	        if ($this->config->get('theme_oct_remarket_live_search_status')) {
				$oct_live_search_data = $this->config->get('theme_oct_remarket_live_search_data');
				$data['oct_live_search_status'] = $this->config->get('theme_oct_remarket_live_search_status');

		        $data['delay_setting'] = isset($oct_live_search_data['delay']) && $oct_live_search_data['delay'] ? (int)$oct_live_search_data['delay'] : 500;
		        $data['count_symbol'] = isset($oct_live_search_data['count_symbol']) && $oct_live_search_data['count_symbol'] ? (int)$oct_live_search_data['count_symbol'] : 2;
			}
			
		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}
}