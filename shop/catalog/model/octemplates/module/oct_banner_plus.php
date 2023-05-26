<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctBannerPlus extends Model {
	public function getBanner($banner_id) {
		$query = $this->db->query("
			SELECT
				*
			FROM " . DB_PREFIX . "oct_banner_plus_image bi
			LEFT JOIN " . DB_PREFIX . "oct_banner_plus_image_description bid
				ON (bi.banner_image_id  = bid.banner_image_id)
			WHERE
				bi.banner_id = '" . (int)$banner_id . "'
				AND bid.language_id = '" . (int)$this->config->get('config_language_id') . "'
			ORDER BY
				bi.sort_order ASC");

		return $query->rows;
	}
}
