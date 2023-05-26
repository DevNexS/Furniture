<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesBlogOCTBlogArticle extends Controller {
	private $error = [];

	public function index() {
		if (!$this->config->get('oct_blogsettings_status')) {
			$this->response->redirect($this->url->link('common/home', '', true));
		}

		$oct_remarket_data = $this->config->get('theme_oct_remarket_data');

		if ($this->registry->has('oct_mobiledetect')) {
			if ($this->oct_mobiledetect->isMobile() && !$this->oct_mobiledetect->isTablet()) {
				$data['oct_isMobile'] = $this->oct_mobiledetect->isMobile();
			}

			if ($this->oct_mobiledetect->isTablet()) {
				$data['oct_isTablet'] = $this->oct_mobiledetect->isTablet();
			}
		}

		$oct_blogsettings_data = $this->config->get('oct_blogsettings_data');

		$this->load->language('octemplates/blog/oct_blogarticle');

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		];

		$this->load->model('octemplates/blog/oct_blogcategory');

		if (isset($this->request->get['blog_path'])) {
			$path = '';

			$parts = explode('_', (string)$this->request->get['blog_path']);

			$blogcategory_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = [
						'text' => $category_info['name'],
						'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $path)
					];
				}
			}

			// Set the last category breadcrumb
			$category_info = $this->model_octemplates_blog_oct_blogcategory->getBlogCategory($blogcategory_id);

			if ($category_info) {
				$url = '';

				if (isset($this->request->get['sort'])) {
					$url .= '&sort=' . $this->request->get['sort'];
				}

				if (isset($this->request->get['order'])) {
					$url .= '&order=' . $this->request->get['order'];
				}

				if (isset($this->request->get['page'])) {
					$url .= '&page=' . $this->request->get['page'];
				}

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$data['breadcrumbs'][] = [
					'text' => $category_info['name'],
					'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $this->request->get['blog_path'] . $url)
				];
			}
		}

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}
		}

		if (isset($this->request->get['blogarticle_id'])) {
			$blogarticle_id = (int)$this->request->get['blogarticle_id'];
		} else {
			$blogarticle_id = 0;
		}

		$this->load->model('octemplates/blog/oct_blogarticle');

		$article_info = $this->model_octemplates_blog_oct_blogarticle->getArticle($blogarticle_id);

		if ($article_info) {
			$url = '';

			if (isset($this->request->get['blog_path'])) {
				$url .= '&blog_path=' . $this->request->get['blog_path'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = [
				'text' => $article_info['name'],
				'href' => $this->url->link('octemplates/blog/oct_blogarticle', $url . '&blogarticle_id=' . $this->request->get['blogarticle_id'])
			];

			$this->document->setTitle($article_info['meta_title']);
			$this->document->setDescription($article_info['meta_description']);
			$this->document->setKeywords($article_info['meta_keyword']);
			$this->document->addLink($this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $this->request->get['blogarticle_id']), 'canonical');

			$data['heading_title'] = $article_info['name'];

			$this->load->model('catalog/review');

			$data['blogarticle_id'] = (int)$this->request->get['blogarticle_id'];

			$data['description'] = str_replace("<img", "<img class='img-fluid'", html_entity_decode($article_info['description'], ENT_QUOTES, 'UTF-8'));

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

			$data['date_added'] = date($this->language->get('datetime_format_blog'), strtotime($article_info['date_added']));

			$this->load->model('tool/image');

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

			if ($article_info['image'] && (isset($oct_blogsettings_data['show_main_image']) && $oct_blogsettings_data['show_main_image'])) {
				$data['thumb'] = $this->model_tool_image->resize($article_info['image'], $oct_blogsettings_data['article_width'], $oct_blogsettings_data['article_height']);
			} else {
				$data['thumb'] = '';
			}

			$data['thumb_width'] = $oct_blogsettings_data['article_width'];
			$data['thumb_height'] = $oct_blogsettings_data['article_height'];

			if (isset($oct_remarket_data['preload_images']) && $oct_remarket_data['preload_images'] && !empty($data['thumb'])) {
				$this->document->setOCTPreload($data['thumb']);
			}

			$data['images'] = [];

			$results = $this->model_octemplates_blog_oct_blogarticle->getArticleImages($this->request->get['blogarticle_id']);

			foreach ($results as $result) {
				if (isset($result['image']) && !empty($result['image']) && $result['image'] && file_exists(DIR_IMAGE . $result['image'])) {
					$data['images'][] = [
						'thumb'			=> $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['article_dop_width'], $oct_blogsettings_data['article_dop_height']),
						'thumb_width'	=> $oct_blogsettings_data['article_dop_width'],
						'thumb_height'	=> $oct_blogsettings_data['article_dop_height'],
						'popup'			=> $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['article_width'], $oct_blogsettings_data['article_height']),
						'popup_width'	=> $oct_blogsettings_data['article_width'],
						'popup_height'	=> $oct_blogsettings_data['article_height'],
					];
				}
			}

			if (!empty($data['images'])) {
				$this->document->addScript('catalog/view/theme/oct_remarket/js/fancybox/jquery.fancybox.min.js');
				$this->document->addStyle('catalog/view/theme/oct_remarket/js/fancybox/jquery.fancybox.min.css');
			}

			$data['review_status'] = false;

			if (isset($oct_blogsettings_data['comments']) && $oct_blogsettings_data['comments'] == 'on') {
				$review_status = $this->config->get('config_review_status');

				if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
					$review_guest = true;
				} else {
					$review_guest = false;
				}

				if ($review_status && $review_guest) {
					$data['review_status'] = true;
				}
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['comments_total'] = sprintf($this->language->get('text_reviews'), (int)$article_info['comments_total']);
			$data['comments_viewed'] = sprintf($this->language->get('text_viewed'), (int)$article_info['viewed']);

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['articles'] = [];

			$artusle_results = $this->model_octemplates_blog_oct_blogarticle->getArticleRelated($this->request->get['blogarticle_id']);

			foreach ($artusle_results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['dop_article_width'], $oct_blogsettings_data['dop_article_height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $oct_blogsettings_data['dop_article_width'], $oct_blogsettings_data['dop_article_height']);
				}

				$description = !empty(trim(strip_tags($result['shot_description']))) ? $result['shot_description'] : $result['description'];

				$data['articles'][] = [
					'blogarticle_id'		=> $result['blogarticle_id'],
					'thumb'					=> $image,
					'width'					=> $oct_blogsettings_data['dop_article_width'],
					'height'				=> $oct_blogsettings_data['dop_article_height'],
					'name'					=> $result['name'],
					'description'			=> utf8_substr(trim(strip_tags(html_entity_decode($description, ENT_QUOTES, 'UTF-8'))), 0, $oct_blogsettings_data['description_length']) . '..',
					'date_added'			=> date($this->language->get('date_format_short'), strtotime($result['date_added'])),
					'href'			        => $this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $result['blogarticle_id'])
				];
			}

			$data['oct_popup_view_status'] = $this->config->get('oct_popup_view_status');

			$data['products'] = [];

			$product_results = $this->model_octemplates_blog_oct_blogarticle->getArticleRelatedProduct($this->request->get['blogarticle_id']);

			$oct_product_stickers = [];

			if ($this->config->get('oct_stickers_status')) {
				$oct_stickers = $this->config->get('oct_stickers_data');

				$data['oct_sticker_you_save'] = false;

				if ($oct_stickers) {
					$data['oct_sticker_you_save'] = isset($oct_stickers['stickers']['special']['persent']) ? true : false;
				}

				$this->load->model('octemplates/stickers/oct_stickers');
			}

			foreach ($product_results as $result) {
				if (isset($oct_stickers) && $oct_stickers) {
					$oct_stickers_data = $this->model_octemplates_stickers_oct_stickers->getOCTStickers($result);

					$oct_product_stickers = [];

					if ($oct_stickers_data) {
						$oct_product_stickers = $oct_stickers_data['stickers'];
					}
				}

				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $oct_blogsettings_data['product_width'], $oct_blogsettings_data['product_height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $oct_blogsettings_data['product_width'], $oct_blogsettings_data['product_height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				if ($result['quantity'] <= 0) {
					$stock = $result['stock_status'];
				} else {
					$stock = false;
				}

				$can_buy = true;

				if ($result['quantity'] <= 0 && !$this->config->get('config_stock_checkout')) {
					$can_buy = false;
				} elseif ($result['quantity'] <= 0 && $this->config->get('config_stock_checkout')) {
					$can_buy = true;
				}

				$oct_grayscale = ($this->config->get('theme_oct_remarket_no_quantity_grayscale') && !$can_buy) ? true : false;

				$oct_atributes = false;

				$data['products'][] = [
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'width'		  => $oct_blogsettings_data['product_width'],
					'height'	  => $oct_blogsettings_data['product_height'],
					'name'        => $result['name'],
					'oct_model'	  => $this->config->get('theme_oct_remarket_data_model') ? $result['model'] : '',
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'stock'		  => $stock,
					'can_buy'     => $can_buy,
					'oct_grayscale'  => $oct_grayscale,
					'oct_atributes'  => $oct_atributes,
					'oct_stickers'  => $oct_product_stickers,
					'you_save'	  	=> $result['you_save'],
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'reviews'	  => $result['reviews'],
					'quantity'	  => $result['quantity'] <= 0 ? true : false,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				];
			}

			$data['products'] = $this->load->controller('octemplates/module/oct_products_modules', $data);

			$data['tags'] = [];

			if ($article_info['tag']) {
				$tags = explode(',', $article_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = [
						'tag'  => trim($tag),
						'href' => $this->url->link('octemplates/blog/oct_blogsearch', 'tag=' . trim($tag))
					];
				}
			}

            if (isset($oct_remarket_data['open_graph']) && $oct_remarket_data['open_graph']) {
                $site_link = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;

				$config_logo = file_exists(DIR_IMAGE . $this->config->get('config_logo')) ? $this->config->get('config_logo') : 'catalog/opencart-logo.png';

				$oct_ogimage = $article_info['image'] ? $article_info['image'] : $config_logo;
                $blog_article_image = $site_link . 'image/' . $oct_ogimage;

				$image_info = getimagesize(DIR_IMAGE . $oct_ogimage);

				$image_width  = $image_info[0];
				$image_height = $image_info[1];
				$mime_type = isset($image_info['mime']) ? $image_info['mime'] : '';

                $this->document->setOCTOpenGraph('og:title', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", (isset($oct_seo_title) && $oct_seo_title) ? $oct_seo_title : $article_info['meta_title'])))))));
                $this->document->setOCTOpenGraph('og:description', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", (isset($oct_seo_description) && $oct_seo_description && empty($article_info['meta_description'])) ? $oct_seo_description : $article_info['meta_description'])))))));
                $this->document->setOCTOpenGraph('og:site_name', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $this->config->get('config_name'))))))));
                $this->document->setOCTOpenGraph('og:url', $this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $this->request->get['blogarticle_id']));
                $this->document->setOCTOpenGraph('og:image', str_replace(" ", "%20", $blog_article_image));

				if (isset($mime_type) && $mime_type) {
                	$this->document->setOCTOpenGraph('og:image:type', $mime_type);
				}

				if (isset($image_width) && $image_width) {
                	$this->document->setOCTOpenGraph('og:image:width', $image_width);
				}

				if (isset($image_height) && $image_height) {
					$this->document->setOCTOpenGraph('og:image:height', $image_height);
				}

                $this->document->setOCTOpenGraph('og:image:alt', htmlspecialchars(strip_tags(str_replace("\r", " ", str_replace("\n", " ", str_replace("\\", "/", str_replace("\"", "", $data['heading_title'])))))));
                $this->document->setOCTOpenGraph('og:type', 'article');
            }

			$this->model_octemplates_blog_oct_blogarticle->updateViewed($this->request->get['blogarticle_id']);

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);

			$this->response->setOutput($this->load->view('octemplates/blog/oct_blogarticle', $data));
		} else {
			$url = '';

			if (isset($this->request->get['blog_path'])) {
				$url .= '&blog_path=' . $this->request->get['blog_path'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('octemplates/blog/oct_blogarticle', $url . '&blogarticle_id=' . $blogarticle_id)
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

	public function comment() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$this->load->model('octemplates/blog/oct_blogcomment');

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['comments'] = [];

		$review_total = $this->model_octemplates_blog_oct_blogcomment->getTotalCommentsByArticleId($this->request->get['blogarticle_id']);

		$results = $this->model_octemplates_blog_oct_blogcomment->getCommentsByArticleId($this->request->get['blogarticle_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['comments'][] = [
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),
				'admin_text' => nl2br($result['admin_text']),
				'date_added' => date($this->language->get('datetime_format_blog'), strtotime($result['date_added']))
			];
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('octemplates/blog/oct_blogarticle/comment', 'blogarticle_id=' . $this->request->get['blogarticle_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		$this->response->setOutput($this->load->view('octemplates/blog/oct_blogcomment', $data));
	}

	public function write() {
		$this->load->language('octemplates/blog/oct_blogarticle');

		$json = [];

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error']['name'] = $this->language->get('error_name');
			}

			if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
				$json['error']['text'] = $this->language->get('error_text');
			}

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$json['error']['captcha'] = $captcha;
				}
			}

			if (!isset($json['error'])) {
				$this->load->model('octemplates/blog/oct_blogcomment');

				$this->model_octemplates_blog_oct_blogcomment->addComment($this->request->get['blogarticle_id'], $this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
