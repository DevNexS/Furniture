<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctSubscribe extends Model {
    public function getSubscribes($data = []) {
        $sql = "SELECT * FROM `" . DB_PREFIX . "oct_subscribe` ";
        
        $implode = [];
        
        if (!empty($data['filter_email'])) {
            $implode[] = "email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
        }
        
        if (!empty($data['filter_ip'])) {
            $implode[] = "ip = '" . $this->db->escape($data['filter_ip']) . "')";
        }
        
        if (isset($data['filter_approved']) && !is_null($data['filter_approved'])) {
            $implode[] = "approved = '" . (int)$data['filter_approved'] . "'";
        }
        
        if (!empty($data['filter_date_added'])) {
            $implode[] = "DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        }
        
        if ($implode) {
            $sql .= " WHERE " . implode(" AND ", $implode);
        }
        
        $sort_data = [
            'email',
            'approved',
            'ip',
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
    
    public function deleteSubscribe($subscribe_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "oct_subscribe` WHERE subscribe_id = '" . (int)$subscribe_id . "'");
    }
    
    public function getTotalSubscribes() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "oct_subscribe`");
        
        return $query->row['total'];
    }
    
    public function exportCSV() {
        $output = '';
        
        $fp = fopen('php://temp', 'r+');
        
        fputs($fp, $bom = (chr(0xEF) . chr(0xBB) . chr(0xBF)));
        
        $query = "SELECT email AS `Email`, approved AS `Approved`, ip AS `IP`, date_added AS `Date Added` FROM `" . DB_PREFIX . "oct_subscribe` WHERE approved = '1'";
        
        $results = $this->db->query($query);
        
        $row = $results->row;
        
        fputcsv($fp, array_keys($row));
        
        rewind($fp);
        
        $output .= fgets($fp);
        
        foreach ($results->rows as $result) {
            rewind($fp);
            fputcsv($fp, $result);
            rewind($fp);
            $output .= fgets($fp);
        }
        
        return $output;
    }
    
    public function getSubscribe($subscribe_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "oct_subscribe` WHERE subscribe_id = '" . (int)$subscribe_id . "'");
        
        return $query->row;
    }
    
    public function approve($subscribe_id) {
        $subscribe_info = $this->getSubscribe($subscribe_id);
        
        if ($subscribe_info) {
            $this->db->query("UPDATE `" . DB_PREFIX . "oct_subscribe` SET approved = '1' WHERE subscribe_id = '" . (int)$subscribe_id . "'");
            
            $this->load->language('module/oct_subscribe');
            
            $store_name = $this->config->get('config_name');
            
            $message = sprintf($this->language->get('text_approve_welcome'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')) . "\n\n";
            $message .= $this->language->get('text_approve_services') . "\n\n";
            $message .= sprintf($this->language->get('text_unsubscribe_services'), HTTP_CATALOG . 'index.php?route=octemplates/module/oct_subscribe/subscribe_confirm&unsubscribe=' . (int)$subscribe_id . '&hash=' . $subscribe_info['hash']) . "\n\n";
            $message .= $this->language->get('text_approve_thanks') . "\n";
            $message .= html_entity_decode($store_name, ENT_QUOTES, 'UTF-8');
            
            $mail                = new Mail();
            $mail->protocol      = $this->config->get('config_mail_protocol');
            $mail->parameter     = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port     = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout  = $this->config->get('config_mail_smtp_timeout');
            
            $mail->setTo($subscribe_info['email']);
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
            $mail->setSubject(sprintf($this->language->get('text_approve_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')));
            $mail->setText($message);
            $mail->send();
        }
    }
    
    public function makeDB() {
        $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_subscribe` ( ";
        $sql .= "`subscribe_id` int(11) NOT NULL AUTO_INCREMENT, ";
        $sql .= "`email` varchar(96) NOT NULL, ";
        $sql .= "`ip` varchar(40) NOT NULL, ";
        $sql .= "`approved` tinyint(1) NOT NULL, ";
        $sql .= "`date_added` datetime NOT NULL, ";
        $sql .= "`hash` varchar(40) NOT NULL, ";
        $sql .= "PRIMARY KEY (`subscribe_id`) ";
        $sql .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
        
        $this->db->query($sql);
    }
    
    public function removeDB() {
        $sql = "DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_subscribe`;";
        
        $this->db->query($sql);
    }
}