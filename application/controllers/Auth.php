<?php
class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{
		$this->render_view('login');
	}

	public function sign_user(){
		$user = $this->user_model->find_by_email($this->input->post('email'));

		if (!$user || !password_verify($this->input->post('password'), $user->password)){
			$this->session->set_flashdata('errors', 'Email or password invalid');
			redirect('/login', 'location');
		}

		print_r($user); // user logged in, initiate sessions, unforetunately my time is up...
	}

	public function logout()
	{
		redirect('login');
	}

	public function profile()
	{
		// must be protected by authentication middleware before data retrieval.
		$this->render_view('profile');
	}

	private function render_view($page, $data = null)
	{
		$this->load->view('templates/header');
		$this->load->view('pages/auth/' . $page, $data);
		$this->load->view('templates/footer');
	}

}
