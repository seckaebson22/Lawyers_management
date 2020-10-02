<?php require_once 'inc/links.php'; ?>
    <title>Admin Dashboard | Login page</title>
</head>
<body>
    
    <div class="login-page">
        <div class="container">
            <h2 class="form-login-heading text-center">Login</h2>
            <form action="login.php" method="POST">
                <p style="color: red;" class="text-center">
                    <?php
                        if(isset($_SESSION['login_error_message'])) {
                            echo $_SESSION['login_error_message'];
                            unset($_SESSION['login_error_message']); 
                        } 
                    ?>
                </p>
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" name="login_admin" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</body>
</html>