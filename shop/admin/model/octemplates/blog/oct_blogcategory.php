<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  	  */
/*	@license	LICENSE.txt									  	  */
/**************************************************************/

class ModelOCTemplatesBlogOCTBlogCategory extends Model {
	public function addBlogCategory($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory SET parent_id = '" . (int)$data['parent_id'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_modified = NOW(), date_added = NOW()");

		$blogcategory_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "oct_blogcategory SET image = '" . $this->db->escape($data['image']) . "' WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		}

		foreach ($data['category_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory_description SET blogcategory_id = '" . (int)$blogcategory_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_h1 = '" . $this->db->escape($value['meta_h1']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		$level = 0;

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$data['parent_id'] . "' ORDER BY `level` ASC");

		foreach ($query->rows as $result) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "oct_blogcategory_path` SET `blogcategory_id` = '" . (int)$blogcategory_id . "', `blog_path_id` = '" . (int)$result['blog_path_id'] . "', `level` = '" . (int)$level . "'");

			$level++;
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "oct_blogcategory_path` SET `blogcategory_id` = '" . (int)$blogcategory_id . "', `blog_path_id` = '" . (int)$blogcategory_id . "', `level` = '" . (int)$level . "'");

		if (isset($data['category_store'])) {
			foreach ($data['category_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory_to_store SET blogcategory_id = '" . (int)$blogcategory_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		if (isset($data['category_seo_url'])) {
			foreach ($data['category_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blogcategory_id=" . (int)$blogcategory_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}

		if (isset($data['category_layout'])) {
			foreach ($data['category_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory_to_layout SET blogcategory_id = '" . (int)$blogcategory_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		$this->cache->delete('oct_blog_category');

		return $blogcategory_id;
	}

	public function editBlogCategory($blogcategory_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "oct_blogcategory SET parent_id = '" . (int)$data['parent_id'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_modified = NOW() WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "oct_blogcategory SET image = '" . $this->db->escape($data['image']) . "' WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_description WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		foreach ($data['category_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory_description SET blogcategory_id = '" . (int)$blogcategory_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_h1 = '" . $this->db->escape($value['meta_h1']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		// MySQL Hierarchical Data Closure Table Pattern
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blog_path_id = '" . (int)$blogcategory_id . "' ORDER BY level ASC");

		if ($query->rows) {
			foreach ($query->rows as $category_path) {
				// Delete the path below the current one
				$this->db->query("DELETE FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$category_path['blogcategory_id'] . "' AND level < '" . (int)$category_path['level'] . "'");

				$path = array();

				// Get the nodes new parents
				$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$data['parent_id'] . "' ORDER BY level ASC");

				foreach ($query->rows as $result) {
					$path[] = $result['blog_path_id'];
				}

				// Get whats left of the nodes current path
				$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$category_path['blogcategory_id'] . "' ORDER BY level ASC");

				foreach ($query->rows as $result) {
					$path[] = $result['blog_path_id'];
				}

				// Combine the paths with a new level
				$level = 0;

				foreach ($path as $blog_path_id) {
					$this->db->query("REPLACE INTO `" . DB_PREFIX . "oct_blogcategory_path` SET blogcategory_id = '" . (int)$category_path['blogcategory_id'] . "', `blog_path_id` = '" . (int)$blog_path_id . "', level = '" . (int)$level . "'");

					$level++;
				}
			}
		} else {
			// Delete the path below the current one
			$this->db->query("DELETE FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

			// Fix for records with no paths
			$level = 0;

			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$data['parent_id'] . "' ORDER BY level ASC");

			foreach ($query->rows as $result) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "oct_blogcategory_path` SET blogcategory_id = '" . (int)$blogcategory_id . "', `blog_path_id` = '" . (int)$result['blog_path_id'] . "', level = '" . (int)$level . "'");

				$level++;
			}

			$this->db->query("REPLACE INTO `" . DB_PREFIX . "oct_blogcategory_path` SET blogcategory_id = '" . (int)$blogcategory_id . "', `blog_path_id` = '" . (int)$blogcategory_id . "', level = '" . (int)$level . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_to_store WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		if (isset($data['category_store'])) {
			foreach ($data['category_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory_to_store SET blogcategory_id = '" . (int)$blogcategory_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		// SEO URL
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'blogcategory_id=" . (int)$blogcategory_id . "'");

		if (isset($data['category_seo_url'])) {
			foreach ($data['category_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'blogcategory_id=" . (int)$blogcategory_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_to_layout WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		if (isset($data['category_layout'])) {
			foreach ($data['category_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "oct_blogcategory_to_layout SET blogcategory_id = '" . (int)$blogcategory_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		$this->cache->delete('oct_blog_category');
	}

	public function deleteBlogCategory($blogcategory_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_path WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory_path WHERE blog_path_id = '" . (int)$blogcategory_id . "'");

		foreach ($query->rows as $result) {
			$this->deleteBlogCategory($result['blogcategory_id']);
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_description WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_to_store WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogcategory_to_layout WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_blogarticle_to_category WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'blogcategory_id=" . (int)$blogcategory_id . "'");

		$this->cache->delete('oct_blog_category');
	}

	public function repairBlogCategories($parent_id = 0) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory WHERE parent_id = '" . (int)$parent_id . "'");

		foreach ($query->rows as $category) {
			// Delete the path below the current one
			$this->db->query("DELETE FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$category['blogcategory_id'] . "'");

			// Fix for records with no paths
			$level = 0;

			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_blogcategory_path` WHERE blogcategory_id = '" . (int)$parent_id . "' ORDER BY level ASC");

			foreach ($query->rows as $result) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "oct_blogcategory_path` SET blogcategory_id = '" . (int)$category['blogcategory_id'] . "', `blog_path_id` = '" . (int)$result['blog_path_id'] . "', level = '" . (int)$level . "'");

				$level++;
			}

			$this->db->query("REPLACE INTO `" . DB_PREFIX . "oct_blogcategory_path` SET blogcategory_id = '" . (int)$category['blogcategory_id'] . "', `blog_path_id` = '" . (int)$category['blogcategory_id'] . "', level = '" . (int)$level . "'");

			$this->repairBlogCategories($category['blogcategory_id']);
		}
	}

	public function getBlogCategory($blogcategory_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT GROUP_CONCAT(cd1.name ORDER BY level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') FROM " . DB_PREFIX . "oct_blogcategory_path cp LEFT JOIN " . DB_PREFIX . "oct_blogcategory_description cd1 ON (cp.blog_path_id = cd1.blogcategory_id AND cp.blogcategory_id != cp.blog_path_id) WHERE cp.blogcategory_id = c.blogcategory_id AND cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY cp.blogcategory_id) AS path FROM " . DB_PREFIX . "oct_blogcategory c LEFT JOIN " . DB_PREFIX . "oct_blogcategory_description cd2 ON (c.blogcategory_id = cd2.blogcategory_id) WHERE c.blogcategory_id = '" . (int)$blogcategory_id . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getBlogCategories($data = array()) {
		$sql = "SELECT cp.blogcategory_id AS blogcategory_id, GROUP_CONCAT(cd1.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') AS name, c1.parent_id, c1.sort_order FROM " . DB_PREFIX . "oct_blogcategory_path cp LEFT JOIN " . DB_PREFIX . "oct_blogcategory c1 ON (cp.blogcategory_id = c1.blogcategory_id) LEFT JOIN " . DB_PREFIX . "oct_blogcategory c2 ON (cp.blog_path_id = c2.blogcategory_id) LEFT JOIN " . DB_PREFIX . "oct_blogcategory_description cd1 ON (cp.blog_path_id = cd1.blogcategory_id) LEFT JOIN " . DB_PREFIX . "oct_blogcategory_description cd2 ON (cp.blogcategory_id = cd2.blogcategory_id) WHERE cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND cd2.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sql .= " GROUP BY cp.blogcategory_id";

		$sort_data = array(
			'name',
			'sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sort_order";
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

	public function getBlogCategoryDescriptions($blogcategory_id) {
		$category_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory_description WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		foreach ($query->rows as $result) {
			$category_description_data[$result['language_id']] = array(
				'name'             => $result['name'],
				'meta_title'       => $result['meta_title'],
				'meta_h1'          => $result['meta_h1'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword']
			);
		}

		return $category_description_data;
	}

	public function getBlogCategoryPath($blogcategory_id) {
		$query = $this->db->query("SELECT blogcategory_id, blog_path_id, level FROM " . DB_PREFIX . "oct_blogcategory_path WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		return $query->rows;
	}

	public function getBlogCategoryParents($blogcategory_id) {
		$query = $this->db->query("SELECT blogcategory_id FROM " . DB_PREFIX . "oct_blogcategory WHERE parent_id = '" . (int)$blogcategory_id . "'");

		return $query->num_rows ? true : false;
	}

	public function getBlogCategoryStores($blogcategory_id) {
		$category_store_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory_to_store WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		foreach ($query->rows as $result) {
			$category_store_data[] = $result['store_id'];
		}

		return $category_store_data;
	}

	public function getBlogCategorySeoUrls($blogcategory_id) {
		$category_seo_url_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'blogcategory_id=" . (int)$blogcategory_id . "'");

		foreach ($query->rows as $result) {
			$category_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}

		return $category_seo_url_data;
	}

	public function getBlogCategoryLayouts($blogcategory_id) {
		$category_layout_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory_to_layout WHERE blogcategory_id = '" . (int)$blogcategory_id . "'");

		foreach ($query->rows as $result) {
			$category_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $category_layout_data;
	}

	public function getTotalBlogCategories() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_blogcategory");

		return $query->row['total'];
	}

	public function getTotalBlogCategoriesByLayoutId($layout_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_blogcategory_to_layout WHERE layout_id = '" . (int)$layout_id . "'");

		return $query->row['total'];
	}
}