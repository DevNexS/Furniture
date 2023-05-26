<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2020						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerExtensionModuleOctBenefits extends Controller {
    public function index($setting) {
	    static $module = 0;

        if (isset($setting['status']) && $setting['status'] && !empty($setting['oct_benegits_data'])) {
            $data['oct_benefits'] = $setting['oct_benegits_data'];
            $data['language_id'] = (int)$this->config->get('config_language_id');
            $data['oct_class'] = 12 / count($setting['oct_benegits_data']);

            $data['oct_main_class'] = (count($setting['oct_benegits_data']) % 2 === 0) ? false : true;

			$data['module'] = $module++;

            return $this->load->view('octemplates/module/oct_benefits', $data);
        }
    }
}
