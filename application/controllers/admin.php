<?php

class Admin extends CI_Controller 
{
	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('admin_model');	
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function index()
	{	
		if(!empty($_POST)) 
		{
			$data['login'] = $this->admin_model->login();	//on login checking info of user
			if(empty($data['login'])) // if login not matched with the database
			{
				$this->session->set_flashdata('errors','Email or password is incorrect..');
				redirect('/admin/');
			}
		}
		
		if(!empty($data['login'])) // if info matched, then set login  or set session...
		{
						
			$this->session->set_userdata('user_id',$data['login']['user_id']);
			$this->session->set_userdata('username',$data['login']['username']);
			$this->session->set_userdata('ip_id',$data['login']['ip_id']);
			$this->session->set_userdata('role_id',$data['login']['role_id']);
			$this->session->set_userdata('last_login',date("Y-m-d H:i:s"));
			$data['loginn'] = $this->admin_model->update_login();
			
		}		
		if(@$this->session->userdata('user_id') !='') // if login go to home page of admin...
		{
			$data['ipaddr']=$this->admin_model->get_ipaddr();
			$data['title']='Home';
			$this->load->view('admin_view', $data);
		}
		else   // else ( if not log in, go to login screen)
		{
			$data['title']='Login';
			$this->load->view('login_view', $data);
		}
	}
		
	public function logout()
	{
		// destroying all the sessions here
		
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('ip_id');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('last_login');
		redirect('/admin/','refresh');
	}
        
        public function demo()
	{
		// destroying all the sessions here
		
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('ip_id');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('last_login');
		redirect('/admin/','refresh');
	}
	
	public function chk_login()
	{						
		if(!$this->session->userdata('user_id'))
		{
			$data['errors'] = 'Please login first to view further details.';
			$this->session->set_flashdata('errors', $data['errors']);
			redirect('/admin/', 'refresh');				
		}				
	}
	/**********Manage User**********/
	public function create_user()
	{ 
		$this->chk_login();
		if(!empty($_POST))
		{
			$data['inserted']=$this->admin_model->create_user();
			if($data['inserted'] !='')
			{
				$data['success'] = 'User created successfully.';
				$this->session->set_flashdata('success', $data['success']);
			}
			else 
			{
				$data['errors'] = 'User is not created';
				$this->session->set_flashdata('errors', $data['errors']);
			}
			redirect('/admin/create_user/');
		} 
		$data['ipaddr']=$this->admin_model->get_ipaddr();
		$data['title']='Create User';
		$this->load->view('admin_view', $data);
	}
	
	public function view_user()
	{
		$this->chk_login();
		$data['users']=$this->admin_model->get_users();
		$data['title']='View Users';
		$this->load->view('listing_view', $data);
	}
	
	public function edit_user($id=Null)
	{
		$this->chk_login(); 
		if($_POST)
		{
			$update=$this->admin_model->update_user($id);
			prx($update);
		}
		$data['user_details'] = $this->admin_model->get_user_details($id);
		$data['ipaddr']= $this->admin_model->get_ipaddr();
		$data['title']='Edit User';
		//print_r($data);
		$this->load->view('edit_user', $data);
	}
	
	public function delete_user($id=null)
	{
		if($id != null)
		{
			$del=$this->admin_model->del_users($id);
			if($del == '1')
			{ 
				$data['success'] = 'User deleted successfully.';
				$this->session->set_flashdata('success', $data['success']);
			}
		}
		redirect('/admin/view_user/');
		
	}
	/*************************/
	
	public function add_new_ip()
	{
		$this->chk_login();
		if( @$_POST['submit'] )
		{
			$data['inserted']=$this->admin_model->add_new_ip();	
			if($data['inserted'] !='')
			{
				$data['success'] = 'IP address is inserted successfully.';
				$this->session->set_flashdata('success', $data['success']);
			}
			else 
			{
				$data['errors'] = 'IP address is not inserted';
				$this->session->set_flashdata('errors', $data['errors']);
			}
			redirect('/admin/add_new_ip/');
		} 
		$data['title']='Add New IP';
		$this->load->view('add_new_ip_view', $data);
	}
	
	public function import_export()
	{
		$this->chk_login();
		if($_POST)	
		{
			$file = fopen($_FILES['filesup']['tmp_name'],"r");
			while(! feof($file))
			{
				$uploads[]=fgetcsv($file);
			}
			$insrt=$this->admin_model->set_pro_fields($uploads[0]);
			$fields=$this->admin_model->get_pro_fields();
			$inrt_pro=$this->admin_model->set_products($fields,$uploads,$insrt);
			if(@$inrt_pro !='')
			{
				$data['success'] = 'Your file uploaded successfully.';
				$this->session->set_flashdata('success', $data['success']);
				redirect('/admin/import_export/');
			}				
		}
		$data['title']='Import Export';
		$this->load->view('imp_exp_view', $data);		
	}
	
	public function manage_fields()
	{
		$this->chk_login();
		$data['fields']=$this->admin_model->get_pro_fields();
		if($_POST)
		{
			$updated=$this->admin_model->rename_fields();
			$data['success'] = 'Field has been renamed successfully.';
			$this->session->set_flashdata('success', $data['success']);
			redirect('/admin/manage_fields/');
		}			
		$data['title']='Inventory';
		$this->load->view('inventory_view', $data);
	}
	
	public function inventory_management()
	{
		$this->chk_login();
		$data['fields']=$this->admin_model->get_pro_fields();
		$data['title']='Inventory';
		
		$data['pro_ids']=$this->admin_model->get_product_id();
		foreach($data['pro_ids'] as $k => $row)
		{
			$data['products'][$k]=$this->admin_model->get_all_products($data['pro_ids'][$k]['product_id']);
		}
		$this->load->view('inventory', $data);
	}
	
	public function customer_management()
	{
		$this->chk_login();
		$data['title']='Customer';
		$this->load->view('customer_view', $data);
	}
	
	public function order_managment()
	{
		$this->chk_login();
		$data['title']='Order';
		$this->load->view('order_view', $data);
	}
	public function reports() 
	{
		$this->chk_login();
		$data['title']='Reports';
		$this->load->view('reports_view', $data);
	}
}