<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function find_one(){

	}

	public function all()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	public function create($payload){
		return $this->db->insert('users', $payload);
	}

	function mail_exists($key)
	{
		$this->db->where('email', $key);
		$query = $this->db->get('users');
		return $query->num_rows() > 0;
	}

}
