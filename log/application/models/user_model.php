<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	//fungsi daftar akun
	public function register()
	{
		$data = array(
			'nik' => $this->input->post('nik'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'email' => $this->input->post('email'),
			'kontak' => $this->input->post('kontak')
		);
		return $this->db->insert('user', $data);
	}

	//fungsi ambil data untuk excel
	public function data_user(){
		return $this->db->get('registrasi');
	}


	//fungsi daftar tes
	public function daftartes($data)
	{
		return $this->db->insert('registrasi', $data);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('registrasi');
		$this->db->like('nama',$keyword);
		$this->db->or_like('nim',$keyword);
		$this->db->or_like('ttl',$keyword);
		$this->db->or_like('prodi',$keyword);
		return $this->db->get()->result();
	}

	//export excel 1
	public function tampildata()
	{
    $query = $this->db->order_by('id_registrasi','ASC')->get('registrasi');
    return $query->result();
	}

	//export excel 2
	public function tampil_data(){
		return $this->db->get('registrasi');
	}

	//fungsi edit data register
	public function editdata($where){
		$query = $this->db->get_where('registrasi',$where);
		return $query->result();
	}

	//fungsi edit data register 2
	public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//cek username exists
	public function check_username_exists($username){
		$query = $this->db->get_where('user', array('username' => $username));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}

	public function check_email_exists($email){
		$query = $this->db->get_where('user', array('email' => $email));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}
	//fungsi hapus data dari database
	public function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//fungsi join
	public function join($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user.nik', $id);
		$this->db->join('registrasi', 'user.nik = registrasi.nik');
		$query = $this->db->get();

		return $query->result_array();
	}

	//fungsi upload bukti
	public function uploadbukti($data, $where)
	{
		$this->db->where($where);
		$this->db->update('registrasi', $data);
	}
}
 ?>
