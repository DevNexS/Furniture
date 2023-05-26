<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesBlogOCTBlogComment extends Model {
	public function addComment($blogarticle_id, $data) {
		$oct_blogsettings_data = $this->config->get('oct_blogsettings_data');

		$this->db->query("
			INSERT INTO
				" . DB_PREFIX . "oct_blogcomments
			SET
				author = '" . $this->db->escape($data['name']) . "', customer_id = '" . (int)$this->customer->getId() . "', blogarticle_id = '" . (int)$blogarticle_id . "', text = '" . $this->db->escape($data['text']) . "', date_added = NOW()
		");

		$comment_id = $this->db->getLastId();

		if (!isset($oct_blogsettings_data['comments_moder'])) {
			$this->db->query("
				UPDATE
					" . DB_PREFIX . "oct_blogcomments
				SET
					status = '1'
				WHERE
					comment_id = '". (int)$comment_id ."'
			");
		}

		if (in_array('review', (array)$this->config->get('config_mail_alert'))) {
			$this->load->language('octemplates/blog/oct_blog_review');
			$this->load->model('catalog/product');

			$product_info = $this->model_catalog_product->getProduct($blogarticle_id);

			$subject = sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));

			$message  = $this->language->get('text_waiting') . "\n";
			$message .= sprintf($this->language->get('text_product'), html_entity_decode($product_info['name'], ENT_QUOTES, 'UTF-8')) . "\n";
			$message .= sprintf($this->language->get('text_reviewer'), html_entity_decode($data['name'], ENT_QUOTES, 'UTF-8')) . "\n";
			$message .= $this->language->get('text_review') . "\n";
			$message .= html_entity_decode($data['text'], ENT_QUOTES, 'UTF-8') . "\n\n";

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
			$mail->setSubject($subject);
			$mail->setText($message);
			$mail->send();

			// Send to additional alert emails
			$emails = explode(',', $this->config->get('config_mail_alert_email'));

			foreach ($emails as $email) {
				if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$mail->setTo($email);
					$mail->send();
				}
			}
		}
	}

	public function getCommentsByArticleId($blogarticle_id, $start = 0, $limit = 20) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 20;
		}

		$query = $this->db->query("
			SELECT
				c.comment_id,
				c.author,
				c.text,
				c.admin_text,
				c.date_added
			FROM
				" . DB_PREFIX . "oct_blogcomments c
			WHERE
				c.blogarticle_id = '" . (int)$blogarticle_id . "'
				AND c.status = '1'
			ORDER BY
				c.date_added DESC LIMIT " . (int)$start . ",
				" . (int)$limit
		);

		return $query->rows;
	}

	public function getTotalCommentsByArticleId($blogarticle_id) {
		$query = $this->db->query("
			SELECT
				COUNT(*) AS total
			FROM
				" . DB_PREFIX . "oct_blogcomments c
			WHERE
				c.blogarticle_id = '" . (int)$blogarticle_id . "'
				AND c.status = '1'
		");

		return $query->row['total'];
	}
}
