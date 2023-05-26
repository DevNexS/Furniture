<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOCTSreviewReviews extends Model {
    public function addReview($data = []) {
        $oct_sreview_setting_data = $this->config->get('oct_sreview_setting_data');

        if ($oct_sreview_setting_data['review_moderation'] == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $this->db->query("
        	INSERT INTO
        		" . DB_PREFIX . "oct_sreview_reviews
        	SET
        		author = '" . $this->db->escape($data['author']) . "',
        		text = '" . $this->db->escape($data['text']) . "',
        		status = '" . (int)$status . "', date_added = NOW()
        ");

        $oct_sreview_review_id = $this->db->getLastId();

        $avg_rating = 0;
        $rate_val   = 0;

        if (isset($data['rating'])) {
            $count_i = 0;

            foreach ($data['rating'] as $subject_id => $rating) {
                $subject = $this->getSubject($subject_id);

                if ($subject) {
                    $this->db->query("
                    	UPDATE
                    		" . DB_PREFIX . "oct_sreview_subject
                    	SET
                    		subject_rating_count" . (int)$rating . " = (subject_rating_count" . (int)$rating . " + " . (int)$rating . ")
                    	WHERE
                    		oct_sreview_subject_id = '" . (int)$subject_id . "'
                    ");

                    $this->db->query("
                    	INSERT INTO
                    		" . DB_PREFIX . "oct_sreview_reviews_vote
                    	SET
                    		oct_sreview_subject_id = '" . (int)$subject_id . "',
							oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "',
							rating = '" . (int)$rating . "'
					");

                    $rate_val = $rate_val + $rating;

                    $count_i++;
                }

            }
        }

        if ($rate_val != 0) {
            $avg_rating = $rate_val / $count_i;
        }

        $this->db->query("
        	UPDATE
        		" . DB_PREFIX . "oct_sreview_reviews
			SET
				avg_rating = '" . (int)$avg_rating . "'
			WHERE
				oct_sreview_review_id = '" . (int)$oct_sreview_review_id . "'
		");

        $oct_sreview_setting_data = $this->config->get('oct_sreview_setting_data');

        if ($oct_sreview_setting_data['review_admin_email']) {
            $this->load->language('octemplates/module/sreview_reviews');

            $subject = sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));

            $message  = $this->language->get('text_waiting') . "\n";
            $message .= sprintf($this->language->get('text_reviewer'), html_entity_decode($data['author'], ENT_QUOTES, 'UTF-8')) . "\n";
            $message .= sprintf($this->language->get('text_rating'), $avg_rating) . "\n";
            $message .= $this->language->get('text_review') . "\n";
            $message .= html_entity_decode($data['text'], ENT_QUOTES, 'UTF-8') . "\n\n";

            $mail = new Mail($this->config->get('config_mail_engine'));
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            $admin_email_to = (isset($oct_sreview_setting_data['review_email_to']) && !empty($oct_sreview_setting_data['review_email_to'])) ? $oct_sreview_setting_data['review_email_to'] : $this->config->get('config_email');

            $mail->setTo($admin_email_to);
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $mail->setSubject($subject);
            $mail->setText($message);
            $mail->send();
        }
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
        	LEFT JOIN
        		" . DB_PREFIX . "oct_sreview_subject_to_store s2s
        	ON
        		(s.oct_sreview_subject_id = s2s.oct_sreview_subject_id)
        	WHERE
        		s.status = '1'
        		AND s.oct_sreview_subject_id = '" . (int)$oct_sreview_subject_id . "'
        		AND s2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
        		AND sd.language_id = '" . (int)$this->config->get('config_language_id') . "'
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
        		status = '1'
        ";

        $sort_data = [
            'author_asc',
            'author_desc',
            'date_added_asc',
            'date_added_desc'
        ];

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            if ($data['sort'] == 'author_asc') {
                $sql .= " ORDER BY LCASE(author) ASC";
            } elseif ($data['sort'] == 'author_desc') {
                $sql .= " ORDER BY LCASE(author) DESC";
            } elseif ($data['sort'] == 'date_added_asc') {
                $sql .= " ORDER BY date_added ASC";
            } else {
                $sql .= " ORDER BY date_added DESC";
            }
        } else {
            $sql .= " ORDER BY date_added DESC";
        }

        if (isset($data['start']) || isset($data['limit'])) {

            if (!isset($data['start']) || $data['start'] < 0) {
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
        		COUNT(*) as total
        	FROM
        		" . DB_PREFIX . "oct_sreview_reviews
        	WHERE
        		status = '1'
        ";

        $sort_data = [
            'author_asc',
            'author_desc',
            'date_added_asc',
            'date_added_desc'
        ];

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            if ($data['sort'] == 'author_asc') {
                $sql .= " ORDER BY LCASE(author) ASC";
            } elseif ($data['sort'] == 'author_desc') {
                $sql .= " ORDER BY LCASE(author) DESC";
            } elseif ($data['sort'] == 'date_added_asc') {
                $sql .= " ORDER BY date_added ASC";
            } else {
                $sql .= " ORDER BY date_added DESC";
            }
        } else {
            $sql .= " ORDER BY date_added ASC";
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function getTotalStoreReviews() {
        $sql = "
        	SELECT
        		COUNT(rv.oct_sreview_review_id) as total,
        		(
        			SELECT
        				SUM(rv.rating)
        		) as vote_sum
			FROM
				" . DB_PREFIX . "oct_sreview_reviews r
			LEFT JOIN
				" . DB_PREFIX . "oct_sreview_reviews_vote rv
			ON
				(r.oct_sreview_review_id = rv.oct_sreview_review_id)
			WHERE
				r.status = '1'
		";

        $query = $this->db->query($sql);

        $results = 0;

        if ($query->row['vote_sum'] != 0 && $query->row['total'] != 0) {
            $results = $query->row['vote_sum'] / $query->row['total'];
        }

        return $results;
    }

    public function getTotalStoreReviewsBySubject() {
		$subjects = $this->getSubjects();
		$results = [];

		foreach ($subjects as $subject){
			$sql = "
				SELECT
					COUNT(rv.oct_sreview_review_id) as total,
					(
						SELECT SUM(rv.rating)
					) as vote_sum
				FROM
					" . DB_PREFIX . "oct_sreview_reviews r
				LEFT JOIN
					" . DB_PREFIX . "oct_sreview_reviews_vote rv
				ON
					(r.oct_sreview_review_id = rv.oct_sreview_review_id)
				WHERE
					r.status = '1'
					AND rv.oct_sreview_subject_id = '" . (int)$subject['oct_sreview_subject_id'] . "'
			";

			$query = $this->db->query($sql);

			if ($query->row['vote_sum'] != 0 && $query->row['total'] != 0) {
				$name = $this->getSubject($subject['oct_sreview_subject_id']);
				$results[] = [
					'name'	=> $name['name'],
					'value' => round($query->row['vote_sum'] / $query->row['total'], 1)
				];
			}
		}

        return $results;
    }

    public function getSubjects() {
        $query = $this->db->query("
        	SELECT
        		*
        	FROM
        		" . DB_PREFIX . "oct_sreview_subject s
        	LEFT JOIN
        		" . DB_PREFIX . "oct_sreview_subject_description sd
        	ON
        		(s.oct_sreview_subject_id = sd.oct_sreview_subject_id)
        	LEFT JOIN
        		" . DB_PREFIX . "oct_sreview_subject_to_store s2s
        	ON
        		(s.oct_sreview_subject_id = s2s.oct_sreview_subject_id)
        	WHERE
        		s.status = '1'
        		AND sd.language_id = '" . (int)$this->config->get('config_language_id') . "'
        		AND s2s.store_id = '" . (int)$this->config->get('config_store_id') . "'
        	GROUP BY
        		s.oct_sreview_subject_id
        	ORDER BY
        		s.sort_order,
        		LCASE(sd.name) DESC
        ");

        return $query->rows;
    }

    public function getReviewSubjects($oct_sreview_review_id) {
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
}
