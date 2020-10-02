<?php require_once 'inc/links.php'; ?>
    <title>Lawyer management system | Update admin</title>
    
    <?php require_once 'inc/navbar-sidebar.php'; 
        // editing admin
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = $admin->editAdmin($id);

            foreach($sql as $row){
                $first_name = $row['first_name'];
                $middle_name = $row['middle_name'];
                $last_name = $row['last_name'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
            }
        }

        // updating admin
        if(isset($_POST['update'])){
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $admin->updateAdmin($first_name, $middle_name, $last_name, $username, $email, $password);
            header('location: update-admin.php');
        }
    ?>

            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="dashboard" class="container">
                        <h3><i class="fa fa-angle-right"></i> Update Admin</h3>
                        <div class="row">
                            <div class="col-md-12">
                            <p style="color: red;"style="color: red;" class="text-center">
                                <?php 
                                ?>

                            </p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter first name" name="first_name"  value="<?php if(isset($first_name)) echo $first_name;?>" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter middle name" name="middle_name" value="<?php if(isset($middle_name)) echo $middle_name;?>">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter last name" name="last_name" value="<?php if(isset($last_name)) echo $last_name;?>" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter username" name="username" value="<?php if(isset($username)) echo $username;?>" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Enter email" name="email" value="<?php if(isset($email)) echo $email;?>" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?php if(isset($password)) echo $password;?>" required>
                                    </div>
                                    <button type="submit" name="update" class="btn btn-primary submit-btn">update</button>
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