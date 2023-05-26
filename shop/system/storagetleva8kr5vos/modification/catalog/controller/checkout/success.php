<?php
class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');

		if (isset($this->session->data['order_id'])) {

			$oct_sucsess = $this->config->get('theme_oct_remarket_data_osucsess');

			if (isset($oct_sucsess['status'])) {
				$oct_order_id = $this->session->data['order_id'];
			}
			

            //https://yandex.ru/support/metrika/data/e-commerce.html
            //https://developers.google.com/analytics/devguides/collection/gtagjs/enhanced-ecommerce?hl=ru
            if($this->config->get('analytics_oct_analytics_yandex_ecommerce') || $this->config->get('analytics_oct_analytics_google_ecommerce')) {
                $data['oct_analytics_yandex_ecommerce'] = $this->config->get('analytics_oct_analytics_yandex_ecommerce');
                $data['oct_analytics_yandex_container'] = $this->config->get('analytics_oct_analytics_yandex_container');

                $data['oct_analytics_google_ecommerce'] = $this->config->get('analytics_oct_analytics_google_ecommerce');

                $this->load->model('account/order');
                $this->load->model('catalog/category');
                $this->load->model('catalog/product');

                $data['oct_analytics_order_id'] = $this->session->data['order_id'];

                $order_products = $this->model_account_order->getOrderProducts($this->session->data['order_id']);

                $data['oct_analytics_yandex_order_products'] = [];

                $data['currency_id'] = $currency_id = $this->currency->getId($this->session->data['currency']);
    			$data['currency_code'] = $currency_code = $this->session->data['currency'];
    			$data['currency_value'] = $currency_value = $this->currency->getValue($this->session->data['currency']);

                $shipping = 0;
                $totals = 0;

                $query_total = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_total` WHERE order_id = '" . (int)$this->session->data['order_id'] . "' ORDER BY sort_order ASC");

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

                foreach ($this->model_account_order->getOrderProducts($this->session->data['order_id']) as $product) {
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
                        $options_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$this->session->data['order_id'] . "' AND order_product_id = '" . (int)$product['product_id'] . "'");

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

                        $google_data = [
					        'transaction_id' => $this->session->data['order_id'],
					        'affiliation' => $data['affiliation'],
					        'value' => (float)$data['total'],
					        'currency' => $data['currency_code'],
					        'shipping' => $data['shipping'],
					        'items' => $data['oct_analytics_order_products']
					    ];

					    $data['toGoogle'] = json_encode($google_data);
                    }
                }
            }
            
			$this->cart->clear();

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if ($this->customer->isLogged()) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}


			if ($this->customer->isLogged()) {
				if (isset($oct_order_id) && isset($oct_sucsess['status']) && isset($oct_sucsess['reg']['text'][(int)$this->config->get('config_language_id')])) {
					$oct_sucsess_title = isset($oct_sucsess['reg']['title'][(int)$this->config->get('config_language_id')]) ? $oct_sucsess['reg']['title'][(int)$this->config->get('config_language_id')] : '';

					$oct_replace = [
						'[order_id]' => (int)$oct_order_id,
						'[contact_link]' => $this->url->link('information/contact'),
						'[account_link]' => $this->url->link('account/account'),
						'[account_order_link]' => $this->url->link('account/order'),
						'[account_download_link]' => $this->url->link('account/download'),
					];

					$data['heading_title'] = (isset($oct_sucsess_title) && $oct_sucsess_title) ? strip_tags(html_entity_decode(str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_sucsess_title), ENT_QUOTES, 'UTF-8')) : $this->language->get('heading_title');
					$data['text_message'] = html_entity_decode(str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_sucsess['reg']['text'][(int)$this->config->get('config_language_id')]), ENT_QUOTES, 'UTF-8');
				}
			} else {
				if (isset($oct_order_id) && isset($oct_sucsess['status']) && isset($oct_sucsess['noreg']['text'][(int)$this->config->get('config_language_id')])) {
					$oct_sucsess_title = isset($oct_sucsess['noreg']['title'][(int)$this->config->get('config_language_id')]) ? $oct_sucsess['noreg']['title'][(int)$this->config->get('config_language_id')] : '';

					$oct_replace = [
						'[order_id]' => (int)$oct_order_id,
						'[contact_link]' => $this->url->link('information/contact'),
					];

					$data['heading_title'] = (isset($oct_sucsess_title) && $oct_sucsess_title) ? strip_tags(html_entity_decode(str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_sucsess_title), ENT_QUOTES, 'UTF-8')) : $this->language->get('heading_title');
					$data['text_message'] = html_entity_decode(str_replace(array_keys($oct_replace), array_values($oct_replace), $oct_sucsess['noreg']['text'][(int)$this->config->get('config_language_id')]), ENT_QUOTES, 'UTF-8');
				}
			}

			$this->document->setTitle(isset($data['heading_title']) ? $data['heading_title'] : $this->language->get('heading_title'));
			
		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}