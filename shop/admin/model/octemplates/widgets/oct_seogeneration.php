<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ModelOCTemplatesWidgetsOCTSeoGeneration extends Model {
	public function seoUrlGenerator($type, $language_id, $store_id, $data, $element_id) {
		$oct_seo_url_data = $this->config->get('theme_oct_remarket_seo_url_data');

		if (!empty($oct_seo_url_data[$type])) {
			$oct_urlgen_template = $oct_seo_url_data[$type];

			$i = 0;

			switch ($type) {
				case 'product':
					$name = (isset($data['product_description'][$language_id]['name']) && !empty($data['product_description'][$language_id]['name'])) ? strip_tags(html_entity_decode($data['product_description'][$language_id]['name'], ENT_QUOTES, 'UTF-8')) : '';
					$model = (isset($data['model']) && !empty($data['model'])) ? strip_tags(html_entity_decode($data['model'], ENT_QUOTES, 'UTF-8')) : '';
					$sku = (isset($data['sku']) && !empty($data['sku'])) ? strip_tags(html_entity_decode($data['sku'], ENT_QUOTES, 'UTF-8')) : '';
					$brand = (isset($data['manufacturer']) && !empty($data['manufacturer'])) ? strip_tags(html_entity_decode($data['manufacturer'], ENT_QUOTES, 'UTF-8')) : '';
					break;

				case 'category':
					$name = (isset($data['category_description'][$language_id]['name']) && !empty($data['category_description'][$language_id]['name'])) ? strip_tags(html_entity_decode($data['category_description'][$language_id]['name'], ENT_QUOTES, 'UTF-8')) : '';
					$model = '';
					$sku = '';
					$brand = '';
					break;

				case 'manufacturer':
					$name = ($data['name'] && !empty($data['name'])) ? strip_tags(html_entity_decode($this->db->escape($data['name']), ENT_QUOTES, 'UTF-8')) : '';
					$model = '';
					$sku = '';
					$brand = '';
					break;

				case 'information':
					$name = (isset($data['information_description'][$language_id]['title']) && !empty($data['information_description'][$language_id]['title'])) ? strip_tags(html_entity_decode($data['information_description'][$language_id]['title'], ENT_QUOTES, 'UTF-8')) : '';					$model = '';
					$sku = '';
					$brand = '';
					break;

				case 'blog_category':
					$name = (isset($data['category_description'][$language_id]['name']) && !empty($data['category_description'][$language_id]['name'])) ? strip_tags(html_entity_decode($data['category_description'][$language_id]['name'], ENT_QUOTES, 'UTF-8')) : '';
					$model = '';
					$sku = '';
					$brand = '';
					break;

				case 'blog_article':
					$name = (isset($data['article_description'][$language_id]['name']) && !empty($data['article_description'][$language_id]['name'])) ? strip_tags(html_entity_decode($data['article_description'][$language_id]['name'], ENT_QUOTES, 'UTF-8')) : '';
					$model = '';
					$sku = '';
					$brand = '';
					break;

				default:
					$name = '';
					$model = '';
					$sku = '';
					$brand = '';
					break;
			}

			if (!empty($name)) {
				$oct_replace = [
					'[name]' => $name,
					'[model]' => $model,
					'[sku]'	=> $sku,
					'[brand]'	=> $brand,
					'[lang_prefix]' => isset($oct_seo_url_data['lang_prefix'][$language_id]) ? $oct_seo_url_data['lang_prefix'][$language_id] : ''
				];

				$keyword = str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_urlgen_template);

				$oct_keyword_translit = $this->octTranslit($this->db->escape($keyword));

				$unic = false;
				$t = '';

				while ($unic === false) {
					if ($i > 0) {
						$t = '-'. $i;
					}

					$sql = $this->db->query("SELECT seo_url_id FROM " . DB_PREFIX . "seo_url WHERE store_id = '" . (int)$store_id . "' AND keyword = '" . $this->db->escape(trim($oct_keyword_translit.$t)) . "'");

					if (!$sql->num_rows) {
						$unic = true;
					} else {
						$unic = false;

						$i++;
					}
				}

				$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = '". str_replace('_', '', $type) ."_id=" . (int)$element_id . "', keyword = '" . $this->db->escape(trim($oct_keyword_translit.$t)) . "'");
			}
		}
	}

	public function octTranslit($string) {
		$string = (string)$string;
		$string = strip_tags($string);
		$string = str_replace(array("\n", "\r"), " ", $string);
		$string = preg_replace("/\s+/", ' ', $string);
		$string = trim($string);
		$string = utf8_strtolower($string);

		$lang_tr = [
			'á' => 'a', 'Á' => 'A', 'à' => 'a', 'À' => 'A',
			'ă' => 'a', 'Ă' => 'A', 'â' => 'a', 'Â' => 'A',
			'å' => 'a', 'Å' => 'A', 'ã' => 'a', 'Ã' => 'A',
			'ą' => 'a', 'Ą' => 'A', 'ā' => 'a', 'Ā' => 'A',
			'ä' => 'ae', 'Ä' => 'AE', 'æ' => 'ae', 'Æ' => 'AE',
			'ḃ' => 'b', 'Ḃ' => 'B', 'ć' => 'c', 'Ć' => 'C',
			'ĉ' => 'c', 'Ĉ' => 'C', 'č' => 'c', 'Č' => 'C',
			'ċ' => 'c', 'Ċ' => 'C', 'ç' => 'c', 'Ç' => 'C',
			'ď' => 'd', 'Ď' => 'D', 'ḋ' => 'd', 'Ḋ' => 'D',
			'đ' => 'd', 'Đ' => 'D', 'ð' => 'dh', 'Ð' => 'Dh',
			'é' => 'e', 'É' => 'E', 'è' => 'e', 'È' => 'E',
			'ĕ' => 'e', 'Ĕ' => 'E', 'ê' => 'e', 'Ê' => 'E',
			'ě' => 'e', 'Ě' => 'E', 'ë' => 'e', 'Ë' => 'E',
			'ė' => 'e', 'Ė' => 'E', 'ę' => 'e', 'Ę' => 'E',
			'ē' => 'e', 'Ē' => 'E', 'ḟ' => 'f', 'Ḟ' => 'F',
			'ƒ' => 'f', 'Ƒ' => 'F', 'ğ' => 'g', 'Ğ' => 'G',
			'ĝ' => 'g', 'Ĝ' => 'G', 'ġ' => 'g', 'Ġ' => 'G',
			'ģ' => 'g', 'Ģ' => 'G', 'ĥ' => 'h', 'Ĥ' => 'H',
			'ħ' => 'h', 'Ħ' => 'H', 'í' => 'i', 'Í' => 'I',
			'ì' => 'i', 'Ì' => 'I', 'î' => 'i', 'Î' => 'I',
			'ï' => 'i', 'Ï' => 'I', 'ĩ' => 'i', 'Ĩ' => 'I',
			'į' => 'i', 'Į' => 'I', 'ī' => 'i', 'Ī' => 'I',
			'ĵ' => 'j', 'Ĵ' => 'J', 'ķ' => 'k', 'Ķ' => 'K',
			'ĺ' => 'l', 'Ĺ' => 'L', 'ľ' => 'l', 'Ľ' => 'L',
			'ļ' => 'l', 'Ļ' => 'L', 'ł' => 'l', 'Ł' => 'L',
			'ṁ' => 'm', 'Ṁ' => 'M', 'ń' => 'n', 'Ń' => 'N',
			'ň' => 'n', 'Ň' => 'N', 'ñ' => 'n', 'Ñ' => 'N',
			'ņ' => 'n', 'Ņ' => 'N', 'ó' => 'o', 'Ó' => 'O',
			'ò' => 'o', 'Ò' => 'O', 'ô' => 'o', 'Ô' => 'O',
			'ő' => 'o', 'Ő' => 'O', 'õ' => 'o', 'Õ' => 'O',
			'ø' => 'oe', 'Ø' => 'OE', 'ō' => 'o', 'Ō' => 'O',
			'ơ' => 'o', 'Ơ' => 'O', 'ö' => 'oe', 'Ö' => 'OE',
			'ṗ' => 'p', 'Ṗ' => 'P', 'ŕ' => 'r', 'Ŕ' => 'R',
			'ř' => 'r', 'Ř' => 'R', 'ŗ' => 'r', 'Ŗ' => 'R',
			'ś' => 's', 'Ś' => 'S', 'ŝ' => 's', 'Ŝ' => 'S',
			'š' => 's', 'Š' => 'S', 'ṡ' => 's', 'Ṡ' => 'S',
			'ş' => 's', 'Ş' => 'S', 'ș' => 's', 'Ș' => 'S',
			'ß' => 'SS', 'ť' => 't', 'Ť' => 'T', 'ṫ' => 't',
			'Ṫ' => 'T', 'ţ' => 't', 'Ţ' => 'T', 'ț' => 't',
			'Ț' => 'T', 'ŧ' => 't', 'Ŧ' => 'T', 'ú' => 'u',
			'Ú' => 'U', 'ù' => 'u', 'Ù' => 'U', 'ŭ' => 'u',
			'Ŭ' => 'U', 'û' => 'u', 'Û' => 'U', 'ů' => 'u',
			'Ů' => 'U', 'ű' => 'u', 'Ű' => 'U', 'ũ' => 'u',
			'Ũ' => 'U', 'ų' => 'u', 'Ų' => 'U', 'ū' => 'u',
			'Ū' => 'U', 'ư' => 'u', 'Ư' => 'U', 'ü' => 'ue',
			'Ü' => 'UE', 'ẃ' => 'w', 'Ẃ' => 'W', 'ẁ' => 'w',
			'Ẁ' => 'W', 'ŵ' => 'w', 'Ŵ' => 'W', 'ẅ' => 'w',
			'Ẅ' => 'W', 'ý' => 'y', 'Ý' => 'Y', 'ỳ' => 'y',
			'Ỳ' => 'Y', 'ŷ' => 'y', 'Ŷ' => 'Y', 'ÿ' => 'y',
			'Ÿ' => 'Y', 'ź' => 'z', 'Ź' => 'Z', 'ž' => 'z',
			'Ž' => 'Z', 'ż' => 'z', 'Ż' => 'Z', 'þ' => 'th',
			'Þ' => 'Th', 'µ' => 'u', 'а' => 'a', 'А' => 'a',
			'б' => 'b', 'Б' => 'b', 'в' => 'v', 'В' => 'v',
			'г' => 'g', 'Г' => 'g', 'д' => 'd', 'Д' => 'd',
			'е' => 'e', 'Е' => 'E', 'ё' => 'e', 'Ё' => 'E',
			'ж' => 'zh', 'Ж' => 'zh', 'з' => 'z', 'З' => 'z',
			'и' => 'i', 'И' => 'i', 'й' => 'j', 'Й' => 'j',
			'к' => 'k', 'К' => 'k', 'л' => 'l', 'Л' => 'l',
			'м' => 'm', 'М' => 'm', 'н' => 'n', 'Н' => 'n',
			'о' => 'o', 'О' => 'o', 'п' => 'p', 'П' => 'p',
			'р' => 'r', 'Р' => 'r', 'с' => 's', 'С' => 's',
			'т' => 't', 'Т' => 't', 'у' => 'u', 'У' => 'u',
			'ф' => 'f', 'Ф' => 'f', 'х' => 'h', 'Х' => 'h',
			'ц' => 'c', 'Ц' => 'c', 'ч' => 'ch', 'Ч' => 'ch',
			'ш' => 'sh', 'Ш' => 'sh', 'щ' => 'sch', 'Щ' => 'sch',
			'ъ' => '', 'Ъ' => '', 'ы' => 'y', 'Ы' => 'y',
			'ь' => '', 'Ь' => '', 'э' => 'e', 'Э' => 'e',
			'ю' => 'ju', 'Ю' => 'ju', 'я' => 'ja', 'Я' => 'ja',
			'і'=>'i', 'ї'=>'ji'
		];

		$string = strtr($string, $lang_tr);
		$string = preg_replace("/[^0-9a-z-_ ]/i", "", $string);
		$string = str_replace(" ", "-", $string);
		$string = str_replace("----", "-", $string);
		$string = str_replace("---", "-", $string);
		$string = str_replace("--", "-", $string);
		$string = trim($string);
		$string = trim($string, '-');

		return $string;
	}
}
