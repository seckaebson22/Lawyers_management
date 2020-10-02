<?php require_once 'inc/links.php'; ?>

    <title>Lawyer management system | Messages</title>
    
    <?php require_once 'inc/navbar-sidebar.php';
    
    // Deleting messages
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $user->deleteMessage($id);
    }
    ?>
    
            <section class="main-content col-lg-10 col-md-9">
                <div class="tab-content">
                    <div id="message" class="container">
                        <h3><i class="fa fa-angle-right"></i> All Messages</h3>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h4 class="fa fa-angle-right"> All User Messages</h4>
                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = $user->fetchMessages();
                                            $count = 1;

                                            foreach($sql as $row){

                                        ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['subject']; ?></td>
                                            <td><?php echo $row['message']; ?></td>
                                            <td>
                                                <button class="btn btn-danger">
                                                <a href="message.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o"></i></a>
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