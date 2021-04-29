<!DOCTYPE html>
<html lang="en" style="color: rgb(0, 0, 0);">

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

<body style="font-family: Oswald, sans-serif;color: #e5c6db;background: url(&quot;assets/img/contact%20us.jpg&quot;) center / cover, #000000;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="color: var(--gray-dark);background: #e5c6db;">
        <div class="container"><a class="navbar-brand" href="/Fashion/Front-end" style="background: url(&quot;assets/img/logoFinal.png&quot;) center / contain no-repeat;height: 53px;width: 120.8281px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: var(--warning);">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="checkout.php"><i class="fa fa-shopping-basket"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fa fa-user"></i></a></li>
            </ul>
            <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: #434a52;">Account</a>
                <div class="dropdown-menu"><a class="dropdown-item" data-bss-hover-animate="bounce" href="signForm.php" style="color: rgb(0,0,0);background: #e5c6db;">Sign up</a><a class="dropdown-item" data-bss-hover-animate="bounce" href="login.php
                    " style="color: rgb(0,0,0);background: #e87fc9;">Log in</a></div>
            </div>
        </div>
    </nav>
    <section class="contact-clean" style="height: 732px;padding: 129px 0px;background: url(&quot;assets/img/contact%20us.jpg&quot;) center / cover;">
        
        <form id="signUpForm" class="contact-form" action="https://mailthis.to/Futura" method="POST" encType="multipart/form-data"> 
            <div class="form-group"> <input  class="form-control" type="text"  name="name" placeholder="Full Name" required></div>
            <div class="form-group"> <input  class="form-control is-invalid" type="email" id="emailField" name="_replyto" placeholder="Your e-mail" required> </div>
            <div class="form-group"> <input  class="form-control is-invalid" type="file" name="_replyto" placeholder="Attachments"> </div>
            <div class="form-group"> <textarea class="form-control" name="message" placeholder="Enter your message here" rows="14" required></textarea></div>
            <div class="form-group"> <button class="btn btn-primary" type="submit" id="okButton" name="submit" > Send Mail</button></div>
            <input type="hidden" name="_subject" value="Contact form submitted">
            <input type="hidden" name="_after" value="index.php">
            <input type="hidden" name="_honeypot" value="">
            <input type="hidden" name="_confirmation" value="">
            </form>
    </section>

    <script>
        const signUpForm = document.getElementById('signUpForm');
        const emailField = document.getElementById('emailField');
        const okButton = document.getElementById('okButton');
        
          
        emailField.addEventListener('keyup', function (event) {
          isValidEmail = emailField.checkValidity();
          
          if ( isValidEmail ) {
            okButton.disabled = false;
          } else {
            okButton.disabled = true;
          }
        });
          
        okButton.addEventListener('click', function (event) {
          signUpForm.submit();
        });
        </script>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>
