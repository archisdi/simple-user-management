<?php
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload', [
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			'encrypt_name' => true,
			'max_size' => 2048,
			'max_width' => 1000,
			'max_height' => 1000
		]);
	}

	public function create()
	{
		$this->render_view('create');
	}

	public function save(){
		$this->user_validation();

		if(!empty($_FILES['image']['name'])) {
			if (!$this->upload->do_upload('image')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('errors', $error);
				redirect('/users/create');
			} else {
				$res = $this->upload->data();
				$img_url = 'uploads/' . $res['file_name'];
			}
		} else {
			$img_url = 'https://via.placeholder.com/150';
		}

		$this->user_model->create([
			'name' => trim($this->input->post('name')),
			'email' => trim($this->input->post('email')),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'img_url' => $img_url
		]);
		$this->session->set_flashdata('message', 'A new user registered');
		redirect('/users', 'location');
	}

	public function all(){
		$data['users'] = $this->user_model->all();
		$this->render_view('all', $data);
	}


	private function render_view($page, $data = null)
	{
		$this->load->view('templates/header');
		$this->load->view('pages/user/' . $page, $data);
		$this->load->view('templates/footer');
	}

	private function user_validation()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/users/create');
		}
	}


}
