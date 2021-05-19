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
}
?>
