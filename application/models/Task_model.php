<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

	public function get_task($task_id) {
		
		$this->db->where('id', $task_id);

		$query = $this->db->get('tasks');

		return $query->row();

	}
	
  public function create_task($data) {
    

    $insert_query = $this->db->insert('tasks', $data);

    return $insert_query;

  }

}