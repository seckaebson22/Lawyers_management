<?php require_once 'inc/header.php'; ?>

    <title>Lawyers Management System | about</title>
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
    <h1>About Us</h1>
</div>


<div class="site-main-section">
   <section class="features-area" id="features-counter">
     <div class="container"> 
       <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="single-feature">
             <div class="thumb">
               <img src="assets/images/features/1.png" alt="">
               <div class="info-content">
                 <h4><span id="secondo" class="countup" cup-end="595" cup-append="+" cup-duration="2000"></span></h4>
                 <p>Qualified Lawyer</p>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="single-feature">
             <div class="thumb">
               <img src="assets/images/features/2.png" alt="">
               <div class="info-content">
                 <h4><span id="secondo" class="countup" cup-end="20650" cup-append="+" cup-duration="1000"></span></h4>
                 <p>Solved Cases</p>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="single-feature">
             <div class="thumb">
               <img src="assets/images/features/3.png" alt="">
               <div class="info-content">
                 <h4><span id="secondo" class="countup" cup-end="3" cup-append="k" cup-duration="500"></span></h4>
                 <p>Trusted Clients</p>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
           <div class="single-feature">
             <div class="thumb">
               <img src="assets/images/features/4.png" alt="">
               <div class="info-content">
                 <h4><span id="secondo" class="countup" cup-end="50" cup-append="+" cup-duration="2000"></span></h4>
                 <p>Achievements</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <section id="law-rating">
		<div class="container">
      <div class="choose animate-box">
        <div class="content-heading">
          <h2>Why Choose Us?</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
          <span class="skill">Law <i class="val">50%</i></span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
		      <span class="skill">Family Law<i class="val">80%</i></span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
		  <span class="skill">Real Estate Law <i class="val">70%</i></span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
		  <span class="skill">Personal Injury Law<i class="val">40%</i></span>
          </div>
        </div>
      </div>
    </div>
    </section>

    <div class="legal-advice">
    	<div class="legal-center">
        	<h1 class="text-center">Legal Advice</h1>
        	<p>We help people effectively fight their offenders back and successfully defend their own stand!</p>
    	</div>
	  </div>
</div>


<script>
  var cu = new counterUp({
    start: 0,	
    duration: 6000,
    intvalues: true,
    interval: 100,
    // prepend: '€',
    append: '.5'
  });
  cu.start();
</script>

<?php require_once 'inc/footer.php'; ?>