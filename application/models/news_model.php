<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class news_model extends CI_Model {

function get_all() {
  $q=$this->db->get('news');
  if($q->num_rows()> 0)
     {
	 foreach($q->result() as $row)
	     {
	       $data[]=$row;
	     }
	 return $data;
	 }
	}
function high_light(){
  $q=$this->db->get('news',3);
  if($q->num_rows()> 0)
     {
	 foreach($q->result() as $row)
	     {
	       $data[]=$row;
	     }
	 return $data;
	 }
	}	
function get_news($id) {
  $this->db->select('id,heading,news');
  $this->db->where('id', $id);
  $q = $this->db->get('news');
  //$q=$this->db->query("select * from news where id=$id");
  if($q->num_rows()> 0)
     {
	 foreach($q->result() as $row)
	     {
	       $data['news']=$row;
	     }
	 return $data;
	 }
	}



}