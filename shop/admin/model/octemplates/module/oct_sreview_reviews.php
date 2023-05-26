<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesModuleOCTSreviewReviews extends Model {
    public function addReview($data) {
        $this->db->query("
        	INSERT INTO 
        		" . DB_PREFIX . "oct_sreview_reviews 
        	SET 
        		author = '" . $this->db->escape($data['author']) . "', 
        		text = '" . $this->db->escape(strip_tags($data['text'])) . "', 
        		status = '" . (int)$data['status'] . "', 
        		admin_text = '" . $this->db->escape(strip_tags($data['admin_text'])) . "', 
        		date_added = '" . $this->db->escape($data['date_added']) . "'
        ");

        $oct_sreview_review_id = $this->db->getLastId();

        return $oct_sreview_review_id;
    }

    public function editReview($oct_sreview_review_id, $data) {
        $this->db->query("
        	UPDATE 
        		" . DB_PREFIX . "oct_sreview_reviews 
        	SET 
        		author = '" . $this->db->escape($data['author']) . "', 
        		text = '" . $this->db->escape(strip_tags($data['text'])) . "', 
        		status = '" . (int)$data['status'] . "', 
        		date_added = '" . $this->db->escape($data['date_added']) . "',
        		admin_text = '" . $this->db->escape(strip_tags($data['admin_text'])) . "', 
        		date_modified = NOW() 
        	WHERE 
        		oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "'
        ");
    }

    public function deleteReview($oct_sreview_review_id) {
        $reviews = $this->getReviewVote($oct_sreview_review_id);

        if ($reviews) {
            foreach ($reviews as $review) {
                $this->db->query("
                	UPDATE 
                		" . DB_PREFIX . "oct_sreview_subject 
                	SET 
                		subject_rating_count" . (int)$review['rating'] . " = (subject_rating_count" . (int)$review['rating'] . " - " . (int)$review['rating'] . ") 
                	WHERE 
                		oct_sreview_subject_id = '" . (int)$review['oct_sreview_subject_id'] . "'
                ");
            }
            
            $this->db->query("
            	DELETE FROM 
            		" . DB_PREFIX . "oct_sreview_reviews_vote 
            	WHERE 
            		oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "'
            ");
        }

        $this->db->query("
        	DELETE FROM 
        		" . DB_PREFIX . "oct_sreview_reviews 
        	WHERE 
        		oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "'
        ");
    }

    public function getReviewVote($oct_sreview_review_id) {
        $query = $this->db->query("
        	SELECT 
        		* 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_reviews_vote 
        	WHERE 
        		oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "'
        ");

        return $query->rows;
    }

    public function getReview($oct_sreview_review_id) {
        $query = $this->db->query("
        	SELECT 
        		DISTINCT * 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_reviews 
        	WHERE 
        		oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "'
        ");

        return $query->row;
    }

    public function getReviews($data = []) {
        $sql = "
        	SELECT 
        		* 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_reviews 
        	WHERE 
        		date_added != '00-00-0000'
        ";

        if (isset($data['filter_status'])) {
            $sql .= " AND status = '" . $data['filter_status'] . "'";
        }

        if (!empty($data['filter_author'])) {
            $sql .= " AND author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        $sort_data = [
            'author',
            'rating',
            'status',
            'date_added'
        ];

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY date_added";
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

    public function getTotalReviews($data = []) {
        $sql = "
        	SELECT 
        		COUNT(*) AS total 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_reviews 
        	WHERE 
        		date_added != '00-00-0000'
        ";

        if (!empty($data['filter_author'])) {
            $sql .= " AND author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
        }

        if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
            $sql .= " AND status = '" . (int)$data['filter_status'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }
    
    /* Subjects */
    
    public function addSubject($data) {
        $this->db->query("
        	INSERT INTO 
        		" . DB_PREFIX . "oct_sreview_subject 
        	SET 
        		status = '" . (int)$data['status'] . "', 
        		sort_order = '" . (int)$data['sort_order'] . "', 
        		date_added = NOW()
        ");
        
        $oct_sreview_subject_id = $this->db->getLastId();
        
        foreach ($data['subject_description'] as $language_id => $value) {
            $this->db->query("
            	INSERT INTO 
            		" . DB_PREFIX . "oct_sreview_subject_description 
            	SET 
            		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "', 
            		language_id = '" . (int)$language_id . "', 
            		name = '" . $this->db->escape($value['name']) . "'
            ");
        }
        
        if (isset($data['subject_store'])) {
            foreach ($data['subject_store'] as $store_id) {
                $this->db->query("
                	INSERT INTO 
                		" . DB_PREFIX . "oct_sreview_subject_to_store 
                	SET 
                		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "', 
						store_id = '" . (int)$store_id . "'
				");
            }
        }
        
        $this->cache->delete('oct_sreview_subject');
        
        return $oct_sreview_subject_id;
    }
    
    public function editSubject($oct_sreview_subject_id, $data) {
        $this->db->query("
        	UPDATE 
        		" . DB_PREFIX . "oct_sreview_subject 
        	SET 
        		status = '" . (int)$data['status'] . "', 
        		sort_order = '" . (int)$data['sort_order'] . "', 
        		date_modified = NOW() 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        $this->db->query("
        	DELETE FROM 
        		" . DB_PREFIX . "oct_sreview_subject_description 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        foreach ($data['subject_description'] as $language_id => $value) {
            $this->db->query("
            	INSERT INTO 
            		" . DB_PREFIX . "oct_sreview_subject_description 
            	SET 
            		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "', 
            		language_id = '" . (int)$language_id . "', 
            		name = '" . $this->db->escape($value['name']) . "'
            ");
        }
        
        $this->db->query("
        	DELETE FROM 
        		" . DB_PREFIX . "oct_sreview_subject_to_store 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        if (isset($data['subject_store'])) {
            foreach ($data['subject_store'] as $store_id) {
                $this->db->query("
                	INSERT INTO 
                		" . DB_PREFIX . "oct_sreview_subject_to_store 
                	SET 
                		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "', 
						store_id = '" . (int)$store_id . "'
				");
            }
        }
        
        $this->cache->delete('oct_sreview_subject');
    }
    
    public function copySubject($oct_sreview_subject_id) {
        $query = $this->db->query("
        	SELECT 
        		DISTINCT * 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_subject s 
        	LEFT JOIN 
        		" . DB_PREFIX . "oct_sreview_subject_description sd 
        	ON 
        		(s.oct_sreview_subject_id = sd.oct_sreview_subject_id) 
        	WHERE 
        		s.oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "' 
        		AND sd.language_id = '" . (int)$this->config->get('config_language_id') . "'
        ");
        
        if ($query->num_rows) {
            $data = $query->row;
            
            $data['status']                = '0';
            $data['subject_rating_count1'] = '0';
            $data['subject_rating_count2'] = '0';
            $data['subject_rating_count3'] = '0';
            $data['subject_rating_count4'] = '0';
            $data['subject_rating_count5'] = '0';
            $data['subject_description']   = $this->getSubjectDescriptions($oct_sreview_subject_id);
            $data['subject_store']         = $this->getSubjectStores($oct_sreview_subject_id);
            
            $this->addSubject($data);
        }
    }
    
    public function deleteSubject($oct_sreview_subject_id) {
        $reviews = $this->getReviewSubjectVote($oct_sreview_subject_id);
        
        if ($reviews) {
            foreach ($reviews as $review) {
                $this->db->query("
                	UPDATE 
                		" . DB_PREFIX . "oct_sreview_subject 
                	SET 
                		subject_rating_count" . (int)$review['rating'] . " = (subject_rating_count" . (int)$review['rating'] . " - " . (int)$review['rating'] . ") 
                	WHERE 
                		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
                ");
            }
            
            $this->db->query("DELETE FROM " . DB_PREFIX . "oct_sreview_reviews_vote WHERE oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'");
        }
        
        $this->db->query("
        	DELETE FROM 
        		" . DB_PREFIX . "oct_sreview_subject 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        $this->db->query("
        	DELETE FROM 
        		" . DB_PREFIX . "oct_sreview_subject_description 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        $this->db->query("
        	DELETE FROM 
        		" . DB_PREFIX . "oct_sreview_subject_to_store 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        $this->cache->delete('oct_sreview_subject');
    }
    
    public function getReviewSubjectVote($oct_sreview_subject_id) {
        $query = $this->db->query("
        	SELECT 
        		* 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_reviews_vote 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        return $query->rows;
    }
    
    public function getSubject($oct_sreview_subject_id) {
        $query = $this->db->query("
        	SELECT 
        		DISTINCT * 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_subject s 
        	LEFT JOIN 
        		" . DB_PREFIX . "oct_sreview_subject_description sd 
        	ON 
        		(s.oct_sreview_subject_id = sd.oct_sreview_subject_id) 
        	WHERE 
        		s.oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "' 
        		AND sd.language_id = '" . (int)$this->config->get('config_language_id') . "'
        ");
        
        return $query->row;
    }

    // SEO URLS
    public function getSeoUrls() {
        $sreview_seo_url_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'octemplates/module/oct_sreview_reviews'");

        foreach ($query->rows as $result) {
            $sreview_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
        }

        return $sreview_seo_url_data;
    }

    public function editSeoUrls($data) {

        $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'octemplates/module/oct_sreview_reviews'");

        if (isset($data['sreview_seo_url'])) {
            foreach ($data['sreview_seo_url'] as $store_id => $language) {
                foreach ($language as $language_id => $keyword) {
                    if (!empty($keyword)) {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'octemplates/module/oct_sreview_reviews', keyword = '" . $this->db->escape($keyword) . "'");
                    }
                }
            }
        }
    }
    
    public function getSubjects($data = array()) {
        $sql = "
        	SELECT 
        		* 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_subject s 
        	LEFT JOIN 
        		" . DB_PREFIX . "oct_sreview_subject_description sd 
        	ON 
        		(s.oct_sreview_subject_id = sd.oct_sreview_subject_id) 
        	WHERE 
        		sd.language_id = '" . (int)$this->config->get('config_language_id') . "'
        ";
        
        if (!empty($data['filter_name'])) {
            $sql .= " AND sd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }
        
        if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
            $sql .= " AND s.status = '" . (int)$data['filter_status'] . "'";
        }
        
        $sql .= " GROUP BY s.oct_sreview_subject_id";
        
        $sort_data = array(
            'sd.name',
            's.status',
            's.sort_order'
        );
        
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY sd.name";
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
    
    public function getSubjectDescriptions($oct_sreview_subject_id) {
        $subject_description_data = array();
        
        $query = $this->db->query("
        	SELECT 
        		* 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_subject_description 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        foreach ($query->rows as $result) {
            $subject_description_data[$result['language_id']] = array(
                'name' => $result['name']
            );
        }
        
        return $subject_description_data;
    }
    
    public function getSubjectStores($oct_sreview_subject_id) {
        $subject_store_data = array();
        
        $query = $this->db->query("
        	SELECT 
        		* 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_subject_to_store 
        	WHERE 
        		oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        ");
        
        foreach ($query->rows as $result) {
            $subject_store_data[] = $result['store_id'];
        }
        
        return $subject_store_data;
    }
    
    public function getTotalSubjects($data = array()) {
        $sql = "
        	SELECT 
        		COUNT(DISTINCT s.oct_sreview_subject_id) AS total 
        	FROM 
        		" . DB_PREFIX . "oct_sreview_subject s 
        	LEFT JOIN 
        		" . DB_PREFIX . "oct_sreview_subject_description sd 
        	ON 
        		(s.oct_sreview_subject_id = sd.oct_sreview_subject_id) 
        	WHERE 
        		sd.language_id = '" . (int)$this->config->get('config_language_id') . "'
        ";
        
        if (!empty($data['filter_name'])) {
            $sql .= " AND sd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }
        
        if (isset($data['filter_status']) && !is_null($data['filter_status'])) {
            $sql .= " AND s.status = '" . (int)$data['filter_status'] . "'";
        }
        
        $query = $this->db->query($sql);
        
        return $query->row['total'];
    }
    
    public function installTables() {
        $sql1 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_sreview_subject` (";
        $sql1 .= "  `oct_sreview_subject_id` int(11) NOT NULL AUTO_INCREMENT,";
        $sql1 .= "  `sort_order` int(11) NOT NULL DEFAULT '0',";
        $sql1 .= "  `subject_rating_count1` int(11) NOT NULL DEFAULT '0',";
        $sql1 .= "  `subject_rating_count2` int(11) NOT NULL DEFAULT '0',";
        $sql1 .= "  `subject_rating_count3` int(11) NOT NULL DEFAULT '0',";
        $sql1 .= "  `subject_rating_count4` int(11) NOT NULL DEFAULT '0',";
        $sql1 .= "  `subject_rating_count5` int(11) NOT NULL DEFAULT '0',";
        $sql1 .= "  `status` tinyint(1) NOT NULL DEFAULT '0',";
        $sql1 .= "  `date_added` datetime NOT NULL,";
        $sql1 .= "  `date_modified` datetime NOT NULL,";
        $sql1 .= "  PRIMARY KEY (`oct_sreview_subject_id`)";
        $sql1 .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;";

        $this->db->query($sql1);

        $sql2 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_sreview_subject_description` (";
        $sql2 .= "  `oct_sreview_subject_id` int(11) NOT NULL,";
        $sql2 .= "  `language_id` int(11) NOT NULL,";
        $sql2 .= "  `name` varchar(255) NOT NULL,";
        $sql2 .= "  PRIMARY KEY (`oct_sreview_subject_id`,`language_id`),";
        $sql2 .= "  KEY `name` (`name`)";
        $sql2 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

        $this->db->query($sql2);

        $sql3 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_sreview_subject_to_store` (";
        $sql3 .= "  `oct_sreview_subject_id` int(11) NOT NULL,";
        $sql3 .= "  `store_id` int(11) NOT NULL DEFAULT '0',";
        $sql3 .= "  PRIMARY KEY (`oct_sreview_subject_id`,`store_id`)";
        $sql3 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";

        $this->db->query($sql3);

        $sql4 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_sreview_reviews` (";
        $sql4 .= "  `oct_sreview_review_id` int(11) NOT NULL AUTO_INCREMENT,";
        $sql4 .= "  `author` varchar(64) NOT NULL,";
        $sql4 .= "  `text` text NOT NULL,";
        $sql4 .= "  `admin_text` text NOT NULL,";
        $sql4 .= "  `status` tinyint(1) NOT NULL DEFAULT '0',";
        $sql4 .= "  `avg_rating` int(11) NOT NULL DEFAULT '0',";
        $sql4 .= "  `date_added` datetime NOT NULL,";
        $sql4 .= "  `date_modified` datetime NOT NULL,";
        $sql4 .= "  PRIMARY KEY (`oct_sreview_review_id`)";
        $sql4 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;";

        $this->db->query($sql4);

        $sql5 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_sreview_reviews_vote` (";
        $sql5 .= "  `oct_sreview_review_id` int(11) NOT NULL,";
        $sql5 .= "  `oct_sreview_subject_id` int(11) NOT NULL,";
        $sql5 .= "  `rating` int(11) NOT NULL";
        $sql5 .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        $this->db->query($sql5);
    }

    public function deleteTables() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_sreview_subject`;");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_sreview_subject_description`;");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_sreview_subject_to_store`;");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_sreview_reviews`;");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_sreview_reviews_vote`;");
    }
}