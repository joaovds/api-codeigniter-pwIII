<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
  public function index() {
    $query = $this->db->get('tb_user');
    return $query->result();
  }

  public function create() {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')
    );

    return $this->db->insert('tb_user', $data);
  }

  public function update($cd) {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email')
    );

    $this->db->where('cd', $cd);

    return $this->db->update('tb_user', $data);
  }
}
?>