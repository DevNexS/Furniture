<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesBlogOCTBlogCategory extends Model {
	public function getBlogCategory($blogcategory_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "oct_blogcategory c LEFT JOIN " . DB_PREFIX . "oct_blogcategory_description cd ON (c.blogcategory_id = cd.blogcategory_id) LEFT JOIN " . DB_PREFIX . "oct_blogcategory_to_store c2s ON (c.blogcategory_id = c2s.blogcategory_id) WHERE c.blogcategory_id = '" . (int)$blogcategory_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row;
	}

	public function getBlogCategories($parent_id = 0) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory c LEFT JOIN " . DB_PREFIX . "oct_blogcategory_description cd ON (c.blogcategory_id = cd.blogcategory_id) LEFT JOIN " . DB_PREFIX . "oct_blogcategory_to_store c2s ON (c.blogcategory_id = c2s.blogcategory_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' ORDER BY c.sort_order, LCASE(cd.name)");

		return $query->rows;
	}

	public function getBlogCategoryLayoutId($blogcategory_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_blogcategory_to_layout WHERE blogcategory_id = '" . (int)$blogcategory_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getTotalBlogCategoriesByCategoryId($parent_id = 0) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_blogcategory c LEFT JOIN " . DB_PREFIX . "oct_blogcategory_to_store c2s ON (c.blogcategory_id = c2s.blogcategory_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row['total'];
	}
}
