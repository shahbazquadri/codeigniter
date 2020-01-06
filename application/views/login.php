<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Admin | Login</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url(<?php echo base_url("assets/img/bg.png");?>);
            
          
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
    
    </style>
    <!-- Place your stylesheet here-->
   
</head>

<body>
   
   <div class="container">
       <div class="row">
           <div class="col-md-6 m-auto">
              <h1>Admin | Login </h1>
<!--               <form action="" method="post">-->
                  <?php echo form_open('admin/checkuser');
echo   form_label("USERNAME");
echo form_input("uname","",["class"=>"form-control"]); ?>
<label for="">PASSWORD</label>
<input type="password" name="pass" id="" class="form-control">
                   <button type="submit" class="btn btn-success mt-4">Login</button>
              <?php form_close(); ?>
              
        <a href="<?php echo base_url("admin/regitration");?>">Or create new Account</a>    
            
           </div>
       </div>
   </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>