<?php
class ControllerProductManufacturer extends Controller {
	public function index() {

			$data['oct_remarket_data'] = $oct_remarket_data = $this->config->get('theme_oct_remarket_data');

			if (isset($oct_remarket_data['category_view_sort_oder']) && $oct_remarket_data['category_view_sort_oder']) {
				$oct_remarket_sort_data = $this->config->get('theme_oct_remarket_sort_data');

				if (isset($oct_remarket_sort_data['deff_sort']) && $oct_remarket_sort_data['deff_sort']) {
					$sort_order = explode('-', $oct_remarket_sort_data['deff_sort']);
				}
			}

			$ikey = 1;
			

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
			
		$this->load->language('product/manufacturer');

		$this->load->model('catalog/manufacturer');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_brand'),
			'href' => $this->url->link('product/manufacturer')
		);

		$data['categories'] = array();

		$results = $this->model_catalog_manufacturer->getManufacturers();

		foreach ($results as $result) {
			if (is_numeric(utf8_substr($result['name'], 0, 1))) {
				$key = '0 - 9';
			} else {
				$key = utf8_substr(utf8_strtoupper($result['name']), 0, 1);
			}

			if (!isset($data['categories'][$key])) {
				$data['categories'][$key]['name'] = $key;
			}


			if (isset($oct_remarket_data['man_logo']) && $oct_remarket_data['man_logo'] == 'on') {
				if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_height'));
				}
			} else {
				$image = false;
			}
			
			$data['categories'][$key]['manufacturer'][] = array(
				'name' => $result['name'],

			'image'		=> $image,
			'width'		=> $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_width'),
			'height'	=> $this->config->get('theme_' . $this->config->get('config_theme') . '_image_manufacturer_height'),
			
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
			);
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			

		$this->response->setOutput($this->load->view('product/manufacturer_list', $data));
	}

	public function info() {

			$data['oct_remarket_data'] = $oct_remarket_data = $this->config->get('theme_oct_remarket_data');

			if (isset($oct_remarket_data['category_view_sort_oder']) && $oct_remarket_data['category_view_sort_oder']) {
				$oct_remarket_sort_data = $this->config->get('theme_oct_remarket_sort_data');

				if (isset($oct_remarket_sort_data['deff_sort']) && $oct_remarket_sort_data['deff_sort']) {
					$sort_order = explode('-', $oct_remarket_sort_data['deff_sort']);
				}
			}

			$ikey = 1;
			

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
			
		$this->load->language('product/manufacturer');

		$this->load->model('catalog/manufacturer');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		if (isset($this->request->get['manufacturer_id'])) {
			$manufacturer_id = (int)$this->request->get['manufacturer_id'];
		} else {
			$manufacturer_id = 0;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			
			$sort = (isset($sort_order) && !empty($sort_order) && isset($sort_order[0])) ? $sort_order[0] : 'p.sort_order';
			
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			
			$order = (isset($sort_order) && !empty($sort_order) && isset($sort_order[1])) ? $sort_order[1] : 'ASC';
			
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = (int)$this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_brand'),
			'href' => $this->url->link('product/manufacturer')
		);

		$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);

		if ($manufacturer_info) {
			$this->document->setTitle($manufacturer_info['name']);

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
				'text' => $manufacturer_info['name'],
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
			);

			$data['heading_title'] = $manufacturer_info['name'];


			if ($this->config->get('theme_oct_remarket_seo_title_status')) {
				$oct_seo_title_data = $this->config->get('theme_oct_remarket_seo_title_data');

				if ((isset($oct_seo_title_data['manufacturer']['title_status']) && $oct_seo_title_data['manufacturer']['title_status']) && (isset($oct_seo_title_data['manufacturer']['title'][$this->config->get('config_language_id')]) && !empty($oct_seo_title_data['manufacturer']['title'][$this->config->get('config_language_id')]))) {
					$oct_address = (isset($oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_address'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) : '';
					$oct_phone = (isset($oct_remarket_data['contact_telephone']) && !empty($oct_remarket_data['contact_telephone'])) ? str_replace(PHP_EOL, ', ',  $oct_remarket_data['contact_telephone']) : '';
					$oct_time = (isset($oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_open'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) : '';

					$oct_replace = [
						'[name]' => strip_tags(html_entity_decode($manufacturer_info['name'], ENT_QUOTES, 'UTF-8')),
						'[address]' => $oct_address,
						'[phone]' => $oct_phone,
						'[time]' => $oct_time,
						'[store]' => $this->config->get('config_name')
					];

					$oct_seo_title = str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_seo_title_data['manufacturer']['title'][$this->config->get('config_language_id')]);

					$this->document->setTitle(htmlspecialchars($oct_seo_title));
				}

				if ((isset($oct_seo_title_data['manufacturer']['description_status']) && $oct_seo_title_data['manufacturer']['description_status']) && (isset($oct_seo_title_data['manufacturer']['description'][$this->config->get('config_language_id')]) && !empty($oct_seo_title_data['manufacturer']['description'][$this->config->get('config_language_id')]))) {
					$oct_address = (isset($oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_address'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_address'][$this->config->get('config_language_id')]) : '';
					$oct_phone = (isset($oct_remarket_data['contact_telephone']) && !empty($oct_remarket_data['contact_telephone'])) ? str_replace(PHP_EOL, ', ',  $oct_remarket_data['contact_telephone']) : '';
					$oct_time = (isset($oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) && !empty($oct_remarket_data['contact_open'][$this->config->get('config_language_id')])) ? str_replace(PHP_EOL, ', ', $oct_remarket_data['contact_open'][$this->config->get('config_language_id')]) : '';

					$oct_replace = [
						'[name]' => strip_tags(html_entity_decode($manufacturer_info['name'], ENT_QUOTES, 'UTF-8')),
						'[address]' => $oct_address,
						'[phone]' => $oct_phone,
						'[time]' => $oct_time,
						'[store]' => $this->config->get('config_name')
					];

					$oct_seo_description = str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_seo_title_data['manufacturer']['description'][$this->config->get('config_language_id')]);

					$this->document->setDescription(htmlspecialchars($oct_seo_description));
				}
			}
			
			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

			$data['compare'] = $this->url->link('product/compare');

			$data['products'] = array();

			$data['oct_popup_view_status'] = $this->config->get('oct_popup_view_status');
			

	        $oct_remarket_data_atributes = $this->config->get('theme_oct_remarket_data_atributes');
			

			$filter_data = array(
				'filter_manufacturer_id' => $manufacturer_id,
				'sort'                   => $sort,
				'order'                  => $order,
				'start'                  => ($page - 1) * $limit,
				'limit'                  => $limit
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);

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
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}


			if (isset($oct_remarket_data['preload_images']) && $oct_remarket_data['preload_images'] && $ikey <= 1) {
				$this->document->setOCTPreload($image);
			}

			$ikey++;
			
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


			$oct_atributes = false;

			if (isset($oct_remarket_data_atributes) && $oct_remarket_data_atributes) {
				$limit_attr  = $this->config->get('theme_oct_remarket_data_cat_atr_limit') ? $this->config->get('theme_oct_remarket_data_cat_atr_limit') : 5;

				$oct_atributes = $this->model_catalog_product->getOctProductAttributes(isset($product_info) ? $product_info['product_id'] : $result['product_id'], $limit_attr);
			}
			

			$result = (isset($product_info) && $product_info) ? $product_info : $result;

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

			'oct_atributes'       => $oct_atributes,
			
					'name'        => $result['name'],
					
			'description' => (isset($oct_remarket_data['category_product_desc']) && $oct_remarket_data['category_product_desc'] == 'on') ? utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..' : false,
			
					'price'       => $price,
					'special'     => $special,

			'stock'     => $stock,
			'can_buy'   => $can_buy,
			'oct_grayscale'  => $oct_grayscale,
			
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => 
			$this->config->get('config_review_status') ? $result['rating'] : false,
			'oct_model'	  => $this->config->get('theme_oct_remarket_data_model') ? $result['model'] : '',
			'reviews'	  => $result['reviews'],
			'quantity'	  => $result['quantity'] <= 0 ? true : false,
			'width'		  => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'),
			'height'	  => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'),
			
					'href'        => $this->url->link('product/product', 'manufacturer_id=' . $result['manufacturer_id'] . '&product_id=' . $result['product_id'] . $url)
				);
			}

			$url = '';

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.model&order=DESC' . $url)
			);

			if ((isset($oct_remarket_sort_data) && !empty($oct_remarket_sort_data)) && (isset($oct_remarket_sort_data['sort']) && !empty($oct_remarket_sort_data['sort']))) {
				$data['sorts'] = [];

				foreach ($oct_remarket_sort_data['sort'] as $oct_sort) {
					$sort_order = explode('-', $oct_sort);

					$sort_name = str_replace(['.','-'], ['_', '_'], $oct_sort);

					if (!$this->config->get('config_review_status') && $sort_order[0] == 'rating') {
						continue;
					}

					$data['sorts'][] = array(
						'text'  => $this->language->get('text_' . $sort_name),
						'value' => $oct_sort,
						'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=' . $sort_order[0] . '&order='. $sort_order[1] . $url)
					);
				}
			}
			

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] .  $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
			if ($page == 1) {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id']), 'canonical');
			} else {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . $page), 'canonical');
			}
			
			if ($page > 1) {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
			}

			if ($limit && ceil($product_total / $limit) > $page) {
				$this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&page=' . ($page + 1)), 'next');
			}

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			

			$this->response->setOutput($this->load->view('product/manufacturer_info', $data));
		} else {
			$url = '';

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
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
				'href' => $this->url->link('product/manufacturer/info', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

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

			$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			
			$data['footer'] = $this->load->controller('common/footer');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
