<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ModelOCTemplatesFaqOCTProductFaq extends Model {
	public function addFaq($product_id, $data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "oct_faq SET author = '" . $this->db->escape($data['name']) . "', email = '" . $this->db->escape($data['email']) . "', customer_id = '" . (int)$this->customer->getId() . "', product_id = '" . (int)$product_id . "', text = '" . $this->db->escape($data['text']) . "', date_added = NOW()");

		$review_id = $this->db->getLastId();

        return $review_id;
	}

	public function getFaqsByProductId($product_id, $start = 0, $limit = 20) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 20;
		}

		$query = $this->db->query("SELECT f.faq_id, f.author, f.text, f.answer, p.product_id, pd.name, p.price, p.image, f.date_added FROM " . DB_PREFIX . "oct_faq f LEFT JOIN " . DB_PREFIX . "product p ON (f.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.product_id = '" . (int)$product_id . "' AND p.date_available <= NOW() AND p.status = '1' AND f.status = '1' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY f.date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalFaqsByProductId($product_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_faq f LEFT JOIN " . DB_PREFIX . "product p ON (f.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.product_id = '" . (int)$product_id . "' AND p.date_available <= NOW() AND p.status = '1' AND f.status = '1' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row['total'];
	}
}
