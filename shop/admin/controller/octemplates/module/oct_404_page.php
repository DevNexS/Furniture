<?php
/**************************************************************/
/*	@copyright	OCTemplates 2019-2022						  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**************************************************************/

class ControllerOCTemplatesModuleOct404Page extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_404_page');

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

        $this->load->model('setting/extension');
        $this->load->model('setting/setting');
		$this->load->model('setting/module');

        $this->load->model('design/layout');
        $this->load->model('localisation/language');
        $this->load->model('tool/image');

		$oct_404_page_info = $this->model_setting_setting->getSetting('oct_404_page');

		if (!$oct_404_page_info) {
            $this->response->redirect($this->url->link('octemplates/module/oct_404_page/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_design_layout->editLayout($this->request->post['layout_id'], $this->request->post);

            unset($this->request->post['name']);
            unset($this->request->post['layout_id']);
            unset($this->request->post['layout_route']);
            unset($this->request->post['layout_module']);

            $this->model_setting_setting->editSetting('oct_404_page', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('octemplates/module/oct_404_page', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_404_page', 'user_token=' . $this->session->data['user_token'], true)
		];

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

		if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

		$data['heading_title'] = $this->language->get('heading_title');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['tab_general'] = $this->language->get('tab_general');

        $data['action'] = $this->url->link('octemplates/module/oct_404_page', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];

		$data['languages'] = $this->model_localisation_language->getLanguages();

        $query = $this->db->query("SELECT layout_id FROM " . DB_PREFIX . "layout_route WHERE route = 'error/not_found'");

		if ($query->num_rows == 0) {
            $layout_add = [
                'name' => 'Error 404',
                'layout_route' => [
                    0 => [
                        'store_id' => '0',
                        'route' => 'error/not_found'
                    ]
                ],
                'layout_module' => []
            ];

            $data['layout_id'] = $layout_id = $this->model_design_layout->addLayout($layout_add);
        } else {
            $data['layout_id'] = $layout_id = $query->row['layout_id'];
        }

        if (isset($this->request->post['oct_404_page_status'])) {
			$data['oct_404_page_status'] = $this->request->post['oct_404_page_status'];
		} else {
			$data['oct_404_page_status'] = $this->config->get('oct_404_page_status');
		}

        if (isset($this->request->post['oct_404_page_data'])) {
			$data['oct_404_page_data'] = $this->request->post['oct_404_page_data'];
		} else {
			$data['oct_404_page_data'] = $this->config->get('oct_404_page_data');
		}

        if (isset($data['oct_404_page_data']['image']) && is_file(DIR_IMAGE . $data['oct_404_page_data']['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['oct_404_page_data']['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($layout_id)) {
			$layout_info = $this->model_design_layout->getLayout($layout_id);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($layout_info)) {
			$data['name'] = $layout_info['name'];
		} else {
			$data['name'] = 'Error 404';
		}

		$this->load->model('setting/store');

		$data['stores'] = $this->model_setting_store->getStores();

		if (isset($this->request->post['layout_route'])) {
			$data['layout_routes'] = $this->request->post['layout_route'];
		} elseif (isset($layout_id)) {
			$data['layout_routes'] = $this->model_design_layout->getLayoutRoutes($layout_id);
		} else {
			$data['layout_routes'] = [];
		}

		$data['extensions'] = [];

		// Get a list of installed modules
		$extensions = $this->model_setting_extension->getInstalled('module');

		// Add all the modules which have multiple settings for each module
		foreach ($extensions as $code) {
			$this->load->language('extension/module/' . $code);

			$module_data = [];

			$modules = $this->model_setting_module->getModulesByCode($code);

			foreach ($modules as $module) {
				$module_data[] = [
					'name' => strip_tags($module['name']),
					'code' => $code . '.' .  $module['module_id']
				];
			}

			if ($this->config->has($code . '_status') || $module_data) {
				$data['extensions'][] = [
					'name'   => strip_tags($this->language->get('heading_title')),
					'code'   => $code,
					'module' => $module_data
				];
			}
		}

		// Modules layout
		if (isset($this->request->post['layout_module'])) {
			$layout_modules = $this->request->post['layout_module'];
		} elseif (isset($layout_id)) {
			$layout_modules = $this->model_design_layout->getLayoutModules($layout_id);
		} else {
			$layout_modules = [];
		}

		$data['layout_modules'] = [];

		// Add all the modules which have multiple settings for each module
		foreach ($layout_modules as $layout_module) {
			$part = explode('.', $layout_module['code']);

			$this->load->language('extension/module/' . $part[0]);

			if (!isset($part[1])) {
				$data['layout_modules'][] = [
					'name'       => strip_tags($this->language->get('heading_title')),
					'code'       => $layout_module['code'],
					'edit'       => $this->url->link('extension/module/' . $part[0], 'user_token=' . $this->session->data['user_token'], true),
					'position'   => $layout_module['position'],
					'sort_order' => $layout_module['sort_order']
				];
			} else {
				$module_info = $this->model_setting_module->getModule($part[1]);

				if ($module_info) {
					$data['layout_modules'][] = [
						'name'       => strip_tags($module_info['name']),
						'code'       => $layout_module['code'],
						'edit'       => $this->url->link('extension/module/' . $part[0], 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $part[1], true),
						'position'   => $layout_module['position'],
						'sort_order' => $layout_module['sort_order']
					];
				}
			}
		}

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_404_page', $data));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_404_page');

        $this->load->model('setting/setting');
        $this->load->model('design/layout');
        $this->load->model('localisation/language');
		$this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_404_page');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_404_page');

        $results = $this->model_localisation_language->getLanguages();

		$module_text = [];

        foreach ($results as $result) {
            $module_text[$result['language_id']] = [
                'title' => '',
                'text' => ''
            ];
        }

        $this->model_setting_setting->editSetting('oct_404_page', [
	        'oct_404_page_status' => '1',
            'oct_404_page_data' => [
                'image' => 'catalog/remarket/404.svg',
                'module_text' => $module_text
            ]
        ]);

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route WHERE route = 'error/not_found'");

		if ($query->num_rows == 0) {
            $layout_add = [
                'name' => 'Error 404',
                'layout_route' => [
                    0 => [
                        'store_id' => '0',
                        'route' => 'error/not_found'
                    ]
                ],
                'layout_module' => []
            ];

            $this->model_design_layout->addLayout($layout_add);
        }

        $this->session->data['success'] = $this->language->get('text_success_install');

        $this->response->redirect($this->url->link('octemplates/module/oct_404_page', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
	    $this->load->model('setting/setting');
	    $this->load->model('user/user_group');

	    $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_404_page');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_404_page');

	    $this->model_setting_setting->deleteSetting('oct_404_page');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_404_page')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}
