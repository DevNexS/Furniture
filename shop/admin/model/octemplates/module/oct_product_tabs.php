<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ModelOCTemplatesModuleOctProductTabs extends Model {
    public function addProductTab($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "oct_extra_tabs SET sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "'");
        
        $extra_tab_id = $this->db->getLastId();
        
        foreach ($data['oct_product_tabs_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "oct_extra_tabs_description SET extra_tab_id = '" . (int)$extra_tab_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "'");
        }
        
        return $extra_tab_id;
    }
    
    public function editProductTab($extra_tab_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "oct_extra_tabs SET sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "' WHERE extra_tab_id = '" . (int)$extra_tab_id . "'");
        
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_extra_tabs_description WHERE extra_tab_id = '" . (int)$extra_tab_id . "'");
        
        foreach ($data['oct_product_tabs_description'] as $language_id => $value) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "oct_extra_tabs_description SET extra_tab_id = '" . (int)$extra_tab_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "'");
        }
    }
    
    public function deleteProductTab($extra_tab_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_extra_tabs WHERE extra_tab_id = '" . (int)$extra_tab_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "oct_extra_tabs_description WHERE extra_tab_id = '" . (int)$extra_tab_id . "'");
    }
    
    public function getProductTab($extra_tab_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "oct_extra_tabs b LEFT JOIN " . DB_PREFIX . "oct_extra_tabs_description bd ON (b.extra_tab_id = bd.extra_tab_id) WHERE b.extra_tab_id = '" . (int)$extra_tab_id . "' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "'");
        
        return $query->row;
    }
    
    public function getProductTabs($data = []) {
        $sql = "SELECT * FROM " . DB_PREFIX . "oct_extra_tabs b LEFT JOIN " . DB_PREFIX . "oct_extra_tabs_description bd ON (b.extra_tab_id = bd.extra_tab_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "'";
        
        if (!empty($data['filter_name'])) {
            $sql .= " AND bd.title LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }
        
        $sql .= " GROUP BY b.extra_tab_id";
        
        $sort_data = [
            'bd.title',
            'b.sort_order'
        ];
        
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY bd.title";
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
    
    public function getProductTabsDescriptions($extra_tab_id) {
        $oct_product_tabs_description_data = [];
        
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oct_extra_tabs_description WHERE extra_tab_id = '" . (int)$extra_tab_id . "'");
        
        foreach ($query->rows as $result) {
            $oct_product_tabs_description_data[$result['language_id']] = [
                'title' => $result['title']
            ];
        }
        
        return $oct_product_tabs_description_data;
    }
    
    public function getTotalProductTabs() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "oct_extra_tabs");
        
        return $query->row['total'];
    }
}