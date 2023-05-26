<?php
/**********************************************************/
/*	@copyright	OCTemplates 2015-2022					  */
/*	@support	https://octemplates.net/					  */
/*	@license	LICENSE.txt									  */
/**********************************************************/

class ControllerOCTemplatesModuleOctSubscribe extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('octemplates/module/oct_subscribe');

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
        $this->load->model('octemplates/module/oct_subscribe');

		$oct_subscribe_page_info = $this->model_setting_setting->getSetting('oct_subscribe');

		if (!$oct_subscribe_page_info) {
			$this->response->redirect($this->url->link('octemplates/module/oct_subscribe/install', 'user_token=' . $this->session->data['user_token'], true));
        }

        $data['user_token'] = $this->session->data['user_token'];

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('oct_subscribe', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

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

        if (isset($this->request->get['filter_email'])) {
            $filter_email = $this->request->get['filter_email'];
        } else {
            $filter_email = null;
        }

        if (isset($this->request->get['filter_approved'])) {
            $filter_approved = $this->request->get['filter_approved'];
        } else {
            $filter_approved = null;
        }

        if (isset($this->request->get['filter_ip'])) {
            $filter_ip = $this->request->get['filter_ip'];
        } else {
            $filter_ip = null;
        }

        if (isset($this->request->get['filter_date_added'])) {
            $filter_date_added = $this->request->get['filter_date_added'];
        } else {
            $filter_date_added = null;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'date_added';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_approved'])) {
            $url .= '&filter_approved=' . $this->request->get['filter_approved'];
        }

        if (isset($this->request->get['filter_ip'])) {
            $url .= '&filter_ip=' . $this->request->get['filter_ip'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'], true)
        ];

        $data['action'] = $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'], true);
        $data['delete'] = $this->url->link('octemplates/module/oct_subscribe/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['csv']    = $this->url->link('octemplates/module/oct_subscribe/csv', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['subscribes'] = [];

        $filter_data = [
            'filter_email' => $filter_email,
            'filter_approved' => $filter_approved,
            'filter_date_added' => $filter_date_added,
            'filter_ip' => $filter_ip,
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        ];

        $subscribe_total = $this->model_octemplates_module_oct_subscribe->getTotalSubscribes();

        $results = $this->model_octemplates_module_oct_subscribe->getSubscribes($filter_data);

        foreach ($results as $result) {
            if (!$result['approved']) {
                $approve = $this->url->link('octemplates/module/oct_subscribe/approve', 'user_token=' . $this->session->data['user_token'] . '&subscribe_id=' . $result['subscribe_id'] . $url, true);
            } else {
                $approve = 1;
            }

            $data['subscribes'][] = [
                'subscribe_id' => $result['subscribe_id'],
                'email' => $result['email'],
                'ip' => $result['ip'],
                'date_added' => date("d/m/y H:i:s", strtotime($result['date_added'])),
                'approve' => $approve
            ];
        }

        if (isset($this->request->post['oct_subscribe_form_data'])) {
            $data['oct_subscribe_form_data'] = $this->request->post['oct_subscribe_form_data'];
        } else {
            $data['oct_subscribe_form_data'] = $this->config->get('oct_subscribe_form_data');
        }

        if (isset($this->request->post['oct_subscribe_status'])) {
            $data['oct_subscribe_status'] = $this->request->post['oct_subscribe_status'];
        } else {
            $data['oct_subscribe_status'] = $this->config->get('oct_subscribe_status');
        }

        if (isset($this->request->post['oct_subscribe_template_status'])) {
            $data['oct_subscribe_template_status'] = $this->request->post['oct_subscribe_template_status'];
        } else {
            $data['oct_subscribe_template_status'] = $this->config->get('oct_subscribe_template_status');
        }

        if (isset($this->request->post['oct_subscribe_text_data'])) {
            $data['oct_subscribe_text_data'] = $this->request->post['oct_subscribe_text_data'];
        } else {
            $data['oct_subscribe_text_data'] = $this->config->get('oct_subscribe_text_data');
        }

        $oct_subscribe_form_data = $this->config->get('oct_subscribe_form_data');

        $this->load->model('tool/image');

        if (isset($this->request->post['oct_subscribe_form_data']['image']) && is_file(DIR_IMAGE . $this->request->post['oct_subscribe_form_data']['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($this->request->post['oct_subscribe_form_data']['image'], 100, 100);
        } elseif (!empty($oct_subscribe_form_data) && is_file(DIR_IMAGE . $oct_subscribe_form_data['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($oct_subscribe_form_data['image'], 100, 100);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array) $this->request->post['selected'];
        } else {
            $data['selected'] = [];
        }

        $url = '';

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_approved'])) {
            $url .= '&filter_approved=' . $this->request->get['filter_approved'];
        }

        if (isset($this->request->get['filter_ip'])) {
            $url .= '&filter_ip=' . $this->request->get['filter_ip'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_email']      = $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . '&sort=email' . $url, true);
        $data['sort_approved']   = $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . '&sort=approved' . $url, true);
        $data['sort_ip']         = $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . '&sort=ip' . $url, true);
        $data['sort_date_added'] = $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);

        $url = '';

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_approved'])) {
            $url .= '&filter_approved=' . $this->request->get['filter_approved'];
        }

        if (isset($this->request->get['filter_ip'])) {
            $url .= '&filter_ip=' . $this->request->get['filter_ip'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination        = new Pagination();
        $pagination->total = $subscribe_total;
        $pagination->page  = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url   = $this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($subscribe_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($subscribe_total - $this->config->get('config_limit_admin'))) ? $subscribe_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $subscribe_total, ceil($subscribe_total / $this->config->get('config_limit_admin')));

        $data['filter_email']      = $filter_email;
        $data['filter_approved']   = $filter_approved;
        $data['filter_ip']         = $filter_ip;
        $data['filter_date_added'] = $filter_date_added;

        $data['sort']  = $sort;
        $data['order'] = $order;

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('octemplates/module/oct_subscribe', $data));
    }

    public function install() {
        $this->load->language('octemplates/module/oct_subscribe');

        $this->load->model('octemplates/module/oct_subscribe');
        $this->load->model('setting/setting');
		$this->load->model('user/user_group');
		$this->load->model('localisation/language');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_subscribe');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_subscribe');

		$this->model_octemplates_module_oct_subscribe->makeDB();

        $results = $this->model_localisation_language->getLanguages();

		$module_text = [];

        foreach ($results as $result) {
            $module_text[$result['language_id']] = [
                'promo_text' => '',
                'subject_email_template_first' => '',
                'email_template_first' => '',
                'subject_email_template_second' => '',
                'email_template_second' => '',
            ];
        }

        $this->model_setting_setting->editSetting('oct_subscribe', [
			'oct_subscribe_status' => '0',
            'oct_subscribe_text_data' => $module_text,
			'oct_subscribe_template_status' => '0',
            'oct_subscribe_form_data' => [
                'image' => 'catalog/remarket/subscribe.svg',
                'expire' => '1',
                'seconds' => '15000'
            ]
        ]);

        $this->session->data['success'] = $this->language->get('text_success_install');

		$this->response->redirect($this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'], true));
    }

    public function uninstall() {
        $this->load->model('setting/setting');
        $this->load->model('octemplates/module/oct_subscribe');
        $this->load->model('user/user_group');

        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'octemplates/module/oct_subscribe');
        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'octemplates/module/oct_subscribe');

        $this->model_octemplates_module_oct_subscribe->removeDB();

        $this->model_setting_setting->deleteSetting('oct_subscribe');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_subscribe')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function validateApprove() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_subscribe')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function approve() {
        $this->load->language('octemplates/module/oct_subscribe');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_subscribe');

        $subscribes = [];

        if (isset($this->request->post['selected'])) {
            $subscribes = $this->request->post['selected'];
        } elseif (isset($this->request->get['subscribe_id'])) {
            $subscribes[] = $this->request->get['subscribe_id'];
        }

        if ($subscribes && $this->validateApprove()) {
            $this->model_octemplates_module_oct_subscribe->approve($this->request->get['subscribe_id']);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_email'])) {
                $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_approved'])) {
                $url .= '&filter_approved=' . $this->request->get['filter_approved'];
            }

            if (isset($this->request->get['filter_ip'])) {
                $url .= '&filter_ip=' . $this->request->get['filter_ip'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . $url, true));
        } else {
            $this->index();
        }
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_subscribe')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function delete() {
        $this->load->language('octemplates/module/oct_subscribe');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_subscribe');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $subscribe_id) {
                $this->model_octemplates_module_oct_subscribe->deleteSubscribe($subscribe_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_email'])) {
                $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_approved'])) {
                $url .= '&filter_approved=' . $this->request->get['filter_approved'];
            }

            if (isset($this->request->get['filter_ip'])) {
                $url .= '&filter_ip=' . $this->request->get['filter_ip'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('octemplates/module/oct_subscribe', 'user_token=' . $this->session->data['user_token'] . $url, true));
        } else {
            $this->index();
        }
    }

    protected function validateCSV() {
        if (!$this->user->hasPermission('modify', 'octemplates/module/oct_subscribe')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function csv() {
        $this->load->language('octemplates/module/oct_subscribe');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('octemplates/module/oct_subscribe');

        if ($this->validateCSV()) {
            $this->response->addheader('Pragma: public');
            $this->response->addheader('Expires: 0');
            $this->response->addheader('Content-Description: File Transfer');
            $this->response->addheader('Content-Type: application/octet-stream');
            $this->response->addheader('Content-Disposition: attachment; filename=subscribes_' . date("Y-m-d_H-i-s", time()) . '.csv');
            $this->response->addheader('Content-Transfer-Encoding: binary');

            $this->response->setOutput($this->model_octemplates_module_oct_subscribe->exportCSV());
        } else {
            $this->index();
        }
    }
}
