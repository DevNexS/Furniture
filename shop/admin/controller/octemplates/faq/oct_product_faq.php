<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerOCTemplatesFaqOCTProductFaq extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/faq/oct_product_faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/faq/oct_product_faq');

		$this->getList();
	}

	public function add() {
		$this->load->language('octemplates/faq/oct_product_faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/faq/oct_product_faq');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_octemplates_faq_oct_product_faq->addFaq($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_product'])) {
				$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_author'])) {
				$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

			$this->response->redirect($this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('octemplates/faq/oct_product_faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/faq/oct_product_faq');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_octemplates_faq_oct_product_faq->editFaq($this->request->get['faq_id'], $this->request->post);

			if (isset($this->request->post['email_notify']) && $this->request->post['email_notify'] == 1 && isset($this->request->post['email']) && !empty($this->request->post['email']) && $this->request->post['email'] && isset($this->request->post['answer']) && !empty($this->request->post['answer']) && $this->request->post['answer']) {
				$this->load->model('catalog/product');

				$faq_info = $this->model_octemplates_faq_oct_product_faq->getFaq($this->request->get['faq_id']);

				$faq_product_id = $faq_info['product_id'];

				$product_info = $this->model_catalog_product->getProduct($faq_product_id);

				$store_name = $this->config->get('config_name');
				
				$message = sprintf($this->language->get('text_email_welcome'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')) . "\n\n";
				$message .= sprintf($this->language->get('text_email_body'), $product_info['name'], HTTP_CATALOG . 'index.php?route=product/product&product_id=' . (int)$faq_product_id) . "\n\n";
				$message .= $this->language->get('text_email_thanks') . "\n";
				$message .= html_entity_decode($store_name, ENT_QUOTES, 'UTF-8');
				
				$mail                = new Mail();
				$mail->protocol      = $this->config->get('config_mail_protocol');
				$mail->parameter     = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port     = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout  = $this->config->get('config_mail_smtp_timeout');
				
				$mail->setTo($this->request->post['email']);
				$mail->setFrom($this->config->get('config_email'));
				$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
				$mail->setSubject(sprintf($this->language->get('text_email_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')));
				$mail->setText($message);
				$mail->send();
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_product'])) {
				$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_author'])) {
				$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

			$this->response->redirect($this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('octemplates/faq/oct_product_faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('octemplates/faq/oct_product_faq');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $faq_id) {
				$this->model_octemplates_faq_oct_product_faq->deleteFaq($faq_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_product'])) {
				$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_author'])) {
				$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

			$this->response->redirect($this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['filter_product'])) {
			$filter_product = $this->request->get['filter_product'];
		} else {
			$filter_product = '';
		}

		if (isset($this->request->get['filter_author'])) {
			$filter_author = $this->request->get['filter_author'];
		} else {
			$filter_author = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'r.date_added';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_product'])) {
			$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_author'])) {
			$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('octemplates/faq/oct_product_faq/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('octemplates/faq/oct_product_faq/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['faqs'] = [];

		$filter_data = array(
			'filter_product'    => $filter_product,
			'filter_author'     => $filter_author,
			'filter_status'     => $filter_status,
			'filter_date_added' => $filter_date_added,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$faq_total = $this->model_octemplates_faq_oct_product_faq->getTotalFaqs($filter_data);

		$results = $this->model_octemplates_faq_oct_product_faq->getFaqs($filter_data);

		foreach ($results as $result) {
			$data['faqs'][] = [
				'faq_id'  => $result['faq_id'],
				'name'       => $result['name'],
				'author'     => $result['author'],
				'answer'     => $result['answer'],
				'status'     => ($result['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'       => $this->url->link('octemplates/faq/oct_product_faq/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $result['faq_id'] . $url, true)
			];
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = [];
		}

		$url = '';

		if (isset($this->request->get['filter_product'])) {
			$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_author'])) {
			$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_product'] = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . '&sort=pd.name' . $url, true);
		$data['sort_author'] = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . '&sort=r.author' . $url, true);
		$data['sort_status'] = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . '&sort=r.status' . $url, true);
		$data['sort_date_added'] = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . '&sort=r.date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_product'])) {
			$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_author'])) {
			$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $faq_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($faq_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($faq_total - $this->config->get('config_limit_admin'))) ? $faq_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $faq_total, ceil($faq_total / $this->config->get('config_limit_admin')));

		$data['filter_product'] = $filter_product;
		$data['filter_author'] = $filter_author;
		$data['filter_status'] = $filter_status;
		$data['filter_date_added'] = $filter_date_added;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/faq/oct_product_faq_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['faq_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['product'])) {
			$data['error_product'] = $this->error['product'];
		} else {
			$data['error_product'] = '';
		}

		if (isset($this->error['author'])) {
			$data['error_author'] = $this->error['author'];
		} else {
			$data['error_author'] = '';
		}

		if (isset($this->error['text'])) {
			$data['error_text'] = $this->error['text'];
		} else {
			$data['error_text'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_product'])) {
			$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_author'])) {
			$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
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

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['faq_id'])) {
			$data['action'] = $this->url->link('octemplates/faq/oct_product_faq/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('octemplates/faq/oct_product_faq/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $this->request->get['faq_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('octemplates/faq/oct_product_faq', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['faq_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$faq_info = $this->model_octemplates_faq_oct_product_faq->getFaq($this->request->get['faq_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$data['product_id'] = $this->request->post['product_id'];
		} elseif (!empty($faq_info)) {
			$data['product_id'] = $faq_info['product_id'];
		} else {
			$data['product_id'] = '';
		}

		if (isset($this->request->post['product'])) {
			$data['product'] = $this->request->post['product'];
		} elseif (!empty($faq_info)) {
			$data['product'] = $faq_info['product'];
		} else {
			$data['product'] = '';
		}

		if (isset($this->request->post['author'])) {
			$data['author'] = $this->request->post['author'];
		} elseif (!empty($faq_info)) {
			$data['author'] = $faq_info['author'];
		} else {
			$data['author'] = '';
		}

		if (isset($this->request->post['answer'])) {
			$data['answer'] = $this->request->post['answer'];
		} elseif (!empty($faq_info)) {
			$data['answer'] = $faq_info['answer'];
		} else {
			$data['answer'] = '';
		}

		if (!empty($faq_info)) {
			$data['email'] = $faq_info['email'];
		} else {
			$data['email'] = false;
		}

		if (isset($this->request->post['text'])) {
			$data['text'] = $this->request->post['text'];
		} elseif (!empty($faq_info)) {
			$data['text'] = $faq_info['text'];
		} else {
			$data['text'] = '';
		}

		if (isset($this->request->post['date_added'])) {
			$data['date_added'] = $this->request->post['date_added'];
		} elseif (!empty($faq_info)) {
			$data['date_added'] = ($faq_info['date_added'] != '0000-00-00 00:00' ? $faq_info['date_added'] : '');
		} else {
			$data['date_added'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($faq_info)) {
			$data['status'] = $faq_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/faq/oct_product_faq_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'octemplates/faq/oct_product_faq')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['product_id']) {
			$this->error['product'] = $this->language->get('error_product');
		}

		if ((utf8_strlen($this->request->post['author']) < 3) || (utf8_strlen($this->request->post['author']) > 64)) {
			$this->error['author'] = $this->language->get('error_author');
		}

		if (utf8_strlen($this->request->post['text']) < 1) {
			$this->error['text'] = $this->language->get('error_text');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'octemplates/faq/oct_product_faq')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
