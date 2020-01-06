<?php
class Adminmodel extends CI_Model
{
 function   createAccount($data)
    {
        $this->load->database();
     $this->db->insert("admin",$data);
    }
    
    
    function validateAccount($uname,$pass)
    {
   $lq= $this->db->where(["uname"=>$uname,"password"=>$pass])->get('admin');
  if(  $lq->num_rows()) 
  {
//      echo "login successfully";
      return redirect("admin/dashboard");
  }
        else{
            echo "wrong id password";
        }
        
    }
    function adddata($data)
    {
        $this->db->insert("post",$data);
    }
}

?>