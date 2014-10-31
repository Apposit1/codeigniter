<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class news_display extends CI_Controller {

function display($id)
    {
	    $data=array();
		$this->load->model('news_model');
	    $data['news'] = $this->news_model->get_news($id);
		$data['newfeed'] =$this->news_model->get_all();
		$this->load->view('news.php',$data);
	}
	
}	