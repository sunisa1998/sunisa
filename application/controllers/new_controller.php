<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_controller extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('Add_model');
		$this->load->helper('form');
		$this->load->helper('url');

	}
	public function index()
	{
		$this->load->view('tem');
		//$this->load->view('welcome_message');
	}
	public function add_frm(){
		$this->load->view('nevbar');
		$this->load->view('frm_add');
	}
	public function add_b(){
		$this->load->view('nevbar');
		$this->load->view('rp_add');
	}
	public function add_c(){
		$this->load->view('nevbar');
		$this->load->view('am_add');
	}
	public function show_Customer(){
		$key=$this->input->get("txt_Customer");
		$sql="select * from user,repair where user.devicename=repair.devicename && user.tell like '%".$key."%'";
		$rs = $this->db->query($sql);
		$data['num'] = $rs->num_rows();
		$data['rs']=$rs->result_array();
		$this->load->view("Customer",$data);
	}



	public function am_add(){
		$this->load->view('nevbar');
		$this->load->view('am_add');
		

		
}

	public function add_process(){
			$data = array(
		  		'name' => $this->input->post("name") ,
		   		'lastname' => $this->input->post("lastname") ,
		   		'address' => $this->input->post("address"),
				'email' => $this->input->post("email"),
				'date' => $this->input->post("date"),
				'devicename' => $this->input->post("devicename"),
				'cause' => $this->input->post("cause"),
				'tell' => $this->input->post("tell"),
				   
	   		 );
	   		$this->db->insert('user', $data); 
	   		redirect("new_controller/show","refresh");
	   		exit();
	}
	public function add_post(){
		$data2 = array(
			'devicename' => $this->input->post("devicename"),
			'serial_number' => $this->input->post("serial_number"),
			'date' => $this->input->post("date"),
			'status' => $this->input->post("status"),

			);
		   $this->db->insert('repair', $data2); 
		   redirect("new_controller/show_b","refresh");
		   exit();
}
	public function add_p(){
	$data2 = array(
		'name' => $this->input->post("name"),
		'lastname' => $this->input->post("lastname"),
		'username' => $this->input->post("username"),
		'password' => $this->input->post("password"),
		'status' => $this->input->post("status"),

		);
	   $this->db->insert('admin', $data2); 
	   redirect("new_controller/show_c","refresh");
	   exit();
}
		
	public function show(){
			if ($this->input->get("search")){
			$key=$this->input->get("search");
		$sql="select * from user where id like '%".$key."%' || name like '%".$key."%'";
		}
		else{ $sql="select * from user";}
		$this->load->view('nevbar');
		//$sql="select * from user";
		$rs = $this->db->query($sql);
		$data['rs']=$rs->result_array();
		//$this->sql->select("user");
		$this->load->view("frm_show",$data);

	}
	public function show_b(){
		if ($this->input->get("search")){
			$key=$this->input->get("search");
		$sql="select * from repair where id like '%".$key."%' || devicename like '%".$key."%'";
		}
		else{ $sql="select * from repair";}
		$this->load->view('nevbar');
		//$sql="select * from repair";
		$rs = $this->db->query($sql);
		$data['rs']=$rs->result_array();
		//$this->sql->select("user");
		$this->load->view("rp_show",$data);

	}
	public function show_c(){
		if ($this->input->get("search")){
			$key=$this->input->get("search");
		$sql="select * from admin where id like '%".$key."%' || name like '%".$key."%'";
		}
		else{ $sql="select * from admin";}
		$this->load->view('nevbar');
		//$sql="select * from admin";
		$rs = $this->db->query($sql);
		$data['rs']=$rs->result_array();
		//$this->sql->select("user");
		$this->load->view("am_show",$data);

	}
	public function edit($id){
		$this->load->view('nevbar');
		$sql="select * from user where id='$id'";
		$rs=$this->db->query($sql);
		if($rs->num_rows()!=0){
			$data['rs']=$rs->row_array();
		}else{$data['rs']=array();}
		$this->load->view("frm_edit",$data);
	} 
	public function edit_process(){
		$id=$this->input->post("id");
		$data=array(
			"name"=>$this->input->post("name"),
			"lastname"=>$this->input->post("lastname"),
			"address"=>$this->input->post("address"),
			"email"=>$this->input->post("email"),
			"date"=>$this->input->post("date"),
			"devicename"=>$this->input->post("devicename"),
			"cause"=>$this->input->post("cause"),
			"tell"=>$this->input->post("tell"),
		);
		$this->db->update("user",$data,array("id"=>$id));
		redirect("new_controller/show","refresh");
		exit();
	}
	public function edit_b($id){
		$this->load->view('nevbar');
		$sql="select * from repair where id='$id'";
		$rs=$this->db->query($sql);
		if($rs->num_rows()!=0){
			$data['rs']=$rs->row_array();
		}else{$data['rs']=array();}
		$this->load->view("rp_edit",$data);
	} 
	public function edit_rp(){
		$id=$this->input->post("id");
		$data=array(
			"devicename"=>$this->input->post("devicename"),
			"serial_number"=>$this->input->post("serial_number"),
			"date"=>$this->input->post("date"),
			"status"=>$this->input->post("status"),
		);
		$this->db->update("repair",$data,array("id"=>$id));
		redirect("new_controller/show_b","refresh");
		exit();
	}
	public function edit_c($id){
		$this->load->view('nevbar');
		$sql="select * from admin where id='$id'";
		$rs=$this->db->query($sql);
		if($rs->num_rows()!=0){
			$data['rs']=$rs->row_array();
		}else{$data['rs']=array();}
		$this->load->view("am_edit",$data);
	} 
	public function edit_am(){
		$id=$this->input->post("id");
		$data=array(
			"name"=>$this->input->post("name"),
			"lastname"=>$this->input->post("lastname"),
			"username"=>$this->input->post("username"),
			"password"=>$this->input->post("password"),
			"status"=>$this->input->post("status"),
		);
		$this->db->update("admin",$data,array("id"=>$id));
		redirect("new_controller/show_c","refresh");
		exit();
	}
	public function del($id){
		echo "del";
		$this->db->delete('user', array('id'=>$id));
		redirect("new_controller/show","refresh");
		exit();
	}
	public function del_rp($id){
		echo "del";
		$this->db->delete('repair', array('id'=>$id));
		redirect("new_controller/show_b","refresh");
		exit();
	}
	public function del_am($id){
		echo "del";
		$this->db->delete('admin', array('id'=>$id));
		redirect("new_controller/show_c","refresh");
		exit();
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */