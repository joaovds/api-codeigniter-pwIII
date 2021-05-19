<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }

  public function index() {
    $this->load->view('createUser');
  }

  public function create() {
    $user = new UserModel();
    $user->create();
    redirect(base_url('createUser'));
  }

  public function deleteUser($cd) {
    $this->db->where('cd', $cd);
    $this->db->delete('tb_user');
    redirect(base_url('home'));
  }

  public function loadUpdateUserView($cd) {
    $data['data'] = $this->db->get_where('tb_user', array('cd' => $cd))->row();

    $this->load->view('updateUser', $data);
  }

  public function updateUser($cd) {
    $user = new UserModel();
    $user->update($cd);
    redirect(base_url('home'));
  }
}
?>
