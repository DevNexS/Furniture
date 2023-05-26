<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesModuleOCTSreviewReviews extends Controller {
    public function index() {
        $this->load->language('octemplates/module/oct_sreview_reviews');

		$oct_sreview_setting_status = $this->config->get('oct_sreview_setting_status');

		if (isset($oct_sreview_setting_status) && $oct_sreview_setting_status = "on") {
	        $oct_sreview_setting_data = $this->config->get('oct_sreview_setting_data');

	        $this->load->model('octemplates/module/oct_sreview_reviews');

            if (isset($this->request->get['sort'])) {
                $sort = $this->request->get['sort'];
            } else {
                $sort = 'sort_order_asc';
            }

            if (isset($this->request->get['page'])) {
                $page = $this->request->get['page'];
            } else {
                $page = 1;
            }

            if (isset($this->request->get['limit'])) {
                $limit = (int) $this->request->get['limit'];
            } else {
                $limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
            }

            $data['breadcrumbs'] = [];

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_home'),
                'href' => $this->url->link('common/home')
            ];

            $reviews = $this->model_octemplates_module_oct_sreview_reviews->getReviews();

            if (isset($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_title']) && !empty($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_title'])) {
                $this->document->setTitle($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_title']);
            } else {
                $this->document->setTitle($this->language->get('heading_title'));
            }

            if (isset($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_meta_description']) && !empty($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_meta_description'])) {
                $this->document->setDescription($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_meta_description']);
            }

            if (isset($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_meta_keywords']) && !empty($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_meta_keywords'])) {
                $this->document->setKeywords($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_meta_keywords']);
            }

            $data['heading_title'] = (isset($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_h1']) && !empty($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_h1'])) ? $oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_h1'] : $this->language->get('heading_title');

            $data['description'] = (isset($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_description']) && !empty($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_description'])) ? html_entity_decode($oct_sreview_setting_data['language'][(int)$this->config->get('config_language_id')]['seo_description'], ENT_QUOTES, 'UTF-8') : '';

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('octemplates/module/oct_sreview_reviews')
            ];

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $filter_data = [
                'sort' => $sort,
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            ];

            $data['subjects'] = $this->model_octemplates_module_oct_sreview_reviews->getSubjects();
            $data['store_rating_with_subjects'] = $this->model_octemplates_module_oct_sreview_reviews->getTotalStoreReviewsBySubject();

            $review_total = $this->model_octemplates_module_oct_sreview_reviews->getTotalReviews($filter_data);

            if (isset($review_total) && !empty($review_total)) {
				$data['review_total'] = $review_total;
			} else {
				$data['review_total'] = 0;
			}

            $data['store_rating'] = round($this->model_octemplates_module_oct_sreview_reviews->getTotalStoreReviews(), 1);

            if ($this->customer->isLogged()) {
    			$data['author'] = $this->customer->getFirstName(). ' '. $this->customer->getLastName();
    		} else {
                $data['author'] = '';
            }

            $data['reviews'] = [];

            $results = $this->model_octemplates_module_oct_sreview_reviews->getReviews($filter_data);

            foreach ($results as $result) {
                $review_subjects = $this->model_octemplates_module_oct_sreview_reviews->getReviewSubjects($result['oct_sreview_review_id']);

                $review_subject_array = [];

                if ($review_subjects) {
                    foreach ($review_subjects as $review_subject) {
                        $subject_info = $this->model_octemplates_module_oct_sreview_reviews->getSubject($review_subject['oct_sreview_subject_id']);

                        if ($subject_info) {
                            $review_subject_array[] = [
                                'name' => $subject_info['name'],
                                'rating' => $review_subject['rating']
                            ];
                        }
                    }
                }

                if (!isset($result['admin_text'])) {
                    $result['admin_text'] = '';
                }

                $data['reviews'][] = [
                    'oct_sreview_review_id' => $result['oct_sreview_review_id'],
                    'author' => $result['author'],
                    'review_subject_array' => $review_subject_array,
                    'avg_rating' => sprintf($this->language->get('text_rating'), round($result['avg_rating'], 1)),
                    'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
                    'text' => html_entity_decode($result['text'], ENT_QUOTES, 'UTF-8'),
                    'admin_text' => html_entity_decode($result['admin_text'], ENT_QUOTES, 'UTF-8')
                ];
            }

            $url = '';

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['sorts'] = [];

            $data['sorts'][] = [
                'text' => $this->language->get('text_date_added_asc'),
                'value' => 'date_added_asc',
                'href' => $this->url->link('octemplates/module/oct_sreview_reviews', '&sort=date_added_asc' . $url)
            ];

            $data['sorts'][] = [
                'text' => $this->language->get('text_date_added_desc'),
                'value' => 'date_added_desc',
                'href' => $this->url->link('octemplates/module/oct_sreview_reviews', '&sort=date_added_desc' . $url)
            ];

            $data['sorts'][] = [
                'text' => $this->language->get('text_author_asc'),
                'value' => 'author_asc',
                'href' => $this->url->link('octemplates/module/oct_sreview_reviews', '&sort=author_asc' . $url)
            ];

            $data['sorts'][] = [
                'text' => $this->language->get('text_author_desc'),
                'value' => 'author_desc',
                'href' => $this->url->link('octemplates/module/oct_sreview_reviews', '&sort=author_desc' . $url)
            ];

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            $data['limits'] = [];

            $limits = array_unique([
                $this->config->get($this->config->get('config_theme') . '_product_limit'),
                25,
                50,
                75,
                100
            ]);

            sort($limits);

            foreach ($limits as $value) {
                $data['limits'][] = [
                    'text' => $value,
                    'value' => $value,
                    'href' => $this->url->link('octemplates/module/oct_sreview_reviews', $url . '&limit=' . $value)
                ];
            }

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $pagination        = new Pagination();
            $pagination->total = $review_total;
            $pagination->page  = $page;
            $pagination->limit = $limit;
            $pagination->url   = $this->url->link('octemplates/module/oct_sreview_reviews', $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($review_total - $limit)) ? $review_total : ((($page - 1) * $limit) + $limit), $review_total, ceil($review_total / $limit));

            // http://googlewebmastercentral.sreviewspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1) {
                $this->document->addLink($this->url->link('octemplates/module/oct_sreview_reviews', '', true), 'canonical');
            } elseif ($page == 2) {
                $this->document->addLink($this->url->link('octemplates/module/oct_sreview_reviews', '', true), 'prev');
            } else {
                $this->document->addLink($this->url->link('octemplates/module/oct_sreview_reviews', '&page=' . ($page - 1), true), 'prev');
            }

            if ($limit && ceil($review_total / $limit) > $page) {
                $this->document->addLink($this->url->link('octemplates/module/oct_sreview_reviews', '&page=' . ($page + 1), true), 'next');
            }

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('oct_sreview_reviews', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

            $data['sort']  = $sort;
            $data['limit'] = $limit;

            $data['continue'] = $this->url->link('common/home');

            $data['column_left']    = $this->load->controller('common/column_left');
            $data['column_right']   = $this->load->controller('common/column_right');
            $data['content_top']    = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer']         = $this->load->controller('common/footer');
            $data['header']         = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('octemplates/module/oct_sreview_reviews', $data));
        } else {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = [
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('octemplates/module/oct_sreview_reviews', $url)
            ];

            $this->document->setTitle($this->language->get('text_error'));

            $data['heading_title'] = $this->language->get('text_error');

            $data['text_error'] = $this->language->get('text_error');

            $data['button_continue'] = $this->language->get('button_continue');

            $data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left']    = $this->load->controller('common/column_left');
            $data['column_right']   = $this->load->controller('common/column_right');
            $data['content_top']    = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer']         = $this->load->controller('common/footer');
            $data['header']         = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }

    public function write() {
	    if ($this->config->get('oct_sreview_setting_status') && isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	        $this->load->language('octemplates/module/oct_sreview_reviews');

	        $json = [];

	        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
	            if ((utf8_strlen($this->request->post['author']) < 3) || (utf8_strlen($this->request->post['author']) > 25)) {
	                $json['error']['author'] = $this->language->get('error_author');
	            }

	            if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
	                $json['error']['text'] = $this->language->get('error_text');
	            }

	            if (!isset($this->request->post['rating'])) {
					$json['error']['rating'] = $this->language->get('error_rating');
	            }

				// Captcha
				if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('oct_sreview_reviews', (array)$this->config->get('config_captcha_page'))) {
					$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

					if ($captcha) {
						$json['error']['captcha'] = $captcha;
					}
				}

	            if (isset($this->request->post['rating'])) {
					$this->load->model('octemplates/module/oct_sreview_reviews');

					$sreview_subject_ids = $this->model_octemplates_module_oct_sreview_reviews->getSubjects();

					foreach($sreview_subject_ids as $subject_id){
						if(!array_key_exists($subject_id['oct_sreview_subject_id'], $this->request->post['rating'])){
							$json['error']['rating'] = $this->language->get('error_rating');
						}
					}
	            }

	            if (!isset($json['error'])) {
	                $this->load->model('octemplates/module/oct_sreview_reviews');

	                $this->model_octemplates_module_oct_sreview_reviews->addReview($this->request->post);

	                $json['success'] = $this->language->get('text_success');
	            }
	        }

	        $this->response->addHeader('Content-Type: application/json');
	        $this->response->setOutput(json_encode($json));
        } else {
	        $this->response->redirect($this->url->link('error/not_found', '', true));
        }
    }
}
