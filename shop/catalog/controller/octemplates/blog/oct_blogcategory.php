<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesBlogOCTBlogCategory extends Controller {
	public function index() {
		if (!$this->config->get('oct_blogsettings_status')) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}

		$oct_remarket_data = $this->config->get('theme_oct_remarket_data');

		$this->load->language('octemplates/blog/oct_blogcategory');
		$this->load->model('octemplates/blog/oct_blogcategory');
		$this->load->model('octemplates/blog/oct_blogarticle');
		$this->load->model('tool/image');

		$oct_blogsettings_data = $this->config->get('oct_blogsettings_data');

		$sort = 'a.date_added';
		$order = 'DESC';

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = (int)$oct_blogsettings_data['limit'];
		}

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		];

		if (isset($this->request->get['blog_path'])) {
			$url = '';

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$path = '';

			$parts = explode('_', (string)$this->request->get['blog_path']);

			$blogcategory_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = (int)$path_id;
				} else {
					$path .= '_' . (int)$path_id;
				}

				$blog_category_info = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($path_id);

				if ($blog_category_info) {
					$data['breadcrumbs'][] = [
						'text' => $blog_category_info['name'],
						'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $path . $url)
					];
				}
			}
		} else {
			$blogcategory_id = 0;
		}

		$blog_category_info = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($blogcategory_id);

		if ($blog_category_info) {
			$this->document->setTitle($blog_category_info['meta_title']);
			$this->document->setDescription($blog_category_info['meta_description']);
			$this->document->setKeywords($blog_category_info['meta_keyword']);

			$data['heading_title'] = (isset($blog_category_info['meta_h1']) && !empty($blog_category_info['meta_h1'])) ? $blog_category_info['meta_h1'] : $blog_category_info['name'];

			$data['breadcrumbs'][] = [
				'text' => $blog_category_info['name'],
				'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $this->request->get['blog_path'])
			];

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

			$url = '';

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . (int)$this->request->get['limit'];
			}

			$data['blog_categories'] = [];

			/*
			$results = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories($blogcategory_id);

			foreach ($results as $result) {
				$filter_data = [
					'filter_blogcategory_id'  => $result['blogcategory_id'],
					'filter_sub_blogcategory' => true
				];

				$data['blog_categories'][] = [
					'name' => $result['name'] . ($this->config->get('oct_blogsettings_count_articles') ? ' (' . $this->model_octemplates_blog_oct_blogarticle->getTotalArticles($filter_data) . ')' : ''),
					'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $this->request->get['blog_path'] . '_' . $result['blogcategory_id'] . $url)
				];
			}
			*/

			$data['articles'] = [];

			$filter_data = [
				'filter_blogcategory_id'	=> $blogcategory_id,
				'sort'               		=> $sort,
				'order'              		=> $order,
				'start'              		=> ($page - 1) * $limit,
				'limit'              		=> $limit
			];

			$article_total = $this->model_octemplates_blog_oct_blogarticle->getTotalArticles($filter_data);

			$results = $this->model_octemplates_blog_oct_blogarticle->getArticles($filter_data);

			$ikey = 1;

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['articles_width'], $oct_blogsettings_data['articles_height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $oct_blogsettings_data['articles_width'], $oct_blogsettings_data['articles_height']);
				}

				if (isset($oct_remarket_data['preload_images']) && $oct_remarket_data['preload_images'] && $ikey == 1) {
					$this->document->setOCTPreload($image);
				}

				$description = !empty(trim(strip_tags($result['shot_description']))) ? $result['shot_description'] : $result['description'];

				$data['articles'][] = [
					'blogarticle_id'		=> $result['blogarticle_id'],
					'thumb'					=> $image,
					'width'					=> $oct_blogsettings_data['articles_width'],
					'height'				=> $oct_blogsettings_data['articles_height'],
					'name'					=> $result['name'],
					'viewed'				=> $result['viewed'],
					'description'			=> utf8_substr(trim(strip_tags(html_entity_decode($description, ENT_QUOTES, 'UTF-8'))), 0, 400) . '..',
					'date_added'			=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'href'			        => $this->url->link('octemplates/blog/oct_blogarticle', 'blog_path=' . $this->request->get['blog_path'] . '&blogarticle_id=' . $result['blogarticle_id'] . $url)
				];

				$ikey++;
			}

			$url = '';

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['limits'] = [];

			$limits = array_unique([$limit, 25, 50, 75, 100]);

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = [
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $this->request->get['blog_path'] . $url . '&limit=' . $value)
				];
			}

			$url = '';

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

            if (isset($oct_remarket_data['open_graph']) && $oct_remarket_data['open_graph']) {
                $site_link = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;

				$config_logo = file_exists(DIR_IMAGE . $this->config->get('config_logo')) ? $this->config->get('config_logo') : 'catalog/opencart-logo.png';

				$blog_category_image = $site_link . 'image/' . $config_logo;

				$image_info = getimagesize(DIR_IMAGE . $config_logo);

				if ($image_info) {
					$image_width  = $image_info[0];
					$image_height = $image_info[1];
				} else {
					$image_width  = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width') ? $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width') : 140;
					$image_height = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height') ? $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height') : 65;
				}

                $this->document->setOCTOpenGraph('og:title', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", (isset($oct_seo_title) && $oct_seo_title) ? $oct_seo_title : $blog_category_info['meta_title'])))))));
                $this->document->setOCTOpenGraph('og:description', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", (isset($oct_seo_description) && $oct_seo_description && empty($blog_category_info['meta_description'])) ? $oct_seo_description : $blog_category_info['meta_description'])))))));
                $this->document->setOCTOpenGraph('og:site_name', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $this->config->get('config_name'))))))));
                $this->document->setOCTOpenGraph('og:url', $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_info['blogcategory_id']));
                $this->document->setOCTOpenGraph('og:image', str_replace(" ", "%20", $blog_category_image));

				if (isset($mime_type) && $mime_type) {
                	$this->document->setOCTOpenGraph('og:image:type', $mime_type);
				}

				if (isset($image_width) && $image_width) {
                	$this->document->setOCTOpenGraph('og:image:width', $image_width);
				}

				if (isset($image_height) && $image_height) {
					$this->document->setOCTOpenGraph('og:image:height', $image_height);
				}

                $this->document->setOCTOpenGraph('og:type', 'website');
            }

			$pagination = new Pagination();
			$pagination->total = (int)$article_total;
			$pagination->page = (int)$page;
			$pagination->limit = (int)$limit;
			$pagination->url = $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $this->request->get['blog_path'] . $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($article_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($article_total - $limit)) ? $article_total : ((($page - 1) * $limit) + $limit), $article_total, ceil($article_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
			if ($page == 1) {
			    $this->document->addLink($this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_info['blogcategory_id']), 'canonical');
			} else {
				$this->document->addLink($this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_info['blogcategory_id'] . '&page='. $page), 'canonical');
			}

			if ($page > 1) {
			    $this->document->addLink($this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_info['blogcategory_id'] . (($page - 2) ? '&page='. ($page - 1) : '')), 'prev');
			}

			if ($limit && ceil($article_total / $limit) > $page) {
			    $this->document->addLink($this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_info['blogcategory_id'] . '&page='. ($page + 1)), 'next');
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

			$this->response->setOutput($this->load->view('octemplates/blog/oct_blogcategory', $data));
		} else {
			$url = '';

			if (isset($this->request->get['blog_path'])) {
				$url .= '&blog_path=' . $this->request->get['blog_path'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('octemplates/blog/oct_blogcategory', $url)
			];

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
