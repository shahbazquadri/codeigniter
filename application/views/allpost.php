<div class="col-md-9">
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Image</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php
        foreach($data as $data)
        {
        ?>
        <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['title']?></td>
            <td><?php echo $data['author']?></td>
            <td><img class="img-fluid" src="<?php echo base_url('assets/img/'.$data['image']);?>" alt=""></td>
            <td><?php echo $data['description']?></td>
            <td><a class="btn btn-danger" href="<?php echo base_url("admin/delete/".$data['id']);?>">DELETE</a></td>
            <td><a class="btn btn-secondary" href="<?php echo base_url("admin/edit/".$data['id']);?>">EDIT</a></td>
        </tr>
        <?php } ?>
    </table>
    
</div>