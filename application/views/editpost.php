<div class="col-md-9">

<?php 
    
    foreach($edata as $e)
    {
    echo form_open_multipart("admin/updatepost");?>
       <input type="text" name="id" value="<?php echo $e['id'];?>" hidden>
        <label for="">Title</label>
        <input type="text" value="<?php echo $e['title'];?>" name="title" class="form-control">
         <label for="">Author</label>
        <input type="text"  value="<?php echo $e['author'];?>"  name="author"  class="form-control">
         <label for="">Description</label>
        <textarea name="description"  id="" cols="30" rows="10"  class="form-control"><?php echo $e['description'];?></textarea>
        <label for="">Upload Your Image</label>
        <input type="file" name="image" id=""  class="form-control">
        <button type="submit" class="btn btn-success">POST</button>
<?php echo form_close();  } ?>
    
</div>
<!--<form action="" method="post" enctype="multipart/form-data"></form>-->