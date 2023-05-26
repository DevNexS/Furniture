<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ControllerOCTemplatesFaqOCTProductFaq extends Controller {
    public function index($data = []) {
        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $data['from_controller'] = true;
        }

        if (!isset($data['from_controller'])) {
            $this->response->redirect($this->url->link('common/home', '', true));
        }

        $this->load->language('octemplates/oct_remarket');

		$this->load->model('octemplates/faq/oct_product_faq');

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['oct_faqs'] = [];

        if (isset($data['p_id']) && !empty($data['p_id'])) {
            $data['product_id'] = $product_id = $data['p_id'];
        } else {
            $data['product_id'] = $product_id = isset($this->request->get['faqp_id']) ? $this->request->get['faqp_id'] : $this->request->get['product_id'];
        }

        $data['poup_is_not'] = ((isset($data['p_id']) && !empty($data['p_id'])) || (isset($this->request->get['popup']))) ? 0 : 1;

		if ($this->customer->isLogged()) {
			$data['email_user'] = $this->customer->getEmail();
			$data['firstname'] = $this->customer->getFirstName();
		} else {
			$data['email_user'] = false;
			$data['firstname'] = false;
		}

		$faq_total = $this->model_octemplates_faq_oct_product_faq->getTotalFaqsByProductId($product_id);

		$results = $this->model_octemplates_faq_oct_product_faq->getFaqsByProductId($product_id, ($page - 1) * 25, 25);

		foreach ($results as $result) {
			$data['oct_faqs'][] = [
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),
				'answer'     => nl2br($result['answer']),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			];
		}

		$pagination = new Pagination();
		$pagination->total = $faq_total;
		$pagination->page = $page;
		$pagination->limit = 25;
		$pagination->url = $this->url->link('octemplates/faq/oct_product_faq', 'faqp_id=' . $product_id . '&page={page}&popup=' . $data['poup_is_not']);

		$data['pagination'] = $pagination->render();
        $data['page'] = $page;
		$data['results'] = sprintf($this->language->get('text_pagination'), ($faq_total) ? (($page - 1) * 25) + 1 : 0, ((($page - 1) * 25) > ($faq_total - 25)) ? $faq_total : ((($page - 1) * 25) + 25), $faq_total, ceil($faq_total / 25));

        $data['oct_id_div'] = isset($data['p_id']) ? 'popup_product_questions' : 'product_questions';
        $data['oct_faqs_id'] = isset($data['p_id']) ? 'poup_oct_faqs' : 'oct_faqs';

        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !isset($data['p_id']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->response->setOutput($this->load->view('octemplates/faq/oct_product_faq', $data));
        } else {
            return $this->load->view('octemplates/faq/oct_product_faq', $data);
        }
    }

    public function write() {
		$json = [];

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error']['name'] = $this->language->get('error_faq_name');
			}

			if (isset($this->request->post['email']) && (!empty($this->request->post['email'])) && (utf8_strlen($this->request->post['email']) > 96 || !preg_match('/^[^\@]+@.*.[a-z]{2,15}$/i', $this->request->post['email']))) {
				$json['error']['email'] = $this->language->get('error_faq_email');
			}

			if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
				$json['error']['text'] = $this->language->get('error_faq_text');
			}

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('oct_faq', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$json['error']['captcha'] = $captcha;
				}
			}

			if (!isset($json['error'])) {
				$this->load->model('octemplates/faq/oct_product_faq');

				$this->model_octemplates_faq_oct_product_faq->addFaq($this->request->get['faqp_id'], $this->request->post);

				$json['success'] = $this->language->get('text_faq_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
