<?php require_once 'inc/header.php'; ?>

    <title>Lawyers Management System | Lawyer</title>
</head>
<body>

<div class="main-nav">
    <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Lawful</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lawyer.php">Lawyers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>  
            </ul>
        </div>
    </div> 
    </nav>
</div>

<div class="site-banner">
    <h1>Lawyers Profile</h1>
</div>

<div class="site-main-section">
    <div class="lawyer-ratings">
    <h1 class="text-center">Lawyer Ratings</h1>
        <div class="container">
            <div class="row">
                <div class="aside col-md-3">
                    <h2 class="text-center">Ratings</h2>
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#top-rated">Top-Rated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#middle-rated">Middle-Rated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#low-rated">Low-Rated</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content col-md-9">
                    <div id="top-rated" class="tab-pane active">
                        <div class="row">
                            <?php
                                $sql = $lawyer->lawyersRating('top_rated');

                                foreach($sql as $row){
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/<?php echo $row['image']; ?>" alt="Project 1">
                                    <div class="card-body">
                                    <h4 class="card-title"><?php echo $row['name']; ?></h4>
                                    <p class="card-text"><?php echo $row['lawyers_description']; ?></p>
                                    <a href="lawyer-single.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">See Profile</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div id="middle-rated" class="tab-pane fade">
                        <div class="row">
                                <?php 
                                    $sql = $lawyer->lawyersRating('middle_rated');

                                    foreach($sql as $row){
                                ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="card">
                                        <img class="card-img-top" src="assets/images/<?php echo $row['image']; ?>" alt="Project 1">
                                        <div class="card-body">
                                        <h4 class="card-title"><?php echo $row['name']; ?></h4>
                                        <p class="card-text"><?php echo $row['lawyers_description']; ?></p>
                                        <a href="lawyer-single.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">See Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 

                                    }
                                ?>
                            </div>
                        </div>
                    <div id="low-rated" class="tab-pane fade">
                        <div class="row">
                            <?php 
                                $sql = $lawyer->lawyersRating('low_rated');

                                foreach($sql as $row){
                            ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src="assets/images/<?php echo $row['image']; ?>" alt="Project 1">
                                    <div class="card-body">
                                    <h4 class="card-title"><?php echo $row['name']; ?></h4>
                                    <p class="card-text"><?php echo $row['lawyers_description']; ?></p>
                                    <a href="lawyer-single.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">See Profile</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>


<?php require_once 'inc/footer.php'; ?>