<?php
class ControllerExtensionFeedGoogleSitemap extends Controller {

			protected function getBlogCategories($parent_id, $current_path = '') {
				$output = '';

				$results = $this->model_octemplates_blog_oct_blogcategory->getBlogCategories($parent_id);

				foreach ($results as $result) {
					if (!$current_path) {
						$new_path = $result['blogcategory_id'];
					} else {
						$new_path = $current_path . '_' . $result['blogcategory_id'];
					}

					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('octemplates/blog/oct_blogcategory', 'blog_path=' . $new_path) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <priority>0.7</priority>';
					$output .= '</url>';

					$output .= $this->getBlogCategories($result['blogcategory_id'], $new_path);
				}

				return $output;
			}
			
	public function index() {
		if ($this->config->get('feed_google_sitemap_status')) {
			$output  = '<?xml version="1.0" encoding="UTF-8"?>';
			$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

			$this->load->model('catalog/product');
			$this->load->model('tool/image');

			$products = $this->model_catalog_product->getProducts();

			foreach ($products as $product) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/product', 'product_id=' . $product['product_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])) . '</lastmod>';
				$output .= '  <priority>1.0</priority>';

				if ($product['image']) {
					$output .= '  <image:image>';
					$output .= '  <image:loc>' . $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')) . '</image:loc>';
					$output .= '  <image:caption>' . $product['name'] . '</image:caption>';
					$output .= '  <image:title>' . $product['name'] . '</image:title>';
					$output .= '  </image:image>';
				}

				$output .= '</url>';
			}

			$this->load->model('catalog/category');

			$output .= $this->getCategories(0);

			$this->load->model('catalog/manufacturer');

			$manufacturers = $this->model_catalog_manufacturer->getManufacturers();

			foreach ($manufacturers as $manufacturer) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.7</priority>';
				$output .= '</url>';
			}


			if ($this->config->get('oct_blogsettings_status')) {
				$this->load->model('octemplates/blog/oct_blogarticle');
				$oct_blogsettings_data = $this->config->get('oct_blogsettings_data');

				$articles = $this->model_octemplates_blog_oct_blogarticle->getArticles();

				foreach ($articles as $article) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('octemplates/blog/oct_blogarticle', 'blogarticle_id=' . $article['blogarticle_id']) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($article['date_modified'])) . '</lastmod>';
					$output .= '  <priority>1.0</priority>';

					if ($article['image']) {
						$output .= '  <image:image>';
						$output .= '  <image:loc>' . $this->model_tool_image->resize($article['image'], $oct_blogsettings_data['article_width'], $oct_blogsettings_data['article_height']) . '</image:loc>';
						$output .= '  <image:caption>' . $article['name'] . '</image:caption>';
						$output .= '  <image:title>' . $article['name'] . '</image:title>';
						$output .= '  </image:image>';
					}

					$output .= '</url>';
				}

				$this->load->model('octemplates/blog/oct_blogcategory');

				$output .= $this->getBlogCategories(0);
			}
			
			$this->load->model('catalog/information');

			$informations = $this->model_catalog_information->getInformations();

			foreach ($informations as $information) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('information/information', 'information_id=' . $information['information_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.5</priority>';
				$output .= '</url>';
			}

			$output .= '</urlset>';

			$this->response->addHeader('Content-Type: application/xml');
			$this->response->setOutput($output);
		}
	}

	protected function getCategories($parent_id) {
		$output = '';

		$results = $this->model_catalog_category->getCategories($parent_id);

		foreach ($results as $result) {
			$output .= '<url>';
			$output .= '  <loc>' . $this->url->link('product/category', 'path=' . $result['category_id']) . '</loc>';
			$output .= '  <changefreq>weekly</changefreq>';
			$output .= '  <priority>0.7</priority>';
			$output .= '</url>';

			$output .= $this->getCategories($result['category_id']);
		}

		return $output;
	}
}
