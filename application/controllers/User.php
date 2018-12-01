<?php
class User extends CI_Controller {

	public function create()
	{
		$this->render_view('create');
	}

	public function save(){
		redirect('/users', 'location');
	}

	public function all(){
		$this->render_view('all', []);
	}


	private function render_view($page, $data = null)
	{
		$this->load->view('templates/header');
		$this->load->view('pages/user/' . $page, $data);
		$this->load->view('templates/footer');
	}
}
