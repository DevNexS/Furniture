<?php
/**************************************************************/
/*	@copyright	OCTemplates 2015-2022.						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOctPopupView extends Controller {
    public function index() {
	    if ($this->config->get('oct_popup_view_status') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	        $this->load->model('catalog/product');
	        $this->load->language('octemplates/module/oct_popup_view');

	        $this->load->model('tool/image');

			$oct_popup_view_data = $this->config->get('oct_popup_view_data');

            $data['oct_remarket_data'] = $oct_remarket_data = $this->config->get('theme_oct_remarket_data');

			if (isset($oct_remarket_data['product_js_button']) && !empty($oct_remarket_data['product_js_button'])) {
				$data['product_js_button'] = html_entity_decode($oct_remarket_data['product_js_button'], ENT_QUOTES, 'UTF-8');
			}

			$data['description_view'] = $description_view = (isset($oct_popup_view_data['description']) && $oct_popup_view_data['description'] == 'on') ? 1 : 0;
			$data['image_view'] = $image_view = (isset($oct_popup_view_data['image']) && $oct_popup_view_data['image'] == 'on') ? 1 : 0;
			$data['additional_image_view'] = $additional_image_view = (isset($oct_popup_view_data['additional_image']) && $oct_popup_view_data['additional_image'] == 'on') ? 1 : 0;
			$data['quantity_view'] = $quantity_view = (isset($oct_popup_view_data['quantity']) && $oct_popup_view_data['quantity'] == 'on') ? 1 : 0;
			$data['specification_view'] = $specification_view = (isset($oct_popup_view_data['specification']) && $oct_popup_view_data['specification'] == 'on') ? 1 : 0;
			$data['review_view'] = $review_view = (isset($oct_popup_view_data['review']) && $oct_popup_view_data['review'] == 'on') ? 1 : 0;
			$data['wishlist_view'] = $wishlist_view = (isset($oct_popup_view_data['wishlist']) && $oct_popup_view_data['wishlist'] == 'on') ? 1 : 0;
			$data['compare_view'] = $compare_view = (isset($oct_popup_view_data['compare']) && $oct_popup_view_data['compare'] == 'on') ? 1 : 0;

	        if (isset($this->request->post['product_id']) && $this->request->post['product_id']) {
	            $product_id = (int)$this->request->post['product_id'];
	        } else {
	            $product_id = 0;
	        }

	        $product_info = $this->model_catalog_product->getProduct($product_id);
            $data['oct_popup_found_cheaper_status'] = $this->config->get('oct_popup_found_cheaper_status');

	        $data['product_id'] = (int)$product_id;

	        if ($product_info) {
                if ($this->config->get('config_checkout_guest') && $this->config->get('oct_popup_purchase_status')) {
    				$data['oct_popup_purchase_status'] = $this->config->get('oct_popup_purchase_status');
    			}

    			if ($this->config->get('config_checkout_guest') && $this->config->get('oct_popup_purchase_byoneclick_status')) {
    				$oct_byoneclick_data = $this->config->get('oct_popup_purchase_byoneclick_data');
    				$oct_data['oct_byoneclick_status'] = isset($oct_byoneclick_data['product_view']) ? 1 : 0;
    				$oct_data['oct_byoneclick_mask'] = $oct_byoneclick_data['mask'];
    				$oct_data['oct_byoneclick_product_id'] = $data['product_id'];
    				$oct_data['oct_byoneclick_page'] = '_product_view';
    				$data['oct_byoneclick'] = $this->load->controller('octemplates/module/oct_popup_purchase/byoneclick', $oct_data);
    			}
                
                $data['oct_product_stickers'] = [];
    			$data['you_save'] = $product_info['you_save'];

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

	            $data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
				$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

	            $this->load->model('catalog/review');

				$data['manufacturer'] = $product_info['manufacturer'];
				$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
				$data['model'] = $product_info['model'];
				$data['reward'] = $product_info['reward'];
				$data['points'] = $product_info['points'];
	            $data['sku'] = $product_info['sku'];

                $this->load->model('octemplates/faq/oct_product_faq');

                if ((isset($oct_remarket_data['product_faq']) && $oct_remarket_data['product_faq']) && $this->model_octemplates_faq_oct_product_faq->getTotalFaqsByProductId((int)$product_info['product_id'])) {
    				$data['oct_product_faq'] = $this->load->controller('octemplates/faq/oct_product_faq', ['from_controller' => true, 'p_id' => (int)$product_info['product_id']]);

    				$data['tab_oct_faq'] = sprintf($this->language->get('tab_oct_faq'), $this->model_octemplates_faq_oct_product_faq->getTotalFaqsByProductId((int)$product_info['product_id']));
    			}

				if ($description_view) {
		            if (isset($oct_popup_view_data['description_max']) && !empty($oct_popup_view_data['description_max'])) {
		                $data['description'] = utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'), '<table><tbody><td><tr><th><thead><img><p><ul><li><b><strong><a><i><u><br></br><span>'), 0, $oct_popup_view_data['description_max']) . '..';
		            } else {
						$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

		            }

                    $data['oct_is_youtube'] = false;

        			$oct_reg_youtube = '/<iframe[^<]+src="[^<]+www.youtube.com\/embed\/([-_a-z0-9]{11})[^<]+<\/iframe>/is';

        			if (preg_match($oct_reg_youtube, $data['description'])) {
        				$data['description'] = preg_replace_callback(
        					$oct_reg_youtube,
        					function ($description) {
        						if (isset($description[1]) && !empty($description[1])) {
        							$data['youtube_link'] = $description[1];

        							return $this->load->view('octemplates/widgets/oct_youtube', $data);
        						} else {
        							return;
        						}
        					},
        					$data['description']
        				);

        				$data['oct_is_youtube'] = true;
        			}
	            }

	            $data['out_of_stock'] = false;

	            $data['view_product_link'] = $this->url->link('product/product', 'product_id=' . $product_id);

				// Stock
				if ((!$product_info['quantity'] || ($product_info['quantity'] < 0)) && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
					if	($product_info['quantity'] < 1) {
						$data['error_stock_check'] = $this->language->get('error_no_stock');
					} else {
						$json['error_stock_check'] = sprintf($this->language->get('error_limited_stock'), $product_info['quantity']);
					}
				}

				if (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')) {
					$data['max_quantity'] = $product_info['quantity'];
				}

                $data['text_oct_popup_found_cheaper'] = $this->language->get('oct_product_cheaper');

	            if ($product_info['quantity'] <= 0) {
					$data['stock'] = $product_info['stock_status'];
					$data['out_of_stock'] = true;
				} elseif ($this->config->get('config_stock_display')) {
					$data['stock'] = $product_info['quantity'];
				} else {
					$data['stock'] = $this->language->get('text_instock');
				}

	            $data['product_name'] = $product_info['name'];

				if ($image_view) {
		            $data['image_width'] = $image_width  = (isset($oct_popup_view_data['image_width']) && !empty($oct_popup_view_data['image_width'])) ? $oct_popup_view_data['image_width'] : $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width');
		            $data['image_height'] = $image_height = (isset($oct_popup_view_data['image_height']) && !empty($oct_popup_view_data['image_height'])) ? $oct_popup_view_data['image_height'] : $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height');

		            if ($product_info['image']) {
		                $data['thumb'] = $this->model_tool_image->resize($product_info['image'], $image_width, $image_height);
		            } else {
		                $data['thumb'] = $this->model_tool_image->resize("placeholder.png", $image_width, $image_height);
		            }

			        $data['images'] = [];

					if ($additional_image_view) {
			            $results = $this->model_catalog_product->getProductImages($product_id);

			            $data['image_additional_width'] = $image_additional_width  = (isset($oct_popup_view_data['image_additional_width']) && !empty($oct_popup_view_data['image_additional_width'])) ? $oct_popup_view_data['image_additional_width'] : $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width');

			            $data['image_additional_height'] = $image_additional_height = (isset($oct_popup_view_data['image_additional_height']) && !empty($oct_popup_view_data['image_additional_height'])) ? $oct_popup_view_data['image_additional_height'] : $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height');

						if ($product_info['image'] && !empty($results)) {
				            $data['images'][0] = [
				                'popup' => $this->model_tool_image->resize($product_info['image'], $image_width, $image_height),
				                'thumb' => $this->model_tool_image->resize($product_info['image'], $image_additional_width, $image_additional_height)
				            ];
			            }

			            foreach ($results as $result) {
			                $data['images'][] = [
			                    'popup' => $this->model_tool_image->resize($result['image'], $image_width, $image_height),
			                    'thumb' => $this->model_tool_image->resize($result['image'], $image_additional_width, $image_additional_height)
			                ];
			            }
		            }
				}

	            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$data['price'] = false;
				}

				if ((float)$product_info['special']) {
					$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$data['economy'] = round((($product_info['price'] - $product_info['special']) / ($product_info['price'] + 0.01)) * 100, 0);
				} else {
					$data['special'] = false;
					$data['economy'] = false;
				}

				if ($this->config->get('config_tax')) {
					$data['tax'] = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
				} else {
					$data['tax'] = false;
				}

	            $discounts = $this->model_catalog_product->getProductDiscounts($product_id);

                if ($product_info['quantity'] <= 0) {
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

				$data['discounts'] = [];

				foreach ($discounts as $discount) {
					$data['discounts'][] = [
						'quantity' => $discount['quantity'],
						'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
					];
				}

	            $data['options'] = [];

				foreach ($this->model_catalog_product->getProductOptions($product_id) as $option) {
					$product_option_value_data = [];

					foreach ($option['product_option_value'] as $option_value) {
						if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
							if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
								$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
							} else {
								$price = false;
							}

							$product_option_value_data[] = [
								'product_option_value_id' => $option_value['product_option_value_id'],
								'option_value_id'         => $option_value['option_value_id'],
								'name'                    => $option_value['name'],
								'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
								'price'                   => $price,
								'price_prefix'            => $option_value['price_prefix']
							];
						}
					}

					$data['options'][] = [
						'product_option_id'    => $option['product_option_id'],
						'product_option_value' => $product_option_value_data,
						'option_id'            => $option['option_id'],
						'name'                 => $option['name'],
						'type'                 => $option['type'],
						'value'                => $option['value'],
						'required'             => $option['required']
					];
				}

				if ($product_info['minimum']) {
					$data['minimum'] = $product_info['minimum'];
				} else {
					$data['minimum'] = 1;
				}

				$data['review_status'] = $this->config->get('config_review_status');

				if ($review_view) {
					$data['oct_reviews_list'] = $data['review_status'] ? $this->load->controller('product/product/review') : '';

					$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

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

					$data['reviews'] = (int)$product_info['reviews'];
					$data['rating'] = (int)$product_info['rating'];

					$oct_review = $this->model_catalog_review->getOCTReviewsByProductId($product_id);

					$data['oct_rating'] = isset($oct_review['sum']) ? round((float)$oct_review['sum'] / $data['reviews'], 1) : 0;

					$data['oct_raiting_stats'][5] = [
						'raiting' => isset($oct_review['rating'][5]) ? round(count($oct_review['rating'][5])/$data['reviews']*100) : 0,
						'sum' => isset($oct_review['rating'][5]) ? (int)count($oct_review['rating'][5]) : 0
					];

					$data['oct_raiting_stats'][4] = [
						'raiting' => isset($oct_review['rating'][4]) ? round(count($oct_review['rating'][4])/$data['reviews']*100) : 0,
						'sum' => isset($oct_review['rating'][4]) ? (int)count($oct_review['rating'][4]) : 0
					];

					$data['oct_raiting_stats'][3] = [
						'raiting' => isset($oct_review['rating'][3]) ? round(count($oct_review['rating'][3])/$data['reviews']*100) : 0,
						'sum' => isset($oct_review['rating'][3]) ? (int)count($oct_review['rating'][3]) : 0
					];

					$data['oct_raiting_stats'][2] = [
						'raiting' => isset($oct_review['rating'][2]) ? round(count($oct_review['rating'][2])/$data['reviews']*100) : 0,
						'sum' => isset($oct_review['rating'][2]) ? (int)count($oct_review['rating'][2]) : 0
					];

					$data['oct_raiting_stats'][1] = [
						'raiting' => isset($oct_review['rating'][1]) ? round(count($oct_review['rating'][1])/$data['reviews']*100) : 0,
						'sum' => isset($oct_review['rating'][1]) ? (int)count($oct_review['rating'][1]) : 0
					];
				}

	            if ($specification_view) {
	            		$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($product_id);
				} else {
					$data['attribute_groups'] = [];
				}

	            $data['tags'] = [];

				if ($product_info['tag']) {
					$tags = explode(',', $product_info['tag']);

					foreach ($tags as $tag) {
						$data['tags'][] = [
							'tag'  => trim($tag),
							'href' => $this->url->link('product/search', 'tag=' . trim($tag))
						];
					}
				}

				$data['recurrings'] = $this->model_catalog_product->getProfiles($product_id);

	            $this->response->setOutput($this->load->view('octemplates/module/oct_popup_view', $data));
	        } else {
	            die();
	        }
	    }
    }
}
