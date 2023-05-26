<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerCheckoutOctFastorder extends Controller {
    public function index() {
        $data = [];

        $oct_fastorder_data                         = $this->config->get('oct_fastorder_data');
        $data['oct_fastorder_data']                 = $oct_fastorder_data;

        if (!isset($oct_fastorder_data['status'])) {
            $this->response->redirect($this->url->link('checkout/checkout'));
        } elseif (isset($oct_fastorder_data['status']) && $oct_fastorder_data['status'] == 0) {
            $this->response->redirect($this->url->link('checkout/checkout'));
        }

        $this->load->language('octemplates/oct_fastorder');
        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->session->data['shipping_address_id'])) {
            unset($this->session->data['shipping_address_id']);
        }

        if (!isset($this->session->data['guest']['customer_group_id'])) {
            $this->session->data['guest']['customer_group_id'] = (int) $this->config->get('config_customer_group_id');
        }

        if (!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) {
            $this->response->redirect($this->url->link('checkout/oct_fastorder/empty_cart'));
        }

        if (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout')) {
           //$this->response->redirect($this->url->link('checkout/oct_fastorder'));
        }

        if (isset($this->session->data['customer_id'])) {
            $data['customer_id'] = $this->session->data['customer_id'];

            if (isset($this->session->data['checkout_customer_id']) && $this->session->data['checkout_customer_id'] === true) {
                unset($this->session->data['shipping_method']);
                unset($this->session->data['shipping_methods']);
                unset($this->session->data['shipping_address']);
                unset($this->session->data['shipping_address_id']);
                unset($this->session->data['payment_address']);
                unset($this->session->data['payment_address_id']);
                unset($this->session->data['payment_method']);
                unset($this->session->data['payment_methods']);
                unset($this->session->data['guest']);
                unset($this->session->data['account']);
                unset($this->session->data['shipping_country_id']);
                unset($this->session->data['shipping_zone_id']);
                unset($this->session->data['payment_country_id']);
                unset($this->session->data['payment_zone_id']);
            }
        }

        if (isset($this->session->data['error'])) {
            $data['error_warning'] = $this->session->data['error'];
            unset($this->session->data['error']);
        } else {
            $data['error_warning'] = '';
        }

        if ($this->config->get('config_customer_price') && !$this->customer->isLogged()) {
            $data['attention'] = sprintf($this->language->get('text_login'), $this->url->link('account/login'), $this->url->link('account/register'));
        } else {
            $data['attention'] = '';
        }

        if (isset($this->session->data['shipping_methods'])) {
            $data['shipping_methods'] = $this->session->data['shipping_methods'];
        } else {
            $data['shipping_methods'] = [];
        }

        if (isset($this->session->data['shipping_method']['code'])) {
            $data['code'] = $this->session->data['shipping_method']['code'];
        } else {
            $data['code'] = '';
        }

        if (isset($this->session->data['comment'])) {
            $data['comment'] = $this->session->data['comment'];
        } else {
            $data['comment'] = '';
        }

        if (isset($this->session->data['payment_methods'])) {
            $data['payment_methods'] = $this->session->data['payment_methods'];
        } else {
            $data['payment_methods'] = [];
        }

        if (isset($this->session->data['payment_method']['code'])) {
            $data['code'] = $this->session->data['payment_method']['code'];
        } else {
            $data['code'] = '';
        }

        if ($this->config->get('config_cart_weight') && (isset($oct_fastorder_data['cart_weight']) && $oct_fastorder_data['cart_weight'] == 1)) {
            $data['weight'] = $this->weight->format($this->cart->getWeight(), $this->config->get('config_weight_class_id'), $this->language->get('decimal_point'), $this->language->get('thousand_point'));
        } else {
            $data['weight'] = '';
        }

        if (isset($this->request->post['coupon'])) {
            $data['coupon'] = $this->request->post['coupon'];
        } elseif (isset($this->session->data['coupon'])) {
            $data['coupon'] = $this->session->data['coupon'];
        } else {
            $data['coupon'] = '';
        }

        $data['voucher_status'] = $this->config->get('voucher_status');

        if (isset($this->request->post['voucher'])) {
            $data['voucher'] = $this->request->post['voucher'];
        } elseif (isset($this->session->data['voucher'])) {
            $data['voucher'] = $this->session->data['voucher'];
        } else {
            $data['voucher'] = '';
        }

        $points = $this->customer->getRewardPoints();

        $points_total = 0;

        foreach ($this->cart->getProducts() as $product) {
            if ($product['points']) {
                $points_total += $product['points'];
            }
        }

        $data['reward_status'] = ($points && $points_total && $this->config->get('reward_status'));

        if (isset($this->request->post['reward'])) {
            $data['reward'] = $this->request->post['reward'];
        } elseif (isset($this->session->data['reward'])) {
            $data['reward'] = $this->session->data['reward'];
        } else {
            $data['reward'] = '';
        }

        $this->load->model('tool/image');
        $this->load->model('tool/upload');

        $data['products'] = [];

        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
            }

            if ($product['image']) {
                $image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
            }

            $option_data = [];

            foreach ($product['option'] as $option) {
                if ($option['type'] != 'file') {
                    $value = $option['value'];
                } else {
                    $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                    if ($upload_info) {
                        $value = $upload_info['name'];
                    } else {
                        $value = '';
                    }
                }

                $option_data[] = array(
                    'name' => $option['name'],
                    'sku' => (isset($option['sku'])) ? $option['sku'] : '',
                    'model' => (isset($option['model'])) ? $option['model'] : '',
                    'oct_quantity_value' => (isset($option['oct_quantity_value'])) ? $option['oct_quantity_value'] : '',
                    'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                );
            }

            // Display prices
            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            // Display prices
            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $total = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']);
            } else {
                $total = false;
            }

            $recurring = '';

            if ($product['recurring']) {
                $frequencies = array(
                    'day' => $this->language->get('text_day'),
                    'week' => $this->language->get('text_week'),
                    'semi_month' => $this->language->get('text_semi_month'),
                    'month' => $this->language->get('text_month'),
                    'year' => $this->language->get('text_year')
                );

                if ($product['recurring']['trial']) {
                    $recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
                }

                if ($product['recurring']['duration']) {
                    $recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                } else {
                    $recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                }
            }

            $data['products'][] = array(
                'key' => $product['cart_id'],
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'model' => $product['model'],
                'option' => $option_data,
                'recurring' => $recurring,
                'quantity' => $product['quantity'],
                'stock' => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
                'reward' => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
                'price' => $price,
                'total' => $total,
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        // Gift Voucher
        $data['vouchers'] = [];

        if (!empty($this->session->data['vouchers'])) {
            foreach ($this->session->data['vouchers'] as $key => $voucher) {
                $data['vouchers'][] = array(
                    'key' => $key,
                    'description' => $voucher['description'],
                    'amount' => $this->currency->format($voucher['amount'], $this->session->data['currency']),
                    'remove' => $this->url->link('checkout/cart', 'remove=' . $key)
                );
            }
        }

        // Totals
        $this->load->model('setting/extension');

        $totals = [];
        $taxes  = $this->cart->getTaxes();
        $total  = 0;

        // Because __call can not keep var references so we put them into an array.
        $total_data = array(
            'totals' => &$totals,
            'taxes' => &$taxes,
            'total' => &$total
        );

        // Display prices
        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $sort_order = [];

            $results = $this->model_setting_extension->getExtensions('total');

            foreach ($results as $key => $value) {
                $sort_order[$key] = $this->config->get($value['code'] . '_sort_order');
            }

            array_multisort($sort_order, SORT_ASC, $results);

            foreach ($results as $result) {
                if ($this->config->get($result['code'] . '_status')) {
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
        }

        $data['totals'] = [];

        foreach ($totals as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $this->currency->format($total['value'], $this->session->data['currency'])
            );
        }

        if ($this->config->get('config_checkout_id')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

            if ($information_info) {

                $data['text_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('config_checkout_id'), 'SSL'), $information_info['title'], $information_info['title']);

            } else {
                $data['text_agree'] = '';
            }
        } else {
            $data['text_agree'] = '';
        }

        if (isset($this->session->data['agree'])) {
            $data['agree'] = $this->session->data['agree'];
        } else {
            $data['agree'] = '';
        }

        if ($this->config->get('config_account_id')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

            if ($information_info) {

                $data['text_payment_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('config_account_id'), 'SSL'), $information_info['title'], $information_info['title']);

            } else {
                $data['text_payment_agree'] = '';
            }
        } else {
            $data['text_payment_agree'] = '';
        }

        $data['text_payment_agree'] = '';

        if (isset($this->session->data['payment_agree'])) {
            $data['payment_agree'] = $this->session->data['payment_agree'];
        } else {
            $data['payment_agree'] = '';
        }

        $this->load->model('account/address');

        $data['addresses'] = $this->model_account_address->getAddresses();

        $data['oct_address_new'] = $this->url->link('account/address/add', '', 'SSL');

        if ($this->customer->isLogged()) {
            $data['firstname']          = $this->customer->getFirstName();
            $data['lastname']           = $this->customer->getLastName();
            $data['email_user']         = $this->customer->getEmail();
            $data['telephone_user']     = $this->customer->getTelephone();
            $data['payment_address_id'] = $this->customer->getAddressId();
            $data['user_logged']           = true;
            $data['address']            = $this->model_account_address->getAddress($this->customer->getAddressId());
        }

        $data['mask'] = ($oct_fastorder_data['mask']) ? $oct_fastorder_data['mask'] : '';

        $this->document->addStyle('catalog/view/theme/oct_remarket/stylesheet/oct-fastorder.min.css');

        $data['column_left']    = $this->load->controller('common/column_left');
        $data['column_right']   = $this->load->controller('common/column_right');
        $data['content_top']    = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        $this->validate_form($data);
        $this->login(false, $data);
        $this->guest(false, $data);
        $this->checkout(false, $data);
        $this->shipping_address(false, $data);
        $this->shipping_method(false, $data);
        $this->payment_method(false, $data);
        $this->payment_address(false, $data);
        $this->confirm(false, $data);
        $this->cart(false, $data);

        $this->load->model('setting/extension');

        $data['modules'] = [];

        $files = glob(DIR_APPLICATION . '/controller/extension/total/*.php');

        if ($files) {
            foreach ($files as $file) {
                $result = $this->load->controller('extension/total/' . basename($file, '.php'));

                if (basename($file, '.php') != 'shipping') {
                    if ($result) {
                        $data['modules'][] = $result;
                    }
                }
            }
        }

        $this->response->setOutput($this->load->view('checkout/oct_fastorder/fastorder', $data));
    }

    public function shipping_address($render = true, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');

        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        if (isset($this->session->data['shipping_address_id'])) {
            $data['shipping_address_id'] = $this->session->data['shipping_address_id'];
        } else {
            $data['shipping_address_id'] = $this->customer->getAddressId();
        }

        $this->load->model('account/address');

        $data['addresses'] = $this->model_account_address->getAddresses();

        if (isset($this->session->data['shipping_postcode'])) {
            $data['postcode'] = $this->session->data['shipping_postcode'];
        } else {
            $data['postcode'] = '';
        }

        if (isset($this->session->data['shipping_country_id'])) {
            $data['country_id'] = $this->session->data['shipping_country_id'];
        } else {
            $data['country_id'] = $oct_fastorder_data['default_country'];
        }

        if (isset($this->session->data['shipping_zone_id'])) {
            $data['zone_id'] = $this->session->data['shipping_zone_id'];
        } else {
            $data['zone_id'] = '';
        }

        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();

        if ($render !== false) {
            $this->response->setOutput($this->load->view('checkout/checkout/shipping_address', $data));
        }
    }

    public function shipping_method($render = true, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');
        $this->load->model('account/address');

        $data['heading_shipping_block'] = $this->language->get('heading_shipping_block');
        $data['text_shipping_method']   = $this->language->get('text_shipping_method');
        $data['text_comments']          = $this->language->get('text_comments');
        $data['text_loading']           = $this->language->get('text_loading');
        $data['button_continue']        = $this->language->get('button_continue');

        $shipping_address = array(
            'country_id' => 0,
            'zone_id' => 0,
            'iso_code_2' => '',
            'iso_code_3' => '',
            'address_format' => '',
            'firstname' => '',
            'lastname' => '',
            'company' => '',
            'address_1' => ''
        );

        if ($this->customer->isLogged()) {
            if (isset($this->request->post['shipping_address'])) {
                if ($this->request->post['shipping_address'] == 'new') {
                    $country_id = $this->request->post['shipping_country_id'];
                    $zone_id    = $this->request->post['shipping_zone_id'];
                }
            } elseif (isset($this->request->post['payment_address']) && $this->request->post['payment_address'] == 'new') {
                $country_id = $this->request->post['country_id'];
                $zone_id    = $this->request->post['zone_id'];
            }

        } elseif (isset($this->request->post['country_id'])) {
            $country_id = $this->request->post['country_id'];
            $zone_id    = $this->request->post['zone_id'];
        }

        if (isset($country_id)) {
            $session_guest_shipping = isset($this->session->data['guest']['shipping']) ? $this->session->data['guest']['shipping'] : [];

            $session_guest_shipping_sub = array(
                'country_id' => $country_id,
                'zone_id' => $zone_id,
                'iso_code_2' => '',
                'iso_code_3' => '',
                'city' => (isset($this->request->post['city'])) ? $this->request->post['city'] : '',
                'postcode' => (isset($this->request->post['postcode'])) ? $this->request->post['postcode'] : ''
            );

            $this->session->data['guest']['shipping'] = array_merge($shipping_address, $session_guest_shipping, $session_guest_shipping_sub);

            $this->load->model('localisation/country');

            $country_info = $this->model_localisation_country->getCountry($country_id);

            if ($country_info) {
                $this->session->data['guest']['shipping']['country']        = $country_info['name'];
                $this->session->data['guest']['shipping']['iso_code_2']     = $country_info['iso_code_2'];
                $this->session->data['guest']['shipping']['iso_code_3']     = $country_info['iso_code_3'];
                $this->session->data['guest']['shipping']['address_format'] = $country_info['address_format'];
            } else {
                $this->session->data['guest']['shipping']['country']        = '';
                $this->session->data['guest']['shipping']['iso_code_2']     = '';
                $this->session->data['guest']['shipping']['iso_code_3']     = '';
                $this->session->data['guest']['shipping']['address_format'] = '';
            }

            $this->load->model('localisation/zone');

            $zone_info = $this->model_localisation_zone->getZone($zone_id);

            if ($zone_info) {
                $this->session->data['guest']['shipping']['zone']      = $zone_info['name'];
                $this->session->data['guest']['shipping']['zone_code'] = $zone_info['code'];
            } else {
                $this->session->data['guest']['shipping']['zone']      = '';
                $this->session->data['guest']['shipping']['zone_code'] = '';
            }

            $this->session->data['shipping_country_id'] = $country_id;
            $this->session->data['shipping_zone_id']    = $zone_id;
            $this->session->data['shipping_postcode']   = (isset($this->request->post['postcode'])) ? $this->request->post['postcode'] : '';

            $shipping_address = $this->session->data['guest']['shipping'];

        } elseif ($this->customer->isLogged()) {

            $shipping_address_id = (isset($this->request->post['shipping_address_id']) ? $this->request->post['shipping_address_id'] : (isset($this->session->data['shipping_address_id']) ? $this->session->data['shipping_address_id'] : null));
            $payment_address_id  = (isset($this->request->post['payment_address_id']) ? $this->request->post['payment_address_id'] : (isset($this->session->data['payment_address_id']) ? $this->session->data['payment_address_id'] : null));

            if ($shipping_address_id) {
                $shipping_address                           = $this->model_account_address->getAddress($shipping_address_id);
                $this->session->data['shipping_address_id'] = $shipping_address_id;
                $data['shipping_address_id']                = $shipping_address_id;
            } elseif ($payment_address_id) {
                $shipping_address = $this->model_account_address->getAddress($payment_address_id);
            }
        } elseif (isset($this->session->data['guest']['shipping'])) {
            $shipping_address = array_merge($shipping_address, $this->session->data['guest']['shipping']);
        }

        if (isset($shipping_address)) {
            $this->tax->setShippingAddress($shipping_address['country_id'], $shipping_address['zone_id']);

            $this->session->data['shipping_address'] = $shipping_address;

            $method_data = [];

            $this->load->model('setting/extension');

            $results = $this->model_setting_extension->getExtensions('shipping');

			foreach ($results as $result) {
				if ($this->config->get('shipping_' . $result['code'] . '_status')) {
					$this->load->model('extension/shipping/' . $result['code']);

					$quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote($this->session->data['shipping_address']);

					if ($quote) {
						$method_data[$result['code']] = array(
							'title'      => $quote['title'],
							'quote'      => $quote['quote'],
							'sort_order' => $quote['sort_order'],
							'error'      => $quote['error']
						);
					}
				}
			}

            $sort_order = [];

            foreach ($method_data as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            array_multisort($sort_order, SORT_ASC, $method_data);

            $this->session->data['shipping_methods'] = $method_data;
        }

        if (empty($this->session->data['shipping_methods'])) {
            $data['error_warning'] = sprintf($this->language->get('error_no_shipping'), $this->url->link('information/contact'));
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['shipping_methods'])) {
            $data['shipping_methods'] = $this->session->data['shipping_methods'];
        } else {
            $data['shipping_methods'] = [];
        }

        if (isset($this->session->data['shipping_method']['code'])) {
            $data['code'] = $this->session->data['shipping_method']['code'];
        } else {
            $data['code'] = '';
        }

        if (isset($this->session->data['comment'])) {
            $data['comment'] = $this->session->data['comment'];
        } else {
            $data['comment'] = '';
        }

        if ($render !== false) {
            $this->response->setOutput($this->load->view('checkout/oct_fastorder/shipping_method', $data));
        }
    }

    public function payment_address($render = true, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');

        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        if (isset($this->session->data['payment_address']['address_id'])) {
            $data['payment_address_id'] = $this->session->data['payment_address']['address_id'];
        } else {
            $data['payment_address_id'] = $this->customer->getAddressId();
        }

        $this->load->model('account/address');

        $data['addresses'] = $this->model_account_address->getAddresses();

        $this->load->model('account/customer_group');

        if (isset($this->session->data['payment_address']['country_id'])) {
            $data['country_id'] = $this->session->data['payment_address']['country_id'];
        } else {
            $data['country_id'] = $oct_fastorder_data['default_country'];
        }

        if (isset($this->session->data['payment_address']['zone_id'])) {
            $data['zone_id'] = $this->session->data['payment_address']['zone_id'];
        } else {
            $data['zone_id'] = '';
        }

        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();

        // Custom Fields
        $this->load->model('account/custom_field');
        $this->load->model('account/customer');

        $data['custom_fields'] = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

        $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

        if (isset($customer_info) && isset($customer_info['custom_field'])) {
            $data['account_custom_field'] = json_decode($customer_info['custom_field'], true);
		} else {
			$data['account_custom_field'] = [];
		}

        if (isset($this->session->data['payment_address']['custom_field'])) {
            $data['payment_address_custom_field'] = $this->session->data['payment_address']['custom_field'];
        } else {
            $data['payment_address_custom_field'] = [];
        }

        if ($render !== false) {
            $this->response->setOutput($this->load->view('checkout/checkout/payment_address', $data));
        }
    }

    public function payment_method($render = true, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');
        $this->load->model('account/address');

        $payment_address = $this->model_account_address->getAddress((isset($this->request->post['payment_address_id'])) ? $this->request->post['payment_address_id'] : 0);

        if (isset($this->request->post['country_id'])) {
            $payment_address['country_id']         = $this->request->post['country_id'];
            $payment_address['payment_country_id'] = $this->request->post['country_id'];

            $this->session->data['shipping_country_id']                    = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';
            $this->session->data['payment_country_id']                     = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';
            $this->session->data['guest']['payment']['country_id']         = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';
            $this->session->data['guest']['payment']['payment_country_id'] = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';

            if (isset($this->request->post['zone_id'])) {
                $this->session->data['shipping_zone_id']            = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';
                $this->session->data['payment_zone_id']             = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';
                $this->session->data['guest']['payment']['zone_id'] = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';
                $payment_address['zone_id']                         = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';
            }
        } elseif ($this->customer->isLogged() && isset($this->session->data['payment_address_id'])) {
            $payment_address = $this->model_account_address->getAddress($this->session->data['payment_address_id']);
        } elseif (isset($this->session->data['guest']['payment'])) {
            $payment_address = $this->session->data['guest']['payment'];
        }

        if(empty($payment_address)) {
            $payment_address['zone_id'] = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';
            $payment_address['country_id']  = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';
        }

        $this->session->data['payment_address'] = $payment_address;

        if (!isset($this->session->data['payment_zone_id '])) {
            $this->session->data['payment_zone_id '] = $payment_address['zone_id'];
        }

        $this->tax->setPaymentAddress($payment_address['country_id'], $payment_address['zone_id']);

        // Totals
        $totals = [];
        $taxes  = $this->cart->getTaxes();
        $total  = 0;

        // Because __call can not keep var references so we put them into an array.
        $total_data = array(
            'totals' => &$totals,
            'taxes' => &$taxes,
            'total' => &$total
        );

        $this->load->model('setting/extension');

        $sort_order = [];

        $results = $this->model_setting_extension->getExtensions('total');

        foreach ($results as $key => $value) {
            $sort_order[$key] = $this->config->get($value['code'] . '_sort_order');
        }

        array_multisort($sort_order, SORT_ASC, $results);

        foreach ($results as $result) {
            if ($this->config->get($result['code'] . '_status')) {
                $this->load->model('extension/total/' . $result['code']);

                // We have to put the totals in an array so that they pass by reference.
                $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
            }
        }

        // Payment Methods
        $method_data = [];

        $this->load->model('setting/extension');

        $results = $this->model_setting_extension->getExtensions('payment');

        $recurring = $this->cart->hasRecurringProducts();

        foreach ($results as $result) {
            if ($this->config->get('payment_' . $result['code'] . '_status')) {
                $this->load->model('extension/payment/' . $result['code']);

                $method = $this->{'model_extension_payment_' . $result['code']}->getMethod($this->session->data['payment_address'], $total);

                if ($method) {
                    if ($recurring) {
                        if (property_exists($this->{'model_extension_payment_' . $result['code']}, 'recurringPayments') && $this->{'model_extension_payment_' . $result['code']}->recurringPayments()) {
                            $method_data[$result['code']] = $method;
                        }
                    } else {
                        $method_data[$result['code']] = $method;
                    }
                }
            }
        }

        $sort_order = [];

        foreach ($method_data as $key => $value) {
            $sort_order[$key] = $value['sort_order'];
        }

        array_multisort($sort_order, SORT_ASC, $method_data);

        $this->session->data['payment_methods'] = $method_data;

        if (empty($this->session->data['payment_methods'])) {
            $data['error_warning'] = sprintf($this->language->get('error_no_payment'), $this->url->link('information/contact'));
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['payment_methods'])) {
            $data['payment_methods'] = $this->session->data['payment_methods'];
        } else {
            $data['payment_methods'] = [];
        }

        if (isset($this->session->data['payment_method']['code'])) {
            $data['code'] = $this->session->data['payment_method']['code'];
        } else {
            $data['code'] = '';
        }

        if (isset($this->session->data['comment'])) {
            $data['comment'] = $this->session->data['comment'];
        } else {
            $data['comment'] = '';
        }

        if ($this->config->get('config_checkout_id')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

            if ($information_info) {
                $data['text_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('config_checkout_id'), 'SSL'), $information_info['title'], $information_info['title']);

            } else {
                $data['text_agree'] = '';
            }
        } else {
            $data['text_agree'] = '';
        }

        if (isset($this->session->data['agree'])) {
            $data['agree'] = $this->session->data['agree'];
        } else {
            $data['agree'] = '';
        }

        if ($this->config->get('config_account_id')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

            if ($information_info) {

                $data['text_payment_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('config_account_id'), 'SSL'), $information_info['title'], $information_info['title']);

            } else {
                $data['text_payment_agree'] = '';
            }
        } else {
            $data['text_payment_agree'] = '';
        }

        $data['text_payment_agree'] = '';

        if (isset($this->session->data['payment_agree'])) {
            $data['payment_agree'] = $this->session->data['payment_agree'];
        } else {
            $data['payment_agree'] = '';
        }

        if ($render !== false) {
            $this->response->setOutput($this->load->view('checkout/oct_fastorder/payment_method', $data));
        }
    }

    public function checkout($render = true, &$data = array()) {
        // Validate minimum quantity requirments.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $this->response->redirect($this->url->link('checkout/oct_fastorder'));
            }
        }

        $this->load->language('octemplates/oct_fastorder');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home'),
            'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_cart'),
            'href' => $this->url->link('checkout/cart'),
            'separator' => $this->language->get('text_separator')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('checkout/oct_fastorder', '', 'SSL'),
            'separator' => $this->language->get('text_separator')
        );

        $data['logged']            = $this->customer->isLogged();
        $data['shipping_required'] = $this->cart->hasShipping();

        $this->load->model('setting/extension');

        $data['modules'] = [];

        $files = glob(DIR_APPLICATION . '/controller/extension/total/*.php');

        if ($files) {
            foreach ($files as $file) {
                $result = $this->load->controller('extension/total/' . basename($file, '.php'));
                if (basename($file, '.php') != 'shipping') {
                    if ($result) {
                        $data['modules'][] = $result;
                    }
                }
            }
        }

        $oct_data['breadcrumbs'] = $data['breadcrumbs'];

        $data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);

        $this->response->setOutput($this->load->view('checkout/oct_fastorder/fastorder', $data));
    }

    public function validate_form($data = array()) {
        $json = [];

        if (isset($this->request->request['register']) && !empty($this->request->request['register'])) {
            $json = $this->register_validate($data);
        } else {
            if (!isset($this->session->data['customer_id'])) {
                $json = $this->guest_validate($data);
            }
        }

        if (!isset($json['error'])) {
            $json = array_merge($json, $this->payment_address_validate());
        }

        if (!isset($json['error'])) {
            $json = array_merge($json, $this->shipping_address_validate());
        }

        if (!isset($json['error']) && !$this->customer->isLogged()) {
            $json = array_merge($json, $this->shipping_method_validate());
        }

        if (!isset($json['error'])) {
            $json = array_merge($json, $this->payment_method_validate());
        }

        $this->response->setOutput(json_encode($json));
    }

    public function country($data = array()) {
        $json = [];

        $this->load->model('localisation/country');

        $country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

        if ($country_info) {
            $this->load->model('localisation/zone');

            $json = array(
                'country_id' => $country_info['country_id'],
                'name' => $country_info['name'],
                'iso_code_2' => $country_info['iso_code_2'],
                'iso_code_3' => $country_info['iso_code_3'],
                'address_format' => $country_info['address_format'],
                'postcode_required' => $country_info['postcode_required'],
                'zone' => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
                'status' => $country_info['status']
            );
        }

        $this->response->setOutput(json_encode($json));
    }

    public function login_validate($data = array()) {
        $json = [];

        $this->load->language('octemplates/oct_fastorder');

        if ($this->customer->isLogged()) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder', '', 'SSL');
        }

        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder');
        }

        if (!$json) {
            if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
                $json['error']['warning'] = $this->language->get('error_login');
            }

            $this->load->model('account/customer');

            $customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

            if ($customer_info && !$customer_info['approved']) {
                $json['error']['warning'] = $this->language->get('error_approved');
            }
        }

        if (!$json) {
            unset($this->session->data['guest']);

            $this->load->model('account/address');

            $address_info = $this->model_account_address->getAddress($this->customer->getAddressId());

            if ($address_info) {
                if ($this->config->get('config_tax_customer') == 'payment') {
                    $this->session->data['payment_addess'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                if ($this->config->get('config_tax_customer') == 'shipping') {
                    $this->session->data['shipping_addess'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }
            } else {
                unset($this->session->data['shipping_country_id']);
                unset($this->session->data['shipping_zone_id']);
                unset($this->session->data['shipping_postcode']);
                unset($this->session->data['payment_country_id']);
                unset($this->session->data['payment_zone_id']);
            }

            $json['redirect'] = $this->url->link('checkout/oct_fastorder', '', 'SSL');
        }

        $this->response->setOutput(json_encode($json));
    }

    public function guest_validate() {
        $json = [];

        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        $this->load->language('octemplates/oct_fastorder');

        if ($this->customer->isLogged()) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder', '', 'SSL');
        }

        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder');
        }

        if (!$this->config->get('config_checkout_guest') || $this->config->get('config_customer_price') || $this->cart->hasDownload()) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder', '', 'SSL');
        }

        if (!$json) {
            if (isset($this->request->post['firstname']) && ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32))) {
                $json['error']['firstname'] = $this->language->get('error_firstname');
            }

            if ($oct_fastorder_data['lastname'] == 1) {
                if (isset($this->request->post['lastname']) && ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32))) {
                    $json['error']['lastname'] = $this->language->get('error_lastname');
                }
            }

            if (isset($this->request->post['email'])) {
                if ((isset($oct_fastorder_data['email']) && $oct_fastorder_data['email'] == 2)) {
                    if ((utf8_strlen(trim($this->request->post['email'])) < 1)) {
                        $json['error']['email'] = $this->language->get('error_email');
                    }

                    if (!preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email'])) {
                        $json['error']['email'] = $this->language->get('error_valid_email');
                    }
                }

                if ((isset($oct_fastorder_data['email']) && $oct_fastorder_data['email'] == 1)) {
                    if ((utf8_strlen(trim($this->request->post['email'])) > 1)) {
                        if (!preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email'])) {
                            $json['error']['email'] = $this->language->get('error_valid_email');
                        }
                    }
                }
            }

            if (isset($this->request->post['telephone']) && empty($this->request->post['telephone'])) {
                $json['error']['telephone'] = $this->language->get('error_telephone');
            } else {
                if (isset($this->request->post['telephone']) && !empty($oct_fastorder_data['mask'])) {
                    $phone_count = utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $oct_fastorder_data['mask']));

                    if (utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $this->request->post['telephone'])) < $phone_count) {
                        $json['error']['telephone'] = $this->language->get('error_telephone');
                    }
                } elseif (isset($this->request->post['telephone'])) {
                    if (utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $this->request->post['telephone'])) > 15 || utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $this->request->post['telephone'])) < 3) {
                        $json['error']['telephone'] = $this->language->get('error_telephone');
                    }
                }
            }

            if ($oct_fastorder_data['address_1'] == 2) {
                if (isset($this->request->post['address_1']) && ((utf8_strlen(trim($this->request->post['address_1'])) < 3) || (utf8_strlen(trim($this->request->post['address_1'])) > 128))) {
                    $json['error']['address_1'] = $this->language->get('error_address_1');
                }
            }

            if ($oct_fastorder_data['address_2'] == 2) {
                if (isset($this->request->post['address_2']) && ((utf8_strlen(trim($this->request->post['address_2'])) < 3) || (utf8_strlen(trim($this->request->post['address_2'])) > 128))) {
                    $json['error']['address_2'] = $this->language->get('error_address_1');
                }
            }

            if ($oct_fastorder_data['city'] == 2) {
				if (isset($this->request->post['city']) && ((utf8_strlen(trim($this->request->post['city'])) < 2) || (utf8_strlen(trim($this->request->post['city'])) > 128))) {
					$json['error']['city'] = $this->language->get('error_city');
				}
            }

            $country_info = [];

            $this->load->model('localisation/country');

            if (isset($this->request->post['country_id'])) {
                $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);
            }

            if ($country_info && $country_info['postcode_required'] && (utf8_strlen(trim($this->request->post['postcode'])) < 2 || utf8_strlen(trim($this->request->post['postcode'])) > 10)) {
                $json['error']['postcode'] = $this->language->get('error_postcode');
            }

            if (isset($this->request->post['country_id']) && $this->request->post['country_id'] == '') {
                $json['error']['country']    = $this->language->get('error_country');
                $json['error']['country_id'] = $this->language->get('error_country');
            }

            if (!isset($this->request->post['zone_id']) || $this->request->post['zone_id'] == '') {
                $json['error']['zone']    = $this->language->get('error_zone');
                $json['error']['zone_id'] = $this->language->get('error_zone');
            }

            if (isset($this->request->post['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->post['customer_group_id'], $this->config->get('config_customer_group_display'))) {
                $customer_group_id = $this->request->post['customer_group_id'];
            } else {
                $customer_group_id = $this->config->get('config_customer_group_id');
            }

            $this->load->model('account/custom_field');

            $custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);
            foreach ($custom_fields as $custom_field) {
                if (($custom_field['location'] == 'account') && $custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
                    $json['error']['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                } elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array(
                    'options' => array(
                        'regexp' => $custom_field['validation']
                    )
                ))) {
                    $json['error']['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                }
            }
        }

        if (!$json) {
            $this->session->data['account'] = 'guest';

            $this->session->data['guest']['customer_group_id'] = $customer_group_id;
            $this->session->data['guest']['firstname']         = (isset($this->request->post['firstname']) && !empty($this->request->post['firstname'])) ? $this->request->post['firstname'] : '';
            $this->session->data['guest']['lastname']          = (isset($this->request->post['lastname']) && !empty($this->request->post['lastname'])) ? $this->request->post['lastname'] : '';
            $this->session->data['guest']['email']             = (isset($this->request->post['email']) && !empty($this->request->post['email'])) ? $this->request->post['email'] : '';
            $this->session->data['guest']['telephone']         = (isset($this->request->post['telephone']) && !empty($this->request->post['telephone'])) ? $this->request->post['telephone'] : '';
            $this->session->data['guest']['fax']               = (isset($this->request->post['fax']) && !empty($this->request->post['fax'])) ? $this->request->post['fax'] : '';

            if (isset($this->request->post['custom_field']['account'])) {
                $this->session->data['guest']['custom_field'] = $this->request->post['custom_field']['account'];
            } else {
                $this->session->data['guest']['custom_field'] = [];
            }

            $this->session->data['payment_address']['firstname']  = (isset($this->request->post['firstname']) && !empty($this->request->post['firstname'])) ? $this->request->post['firstname'] : '';
            $this->session->data['payment_address']['lastname']   = (isset($this->request->post['lastname']) && !empty($this->request->post['lastname'])) ? $this->request->post['lastname'] : '';
            $this->session->data['payment_address']['company']    = (isset($this->request->post['company']) && !empty($this->request->post['company'])) ? $this->request->post['company'] : '';
            $this->session->data['payment_address']['address_1']  = (isset($this->request->post['address_1']) && !empty($this->request->post['address_1'])) ? $this->request->post['address_1'] : '';
            $this->session->data['payment_address']['address_2']  = (isset($this->request->post['address_2']) && !empty($this->request->post['address_2'])) ? $this->request->post['address_2'] : '';
            $this->session->data['payment_address']['postcode']   = (isset($this->request->post['postcode']) && !empty($this->request->post['postcode'])) ? $this->request->post['postcode'] : '';
            $this->session->data['payment_address']['city']       = (isset($this->request->post['city']) && !empty($this->request->post['city'])) ? $this->request->post['city'] : '';
            $this->session->data['payment_address']['country_id'] = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';
            $this->session->data['payment_address']['zone_id']    = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';

            $this->load->model('localisation/country');

            $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

            if ($country_info) {
                $this->session->data['payment_address']['country']        = $country_info['name'];
                $this->session->data['payment_address']['iso_code_2']     = $country_info['iso_code_2'];
                $this->session->data['payment_address']['iso_code_3']     = $country_info['iso_code_3'];
                $this->session->data['payment_address']['address_format'] = $country_info['address_format'];
            } else {
                $this->session->data['payment_address']['country']        = '';
                $this->session->data['payment_address']['iso_code_2']     = '';
                $this->session->data['payment_address']['iso_code_3']     = '';
                $this->session->data['payment_address']['address_format'] = '';
            }

            if (isset($this->request->post['custom_field']['address'])) {
                $this->session->data['payment_address']['custom_field'] = $this->request->post['custom_field']['address'];
            } else {
                $this->session->data['payment_address']['custom_field'] = [];
            }

            $this->load->model('localisation/zone');

            $zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);

            if ($zone_info) {
                $this->session->data['payment_address']['zone']      = $zone_info['name'];
                $this->session->data['payment_address']['zone_code'] = $zone_info['code'];
            } else {
                $this->session->data['payment_address']['zone']      = '';
                $this->session->data['payment_address']['zone_code'] = '';
            }

            if (!empty($this->request->post['shipping_address'])) {
                $this->session->data['guest']['shipping_address'] = $this->request->post['shipping_address'];
            } else {
                $this->session->data['guest']['shipping_address'] = false;
            }

            // Default Payment Address
            if ($this->session->data['guest']['shipping_address'] || $this->session->data['shipping_address']) {
                $this->session->data['shipping_address']['firstname']  = (isset($this->request->post['firstname']) && !empty($this->request->post['firstname'])) ? $this->request->post['firstname'] : '';
                $this->session->data['shipping_address']['lastname']   = (isset($this->request->post['lastname']) && !empty($this->request->post['lastname'])) ? $this->request->post['lastname'] : '';
                $this->session->data['shipping_address']['company']    = (isset($this->request->post['company']) && !empty($this->request->post['company'])) ? $this->request->post['company'] : '';
                $this->session->data['shipping_address']['address_1']  = (isset($this->request->post['address_1']) && !empty($this->request->post['address_1'])) ? $this->request->post['address_1'] : '';
                $this->session->data['shipping_address']['address_2']  = (isset($this->request->post['address_2']) && !empty($this->request->post['address_2'])) ? $this->request->post['address_2'] : '';
                $this->session->data['shipping_address']['postcode']   = (isset($this->request->post['postcode']) && !empty($this->request->post['postcode'])) ? $this->request->post['postcode'] : '';
                $this->session->data['shipping_address']['city']       = (isset($this->request->post['city']) && !empty($this->request->post['city'])) ? $this->request->post['city'] : '';
                $this->session->data['shipping_address']['country_id'] = (isset($this->request->post['country_id']) && !empty($this->request->post['country_id'])) ? $this->request->post['country_id'] : '';
                $this->session->data['shipping_address']['zone_id']    = (isset($this->request->post['zone_id']) && !empty($this->request->post['zone_id'])) ? $this->request->post['zone_id'] : '';

                if ($country_info) {
                    $this->session->data['shipping_address']['country']        = $country_info['name'];
                    $this->session->data['shipping_address']['iso_code_2']     = $country_info['iso_code_2'];
                    $this->session->data['shipping_address']['iso_code_3']     = $country_info['iso_code_3'];
                    $this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
                } else {
                    $this->session->data['shipping_address']['country']        = '';
                    $this->session->data['shipping_address']['iso_code_2']     = '';
                    $this->session->data['shipping_address']['iso_code_3']     = '';
                    $this->session->data['shipping_address']['address_format'] = '';
                }

                if ($zone_info) {
                    $this->session->data['shipping_address']['zone']      = $zone_info['name'];
                    $this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
                } else {
                    $this->session->data['shipping_address']['zone']      = '';
                    $this->session->data['shipping_address']['zone_code'] = '';
                }

                if (isset($this->request->post['custom_field']['address'])) {
                    $this->session->data['shipping_address']['custom_field'] = $this->request->post['custom_field']['address'];
                } else {
                    $this->session->data['shipping_address']['custom_field'] = [];
                }
            }
        }

        return $json;
    }

    public function register_validate(&$data = array()) {
        $json = [];

        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        $this->load->language('octemplates/oct_fastorder');
        $this->load->model('account/customer');

        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder');
        }

        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['redirect'] = $this->url->link('checkout/oct_fastorder');

                break;
            }
        }

        if (!$json) {
            $this->load->model('account/customer');

            if (isset($this->request->post['firstname']) && ((utf8_strlen($this->request->post['firstname']) < 1) || (utf8_strlen($this->request->post['firstname']) > 32))) {
                $json['error']['firstname'] = $this->language->get('error_firstname');
            }

            if ($oct_fastorder_data['lastname'] == 1) {
                if (isset($this->request->post['lastname']) && ((utf8_strlen($this->request->post['lastname']) < 1) || (utf8_strlen($this->request->post['lastname']) > 32))) {
                    $json['error']['lastname'] = $this->language->get('error_lastname');
                }
            }

            if (isset($this->request->post['email'])) {
                if ((isset($oct_fastorder_data['email']) && $oct_fastorder_data['email'] == 2)) {
                    if ((utf8_strlen(trim($this->request->post['email'])) < 1)) {
                        $json['error']['email'] = $this->language->get('error_email');
                    }

                    if (!preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email'])) {
                        $json['error']['email'] = $this->language->get('error_valid_email');
                    }
                }

                if ((isset($oct_fastorder_data['email']) && $oct_fastorder_data['email'] == 1)) {
                    if ((utf8_strlen(trim($this->request->post['email'])) > 1)) {
                        if (!preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email'])) {
                            $json['error']['email'] = $this->language->get('error_valid_email');
                        }
                    }
                }
            }

            if (isset($this->request->post['email']) && ($this->model_account_customer->getTotalCustomersByEmail($this->request->post['email']))) {
                $json['error']['warning_user_exist'] = $this->language->get('error_exists');
            }

            if (isset($this->request->post['telephone']) && empty($this->request->post['telephone'])) {
                $json['error']['telephone'] = $this->language->get('error_telephone');
            } else {
                if (isset($this->request->post['telephone']) && !empty($oct_fastorder_data['mask'])) {
                    $phone_count = utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $oct_fastorder_data['mask']));

                    if (utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $this->request->post['telephone'])) < $phone_count) {
                        $json['error']['telephone'] = $this->language->get('error_telephone');
                    }
                } elseif (isset($this->request->post['telephone'])) {
                    if (utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $this->request->post['telephone'])) > 15 || utf8_strlen(str_replace(array('_','-','(',')','+',' '), "", $this->request->post['telephone'])) < 3) {
                        $json['error']['telephone'] = $this->language->get('error_telephone');
                    }
                }
            }

            $this->load->model('account/customer_group');

            if (isset($this->request->post['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->post['customer_group_id'], $this->config->get('config_customer_group_display'))) {
                $customer_group_id = $this->request->post['customer_group_id'];
            } else {
                $customer_group_id = $this->config->get('config_customer_group_id');
            }

            $customer_group = $this->model_account_customer_group->getCustomerGroup($customer_group_id);

            if ($oct_fastorder_data['address_1'] == 2) {
                if (isset($this->request->post['address_1']) && ((utf8_strlen($this->request->post['address_1']) < 3) || (utf8_strlen($this->request->post['address_1']) > 128))) {
                    $json['error']['address_1'] = $this->language->get('error_address');
                }
            }

            if ($oct_fastorder_data['address_2'] == 2) {
                if (isset($this->request->post['address_2']) && ((utf8_strlen($this->request->post['address_2']) < 3) || (utf8_strlen($this->request->post['address_2']) > 128))) {
                    $json['error']['address_2'] = $this->language->get('error_address');
                }
            }

			if ($oct_fastorder_data['city'] == 2) {
				if (isset($this->request->post['city']) && ((utf8_strlen($this->request->post['city']) < 2) || (utf8_strlen($this->request->post['city']) > 128))) {
					$json['error']['city'] = $this->language->get('error_city');
				}
            }

            $this->load->model('localisation/country');

            $country_info = $this->model_localisation_country->getCountry(isset($this->request->post['country_id']) ? $this->request->post['country_id'] : 0);

            if ($country_info) {
                if ($country_info['postcode_required'] && (utf8_strlen($this->request->post['postcode']) < 2) || (utf8_strlen($this->request->post['postcode']) > 10)) {
                    $json['error']['postcode'] = $this->language->get('error_postcode');
                }
            }

            if (!isset($this->request->post['country_id']) || $this->request->post['country_id'] == '') {
                $json['error']['country_id'] = $this->language->get('error_country');
            }

            if (!isset($this->request->post['zone_id']) || $this->request->post['zone_id'] == '') {
                $json['error']['zone_id'] = $this->language->get('error_zone');
            }

            if (isset($this->request->post['register']) && ((utf8_strlen($this->request->post['password']) < 4) || (utf8_strlen($this->request->post['password']) > 20))) {
                $json['error']['password'] = $this->language->get('error_password');
            }

            if (isset($this->request->post['confirm']) && ($this->request->post['confirm'] != $this->request->post['password'])) {
                $json['error']['confirm'] = $this->language->get('error_confirm');
            }

            if ($this->config->get('config_checkout_id')) {
                $this->load->model('catalog/information');

                $information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

                if ($information_info && !isset($this->request->post['agree'])) {
                    $json['error']['agree'] = sprintf($this->language->get('error_agree'), $information_info['title']);
                }
            }

            $this->load->model('account/custom_field');

            $custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

            foreach ($custom_fields as $custom_field) {
                if (($custom_field['location'] == 'account') && $custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
                    $json['error']['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                } elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array(
                    'options' => array(
                        'regexp' => $custom_field['validation']
                    )
                ))) {
                    $json['error']['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                }
            }
        }

        if (!$json) {
            $this->session->data['account'] = 'register';

            if (!$this->customer->isLogged()) {
                $this->session->data['checkout_customer_id'] = $customer_id = $this->model_account_customer->addCustomer($this->request->post);
            }

            $this->load->model('account/customer_group');

            $customer_group = $this->model_account_customer_group->getCustomerGroup($customer_group_id);

            if ($customer_group && !$customer_group['approval']) {
                $this->customer->login($this->request->post['email'], $this->request->post['password']);

                // Default Payment Address
                $this->load->model('account/address');

                $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());

                if (!empty($this->request->post['shipping_address'])) {
                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }
            } else {
                $json['redirect'] = $this->url->link('account/success');
            }

            unset($this->session->data['guest']);

            // Add to activity log
            if ($this->config->get('config_customer_activity') && isset($this->session->data['checkout_customer_id'])) {
                $this->load->model('account/activity');

                $activity_data = array(
                    'customer_id' => $this->session->data['checkout_customer_id'],
                    'name' => $this->request->post['firstname'] . ' ' . $this->request->post['lastname']
                );

                $this->model_account_activity->addActivity('register', $activity_data);
            }
        }

        return $json;
    }

    public function payment_address_validate(&$data = array()) {
        $json               = [];
        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        $this->load->language('octemplates/oct_fastorder');

        // Validate minimum quantity requirments.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['redirect'] = $this->url->link('checkout/oct_fastorder');
                break;
            }
        }

        if (!$json) {
            if (isset($this->request->post['payment_address']) && $this->request->post['payment_address'] == 'existing') {
                $this->load->model('account/address');

                if (empty($this->request->post['payment_address_id'])) {
                    $json['error']['warning'] = $this->language->get('error_address');
                } elseif (!in_array($this->request->post['payment_address_id'], array_keys($this->model_account_address->getAddresses()))) {
                    $json['error']['warning'] = $this->language->get('error_address');
                }

                if (!$json) {
                    // Default Payment Address
                    $this->load->model('account/address');

                    $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->request->post['payment_address_id']);
                }
            } else {

                if (!isset($this->request->post['firstname']) || ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32))) {
                    $json['error']['firstname'] = $this->language->get('error_firstname');
                }

                if ($oct_fastorder_data['lastname'] == 1) {
                    if (!isset($this->request->post['lastname']) || ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32))) {
                        $json['error']['lastname'] = $this->language->get('error_lastname');
                    }
                }

                if ($oct_fastorder_data['address_1'] == 2) {
                    if (!isset($this->request->post['address_1']) || ((utf8_strlen(trim($this->request->post['address_1'])) < 3) || (utf8_strlen(trim($this->request->post['address_1'])) > 128))) {
                        $json['error']['address_1'] = $this->language->get('error_address_1');
                    }
                }

                if ($oct_fastorder_data['address_2'] == 2) {
                    if (!isset($this->request->post['address_2']) || ((utf8_strlen(trim($this->request->post['address_2'])) < 3) || (utf8_strlen(trim($this->request->post['address_2'])) > 128))) {
                        $json['error']['address_2'] = $this->language->get('error_address_1');
                    }
                }

				if ($oct_fastorder_data['city'] == 2) {
					if (!isset($this->request->post['city']) || ((utf8_strlen($this->request->post['city']) < 2) || (utf8_strlen($this->request->post['city']) > 32))) {
						$json['error']['city'] = $this->language->get('error_city');
					}
                }

                $this->load->model('localisation/country');

                if (isset($this->request->post['country_id']))
                    $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

                if (isset($country_info) && $country_info['postcode_required'] && (utf8_strlen(trim($this->request->post['postcode'])) < 2 || utf8_strlen(trim($this->request->post['postcode'])) > 10)) {
                    $json['error']['postcode'] = $this->language->get('error_postcode');
                }

                if (!isset($this->request->post['country_id']) || ($this->request->post['country_id'] == '')) {
                    $json['error']['country_id'] = $this->language->get('error_country');
                }

                if (!isset($this->request->post['zone_id']) || $this->request->post['zone_id'] == '') {
                    $json['error']['zone_id'] = $this->language->get('error_zone');
                }

                // Custom field validation
                $this->load->model('account/custom_field');

                $custom_fields = $this->model_account_custom_field->getCustomFields($this->config->get('config_customer_group_id'));

                foreach ($custom_fields as $custom_field) {

                    if (($custom_field['location'] == 'address') && $custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
                        $json['error']['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                    } elseif (($custom_field['location'] == 'address') && ($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array(
                        'options' => array(
                            'regexp' => $custom_field['validation']
                        )
                    ))) {
                        $json['error']['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
                    }
                }

                if (!$json && $this->customer->isLogged()) {

                    // Default Payment Address
                    $this->load->model('account/address');

                    $this->request->post['default'] = 1;

                    $address_id = $this->model_account_address->addAddress($this->customer->getId(), $this->request->post);

                    $this->session->data['payment_address'] = $this->model_account_address->getAddress($address_id);
                }
            }
        }

        return $json;
    }

    public function shipping_address_validate(&$data = array()) {
        $json               = [];
        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        $this->load->language('octemplates/oct_fastorder');

        // Validate minimum quantity requirments.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['redirect'] = $this->url->link('checkout/oct_fastorder');
                break;
            }
        }

        if (!$json) {
            if (isset($this->request->post['shipping_address']) && $this->request->post['shipping_address'] == 'existing') {
                $this->load->model('account/address');

                if (empty($this->request->post['shipping_address_id'])) {
                    $json['error']['warning'] = $this->language->get('error_address');
                } elseif (!in_array($this->request->post['shipping_address_id'], array_keys($this->model_account_address->getAddresses()))) {
                    $json['error']['warning'] = $this->language->get('error_address');
                }

                if (!$json) {
                    $this->session->data['shipping_address_id'] = (isset($this->request->post['shipping_address_id']) && !empty($this->request->post['shipping_address_id'])) ? $this->request->post['shipping_address_id'] : '';

                    // Default Shipping Address
                    $this->load->model('account/address');

                    $address_info = $this->model_account_address->getAddress($this->request->post['shipping_address_id']);

                    if ($address_info) {
                        $this->session->data['shipping_country_id'] = $address_info['country_id'];
                        $this->session->data['shipping_zone_id']    = $address_info['zone_id'];
                        $this->session->data['shipping_postcode']   = $address_info['postcode'];
                    } else {
                        unset($this->session->data['shipping_country_id']);
                        unset($this->session->data['shipping_zone_id']);
                        unset($this->session->data['shipping_postcode']);
                    }
                }
            }

            if (isset($this->request->post['shipping_address']) && $this->request->post['shipping_address'] == 'new') {
                if ((utf8_strlen($this->request->post['shipping_firstname']) < 1) || (utf8_strlen($this->request->post['shipping_firstname']) > 32)) {
                    $json['error']['shipping_firstname'] = $this->language->get('error_firstname');
                }

                if ($oct_fastorder_data['lastname'] == 1) {
                    if ((utf8_strlen($this->request->post['shipping_lastname']) < 1) || (utf8_strlen($this->request->post['shipping_lastname']) > 32)) {
                        $json['error']['shipping_lastname'] = $this->language->get('error_lastname');
                    }
                }

                if ($oct_fastorder_data['address_1'] == 2) {
                    if ((utf8_strlen($this->request->post['shipping_address_1']) < 3) || (utf8_strlen($this->request->post['shipping_address_1']) > 128)) {
                        $json['error']['shipping_address_1'] = $this->language->get('error_address_1');
                    }
                }

                if ($oct_fastorder_data['address_2'] == 2) {
                    if ((utf8_strlen($this->request->post['shipping_address_2']) < 3) || (utf8_strlen($this->request->post['shipping_address_2']) > 128)) {
                        $json['error']['shipping_address_2'] = $this->language->get('error_address_1');
                    }
                }

				if ($oct_fastorder_data['city'] == 2) {
					if ((utf8_strlen($this->request->post['shipping_city']) < 2) || (utf8_strlen($this->request->post['shipping_city']) > 128)) {
						$json['error']['shipping_city'] = $this->language->get('error_city');
					}
                }

                $this->load->model('localisation/country');

                $country_info = $this->model_localisation_country->getCountry($this->request->post['shipping_country_id']);

                if ($country_info && $country_info['postcode_required'] && (utf8_strlen($this->request->post['shipping_postcode']) < 2) || (utf8_strlen($this->request->post['shipping_postcode']) > 10)) {
                    $json['error']['shipping_postcode'] = $this->language->get('error_postcode');
                }

                if ($this->request->post['shipping_country_id'] == '') {
                    $json['error']['shipping_country'] = $this->language->get('error_country');
                }

                if (!isset($this->request->post['shipping_zone_id']) || $this->request->post['shipping_zone_id'] == '') {
                    $json['error']['shipping_zone'] = $this->language->get('error_zone');
                }

                if (!$json) {
                    // Default Shipping Address
                    $this->load->model('account/address');

                    $shipping_address = [];

                    foreach ($this->request->post as $key => $value) {
                        if (strpos($key, 'shipping_') !== false) {
                            $shipping_address[str_replace('shipping_', '', $key)] = $value;
                        }
                    }

                    $this->session->data['shipping_address_id'] = $this->model_account_address->addAddress($shipping_address);
                    $this->shipping_country_id->data['shipping_country_id'] = (isset($this->request->post['shipping_country_id']) && !empty($this->request->post['shipping_country_id'])) ? $this->request->post['shipping_address_id'] : '';
                    $this->session->data['shipping_zone_id']    = (isset($this->request->post['shipping_zone_id']) && !empty($this->request->post['shipping_zone_id'])) ? $this->request->post['shipping_zone_id'] : '';
                    $this->session->data['shipping_postcode']   = (isset($this->request->post['shipping_postcode']) && !empty($this->request->post['shipping_postcode'])) ? $this->request->post['shipping_postcode'] : '';
                }
            }
        }

        return $json;
    }

    public function shipping_method_validate(&$data = array()) {
        $json = [];

        $this->load->language('octemplates/oct_fastorder');

        $this->load->model('account/address');

        if ($this->customer->isLogged() && isset($this->session->data['shipping_address_id'])) {
            $shipping_address = $this->model_account_address->getAddress($this->session->data['shipping_address_id']);
        } elseif (isset($this->session->data['guest'])) {
            $shipping_address = isset($this->session->data['guest']['shipping']) ? $this->session->data['guest']['shipping'] : '';
        }

        // Validate minimum quantity requirments.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['redirect'] = $this->url->link('checkout/oct_fastorder');
                break;
            }
        }

        if (!$json) {
            if (!isset($this->request->post['shipping_method'])) {
                $json['error']['warning'] = $this->language->get('error_shipping');
            } else {
                $shipping = explode('.', $this->request->post['shipping_method']);
                if (!isset($shipping[0]) || !isset($shipping[1])) {
                    $json['error']['warning'] = $this->language->get('error_shipping');
                }
            }

            if (!$json) {
                $shipping = explode('.', $this->request->post['shipping_method']);

                if (isset($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]]))
                    $this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];

                $this->session->data['comment'] = (isset($this->request->post['comment'])) ? strip_tags($this->request->post['comment']) : '';
            }
        }

        return $json;
    }

    public function payment_method_validate(&$data = array()) {
        $json = [];

        $this->load->language('octemplates/oct_fastorder');

        // Validate if payment address has been set.
        $this->load->model('account/address');

        if ($this->customer->isLogged() && isset($this->session->data['payment_address_id'])) {
            $payment_address = $this->model_account_address->getAddress($this->session->data['payment_address_id']);
        } elseif (isset($this->session->data['guest']['payment'])) {
            $payment_address = $this->session->data['guest']['payment'];
        } else {
            $payment_address = $this->model_account_address->getAddress(0);
        }

        // Validate minimum quantity requirments.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $json['redirect'] = $this->url->link('checkout/oct_fastorder');

                break;
            }
        }

        if (!$json) {
            if (!isset($this->request->post['payment_method'])) {
                $json['error']['warning'] = $this->language->get('error_payment');
            } elseif (!isset($this->session->data['payment_methods'][$this->request->post['payment_method']])) {
                $json['error']['warning'] = $this->language->get('error_payment');
            }

            if ($this->config->get('config_checkout_id')) {
                $this->load->model('catalog/information');

                $information_info = $this->model_catalog_information->getInformation($this->config->get('config_checkout_id'));

                if ($information_info && !isset($this->request->post['agree'])) {
                    $json['error']['warning_agree'] = sprintf($this->language->get('error_agree'), $information_info['title']);
                }
            }

            if (!$json) {
                $this->session->data['payment_method'] = $this->session->data['payment_methods'][$this->request->post['payment_method']];
                $this->session->data['comment']        = (isset($this->request->post['comment'])) ? strip_tags($this->request->post['comment']) : '';
            }
        }

        return $json;
    }


    public function guest($render = false, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');

        $oct_fastorder_data = $this->config->get('oct_fastorder_data');

        if (isset($this->session->data['guest']['firstname'])) {
            $data['firstname'] = $this->session->data['guest']['firstname'];
        }

        if (isset($this->session->data['guest']['lastname'])) {
            $data['lastname'] = $this->session->data['guest']['lastname'];
        } 

        if (isset($this->session->data['guest']['email'])) {
            $data['email'] = $this->session->data['guest']['email'];
        } 

        if (isset($this->session->data['guest']['telephone'])) {
            $data['telephone'] = $this->session->data['guest']['telephone'];
        } 

        if (isset($this->session->data['guest']['fax'])) {
            $data['fax'] = $this->session->data['guest']['fax'];
        }

        if (isset($this->session->data['guest']['payment']['company'])) {
            $data['company'] = $this->session->data['guest']['payment']['company'];
        } 

        $this->load->model('account/customer_group');

        $data['customer_groups'] = [];
        $data['approve'] = false;

        if (is_array($this->config->get('config_customer_group_display'))) {
            $customer_groups = $this->model_account_customer_group->getCustomerGroups();

            foreach ($customer_groups as $customer_group) {
                if (in_array($customer_group['customer_group_id'], $this->config->get('config_customer_group_display'))) {

                    if ($customer_group['customer_group_id'] == $this->config->get('config_customer_group_id') && $customer_group['approval']) {
                        $data['customer_groups'] = [];
                        $data['approve'] = true;
                        return;
                    }

                    $data['customer_groups'][] = $customer_group;
                }
            }
        }

        if (isset($this->session->data['guest']['customer_group_id'])) {
            $data['customer_group_id'] = $this->session->data['guest']['customer_group_id'];
        } 

        if (isset($this->session->data['guest']['payment']['company_id'])) {
            $data['company_id'] = $this->session->data['guest']['payment']['company_id'];
        } 

        if (isset($this->session->data['guest']['payment']['tax_id'])) {
            $data['tax_id'] = $this->session->data['guest']['payment']['tax_id'];
        } 

        if (isset($this->session->data['guest']['payment']['address_1'])) {
            $data['address_1'] = $this->session->data['guest']['payment']['address_1'];
        } 

        if (isset($this->session->data['guest']['payment']['address_2'])) {
            $data['address_2'] = $this->session->data['guest']['payment']['address_2'];
        } 

        if (isset($this->session->data['guest']['payment']['postcode'])) {
            $data['postcode'] = $this->session->data['guest']['payment']['postcode'];
        } elseif (isset($this->session->data['shipping_postcode'])) {
            $data['postcode'] = $this->session->data['shipping_postcode'];
        } 

        if (isset($this->session->data['guest']['payment']['city'])) {
            $data['city'] = $this->session->data['guest']['payment']['city'];
        } 

        if (isset($this->session->data['guest']['payment']['country_id']) && $this->session->data['guest']['payment']['country_id']) {
            $data['country_id'] = $this->session->data['guest']['payment']['country_id'];
        } elseif (isset($this->session->data['shipping_country_id']) && $this->session->data['shipping_country_id']) {
            $data['country_id'] = $this->session->data['shipping_country_id'];
        } 

        if (isset($this->session->data['guest']['payment']['zone_id'])) {
            $data['zone_id'] = $this->session->data['guest']['payment']['zone_id'];
        } elseif (isset($this->session->data['shipping_zone_id'])) {
            $data['zone_id'] = $this->session->data['shipping_zone_id'];
        } 

        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();

        $data['shipping_required'] = $this->cart->hasShipping();

        if (isset($this->session->data['guest']['shipping_address'])) {
            $data['shipping_address'] = $this->session->data['guest']['shipping_address'];
        } 

        if ($render !== false) {
            $this->response->setOutput($this->load->view('checkout/checkout/guest', $data));
        }
    }

    public function login($render = false, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');

        $data['guest_checkout'] = ($this->config->get('config_guest_checkout') && !$this->config->get('config_customer_price') && !$this->cart->hasDownload());

        if (isset($this->session->data['account'])) {
            $data['account'] = $this->session->data['account'];
        } else {
            $data['account'] = 'register';
        }

        $data['forgotten'] = $this->url->link('account/forgotten', '', 'SSL');

        if ($render !== false) {
            $this->response->setOutput($this->load->view('checkout/checkout/login', $data));
        }
    }

    public function cart($render = true, &$data = array()) {
        $this->shipping_method_validate();

        $oct_fastorder_data         = $this->config->get('oct_fastorder_data');
        $data['oct_fastorder_data'] = $oct_fastorder_data;

        $this->load->language('octemplates/oct_fastorder');

        if (!isset($this->session->data['vouchers'])) {
            $this->session->data['vouchers'] = [];
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = array(
            'href' => $this->url->link('common/home'),
            'text' => $this->language->get('text_home'),
            'separator' => false
        );

        $data['breadcrumbs'][] = array(
            'href' => $this->url->link('checkout/cart'),
            'text' => $this->language->get('heading_title'),
            'separator' => $this->language->get('text_separator')
        );

        $points = $this->customer->getRewardPoints();

        $points_total = 0;

        foreach ($this->cart->getProducts() as $product) {
            if ($product['points']) {
                $points_total += $product['points'];
            }
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } elseif (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
            $data['error_warning'] = $this->language->get('error_stock');
        } else {
            $data['error_warning'] = '';
        }

        if ($this->config->get('config_customer_price') && !$this->customer->isLogged()) {
            $data['attention'] = sprintf($this->language->get('text_login'), $this->url->link('account/login'), $this->url->link('account/register'));
        } else {
            $data['attention'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if ($this->config->get('config_cart_weight') && (isset($oct_fastorder_data['cart_weight']) && $oct_fastorder_data['cart_weight'] == 1)) {
            $data['weight'] = $this->weight->format($this->cart->getWeight(), $this->config->get('config_weight_class_id'), $this->language->get('decimal_point'), $this->language->get('thousand_point'));
        } else {
            $data['weight'] = '';
        }

        // Shopping Cart
        if (isset($this->request->request['remove'])) {
            $this->cart->remove($this->request->request['remove']);
            unset($this->session->data['vouchers'][$this->request->request['remove']]);
        }

        if (isset($this->request->request['update'])) {
            $this->cart->update($this->request->request['update'], $this->request->request['quantity']);
        }

        if (isset($this->request->request['add'])) {
            $this->cart->add($this->request->request['add'], $this->request->request['quantity']);
        }

        $this->load->model('tool/image');
        $this->load->model('tool/upload');

        $data['products'] = [];

        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
            }

            if ($product['image']) {
                $image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
            } else {
                $image = '';
            }

            $option_data = [];

            foreach ($product['option'] as $option) {
                if ($option['type'] != 'file') {
                    $value = $option['value'];
                } else {
                    $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                    if ($upload_info) {
                        $value = $upload_info['name'];
                    } else {
                        $value = '';
                    }
                }

                $option_data[] = array(
                    'name' => $option['name'],
                    'sku' => (isset($option['sku'])) ? $option['sku'] : '',
                    'model' => (isset($option['model'])) ? $option['model'] : '',
                    'oct_quantity_value' => (isset($option['oct_quantity_value'])) ? $option['oct_quantity_value'] : '',
                    'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                );
            }

            // Display prices
            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            // Display prices
            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $total = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']);
            } else {
                $total = false;
            }

            $recurring = '';

            if ($product['recurring']) {
                $frequencies = array(
                    'day' => $this->language->get('text_day'),
                    'week' => $this->language->get('text_week'),
                    'semi_month' => $this->language->get('text_semi_month'),
                    'month' => $this->language->get('text_month'),
                    'year' => $this->language->get('text_year')
                );

                if ($product['recurring']['trial']) {
                    $recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
                }

                if ($product['recurring']['duration']) {
                    $recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                } else {
                    $recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                }
            }

            $data['products'][] = array(
                'key' => $product['cart_id'],
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'model' => $product['model'],
                'option' => $option_data,
                'recurring' => $recurring,
                'quantity' => $product['quantity'],
                'stock' => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
                'reward' => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
                'price' => $price,
                'total' => $total,
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        $data['products_recurring'] = [];

        // Gift Voucher
        $data['vouchers'] = [];

        if (!empty($this->session->data['vouchers'])) {
            foreach ($this->session->data['vouchers'] as $key => $voucher) {
                $data['vouchers'][] = array(
                    'key' => $key,
                    'description' => $voucher['description'],
                    'amount' => $this->currency->format($voucher['amount'], $this->session->data['currency']),
                    'remove' => $this->url->link('checkout/cart', 'remove=' . $key)
                );
            }
        }

        $data['coupon_status'] = $this->config->get('coupon_status');

        if (isset($this->request->post['coupon'])) {
            $data['coupon'] = $this->request->post['coupon'];
        } elseif (isset($this->session->data['coupon'])) {
            $data['coupon'] = $this->session->data['coupon'];
        } else {
            $data['coupon'] = '';
        }

        $data['voucher_status'] = $this->config->get('voucher_status');

        if (isset($this->request->post['voucher'])) {
            $data['voucher'] = $this->request->post['voucher'];
        } elseif (isset($this->session->data['voucher'])) {
            $data['voucher'] = $this->session->data['voucher'];
        } else {
            $data['voucher'] = '';
        }

        $data['reward_status'] = ($points && $points_total && $this->config->get('reward_status'));

        if (isset($this->request->post['reward'])) {
            $data['reward'] = $this->request->post['reward'];
        } elseif (isset($this->session->data['reward'])) {
            $data['reward'] = $this->session->data['reward'];
        } else {
            $data['reward'] = '';
        }

        $this->load->model('setting/extension');

        $data['modules'] = [];

        $files = glob(DIR_APPLICATION . '/controller/extension/total/*.php');

        if ($files) {
            foreach ($files as $file) {
                $result = $this->load->controller('extension/total/' . basename($file, '.php'));
                if (basename($file, '.php') != 'shipping') {
                    if ($result) {
                        $data['modules'][] = $result;
                    }
                }
            }
        }

        $data['shipping_status'] = $this->config->get('shipping_status') && $this->config->get('shipping_estimator') && $this->cart->hasShipping();

        if (isset($this->request->post['country_id']) && $this->request->post['country_id']) {
            $data['country_id'] = $this->request->post['country_id'];
        } elseif (isset($this->session->data['shipping_country_id']) && $this->session->data['shipping_country_id']) {
            $data['country_id'] = $this->session->data['shipping_country_id'];
        } else {
            $data['country_id'] = $oct_fastorder_data['default_country'];
        }

        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();

        if (isset($this->request->post['zone_id'])) {
            $data['zone_id'] = $this->request->post['zone_id'];
        } elseif (isset($this->session->data['shipping_zone_id'])) {
            $data['zone_id'] = $this->session->data['shipping_zone_id'];
        } else {
            $data['zone_id'] = '';
        }

        if (isset($this->request->post['postcode'])) {
            $data['postcode'] = $this->request->post['postcode'];
        } elseif (isset($this->session->data['shipping_postcode'])) {
            $data['postcode'] = $this->session->data['shipping_postcode'];
        } else {
            $data['postcode'] = '';
        }

        if (isset($this->session->data['shipping_method'])) {
            $data['shipping_method'] = $this->session->data['shipping_method']['code'];
        } else {
            $data['shipping_method'] = '';
        }

        // Totals
        $this->load->model('setting/extension');

        $totals = array();
        $taxes = $this->cart->getTaxes();
        $total = 0;
        
        // Because __call can not keep var references so we put them into an array. 			
        $total_data = array(
            'totals' => &$totals,
            'taxes'  => &$taxes,
            'total'  => &$total
        );
        
        // Display prices
        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $sort_order = array();

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

            $sort_order = array();

            foreach ($totals as $key => $value) {
                $sort_order[$key] = $value['sort_order'];
            }

            array_multisort($sort_order, SORT_ASC, $totals);
        }

        $data['totals'] = array();

        foreach ($totals as $total) {

            if ($total['code'] == 'total' && (isset($oct_fastorder_data['minimum_order']) && !empty($oct_fastorder_data['minimum_order']) && $oct_fastorder_data['minimum_order'] > $total['value'])) {
                $data['error_warning'] = sprintf($this->language->get('error_minimum_sum'), $this->currency->format($oct_fastorder_data['minimum_order'], $this->session->data['currency']));
            }

            if ($total['code'] == 'total' && (isset($oct_fastorder_data['max_order']) && !empty($oct_fastorder_data['max_order']) && $oct_fastorder_data['max_order'] < $total['value'])) {
                $data['error_warning'] = sprintf($this->language->get('error_maximum_sum'), $this->currency->format($oct_fastorder_data['max_order'], $this->session->data['currency']));
            }

            $data['totals'][] = array(
                'title' => $total['title'],
                'text'  => $this->currency->format($total['value'], $this->session->data['currency'])
            );
        }

        $data['continue'] = $this->url->link('common/home');
        $data['action']   = $this->url->link('checkout/cart');
        $data['checkout'] = $this->url->link('checkout/oct_fastorder', '', 'SSL');

        $data['checkout_buttons'] = [];

        $this->response->setOutput($this->load->view('checkout/oct_fastorder/cart', $data));
    }

    public function status_cart() {
        $json = [];

        $this->load->language('octemplates/oct_fastorder');

        if (!$this->cart->hasProducts()) {
            $json['redirect'] = $this->url->link('checkout/oct_fastorder');
        }

				// Totals
				$this->load->model('setting/extension');

				$totals = [];
				$taxes  = $this->cart->getTaxes();
				$total  = 0;

				// Because __call can not keep var references so we put them into an array.
				$total_data = array(
					'totals' => &$totals,
					'taxes' => &$taxes,
					'total' => &$total
				);
		
				// Because __call can not keep var references so we put them into an array. 			
				$total_data = array(
					'totals' => &$totals,
					'taxes'  => &$taxes,
					'total'  => &$total
				);

				// Display prices
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$sort_order = array();

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

					$sort_order = array();

					foreach ($totals as $key => $value) {
						$sort_order[$key] = $value['sort_order'];
					}

					array_multisort($sort_order, SORT_ASC, $totals);
				}

        $data['totals'] = [];

        foreach ($totals as $total_value) {
            $data['totals'][] = array(
                'title' => $total_value['title'],
                'text' => $this->currency->format($total_value['value'], $this->session->data['currency'])
            );
        }

        $json['total']      = $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0);
        $json['total_amount'] = $this->currency->format($total, $this->session->data['currency']);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function confirm($render = true, &$data = array()) {
        $this->load->language('octemplates/oct_fastorder');

        $redirect         = '';
        $data['payment']  = '';
        $data['products'] = '';


        if ($this->cart->hasShipping()) {
            // Validate if shipping address has been set.
            if (!isset($this->session->data['shipping_address'])) {
                $redirect = $this->url->link('checkout/oct_fastorder', '', 'SSL');
            }

            // Validate if shipping method has been set.
            if (!isset($this->session->data['shipping_method'])) {
                $redirect = $this->url->link('checkout/oct_fastorder', '', 'SSL');
            }
        } else {
            unset($this->session->data['shipping_address']);
            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
        }

        // Validate if payment address has been set.
        if (!isset($this->session->data['payment_address'])) {
            $redirect = $this->url->link('checkout/oct_fastorder', '', 'SSL');
        }

        // Validate if payment method has been set.
        if (!isset($this->session->data['payment_method'])) {
            $redirect = $this->url->link('checkout/oct_fastorder', '', 'SSL');
        }

        // Validate cart has products and has stock.
        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $redirect = $this->url->link('checkout/oct_fastorder');
        }

        // Validate minimum quantity requirements.
        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $redirect = $this->url->link('checkout/oct_fastorder');
                break;
            }
        }

        $order_data = [];

        $totals = [];
        $taxes  = $this->cart->getTaxes();
        $total  = 0;

        // Because __call can not keep var references so we put them into an array.
        $total_data = array(
            'totals' => &$totals,
            'taxes' => &$taxes,
            'total' => &$total
        );

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

        $order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
        $order_data['store_id']       = $this->config->get('config_store_id');
        $order_data['store_name']     = $this->config->get('config_name');

        if ($order_data['store_id']) {
            $order_data['store_url'] = $this->config->get('config_url');
        } else {
            $order_data['store_url'] = HTTP_SERVER;
        }

        if (isset($this->request->post) && !empty($this->request->post)) {
            $oct_fastorder_data                         = $this->config->get('oct_fastorder_data');

            if ($this->customer->isLogged()) {
                $this->load->model('account/customer');

                $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

                $changed_custom_fields = json_decode($customer_info['custom_field'], true);

                if (isset($this->request->post['custom_field']) && $this->request->post['custom_field']) {
                    $changed_custom_fields = $this->request->post['custom_field']['account'];
                }

                $order_data['customer_id']       = $this->customer->getId();
                $order_data['customer_group_id'] = $customer_info['customer_group_id'];
                $order_data['firstname']         = $customer_info['firstname'];
                $order_data['lastname']          = $customer_info['lastname'];
                $order_data['email']             = $customer_info['email'];
                $order_data['telephone']         = $customer_info['telephone'];
                $order_data['fax']               = $customer_info['fax'];
                $order_data['custom_field']      = $changed_custom_fields;
            } elseif (isset($this->session->data['guest'])) {
                $order_data['customer_id']       = 0;
                $order_data['customer_group_id'] = isset($this->session->data['guest']['customer_group_id']) ? $this->session->data['guest']['customer_group_id'] : $this->config->get('config_customer_group_id');
                ;
                $order_data['firstname']    = isset($this->session->data['guest']['firstname']) ? $this->session->data['guest']['firstname'] : '';
                $order_data['lastname']     = isset($this->session->data['guest']['lastname']) ? $this->session->data['guest']['lastname'] : '';
                $order_data['email']        = (isset($this->session->data['guest']['email']) && !empty($this->session->data['guest']['email'])) ? $this->session->data['guest']['email'] : $oct_fastorder_data['notify_email'];
                $order_data['telephone']    = isset($this->session->data['guest']['telephone']) ? $this->session->data['guest']['telephone'] : '';
                $order_data['fax']          = isset($this->session->data['guest']['fax']) ? $this->session->data['guest']['fax'] : '';
                $order_data['custom_field'] = isset($this->session->data['guest']['custom_field']) ? $this->session->data['guest']['custom_field'] : '';
            }

            if ((isset($payment_address) && is_array($payment_address)) || isset($this->session->data['payment_address'])) {
                if (isset($this->session->data['payment_address'])) {
                    $payment_address = $this->session->data['payment_address'];
                }

                $order_data['payment_firstname']      = isset($payment_address['firstname']) ? $payment_address['firstname'] : '';
                $order_data['payment_lastname']       = isset($payment_address['lastname']) ? $payment_address['lastname'] : '';
                $order_data['payment_company']        = isset($payment_address['company']) ? $payment_address['company'] : '';
                $order_data['payment_company_id']     = isset($payment_address['company_id']) ? $payment_address['company_id'] : '';
                $order_data['payment_tax_id']         = isset($payment_address['tax_id']) ? $payment_address['tax_id'] : '';
                $order_data['payment_address_1']      = isset($payment_address['address_1']) ? $payment_address['address_1'] : '';
                $order_data['payment_address_2']      = isset($payment_address['address_2']) ? $payment_address['address_2'] : '';
                $order_data['payment_city']           = isset($payment_address['city']) ? $payment_address['city'] : '';
                $order_data['payment_postcode']       = isset($payment_address['postcode']) ? $payment_address['postcode'] : '';
                $order_data['payment_zone']           = isset($payment_address['zone']) ? $payment_address['zone'] : '';
                $order_data['payment_zone_id']        = isset($payment_address['zone_id']) ? $payment_address['zone_id'] : '';
                $order_data['payment_country']        = isset($payment_address['country']) ? $payment_address['country'] : '';
                $order_data['payment_country_id']     = isset($payment_address['country_id']) ? $payment_address['country_id'] : '';
                $order_data['payment_address_format'] = isset($payment_address['address_format']) ? $payment_address['address_format'] : '';
                $order_data['payment_custom_field']   = (isset($payment_address['custom_field'])) ? $payment_address['custom_field'] : '';
            }

            if (isset($this->session->data['payment_method']['title'])) {
                $order_data['payment_method'] = $this->session->data['payment_method']['title'];
            } else {
                $order_data['payment_method'] = '';
            }

            if (isset($this->session->data['payment_method']['code'])) {
                $order_data['payment_code'] = $this->session->data['payment_method']['code'];
            } else {
                $order_data['payment_code'] = '';
            }

            if ($this->cart->hasShipping()) {
                if (!$this->customer->isLogged()) {
                    if (!isset($this->request->post['shipping_address'])) {

                        $this->session->data['shipping_address']['firstname']  = $this->request->post['firstname'];
                        $this->session->data['shipping_address']['lastname']   = $this->request->post['lastname'];
                        $this->session->data['shipping_address']['company']    = $this->request->post['company'];
                        $this->session->data['shipping_address']['address_1']  = $this->request->post['address_1'];
                        $this->session->data['shipping_address']['address_2']  = $this->request->post['address_2'];
                        $this->session->data['shipping_address']['postcode']   = $this->request->post['postcode'];
                        $this->session->data['shipping_address']['city']       = $this->request->post['city'];
                        $this->session->data['shipping_address']['country_id'] = $this->request->post['country_id'];
                        $this->session->data['shipping_address']['zone_id']    = $this->request->post['zone_id'];

                        $this->load->model('localisation/country');

                        $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

                        if ($country_info) {
                            $this->session->data['shipping_address']['country']        = $country_info['name'];
                            $this->session->data['shipping_address']['iso_code_2']     = $country_info['iso_code_2'];
                            $this->session->data['shipping_address']['iso_code_3']     = $country_info['iso_code_3'];
                            $this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
                        } else {
                            $this->session->data['shipping_address']['country']        = '';
                            $this->session->data['shipping_address']['iso_code_2']     = '';
                            $this->session->data['shipping_address']['iso_code_3']     = '';
                            $this->session->data['shipping_address']['address_format'] = '';
                        }

                        $this->load->model('localisation/zone');

                        $zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);

                        if ($zone_info) {
                            $this->session->data['shipping_address']['zone']      = $zone_info['name'];
                            $this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
                        } else {
                            $this->session->data['shipping_address']['zone']      = '';
                            $this->session->data['shipping_address']['zone_code'] = '';
                        }

                        if (isset($this->session->data['shipping_address'])) {
                            $order_data['shipping_firstname']      = $this->session->data['shipping_address']['firstname'];
                            $order_data['shipping_lastname']       = $this->session->data['shipping_address']['lastname'];
                            $order_data['shipping_company']        = $this->session->data['shipping_address']['company'];
                            $order_data['shipping_address_1']      = $this->session->data['shipping_address']['address_1'];
                            $order_data['shipping_address_2']      = (isset($this->session->data['shipping_address']['address_2'])) ? $this->session->data['shipping_address']['address_2'] : '';
                            $order_data['shipping_city']           = $this->session->data['shipping_address']['city'];
                            $order_data['shipping_postcode']       = $this->session->data['shipping_address']['postcode'];
                            $order_data['shipping_zone']           = $this->session->data['shipping_address']['zone'];
                            $order_data['shipping_zone_id']        = $this->session->data['shipping_address']['zone_id'];
                            $order_data['shipping_country']        = $this->session->data['shipping_address']['country'];
                            $order_data['shipping_country_id']     = $this->session->data['shipping_address']['country_id'];
                            $order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
                            $order_data['shipping_custom_field']   = (isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array());
                            $order_data['shipping_method']         = $this->session->data['payment_method']['title'];
                        }
                    } else {
                        $this->load->model('localisation/country');

                        $country_info = $this->model_localisation_country->getCountry($this->request->post['shipping_country_id']);

                        if ($country_info) {
                            $this->session->data['shipping_address']['country']        = $country_info['name'];
                            $this->session->data['shipping_address']['iso_code_2']     = $country_info['iso_code_2'];
                            $this->session->data['shipping_address']['iso_code_3']     = $country_info['iso_code_3'];
                            $this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
                        } else {
                            $this->session->data['shipping_address']['country']        = '';
                            $this->session->data['shipping_address']['iso_code_2']     = '';
                            $this->session->data['shipping_address']['iso_code_3']     = '';
                            $this->session->data['shipping_address']['address_format'] = '';
                        }

                        $this->load->model('localisation/zone');

                        $zone_info = $this->model_localisation_zone->getZone($this->request->post['shipping_zone_id']);

                        if ($zone_info) {
                            $this->session->data['shipping_address']['zone']      = $zone_info['name'];
                            $this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
                        } else {
                            $this->session->data['shipping_address']['zone']      = '';
                            $this->session->data['shipping_address']['zone_code'] = '';
                        }

                        $order_data['shipping_firstname']      = $this->request->post['shipping_firstname'];
                        $order_data['shipping_lastname']       = $this->request->post['shipping_lastname'];
                        $order_data['shipping_company']        = $this->request->post['shipping_company'];
                        $order_data['shipping_address_1']      = $this->request->post['shipping_address_1'];
                        $order_data['shipping_address_2']      = $this->request->post['shipping_address_2'];
                        $order_data['shipping_city']           = $this->request->post['shipping_city'];
                        $order_data['shipping_postcode']       = $this->request->post['shipping_postcode'];
                        $order_data['shipping_zone']           = $this->session->data['shipping_address']['zone'];
                        $order_data['shipping_zone_id']        = $this->request->post['shipping_zone_id'];
                        $order_data['shipping_country']        = $this->session->data['shipping_address']['country'];
                        $order_data['shipping_country_id']     = $this->request->post['shipping_country_id'];
                        $order_data['shipping_address_format'] = '';
                        $order_data['shipping_method']         = $this->request->post['_shipping_method'];
                        $order_data['shipping_code']           = $this->request->post['shipping_method'];
                    }
                } elseif (isset($this->request->post['shipping_firstname'])) {
                    if (!$this->customer->isLogged()) {
                        $this->load->model('localisation/country');

                        $country_info = $this->model_localisation_country->getCountry($this->request->post['shipping_country_id']);

                        if ($country_info) {
                            $this->session->data['shipping_address']['country']        = $country_info['name'];
                            $this->session->data['shipping_address']['iso_code_2']     = $country_info['iso_code_2'];
                            $this->session->data['shipping_address']['iso_code_3']     = $country_info['iso_code_3'];
                            $this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
                        } else {
                            $this->session->data['shipping_address']['country']        = '';
                            $this->session->data['shipping_address']['iso_code_2']     = '';
                            $this->session->data['shipping_address']['iso_code_3']     = '';
                            $this->session->data['shipping_address']['address_format'] = '';
                        }

                        $this->load->model('localisation/zone');

                        $zone_info = $this->model_localisation_zone->getZone($this->request->post['shipping_zone_id']);

                        if ($zone_info) {
                            $this->session->data['shipping_address']['zone']      = $zone_info['name'];
                            $this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
                        } else {
                            $this->session->data['shipping_address']['zone']      = '';
                            $this->session->data['shipping_address']['zone_code'] = '';
                        }

                        $order_data['shipping_firstname']      = $this->request->post['shipping_firstname'];
                        $order_data['shipping_lastname']       = $this->request->post['shipping_lastname'];
                        $order_data['shipping_company']        = $this->request->post['shipping_company'];
                        $order_data['shipping_address_1']      = $this->request->post['shipping_address_1'];
                        $order_data['shipping_address_2']      = $this->request->post['shipping_address_2'];
                        $order_data['shipping_city']           = $this->request->post['shipping_city'];
                        $order_data['shipping_postcode']       = $this->request->post['shipping_postcode'];
                        $order_data['shipping_zone']           = $this->session->data['shipping_address']['zone'];
                        $order_data['shipping_zone_id']        = $this->request->post['shipping_zone_id'];
                        $order_data['shipping_country']        = $this->session->data['shipping_address']['country'];
                        $order_data['shipping_country_id']     = $this->request->post['shipping_country_id'];
                        $order_data['shipping_address_format'] = '';
                        $order_data['shipping_method']         = $this->request->post['_shipping_method'];
                        $order_data['shipping_code']           = $this->request->post['shipping_method'];
                    } else {
                        if (isset($this->session->data['shipping_address_id'])) {
                            $this->load->model('account/address');

                            $shipping_address = $this->model_account_address->getAddress($this->session->data['shipping_address_id']);

                            $order_data['shipping_firstname']      = $shipping_address['firstname'];
                            $order_data['shipping_lastname']       = $shipping_address['lastname'];
                            $order_data['shipping_company']        = $shipping_address['company'];
                            $order_data['shipping_address_1']      = $shipping_address['address_1'];
                            $order_data['shipping_address_2']      = $shipping_address['address_2'];
                            $order_data['shipping_city']           = $shipping_address['city'];
                            $order_data['shipping_postcode']       = $shipping_address['postcode'];
                            $order_data['shipping_zone']           = $shipping_address['zone'];
                            $order_data['shipping_zone_id']        = $shipping_address['zone_id'];
                            $order_data['shipping_country']        = $shipping_address['country'];
                            $order_data['shipping_country_id']     = $shipping_address['country_id'];
                            $order_data['shipping_address_format'] = $shipping_address['address_format'];

                            if (isset($this->session->data['shipping_method']['title'])) {
                                $order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
                            } else {
                                $order_data['shipping_method'] = '';
                            }
                        } else {
                            $this->session->data['shipping_address']['firstname']  = $this->request->post['firstname'];
                            $this->session->data['shipping_address']['lastname']   = $this->request->post['lastname'];
                            $this->session->data['shipping_address']['company']    = $this->request->post['company'];
                            $this->session->data['shipping_address']['address_1']  = $this->request->post['address_1'];
                            $this->session->data['shipping_address']['address_2']  = $this->request->post['address_2'];
                            $this->session->data['shipping_address']['postcode']   = $this->request->post['postcode'];
                            $this->session->data['shipping_address']['city']       = $this->request->post['city'];
                            $this->session->data['shipping_address']['country_id'] = $this->request->post['country_id'];
                            $this->session->data['shipping_address']['zone_id']    = $this->request->post['zone_id'];

                            $this->load->model('localisation/country');

                            $country_info = $this->model_localisation_country->getCountry($this->request->post['country_id']);

                            if ($country_info) {
                                $this->session->data['shipping_address']['country']        = $country_info['name'];
                                $this->session->data['shipping_address']['iso_code_2']     = $country_info['iso_code_2'];
                                $this->session->data['shipping_address']['iso_code_3']     = $country_info['iso_code_3'];
                                $this->session->data['shipping_address']['address_format'] = $country_info['address_format'];
                            } else {
                                $this->session->data['shipping_address']['country']        = '';
                                $this->session->data['shipping_address']['iso_code_2']     = '';
                                $this->session->data['shipping_address']['iso_code_3']     = '';
                                $this->session->data['shipping_address']['address_format'] = '';
                            }

                            $this->load->model('localisation/zone');

                            $zone_info = $this->model_localisation_zone->getZone($this->request->post['zone_id']);

                            if ($zone_info) {
                                $this->session->data['shipping_address']['zone']      = $zone_info['name'];
                                $this->session->data['shipping_address']['zone_code'] = $zone_info['code'];
                            } else {
                                $this->session->data['shipping_address']['zone']      = '';
                                $this->session->data['shipping_address']['zone_code'] = '';
                            }

                            if (isset($this->session->data['shipping_address'])) {
                                $order_data['shipping_firstname']      = $this->session->data['shipping_address']['firstname'];
                                $order_data['shipping_lastname']       = $this->session->data['shipping_address']['lastname'];
                                $order_data['shipping_company']        = $this->session->data['shipping_address']['company'];
                                $order_data['shipping_address_1']      = $this->session->data['shipping_address']['address_1'];
                                $order_data['shipping_address_2']      = (isset($this->session->data['shipping_address']['address_2'])) ? $this->session->data['shipping_address']['address_2'] : '';
                                $order_data['shipping_city']           = $this->session->data['shipping_address']['city'];
                                $order_data['shipping_postcode']       = $this->session->data['shipping_address']['postcode'];
                                $order_data['shipping_zone']           = $this->session->data['shipping_address']['zone'];
                                $order_data['shipping_zone_id']        = $this->session->data['shipping_address']['zone_id'];
                                $order_data['shipping_country']        = $this->session->data['shipping_address']['country'];
                                $order_data['shipping_country_id']     = $this->session->data['shipping_address']['country_id'];
                                $order_data['shipping_address_format'] = $this->session->data['shipping_address']['address_format'];
                                $order_data['shipping_custom_field']   = (isset($this->session->data['shipping_address']['custom_field']) ? $this->session->data['shipping_address']['custom_field'] : array());
                                $order_data['shipping_method']         = $this->session->data['payment_method']['title'];
                            }
                        }
                    }
                } else {
                    $order_data['shipping_firstname']      = '';
                    $order_data['shipping_lastname']       = '';
                    $order_data['shipping_company']        = '';
                    $order_data['shipping_address_1']      = '';
                    $order_data['shipping_address_2']      = '';
                    $order_data['shipping_city']           = '';
                    $order_data['shipping_postcode']       = '';
                    $order_data['shipping_zone']           = '';
                    $order_data['shipping_zone_id']        = '';
                    $order_data['shipping_country']        = '';
                    $order_data['shipping_country_id']     = '';
                    $order_data['shipping_address_format'] = '';
                    $order_data['shipping_custom_field']   = [];
                    $order_data['shipping_method']         = '';
                    $order_data['shipping_code']           = '';
                    $order_data['shipping_custom_field']   = '';
                }

                if (isset($this->session->data['shipping_method']['title'])) {
                    $order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
                } else {
                    $order_data['shipping_method'] = '';
                }

                if (isset($this->session->data['shipping_method']['code'])) {
                    $order_data['shipping_code'] = $this->session->data['shipping_method']['code'];
                } else {
                    $order_data['shipping_code'] = '';
                }
            } else {
                $order_data['shipping_firstname']      = '';
                $order_data['shipping_lastname']       = '';
                $order_data['shipping_company']        = '';
                $order_data['shipping_address_1']      = '';
                $order_data['shipping_address_2']      = '';
                $order_data['shipping_city']           = '';
                $order_data['shipping_postcode']       = '';
                $order_data['shipping_zone']           = '';
                $order_data['shipping_zone_id']        = '';
                $order_data['shipping_country']        = '';
                $order_data['shipping_country_id']     = '';
                $order_data['shipping_address_format'] = '';
                $order_data['shipping_custom_field']   = [];
                $order_data['shipping_method']         = '';
                $order_data['shipping_code']           = '';
            }

            $order_data['products'] = [];

            foreach ($this->cart->getProducts() as $product) {
                $option_data = [];

                foreach ($product['option'] as $option) {

                    $oct_product_option_value_id_val = explode("|", $option['product_option_value_id']);

                    if ($option['type'] == 'oct_quantity') {
                        $oct_product_option_value_id = $oct_product_option_value_id_val[0];
                    } else {
                        $oct_product_option_value_id = $option['product_option_value_id'];
                    }

                    $option_data[] = array(
                        'product_option_id' => $option['product_option_id'],
                        'product_option_value_id' => $oct_product_option_value_id,
                        'option_id' => $option['option_id'],
                        'option_value_id' => $option['option_value_id'],
                        'name' => $option['name'],
                        'sku' => (isset($option['sku'])) ? $option['sku'] : '',
                        'model' => (isset($option['model'])) ? $option['model'] : '',
                        'oct_quantity_value' => (isset($oct_product_option_value_id_val[1])) ? $oct_product_option_value_id_val[1] : '',
                        'value' => $option['value'],
                        'type' => $option['type']
                    );
                }

                $order_data['products'][] = array(
                    'product_id' => $product['product_id'],
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'option' => $option_data,
                    'download' => $product['download'],
                    'quantity' => $product['quantity'],
                    'subtract' => $product['subtract'],
                    'price' => $product['price'],
                    'total' => $product['total'],
                    'tax' => $this->tax->getTax($product['price'], $product['tax_class_id']),
                    'stock' => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
                    'reward' => $product['reward']
                );
            }

            // Gift Voucher
            $order_data['vouchers'] = [];

            if (!empty($this->session->data['vouchers'])) {
                foreach ($this->session->data['vouchers'] as $voucher) {
                    $order_data['vouchers'][] = array(
                        'description' => $voucher['description'],
                        'code' => substr(md5(mt_rand()), 0, 10),
                        'to_name' => $voucher['to_name'],
                        'to_email' => $voucher['to_email'],
                        'from_name' => $voucher['from_name'],
                        'from_email' => $voucher['from_email'],
                        'voucher_theme_id' => $voucher['voucher_theme_id'],
                        'message' => $voucher['message'],
                        'amount' => $voucher['amount']
                    );
                }
            }

            $order_data['comment'] = isset($this->session->data['comment']) ? $this->session->data['comment'] : '';
            $order_data['total']   = $total_data['total'];

            if (isset($this->request->cookie['tracking'])) {
                $order_data['tracking'] = $this->request->cookie['tracking'];

                $subtotal = $this->cart->getSubTotal();

                // Affiliate
                $this->load->model('affiliate/affiliate');

                $affiliate_info = $this->model_affiliate_affiliate->getAffiliateByCode($this->request->cookie['tracking']);

                if ($affiliate_info) {
                    $order_data['affiliate_id'] = $affiliate_info['affiliate_id'];
                    $order_data['commission']   = ($subtotal / 100) * $affiliate_info['commission'];
                } else {
                    $order_data['affiliate_id'] = 0;
                    $order_data['commission']   = 0;
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
                $order_data['commission']   = 0;
                $order_data['marketing_id'] = 0;
                $order_data['tracking']     = '';
            }

            $order_data['language_id']    = $this->config->get('config_language_id');
            $order_data['currency_id']    = $this->currency->getId($this->session->data['currency']);
            $order_data['currency_code']  = $this->session->data['currency'];
            $order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
            $order_data['ip']             = $this->request->server['REMOTE_ADDR'];

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

            $this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);

            $data['text_recurring_item']    = $this->language->get('text_recurring_item');
            $data['text_payment_recurring'] = $this->language->get('text_payment_recurring');
        }

        $this->load->model('tool/image');
        $this->load->model('tool/upload');

        $data['products'] = [];

        $products = $this->cart->getProducts();

        foreach ($products as $product) {
            $product_total = 0;

            foreach ($products as $product_2) {
                if ($product_2['product_id'] == $product['product_id']) {
                    $product_total += $product_2['quantity'];
                }
            }

            if ($product['minimum'] > $product_total) {
                $data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
            }

            if ($product['image']) {
                $image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
            } else {
                $image = '';
            }

            $option_data = [];

            foreach ($product['option'] as $option) {
                if ($option['type'] != 'file') {
                    $value = $option['value'];
                } else {
                    $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                    if ($upload_info) {
                        $value = $upload_info['name'];
                    } else {
                        $value = '';
                    }
                }

                $option_data[] = array(
                    'name' => $option['name'],
                    'sku' => (isset($option['sku'])) ? $option['sku'] : '',
                    'model' => (isset($option['model'])) ? $option['model'] : '',
                    'oct_quantity_value' => (isset($option['oct_quantity_value'])) ? $option['oct_quantity_value'] : '',
                    'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                );
            }

            // Display prices
            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            // Display prices
            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                $p_total = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']);
            } else {
                $p_total = false;
            }

            $recurring = '';

            if ($product['recurring']) {
                $frequencies = array(
                    'day' => $this->language->get('text_day'),
                    'week' => $this->language->get('text_week'),
                    'semi_month' => $this->language->get('text_semi_month'),
                    'month' => $this->language->get('text_month'),
                    'year' => $this->language->get('text_year')
                );

                if ($product['recurring']['trial']) {
                    $recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
                }

                if ($product['recurring']['duration']) {
                    $recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                } else {
                    $recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                }
            }

            $data['products'][] = array(
                'key' => $product['cart_id'],
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'model' => $product['model'],
                'option' => $option_data,
                'recurring' => $recurring,
                'quantity' => $product['quantity'],
                'stock' => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
                'reward' => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
                'price' => $price,
                'total' => $p_total,
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        // Gift Voucher
        $data['vouchers'] = [];

        if (!empty($this->session->data['vouchers'])) {
            foreach ($this->session->data['vouchers'] as $voucher) {
                $data['vouchers'][] = array(
                    'description' => $voucher['description'],
                    'amount' => $this->currency->format($voucher['amount'], $this->session->data['currency'])
                );
            }
        }

        $data['totals'] = [];

        foreach ($order_data['totals'] as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $this->currency->format($total['value'], $this->session->data['currency'])
            );
        }

        if ($render !== false) {
            echo $data['payment'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code']);
        }
    }

    public function empty_cart() {
        if (!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) {
            $this->load->language('checkout/cart');

            $this->document->setTitle($this->language->get('heading_title'));

            $data['breadcrumbs'] = [];

            $data['breadcrumbs'][] = array(
                'href' => $this->url->link('common/home'),
                'text' => $this->language->get('text_home')
            );

            $data['breadcrumbs'][] = array(
                'href' => $this->url->link('checkout/cart'),
                'text' => $this->language->get('heading_title')
            );

            $data['text_error'] = $this->language->get('text_empty');

            $data['continue'] = $this->url->link('common/home');

            unset($this->session->data['success']);

            $data['column_left']    = $this->load->controller('common/column_left');
            $data['column_right']   = $this->load->controller('common/column_right');
            $data['content_top']    = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer']         = $this->load->controller('common/footer');
            $data['header']         = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        } else {
            $this->response->redirect($this->url->link('checkout/oct_fastorder'));
        }
    }
}
