<?php
/********************************************************/
/*	@copyright	OCTemplates 2015-2022					*/
/*	@support	https://octemplates.net/				*/
/*	@license	LICENSE.txt								*/
/********************************************************/

class ControllerOCTemplatesModuleOctLiveSearch extends Controller {
	public function index() {
		if ($this->config->get('theme_oct_remarket_live_search_status') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			$this->load->model('tool/image');
			$this->load->model('octemplates/module/oct_live_search');
			$this->load->model('catalog/product');
			$this->load->language('product/product');

			$data['products'] = [];

	        if (isset($this->request->post['key']) && !empty($this->request->post['key'])) {
		        $oct_live_search_data = $this->config->get('theme_oct_remarket_live_search_data');
		        $search_query = $this->model_octemplates_module_oct_live_search->doSearch($this->request->post['key']);

		        $data['price_setting'] = isset($oct_live_search_data['price']) && $oct_live_search_data['price'] ? true : false;
		        $data['model_setting'] = isset($oct_live_search_data['model']) && $oct_live_search_data['model'] ? true : false;
		        $data['sku_setting'] = isset($oct_live_search_data['sku']) && $oct_live_search_data['sku'] ? true : false;

				foreach ($search_query as $result) {
					$product_info = $this->model_catalog_product->getProduct($result['product_id']);

					if ($product_info) {
						if ($product_info['image']) {
							$image = $this->model_tool_image->resize($product_info['image'], 80, 80);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', 80, 80);
						}

						if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
							$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$price = false;
						}

						if ((float)$product_info['special']) {
							$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$special = false;
						}

						if ($product_info['quantity'] <= 0) {
							$stock = $product_info['stock_status'];
						} elseif ($this->config->get('config_stock_display')) {
							$stock = $product_info['quantity'];
						} else {
							$stock = $this->language->get('text_instock');
						}

						$data['products'][] = [
							'name'    => $product_info['name'],
							'model'   => $product_info['model'],
							'sku'     => $product_info['sku'],
						    'href'    => $this->url->link('product/product', 'product_id=' . $product_info['product_id'], true),
						    'image'   => $image,
							'width'	  => 80,
							'height'  => 80,
							'price'   => $price,
							'special' => $special,
							'stock'   => $stock,
							'quantity' => $product_info['quantity']
						];
					}
				}

				$this->response->setOutput($this->load->view('octemplates/module/oct_live_search', $data));
	        }
		} else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	}
}
