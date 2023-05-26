<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022.					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesBlogOCTBlogSettings extends Controller {
	private $error = [];

	public function index() {
		$this->load->language('octemplates/blog/oct_blogsettings');

		//Add Codemirror Styles && Scripts
        $this->document->addScript('view/javascript/codemirror/lib/codemirror.js');
        $this->document->addScript('view/javascript/codemirror/lib/xml.js');
        $this->document->addScript('view/javascript/codemirror/lib/formatting.js');
        $this->document->addStyle('view/javascript/codemirror/lib/codemirror.css');
        $this->document->addStyle('view/javascript/codemirror/theme/monokai.css');

        //Add Summernote Styles && Scripts
        $this->document->addScript('view/javascript/summernote/summernote.js');
        $this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
        $this->document->addScript('view/javascript/summernote/opencart.js');
        $this->document->addStyle('view/javascript/summernote/summernote.css');

		$this->document->addScript('view/javascript/octemplates/bootstrap-notify/bootstrap-notify.min.js');
		$this->document->addScript('view/javascript/octemplates/oct_main.js');
		$this->document->addStyle('view/stylesheet/oct_remarket.css');

		$this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');
        $this->load->model('localisation/language');
        $this->load->model('tool/image');

		$oct_blog_info = $this->model_setting_setting->getSetting('oct_blogsettings');

		if (!$oct_blog_info) {
            $this->response->redirect($this->url->link('octemplates/blog/oct_blogsettings/install', 'user_token=' . $this->session->data['user_token'], true));
        }

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_blogsettings', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('octemplates/blog/oct_blogsettings', 'user_token=' . $this->session->data['user_token'], true));
        }

		$data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/blog/oct_blogsettings', 'user_token=' . $this->session->data['user_token'], true)
		];

		$errors = [
			'warning'
		];

		foreach ($errors as $error) {
			if (isset($this->error[$error])) {
	            $data['error_' . $error] = $this->error[$error];
	        } else {
	            $data['error_' . $error] = '';
	        }
		}

		if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

		$data['action'] = $this->url->link('octemplates/blog/oct_blogsettings', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$params = [
			'oct_blogsettings_status',
			'oct_blogsettings_search',
			'oct_blogsettings_count_articles',
			'oct_blogsettings_data',
		];

		foreach ($params as $param) {
			if (isset($this->request->post[$param])) {
				$data[$param] = $this->request->post[$param];
			} else {
				$data[$param] = $this->config->get($param);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('octemplates/blog/oct_blogsettings', $data));
	}

	public function install() {
		$this->load->language('octemplates/blog/oct_blogsettings');

        $this->load->model('setting/setting');
		$this->load->model('user/user_group');
		$this->load->model('octemplates/blog/oct_blogsettings');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/blog/oct_blogsettings');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/blog/oct_blogsettings');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/blog/oct_blogarticle');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/blog/oct_blogarticle');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/blog/oct_blogcategory');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/blog/oct_blogcategory');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/blog/oct_blogcomments');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/blog/oct_blogcomments');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_blogcategory');
	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_blogcategory');

	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_blogarticle');
	    $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_blogarticle');



        $this->model_setting_setting->editSetting('oct_blogsettings', [
	        'oct_blogsettings_status' => '1',
	        'oct_blogsettings_search' => '1',
	        'oct_blogsettings_count_articles' => '0',
            'oct_blogsettings_data' => [
	            'show_main_image' => 1,
	            	'articles_width' => '800',
	            	'articles_height' => '600',
	            	'article_width' => '1200',
	            	'article_height' => '900',
	            	'article_dop_width' => '160',
	            	'article_dop_height' => '120',
	            	'dop_article_width' => '400',
	            	'dop_article_height' => '300',
	            	'product_width' => '192',
	            	'product_height' => '200',
	            'limit' => $this->config->get('theme_oct_remarket_product_limit'),
	            'description_length' => 130,
	            'comments' => 'on',
	            'comments_moder'	 => 1,
            ]
        ]);

		$this->model_octemplates_blog_oct_blogsettings->createDBTables();

		$this->load->model('design/layout');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route WHERE route = 'octemplates/blog/oct_blogarticle'");

		if ($query->num_rows == 0) {
            $layout_add = [
                'name' => 'Octemplates - Blog Article',
                'layout_route' => [
                    0 => [
                        'store_id' => '0',
                        'route' => 'octemplates/blog/oct_blogarticle'
                    ]
                ],
                'layout_module' => []
            ];

            $this->model_design_layout->addLayout($layout_add);
        }

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route WHERE route = 'octemplates/blog/oct_blogcategory'");

		if ($query->num_rows == 0) {
            $layout_add = [
                'name' => 'Octemplates - Blog Category',
                'layout_route' => [
                    0 => [
                        'store_id' => '0',
                        'route' => 'octemplates/blog/oct_blogcategory'
                    ]
                ],
                'layout_module' => []
            ];

            $this->model_design_layout->addLayout($layout_add);
        }

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route WHERE route = 'octemplates/blog/oct_blogsearch'");

		if ($query->num_rows == 0) {
            $layout_add = [
                'name' => 'Octemplates - Blog Search',
                'layout_route' => [
                    0 => [
                        'store_id' => '0',
                        'route' => 'octemplates/blog/oct_blogsearch'
                    ]
                ],
                'layout_module' => []
            ];

            $this->model_design_layout->addLayout($layout_add);
        }

        $this->session->data['success'] = $this->language->get('text_success_install');

        $this->response->redirect($this->url->link('octemplates/blog/oct_blogsettings', 'user_token=' . $this->session->data['user_token'], true));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'octemplates/blog/oct_blogsettings')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
