<?php
/************************************************************/
/*	@copyright	OCTemplates 2015-2020.					  	*/
/*	@support	https://octemplates.net/					*/
/*	@license	LICENSE.txt									*/
/************************************************************/

class ModelOCTemplatesBlogOCTBlogArticle extends Model {
	public function addArticle($data) {
		if ($data['date_added'] == '0000-00-00') {
			$data['date_added'] = "NOW()";
		}

		$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle SET date_available = '" . $this->db->escape($data['date_available']) . "', status = '" . (int)$data['status'] . "', sort_order = '" . (int)$data['sort_order'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW()");

		$blogarticle_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "oct_blogarticle SET image = '" . $this->db->escape($data['image']) . "' WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		}

		foreach ($data['article_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_description SET blogarticle_id = '" . (int)$blogarticle_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', shot_description = '" . $this->db->escape($value['shot_description']) . "', description = '" . $this->db->escape($value['description']) . "', tag = '" . $this->db->escape($value['tag']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		if (isset($data['article_store'])) {
			foreach ($data['article_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_to_store SET blogarticle_id = '" . (int)$blogarticle_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		if (isset($data['article_image'])) {
			foreach ($data['article_image'] as $article_image) {
				if (!empty($article_image['image']) && file_exists(DIR_IMAGE . $article_image['image'])) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_image SET blogarticle_id = '" . (int)$blogarticle_id . "', image = '" . $this->db->escape($article_image['image']) . "', sort_order = '" . (int)$article_image['sort_order'] . "'");
				}
			}
		}

		if (isset($data['article_category'])) {
			foreach ($data['article_category'] as $blogcategory_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_to_category SET blogarticle_id = '" . (int)$blogarticle_id . "', blogcategory_id = '" . (int)$blogcategory_id . "'");
			}
		}

		if (isset($data['article_related'])) {
			foreach ($data['article_related'] as $related_id) {
				$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$blogarticle_id . "' AND related_id = '" . (int)$related_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_related SET blogarticle_id = '" . (int)$blogarticle_id . "', related_id = '" . (int)$related_id . "'");
				$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$related_id . "' AND related_id = '" . (int)$blogarticle_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_related SET blogarticle_id = '" . (int)$related_id . "', related_id = '" . (int)$blogarticle_id . "'");
			}
		}

		if (isset($data['article_related_product'])) {
			foreach ($data['article_related_product'] as $product_id) {
				$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related_product WHERE blogarticle_id = '" . (int)$blogarticle_id . "' AND product_id = '" . (int)$product_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_related_product SET blogarticle_id = '" . (int)$blogarticle_id . "', product_id = '" . (int)$product_id . "'");
			}
		}

		// SEO URL
		if (isset($data['article_seo_url'])) {
			foreach ($data['article_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blogarticle_id=" . (int)$blogarticle_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}

		if (isset($data['article_layout'])) {
			foreach ($data['article_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_to_layout SET blogarticle_id = '" . (int)$blogarticle_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}


		$this->cache->delete('oct_blogarticle');

		return $blogarticle_id;
	}

	public function editArticle($blogarticle_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "oct_blogarticle SET date_available = '" . $this->db->escape($data['date_available']) . "', date_added = '" . $this->db->escape($data['date_added']) . "', status = '" . (int)$data['status'] . "', sort_order = '" . (int)$data['sort_order'] . "', date_modified = NOW() WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "oct_blogarticle SET image = '" . $this->db->escape($data['image']) . "' WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_description WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($data['article_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_description SET blogarticle_id = '" . (int)$blogarticle_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', shot_description = '" . $this->db->escape($value['shot_description']) . "', description = '" . $this->db->escape($value['description']) . "', tag = '" . $this->db->escape($value['tag']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_store WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['article_store'])) {
			foreach ($data['article_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_to_store SET blogarticle_id = '" . (int)$blogarticle_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_image WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['article_image'])) {
			foreach ($data['article_image'] as $article_image) {
				if (!empty($article_image['image']) && file_exists(DIR_IMAGE . $article_image['image'])) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_image SET blogarticle_id = '" . (int)$blogarticle_id . "', image = '" . $this->db->escape($article_image['image']) . "', sort_order = '" . (int)$article_image['sort_order'] . "'");
				}
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_category WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['article_category'])) {
			foreach ($data['article_category'] as $blogcategory_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_to_category SET blogarticle_id = '" . (int)$blogarticle_id . "', blogcategory_id = '" . (int)$blogcategory_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE related_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['article_related'])) {
			foreach ($data['article_related'] as $related_id) {
				$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$blogarticle_id . "' AND related_id = '" . (int)$related_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_related SET blogarticle_id = '" . (int)$blogarticle_id . "', related_id = '" . (int)$related_id . "'");
				$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$related_id . "' AND related_id = '" . (int)$blogarticle_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_related SET blogarticle_id = '" . (int)$related_id . "', related_id = '" . (int)$blogarticle_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related_product WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['article_related_product'])) {
			foreach ($data['article_related_product'] as $product_id) {
				$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related_product WHERE blogarticle_id = '" . (int)$blogarticle_id . "' AND product_id = '" . (int)$product_id . "'");
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_related_product SET blogarticle_id = '" . (int)$blogarticle_id . "', product_id = '" . (int)$product_id . "'");
			}
		}

		// SEO URL
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'blogarticle_id=" . (int)$blogarticle_id . "'");

		if (isset($data['article_seo_url'])) {
			foreach ($data['article_seo_url']as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blogarticle_id=" . (int)$blogarticle_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_layout WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		if (isset($data['article_layout'])) {
			foreach ($data['article_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogarticle_to_layout SET blogarticle_id = '" . (int)$blogarticle_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		$this->cache->delete('oct_blogarticle');
	}

	public function copyArticle($blogarticle_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "oct_blogarticle p WHERE p.blogarticle_id = '" . (int)$blogarticle_id . "'");

		if ($query->num_rows) {
			$data = $query->row;

			$data['viewed'] = '0';
			$data['keyword'] = '';
			$data['status'] = '0';

			$data['article_description'] = $this->getArticleDescriptions($blogarticle_id);
			$data['article_image'] = $this->getArticleImages($blogarticle_id);
			$data['article_related'] = $this->getArticleRelated($blogarticle_id);
			$data['article_category'] = $this->getArticleCategories($blogarticle_id);
			$data['article_layout'] = $this->getArticleLayouts($blogarticle_id);
			$data['article_store'] = $this->getArticleStores($blogarticle_id);

			$this->addArticle($data);
		}
	}

	public function deleteArticle($blogarticle_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_description WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_image WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_related WHERE related_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_category WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_layout WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_store WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcomments WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'blogarticle_id=" . (int)$blogarticle_id . "'");

		$this->cache->delete('oct_blogarticle');
	}

	public function getArticle($blogarticle_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "oct_blogarticle p LEFT JOIN " . DB_PREFIX . "oct_blogarticle_description pd ON (p.blogarticle_id = pd.blogarticle_id) WHERE p.blogarticle_id = '" . (int)$blogarticle_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getArticles($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "oct_blogarticle a LEFT JOIN " . DB_PREFIX . "oct_blogarticle_description ad ON (a.blogarticle_id = ad.blogarticle_id)";

		if (isset($data['filter_blog_category_id']) && !is_null($data['filter_blog_category_id']) && $data['filter_blog_category_id']) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "oct_blogarticle_to_category a2c ON (a.blogarticle_id = a2c.blogarticle_id)";
		}

		$sql .= " WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND ad.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND a.status = '" . (int)$data['filter_status'] . "'";
		}

		if (isset($data['filter_blog_category_id']) && !is_null($data['filter_blog_category_id']) && $data['filter_blog_category_id']) {
			$sql .= " AND a2c.blogcategory_id = '" . (int)$data['filter_blog_category_id'] . "'";
		}

		$sql .= " GROUP BY a.blogarticle_id";

		$sort_data = array(
			'ad.name',
			'a.status',
			'a.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY a.date_added";
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

	public function getArticlesByCategoryId($blogcategory_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle p LEFT JOIN " . DB_PREFIX . "oct_blogarticle_description pd ON (p.blogarticle_id = pd.blogarticle_id) LEFT JOIN " . DB_PREFIX . "oct_blogarticle_to_category p2c ON (p.blogarticle_id = p2c.blogarticle_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p2c.blogcategory_id = '" . (int)$blogcategory_id . "' ORDER BY pd.name ASC");

		return $query->rows;
	}

	public function getArticleDescriptions($blogarticle_id) {
		$article_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_description WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_description_data[$result['language_id']] = array(
				'name'             => $result['name'],
				'shot_description' => $result['shot_description'],
				'description'      => $result['description'],
				'meta_title'       => $result['meta_title'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword'],
				'tag'              => $result['tag']
			);
		}

		return $article_description_data;
	}

	public function getArticleCategories($blogarticle_id) {
		$article_category_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_to_category WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_category_data[] = $result['blogcategory_id'];
		}

		return $article_category_data;
	}

	public function getArticleImages($blogarticle_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_image WHERE blogarticle_id = '" . (int)$blogarticle_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getArticleStores($blogarticle_id) {
		$article_store_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_to_store WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_store_data[] = $result['store_id'];
		}

		return $article_store_data;
	}

	public function getArticleSeoUrls($blogarticle_id) {
		$article_seo_url_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'blogarticle_id=" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}

		return $article_seo_url_data;
	}

	public function getArticleLayouts($blogarticle_id) {
		$article_layout_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_to_layout WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $article_layout_data;
	}

	public function getArticleRelated($blogarticle_id) {
		$article_related_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_related WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_related_data[] = $result['related_id'];
		}

		return $article_related_data;
	}

	public function getArticleRelatedProducts($blogarticle_id) {
		$article_related_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogarticle_related_product WHERE blogarticle_id = '" . (int)$blogarticle_id . "'");

		foreach ($query->rows as $result) {
			$article_related_data[] = $result['product_id'];
		}

		return $article_related_data;
	}

	public function getTotalArticles($data = array()) {
		$sql = "SELECT COUNT(DISTINCT p.blogarticle_id) AS total FROM " . DB_PREFIX . "oct_blogarticle p LEFT JOIN " . DB_PREFIX . "oct_blogarticle_description pd ON (p.blogarticle_id = pd.blogarticle_id)";

		if (isset($data['filter_blog_category_id']) && !is_null($data['filter_blog_category_id']) && $data['filter_blog_category_id']) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "oct_blogarticle_to_category a2c ON (p.blogarticle_id = a2c.blogarticle_id)";
		}

		$sql .= " WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
		}

		if (isset($data['filter_blog_category_id']) && !is_null($data['filter_blog_category_id']) && $data['filter_blog_category_id']) {
			$sql .= " AND a2c.blogcategory_id = '" . (int)$data['filter_blog_category_id'] . "'";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalArticlesByLayoutId($layout_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_blogarticle_to_layout WHERE layout_id = '" . (int)$layout_id . "'");

		return $query->row['total'];
	}
}
