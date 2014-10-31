<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kkk extends CI_Controller {

public function index()
	{
	    $data=array();
		$this->load->library('pagination');
		
		$this->load->model('news_model');
		
		
		$config['base_url']="http://localhost/aksum/index.php/kkk/index";
		$config['total_rows']=$this->db->get('news')->num_rows();
		$config['per_page']=2;//...number of page that we escape
		$config['num_links']=3;//...number of the pagination links displayed
		$config['ful_tag_open']='div class="pagination pagination-sm">';
		$config['ful_tag_close']='</div>';
		
		$this->pagination->initialize($config);
		
		$data['records']=$this->db->get('news',$config['per_page'],$this->uri->segment(3));
		
		
		
	    $data['newslist'] = $this->news_model->get_all();
		$data['read']=$this->news_model->high_light();
		$this->load->view('index.php',$data);
	}
public function about_us()
	{
	    $data=array();
	    $this->load->model('info');
		$data['rows']= $this->info->about();
		$this->load->view('about us.php',$data);
	}
public function test()
 	{
             $this->index()
	}	
public function contact_us()
	{
		$this->load->view('contact us.php');
	}	
public function faq()
	{
	    $data=array();
	    $this->load->model('info');
		$data['rows']= $this->info->faq();
		$this->load->view('faq.php',$data);
	}
public function galary()
	{
		$this->load->view('galary.php');
	}
public function in()
    {
	   
	    $data=array();
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('email', 'Email', 'trim|required|');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
	    if($this->form_validation->run()==FALSE)
	    {
			$this->contact_us();
		}
		else
		{
		$this->load->model('info');
	    $val=$this->info->newuser();
	      if($val)
	       {
	        $this->index();
	       }
	       else
	       {
	       $this->contact_us();
	       }
		}
    }	
public function controlpanel()
  {
  $this->load->view('login');
  }
 
public function controlmain()
	{
	    $data['content']='main';
		$this->load->view('control/template',$data);
	}   
}
