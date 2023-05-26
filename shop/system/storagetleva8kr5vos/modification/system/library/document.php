<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Document class
*/
class Document {
	private $title;
	private $description;
	private $keywords;

	private $links = array();
	private $styles = array();
	private $scripts = array();

			private $oct_files = [];

			public function setOCTPreload($oct_file) {
				$this->oct_files[$oct_file] = $oct_file;
			}

			public function getOCTPreload() {
				return $this->oct_files;
			}
			

			private $octStyles = [];
			private $octScripts = [];

			public function addOctStyle($href, $rel = 'stylesheet', $media = 'screen', $position = 'header') {
				$href = $this->removeVersion($href);

				$this->octStyles[$position][$href] = [
					'href'  => $href,
					'rel'   => $rel,
					'media' => $media
				];
			}

			public function getOctStyles($position = 'header') {
				if (isset($this->octStyles[$position])) {
					$styles = isset($this->styles) ? isset($this->styles[$position]) ? $this->styles[$position] : $this->styles : [];
					$this->styles = [];
					$this->styles[$position] = [];

					foreach ($styles as $style) {
						$href = $this->removeVersion($style['href']);

						$this->styles[$position][$href] = [
							'href'  => $href,
							'rel'   => $style['rel'],
							'media' => $style['media']
						];
					}

					return array_merge($this->octStyles[$position], $this->styles[$position]);
				} else {
					return [];
				}
			}

			public function addOctScript($href, $position = 'header') {
				$href = $this->removeVersion($href);

				$this->octScripts[$position][$href] = $href;
			}

			public function getOctScripts($position = 'header') {
				if (isset($this->octScripts[$position])) {
					$scripts = isset($this->scripts[$position]) ? $this->scripts[$position] : [];
					$this->scripts[$position] = [];

					foreach ($scripts as $script) {
						$href = $this->removeVersion($script);

						$this->scripts[$position][$href] = $href;
					}

					return array_merge($this->octScripts[$position], $this->scripts[$position]);
				} else {
					return array();
				}
			}

			private function removeVersion($link) {
				$href = explode('?', $link);

				if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($href[0]))) {
			       $link = $href[0];
		        }

		        return $link;
		    }
			

            private $octOpenGraph = [];

            public function setOCTOpenGraph($property, $content) {
        		$this->octOpenGraph[$property] = [
                    'property' => $property,
                    'content' => $content
                ];
        	}

            public function getOCTOpenGraph() {
                return $this->octOpenGraph;
            }
			

	/**
     * 
     *
     * @param	string	$title
     */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
     * 
	 * 
	 * @return	string
     */
	public function getTitle() {
		return $this->title;
	}

	/**
     * 
     *
     * @param	string	$description
     */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
     * 
     *
     * @param	string	$description
	 * 
	 * @return	string
     */
	public function getDescription() {
		return $this->description;
	}

	/**
     * 
     *
     * @param	string	$keywords
     */
	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	/**
     *
	 * 
	 * @return	string
     */
	public function getKeywords() {
		return $this->keywords;
	}
	
	/**
     * 
     *
     * @param	string	$href
	 * @param	string	$rel
     */
	public function addLink($href, $rel) {
		$this->links[$href] = array(
			'href' => $href,
			'rel'  => $rel
		);
	}

	/**
     * 
	 * 
	 * @return	array
     */
	public function getLinks() {
		return $this->links;
	}

	/**
     * 
     *
     * @param	string	$href
	 * @param	string	$rel
	 * @param	string	$media
     */
	public function addStyle($href, $rel = 'stylesheet', $media = 'screen', $position = 'header') {
		$this->styles[$position][$href] = array(
			'href'  => $href,
			'rel'   => $rel,
			'media' => $media
		);
	}

	/**
     * 
	 * 
	 * @return	array
     */
	public function getStyles($position = 'header') {
		if (isset($this->styles[$position])) {
			return $this->styles[$position];
		} else {
			return array();
		}
	}

	/**
     * 
     *
     * @param	string	$href
	 * @param	string	$position
     */
	public function addScript($href, $position = 'header') {
		$this->scripts[$position][$href] = $href;
	}

	/**
     * 
     *
     * @param	string	$position
	 * 
	 * @return	array
     */
	public function getScripts($position = 'header') {
		if (isset($this->scripts[$position])) {
			return $this->scripts[$position];
		} else {
			return array();
		}
	}
}