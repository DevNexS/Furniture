<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctSubscribe extends Model {
	public function addSubscribe($data) {
        $this->load->language('octemplates/module/oct_subscribe');

        $hash = sha1("NOW()" . sha1(sha1($data['email'])));

        $this->db->query("INSERT INTO `" . DB_PREFIX . "oct_subscribe` SET email = '" . $this->db->escape($data['email']) . "', ip = '" . $this->db->escape($data['ip']) . "', approved = '0', hash = '" . $this->db->escape($hash) . "', date_added = NOW()");

        $subscribe_id = $this->db->getLastId();

        $store_name = $this->config->get('config_name');

		$link = $this->url->link('octemplates/module/oct_subscribe/subscribe_confirm', 'approve=' . (int)$subscribe_id . '&hash='.$hash, true);

		if ($this->config->get('oct_subscribe_template_status')) {
			$oct_subscribe_text_data = $this->config->get('oct_subscribe_text_data');

			$subject = (isset($oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['subject_email_template_first']) && !empty($oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['subject_email_template_first'])) ? $oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['subject_email_template_first'] : sprintf($this->language->get('text_approve_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));

			$message = html_entity_decode(str_replace('{approve_link}', $link, $oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['email_template_first']), ENT_QUOTES, 'UTF-8');
		} else {
			$subject = sprintf($this->language->get('text_approve_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));

			$message = sprintf($this->language->get('text_approve_welcome'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')) . "\n\n";
			$message .= $this->language->get('text_approve_services') . "\n\n";
			$message .= sprintf($this->language->get('text_subscribe_services'), $link) . "\n\n";
			$message .= $this->language->get('text_thanks') . "\n";
			$message .= html_entity_decode($store_name, ENT_QUOTES, 'UTF-8');
        }

		$this->load->model('setting/setting');

		$from = $this->model_setting_setting->getSettingValue('config_email', (int)$this->config->get('config_store_id'));

		if (!$from) {
			$from = $this->config->get('config_email');
		}

        $mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

        $mail->setTo($data['email']);
        $mail->setFrom($from);
        $mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
        $mail->setSubject($subject);

        if ($this->config->get('oct_subscribe_template_status')) {
			$mail->setHtml($message);
		} else {
			$mail->setText($message);
		}

        $mail->send();
    }

    public function checkSubscribe($email) {
        $query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "oct_subscribe` WHERE email = '" . $this->db->escape($email) . "'");

        if ($query->row) {
            return true;
        } else {
            return false;
        }
    }

    public function getSubscribe($subscribe_id, $hash) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_subscribe` WHERE subscribe_id = '" . (int) $subscribe_id . "' AND hash = '" . $this->db->escape($hash) . "'");

        return $query->row;
    }

    public function getSubscribeById($subscribe_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_subscribe` WHERE subscribe_id = '" . (int) $subscribe_id . "'");

        return $query->row;
    }

    public function unSubscribe($subscribe_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "oct_subscribe` WHERE subscribe_id = '" . (int) $subscribe_id . "'");
    }

    public function approve($subscribe_id) {
        $subscribe_info = $this->getSubscribeById($subscribe_id);

        if ($subscribe_info) {

            $this->db->query("UPDATE `" . DB_PREFIX . "oct_subscribe` SET approved = '1' WHERE subscribe_id = '" . (int) $subscribe_id . "'");

            $this->load->language('octemplates/module/oct_subscribe/subscribe_confirm');

            $store_name = $this->config->get('config_name');

			$link = $this->url->link('octemplates/module/oct_subscribe/subscribe_confirm', 'unsubscribe=' . (int)$subscribe_id . '&hash='.$subscribe_info['hash'], true);

			if ($this->config->get('oct_subscribe_template_status')) {
				$oct_subscribe_text_data = $this->config->get('oct_subscribe_text_data');

				$subject = (isset($oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['subject_email_template_second']) && !empty($oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['subject_email_template_second'])) ? $oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['subject_email_template_second'] : sprintf($this->language->get('text_approve_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));

				$message = html_entity_decode(str_replace('{unsubscribe_link}', $link, $oct_subscribe_text_data[(int)$this->config->get('config_language_id')]['email_template_second']), ENT_QUOTES, 'UTF-8');
			} else {
				$subject = sprintf($this->language->get('text_unsubscribe_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));

				$message = sprintf($this->language->get('text_unsubscribe_welcome'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')) . "\n\n";
				$message .= sprintf($this->language->get('text_unsubscribe_services'), $link) . "\n\n";
				$message .= $this->language->get('text_thanks') . "\n";
				$message .= html_entity_decode($store_name, ENT_QUOTES, 'UTF-8');
            }

			$this->load->model('setting/setting');

			$from = $this->model_setting_setting->getSettingValue('config_email', (int)$this->config->get('config_store_id'));

			if (!$from) {
				$from = $this->config->get('config_email');
			}

            $mail = new Mail($this->config->get('config_mail_engine'));
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port     = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout  = $this->config->get('config_mail_smtp_timeout');

            $mail->setTo($subscribe_info['email']);
            $mail->setFrom($from);
            $mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
            $mail->setSubject($subject);

            if ($this->config->get('oct_subscribe_template_status')) {
				$mail->setHtml($message);
			} else {
				$mail->setText($message);
			}

            $mail->send();
        }
    }
}
