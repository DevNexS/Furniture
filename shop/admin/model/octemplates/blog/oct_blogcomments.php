<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesBlogOCTBlogComments extends Model {
	public function addComment($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcomments SET author = '" . $this->db->escape($data['author']) . "', blogarticle_id = '" . (int)$data['blogarticle_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', admin_text = '" . $this->db->escape(strip_tags($data['admin_text'])) . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "'");

		$comment_id = $this->db->getLastId();

		$this->cache->delete('oct_blogarticle');

		return $comment_id;
	}

	public function editComment($comment_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "oct_blogcomments SET author = '" . $this->db->escape($data['author']) . "', blogarticle_id = '" . (int)$data['blogarticle_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', admin_text = '" . $this->db->escape(strip_tags($data['admin_text'])) . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW() WHERE comment_id = '" . (int)$comment_id . "'");

		$this->cache->delete('oct_blogarticle');
	}

	public function deleteComment($comment_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcomments WHERE comment_id = '" . (int)$comment_id . "'");

		$this->cache->delete('oct_blogarticle');
	}

	public function getComment($comment_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT ad.name FROM " . DB_PREFIX . "oct_blogarticle_description ad WHERE ad.blogarticle_id = r.blogarticle_id AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "') AS article FROM " . DB_PREFIX . "oct_blogcomments r WHERE r.comment_id = '" . (int)$comment_id . "'");

		return $query->row;
	}

	public function getComments($data = array()) {
		$sql = "SELECT r.comment_id, ad.name, r.author, r.status, r.date_added FROM " . DB_PREFIX . "oct_blogcomments r LEFT JOIN " . DB_PREFIX . "oct_blogarticle_description ad ON (r.blogarticle_id = ad.blogarticle_id) WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_article'])) {
			$sql .= " AND ad.name LIKE '" . $this->db->escape($data['filter_article']) . "%'";
		}

		if (!empty($data['filter_author'])) {
			$sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND r.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		$sort_data = array(
			'ad.name',
			'r.author',
			'r.status',
			'r.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY r.date_added";
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

	public function getTotalComments($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_blogcomments r LEFT JOIN " . DB_PREFIX . "oct_blogarticle_description ad ON (r.blogarticle_id = ad.blogarticle_id) WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_article'])) {
			$sql .= " AND ad.name LIKE '" . $this->db->escape($data['filter_article']) . "%'";
		}

		if (!empty($data['filter_author'])) {
			$sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND r.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalCommentsAwaitingApproval() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_blogcomments WHERE status = '0'");

		return $query->row['total'];
	}
}