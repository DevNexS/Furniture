<?php
class ControllerProductProduct extends Controller {
	private $error = array();

	public function index() {

			$data['oct_remarket_data'] = $oct_remarket_data = $this->config->get('theme_oct_remarket_data');

			$data['oct_popup_found_cheaper_status'] = $this->config->get('oct_popup_found_cheaper_status');

			if (isset($oct_remarket_data['product_js_button']) && !empty($oct_remarket_data['product_js_button'])) {
				$data['product_js_button'] = html_entity_decode($oct_remarket_data['product_js_button'], ENT_QUOTES, 'UTF-8');
			}

			if (isset($oct_remarket_data['product_dop_tab']) && !empty($oct_remarket_data['product_dop_tab'])) {
				$data['dop_tab'] = [
					'title' => isset($oct_remarket_data['product_dop_tab_title'][(int)$this->config->get('config_language_id')]) ? html_entity_decode($oct_remarket_data['product_dop_tab_title'][(int)$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8') : '',
					'text' => isset($oct_remarket_data['product_dop_tab_text'][(int)$this->config->get('config_language_id')]) ? html_entity_decode($oct_remarket_data['product_dop_tab_text'][(int)$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8') : '',
				];
			}

			if ((isset($oct_remarket_data['product_advantage']) && $oct_remarket_data['product_advantage'] == 'on') && (isset($oct_remarket_data['product_advantages']) && !empty($oct_remarket_data['product_advantages']))) {
				foreach ($oct_remarket_data['product_advantages'] as $product_advantage) {
					if (isset($product_advantage[(int)$this->config->get('config_language_id')]['title']) && !empty($product_advantage[(int)$this->config->get('config_language_id')]['title'])) {
						if (isset($product_advantage[(int)$this->config->get('config_language_id')]['link'])) {
							if ($product_advantage[(int)$this->config->get('config_language_id')]['link'] == "#" || empty($product_advantage[(int)$this->config->get('config_language_id')]['link'])) {
								$link = "javascript:;";
							} else {
								$link = $product_advantage[(int)$this->config->get('config_language_id')]['link'];
							}
						} else {
							$link = "javascript:;";
						}

						$data['oct_product_advantages'][] = [
							'information_id' => isset($product_advantage['information_id']) && !empty($product_advantage['information_id']) ? (int)$product_advantage['information_id'] : 0,
							'popup' => (isset($product_advantage['popup']) && !empty($product_advantage['popup'])) && (isset($product_advantage['information_id']) && !empty($product_advantage['information_id'])) && (isset($product_advantage['information_id']) && !empty($product_advantage['information_id'])) ? 1 : 0,
							'icone' => strip_tags(html_entity_decode($product_advantage['icone'], ENT_QUOTES, 'UTF-8')),
							'title' => strip_tags(html_entity_decode($product_advantage[(int)$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8')),
							'text' => isset($product_advantage[(int)$this->config->get('config_language_id')]['text']) ? strip_tags(html_entity_decode($product_advantage[(int)$this->config->get('config_language_id')]['text'], ENT_QUOTES, 'UTF-8')) : '',
							'link' => $link,
						];
					}
				}
			}

			$data['out_of_stock'] = false;
			$oct_add_datetimepicker = false;
			

			if ($this->registry->has('oct_mobiledetect')) {
		        if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet()) {
		            $data['oct_isMobile'] = $this->oct_mobiledetect->isMobile();
		        }

		        if ($this->oct_mobiledetect->isTablet()) {
		            $data['oct_isTablet'] = $this->oct_mobiledetect->isTablet();
		        }
		    }
			

            $data['oct_lazyload'] = false;

            $this->load->model('tool/image');

            $data['oct_lazy_image'] = $this->model_tool_image->resize($this->config->get('theme_oct_remarket_lazyload_image') ? $this->config->get('theme_oct_remarket_lazyload_image') : 'catalog/remarket/lazy-image.svg', 30, 30);

			if ($this->registry->has('oct_mobiledetect')) {
		        if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet() && $this->config->get('theme_oct_remarket_lazyload_mobile')) {
		            $data['oct_lazyload'] = true;
		        } elseif ($this->oct_mobiledetect->isTablet() && $this->config->get('theme_oct_remarket_lazyload_tablet')) {
                    $data['oct_lazyload'] = true;
                } elseif ($this->config->get('theme_oct_remarket_lazyload_desktop')) {
                    $data['oct_lazyload'] = true;
                }
		    } elseif ($this->config->get('theme_oct_remarket_lazyload_desktop')) {
                $data['oct_lazyload'] = true;
            }
			
		$this->load->language('product/product');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$this->load->model('catalog/category');

		if (isset($this->request->get['path'])) {
			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path)
					);
				}
			}

			// Set the last category breadcrumb
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
				$url = '';

				if (isset($this->request->get['sort'])) {
					$url .= '&sort=' . $this->request->get['sort'];
				}

				if (isset($this->request->get['order'])) {
					$url .= '&order=' . $this->request->get['order'];
				}

				if (isset($this->request->get['page'])) {
					$url .= '&page=' . $this->request->get['page'];
				}

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$data['breadcrumbs'][] = array(
					'text' => $category_info['name'],
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
				);
			}
		}

		$this->load->model('catalog/manufacturer');

		if (isset($this->request->get['manufacturer_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_brand'),
				'href' => $this->url->link('product/manufacturer')
			);

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

			if ($manufacturer_info) {
				$data['breadcrumbs'][] = array(
					'text' => $manufacturer_info['name'],
					'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
				);
			}
		}

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_search'),
				'href' => $this->url->link('product/search', $url)
			);
		}

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		//check product page open from cateory page

			if (!isset($oct_remarket_data['category_subcat_products'])) {
			
		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
						
			if(empty($this->model_catalog_product->checkProductCategory($product_id, $parts))) {
				$product_info = array();
			}
		}


			}
			
		//check product page open from manufacturer page
		if (isset($this->request->get['manufacturer_id']) && !empty($product_info)) {
			if($product_info['manufacturer_id'] !=  $this->request->get['manufacturer_id']) {
				$product_info = array();
			}
		}

		if ($product_info) {

			$data['oct_product_stickers'] = [];
			$data['you_save'] = $product_info['you_save'];
			$data['you_save_price'] = $this->currency->format($this->tax->calculate($product_info['you_save_price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

			if ($this->config->get('oct_stickers_status')) {
				$oct_stickers = $this->config->get('oct_stickers_data');

				$data['oct_sticker_you_save'] = false;

				if ($oct_stickers) {
					$data['oct_sticker_you_save'] = isset($oct_stickers['stickers']['special']['persent']) ? true : false;
				}

				$this->load->model('octemplates/stickers/oct_stickers');

				$oct_stickers_data = $this->model_octemplates_stickers_oct_stickers->getOCTStickers($product_info);

				if ($oct_stickers_data) {
					$data['oct_product_stickers'] = $oct_stickers_data['stickers'];
				}
			}
			
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);

			$this->document->setTitle($product_info['meta_title']);
			$this->document->setDescription($product_info['meta_description']);
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');
			
			//$this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
			
			
			//$this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');
			
			
			//$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
			
			
			//$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
			
			
			//$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
			
			
			//$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');
			

			$data['heading_title'] = $product_info['name'];


			if ($this->config->get('theme_oct_remarket_seo_title_status')) {
				$oct_seo_title_data = $this->config->get('theme_oct_remarket_seo_title_data');

				$oct_price = ($this->customer->isLogged() || !$this->config->get('config_customer_price')) ? $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) : '';
				$oct_special = ((float)$product_info['special']) ? $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']) : '';

				if ((isset($oct_seo_title_data['product']['title_status']) && $oct_seo_title_data['product']['title_status']) && (isset($oct_seo_title_data['product']['title'][$this->config->get('config_language_id')]) && !empty($oct_seo_title_data['product']['title'][$this->config->get('config_language_id')]))) {
					$oct_address = (isset($oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_address'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) : '';
					$oct_phone = (isset($oct_remarket_data['contact_telephone']) && !empty($oct_remarket_data['contact_telephone'])) ? str_replace(PHP_EOL, ', ',  $oct_remarket_data['contact_telephone']) : '';
					$oct_time = (isset($oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_open'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) : '';

					$oct_replace = [
						'[name]' => strip_tags(html_entity_decode($product_info['name'], ENT_QUOTES, 'UTF-8')),
						'[price]' => $oct_price ? $oct_special ? strip_tags($oct_special) : strip_tags($oct_price) : '',
						'[model]' => !empty($product_info['model']) ? strip_tags(html_entity_decode($product_info['model'], ENT_QUOTES, 'UTF-8')) : '',
						'[sku]' => !empty($product_info['sku']) ? strip_tags(html_entity_decode($product_info['sku'], ENT_QUOTES, 'UTF-8')) : '',
						'[category]' => (isset($category_info) && $category_info) ? strip_tags(html_entity_decode($category_info['name'], ENT_QUOTES, 'UTF-8')) : '',
						'[manufacturer]' => !empty($product_info['manufacturer']) ? strip_tags(html_entity_decode($product_info['manufacturer'], ENT_QUOTES, 'UTF-8')) : '',
						'[address]' => $oct_address,
						'[phone]' => $oct_phone,
						'[time]' => $oct_time,
						'[store]' => $this->config->get('config_name')
					];

					$oct_seo_title = str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_seo_title_data['product']['title'][$this->config->get('config_language_id')]);

					if ((isset($oct_seo_title_data['product']['title_empty']) && $oct_seo_title_data['product']['title_empty']) && empty($product_info['meta_title'])) {
						$og_seo_title = true;

						$this->document->setTitle(htmlspecialchars($oct_seo_title));
					} elseif (!isset($oct_seo_title_data['product']['title_empty'])) {
						$og_seo_title = true;

						$this->document->setTitle(htmlspecialchars($oct_seo_title));
					}
				}

				if ((isset($oct_seo_title_data['product']['description_status']) && $oct_seo_title_data['product']['description_status']) && (isset($oct_seo_title_data['product']['description'][$this->config->get('config_language_id')]) && !empty($oct_seo_title_data['product']['description'][$this->config->get('config_language_id')]))) {
					$oct_address = (isset($oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_address'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) : '';
					$oct_phone = (isset($oct_remarket_data['contact_telephone']) && !empty($oct_remarket_data['contact_telephone'])) ? str_replace(PHP_EOL, ', ',  $oct_remarket_data['contact_telephone']) : '';
					$oct_time = (isset($oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_open'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) : '';

					$oct_replace = [
						'[name]' => strip_tags(html_entity_decode($product_info['name'], ENT_QUOTES, 'UTF-8')),
						'[price]' => $oct_price ? $oct_special ? strip_tags($oct_special) : strip_tags($oct_price) : '',
						'[model]' => !empty($product_info['model']) ? strip_tags(html_entity_decode($product_info['model'], ENT_QUOTES, 'UTF-8')) : '',
						'[sku]' => !empty($product_info['sku']) ? strip_tags(html_entity_decode($product_info['sku'], ENT_QUOTES, 'UTF-8')) : '',
						'[category]' => (isset($category_info) && $category_info) ? strip_tags(html_entity_decode($category_info['name'], ENT_QUOTES, 'UTF-8')) : '',
						'[manufacturer]' => !empty($product_info['manufacturer']) ? strip_tags(html_entity_decode($product_info['manufacturer'], ENT_QUOTES, 'UTF-8')) : '',
						'[address]' => $oct_address,
						'[phone]' => $oct_phone,
						'[time]' => $oct_time,
						'[store]' => $this->config->get('config_name')
					];

					$oct_seo_description = str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_seo_title_data['product']['description'][$this->config->get('config_language_id')]);

					if ((isset($oct_seo_title_data['product']['description_empty']) && $oct_seo_title_data['product']['description_empty']) && empty($product_info['meta_description'])) {
						$og_seo_description = true;
						$this->document->setDescription(htmlspecialchars($oct_seo_description));
					} elseif (!isset($oct_seo_title_data['product']['description_empty'])) {
						$og_seo_description = true;
						$this->document->setDescription(htmlspecialchars($oct_seo_description));
					}
				}
			}
			
			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');


			$oct_cat_info = [];
			$oct_product_categories_name = '';
			$data['oct_reviews_all'] = [];
			$data['oct_price_currency'] = '';
			$data['oct_description_microdata'] = '';

			if (isset($oct_remarket_data['micro']) && $oct_remarket_data['micro'] = 'on') {
				$data['oct_micro_heading_title'] = htmlspecialchars($data['heading_title']);

				$oct_product_categories = $this->model_catalog_product->getCategories($product_id);

				foreach ($oct_product_categories as $product_category) {
					$cat_info = $this->model_catalog_category->getCategory($product_category['category_id']);

					if ($cat_info) {
						$oct_cat_info[] = $cat_info;
					}
				}

				$i = 1;

				foreach ($oct_cat_info as $cat_info_name) {
					$oct_product_categories_name .= $cat_info_name['name'];

					if ($i < count($oct_cat_info)){
						$oct_product_categories_name .= ", ";
					}

					$i++;
				}

				$data['oct_product_categories'] = $oct_product_categories_name;

				// Get the currency
				$oct_currency = $data['oct_price_currency'] = $this->session->data['currency'];

				// Get the number of decimal places from the configuration
				$oct_decimal_places = (int)$this->config->get('config_decimal_place');

				$data['oct_special_microdata'] = false;
				$data['oct_price_microdata'] = false;

				// Get the product price or special
				if (!empty($product_info['special'])) {
					$data['oct_special_microdata'] = (float)rtrim(preg_replace( '/[^.\d]/', '', $this->currency->format($product_info['special'], $oct_currency, '', true, $oct_decimal_places)));
				} else {
					$data['oct_price_microdata'] = (float)rtrim(preg_replace( '/[^.\d]/', '', $this->currency->format($product_info['price'], $oct_currency, '', true, $oct_decimal_places)));
				}

				$data['oct_description_microdata'] = htmlspecialchars(strip_tags(str_replace("\r", "", str_replace("\n", "", str_replace("\\", "/", str_replace("\"", "", html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')))))));

				$oct_reviews_all = $this->model_catalog_review->getReviewsByProductId($product_id);

				foreach ($oct_reviews_all as $result) {
					$data['oct_reviews_all'][] = [
						'author'     => htmlspecialchars($result['author']),
						'text'       => htmlspecialchars(strip_tags(str_replace("\r", "", str_replace("\n", "", str_replace("\\", "/", str_replace("\"", "", $result['text'])))))),
						'rating'     => (int)$result['rating'],
						'date_added' => date($this->language->get('Y-m-d'), strtotime($result['date_added']))
					];
				}
			}
			
			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['product_id'] = (int)$this->request->get['product_id'];
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];
			
			if (isset($oct_remarket_data['preload_images']) && $oct_remarket_data['preload_images'] && $product_info['image'] && is_file(DIR_IMAGE . $product_info['image'])) {
				$this->document->setOCTPreload($this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height')));
			}

			if (isset($oct_remarket_data['product_faq']) && $oct_remarket_data['product_faq']) {
				$data['oct_product_faq'] = $this->load->controller('octemplates/faq/oct_product_faq', ['from_controller' => true]);

				$data['tab_oct_faq'] = sprintf($this->language->get('tab_oct_faq'), $this->model_octemplates_faq_oct_product_faq->getTotalFaqsByProductId((int)$this->request->get['product_id']));
			}

			$product_description = str_replace("<img", "<img class='img-fluid'", html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'));

			$data['oct_is_youtube'] = false;

			$oct_reg_youtube = '/<iframe[^<]+src="[^<]+www.youtube.com\/embed\/([-_a-z0-9]{11})[^<]+<\/iframe>/is';

			if (preg_match($oct_reg_youtube, $product_description)) {
				$product_description = preg_replace_callback(
					$oct_reg_youtube,
					function ($description) {
						if (isset($description[1]) && !empty($description[1])) {
							$data['youtube_link'] = $description[1];

							return $this->load->view('octemplates/widgets/oct_youtube', $data);
						} else {
							return;
						}
					},
					$product_description
				);

				$data['oct_is_youtube'] = true;
			}

			$data['description'] = $product_description;

			if (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')) {
				$data['max_quantity'] = $product_info['quantity'];
			}

			if (isset($oct_remarket_data['product_timer']) && !empty($oct_remarket_data['product_timer'])) {
				$this->load->model('octemplates/timer/special_date');
				$product_info_special = $this->model_octemplates_timer_special_date->getProductSpecialDates($product_info['product_id']);

				if ($product_info_special && $product_info_special['date_end'] != '0000-00-00') {
					$data['product_timer'] = true;
					$data['special_date_end'] = $product_info_special['date_end'];
				}
			}

			if (isset($oct_remarket_data['product_blog_related']) && $oct_remarket_data['product_blog_related']) {
				$this->load->model('octemplates/blog/oct_blogarticle');
				$oct_blogsettings_data = $this->config->get('oct_blogsettings_data');
				$articles_results = []; 
				$articles_results = $this->model_octemplates_blog_oct_blogarticle->getArticleRelatedProductPage($product_info['product_id']);

				if (isset($articles_results) && $articles_results != 0) {

					foreach ($articles_results as $result) {
						
						if ($result['image']) {
							$image = $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['dop_article_width'], $oct_blogsettings_data['dop_article_height']);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', $oct_blogsettings_data['dop_article_width'], $oct_blogsettings_data['dop_article_height']);
						}

						$description = !empty(trim(strip_tags($result['shot_description']))) ? $result['shot_description'] : $result['description'];

						$data['oct_related_articles'][] = [
							'blogarticle_id'		=> $result['blogarticle_id'],
							'thumb'					=> $image,
							'width'					=> $oct_blogsettings_data['dop_article_width'],
							'height'				=> $oct_blogsettings_data['dop_article_height'],
							'name'					=> $result['name'],
							'description'			=> utf8_substr(trim(strip_tags(html_entity_decode($description, ENT_QUOTES, 'UTF-8'))), 0, $oct_blogsettings_data['description_length']) . '..',
							'date_added'			=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
							'href'			        => $this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $result['blogarticle_id'])
						];
						
					}
				
				}

			}
			


	        $data['oct_product_extra_tabs'] = [];

	        if ($this->config->get('oct_product_tabs_status')) {
				$this->load->model('octemplates/module/oct_product_tabs');

				$oct_product_extra_tabs = $this->model_octemplates_module_oct_product_tabs->getProductTabs($product_id);

				if ($oct_product_extra_tabs) {
					foreach ($oct_product_extra_tabs as $extra_tab) {
						$extra_text = str_replace("<img", "<img class='img-fluid'", html_entity_decode($extra_tab['text'], ENT_QUOTES, 'UTF-8'));

						if (preg_match($oct_reg_youtube, $extra_text)) {
							$extra_text = preg_replace_callback(
								$oct_reg_youtube,
								function ($description) {
									if (isset($description[1]) && !empty($description[1])) {
										$data['youtube_link'] = $description[1];

										return $this->load->view('octemplates/widgets/oct_youtube', $data);
									} else {
										return;
									}
								},
								$extra_text
							);

							$data['oct_is_youtube'] = true;
						}

						$data['oct_product_extra_tabs'][] = [
							'title' => $extra_tab['title'],
							'text'  => $extra_text
						];
					}
				}
	        }
			
			
			$data['text_oct_popup_found_cheaper'] = $this->language->get('oct_product_cheaper');

			if ($product_info['quantity'] <= 0) {
				$data['out_of_stock'] = true;
			
				$data['stock'] = $product_info['stock_status'];
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];
			} else {
				$data['stock'] = $this->language->get('text_instock');
			}

			$this->load->model('tool/image');

			if ($product_info['image']) {
				$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				
			$data['popup'] = $this->model_tool_image->resize('no-thumb.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			
			}

			if ($product_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			} else {
				
			$data['thumb'] = $this->model_tool_image->resize('no-thumb.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			
			}


			$data['popup_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width');
			$data['popup_height'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height');
			$data['thumb_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width');
			$data['thumb_height'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height');
			
			$data['images'] = array();

			$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

			if ($data['popup'] && $data['thumb'] && !empty($results)) {
				$data['images'][0] = array(
					'popup' => $data['thumb'],
					'popup_fancy' => $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
					'thumb' => $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height')),
					'images_width' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'),
					'images_height' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'),
				);
			}
			

			foreach ($results as $result) {
				$data['images'][] = array(
					
			'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height')),
			'popup_fancy' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
			'images_width' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'),
			'images_height' => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'),
			
					'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
				);
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;
				$tax_price = (float)$product_info['price'];
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}



	        $data['oct_product_extra_tabs'] = [];

	        if ($this->config->get('oct_product_tabs_status')) {
				$this->load->model('octemplates/module/oct_product_tabs');

				$oct_product_extra_tabs = $this->model_octemplates_module_oct_product_tabs->getProductTabs($product_id);

				if ($oct_product_extra_tabs) {
					foreach ($oct_product_extra_tabs as $extra_tab) {
						$extra_text = str_replace("<img", "<img class='img-fluid'", html_entity_decode($extra_tab['text'], ENT_QUOTES, 'UTF-8'));

						if (preg_match($oct_reg_youtube, $extra_text)) {
							$extra_text = preg_replace_callback(
								$oct_reg_youtube,
								function ($description) {
									if (isset($description[1]) && !empty($description[1])) {
										$data['youtube_link'] = $description[1];

										return $this->load->view('octemplates/widgets/oct_youtube', $data);
									} else {
										return;
									}
								},
								$extra_text
							);

							$data['oct_is_youtube'] = true;
						}

						$data['oct_product_extra_tabs'][] = [
							'title' => $extra_tab['title'],
							'text'  => $extra_text
						];
					}
				}
	        }
			
			
			$data['text_oct_popup_found_cheaper'] = $this->language->get('oct_product_cheaper');

			if ($product_info['quantity'] <= 0) {
				$data['out_of_stock'] = true;
			
				$data['is_stock'] = $product_info['stock_status'];
			} else {
				$data['is_stock'] = false;
			}

			$data['can_buy'] = true;

			if ($product_info['quantity'] <= 0 && !$this->config->get('config_stock_checkout')) {
				$data['can_buy'] = false;
			} elseif ($product_info['quantity'] <= 0 && $this->config->get('config_stock_checkout')) {
				$data['can_buy'] = true;
			}
			
			$discounts = $this->model_catalog_product->getProductDiscounts($this->request->get['product_id']);

			$data['discounts'] = array();

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}

			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			$data['oct_reviews_list'] = $data['review_status'] ? $this->review() : '';
			

			if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);


			foreach ($data['options'] as $option) {
				if ($option['type'] == 'date' || $option['type'] == 'time' || $option['type'] == 'datetime') {
					$data['oct_datetimepicker'] = $oct_add_datetimepicker = true;

					break;
				}
			}

			if ($oct_add_datetimepicker) {
				$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
				$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
				$this->document->addScript('catalog/view/theme/oct_remarket/js/bootstrap-datetimepicker.min.js');
				$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');
			}

			$this->document->addScript('catalog/view/theme/oct_remarket/js/slick/slick.min.js');
			$this->document->addStyle('catalog/view/theme/oct_remarket/js/slick/slick.min.css');

			if (!isset($oct_remarket_data['product_gallery'])) {
	            $this->document->addScript('catalog/view/theme/oct_remarket/js/fancybox/jquery.fancybox.min.js');
	            $this->document->addStyle('catalog/view/theme/oct_remarket/js/fancybox/jquery.fancybox.min.css');
        	}

			if (isset($oct_remarket_data['product_zoom']) && $oct_remarket_data['product_zoom']) {
	            $this->document->addScript('catalog/view/theme/oct_remarket/js/zoom/jquery.zoom.js');
        	}

        	$data['sku'] = $product_info['sku'];
			$data['upc'] = $product_info['upc'];
			$data['ean'] = $product_info['ean'];
			$data['mpn'] = $product_info['mpn'];

			$data['total_reviews'] = (int)$product_info['reviews'];

			$oct_review = $this->model_catalog_review->getOCTReviewsByProductId($product_id);

			$data['oct_rating'] = isset($oct_review['sum']) ? round((float)$oct_review['sum'] / $data['total_reviews'], 1) : 0;

			$data['oct_raiting_stats'][5] = [
				'raiting' => isset($oct_review['rating'][5]) ? round(count($oct_review['rating'][5])/$data['total_reviews']*100) : 0,
				'sum' => isset($oct_review['rating'][5]) ? (int)count($oct_review['rating'][5]) : 0
			];

			$data['oct_raiting_stats'][4] = [
				'raiting' => isset($oct_review['rating'][4]) ? round(count($oct_review['rating'][4])/$data['total_reviews']*100) : 0,
				'sum' => isset($oct_review['rating'][4]) ? (int)count($oct_review['rating'][4]) : 0
			];

			$data['oct_raiting_stats'][3] = [
				'raiting' => isset($oct_review['rating'][3]) ? round(count($oct_review['rating'][3])/$data['total_reviews']*100) : 0,
				'sum' => isset($oct_review['rating'][3]) ? (int)count($oct_review['rating'][3]) : 0
			];

			$data['oct_raiting_stats'][2] = [
				'raiting' => isset($oct_review['rating'][2]) ? round(count($oct_review['rating'][2])/$data['total_reviews']*100) : 0,
				'sum' => isset($oct_review['rating'][2]) ? (int)count($oct_review['rating'][2]) : 0
			];

			$data['oct_raiting_stats'][1] = [
				'raiting' => isset($oct_review['rating'][1]) ? round(count($oct_review['rating'][1])/$data['total_reviews']*100) : 0,
				'sum' => isset($oct_review['rating'][1]) ? (int)count($oct_review['rating'][1]) : 0
			];
			
			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);

			$limit_attr  = $this->config->get('theme_oct_remarket_data_pr_atr_limit') ? $this->config->get('theme_oct_remarket_data_pr_atr_limit') : 5;

			$data['oct_attributs'] = (isset($oct_remarket_data['product_atributes']) && $oct_remarket_data['product_atributes']) ? $this->model_catalog_product->getOctProductAttributes($this->request->get['product_id'], $limit_attr) : '';
			


			if ($this->config->get('config_checkout_guest') && $this->config->get('oct_popup_purchase_status')) {
				$data['oct_popup_purchase_status'] = $this->config->get('oct_popup_purchase_status');
			}

			if ($this->config->get('config_checkout_guest') && $this->config->get('oct_popup_purchase_byoneclick_status')) {
				$oct_byoneclick_data = $this->config->get('oct_popup_purchase_byoneclick_data');
				$oct_data['oct_byoneclick_status'] = isset($oct_byoneclick_data['product']) ? 1 : 0;
				$oct_data['oct_byoneclick_mask'] = $oct_byoneclick_data['mask'];
				$oct_data['oct_byoneclick_product_id'] = $this->request->get['product_id'];
				$oct_data['oct_byoneclick_page'] = '_product';
				$data['oct_byoneclick'] = $this->load->controller('octemplates/module/oct_popup_purchase/byoneclick', $oct_data);
			}
			
			$data['products'] = array();

			$data['oct_popup_view_status'] = $this->config->get('oct_popup_view_status');
			

			$results = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);

			$oct_product_stickers = [];

			if ($this->config->get('oct_stickers_status')) {
				$oct_stickers = $this->config->get('oct_stickers_data');

				$data['oct_sticker_you_save'] = false;

				if ($oct_stickers) {
					$data['oct_sticker_you_save'] = isset($oct_stickers['stickers']['special']['persent']) ? true : false;
				}

				$this->load->model('octemplates/stickers/oct_stickers');
			}
			

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}


			if ($result['quantity'] <= 0) {
				$stock = $result['stock_status'];
			} else {
				$stock = false;
			}

			$can_buy = true;

			if ($result['quantity'] <= 0 && !$this->config->get('config_stock_checkout')) {
				$can_buy = false;
			} elseif ($result['quantity'] <= 0 && $this->config->get('config_stock_checkout')) {
				$can_buy = true;
			}

			$oct_grayscale = ($this->config->get('theme_oct_remarket_no_quantity_grayscale') && !$can_buy) ? true : false;
			

			if (isset($oct_stickers) && $oct_stickers) {
				$oct_stickers_data = $this->model_octemplates_stickers_oct_stickers->getOCTStickers($result);

				$oct_product_stickers = [];

				if (isset($oct_stickers_data) && $oct_stickers_data) {
					$oct_product_stickers = $oct_stickers_data['stickers'];
				}
			}
			
				$data['products'][] = array(
					'product_id'  => $result['product_id'],

			'oct_stickers'  => $oct_product_stickers,
			'you_save'	  	=> $result['you_save'],
			
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,

			'stock'     => $stock,
			'can_buy'   => $can_buy,
			'oct_grayscale'  => $oct_grayscale,
			
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,

			'reviews'	  => $result['reviews'],
			'oct_model'	  => $this->config->get('theme_oct_remarket_data_model') ? $result['model'] : '',
			'quantity'	  => $result['quantity'] <= 0 ? true : false,
			'width'		  => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'),
			'height'	  => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'),
			
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}


            $data['products'] = $this->load->controller('octemplates/module/oct_products_modules', $data);
			
			$data['tags'] = array();

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = array(
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'tag=' . trim($tag))
					);
				}
			}

			$data['recurrings'] = $this->model_catalog_product->getProfiles($this->request->get['product_id']);


            if (isset($oct_remarket_data['open_graph']) && $oct_remarket_data['open_graph']) {
                $site_link = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;

				$config_logo = file_exists(DIR_IMAGE . $this->config->get('config_logo')) ? $this->config->get('config_logo') : 'catalog/opencart-logo.png';

                $oct_ogimage = $product_info['image'] ? $product_info['image'] : $config_logo;
                $product_image = $site_link . 'image/' . $oct_ogimage;

				$image_info = getimagesize(DIR_IMAGE . $oct_ogimage);

				$image_width  = $image_info[0];
				$image_height = $image_info[1];
				$mime_type = isset($image_info['mime']) ? $image_info['mime'] : '';

                $this->document->setOCTOpenGraph('og:title', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", (isset($oct_seo_title) && $oct_seo_title) ? $oct_seo_title : $product_info['meta_title'])))))));
                $this->document->setOCTOpenGraph('og:description', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", (isset($oct_seo_description) && $oct_seo_description && empty($product_info['meta_description'])) ? $oct_seo_description : $product_info['meta_description'])))))));
                $this->document->setOCTOpenGraph('og:site_name', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $this->config->get('config_name'))))))));
                $this->document->setOCTOpenGraph('og:url', $this->url->link('product/product', 'product_id=' . $product_info['product_id']));
                $this->document->setOCTOpenGraph('og:image', str_replace(" ", "%20", $product_image));

				if (isset($mime_type) && $mime_type) {
                	$this->document->setOCTOpenGraph('og:image:type', $mime_type);
				}

				if (isset($image_width) && $image_width) {
                	$this->document->setOCTOpenGraph('og:image:width', $image_width);
				}

				if (isset($image_height) && $image_height) {
					$this->document->setOCTOpenGraph('og:image:height', $image_height);
				}

                $this->document->setOCTOpenGraph('og:image:alt', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $data['heading_title'])))))));
                $this->document->setOCTOpenGraph('og:type', 'product');
            }
			
			$this->model_catalog_product->updateViewed($this->request->get['product_id']);

            if(isset($this->request->get['product_id']) && $this->config->get('analytics_oct_analytics_yandex_ecommerce')) {
                $data['oct_analytics_yandex_ecommerce'] = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
                $data['oct_analytics_yandex_container'] = $this->config->get('analytics_oct_analytics_yandex_container');

                $data['oct_analytics_yandex_product_name'] = $product_info['name'];
                $data['oct_analytics_yandex_product_special'] = str_replace(' ','', $data['special']);
                $data['oct_analytics_yandex_product_price'] = str_replace(' ','', $data['price']);
                $data['oct_analytics_yandex_product_category'] = (isset($category_info) && $category_info) ? $category_info['name'] : "";
            }
            
			
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			

			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');


	        $oct_404_page_status = $this->config->get('oct_404_page_status');

	        if ($oct_404_page_status) {
		        $oct_404_page_data = $this->config->get('oct_404_page_data');

	            if (isset($oct_404_page_data['module_text'][(int)$this->config->get('config_language_id')]['title']) && !empty($oct_404_page_data['module_text'][(int)$this->config->get('config_language_id')]['title'])) {
	                $data['heading_title'] = $oct_404_page_data['module_text'][(int)$this->config->get('config_language_id')]['title'];
	                $this->document->setTitle($data['heading_title']);
	            }

				$data['oct_404_image'] = '';

	            if (isset($oct_404_page_data['image']) && !empty($oct_404_page_data['image'])) {
	                if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
	        			$data['oct_404_image'] = $this->config->get('config_ssl') . 'image/' . $oct_404_page_data['image'];
	        		} else {
	        			$data['oct_404_image'] = $this->config->get('config_url') . 'image/' . $oct_404_page_data['image'];
	        		}
	            }

	            if (isset($oct_404_page_data['module_text'][(int)$this->config->get('config_language_id')]['text']) && !empty($oct_404_page_data['module_text'][(int)$this->config->get('config_language_id')]['text'])) {
	            	$data['text_error'] = html_entity_decode($oct_404_page_data['module_text'][(int)$this->config->get('config_language_id')]['text'], ENT_QUOTES, 'UTF-8');
				}
	        }
			
			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function review() {

			if (isset($this->request->post['product_id']) && !empty($this->request->post['product_id'])) {
				$this->request->get['product_id'] = $this->request->post['product_id'];
			}
			
		$this->load->language('product/product');

		$this->load->model('catalog/review');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);

		$results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'author'     => $result['author'],

			'reply'     => $result['reply'],
			
				'text'       => nl2br($result['text']),
				'rating'     => (int)$result['rating'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		
			if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
				if (isset($this->request->post['product_id']) && !empty($this->request->post['product_id'])) {
					return $this->load->view('product/review', $data);
				} else {
					$this->response->setOutput($this->load->view('product/review', $data));
				}
			} else {
				return $this->load->view('product/review', $data);
			}
			
	}

	public function write() {
		$this->load->language('product/product');

		$json = array();

		if (isset($this->request->get['product_id']) && $this->request->get['product_id']) {
			if ($this->request->server['REQUEST_METHOD'] == 'POST') {
				if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
					$json['error']['name'] = $this->language->get('error_name');
				}

				if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
					$json['error']['text'] = $this->language->get('error_text');
				}
			
				if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
					$json['error']['rating'] = $this->language->get('error_rating');
				}

				// Captcha
				if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
					$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

					if ($captcha) {
						$json['error']['captcha'] = $captcha;
					}
				}

				if (!isset($json['error'])) {
					$this->load->model('catalog/review');

					$this->model_catalog_review->addReview($this->request->get['product_id'], $this->request->post);

					$json['success'] = $this->language->get('text_success');
				}
			}
		} else {
			$json['error'] = $this->language->get('error_product');
		} 

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getRecurringDescription() {
		$this->load->language('product/product');
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['recurring_id'])) {
			$recurring_id = $this->request->post['recurring_id'];
		} else {
			$recurring_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);
		
		$recurring_info = $this->model_catalog_product->getProfile($product_id, $recurring_id);

		$json = array();

		if ($product_info && $recurring_info) {
			if (!$json) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($recurring_info['trial_status'] == 1) {
					$price = $this->currency->format($this->tax->calculate($recurring_info['trial_price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_text = sprintf($this->language->get('text_trial_description'), $price, $recurring_info['trial_cycle'], $frequencies[$recurring_info['trial_frequency']], $recurring_info['trial_duration']) . ' ';
				} else {
					$trial_text = '';
				}

				$price = $this->currency->format($this->tax->calculate($recurring_info['price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				if ($recurring_info['duration']) {
					$text = $trial_text . sprintf($this->language->get('text_payment_description'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				} else {
					$text = $trial_text . sprintf($this->language->get('text_payment_cancel'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				}

				$json['success'] = $text;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
