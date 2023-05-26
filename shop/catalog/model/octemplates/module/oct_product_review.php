<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctProductReview extends Model {
	public function getAllReviews($data = array()) {
		$query = $this->db->query("
			SELECT
				DISTINCT r.*,
				pd.name,
				p.image,
				p.product_id
			FROM " . DB_PREFIX . "review r
			LEFT JOIN " . DB_PREFIX . "product p
				ON (r.product_id = p.product_id)
			LEFT JOIN " . DB_PREFIX . "product_description pd
				ON (p.product_id = pd.product_id)
			LEFT JOIN " . DB_PREFIX . "product_to_store p2s
				ON (p.product_id = p2s.product_id)
			WHERE
				p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
				AND p.date_available <= NOW()
				AND p.status = '1'
				AND r.status = '1'
				AND	pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
			ORDER BY
				r.date_added DESC
			LIMIT
				" . (int)$data['start'] . "," . (int)$data['limit']
		);

		return $query->rows;
	}
}
