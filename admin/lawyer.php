<?php require_once 'inc/links.php'; ?>

    <title>Lawyer management system | lawyers</title>

<?php require_once 'inc/navbar-sidebar.php';

    // Deleting lawyer
    if(isset($_GET['del'])){
        $id = $_GET['del'];

        $lawyer->deleteLawyer($id);

        header("location: lawyer.php");
    }

?>


            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="lawyer" class="container">
                        <h3><i class="fa fa-angle-right"></i> All Lawyers</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="fa fa-angle-right"> All Registered Lawyers</h4>
                                <div class="table-responsive">
                                <table class="table table-striped table-advance table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th >Name</th>
                                            <th >Email</th>
                                            <th >Phone</th>
                                            <th >Address</th>
                                            <th >Lawyers Service</th>
                                            <th>View</th>
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = $lawyer->fetchLawyers();
                                            $count = 1;

                                            foreach($sql as $row){
                                        ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone_number']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['lawyers_service']; ?></td>
                                            <td class="views">
                                                <button class="btn btn-primary" >
                                                    <a href="view-lawyers-information.php?id=<?php echo $row['id']; ?>">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </button>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">
                                                    <a href="update-lawyer.php?id=<?php echo $row['id']; ?>">
                                                    <i class="fa fa-pencil"></i>
                                                    </a>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <a href="lawyer.php?del=<?php echo $row['id']; ?>">
                                                      <i class="fa fa-trash-o"></i>
                                                    </a>
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