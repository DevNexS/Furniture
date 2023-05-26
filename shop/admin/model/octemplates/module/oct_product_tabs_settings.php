<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctProductTabsSettings extends Model {
    public function makeDB() {
        $sql1 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_extra_tabs` (";
        $sql1 .= "`extra_tab_id` int(11) NOT NULL AUTO_INCREMENT, ";
        $sql1 .= "`sort_order` int(3) NOT NULL DEFAULT '0', ";
        $sql1 .= "`status` tinyint(1) NOT NULL DEFAULT '1', ";
        $sql1 .= "PRIMARY KEY (`extra_tab_id`) ";
        $sql1 .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;";
        $this->db->query($sql1);
        
        $sql2 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_extra_tabs_description` (";
        $sql2 .= "`extra_tab_id` int(11) NOT NULL, ";
        $sql2 .= "`language_id` int(11) NOT NULL, ";
        $sql2 .= "`title` text NOT NULL, ";
        $sql2 .= "PRIMARY KEY (`extra_tab_id`,`language_id`) ";
        $sql2 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8;";
        $this->db->query($sql2);
        
        $sql3 = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_product_extra_tabs` (";
        $sql3 .= "`product_id` int(11) NOT NULL, ";
        $sql3 .= "`extra_tab_id` int(11) NOT NULL, ";
        $sql3 .= "`language_id` int(11) NOT NULL, ";
        $sql3 .= "`text` text NOT NULL, ";
        $sql3 .= "PRIMARY KEY (`product_id`,`extra_tab_id`,`language_id`) ";
        $sql3 .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
        
        $this->db->query($sql3);
    }
    
    public function removeDB() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_extra_tabs`;");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_extra_tabs_description`;");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_product_extra_tabs`;");
    }
    
    public function getCategories() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  ORDER BY c.parent_id, c.sort_order, cd.name");
        
        $category_data = [];
        
        foreach ($query->rows as $row) {
            $category_data[$row['parent_id']][$row['category_id']] = $row;
        }
        
        return $category_data;
    }
    
    public function updateTab($module_categories, $extra_tab_id, $tab_description) {
        $filter_data = [
            'filter_category' => $module_categories
        ];
        
        $results = $this->getProducts($filter_data);
        
        if ($results) {
            foreach ($results as $product_id) {
                $this->db->query("DELETE FROM " . DB_PREFIX . "oct_product_extra_tabs WHERE product_id = '" . (int)$product_id . "' AND extra_tab_id = '" . (int)$extra_tab_id . "'");
                
                foreach ($tab_description as $language_id => $text) {
                    $this->db->query("INSERT INTO " . DB_PREFIX . "oct_product_extra_tabs SET product_id = '" . (int)$product_id . "', extra_tab_id = '" . (int)$extra_tab_id . "', language_id = '" . (int)$language_id . "', text = '" . $this->db->escape($text['text']) . "'");
                }
            }
            
            return true;
        } else {
            return false;
        }
    }
    
    public function removeTab($module_categories, $extra_tab_id) {
        $filter_data = [
            'filter_category' => $module_categories
        ];
        
        $results = $this->getProducts($filter_data);
        
        if ($results) {
            foreach ($results as $product_id) {
                $this->db->query("DELETE FROM " . DB_PREFIX . "oct_product_extra_tabs WHERE product_id = '" . (int)$product_id . "' AND extra_tab_id = '" . (int)$extra_tab_id . "'");
            }
            
            return true;
        } else {
            return false;
        }
    }
    
    public function getProducts($data = []) {
        $sql = "SELECT p.product_id FROM " . DB_PREFIX . "product p";
        
        if ($data['filter_category']) {
            $sql .= " LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (p.product_id = p2c.product_id) WHERE p2c.category_id = '" . (int)$data['filter_category'] . "'";
        }
        
        $sql .= " GROUP BY p.product_id";
        
        $product_data = [];
        
        $query = $this->db->query($sql);
        
        foreach ($query->rows as $result) {
            $product_data[] = $result['product_id'];
        }
        
        return $product_data;
    }
}