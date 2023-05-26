<?php
/**********************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesStickersOctStickers extends Model {
	public function getOCTStickers($result) {
		$oct_stickers_data = [];

		if ($this->config->get('oct_stickers_status')) {
			$oct_stickers = $this->config->get('oct_stickers_data');

			if (isset($result['special']) && (float)$result['special']) {
				$special = true;
			} else {
				$special = false;
			}

			if ((isset($oct_stickers['stickers']['new']['status']) && $oct_stickers['stickers']['new']['status']) && (isset($oct_stickers['stickers']['new']['auto']) && $oct_stickers['stickers']['new']['auto'] == 'on')) {
				if (strtotime($result['date_added']) >= strtotime("-".(int)$oct_stickers['stickers']['new']['count']." day", time())) {
					$oct_stickers_data['stickers']['stickers_new'] = (isset($oct_stickers['stickers']['new']['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers['stickers']['new']['title'][(int)$this->config->get('config_language_id')])) ? $oct_stickers['stickers']['new']['title'][(int)$this->config->get('config_language_id')] : $this->language->get('entry_sticker_new');
				}
			}

			if ((isset($oct_stickers['stickers']['bestseller']['status']) && $oct_stickers['stickers']['bestseller']['status']) && (isset($oct_stickers['stickers']['bestseller']['auto']) && $oct_stickers['stickers']['bestseller']['auto'] == 'on')) {
				if ($this->model_catalog_product->getOCTBestSellerProducts($result['product_id']) >= (int)$oct_stickers['stickers']['bestseller']['count']) {
					$oct_stickers_data['stickers']['stickers_bestseller'] = (isset($oct_stickers['stickers']['bestseller']['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers['stickers']['bestseller']['title'][(int)$this->config->get('config_language_id')])) ? $oct_stickers['stickers']['bestseller']['title'][(int)$this->config->get('config_language_id')] : $this->language->get('entry_sticker_bestseller');
				}
			}

			if ((isset($oct_stickers['stickers']['popular']['status']) && $oct_stickers['stickers']['popular']['status']) && (isset($oct_stickers['stickers']['popular']['auto']) && $oct_stickers['stickers']['popular']['auto'] == 'on')) {
				if ($result['viewed'] > (int)$oct_stickers['stickers']['popular']['count']) {
					$oct_stickers_data['stickers']['stickers_popular'] = (isset($oct_stickers['stickers']['popular']['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers['stickers']['popular']['title'][(int)$this->config->get('config_language_id')])) ? $oct_stickers['stickers']['popular']['title'][(int)$this->config->get('config_language_id')] : $this->language->get('entry_sticker_popular');
				}
			}

			if ((isset($oct_stickers['stickers']['special']['status']) && $oct_stickers['stickers']['special']['status']) && (isset($oct_stickers['stickers']['special']['auto']) && $oct_stickers['stickers']['special']['auto'] == 'on')) {
				if ($special) {
					$oct_stickers_data['stickers']['stickers_special'] = isset($oct_stickers['stickers']['special']['view_title']) ? ((isset($oct_stickers['stickers']['special']['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers['stickers']['special']['title'][(int)$this->config->get('config_language_id')])) ? $oct_stickers['stickers']['special']['title'][(int)$this->config->get('config_language_id')] : $this->language->get('entry_sticker_special')) : false;
				}
			}

			if ((isset($oct_stickers['stickers']['sold']['status']) && $oct_stickers['stickers']['sold']['status']) && (isset($oct_stickers['stickers']['sold']['auto']) && $oct_stickers['stickers']['sold']['auto'] == 'on')) {
				if ((int)$result['quantity'] == (int)$oct_stickers['stickers']['sold']['count']) {
					$oct_stickers_data['stickers']['stickers_sold'] = (isset($oct_stickers['stickers']['sold']['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers['stickers']['sold']['title'][(int)$this->config->get('config_language_id')])) ? $oct_stickers['stickers']['sold']['title'][(int)$this->config->get('config_language_id')] : $this->language->get('entry_sticker_sold');
				}
			}

			if ((isset($oct_stickers['stickers']['ends']['status']) && $oct_stickers['stickers']['ends']['status']) && (isset($oct_stickers['stickers']['ends']['auto']) && $oct_stickers['stickers']['ends']['auto'] == 'on')) {
				if ((int)$result['quantity'] <= (int)$oct_stickers['stickers']['ends']['count'] && (int)$result['quantity'] > 0) {
					$oct_stickers_data['stickers']['stickers_ends'] = (isset($oct_stickers['stickers']['ends']['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers['stickers']['ends']['title'][(int)$this->config->get('config_language_id')])) ? $oct_stickers['stickers']['ends']['title'][(int)$this->config->get('config_language_id')] : $this->language->get('entry_sticker_ends');
				}
			}

			if (isset($result['oct_stickers']) && !empty($result['oct_stickers'])) {
				foreach ($result['oct_stickers'] as $oct_sticker) {
					$oct_t_sticker = explode('_',$oct_sticker);

					if ((isset($oct_stickers[$oct_t_sticker[0]][$oct_t_sticker[1]]['status']) && $oct_stickers[$oct_t_sticker[0]][$oct_t_sticker[1]]['status'])) {
						if (isset($oct_stickers[$oct_t_sticker[0]][$oct_t_sticker[1]]['title'][(int)$this->config->get('config_language_id')]) && !empty($oct_stickers[$oct_t_sticker[0]][$oct_t_sticker[1]]['title'][(int)$this->config->get('config_language_id')])) {
							$oct_stickers_data['stickers']['stickers_'.$oct_t_sticker[1]] = $oct_stickers[$oct_t_sticker[0]][$oct_t_sticker[1]]['title'][(int)$this->config->get('config_language_id')];
						}
					}
				}
			}
		}

		return $oct_stickers_data;
	}
}
