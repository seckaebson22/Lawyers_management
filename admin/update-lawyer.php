<?php require_once 'inc/links.php'; ?>

    <title>Lawyer management system | Update lawyer</title>
<?php require_once 'inc/navbar-sidebar.php';
    
    // editing lawyer
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = $lawyer->editLawyer($id);

        foreach($sql as $row){
            $name = $row['name'];
            $email= $row['email'];
            $phone_number = $row['phone_number'];
            $address = $row['address'];
            $lawyers_desc = $row['lawyers_description'];
            $lawyers_service = $row['lawyers_service'];
            $lawyers_rating = $row['lawyers_rating'];
            $file_name = $row['image'];
            $biography = $row['biography'];
        }
    }

    // updating lawyer
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $lawyers_desc = $_POST['lawyers_description'];
        $lawyers_service = $_POST['lawyers_service'];
        $lawyers_rating = $_POST['lawyers_rating'];
        $biography = $_POST['biography'];

        $target_dir = "uploads/";
        $file_name = $_FILES['image']['name'];
        $target_file = $target_dir . basename($file_name);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        
        if ($target_file == "uploads/") {
            $msg = "cannot be empty";
            $uploadOk = 0;
        } // Check if file already exists
        else if (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        } // Check file size
        else if ($_FILES["image"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        } // Check if $uploadOk is set to 0 by an error
        else if ($uploadOk == 0) {
            $msg = "Sorry, your file was not uploaded.";
    
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $msg = "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            }
        }

       $lawyer->updateLawyer($name, $email, $phone_number, $address, $lawyers_desc, $lawyers_service, $lawyers_rating, $file_name, $biography);
        header("location: update-lawyer.php");
    }
?>

            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="dashboard" class="container">
                        <h3><i class="fa fa-angle-right"></i> Update Lawyer</h3>
                        <div class="row">
                            <div class="col-md-12">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php if(isset($name)) echo $name; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="email" class="form-control"  placeholder="Enter email" name="email" value="<?php if(isset($email)) echo $email; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter phone number" name="phone_number" value="<?php if(isset($phone_number)) echo $phone_number; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter address" name="address" value="<?php if(isset($address)) echo $address; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter lawyers description" name="lawyers_description" value="<?php if(isset($lawyers_desc)) echo $lawyers_desc; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter lawyers service" name="lawyers_service" value="<?php if(isset($lawyers_service)) echo $lawyers_service; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter lawyers rating" name="lawyers_rating" value="<?php if(isset($lawyers_rating)) echo $lawyers_rating; ?>" required>
                                </div>
                                <div class="form-group">
                                 <input type="file" class="form-control" name="image" value="<?php if(isset($file_name)) echo $file_name; ?>" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="biography" placeholder="biography" required><?php if(isset($biography)) echo $biography; ?></textarea>
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