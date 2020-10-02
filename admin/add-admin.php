<?php require_once 'inc/links.php'; ?>
    <title>Lawyer management system | Add admin</title>
    
    <?php require_once 'inc/navbar-sidebar.php'; ?>

    <?php 
        if(isset($_POST['add_admin'])){
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $admin->registerAdmin($first_name, $middle_name, $last_name, $username, $email, $password);
           
            $_SESSION['admin_message'] = "New admin added successfully";
            // header("location: add-admin.php");
        }
    ?>

            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="dashboard" class="container">
                        <h3><i class="fa fa-angle-right"></i> Add Admin</h3>
                        <div class="row">
                            <div class="col-md-12">
                            <p style="color: red;"style="color: red;" class="text-center">
                                <?php 
                                    if(isset($_SESSION['admin_message'])){
                                        echo $_SESSION['admin_message'];
                                        unset($_SESSION['admin_message']);
                                    }
                                ?>

                            </p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter first name" name="first_name" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter middle name" name="middle_name">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter last name" name="last_name" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                                    </div>
                                    <button type="submit" name="add_admin" class="btn btn-primary submit-btn">Add Admin</button>
                                </form>
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