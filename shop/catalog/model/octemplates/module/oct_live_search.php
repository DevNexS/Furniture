<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctLiveSearch extends Model {
	public function doSearch($key) {
		$search_data = $this->config->get('theme_oct_remarket_live_search_data');

		$sql = "
			SELECT
				p.product_id
		 	FROM " . DB_PREFIX . "product p
			LEFT JOIN " . DB_PREFIX . "product_description pd
				ON (p.product_id = pd.product_id)
			LEFT JOIN " . DB_PREFIX . "product_to_store p2s
				ON (p.product_id = p2s.product_id)
			WHERE
				p.status = '1'
				AND p.date_available <= NOW()
				AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
		";

		if (isset($key) && !empty($key)) {
			$sql .= " AND (";

			$implode = [];

			$words = explode(' ', trim(preg_replace('/\s+/', ' ', $key)));

			foreach ($words as $word) {
				$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
			}

			if ($implode) {
				$sql .= " " . implode(" AND ", $implode) . "";
			}

			if (isset($search_data['description']) && $search_data['description']) {
				$sql .= " OR pd.description LIKE '%" . $this->db->escape($key) . "%'";
			}

			$sql .= " OR LCASE(p.sku) LIKE '%" . $this->db->escape(utf8_strtolower($key)) . "%'";
			$sql .= " OR LCASE(p.model) LIKE '%" . $this->db->escape(utf8_strtolower($key)) . "%'";
			$sql .= ")";
		}

		$sql .= "
			GROUP BY
				p.product_id
			ORDER BY
				p.sort_order ASC,
				LOWER(pd.name) ASC,
				LOWER(p.model) ASC
			LIMIT 15
		";

		$query = $this->db->query($sql);

		return $query->rows;
	}
}
