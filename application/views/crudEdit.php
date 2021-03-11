<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title>CodeIgniter CRUD</title>
</head>
<body>
    <br>
    <br>
    <div class="container">
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
            <button type="submit" class="btn btn-primary" value="save">Sign in</button>
        </form>
    </div>
</body>
</html>