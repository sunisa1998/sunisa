<?php
class sql extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}
	public function select($table){
		$rs=$this->db->get($table);
		return $rs->num_rows();
	}
	public function select_data_where($table,$where,$id){
		$this->db->select('*');
    	$this->db->from('table_example');
    	$this->db->where('phone', $this->input->post('phone'));
	}

}
?>