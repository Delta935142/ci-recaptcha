<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

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
		$this->load->view('signin');
	}

	public function in()
	{
		$this->load->library('recaptcha');

		if (!$this->input->post('g-recaptcha-response')) 
		{
			echo '請點選驗證圖';
		}
		else
		{
			$resp = $this->recaptcha->verifyResponse(
				$this->input->ip_address(),
				$this->input->post('g-recaptcha-response')
			);
		}
	}
}