<?php
/**********************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOctemplatesTimerSpecialDate extends Model {

    public function getProductSpecialDates($product_id) {
        $query = $this->db->query("SELECT date_start, date_end FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = '".(int)$product_id."' AND ps.customer_group_id = '" . (int) $this->config->get('config_customer_group_id') . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1");

        if ($query->num_rows) {
            return $query->row;
        } else {
            return false;
        }
    }
}
