<?php require_once 'inc/header.php';?>

    <title>Lawyers Management System | Welcome</title>
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

<!-- carousel sliders -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/banner1.jpg" alt="Banner1">
      <div class="content">
          <h1>Hire A Professional Lawyer</h1>
          <a href="#" class="silder-btn">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/banner2.jpg" alt="Banner2">
      <div class="content">
          <h1>Hire Professional Lawyer Service</h1>
          <a href="#" class="silder-btn">Learn More</a>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon carousel-control"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon carousel-control"></span>
  </a>
</div>


<div class="top-rated-lawyers">
      <h1>Top Rated Lawyers</h1>
      <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' class="center">
        <div class="top-lawyers">
          <div class="card">
            <img src="assets/images/lawyer1.jpg" alt="Lawyer1" style="width: 100%; height: 300px; object-fit: cover;">
            <div class="card-body">
              <h2>Ebrima Secka</h2>
              <p>lorem ipsum is a dummy text</p>
            </div>
          </div>
        </div>
        <div class="top-lawyers">
          <div class="card">
            <img src="assets/images/lawyer2.jpg" alt="Lawyer2" style="width: 100%; height: 300px; object-fit: cover;">
            <div class="card-body">
              <h2>Ebrima Secka</h2>
              <p>lorem ipsum is a dummy text</p>
            </div>
          </div>
        </div>
        <div class="top-lawyers">
          <div class="card">
            <img src="assets/images/lawyer3.jpg" alt="Lawyer3" style="width: 100%; height: 300px; object-fit: cover;">
            <div class="card-body">
              <h2>Ebrima Secka</h2>
              <p>lorem ipsum is a dummy text</p>
            </div>
          </div>
        </div>
        <div class="top-lawyers">
          <div class="card">
            <img src="assets/images/lawyer4.jpg" alt="Lawyer4" style="width: 100%; height: 300px; object-fit: cover;">
            <div class="card-body">
              <h2>Ebrima Secka</h2>
              <p>lorem ipsum is a dummy text</p>
            </div>
          </div>
        </div>
        <div class="top-lawyers">
          <div class="card">
            <img src="assets/images/lawyer5.jpg" alt="Lawyer5" style="width: 100%; height: 300px; object-fit: cover;">
            <div class="card-body">
              <h2>Ebrima Secka</h2>
              <p>lorem ipsum is a dummy text</p>
            </div>
          </div>
        </div>
        <div class="top-lawyers">
          <div class="card">
            <img src="assets/images/lawyer1.jpg" alt="Lawyer1" style="width: 100%; height: 300px; object-fit: cover;">
            <div class="card-body">
              <h2>Ebrima Secka</h2>
              <p>lorem ipsum is a dummy text</p>
            </div>
          </div>
        </div>
      </div>
  </div>

<div class="site-main-section">
    <!-- testimonial -->
    <div class="site-testimonial">
        <h1 class="text-center">Testimonial</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <img class="rounded-circle" src="assets/images/lawyer1.jpg" alt="Lawyer 1">
                    <div class="card-body">
                        <h4 class="card-title">Breant Weaver, hotpressweb</h4>
                        <hr>
                        <p class="card-text">Some example text. Some example text. Some example text.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img class="rounded-circle" src="assets/images/lawyer2.jpg" alt="Lawyer 2">
                    <div class="card-body">
                        <h4 class="card-title">Breant Weaver, hotpressweb</h4>
                        <hr>
                        <p class="card-text">Some example text. Some example text. Some example text.</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <img class="rounded-circle" src="assets/images/lawyer3.jpg" alt="Lawyer 3">
                    <div class="card-body">
                        <h4 class="card-title">Breant Weaver, hotpressweb</h4>
                        <hr>
                        <p class="card-text">Some example text. Some example text. Some example text.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'inc/footer.php'; ?>