<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
  public function index() {
    $query = $this->db->get('tb_user');
    return $query->result();
  }
}
?>