<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesDesignOctBannerPlus extends Model {
	public function addBanner($data) {
		$data['status'] = (isset($data['status']) && $data['status'] == 'on') ? 1 : 0;

		$this->db->query("
			INSERT INTO `" . DB_PREFIX . "oct_banner_plus`
			SET
				name = '" . $this->db->escape($data['name']) . "',
				status = '" . (int)$data['status'] . "'
		");

		$banner_id = $this->db->getLastId();

		if (isset($data['oct_banner_plus_image'])) {
			foreach ($data['oct_banner_plus_image'] as $oct_banner_plus_image) {
				$this->db->query("
					INSERT INTO `" . DB_PREFIX . "oct_banner_plus_image`
					SET
			            banner_id = '" . (int)$banner_id . "',
			            image = '" .  $this->db->escape($oct_banner_plus_image['image']) . "',
			            background_color = '" .  $this->db->escape($oct_banner_plus_image['background_color']) . "',
			            title_color = '" .  $this->db->escape($oct_banner_plus_image['title_color']) . "',
			            text_color = '" .  $this->db->escape($oct_banner_plus_image['text_color']) . "',
			            button_color = '" .  $this->db->escape($oct_banner_plus_image['button_color']) . "',
			            button_background = '" .  $this->db->escape($oct_banner_plus_image['button_background']) . "',
			            button_background_hover = '" .  $this->db->escape($oct_banner_plus_image['button_background_hover']) . "',
			            button_text_hover = '" .  $this->db->escape($oct_banner_plus_image['button_text_hover']) . "',
			            sort_order = '" . (int)$oct_banner_plus_image['sort_order'] . "'
		        ");

				$banner_image_id = $this->db->getLastId();

				foreach ($oct_banner_plus_image['oct_banner_plus_image_description'] as $language_id => $oct_banner_plus_image_description) {
					$this->db->query("
			            INSERT INTO `" . DB_PREFIX . "oct_banner_plus_image_description`
			            SET
							banner_image_id = '" . (int)$banner_image_id . "',
							language_id = '" . (int)$language_id . "',
							banner_id = '" . (int)$banner_id . "',
							title = '" .  $this->db->escape($oct_banner_plus_image_description['title']) . "',
							link = '" .  $this->db->escape($oct_banner_plus_image_description['link']) . "',
							button = '" .  $this->db->escape($oct_banner_plus_image_description['button']) . "',
							description = '" .  $this->db->escape($oct_banner_plus_image_description['description']) . "'
					");
				}
			}
		}

		return $banner_id;
	}

	public function editBanner($banner_id, $data) {
		$data['status'] = (isset($data['status']) && $data['status'] == 'on') ? 1 : 0;
		
		$this->db->query("
			UPDATE
				`" . DB_PREFIX . "oct_banner_plus`
			SET
				name = '" . $this->db->escape($data['name']) . "', status = '" . (int)$data['status'] . "'
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");

		$this->db->query("
			DELETE
			FROM
				`" . DB_PREFIX . "oct_banner_plus_image`
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");

		$this->db->query("
			DELETE
			FROM
				`" . DB_PREFIX . "oct_banner_plus_image_description`
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");

		if (isset($data['oct_banner_plus_image'])) {
			foreach ($data['oct_banner_plus_image'] as $oct_banner_plus_image) {
				$this->db->query("
					INSERT INTO `" . DB_PREFIX . "oct_banner_plus_image`
					SET
			            banner_id = '" . (int)$banner_id . "',
			            image = '" .  $this->db->escape($oct_banner_plus_image['image']) . "',
			            background_color = '" .  $this->db->escape($oct_banner_plus_image['background_color']) . "',
			            title_color = '" .  $this->db->escape($oct_banner_plus_image['title_color']) . "',
			            text_color = '" .  $this->db->escape($oct_banner_plus_image['text_color']) . "',
			            button_color = '" .  $this->db->escape($oct_banner_plus_image['button_color']) . "',
			            button_background = '" .  $this->db->escape($oct_banner_plus_image['button_background']) . "',
			            button_background_hover = '" .  $this->db->escape($oct_banner_plus_image['button_background_hover']) . "',
			            button_text_hover = '" .  $this->db->escape($oct_banner_plus_image['button_text_hover']) . "',
			            sort_order = '" . (int)$oct_banner_plus_image['sort_order'] . "'
				");

				$banner_image_id = $this->db->getLastId();

				foreach ($oct_banner_plus_image['oct_banner_plus_image_description'] as $language_id => $oct_banner_plus_image_description) {
					$this->db->query("
						INSERT INTO `" . DB_PREFIX . "oct_banner_plus_image_description`
						SET
							banner_image_id = '" . (int)$banner_image_id . "',
							language_id = '" . (int)$language_id . "',
							banner_id = '" . (int)$banner_id . "',
							title = '" .  $this->db->escape($oct_banner_plus_image_description['title']) . "',
							link = '" .  $this->db->escape($oct_banner_plus_image_description['link']) . "',
							button = '" .  $this->db->escape($oct_banner_plus_image_description['button']) . "',
							description = '" .  $this->db->escape($oct_banner_plus_image_description['description']) . "'
					");
				}
			}
		}
	}

	public function deleteBanner($banner_id) {
		$this->db->query("
			DELETE
			FROM
				`" . DB_PREFIX . "oct_banner_plus`
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");

		$this->db->query("
			DELETE
			FROM
				`" . DB_PREFIX . "oct_banner_plus_image`
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");

		$this->db->query("
			DELETE
			FROM
				`" . DB_PREFIX . "oct_banner_plus_image_description`
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");
	}

	public function getBanner($banner_id) {
		$query = $this->db->query("
			SELECT DISTINCT
				*
			FROM
				`" . DB_PREFIX . "oct_banner_plus`
			WHERE
				banner_id = '" . (int)$banner_id . "'
		");

		return $query->row;
	}

	public function getBanners($data = []) {
		$sql = "
			SELECT
				*
			FROM
				`" . DB_PREFIX . "oct_banner_plus`
		";

		$sort_data = [
			'name',
			'status'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
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

	public function getBannerImages($banner_id) {
		$oct_banner_plus_image_data = [];

		$oct_banner_plus_image_query = $this->db->query("
			SELECT
				*
			FROM
				`" . DB_PREFIX . "oct_banner_plus_image`
			WHERE
				banner_id = '" . (int)$banner_id . "'
			ORDER BY
				sort_order ASC
		");

		foreach ($oct_banner_plus_image_query->rows as $oct_banner_plus_image) {
			$oct_banner_plus_image_description_data = [];

			$oct_banner_plus_image_description_query = $this->db->query("
				SELECT
					*
				FROM
					`" . DB_PREFIX . "oct_banner_plus_image_description`
				WHERE
					banner_image_id = '" . (int)$oct_banner_plus_image['banner_image_id'] . "'
					AND banner_id = '" . (int)$banner_id . "'
			");

			foreach ($oct_banner_plus_image_description_query->rows as $oct_banner_plus_image_description) {
				$oct_banner_plus_image_description_data[$oct_banner_plus_image_description['language_id']] = [
					'title'        => $oct_banner_plus_image_description['title'],
					'link'         => $oct_banner_plus_image_description['link'],
					'button'       => $oct_banner_plus_image_description['button'],
					'description'  => $oct_banner_plus_image_description['description'],
				];
			}

			$oct_banner_plus_image_data[] = [
				'oct_banner_plus_image_description' => $oct_banner_plus_image_description_data,
				'image'              => $oct_banner_plus_image['image'],
				'background_color'   => $oct_banner_plus_image['background_color'],
				'title_color'        => $oct_banner_plus_image['title_color'],
				'text_color'         => $oct_banner_plus_image['text_color'],
				'button_color'       => $oct_banner_plus_image['button_color'],
				'button_background'  => $oct_banner_plus_image['button_background'],
				'button_background_hover'  => $oct_banner_plus_image['button_background_hover'],
				'button_text_hover'  => $oct_banner_plus_image['button_text_hover'],
				'sort_order'         => $oct_banner_plus_image['sort_order']
			];
		}

		return $oct_banner_plus_image_data;
	}

	public function getTotalBanners() {
		$query = $this->db->query("
			SELECT
				COUNT(*) AS total
			FROM
				`" . DB_PREFIX . "oct_banner_plus`
		");

		return $query->row['total'];
	}

	public function createDBTables() {
		$sql_01  = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_banner_plus` ( ";
		$sql_01 .= "`banner_id` int(11) NOT NULL AUTO_INCREMENT, ";
		$sql_01 .= "`name` varchar(64) NOT NULL, ";
		$sql_01 .= "`status` tinyint(1) NOT NULL, ";
		$sql_01 .= "PRIMARY KEY (`banner_id`) ";
		$sql_01 .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ; ";

		$this->db->query($sql_01);

		$sql_02  = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_banner_plus_image` ( ";
		$sql_02 .= "`banner_image_id` int(11) NOT NULL AUTO_INCREMENT, ";
		$sql_02 .= "`banner_id` int(11) NOT NULL, ";
		$sql_02 .= "`image` varchar(255) NOT NULL, ";
		$sql_02 .= "`background_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`title_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`text_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`button_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`button_background` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`button_background_hover` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`button_text_hover` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
		$sql_02 .= "`sort_order` int(3) NOT NULL DEFAULT '0', ";
		$sql_02 .= "PRIMARY KEY (`banner_image_id`) ";
		$sql_02 .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ; ";

		$this->db->query($sql_02);

		$sql_03  = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_banner_plus_image_description` ( ";
		$sql_03 .= "`banner_image_id` int(11) NOT NULL, ";
		$sql_03 .= "`language_id` int(11) NOT NULL, ";
		$sql_03 .= "`banner_id` int(11) NOT NULL, ";
		$sql_03 .= "`title` varchar(64) NOT NULL, ";
		$sql_03 .= "`link` varchar(255) NOT NULL, ";
		$sql_03 .= "`button` varchar(64) NOT NULL, ";
		$sql_03 .= "`description` text NOT NULL, ";
		$sql_03 .= "PRIMARY KEY (`banner_image_id`,`language_id`) ";
		$sql_03 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8 ; ";

		$this->db->query($sql_03);
	}
}
