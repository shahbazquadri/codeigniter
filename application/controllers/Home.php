<?php
class Home extends CI_Controller
{
public function    index()
{
    $this->load->model('adminmodel');
   $post= $this->adminmodel->allpostdata();
    $this->load->view("web/index",compact("post"));
}
    public function post($id)
    {
        $this->load->model('adminmodel');
      $sdata=  $this->adminmodel-> singlepost($id);
       $this->load->view("web/single",compact("sdata"));  
    }
}


?>