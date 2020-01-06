<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Starter Template · Bootstrap</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->

</head>

<body>
  <div class="container">
      <div class="col-md-7 m-auto">
       <h1>Registration Form</h1>
       <?php echo form_open("admin/createaccount"); ?>
       <label for=""> Name</label><span style="color:red">*</span> <?php echo form_error('name', '<span class="alert alert-danger">', '</span>'); ?>
       <input type="text" name="name" class="form-control">
       <label for="">USERNAME</label><span style="color:red">*</span>  <?php echo form_error('uname', '<span class="alert alert-danger">', '</span>'); ?>
       <input type="text" name="uname" class="form-control">
       
       <label for="">Password</label><span style="color:red">*</span>  <?php echo form_error('pass1', '<span class="alert alert-danger">', '</span>'); ?>
       <input type="text" name="pass1" class="form-control">
      <label for="">Conform Password</label><span style="color:red">*</span> 
      <?php echo form_error('pass2', '<span class="alert alert-danger">', '</span>'); ?>
       <input type="text" name="pass2" class="form-control">
    <button type="submit" class="btn btn-primary btn-block mt-4">Singup</button>
       <?php echo form_close(); ?>
       
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