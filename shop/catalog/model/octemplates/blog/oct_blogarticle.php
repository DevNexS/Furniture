<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesBlogOCTBlogArticle extends Model {
	public function updateViewed($blogarticle_id) {
		$this->db->query("
			UPDATE
				" . DB_PREFIX . "oct_blogarticle
			SET
				viewed =
				(
					viewed + 1
				)
			WHERE
				blogarticle_id = '" . (int)$blogarticle_id . "'
		");
	}

	public function getArticle($blogarticle_id) {
		$query = $this->db->query("
			SELECT DISTINCT
				*,
				ad.name AS name,
				a.image,
				(
					SELECT
						COUNT(*) AS total
					FROM
						" . DB_PREFIX . "oct_blogcomments r2
					WHERE
						r2.blogarticle_id = a.blogarticle_id
						AND r2.status = '1'
					GROUP BY
						r2.blogarticle_id
				)
				AS comments_total,
				a.sort_order
			FROM
				" . DB_PREFIX . "oct_blogarticle a
				LEFT JOIN
					" . DB_PREFIX . "oct_blogarticle_description ad
					ON (a.blogarticle_id = ad.blogarticle_id)
				LEFT JOIN
					" . DB_PREFIX . "oct_blogarticle_to_store a2s
					ON (a.blogarticle_id = a2s.blogarticle_id)
			WHERE
				a.blogarticle_id = '" . (int)$blogarticle_id . "'
				AND ad.language_id = '" . (int)$this->config->get('config_language_id') . "'
				AND a.status = '1'
				AND a.date_available <= NOW()
				AND a2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
		");

		if ($query->num_rows) {
			$articles = [
				'blogarticle_id'   => $query->row['blogarticle_id'],
				'name'             => $query->row['name'],
				'shot_description' => $query->row['shot_description'],
				'description'      => $query->row['description'],
				'meta_title'       => $query->row['meta_title'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'tag'              => $query->row['tag'],
				'image'            => $query->row['image'],
				'comments_total'   => $query->row['comments_total'] ? $query->row['comments_total'] : 0,
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
			];

			return $articles;
		} else {
			return false;
		}
	}

	public function getArticles($data = []) {
		$sql = "
			SELECT
				a.blogarticle_id
		";

		if (isset($data['filter_blogcategory_id']) && !empty($data['filter_blogcategory_id'])) {
			if (isset($data['filter_sub_blogcategory']) && !empty($data['filter_sub_blogcategory'])) {
				$sql .= " FROM " . DB_PREFIX . "oct_blogcategory_path bcp LEFT JOIN " . DB_PREFIX . "oct_blogarticle_to_category a2c ON (bcp.blogcategory_id = a2c.blogcategory_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "oct_blogarticle_to_category a2c";
			}

			$sql .= " LEFT JOIN " . DB_PREFIX . "oct_blogarticle a ON (a2c.blogarticle_id = a.blogarticle_id)";
		} else {
			$sql .= " FROM " . DB_PREFIX . "oct_blogarticle a";
		}

		$sql .= "
			LEFT JOIN
				" . DB_PREFIX . "oct_blogarticle_description ad
				ON (a.blogarticle_id = ad.blogarticle_id)
			LEFT JOIN
				" . DB_PREFIX . "oct_blogarticle_to_store a2s
				ON (a.blogarticle_id = a2s.blogarticle_id)
			WHERE
				ad.language_id = '" . (int)$this->config->get('config_language_id') . "'
				AND a.status = '1'
				AND a.date_available <= NOW()
				AND a2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
		";

		if (isset($data['filter_blogcategory_id']) && !empty($data['filter_blogcategory_id'])) {
			if (is_array($data['filter_blogcategory_id'])) {
				$implode = [];

		        foreach ($data['filter_blogcategory_id'] as $blogcategory_id) {
					$implode[] = (int)$blogcategory_id;
				}

				$sql .= " AND a2c.blogcategory_id IN (" . implode(',', $implode) . ")";
			} else {
				if (isset($data['filter_sub_blogcategory']) && !empty($data['filter_sub_blogcategory'])) {
					$sql .= " AND bcp.blog_path_id = '" . (int)$data['filter_blogcategory_id'] . "'";
				} else {
					$sql .= " AND a2c.blogcategory_id = '" . (int)$data['filter_blogcategory_id'] . "'";
				}
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = [];

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "ad.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR ad.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = [];

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "ad.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			$sql .= ")";
		}

		$sql .= " GROUP BY a.blogarticle_id";

		$sort_data = [
			'ad.name',
			'a.sort_order',
			'a.date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			if ($data['sort'] == 'ad.name') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
			$sql .= " ORDER BY a.sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(ad.name) DESC";
		} else {
			$sql .= " ASC, LCASE(ad.name) ASC";
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

		$article_data = [];

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$article_data[$result['blogarticle_id']] = $this->getArticle($result['blogarticle_id']);
		}

		return $article_data;
	}

	public function getArticleImages($blogarticle_id) {
		$query = $this->db->query("
			SELECT
				*
			FROM
				" . DB_PREFIX . "oct_blogarticle_image
			WHERE
				blogarticle_id = '" . (int)$blogarticle_id . "'
			ORDER BY
				sort_order ASC
		");

		return $query->rows;
	}

	public function getArticleRelated($blogarticle_id) {
		$article_data = [];

		$query = $this->db->query("
			SELECT
				*
			FROM
				" . DB_PREFIX . "oct_blogarticle_related ar
				LEFT JOIN
					" . DB_PREFIX . "oct_blogarticle a
					ON (ar.related_id = a.blogarticle_id)
				LEFT JOIN
					" . DB_PREFIX . "oct_blogarticle_to_store a2s
					ON (a.blogarticle_id = a2s.blogarticle_id)
			WHERE
				ar.blogarticle_id = '" . (int)$blogarticle_id . "'
				AND a.status = '1'
				AND a.date_available <= NOW()
				AND a2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
		");

		foreach ($query->rows as $result) {
			$article_data[$result['related_id']] = $this->getArticle($result['related_id']);
		}

		return $article_data;
	}

	public function getArticleRelatedProduct($blogarticle_id) {
		$this->load->model('catalog/product');

		$product_data = [];

		$query = $this->db->query("
			SELECT
				*
			FROM
				" . DB_PREFIX . "oct_blogarticle_related_product arp
			WHERE
				arp.blogarticle_id = '" . (int)$blogarticle_id . "'
		");

		foreach ($query->rows as $result) {
			$product_info = $this->model_catalog_product->getProduct($result['product_id']);

			if ($product_info) {
				$product_data[$result['product_id']] = $product_info;
			}
		}

		return $product_data;
	}

	public function getArticleRelatedProductPage($product_id) {
	
		$product_related_blog_data = [];

		$query = $this->db->query("
			SELECT blogarticle_id as article_id
				FROM 
					" . DB_PREFIX . "oct_blogarticle_related_product
				WHERE 
					product_id = '" . (int)$product_id . "'
		");

		if ($query->num_rows) {

			foreach ($query->rows as $result) {
					$product_related_blog_data[] = $this->model_octemplates_blog_oct_blogarticle->getArticle($result['article_id']);
			}
			
			return $product_related_blog_data;

		} else {
			return 0;
		}
	}	

	public function getArticleLayoutId($blogarticle_id) {
		$query = $this->db->query("
			SELECT
				*
			FROM
				" . DB_PREFIX . "oct_blogarticle_to_layout
			WHERE
				blogarticle_id = '" . (int)$blogarticle_id . "'
				AND store_id = '" . (int)$this->config->get('config_store_id') . "'
		");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getArticleBlogCategories($blogarticle_id) {
		$query = $this->db->query("
			SELECT
				*
			FROM
				" . DB_PREFIX . "oct_blogarticle_to_category
			WHERE
				blogarticle_id = '" . (int)$blogarticle_id . "'
		");

		return $query->rows;
	}

	public function getTotalArticles($data = []) {
		$sql = "SELECT COUNT(DISTINCT a.blogarticle_id) AS total";

		if (!empty($data['filter_blogcategory_id'])) {
			if (!empty($data['filter_sub_blogcategory'])) {
				$sql .= " FROM " . DB_PREFIX . "oct_blogcategory_path bcp LEFT JOIN " . DB_PREFIX . "oct_blogarticle_to_category a2c ON (bcp.blogcategory_id = a2c.blogcategory_id)";
			} else {
				$sql .= " FROM " . DB_PREFIX . "oct_blogarticle_to_category a2c";
			}

			$sql .= " LEFT JOIN " . DB_PREFIX . "oct_blogarticle a ON (a2c.blogarticle_id = a.blogarticle_id)";
		} else {
			$sql .= " FROM " . DB_PREFIX . "oct_blogarticle a";
		}

		$sql .= "
			LEFT JOIN
				" . DB_PREFIX . "oct_blogarticle_description ad
				ON (a.blogarticle_id = ad.blogarticle_id)
			LEFT JOIN
				" . DB_PREFIX . "oct_blogarticle_to_store a2s
				ON (a.blogarticle_id = a2s.blogarticle_id)
			WHERE
				ad.language_id = '" . (int)$this->config->get('config_language_id') . "'
				AND a.status = '1'
				AND a.date_available <= NOW()
				AND a2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
		";

		if (!empty($data['filter_blogcategory_id'])) {
			if (!empty($data['filter_sub_blogcategory'])) {
				$sql .= " AND bcp.blog_path_id = '" . (int)$data['filter_blogcategory_id'] . "'";
			} else {
				$sql .= " AND a2c.blogcategory_id = '" . (int)$data['filter_blogcategory_id'] . "'";
			}
		}

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = [];

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "ad.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR ad.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$implode = [];

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

				foreach ($words as $word) {
					$implode[] = "ad.tag LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}
			}

			$sql .= ")";
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}
}
