<?php
require_once 'inc/links.php'; 

if(!isset($_SESSION['username'])){
    header("location: index.php");
}
?>

    <title>Lawyer management system | Admin Dashboard</title>
    
<?php require_once 'inc/navbar-sidebar.php'; ?>

            <section class="main-content col-lg-10 col-md-8">
                <div class="tab-content">
                    <div id="dashboard" class="container">
                        <h3><i class="fa fa-angle-right"></i> Admin Dashboard</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/images/features/1.png" alt="">
                                <div class="logo-info">
                                    <h3><a href="lawyer.php">Lawyers</a></h3>
                                    <p class="text-center">
                                        <?php $lawyer->countNumberOfLawyers(); ?>
                                    </p>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/images/features/2.png" alt="">
                                    <div class="logo-info">
                                        <h3><a href="message.php">Messages</a></h3>
                                        <p class="text-center">
                                            <?php $user->countNumberOfMessages(); ?>
                                        </p>
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