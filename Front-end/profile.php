<?php
session_start();

require_once('config2.php');

if (isset($_SESSION['logged-in'])) {
    $email = $_SESSION['email'];
    $sql = "select * from user where userName='$email'";
    $query = mysqli_query($con, $sql);
    $res = mysqli_num_rows($query);

    if ($res > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $_SESSION['status'] = $row['status'];
            $status = $_SESSION['status'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Commercial</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: url(&quot;assets/img/lines%20backround.jpg&quot;) center;font-family: Oswald, sans-serif;color: #434a52;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="color: var(--gray-dark);background: rgba(229,198,219,0.53);">
        <div class="container"><a class="navbar-brand" href="index.php" style="background: url(&quot;assets/img/logoFinal.png&quot;) center / contain no-repeat;height: 53px;width: 120.8281px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: var(--warning);">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <?php
                    if (isset($_SESSION['logged-in'])) {
                        if($status === 1);{
                            echo "<li class=\"nav - item\\\"><a class=\"nav - link\" href=\"../Editor/addProduct.php\">Admin funtions</a></li>";
                        }
                    }
                    ?>


                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-heart"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="checkout.php"><i class="fa fa-shopping-basket"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fa fa-user"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="changePassword.php"><i class="fa fa-cog"></i></a></li>

            </ul>
            <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: #434a52;">Account</a>
                <div class="dropdown-menu">
                    <?php
                    if (isset($_SESSION['logged-in'])) {
                        echo"<a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"signOut.php\" style=\"color: rgb(0,0,0);background: #e87fc9;\">Sign out</a></div>";

                    } else{
                        (empty($_SESSION['logged-in']));
                        echo "<a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"signForm.php\" style=\"color: rgb(0,0,0);background: #e5c6db;\">Sign up</a>
                    <a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"login.php\" style=\"color: rgb(0,0,0);background: #e87fc9;\">Log in</a>";
                    }
                    ?>
                </div>
            </div>
    </nav>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info alert-dismissible absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input class="form-control-file form-control" type="file" name="avatar-file" style="background: #e5c6db;">
                </div>
                <div class="col-md-8">
                    <h1 style="text-align: center;color: #b73793;">Profile </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Firstname </label><input class="form-control" type="text" name="firstname" style="background: #e5c6db;"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Lastname </label><input class="form-control" type="text" name="lastname" style="background: #e5c6db;"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email" style="background: #e5c6db;"></div>
                    <div class="form-row">
                        
                </form>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>