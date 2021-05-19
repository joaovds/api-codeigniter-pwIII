<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }

  public function index() {
    $data['data'] = $this->UserModel->index();

    $this->load->view('home', $data);
  }

  public function deleteUser($cd) {
    $this->db->where('cd', $cd);
    $this->db->delete('tb_user');
    redirect(base_url('home'));
  }
}
?>
