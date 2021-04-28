<?php
session_start();

if(empty($_SESSION['logged-in'])){
    echo "<script>
window.location.href='login.php';
</script>";
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
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/changePassword.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="font-family: Oswald, sans-serif;background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
    <section class="changePassword" style="background: url(&quot;assets/img/lines%20backround.jpg&quot;) center;">
        <form action=change-p.php method="post">
            <h2 class="sr-only">Change password</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
   
            <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
           <?php } ?>
            
           <div class="illustration"><img src="assets/img/logoFinal.png"></div>
            <div class="form-group" style="text-align: center;"><label style="text-align: right;font-size: 18px;color: #e87fc9;">Type existing password</label><input class="form-control" type="password" name="op" placeholder="Old Password" style="text-align: center;color: rgb(80, 94, 108);background: #e5c6db;"></div>
            <div class="form-group" style="text-align: center;"><label style="text-align: right;font-size: 18px;color: #e87fc9;">Type new password</label><input class="form-control" type="password" name="np" placeholder="New Password" style="text-align: center;color: rgb(80, 94, 108);background: #e5c6db;"></div>
            <div class="form-group" style="text-align: center;"><label style="text-align: right;font-size: 18px;color: #e87fc9;">Type again new password</label><input class="form-control" type="password" name="c_np" placeholder="Confirm new password" style="text-align: center;color: rgb(80, 94, 108);background: #e5c6db;"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Change</button></div>
            <div class="form-group"><a class="forgot" href="profile.html">Go back to profile page</a></div>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>



