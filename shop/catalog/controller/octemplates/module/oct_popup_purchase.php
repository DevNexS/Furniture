<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerOCTemplatesModuleOctPopupPurchase extends Controller {
	private $error = [];

	public function index() {
		if ($this->config->get('oct_popup_purchase_status') && $this->config->get('oct_popup_purchase_data') && $this->config->get('config_checkout_guest') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

			$this->load->model('catalog/product');
			$this->load->language('octemplates/module/oct_popup_purchase');

			if (isset($this->request->post['product_id']) && !empty($this->request->post['product_id'])) {
	            $product_id = (int) $this->request->post['product_id'];
	        } else {
	            $product_id = 0;
	        }

	        $product_info = $this->model_catalog_product->getProduct($product_id);

	        if ($product_info) {
		        $data['oct_popup_purchase_data'] = $oct_popup_purchase_data = $this->config->get('oct_popup_purchase_data');

				$data['you_save'] = $product_info['you_save'];
				$data['you_save_price'] = $product_info['you_save_price'];

		        $data['user_name'] = $this->customer->isLogged() ? $this->customer->getFirstName() ." ". $this->customer->getLastName() : '';
				$data['user_email'] = $this->customer->isLogged() ? $this->customer->getEmail() : '';
				$data['user_telephone'] = $this->customer->isLogged() ? $this->customer->getTelephone() : '';

		        $data['product_id'] = (int)$product_id;
		        $data['product_name'] = $product_info['name'];
				$data['model'] = $product_info['model'];
				$data['sku'] = $product_info['sku'];

				if ($this->registry->has('oct_mobiledetect')) {
			        if ($this->oct_mobiledetect->isiOS() || $this->oct_mobiledetect->isiPad()) {
			            $data['oct_isiOS'] = 1;
			        }
			    }

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

				if ($product_info['minimum']) {
					$data['minimum'] = $product_info['minimum'];
				} else {
					$data['minimum'] = 1;
				}

				$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);

				if ($product_info['quantity'] <= 0 && isset($oct_popup_purchase_data['stock_check'])) {
					$data['error_stock_check'] = $this->language->get('error_quantity_stock');
				}

				if (isset($oct_popup_purchase_data['stock_check'])) {
					$data['max_quantity'] = $product_info['quantity'];
				}

				if (isset($oct_popup_purchase_data['image']) && $oct_popup_purchase_data['image']) {
					$this->load->model('tool/image');

					$image_width  = (isset($oct_popup_purchase_data['image_width']) && !empty($oct_popup_purchase_data['image_width'])) ? $oct_popup_purchase_data['image_width'] : $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width');
		            $image_height = (isset($oct_popup_purchase_data['image_height']) && !empty($oct_popup_purchase_data['image_height'])) ? $oct_popup_purchase_data['image_height'] : $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height');

		            if ($product_info['image']) {
		                $data['thumb'] = $this->model_tool_image->resize($product_info['image'], $image_width, $image_height);
		            } else {
		                $data['thumb'] = $this->model_tool_image->resize("placeholder.png", $image_width, $image_height);
		            }

		            $results = $this->model_catalog_product->getProductImages((int)$product_id);

		            if ($data['thumb'] && !empty($results)) {
						$data['images'][0] = [
							'popup' => $data['thumb'],
							'thumb' => $data['thumb']
						];
					}

					foreach ($results as $result) {
						if (isset($result['image']) && !empty($result['image']) && $result['image'] && file_exists(DIR_IMAGE . $result['image'])) {
							$data['images'][] = [
								'popup' => $this->model_tool_image->resize($result['image'], $image_width, $image_height),
								'thumb' => $this->model_tool_image->resize($result['image'], $image_width, $image_height)
							];
						}
					}
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$data['price'] = false;
				}

				if (($this->customer->isLogged() || !$this->config->get('config_customer_price')) && (float)$product_info['special']) {
					$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$data['special'] = $data['you_save'] = $data['you_save_price'] = false;
				}

				$data['options'] = [];

				foreach ($this->model_catalog_product->getProductOptions($product_id) as $option) {
					$product_option_value_data = [];

					if ((isset($oct_popup_purchase_data['allowed_options']) && !empty($oct_popup_purchase_data['allowed_options'])) && (in_array($option['option_id'], $oct_popup_purchase_data['allowed_options']))) {
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
				}

				// Captcha
				if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('oct_popup_purchase', (array)$this->config->get('config_captcha_page'))) {
					$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
				} else {
					$data['captcha'] = '';
				}

				if ($this->config->get('config_checkout_id')) {
					$this->load->model('catalog/information');

					$information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

					if ($information_info) {
						//$data['text_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('config_checkout_id'), true), $information_info['title'], $information_info['title']);
						$data['text_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information', 'information_id=' . $this->config->get('config_checkout_id'), true), $information_info['title'], $information_info['title']);
					} else {
						$data['text_agree'] = false;
					}
				} else {
					$data['text_agree'] = false;
				}

				$data['product_link'] = $this->url->link('product/product', 'product_id='.$product_id, true);
	        } else {
		        $this->response->redirect($this->url->link('error/not_found', '', true));
	        }

			$oct_analytics_yandex_ecommerce = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
            $oct_analytics_google_ecommerce = $this->config->get('analytics_oct_analytics_google_ecommerce');

            if((isset($oct_analytics_google_ecommerce) && $oct_analytics_google_ecommerce) || (isset($oct_analytics_yandex_ecommerce) && $oct_analytics_yandex_ecommerce)) {
                $data['oct_analytics_yandex_ecommerce'] = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
                $data['oct_analytics_yandex_container'] = $this->config->get('analytics_oct_analytics_yandex_container');

                $data['oct_analytics_google_ecommerce'] = $this->config->get('analytics_oct_analytics_google_ecommerce');
            }

	        $this->response->setOutput($this->load->view('octemplates/module/oct_popup_purchase', $data));
		} else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	}

	public function byOneClick($data) {
		if ($this->config->get('oct_popup_purchase_byoneclick_status')) {
			$this->load->language('octemplates/module/oct_popup_purchase');

			$data['total_amount'] = $this->currency->format(0, $this->session->data['currency']);

			$oct_analytics_yandex_ecommerce = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
            $oct_analytics_google_ecommerce = $this->config->get('analytics_oct_analytics_google_ecommerce');

            if((isset($oct_analytics_google_ecommerce) && $oct_analytics_google_ecommerce) || (isset($oct_analytics_yandex_ecommerce) && $oct_analytics_yandex_ecommerce)) {
                $data['oct_analytics_yandex_ecommerce'] = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
                $data['oct_analytics_yandex_container'] = $this->config->get('analytics_oct_analytics_yandex_container');

                $data['oct_analytics_google_ecommerce'] = $this->config->get('analytics_oct_analytics_google_ecommerce');
            }

			return $this->load->view('octemplates/module/oct_popup_purchase_byoneclick', $data);
		}
	}

	public function makeOrder() {
		if (($this->config->get('oct_popup_purchase_status') || $this->config->get('oct_popup_purchase_byoneclick_status')) && $this->config->get('config_checkout_guest') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && (isset($this->request->post['product_id']) && !empty($this->request->post['product_id']))) {
			$this->load->language('octemplates/module/oct_popup_purchase');

			$json = [];

			if ($this->validate()) {
				$oct_popup_purchase_data = isset($this->request->post['oct_byoneclick']) ? $this->config->get('oct_popup_purchase_byoneclick_data') : $this->config->get('oct_popup_purchase_data');

				$customer_order = isset($this->request->post['oct_byoneclick']) ? $this->language->get('oct_product_oneclick') : $this->language->get('heading_title');

				$old_cart = [];

				if (!isset($this->request->post['oct_cart_in'])) {
					$old_cart = $this->cart->getProducts();
		            $this->cart->clear();

					$product_id = (int)$this->request->post['product_id'];

					if (isset($this->request->post['quantity'])) {
						$quantity = (int)$this->request->post['quantity'];
					} else {
						$quantity = 1;
					}

					if (isset($this->request->post['option'])) {
						$option = array_filter($this->request->post['option']);
					} else {
						$option = [];
					}

					$this->cart->add($product_id, $quantity, $option);
				}

				$order_data = [];

				$totals = [];
				$taxes = $this->cart->getTaxes();
				$total = 0;

				// Because __call can not keep var references so we put them into an array.
				$total_data = [
					'totals' => &$totals,
					'taxes'  => &$taxes,
					'total'  => &$total
				];

				$this->load->model('setting/extension');

				$sort_order = [];

				$results = $this->model_setting_extension->getExtensions('total');

				foreach ($results as $key => $value) {
					$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
				}

				array_multisort($sort_order, SORT_ASC, $results);

				foreach ($results as $result) {
					if ($this->config->get('total_' . $result['code'] . '_status')) {
						$this->load->model('extension/total/' . $result['code']);

						// We have to put the totals in an array so that they pass by reference.
						$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
					}
				}

				$sort_order = [];

				foreach ($totals as $key => $value) {
					$sort_order[$key] = $value['sort_order'];
				}

				array_multisort($sort_order, SORT_ASC, $totals);

				$order_data['totals'] = $totals;

				$this->load->language('checkout/checkout');

				$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
				$order_data['store_id'] = $this->config->get('config_store_id');
				$order_data['store_name'] = $this->config->get('config_name');

				if ($order_data['store_id']) {
					$order_data['store_url'] = $this->config->get('config_url');
				} else {
					if ($this->request->server['HTTPS']) {
						$order_data['store_url'] = HTTPS_SERVER;
					} else {
						$order_data['store_url'] = HTTP_SERVER;
					}
				}

				$this->load->model('account/customer');

				if ($this->customer->isLogged()) {
					$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

					$order_data['customer_id'] = $this->customer->getId();
					$order_data['customer_group_id'] = $customer_info['customer_group_id'];
					$order_data['firstname'] = $order_data['shipping_firstname'] = $order_data['payment_firstname'] = isset($this->request->post['name']) ? $this->request->post['name'] : $customer_info['firstname'];
					$order_data['lastname'] = $order_data['payment_lastname'] = $order_data['shipping_lastname'] = $customer_info['lastname'];
					$order_data['email'] = isset($this->request->post['email']) ? $this->request->post['email'] : $customer_info['email'];
					$order_data['telephone'] = isset($this->request->post['telephone']) ? $this->request->post['telephone'] : $customer_info['telephone'];
				} else {
					$order_data['customer_id'] = 0;
					$order_data['customer_group_id'] = $this->customer->getGroupId();
					$order_data['firstname'] = $order_data['shipping_firstname'] = $order_data['payment_firstname'] = (isset($this->request->post['name']) && !empty($this->request->post['name'])) ? $this->request->post['name'] : $customer_order;
					$order_data['lastname'] = $order_data['payment_lastname'] = $order_data['shipping_lastname'] = '';
					$order_data['email'] = (isset($this->request->post['email']) && !empty($this->request->post['email'])) ? $this->request->post['email'] : $oct_popup_purchase_data['notify_email'];
					$order_data['telephone'] = isset($this->request->post['telephone']) ? $this->request->post['telephone'] : '';

				}

				$order_data['custom_field'] = [];

				$order_data['payment_method'] = '';
				$order_data['payment_code'] = '';
				$order_data['payment_company'] = '';
				$order_data['payment_address_1'] = '';
				$order_data['payment_address_2'] = '';
				$order_data['payment_city'] = '';
				$order_data['payment_postcode'] = '';
				$order_data['payment_zone'] = '';
				$order_data['payment_zone_id'] = '';
				$order_data['payment_country'] = '';
				$order_data['payment_country_id'] = '';
				$order_data['payment_address_format'] = '';
				$order_data['payment_custom_field'] = [];

				$order_data['shipping_company'] = '';
				$order_data['shipping_address_1'] = '';
				$order_data['shipping_address_2'] = '';
				$order_data['shipping_city'] = '';
				$order_data['shipping_postcode'] = '';
				$order_data['shipping_zone'] = '';
				$order_data['shipping_zone_id'] = '';
				$order_data['shipping_country'] = '';
				$order_data['shipping_country_id'] = '';
				$order_data['shipping_address_format'] = '';
				$order_data['shipping_custom_field'] = [];
				$order_data['shipping_method'] = '';
				$order_data['shipping_code'] = '';

				$order_data['products'] = [];

				foreach ($this->cart->getProducts() as $product) {
					$option_data = [];

					foreach ($product['option'] as $option) {
						$option_data[] = [
							'product_option_id'       => $option['product_option_id'],
							'product_option_value_id' => $option['product_option_value_id'],
							'option_id'               => $option['option_id'],
							'option_value_id'         => $option['option_value_id'],
							'name'                    => $option['name'],
							'value'                   => $option['value'],
							'type'                    => $option['type']
						];
					}

					$order_data['products'][] = [
						'product_id' => $product['product_id'],
						'name'       => $product['name'],
						'model'      => $product['model'],
						'option'     => $option_data,
						'download'   => $product['download'],
						'quantity'   => $product['quantity'],
						'subtract'   => $product['subtract'],
						'price'      => $product['price'],
						'total'      => $product['total'],
						'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
						'reward'     => $product['reward']
					];
				}

				// Gift Voucher
				$order_data['vouchers'] = [];

				$order_data['comment'] = isset($this->request->post['comment']) ? $this->request->post['comment'] : '';
				$order_data['total'] = $total_data['total'];

				if (isset($this->request->cookie['tracking'])) {
					$order_data['tracking'] = $this->request->cookie['tracking'];

					$subtotal = $this->cart->getSubTotal();

					// Affiliate
					$affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);

					if ($affiliate_info) {
						$order_data['affiliate_id'] = $affiliate_info['customer_id'];
						$order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
					} else {
						$order_data['affiliate_id'] = 0;
						$order_data['commission'] = 0;
					}

					// Marketing
					$this->load->model('checkout/marketing');

					$marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->request->cookie['tracking']);

					if ($marketing_info) {
						$order_data['marketing_id'] = $marketing_info['marketing_id'];
					} else {
						$order_data['marketing_id'] = 0;
					}
				} else {
					$order_data['affiliate_id'] = 0;
					$order_data['commission'] = 0;
					$order_data['marketing_id'] = 0;
					$order_data['tracking'] = '';
				}

				$order_data['language_id'] = $this->config->get('config_language_id');
				$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
				$order_data['currency_code'] = $this->session->data['currency'];
				$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
				$order_data['ip'] = $this->request->server['REMOTE_ADDR'];

				if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
					$order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
				} elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
					$order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
				} else {
					$order_data['forwarded_ip'] = '';
				}

				if (isset($this->request->server['HTTP_USER_AGENT'])) {
					$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
				} else {
					$order_data['user_agent'] = '';
				}

				if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
					$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
				} else {
					$order_data['accept_language'] = '';
				}

				$this->load->model('checkout/order');

				$order_id = $this->model_checkout_order->addOrder($order_data);

				$this->model_checkout_order->addOrderHistory($order_id, $oct_popup_purchase_data['order_status_id']);

				$this->cart->clear();

	            if ($old_cart) {
	                foreach ($old_cart as $value) {
	                    $this->cart->add($value['product_id'], $value['quantity'], $value['option']);
	                }
	            }

				if($this->config->get('analytics_oct_analytics_yandex_ecommerce') || $this->config->get('analytics_oct_analytics_google_ecommerce')) {
	                $this->load->model('account/order');
	                $this->load->model('catalog/category');
	                $this->load->model('catalog/product');

	                $data['oct_analytics_order_id'] = $order_id;

	                $order_products = $this->model_account_order->getOrderProducts($order_id);

	                $data['oct_analytics_yandex_order_products'] = [];

	                $data['currency_id'] = $currency_id = $this->currency->getId($this->session->data['currency']);
	                $data['currency_code'] = $currency_code = $this->session->data['currency'];
	                $data['currency_value'] = $currency_value = $this->currency->getValue($this->session->data['currency']);

	                $shipping = 0;
	                $totals = 0;

	                $query_total = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int)$order_id . "' ORDER BY sort_order ASC");

	                foreach ($query_total->rows as $total) {
	                    if ($total['value'] > 0) {
	                        if ($total['code'] == "shipping") {
	                            $shipping += $total['value'];
	                        }

	                        if ($total['code'] == "total") {
	                            $totals += $total['value'];
	                        }
	                    }
	                }

	                $data['total'] = $totals * $currency_value;
	                $data['shipping'] = $shipping * $currency_value;
	                $data['affiliation'] = $this->config->get('config_name');

	                foreach ($this->model_account_order->getOrderProducts($order_id) as $product) {
	                    $product_info = $this->model_catalog_product->getProduct($product["product_id"]);

	                    if($product_info) {
	                        $i = 0;
	                        $categories_data = '';

	                        $query_category = $this->db->query("SELECT cd.name FROM `" . DB_PREFIX . "product_to_category` pc INNER JOIN `" . DB_PREFIX . "category_description` cd ON pc.category_id = cd.category_id WHERE pc.product_id = '" . (int)$product['product_id'] . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

	                        foreach ($query_category->rows as $category) {
	                            $i++;
	                            if ($i <= 5) {
	                                $categories_data .= $category['name'] . '/';
	                            }
	                        }

	                        $categories_data = rtrim($categories_data, '/');

	                        $options_data = '';
	                        $options_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$product['product_id'] . "'");

	                        foreach ($options_query->rows as $option) {
	                            if ($option['type'] != 'file') {
	                                $options_data .= $option['name'] . ': ' . (utf8_strlen($option['value']) > 20 ? utf8_substr($option['value'], 0, 20) . '..' : $option['value']) . ' - ';
	                            }
	                        }

	                        $options_data = rtrim($options_data, ' - ');

	                        $price = (((float)$product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0)) * $currency_value);

	                        $data['oct_analytics_order_products'][] = [
	                            'id' => $product['product_id'],
	                            'name' => $product['name'],
	                            'price' => $price,
	                            'quantity' => $product['quantity'],
	                            'brand' => $product_info['manufacturer'],
	                            'category' => $categories_data,
	                            'variant' => $options_data
	                        ];
	                    }
	                }

	                $google_data = [
	                    'transaction_id' => $data['oct_analytics_order_id'],
	                    'affiliation' => $data['affiliation'],
	                    'value' => (float)$data['total'],
	                    'currency' => $data['currency_code'],
	                    'shipping' => $data['shipping'],
	                    'items' => $data['oct_analytics_order_products']
	                ];
	            }

	            $json['ecommerce'] = (isset($google_data) && !empty($google_data)) ? $google_data : [];

				$json['success'] = sprintf($this->language->get('text_success_order'), $order_id);
			} else {
				$json['error'] = $this->error;
			}

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		} else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	}

	protected function validate() {
		$oct_popup_purchase_data = $this->config->get('oct_popup_purchase_data');

		if (!isset($this->request->post['oct_byoneclick'])) {
			if (isset($this->request->post['name']) && (isset($oct_popup_purchase_data['firstname']) && $oct_popup_purchase_data['firstname'] == 2) && (utf8_strlen(trim($this->request->post['name'])) < 1 || utf8_strlen(trim($this->request->post['name'])) > 32)) {
				$this->error['name'] = $this->language->get('error_firstname');
			}
		}

		if (!isset($this->request->post['oct_byoneclick'])) {
			if (isset($this->request->post['email']) && (isset($oct_popup_purchase_data['email']) && $oct_popup_purchase_data['email'] == 2) && (utf8_strlen($this->request->post['email']) > 96 || !preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email']))) {
				$this->error['email'] = $this->language->get('error_email');
			}
		}

		if (isset($this->request->post['telephone'])) {
			$this->request->post['telephone'] = preg_replace("/[^0-9,\(\),\-,_,+]/", '', $this->request->post['telephone']);
		}

		if (isset($this->request->post['telephone']) && !empty($oct_popup_purchase_data['mask'])) {
            $phone_count = utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $oct_popup_purchase_data['mask']));

            if ((isset($oct_popup_purchase_data['telephone']) && $oct_popup_purchase_data['telephone'] == 2) && (utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $this->request->post['telephone'])) < $phone_count || !preg_match('/[0-9,\-,+,\(,\),_]/', $this->request->post['telephone']))) {
                $this->error['telephone'] = $this->language->get('error_telephone_mask');
            }
        } elseif (isset($this->request->post['telephone']) && ((isset($oct_popup_purchase_data['telephone']) && $oct_popup_purchase_data['telephone'] == 2) && (utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $this->request->post['telephone'])) > 15 || utf8_strlen(str_replace(['_','-','(',')','+',' '], "", $this->request->post['telephone'])) < 3) || !preg_match('/[0-9,\-,+,\(,\),_]/', $this->request->post['telephone']))) {
            $this->error['telephone'] = $this->language->get('error_telephone');
        }

        if (!isset($this->request->post['oct_byoneclick'])) {
	        // Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('oct_popup_purchase', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$this->error['captcha'] = $captcha;
				}
			}
		}

        if (!isset($this->request->post['oct_byoneclick']) && ($this->config->get('config_checkout_id') && !isset($this->request->post['agree']))) {
	        $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

			if (isset($information_info) && !empty($information_info)) {
				$this->error['agree'] = sprintf($this->language->get('error_agree'), $information_info['title']);
			}
        }

        if (!isset($this->request->post['oct_cart_in'])) {
	        $this->load->model('catalog/product');

	        $product_info = $this->model_catalog_product->getProduct($this->request->post['product_id']);

	        if ($product_info) {
		        if (!isset($this->request->post['oct_byoneclick'])) {
			        if (isset($this->request->post['option'])) {
						$option = array_filter($this->request->post['option']);
					} else {
						$option = [];
					}

					$this->request->post['quantity'] = isset($this->request->post['quantity']) ? $this->request->post['quantity'] : 1;

					if (isset($oct_popup_purchase_data['stock_check']) && ($product_info['quantity'] < $this->request->post['quantity'])) {
						$this->error['quantity'] = $this->language->get('error_quantity_stock');
					}

					$product_options = $this->model_catalog_product->getProductOptions($this->request->post['product_id']);

					foreach ($product_options as $product_option) {
						if ((isset($oct_popup_purchase_data['allowed_options']) && !empty($oct_popup_purchase_data['allowed_options'])) && in_array($product_option['option_id'], $oct_popup_purchase_data['allowed_options'])) {
							if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
								$this->error['options'][$product_option['product_option_id']] = sprintf($this->language->get('error_option'), $product_option['name']);
							}

							if (isset($oct_popup_purchase_data['stock_check']) && isset($option[$product_option['product_option_id']])) {
			                    foreach ($product_option['product_option_value'] as $product_option_value) {
			                        if ($product_option_value['quantity'] > 0 && ($option[$product_option['product_option_id']] == $product_option_value['product_option_value_id'])) {
			                            if (isset($this->request->post['quantity']) && $this->request->post['quantity'] > $product_option_value['quantity']) {
			                                $this->error['options'][$product_option['product_option_id']] = sprintf($this->language->get('error_option_quantity_stock'), $product_option['name'], $product_option_value['name']);
			                            }
			                        }
			                    }
			                }
						}
					}
				}
			} else {
				$this->error['product'] = $this->language->get('error_product');
			}
		}

		return !$this->error;
	}
}
