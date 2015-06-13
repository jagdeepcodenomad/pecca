<?php
class Admin_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function login()
	{			
		$query = $this->db->get_where('user_login', array('username' => $this->input->post('username') ,'password' => sha1($this->input->post('password'))));		
		$data = $query->row_array();
		//prx($data);
		return $data;
	}
	
	public function update_login()
	{
		$time=$this->session->userdata('last_login') ;
		$update = array('last_login' => $time);					   
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$updated=$this->db->update('user_login', $update);		
	}
	
	public function add_new_ip()
	{
		$data = array('ip_address' => $this->input->post('ip_address'),'updated_date' => date('Y-m-d H:i:s'));	
		$this->db->insert('ip_address_xref', $data);
		return $this->db->insert_id();
	}
	
	public function create_user()
	{
		$data = array('username' => $this->input->post('username'),'password' => sha1($this->input->post('password')),'ip_id' => $this->input->post('ip_id'),'role_id' => '2');	
		$this->db->insert('user_login', $data);
		
		$idd=$this->db->insert_id(); // getting id of user from user_login table and saving same in user_details..
		
		$data = array('user_id' => $idd,'full_name' => $this->input->post('full_name'),'gender' => $this->input->post('gender'),'phone' => $this->input->post('phone'),'privilege' => $this->input->post('privilege'));	
		$this->db->insert('user_details', $data);
		return '1';
	} 
	
	public function get_user_details($id)
	{
		$this->db->select('user_login.*,user_details.*');
		$this->db->where('user_login.user_id',$id);
		$this->db->from('user_login');
		$this->db->join('user_details', 'user_details.user_id = user_login.user_id', 'inner');
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function get_ipaddr()
	{
		$query = $this->db->get('ip_address_xref');		
		$data = $query->result_array();
		return $data;
	}
	
	public function get_users()	
	{
		$this->db->select('user_login.*,ip_address_xref.ip_address,user_details.*');
		$this->db->where('user_login.role_id',2);	
		$this->db->from('user_login');
		$this->db->join('ip_address_xref', 'ip_address_xref.ip_id = user_login.ip_id', 'inner');
		$this->db->join('user_details', 'user_details.user_id = user_login.user_id', 'inner');
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	public function update_user($id)
	{
		print_r($_POST);echo $id;
		$this->db->select('user_login.*,user_details.*');
		$this->db->where('user_login.user_id',$id);
		$this->db->from('user_login');
		$this->db->join('user_details', 'user_details.user_id = user_login.user_id', 'inner');
		$query = $this->db->get();
		return $query->row_array();
		$data = array('username' => $this->post('username'),'ip_id' => $this->post('ip_id'));					   
		$this->db->where('user_id', $id);
		$updated=$this->db->update('user_login', $data);	
		echo "updated".$updated;
		/* $data = array('full_name' => $this->post('full_name'),'gender' => $this->post('gender'),'last_login' => $this->post('gender'),'phone' => $this->post('phone'),'privilege' =>$this->post('privilege'));			   
		$this->db->where('user_id', $id);
		$updated=$this->db->update('user_details', $data); */
		return $updated;
	}
	
	public function del_users($id)	
	{
		$this->db->delete('user_details', array('user_id' => $id));
		$this->db->delete('user_login', array('user_id' => $id));
		return '1';	
	}
	
	public function set_pro_fields($upl)
	{		
		$this->db->truncate('product_fields');		
		foreach($upl as $k => $row)
		{
			$data = array('field_name' => $upl[$k]);	
			$this->db->insert('product_fields', $data);
		}		
		return $this->db->insert_id();
	}
	
	public function get_pro_fields()
	{
		$query = $this->db->get('product_fields');		
		$data = $query->result_array();
		return $data;
	}
	
	public function set_products($fields,$upload,$insrt)
	{		
		$size=sizeof($upload)-1;
		for($i=0;$i<$size;$i++)
		{
			if( $i == 0 ){}else {
				for($j=0;$j<$insrt;$j++)
				{
					$data = array('product_id_field_id'=>$i.$fields[$j]['field_id'],'product_id'=>$i,'field_id' => $fields[$j]['field_id'],'field_value' => $upload[$i][$j],'status'=>'Active','update_time'=>date('Y-m-d H:i:s'));	
					$this->db->insert('product_value', $data);
				}
			}
		}	
		return '1';
	}
	
	public function rename_fields()
	{
		foreach ($_POST['field_id'] as $k => $row)
		{
			$data = array('field_name' => $_POST['rename-field'][$k]);					   
			$this->db->where('field_id', $_POST['field_id'][$k]);
			$this->db->update('product_fields', $data); 
		}
	}
	
	public function get_product_id()
	{
		$this->db->select('product_value.product_id');
		$this->db->group_by('product_value.product_id');
		$this->db->from('product_value');
		$this->db->order_by('product_value.product_id_field_id','asc');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_all_products($id)
	{
		$this->db->select('product_value.*');
		//$this->db->group_by('product_value.product_id');
		$this->db->from('product_value');
		$this->db->where('product_id',$id);
		$this->db->order_by('product_value.product_id_field_id','asc');
		$query = $this->db->get();
		return $query->result_array();
	}
}	
?>