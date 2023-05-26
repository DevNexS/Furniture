<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/				  */
/*	@license	LICENSE.txt								  */
/**********************************************************/

class ModelOCTemplatesWidgetsOctMinify extends Model {
	public function octMinifyCss($data) {
		$oct_remarket_data = isset($this->config->get('theme_oct_remarket_data')['minify']) ? 1 : 0;
		$oct_styles = $this->document->getOctStyles();

		if ($oct_remarket_data) {
			$oct_remarket_version = "?v=" . $this->config->get('theme_oct_remarket_version');

			$dir_minify = dirname(DIR_APPLICATION) . '/min/';

			require_once $dir_minify . 'lib/Minify/CSS/UriRewriter.php';

			$link_server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

			if (!is_dir($dir_minify . 'cache/')) {
				@mkdir($dir_minify . 'cache/', 0755);
			}

			$oct_fn = [];

			$oct_name = md5(json_encode($oct_styles)) . '.css';

			if (!file_exists($dir_minify . 'cache/' . $oct_name)) {
				$oct_file = fopen($dir_minify . 'cache/' . $oct_name, "a+");

				foreach ($oct_styles as $href => $style) {
					$link = parse_url($href);

					if (!isset($link['host'])) {
						if (file_exists(dirname(DIR_APPLICATION) . '/' . ltrim($href))) {
							$oct_content_to = Minify_CSS_UriRewriter::rewrite(@file_get_contents(dirname(DIR_APPLICATION) . '/' . ltrim($href)), dirname($href));
							$oct_content_to = str_replace('m+', 'm + ', $oct_content_to);
							$oct_content_to = str_replace('%+', '% + ', $oct_content_to);
							$oct_content_to = str_replace('x+', 'x + ', $oct_content_to);

							fwrite($oct_file, $oct_content_to);
							fwrite($oct_file, PHP_EOL);
						}
					} else {
						$oct_fn[$href] = [
							'href' => $href,
							'rel' => $style['rel'],
							'media' => $style['media']
						];
					}
				}

				fclose($oct_file);

				if (file_exists($dir_minify . 'cache/' . $oct_name) && filesize($dir_minify . 'cache/' . $oct_name)) {
					$oct_content = @file_get_contents($link_server . 'min/?f=min/cache/' . $oct_name);

					if ($oct_content) {
						$oct_content = str_replace('m+', 'm + ', preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $oct_content));
						$oct_content = str_replace('%+', '% + ', preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $oct_content));
						$oct_content = str_replace('x+', 'x + ', preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $oct_content));

						@file_put_contents($dir_minify . 'cache/' . $oct_name, '');

						$oct_file = fopen($dir_minify . 'cache/' . $oct_name, "a");
						fwrite($oct_file, $oct_content);
						fclose($oct_file);
					}
				}
			} else {
				foreach ($oct_styles as $href => $style) {
					$link = parse_url($href);

					if (isset($link['host'])) {
						$oct_fn[$href] = [
							'href' => $href,
							'rel' => $style['rel'],
							'media' => $style['media']
						];
					}
				}
			}

			if (file_exists($dir_minify . 'cache/' . $oct_name)) {
				$oct_styles = [];

				$oct_styles[0] = [
					//'href' => 'min/cache/' . $oct_name . $oct_remarket_version,
					'href' => 'min/cache/' . $oct_name . "?" . date('YmdHis', filemtime($_SERVER['DOCUMENT_ROOT'] . '/min/cache/' . $oct_name)),
					'rel' => 'stylesheet',
					'media' => 'screen'
				];

				$oct_styles = array_merge($oct_styles, $oct_fn);
			}
		}

		return $oct_styles;
	}

	public function octMinifyJs() {
		$oct_remarket_data = isset($this->config->get('theme_oct_remarket_data')['minify']) ? 1 : 0;
		$oct_scripts = $this->document->getOctScripts();

		if ($oct_remarket_data) {
			$oct_remarket_version = "?v=" . $this->config->get('theme_oct_remarket_version');

			$dir_minify = dirname(DIR_APPLICATION) . '/min/';

			require_once $dir_minify . 'lib/Minify/CSS/UriRewriter.php';

			$link_server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

			if (!is_dir($dir_minify . 'cache/')) {
				@mkdir($dir_minify . 'cache/', 0755);
			}

			$oct_fn = [];

			$oct_name = md5(json_encode($oct_scripts)) . '.js';

			if (!file_exists($dir_minify . 'cache/' . $oct_name)) {
				$oct_file = fopen($dir_minify . 'cache/' . $oct_name, "a+");

				foreach ($oct_scripts as $href => $script) {
					$link = parse_url($href);

					if (!isset($link['host'])) {
						if (file_exists(dirname(DIR_APPLICATION) . '/' . ltrim($href))) {
							$oct_content_to = Minify_CSS_UriRewriter::rewrite(@file_get_contents(dirname(DIR_APPLICATION) . '/' . ltrim($href)), dirname($href));

							$oct_content_to = str_replace('"background": "url("/catalog/view/javascript/ + self.params.additionalParams + self.resources.loading + ") no-repeat center center",','"background": "url(" + self.params.additionalParams + self.resources.loading + ") no-repeat center center",', $oct_content_to);
							$oct_content_to = str_replace('/catalog/view/javascript/mf/','', $oct_content_to);

							fwrite($oct_file, $oct_content_to);
							fwrite($oct_file, PHP_EOL);
						}
					} else {
						$oct_fn[$href] = $href;
					}
				}

				fclose($oct_file);

				if (file_exists($dir_minify . 'cache/' . $oct_name) && filesize($dir_minify . 'cache/' . $oct_name)) {
					$oct_content = @file_get_contents($link_server . 'min/?f=min/cache/' . $oct_name);

					if ($oct_content) {
						@file_put_contents($dir_minify . 'cache/' . $oct_name, '');

						$oct_file = fopen($dir_minify . 'cache/' . $oct_name, "a");
						fwrite($oct_file, $oct_content);
						fclose($oct_file);
					}
				}
			} else {
				foreach ($oct_scripts as $href => $script) {
					$link = parse_url($href);

					if (isset($link['host'])) {
						$oct_fn[$href] = $href;
					}
				}
			}

			if (file_exists($dir_minify . 'cache/' . $oct_name)) {
				$oct_scripts = [];

				//$oct_scripts[0] = 'min/cache/' . $oct_name . $oct_remarket_version;
				$oct_scripts[0] = 'min/cache/' . $oct_name . "?" . date('YmdHis', filemtime($_SERVER['DOCUMENT_ROOT'] . '/min/cache/' . $oct_name));

				$oct_scripts = array_merge($oct_scripts, $oct_fn);
			}
		}

		return $oct_scripts;
	}
}
