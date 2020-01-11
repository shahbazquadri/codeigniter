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
        return redirect("admin/viewallpost");
    }
    function allpostdata()
    {
       $data= $this->db->get("post");
       return $data->result_array();
    }
    function    singlepost($id)
    {
       $edata= $this->db->query("select * from post where id = '$id'");
        return $edata->result_array();
//        $this->db->where("id",$id)->get('post');
    }
    function updatedata($data)
    {
      //  print_r($data);
        $id= $data['id'];
        $this->db->where('id', $id)->update('post', $data);
          return redirect("admin/viewallpost");
    }
}

?>