<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>
        <br>
        <br>
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
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" name="lastName" id="exampleInputEmail1" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" name="firstName" id="exampleInputEmail1" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Birthdate</label>
                                <input type="date" class="form-control" name="birthdate" id="exampleInputEmail1" placeholder="Your birth date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact No</label>
                                <input type="text" class="form-control" name="contactNo" id="exampleInputEmail1" placeholder="Enter contact number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bio</label>
                                <input type="text" class="form-control" name="bio" id="exampleInputEmail1" placeholder="Tell us about yourself">
                            </div>
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
                        <a href="<?php echo site_url('CrudController/edit'); ?>/<?php echo $row->id; ?>"><button type="button" class="btn btn-primary">Edit</button></a> | 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">Delete</button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete <?php echo $row->firstName; ?>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="<?php echo site_url('CrudController/delete'); ?>/<?php echo $row->id; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>