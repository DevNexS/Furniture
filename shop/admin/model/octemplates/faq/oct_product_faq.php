<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ModelOCTemplatesFaqOCTProductFaq extends Model {
	public function addFaq($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "oct_faq SET author = '" . $this->db->escape($data['author']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', answer = '" . $this->db->escape(strip_tags($data['answer'])) . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "'");

		$faq_id = $this->db->getLastId();

		return $faq_id;
	}

	public function editFaq($faq_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "oct_faq SET author = '" . $this->db->escape($data['author']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', answer = '" . $this->db->escape(strip_tags($data['answer'])) . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW() WHERE faq_id = '" . (int)$faq_id . "'");
	}

	public function deleteFaq($faq_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_faq WHERE faq_id = '" . (int)$faq_id . "'");
	}

	public function getFaq($faq_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT pd.name FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = f.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS product FROM " . DB_PREFIX . "oct_faq f WHERE f.faq_id = '" . (int)$faq_id . "'");

		return $query->row;
	}

	public function getFaqs($data = array()) {
		$sql = "SELECT f.faq_id, pd.name, f.author, f.answer, f.status, f.date_added FROM " . DB_PREFIX . "oct_faq f LEFT JOIN " . DB_PREFIX . "product_description pd ON (f.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_product'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_product']) . "%'";
		}

		if (!empty($data['filter_author'])) {
			$sql .= " AND f.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND f.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(f.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		$sort_data = array(
			'pd.name',
			'f.author',
			'f.status',
			'f.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY f.date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalFaqs($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_faq f LEFT JOIN " . DB_PREFIX . "product_description pd ON (f.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_product'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_product']) . "%'";
		}

		if (!empty($data['filter_author'])) {
			$sql .= " AND f.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND f.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(f.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalFaqsAwaitingApproval() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_faq WHERE status = '0'");

		return $query->row['total'];
	}

	public function createDBTables() {
		$sql = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_faq` (
				`faq_id` int(11) NOT NULL AUTO_INCREMENT,
				`product_id` int(11) NOT NULL,
				`customer_id` int(11) NOT NULL,
				`author` varchar(64) NOT NULL,
				`text` text NOT NULL,
				`email` varchar(96) NOT NULL,
				`answer` text NOT NULL,
				`status` tinyint(1) NOT NULL DEFAULT '0',
				`date_added` datetime NOT NULL,
				`date_modified` datetime NOT NULL,
				PRIMARY KEY (`faq_id`),
				KEY `product_id` (`product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$this->db->query($sql);
	}
}
