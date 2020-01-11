<?php
class  Admin extends CI_Controller
{
    public function index()
    {
//        $this->load->helper("form");
//        $this->load->helper("html");
//        $this->load->helper("url");
        $this->load->view("login");
        
    }
    public function regitration()
    {
        $this->load->view("reg");
    }
    public function createaccount()
    {
   $name= $this->input->post("name");
   $uname = $this->input->post("uname");
   $pass1=  $this->input->post("pass1");
  $pass2=    $this->input->post("pass2");
   $this->load->library("form_validation");  
    $this->form_validation->set_rules("name","Name","required|alpha");    
    $this->form_validation->set_rules("uname","USERNAME","required|alpha_numeric|is_unique[admin.uname]");    
    $this->form_validation->set_rules("pass1","PASSWORD","required|alpha_numeric");    
    $this->form_validation->set_rules("pass2","PASSWORD 2 ","required|alpha_numeric|matches[pass1]");    
if($this->form_validation->run() == true)
{
$data=["name"=>$name,"uname"=>$uname,"password"=>$pass1];
$this->load->model("Adminmodel");
$this->Adminmodel->createAccount($data);    
}
        else{
//            echo "Something went Wrong <br>";
//            echo validation_errors();
              $this->load->view("reg");
        }
        
    }
    public function checkuser()
    {
      $uname=   $this->input->post('uname');
      $pass=  $this->input->post('pass');
        $this->load->model("Adminmodel");
       $this->Adminmodel->validateAccount($uname,$pass); 
    }
    public function dashboard()
    {
         $this->load->view("layout/header");
         $this->load->view("layout/top");
         $this->load->view("layout/sidebar");
         $this->load->view("dashboard");
         $this->load->view("layout/footer");
    }
    public function addpost()
    {
         $this->load->view("layout/header");
         $this->load->view("layout/top");
         $this->load->view("layout/sidebar");
         $this->load->view("addpost");
         $this->load->view("layout/footer");
    }
function postdata()
{
$data=$this->input->post();

$config['upload_path']          = './assets/img';
$config['allowed_types']        = 'gif|jpg|png';
    $image_name=uniqid().$_FILES['image']['name'];
$config['file_name']        =  $image_name;


$this->load->library('upload', $config);

if ($this->upload->do_upload('image'))
{
 $data['image']=$image_name;
$this->load->model('adminmodel');
$this->adminmodel->adddata($data);
    
    
   
}
else
{
echo    $error = $this->upload->display_errors();


}

}
     function viewallpost()
     {
         $this->load->model("adminmodel");
       $data=  $this->adminmodel->allpostdata();
        $this->load->view("layout/header");
         $this->load->view("layout/top");
         $this->load->view("layout/sidebar");
         $this->load->view("allpost",compact("data"));
          $this->load->view("layout/footer");
     }
    function delete($id)
    {
       $this->db->delete('post', array('id' => $id));
        return redirect("admin/viewallpost");
    }
     function edit($id)
    {
      $this->load->model("adminmodel");  
     $edata= $this->adminmodel->singlepost($id); 
         $this->load->view("layout/header");
         $this->load->view("layout/top");
         $this->load->view("layout/sidebar");
      $this->load->view("editpost",compact("edata")); 
          $this->load->view("layout/footer");
    }
    function updatepost()
    {
        if($_FILES['image']['name'])
        {
         
$data=$this->input->post();

$config['upload_path']          = './assets/img';
$config['allowed_types']        = 'gif|jpg|png';
    $image_name=uniqid().$_FILES['image']['name'];
$config['file_name']        =  $image_name;


$this->load->library('upload', $config);

if ($this->upload->do_upload('image'))
{
 $data['image']=$image_name;
$this->load->model('adminmodel');
$this->adminmodel->updatedata($data);
    
    
   
}
else
{
echo    $error = $this->upload->display_errors();


}

    }else{
            $data= $this->input->post();
            $this->load->model('adminmodel');
            $this->adminmodel->updatedata($data);
        }
}

}

?>