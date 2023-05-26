<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Response class
*/
class Response {
	private $headers = array();
	private $level = 0;
	private $output;

	/**
	 * Constructor
	 *
	 * @param	string	$header
	 *
 	*/
	public function addHeader($header) {
		$this->headers[] = $header;
	}
	
	/**
	 * 
	 *
	 * @param	string	$url
	 * @param	int		$status
	 *
 	*/
	public function redirect($url, $status = 302) {
		header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url), true, $status);
		exit();
	}
	
	/**
	 * 
	 *
	 * @param	int		$level
 	*/
	public function setCompression($level) {
		$this->level = $level;
	}
	
	/**
	 * 
	 *
	 * @return	array
 	*/
	public function getOutput() {
		return $this->output;
	}
	
	/**
	 * 
	 *
	 * @param	string	$output
 	*/	
	public function setOutput($output) {
		$this->output = $output;
	}
	
	/**
	 * 
	 *
	 * @param	string	$data
	 * @param	int		$level
	 * 
	 * @return	string
 	*/
	private function compress($data, $level = 0) {
		if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false)) {
			$encoding = 'gzip';
		}

		if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) && (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip') !== false)) {
			$encoding = 'x-gzip';
		}

		if (!isset($encoding) || ($level < -1 || $level > 9)) {
			return $data;
		}

		if (!extension_loaded('zlib') || ini_get('zlib.output_compression')) {
			return $data;
		}

		if (headers_sent()) {
			return $data;
		}

		if (connection_status()) {
			return $data;
		}

		$this->addHeader('Content-Encoding: ' . $encoding);

		return gzencode($data, (int)$level);
	}
	
	/**
	 * 
 	*/
	public function output() {

			if (!defined('HTTP_CATALOG')) $this->output = str_replace('index.php?route=common/home', '', $this->output);

			$oct_output = $this->output;

			preg_match_all("/<style>(.*?)<\/style>/is", $oct_output, $oct_css_code);

			if (isset($oct_css_code[1]) && !empty($oct_css_code[1]) && !defined('HTTP_CATALOG')) {
				$oct_output = preg_replace("/<style>.*?<\/style>/is", '', $oct_output);

				$styles = "<style>";

				foreach ($oct_css_code[1] as $code) {
					$styles .= $code;
				}

				$styles .= "</style></head>";

				$oct_output = str_replace("</head>", $styles, $oct_output);
			}

			if (preg_match("/<script id=\"dataFonts\">/is", $oct_output, $oct_js) && !defined('HTTP_CATALOG')) { 

				preg_match_all("/<script(?![^>]*\s(id|src))[^>]*>(.*?)<\/script>/is", $oct_output, $oct_js_code);

				if (isset($oct_js_code[0]) && !empty($oct_js_code[0])) {
					
					$js_code = "";

					foreach ($oct_js_code[0] as $code) {
						$js_code .= $code."\r\n";
					}

					$oct_output = preg_replace("/<script(?![^>]*\s(id|src))[^>]*>(.*?)<\/script>/is", '', $oct_output);

					preg_match("/<script src=\"min(.*?)<\/script>/", $oct_output, $oct_js_code);

					$oct_output = preg_replace("/<script src=\"min(.*?)<\/script>/i", '', $oct_output);

					preg_match_all("/<script src=\"(.*?)<\/script>/", $oct_output, $oct_js_code_lines);

					$oct_output = preg_replace("/<script src=\"(.*?)<\/script>/i", '', $oct_output);

					$js_src = "";

					foreach ($oct_js_code_lines[0] as $code) {
						$js_src .= $code . "\r\n";
					}
					
					$oct_output = str_replace("</footer>", "</footer>".$oct_js_code[0]."\r\n".$js_src."\r\n".$js_code, $oct_output);

				}
			}

			$this->output = $oct_output;
			
		if ($this->output) {
			$output = $this->level ? $this->compress($this->output, $this->level) : $this->output;
			
			if (!headers_sent()) {
				foreach ($this->headers as $header) {
					header($header, true);
				}
			}
			
			echo $output;
		}
	}
}
