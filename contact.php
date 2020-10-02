<?php require_once 'inc/header.php'; ?>

    <title>Lawyers Management System | Contact</title>
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
    <h1>Contact Us</h1>
</div>


<div class="site-main-section">
    <div class="site-contact">
        <h1 class="text-center">Have Some Questions?</h1>
        <div class="container">
          <div class="row">
            <div class="contact-logo col-sm-3 col-md-3">
              <h1><i class="fa fa-envelope"></i></h1>
            </div>
            <div class="contact-form col-sm-9 col-md-9">
                <p style="color: red;" class="text-center">
                    <?php 
                        if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                    ?>
                </p>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="message" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
          </div>
        </div>
    </div>
</div>


<?php require_once 'inc/footer.php'; ?>