<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOCTProductsModules extends Controller {
    public function index($data) {
        $data['position'] = '';
        $data['module_name'] = 'related-products';
        $data['module'] = 0;
        $data['heading_title'] = $this->language->get('text_related');

        return $this->load->view('octemplates/module/oct_products_modules', $data);
    }
}
