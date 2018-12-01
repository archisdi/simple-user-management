<?php
class Auth extends CI_Controller {

	public function login()
	{
		$this->render_view('login');
	}

	public function logout()
	{
		redirect('login');
	}

	public function profile()
	{
		$this->render_view('profile');
	}

	private function render_view($page, $data = null)
	{
		$this->load->view('templates/header');
		$this->load->view('pages/auth/' . $page, $data);
		$this->load->view('templates/footer');
	}
}
