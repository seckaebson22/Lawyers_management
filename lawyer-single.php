<?php require_once 'inc/header.php'; ?>
    <title>Lawyers Management System | Lawyer Single</title>
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
    <div class="lawyer-single">
        <div class="container">
            <div class="row">
                <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];

                    $sql = $lawyer->getLawyersInformation($id);
                    foreach($sql as $row){
                ?>
                <div class="lawyers-profile col-sm-4">
                    <div class="row">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/<?php echo $row['image']; ?>" alt="Card image">
                            <div class="card-body">
                            <h5 class="card-title">Name: <?php echo $row['name']; ?></h5>
                            <h5 class="card-title">Phone Number: <?php echo $row['phone_number']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lawyers-bio col-sm-8">
                    <h2>Biography</h2>
                    <p>
                       <?php echo $row['biography']; ?>
                    </p>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


<?php require_once 'inc/footer.php'; ?>