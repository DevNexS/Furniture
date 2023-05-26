<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesBlogOCTBlogSearch extends Controller {
	public function index() {
		if (!$this->config->get('oct_blogsettings_status')) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}

		$this->load->language('octemplates/blog/oct_blogsearch');

		$this->load->model('octemplates/blog/oct_blogcategory');
		$this->load->model('octemplates/blog/oct_blogarticle');
		$this->load->model('tool/image');

		$oct_blogsettings_data = $this->config->get('oct_blogsettings_data');

		if (isset($this->request->get['search'])) {
			$search = $this->request->get['search'];
		} else {
			$search = '';
		}

		if (isset($this->request->get['tag'])) {
			$tag = $this->request->get['tag'];
		} elseif (isset($this->request->get['search'])) {
			$tag = $this->request->get['search'];
		} else {
			$tag = '';
		}

		$sort = 'a.date_added';
		$order = 'DESC';

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = (int)$oct_blogsettings_data['limit'];
		}

		if (isset($this->request->get['search'])) {
			$this->document->setTitle($this->language->get('heading_title') .  ' - ' . $this->request->get['search']);
		} elseif (isset($this->request->get['tag'])) {
			$this->document->setTitle($this->language->get('heading_title') .  ' - ' . $this->language->get('heading_tag') . $this->request->get['tag']);
		} else {
			$this->document->setTitle($this->language->get('heading_title'));
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		];

		$url = '';

		if (isset($this->request->get['search'])) {
			$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['tag'])) {
			$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/search', $url)
		];

		if (isset($this->request->get['search'])) {
			$data['heading_title'] = $this->language->get('heading_title') .  ' - ' . $this->request->get['search'];
		} else {
			$data['heading_title'] = $this->language->get('heading_title');
		}

		$data['articles'] = [];

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$data['oct_lazyload'] = false;

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

			$filter_data = [
				'filter_name'         => $search,
				'filter_tag'          => $tag,
				'sort'                => $sort,
				'order'               => $order,
				'start'               => ($page - 1) * $limit,
				'limit'               => $limit
			];

			$article_total = $this->model_octemplates_blog_oct_blogarticle->getTotalArticles($filter_data);

			$results = $this->model_octemplates_blog_oct_blogarticle->getArticles($filter_data);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['articles_width'], $oct_blogsettings_data['articles_height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $oct_blogsettings_data['articles_width'], $oct_blogsettings_data['articles_height']);
				}

				$description = !empty(trim(strip_tags($result['shot_description']))) ? $result['shot_description'] : $result['description'];

				$data['articles'][] = [
					'blogarticle_id'		=> $result['blogarticle_id'],
					'thumb'					=> $image,
					'width'					=> $oct_blogsettings_data['articles_width'],
					'height'				=> $oct_blogsettings_data['articles_height'],
					'name'					=> $result['name'],
					'viewed'				=> $result['viewed'],
					'description'			=> utf8_substr(trim(strip_tags(html_entity_decode($description, ENT_QUOTES, 'UTF-8'))), 0, $oct_blogsettings_data['description_length']) . '..',
					'date_added'			=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'href'			        => $this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $result['blogarticle_id'] . $url)
				];
			}

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			$data['limits'] = [];

			$limits = array_unique([$limit, 25, 50, 75, 100]);

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = [
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/search', $url . '&limit=' . $value)
				];
			}

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$pagination = new Pagination();
			$pagination->total = $article_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('octemplates/blog/oct_blogsearch', $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($article_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($article_total - $limit)) ? $article_total : ((($page - 1) * $limit) + $limit), $article_total, ceil($article_total / $limit));
		}

		$data['search'] = $search;

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$oct_data['breadcrumbs'] = $data['breadcrumbs'];

		$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);

		$this->response->setOutput($this->load->view('octemplates/blog/oct_blogsearch', $data));
	}
}
