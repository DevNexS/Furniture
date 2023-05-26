<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesDesignOctSlideshowPlus extends Model {
    public function addSlideshow($data) {
        $data['status'] = (isset($data['status']) && $data['status'] == 'on') ? 1 : 0;
	    $data['position_banners'] = (isset($data['position_banners']) && $data['position_banners'] == 1) ? 1 : 0;
	    $data['status_additional_banners'] = (isset($data['status_additional_banners']) && $data['status_additional_banners'] == 'on') ? 1 : 0;
	    $data['timer_view'] = (isset($data['timer_view']) && $data['timer_view'] == 'on') ? 1 : 0;
	    $data['full'] = (isset($data['full']) && $data['full'] == 'on') ? 1 : 0;

        $this->db->query("
			INSERT INTO " . DB_PREFIX . "oct_slideshow_plus
			SET
				name = '" . $this->db->escape($data['name']) . "',
				status_additional_banners = '" . (int)$data['status_additional_banners'] . "',
				timer_view = '" . (int)$data['timer_view'] . "',
				full = '" . (int)$data['full'] . "',
				position_banners = '" . (int)$data['position_banners'] . "',
				status = '" . (int)$data['status'] . "'
		");

        $slideshow_id = $this->db->getLastId();

        if (isset($data['oct_slideshow_plus_image'])) {
            foreach ($data['oct_slideshow_plus_image'] as $oct_slideshow_plus_image) {
                $this->db->query("
					INSERT INTO " . DB_PREFIX . "oct_slideshow_plus_image
					SET
						slideshow_id = '" . (int)$slideshow_id . "',
						image = '" . $this->db->escape(json_encode($oct_slideshow_plus_image['image'], true)) . "',
						mobile_image = '" . $this->db->escape((isset($oct_slideshow_plus_image['mobile_image']) && !empty($oct_slideshow_plus_image['mobile_image'])) ? json_encode($oct_slideshow_plus_image['mobile_image'], true) : '') . "',
						background_color = '" . $this->db->escape($oct_slideshow_plus_image['background_color']) . "',
						title_color = '" . $this->db->escape($oct_slideshow_plus_image['title_color']) . "',
						text_color = '" . $this->db->escape($oct_slideshow_plus_image['text_color']) . "',
						button_color = '" . $this->db->escape($oct_slideshow_plus_image['button_color']) . "',
						button_background = '" . $this->db->escape($oct_slideshow_plus_image['button_background']) . "',
						button_color_hover = '" . $this->db->escape($oct_slideshow_plus_image['button_color_hover']) . "',
						button_background_hover = '" . $this->db->escape($oct_slideshow_plus_image['button_background_hover']) . "',
						sort_order = '" . (int)$oct_slideshow_plus_image['sort_order'] . "'
				");

                $slideshow_image_id = $this->db->getLastId();

                foreach ($oct_slideshow_plus_image['oct_slideshow_plus_image_description'] as $language_id => $oct_slideshow_plus_image_description) {
                    $this->db->query("
						INSERT INTO " . DB_PREFIX . "oct_slideshow_plus_image_description
						SET
							slideshow_image_id = '" . (int)$slideshow_image_id . "',
							language_id = '" . (int)$language_id . "',
							slideshow_id = '" . (int)$slideshow_id . "',
							title = '" . $this->db->escape($oct_slideshow_plus_image_description['title']) . "',
							link = '" . $this->db->escape($oct_slideshow_plus_image_description['link']) . "',
							button = '" . $this->db->escape($oct_slideshow_plus_image_description['button']) . "',
							description = '" . $this->db->escape($oct_slideshow_plus_image_description['description']) . "'
					");
                }
            }
        }

		if (isset($data['oct_discount_products'])) {
			$this->load->model('catalog/product');

			foreach ($data['oct_discount_products'] as $product_id) {
				$this->db->query("
					DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_product
					WHERE
						slideshow_id = '" . (int)$slideshow_id . "'
						AND product_id = '" . (int)$product_id . "'
				");

				$this->db->query("
					INSERT INTO " . DB_PREFIX . "oct_slideshow_plus_product
					SET
						slideshow_id = '" . (int)$slideshow_id . "',
						product_id = '" . (int)$product_id . "'
				");
			}
		}

        return $slideshow_id;
    }

    public function editSlideshow($slideshow_id, $data) {
        $data['status'] = (isset($data['status']) && $data['status'] == 'on') ? 1 : 0;
	    $data['position_banners'] = (isset($data['position_banners']) && $data['position_banners'] == 1) ? 1 : 0;
	    $data['status_additional_banners'] = (isset($data['status_additional_banners']) && $data['status_additional_banners'] == 'on') ? 1 : 0;
	    $data['timer_view'] = (isset($data['timer_view']) && $data['timer_view'] == 'on') ? 1 : 0;
	    $data['full'] = (isset($data['full']) && $data['full'] == 'on') ? 1 : 0;

        $this->db->query("
			UPDATE " . DB_PREFIX . "oct_slideshow_plus
			SET
				name = '" . $this->db->escape($data['name']) . "',
				status_additional_banners = '" . (int) $data['status_additional_banners'] . "',
				timer_view = '" . (int)$data['timer_view'] . "',
				full = '" . (int)$data['full'] . "',
				position_banners = '" . (int) $data['position_banners'] . "',
				status = '" . (int)$data['status'] . "'
			WHERE
				slideshow_id = '" . (int)$slideshow_id . "'
		");

        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_image WHERE slideshow_id = '" . (int)$slideshow_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_image_description WHERE slideshow_id = '" . (int)$slideshow_id . "'");

        if (isset($data['oct_slideshow_plus_image'])) {
            foreach ($data['oct_slideshow_plus_image'] as $oct_slideshow_plus_image) {
                $oct_slideshow_plus_image['full'] = (isset($oct_slideshow_plus_image['full']) && $oct_slideshow_plus_image['full'] == 'on') ? 1 : 0;

                $this->db->query("
					INSERT INTO " . DB_PREFIX . "oct_slideshow_plus_image
					SET
						slideshow_id = '" . (int)$slideshow_id . "',
                        image = '" . $this->db->escape(json_encode($oct_slideshow_plus_image['image'], true)) . "',
						mobile_image = '" . $this->db->escape((isset($oct_slideshow_plus_image['mobile_image']) && !empty($oct_slideshow_plus_image['mobile_image'])) ? json_encode($oct_slideshow_plus_image['mobile_image'], true) : '') . "',
						background_color = '" . $this->db->escape($oct_slideshow_plus_image['background_color']) . "',
						title_color = '" . $this->db->escape($oct_slideshow_plus_image['title_color']) . "',
						text_color = '" . $this->db->escape($oct_slideshow_plus_image['text_color']) . "',
						button_color = '" . $this->db->escape($oct_slideshow_plus_image['button_color']) . "',
						button_background = '" . $this->db->escape($oct_slideshow_plus_image['button_background']) . "',
						button_color_hover = '" . $this->db->escape($oct_slideshow_plus_image['button_color_hover']) . "',
						button_background_hover = '" . $this->db->escape($oct_slideshow_plus_image['button_background_hover']) . "',
						sort_order = '" . (int)$oct_slideshow_plus_image['sort_order'] . "'
				");

                $slideshow_image_id = $this->db->getLastId();

                foreach ($oct_slideshow_plus_image['oct_slideshow_plus_image_description'] as $language_id => $oct_slideshow_plus_image_description) {
                    $this->db->query("
						INSERT INTO " . DB_PREFIX . "oct_slideshow_plus_image_description
						SET
							slideshow_image_id = '" . (int)$slideshow_image_id . "',
							language_id = '" . (int)$language_id . "',
							slideshow_id = '" . (int)$slideshow_id . "',
							title = '" . $this->db->escape($oct_slideshow_plus_image_description['title']) . "',
							link = '" . $this->db->escape($oct_slideshow_plus_image_description['link']) . "',
							button = '" . $this->db->escape($oct_slideshow_plus_image_description['button']) . "',
							description = '" . $this->db->escape($oct_slideshow_plus_image_description['description']) . "'
					");
                }
            }
        }

		$this->db->query("
			DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_product
			WHERE
				slideshow_id = '" . (int)$slideshow_id . "'
		");

		if (isset($data['oct_discount_products'])) {
			$this->load->model('catalog/product');

			foreach ($data['oct_discount_products'] as $product_id) {
				$this->db->query("
					DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_product
					WHERE
						slideshow_id = '" . (int)$slideshow_id . "'
						AND product_id = '" . (int)$product_id . "'
				");

				$this->db->query("
					INSERT INTO " . DB_PREFIX . "oct_slideshow_plus_product
					SET
						slideshow_id = '" . (int)$slideshow_id . "',
						product_id = '" . (int)$product_id . "'
				");
			}
		}

    }

    public function deleteSlideshow($slideshow_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_slideshow_plus WHERE slideshow_id = '" . (int)$slideshow_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_image WHERE slideshow_id = '" . (int)$slideshow_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_image_description WHERE slideshow_id = '" . (int)$slideshow_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "oct_slideshow_plus_product WHERE slideshow_id = '" . (int)$slideshow_id . "'");
    }

    public function getSlideshow($slideshow_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "oct_slideshow_plus WHERE slideshow_id = '" . (int)$slideshow_id . "'");

        return $query->row;
    }

    public function getSlideshows($data = []) {
        $sql = "SELECT * FROM " . DB_PREFIX . "oct_slideshow_plus";

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

    public function getSlideshowImages($slideshow_id) {
        $oct_slideshow_plus_image_data = [];

        $oct_slideshow_plus_image_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_slideshow_plus_image WHERE slideshow_id = '" . (int)$slideshow_id . "' ORDER BY sort_order ASC");

        foreach ($oct_slideshow_plus_image_query->rows as $oct_slideshow_plus_image) {
            $oct_slideshow_plus_image_description_data = [];

            $oct_slideshow_plus_image_description_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_slideshow_plus_image_description WHERE slideshow_image_id = '" . (int)$oct_slideshow_plus_image['slideshow_image_id'] . "' AND slideshow_id = '" . (int)$slideshow_id . "'");

            foreach ($oct_slideshow_plus_image_description_query->rows as $oct_slideshow_plus_image_description) {
                $oct_slideshow_plus_image_description_data[$oct_slideshow_plus_image_description['language_id']] = [
                    'title' => $oct_slideshow_plus_image_description['title'],
                    'link' => $oct_slideshow_plus_image_description['link'],
                    'button' => $oct_slideshow_plus_image_description['button'],
                    'description' => $oct_slideshow_plus_image_description['description']
                ];
            }

            $oct_slideshow_plus_image_data[] = [
                'oct_slideshow_plus_image_description' => $oct_slideshow_plus_image_description_data,
                'image' => json_decode($oct_slideshow_plus_image['image'], true),
                'mobile_image' => (isset($oct_slideshow_plus_image['mobile_image']) && !empty($oct_slideshow_plus_image['mobile_image'])) ? json_decode($oct_slideshow_plus_image['mobile_image'], true) : '',
                'background_color' => $oct_slideshow_plus_image['background_color'],
                'title_color' => $oct_slideshow_plus_image['title_color'],
                'text_color' => $oct_slideshow_plus_image['text_color'],
                'button_color' => $oct_slideshow_plus_image['button_color'],
                'button_background' => $oct_slideshow_plus_image['button_background'],
                'button_color_hover' => $oct_slideshow_plus_image['button_color_hover'],
                'button_background_hover' => $oct_slideshow_plus_image['button_background_hover'],
                'sort_order' => $oct_slideshow_plus_image['sort_order']
            ];
        }

        return $oct_slideshow_plus_image_data;
    }

    public function getDiscountProduct($slideshow_id) {
        $discount_products_data = [];

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_slideshow_plus_product WHERE slideshow_id = '" . (int)$slideshow_id . "'");

        foreach ($query->rows as $result) {
            $discount_products_data[] = $result['product_id'];
        }

        return $discount_products_data;
    }

    public function getTotalSlideshows() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_slideshow_plus");

        return $query->row['total'];
    }

    public function createDBTables() {
        $sql_01 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_slideshow_plus` ( ";
        $sql_01 .= "`slideshow_id` int(11) NOT NULL AUTO_INCREMENT, ";
        $sql_01 .= "`name` varchar(64) NOT NULL, ";
        $sql_01 .= "`status_additional_banners` tinyint(1) NOT NULL DEFAULT '1', ";
        $sql_01 .= "`timer_view` tinyint(1) NOT NULL DEFAULT '1', ";
        $sql_01 .= "`full` tinyint(1) NOT NULL DEFAULT '1', ";
        $sql_01 .= "`position_banners` tinyint(1) NOT NULL DEFAULT '1', ";
        $sql_01 .= "`status` tinyint(1) NOT NULL, ";
        $sql_01 .= "PRIMARY KEY (`slideshow_id`) ";
        $sql_01 .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ; ";

        $this->db->query($sql_01);

        $sql_02 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_slideshow_plus_image` ( ";
        $sql_02 .= "`slideshow_image_id` int(11) NOT NULL AUTO_INCREMENT, ";
        $sql_02 .= "`slideshow_id` int(11) NOT NULL, ";
        $sql_02 .= "`image` text NOT NULL, ";
        $sql_02 .= "`mobile_image` text NOT NULL, ";
        $sql_02 .= "`background_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`title_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`text_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`button_color` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`button_background` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`button_color_hover` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`button_background_hover` varchar(255) COLLATE 'utf8_general_ci' NOT NULL, ";
        $sql_02 .= "`sort_order` int(3) NOT NULL DEFAULT '0', ";
        $sql_02 .= "PRIMARY KEY (`slideshow_image_id`) ";
        $sql_02 .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ; ";

        $this->db->query($sql_02);

        $sql_03 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_slideshow_plus_image_description` ( ";
        $sql_03 .= "`slideshow_image_id` int(11) NOT NULL, ";
        $sql_03 .= "`language_id` int(11) NOT NULL, ";
        $sql_03 .= "`slideshow_id` int(11) NOT NULL, ";
        $sql_03 .= "`title` varchar(64) NOT NULL, ";
        $sql_03 .= "`link` varchar(255) NOT NULL, ";
        $sql_03 .= "`button` varchar(64) NOT NULL, ";
        $sql_03 .= "`description` text NOT NULL, ";
        $sql_03 .= "PRIMARY KEY (`slideshow_image_id`,`language_id`) ";
        $sql_03 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8 ; ";

        $this->db->query($sql_03);

        $sql_04 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_slideshow_plus_product` (";
        $sql_04 .= "`slideshow_id` int(11) NOT NULL, ";
        $sql_04 .= "`product_id` int(11) NOT NULL, ";
        $sql_04 .= "PRIMARY KEY (`slideshow_id`,`product_id`) ";
        $sql_04 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

        $this->db->query($sql_04);
    }

    public function updateTypeColumn() {
        $this->db->query("
        ALTER TABLE `" . DB_PREFIX . "oct_slideshow_plus_image`
        CHANGE `image` `image` text COLLATE 'utf8_general_ci' NOT NULL AFTER `slideshow_id`,
        CHANGE `mobile_image` `mobile_image` text COLLATE 'utf8_general_ci' NOT NULL AFTER `image`
        ");
    }

    public function updateImages() {
        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $query = $this->db->query("SELECT `slideshow_image_id`, `slideshow_id`,  `image`, `mobile_image` FROM " . DB_PREFIX . "oct_slideshow_plus_image");

        foreach ($query->rows as $oct_sp_images) {
            $image = $mobile_image = [];

            foreach ($languages as $lang) {
                $image[(int)$lang['language_id']] = $oct_sp_images['image'];
                $mobile_image[(int)$lang['language_id']] = $oct_sp_images['mobile_image'];
            }

            $this->db->query("
                UPDATE `" . DB_PREFIX . "oct_slideshow_plus_image`
                SET
                    image = '" . $this->db->escape(json_encode($image, true)) . "',
                    mobile_image = '" . $this->db->escape(json_encode($mobile_image, true)) . "'
                WHERE
                    slideshow_image_id = '" . (int)$oct_sp_images['slideshow_image_id'] . "'
                AND
                    slideshow_id = '". (int)$oct_sp_images['slideshow_id'] ."'
            ");
        }
    }
}
