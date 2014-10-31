<?php 
class info extends CI_Model {
function about()
  {
  $q=$this->db->query("select * from service");
  if($q->num_rows()> 0)
     {
	 foreach($q->result() as $row)
	     {
	       $data[]=$row;
	     }
	 return $data;
	 }
  }
function faq()
  {
  $q=$this->db->query("select * from faq");
  if($q->num_rows()> 0)
     {
	 foreach($q->result() as $row)
	     {
	       $data[]=$row;
	     }
	 return $data;
	 }
  }
function newuser()
  { 
     $email=$this->security->xss_clean($this->input->post('email'));
	 $subject=$this->security->xss_clean($this->input->post('subject'));
	 $message=$this->security->xss_clean($this->input->post('message'));
	 
     $new_users= array(
	 'email'=>$email,
	 'subject'=>$subject,
	 'message'=>$message
	 );
	 $insert = $this->db->insert('contact',$new_users);
	 return $insert;
  }
function control_validate()
  {
        $this->db->where('username', $this->security->xss_clean($this->input->post('username')));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('user');
		if($query->num_rows == 1)
		{
		$row = $query->row();
            $data = array(
                    'userid' => $row->id,
                    'username' => $row->username,
                    'password' => $row->password,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
			return true;
		}
		else
		{
		return false;
		}
    
  }  
 
}  