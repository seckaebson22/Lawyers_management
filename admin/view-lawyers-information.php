<?php require_once 'inc/links.php'; ?>

    <title>Lawyer management system | All lawyers Information</title>

<?php require_once 'inc/navbar-sidebar.php';

?>


            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="lawyer" class="container">
                        <?php 
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];

                                $sql = $lawyer->getLawyersInformation($id);
                                foreach($sql as $row){
                        ?>
                        <h3><i class="fa fa-angle-right"></i> <?php echo $row['name']; ?> Details</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">
                                <div class="row">
                                    <div class="lawyers-desc col-md-12">
                                        <h4>lawyers Description</h4>
                                        <hr>
                                        <p><?php echo $row['lawyers_description']; ?></p>
                                    </div>
                                    <div class="lawyers-bio col-md-12">
                                        <h4>lawyers Biography</h4>
                                        <hr>
                                        <p>
                                            <?php echo $row['biography']; ?>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-information">
                                <div class="container">
                                <div class="row">
                                    <div class="card">
                                        <div class="img-responsive">
                                            <img class="card-img-top rounded-circle" src="../assets/images/<?php echo $row['image']; ?>" alt="Img">
                                        </div>
                                        <div class="card-body">
                                        <h5 class="card-title">Name: <?php echo $row['name']; ?></h5>
                                        <h5 class="card-title">Email: <?php echo $row['email']; ?></h5>
                                        <h5 class="card-title">Phone Number: <?php echo $row['phone_number']; ?></h5>
                                        <h5 class="card-title">Address: <?php echo $row['address']; ?></h5>
                                        <h5 class="card-title">Lawyers Service: <?php echo $row['lawyers_service']; ?></h5>
                                        <h5 class="card-title">Lawyers Rating: <?php echo $row['lawyers_rating']; ?></h5>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

</body>
</html>