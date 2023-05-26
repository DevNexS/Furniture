<?php
class ControllerInformationSitemap extends Controller {
	public function index() {
		$this->load->language('information/sitemap');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/sitemap')
		);

		$this->load->model('catalog/category');


			$data['blog_categories'] = [];

			if ($this->config->get('oct_blogsettings_status')) {
				$this->load->model('octemplates/blog/oct_blogcategory');

				$blog_categories_1 = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories(0);

				foreach ($blog_categories_1 as $blog_category_1) {
					$blog_level_2_data = [];

					$blog_categories_2 = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories($blog_category_1['blogcategory_id']);

					foreach ($blog_categories_2 as $blog_category_2) {
						$blog_level_3_data = array();

						$blog_categories_3 = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories($blog_category_2['blogcategory_id']);

						foreach ($blog_categories_3 as $blog_category_3) {
							$blog_level_3_data[] = array(
								'name' => $blog_category_3['name'],
								'href' => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_1['blogcategory_id'] . '_' . $blog_category_2['blogcategory_id'] . '_' . $blog_category_3['blogcategory_id'])
							);
						}

						$blog_level_2_data[] = array(
							'name'     => $blog_category_2['name'],
							'children' => $blog_level_3_data,
							'href'     => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_1['blogcategory_id'] . '_' . $blog_category_2['blogcategory_id'])
						);
					}

					$data['blog_categories'][] = array(
						'name'     => $blog_category_1['name'],
						'children' => $blog_level_2_data,
						'href'     => $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $blog_category_1['blogcategory_id'])
					);
				}
			}
			
		$data['categories'] = array();

		$categories_1 = $this->model_catalog_category->getCategories(0);

		foreach ($categories_1 as $category_1) {
			$level_2_data = array();

			$categories_2 = $this->model_catalog_category->getCategories($category_1['category_id']);

			foreach ($categories_2 as $category_2) {
				$level_3_data = array();

				$categories_3 = $this->model_catalog_category->getCategories($category_2['category_id']);

				foreach ($categories_3 as $category_3) {
					$level_3_data[] = array(
						'name' => $category_3['name'],
						'href' => $this->url->link('product/category', 'path=' . $category_1['category_id'] . '_' . $category_2['category_id'] . '_' . $category_3['category_id'])
					);
				}

				$level_2_data[] = array(
					'name'     => $category_2['name'],
					'children' => $level_3_data,
					'href'     => $this->url->link('product/category', 'path=' . $category_1['category_id'] . '_' . $category_2['category_id'])
				);
			}

			$data['categories'][] = array(
				'name'     => $category_1['name'],
				'children' => $level_2_data,
				'href'     => $this->url->link('product/category', 'path=' . $category_1['category_id'])
			);
		}

		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['history'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['search'] = $this->url->link('product/search');
		$data['contact'] = $this->url->link('information/contact');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			$data['informations'][] = array(
				'title' => $result['title'],
				'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
			);
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

			$oct_data['breadcrumbs'] = $data['breadcrumbs'];

			$data['oct_breadcrumbs'] = $this->load->controller('octemplates/main/oct_functions/octBreadcrumbs', $oct_data);
			

		$this->response->setOutput($this->load->view('information/sitemap', $data));
	}
}