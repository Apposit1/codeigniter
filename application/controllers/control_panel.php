<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class control_panel extends CI_Controller {
/*public function index()
	{
	    $data['content']='main';
		$this->load->view('control/template',$data);
	}*/
public function controlpanel()
  {
  $this->load->view('login');
  }
 	
public function controlverifay()
  {
        $dat=array();
        $this->load->model('info');
		$query = $this->info->control_validate();
        
		if($query)
		{  
		   //$data['records']=  $this->memmber->info();
		   //header('location:http://localhost/citest/index.php/site/memmbers_area');
		   $dat['content']='main';
		   $this->load->view('control/template',$dat);
		   
		
		}
		else
		{
		    $this->controlpanel();
		}
  }
public function logout()
    {
       $this->session->sess_destroy();
	   $this->controlpanel();
    }  
	
}	