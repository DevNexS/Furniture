<?php
/********************************************************/
/*	@copyright	OCTemplates 2015-2022.					*/
/*	@support	https://octemplates.net/				*/
/*	@license	LICENSE.txt								*/
/********************************************************/

class ModelOCTemplatesWidgetsOctLocations extends Model {
    public function getOCTLocations() {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "oct_location` ORDER BY `sort`");

        $oct_locations = [];

        foreach ($query->rows as $location) {
            if (isset($location['image']) && !empty($location['image']) && file_exists(DIR_IMAGE.$location['image'])) {
                $this->load->model('tool/image');
                
                $thumb = $this->model_tool_image->resize($location['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_location_height'));
            } else {
                $thumb = false;
            }

            $description = json_decode($location['description'], true);

            $oct_location_telephones = !empty($location['phone']) ? explode(PHP_EOL, $location['phone']) : [];
            $oct_location_opens = (isset($description[(int)$this->config->get('config_language_id')]['open']) && !empty($description[(int)$this->config->get('config_language_id')]['open'])) ? explode(PHP_EOL, isset($description[(int)$this->config->get('config_language_id')]['open']) ? $description[(int)$this->config->get('config_language_id')]['open'] : '') : [];

            $phone = $open = [];

            foreach ($oct_location_telephones as $location_telephone) {
                $phone[] = html_entity_decode($location_telephone, ENT_QUOTES, 'UTF-8');
            }

            foreach ($oct_location_opens as $location_open) {
                $open[] = html_entity_decode($location_open, ENT_QUOTES, 'UTF-8');
            }

            $oct_locations[] = [
                'title' => isset($description[(int)$this->config->get('config_language_id')]['title']) ? html_entity_decode($description[(int)$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8') : '',
                'address' => isset($description[(int)$this->config->get('config_language_id')]['address']) ? html_entity_decode($description[(int)$this->config->get('config_language_id')]['address'], ENT_QUOTES, 'UTF-8') : '',
                'open' => $open,
                'phone' => $phone,
                'map' => html_entity_decode($location['map'], ENT_QUOTES, 'UTF-8'),
                'thumb' => $thumb,
                'link' => html_entity_decode($location['link'], ENT_QUOTES, 'UTF-8')
            ];
        }

        return $oct_locations;
    }
}
