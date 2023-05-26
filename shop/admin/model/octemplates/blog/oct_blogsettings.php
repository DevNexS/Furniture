<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesBlogOCTBlogSettings  extends Model {
	public function createDBTables() {
		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogcategory` (
				`blogcategory_id` int(11) NOT NULL AUTO_INCREMENT,
				`image` varchar(255) DEFAULT NULL,
				`parent_id` int(11) NOT NULL DEFAULT '0',
				`sort_order` int(3) NOT NULL DEFAULT '0',
				`status` tinyint(1) NOT NULL,
				`date_added` datetime NOT NULL,
				`date_modified` datetime NOT NULL,
				PRIMARY KEY (`blogcategory_id`),
				KEY `parent_id` (`parent_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogcategory_description` (
				`blogcategory_id` int(11) NOT NULL,
				`language_id` int(11) NOT NULL,
				`name` varchar(255) NOT NULL,
				`meta_title` varchar(255) NOT NULL,
				`meta_h1` varchar(255) NOT NULL,
				`meta_description` varchar(255) NOT NULL,
				`meta_keyword` varchar(255) NOT NULL,
				PRIMARY KEY (`blogcategory_id`,`language_id`),
				KEY `name` (`name`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogcategory_path` (
				`blogcategory_id` int(11) NOT NULL,
				`blog_path_id` int(11) NOT NULL,
				`level` int(11) NOT NULL,
				PRIMARY KEY (`blogcategory_id`,`blog_path_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogcategory_to_layout` (
				`blogcategory_id` int(11) NOT NULL,
				`store_id` int(11) NOT NULL,
				`layout_id` int(11) NOT NULL,
				PRIMARY KEY (`blogcategory_id`,`store_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogcategory_to_store` (
				`blogcategory_id` int(11) NOT NULL,
				`store_id` int(11) NOT NULL,
				PRIMARY KEY (`blogcategory_id`,`store_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle` (
				`blogarticle_id` int(11) NOT NULL AUTO_INCREMENT,
				`image` varchar(255) DEFAULT NULL,
				`sort_order` int(11) NOT NULL DEFAULT '0',
				`status` tinyint(1) NOT NULL DEFAULT '0',
				`viewed` int(5) NOT NULL DEFAULT '0',
				`date_available` datetime NOT NULL,
				`date_added` datetime NOT NULL,
				`date_modified` datetime NOT NULL,
				PRIMARY KEY (`blogarticle_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_description` (
				`blogarticle_id` int(11) NOT NULL,
				`language_id` int(11) NOT NULL,
				`name` varchar(255) NOT NULL,
				`shot_description` text NOT NULL,
				`description` text NOT NULL,
				`tag` text NOT NULL,
				`meta_title` varchar(255) NOT NULL,
				`meta_description` varchar(255) NOT NULL,
				`meta_keyword` varchar(255) NOT NULL,
				PRIMARY KEY (`blogarticle_id`,`language_id`),
				KEY `name` (`name`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_image` (
				`article_image_id` int(11) NOT NULL AUTO_INCREMENT,
				`blogarticle_id` int(11) NOT NULL,
				`image` varchar(255) DEFAULT NULL,
				`sort_order` int(3) NOT NULL DEFAULT '0',
				PRIMARY KEY (`article_image_id`),
				KEY `blogarticle_id` (`blogarticle_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_related` (
				`blogarticle_id` int(11) NOT NULL,
				`related_id` int(11) NOT NULL,
				PRIMARY KEY (`blogarticle_id`, `related_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_related_product` (
				`blogarticle_id` int(11) NOT NULL,
				`product_id` int(11) NOT NULL,
				PRIMARY KEY (`blogarticle_id`,`product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_to_category` (
				`blogarticle_id` int(11) NOT NULL,
				`blogcategory_id` int(11) NOT NULL,
				PRIMARY KEY (`blogarticle_id`,`blogcategory_id`),
				KEY `blogcategory_id` (`blogcategory_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_to_layout` (
				`blogarticle_id` int(11) NOT NULL,
				`store_id` int(11) NOT NULL,
				`layout_id` int(11) NOT NULL,
				PRIMARY KEY (`blogarticle_id`,`store_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogarticle_to_store` (
				`blogarticle_id` int(11) NOT NULL,
				`store_id` int(11) NOT NULL DEFAULT '0',
				PRIMARY KEY (`blogarticle_id`,`store_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		$sqls[] = "
			CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_blogcomments` (
				`comment_id` int(11) NOT NULL AUTO_INCREMENT,
				`blogarticle_id` int(11) NOT NULL,
				`customer_id` int(11) NOT NULL,
				`author` varchar(64) NOT NULL,
				`text` text NOT NULL,
				`admin_text` text NOT NULL,
				`status` tinyint(1) NOT NULL DEFAULT '0',
				`date_added` datetime NOT NULL,
				`date_modified` datetime NOT NULL,
				PRIMARY KEY (`comment_id`),
				KEY `blogarticle_id` (`blogarticle_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		";

		foreach ($sqls as $sql) {
			$this->db->query($sql);
		}
	}
}