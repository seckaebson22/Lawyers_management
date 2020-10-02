<?php require_once 'inc/links.php'; ?>

    <title>Lawyer management system | Admin</title>
    
    <?php
     require_once 'inc/navbar-sidebar.php'; 
     
    // Deleting admin
    if(isset($_GET['del'])){
        $id = $_GET['del'];

        $admin->deleteAdmin($id);
        $_SESSION['delete_message'] = "You deleted an admin successfully";
        header("location: admin.php");
    }
     ?>
    
            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="message" class="container">
                        <h3><i class="fa fa-angle-right"></i> All Admins</h3>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="fa fa-angle-right"> All Registered Admins</h4>
                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = $admin->fetchAdmins();
                                            $count = 1;

                                            foreach($sql as $row){

                                        ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['first_name']. ' '. $row['middle_name']. ' '. $row['last_name']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td>
                                                <button class="btn btn-primary">
                                                    <a href="update-admin.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <a href="admin.php?del=<?php echo $row['id']; ?>"><i class="fa fa-trash-o"></i></a>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                            $count++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

</body>
</html>