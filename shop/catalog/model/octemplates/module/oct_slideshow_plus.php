<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctSlideshowPlus extends Model {
	public function getSlideshow($slideshow_id) {
		$query = $this->db->query("
			SELECT
				*
			FROM `" . DB_PREFIX . "oct_slideshow_plus` s
			LEFT JOIN `" . DB_PREFIX . "oct_slideshow_plus_image` si
				ON (s.slideshow_id = si.slideshow_id)
			LEFT JOIN `" . DB_PREFIX . "oct_slideshow_plus_image_description` sid
				ON (si.slideshow_image_id = sid.slideshow_image_id)
			WHERE
				s.slideshow_id = '" . (int)$slideshow_id . "'
				AND sid.language_id = '" . (int)$this->config->get('config_language_id') . "'
				AND s.status = '1'
			ORDER BY
				si.sort_order ASC");

		return $query->rows;
	}

    public function getSlideshowProduct($slideshow_id) {
        $discount_products_data = [];

        $query = $this->db->query("
        	SELECT * FROM `" . DB_PREFIX . "oct_slideshow_plus_product`
        	WHERE
        		slideshow_id = '" . (int) $slideshow_id . "'
        ");

        foreach ($query->rows as $result) {
            $discount_products_data[] = $result['product_id'];
        }

        return $discount_products_data;
    }
}
