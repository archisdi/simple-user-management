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
		$inputs = $this->get_inputs(['email', 'password']);
		print_r($inputs);
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

	private function get_inputs($arr){
		$inputs = [];
		foreach ($arr as $input){
			array_push($inputs, [
				$input => $this->input->post($input)
			]);
		}
		return $inputs;
	}
}
