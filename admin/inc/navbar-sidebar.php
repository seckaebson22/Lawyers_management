</head>
<body>

<div class="main-nav">
    <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Logout</a>
                </li> 
            </ul>
        </div>
    </div> 
    </nav>
</div>

<div class="admin-dashboard">
    <div class="container">
        <div class="row">
            <aside class="aside col-lg-2 col-md-4">
                <div class="admin-logo">
                    <img src="assets/images/dashboard-logo.jpg" class="rounded-circle" alt="dashbaord logo">
                    <p>Admin</p>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-lawyer.php">Add Lawyer</a>
                    </li>
                    <li class="nav-item">
                        <a href="lawyer.php">All Lawyers</a>
                    </li>
                    <li class="nav-item">
                        <a href="message.php">All Messages</a>
                    </li>
                    <li class="nav-item">
                        <a href="add-admin.php">Add Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin.php">All Admins</a>
                    </li>
                </ul>
            </aside>