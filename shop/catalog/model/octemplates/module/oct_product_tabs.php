<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctProductTabs extends Model {
    public function getProductTabs($product_id) {
        $product_extra_tab_ids = [];

        $product_extra_tab_query = $this->db->query("
			SELECT DISTINCT
				*
			FROM
				`" . DB_PREFIX . "oct_product_extra_tabs` pet
				LEFT JOIN
					`" . DB_PREFIX . "oct_extra_tabs` et
					ON (et.extra_tab_id = pet.extra_tab_id)
				LEFT JOIN
					`" . DB_PREFIX . "oct_extra_tabs_description` etd
					ON (etd.extra_tab_id = pet.extra_tab_id)
			WHERE
				pet.product_id = '" . (int)$product_id . "'
				AND pet.language_id = '" . (int)$this->config->get('config_language_id') . "'
				AND etd.language_id = '" . (int)$this->config->get('config_language_id') . "'
				AND et.status = '1'
			ORDER BY
				et.sort_order ASC
		");

        if ($product_extra_tab_query->rows) {
            foreach ($product_extra_tab_query->rows as $product_extra_tab) {
                $product_extra_tab_ids[] = [
                    'title' => $product_extra_tab['title'],
                    'text' => $product_extra_tab['text']
                ];
            }
        }

        return $product_extra_tab_ids;
    }
}
