<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('shared/frontend/header_message');
		$this->load->view('shared/frontend/menu_message');
		$this->load->view('shared/frontend/head_message');
		$this->load->view('shared/frontend/hero_message');
		$this->load->view('pages/frontend/home_message');
		$this->load->view('shared/frontend/footer_message');
	}

	public function features()
	{
		$this->load->view('shared/frontend/header_message');
		$this->load->view('shared/frontend/menu_message');
		$this->load->view('shared/frontend/head_message');
		$this->load->view('shared/frontend/hero_message');
		$this->load->view('pages/frontend/features_message');
		$this->load->view('shared/frontend/footer_message');
	}

	public function pricing()
	{
		$this->load->view('shared/frontend/header_message');
		$this->load->view('shared/frontend/menu_message');
		$this->load->view('shared/frontend/head_message');
		$this->load->view('shared/frontend/hero_message');
		$this->load->view('pages/frontend/pricing_message');
		$this->load->view('shared/frontend/footer_message');
	}

	public function contact()
	{
		$this->load->view('shared/frontend/header_message');
		$this->load->view('shared/frontend/menu_message');
		$this->load->view('shared/frontend/head_message');
		$this->load->view('shared/frontend/hero_message');
		$this->load->view('pages/frontend/contact_message');
		$this->load->view('shared/frontend/footer_message');
	}
}
