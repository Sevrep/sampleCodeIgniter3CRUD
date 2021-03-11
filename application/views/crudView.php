<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <style>
        .bs-example{
            margin: 20px;
        }
    </style>

    <title>CodeIgniter CRUD</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CODEIGNITER</a>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo site_url('CrudController/create')?>">
                            <div class="form-group">
                                <label for="inputEmail">Last Name</label>
                                <input type="text" name="lastName" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">First Name</label>
                                <input type="text" name="firstName" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Birthdate</label>
                                <input type="date" name="birthdate" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Contact No</label>
                                <input type="text" name="contactNo" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Bio</label>
                                <input type="text" name="bio" id="inputEmail" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary" value="save">Sign in</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) { ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->lastName; ?></td>
                    <td><?php echo $row->firstName; ?></td>
                    <td><?php echo $row->birthdate; ?></td>
                    <td><?php echo $row->contactNo; ?></td>
                    <td><?php echo $row->bio; ?></td>
                    <td>
                        <a href="<?php echo site_url('CrudController/edit'); ?>/<?php echo $row->id; ?>">Edit</a> | 
                        <a href="<?php echo site_url('CrudController/delete'); ?>/<?php echo $row->id; ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>