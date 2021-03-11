<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id;?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" value="<?php echo $row->lastName; ?>" name="lastName" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" value="<?php echo $row->firstName; ?>" name="firstName" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Birthdate</label>
                <input type="date" class="form-control" value="<?php echo $row->birthdate; ?>" name="birthdate" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contact No</label>
            <input type="text" class="form-control" value="<?php echo $row->contactNo; ?>" name="contactNo" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Bio</label>
                <input type="text" class="form-control" value="<?php echo $row->bio; ?>" name="bio" id="exampleInputEmail1" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Update</button>
            <a href="<?php echo site_url('CrudController')?>" class="href"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>
    </div>
</body>
</html>