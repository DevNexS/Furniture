<?php
class ControllerExtensionModuleAccount extends Controller {
	public function index() {
		$this->load->language('extension/module/account');

		$data['logged'] = $this->customer->isLogged();
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['forgotten'] = $this->url->link('account/forgotten', '', true);
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['reward'] = $this->url->link('account/reward', '', true);
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);

			if ($this->customer->isLogged()) {
				$this->load->model('account/customer');

				$affiliate_info = $this->model_account_customer->getAffiliate($this->customer->getId());

				if (!$affiliate_info) {
					$data['affiliate'] = $this->url->link('account/affiliate/add', '', true);
					$data['tracking'] = '';
				} else {
					$data['affiliate'] = $this->url->link('account/affiliate/edit', '', true);
					$data['tracking'] = $this->url->link('account/tracking', '', true);
				}
			} else {
				$data['affiliate'] = $this->url->link('affiliate/login', '', true);
			}
			


			$data['download_view'] = $this->config->get('module_account_download_view');
			$data['recurring_view'] = $this->config->get('module_account_recurring_view');
			$data['reward_view'] = $this->config->get('module_account_reward_view');
			$data['return_view'] = $this->config->get('module_account_return_view');
			$data['transaction_view'] = $this->config->get('module_account_transaction_view');
			$data['newsletter_view'] = $this->config->get('module_account_newsletter_view');
			$data['affiliate_view'] = $this->config->get('module_account_affiliate_view');
			
		return $this->load->view('extension/module/account', $data);
	}
}