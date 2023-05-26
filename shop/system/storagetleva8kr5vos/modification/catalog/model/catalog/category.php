<?php
class ModelCatalogCategory extends Model {
	public function getCategory($category_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row;
	}


			public function getOCTCategories($parent_id = 0, $limit = 0, $data = []) {
				if (empty($data)) {
					$sql = "
						SELECT * FROM `" . DB_PREFIX . "category` c
						LEFT JOIN `" . DB_PREFIX . "category_description` cd
							ON (c.category_id = cd.category_id)
						LEFT JOIN `" . DB_PREFIX . "category_to_store` c2s
							ON (c.category_id = c2s.category_id)
						WHERE
							c.parent_id = '" . (int)$parent_id . "'
							AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'
					";

					if ($parent_id == 0) {
						$sql.= " AND c.top = 1 ";
					}

					$sql.= "AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
							AND c.status = '1'
						ORDER BY
							c.sort_order,
							LCASE(cd.name) ";

					if (isset($limit) && !empty($limit)) {
						$sql .= " LIMIT " . (int)$limit;
					}

					$query = $this->db->query($sql);
				} else {
					$sql = "
						SELECT * FROM `" . DB_PREFIX . "category` c
						LEFT JOIN `" . DB_PREFIX . "category_description` cd
							ON (c.category_id = cd.category_id)
						LEFT JOIN `" . DB_PREFIX . "category_to_store` c2s
							ON (c.category_id = c2s.category_id)
						WHERE ";

					if (isset($data['categories_id']) && !empty($data['categories_id'])) {
						$explode = [];

						foreach ($data['categories_id'] as $category_id) {
							$explode[] = (int)$category_id;
						}

						$sql .= " c.category_id IN (" . implode(',', $explode) . ") ";
					} elseif (isset($data['category_id']) && !empty($data['category_id'])) {
						$sql .= " c.parent_id = '" . (int)$data['category_id'] . "' ";
					} else {
						$sql .= " c.parent_id = '" . (int)$parent_id . "' ";
					}

					$sql .= "AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'
							AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
							AND c.status = '1'";
					if (isset($data['sort']) && !empty($data['sort'])) {
						$sql .= " ORDER BY ". $this->db->escape($data['sort']) .", LCASE(cd.name)";
					} else {
						$sql .= " ORDER BY c.sort_order, LCASE(cd.name)";
					}

					if (isset($data['limit']) && !empty($data['limit'])) {
						$sql .= " LIMIT " . (int)$data['limit'];
					}

					$query = $this->db->query($sql);
				}

				return $query->rows;
			}

			public function getOCTCategory($category_id) {
				$query = $this->db->query("
					SELECT
						DISTINCT
							c.category_id,
							cd2.name,
						(
							SELECT
								GROUP_CONCAT(cd1.category_id ORDER BY level SEPARATOR '_')
							FROM " . DB_PREFIX . "category_path cp
							LEFT JOIN " . DB_PREFIX . "category_description cd1
							ON
								(cp.path_id = cd1.category_id AND cp.category_id != cp.path_id)
							WHERE
								cp.category_id = c.category_id
								AND cd1.language_id = '" . (int)$this->config->get('config_language_id') . "'
							GROUP BY
								cp.category_id
						)
						AS path
					FROM " . DB_PREFIX . "category c
					LEFT JOIN " . DB_PREFIX . "category_description cd2
					ON
						(c.category_id = cd2.category_id)
					WHERE
						c.category_id = '" . (int)$category_id . "'
						AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'
						AND c.status = '1'
				");

				return $query->row;
			}
			
	public function getCategories($parent_id = 0) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' ORDER BY c.sort_order, LCASE(cd.name)");

		return $query->rows;
	}

	public function getCategoryFilters($category_id) {
		$implode = array();

		$query = $this->db->query("SELECT filter_id FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$implode[] = (int)$result['filter_id'];
		}

		$filter_group_data = array();

		if ($implode) {
			$filter_group_query = $this->db->query("SELECT DISTINCT f.filter_group_id, fgd.name, fg.sort_order FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_group fg ON (f.filter_group_id = fg.filter_group_id) LEFT JOIN " . DB_PREFIX . "filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND fgd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY f.filter_group_id ORDER BY fg.sort_order, LCASE(fgd.name)");

			foreach ($filter_group_query->rows as $filter_group) {
				$filter_data = array();

				$filter_query = $this->db->query("SELECT DISTINCT f.filter_id, fd.name FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_description fd ON (f.filter_id = fd.filter_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND f.filter_group_id = '" . (int)$filter_group['filter_group_id'] . "' AND fd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY f.sort_order, LCASE(fd.name)");

				foreach ($filter_query->rows as $filter) {
					$filter_data[] = array(
						'filter_id' => $filter['filter_id'],
						'name'      => $filter['name']
					);
				}

				if ($filter_data) {
					$filter_group_data[] = array(
						'filter_group_id' => $filter_group['filter_group_id'],
						'name'            => $filter_group['name'],
						'filter'          => $filter_data
					);
				}
			}
		}

		return $filter_group_data;
	}

	public function getCategoryLayoutId($category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getTotalCategoriesByCategoryId($parent_id = 0) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row['total'];
	}
}