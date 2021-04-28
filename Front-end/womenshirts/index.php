<?php require_once("../../Product-page/php/cart_init.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shoes</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/article.css">
    <link rel="stylesheet" href="../assets/css/checkout.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
</head>

<body style="font-family: Oswald, sans-serif;">

<div style="background: url(&quot;../assets/img/lines%20backround%202%20dark.jpg&quot;);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="navclass" style="color: var(--gray-dark);background: rgba(255,255,255,0.62);">
        <div class="container"><a class="navbar-brand" href="../" style="background: url(&quot;../assets/img/logoFinal.png&quot;) center / contain no-repeat;height: 53px;width: 120.8281px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: var(--warning);">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search" style="color: rgb(0,0,0);"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" style="color: rgb(255,255,255);background: rgba(0,0,0,0.36);"></div>
                </form>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="../checkout.php"><i class="fa fa-shopping-basket"></i><span id="items"><?php $cart = isset($n_of_items) ? $n_of_items : 0; echo $cart?></span></a></li>
                <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fa fa-user"></i></a></li>
                <li class="nav-item"></li>
            </ul>
            <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: #434a52;">Account</a>
                <div class="dropdown-menu"><a class="dropdown-item" data-bss-hover-animate="pulse" href="signForm.html" style="color: rgb(0,0,0);background: #e5c6db;">Sign up</a><a class="dropdown-item" data-bss-hover-animate="pulse" href="login.html" style="color: rgb(0,0,0);background: #e87fc9;">Log in</a></div>
            </div>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><div id="sidebar-main" class="sidebar sidebar-default sidebar-separate">
                        <div class="sidebar-category sidebar-default">
                            <div class="category-title">
                                <span>Categories</span>
                            </div>
                            <div class="category-content">
                                <ul id="clothes-nav" class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#woman-item" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-clothes">
                                            Women
                                        </a>
                                        <ul id="woman-item" class="flex-column collapse">
                                            <li class="nav-item">
                                                <a href="../womenpants" class="nav-link">
                                                    Pants
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../womenjackets" class="nav-link">
                                                    Jackets
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    Shirts
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#man-item" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-clothes">
                                            Men
                                        </a>
                                        <ul id="man-item" class="flex-column collapse">
                                            <li class="nav-item">
                                                <a href="../menpants" class="nav-link">
                                                    Pants
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../menjackets" class="nav-link">
                                                    Jackets
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../menpants" class="nav-link">
                                                    Shirts
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../shoes" class="nav-link">
                                            Shoes
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#other-clothes" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-clothes">
                                            General
                                        </a>
                                        <ul id="other-clothes" class="flex-column collapse">
                                            <li class="nav-item">
                                                <a href="../accessories" class="nav-link">
                                                    Accessories
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div></div>
                <div class="col-md-6">
                    <div id="promo" style="margin: 33px;background: url(&quot;../assets/img/poolball.jpg&quot;) center / contain;">
                        <div class="jumbotron" data-bss-hover-animate="pulse" style="background: rgba(255,255,255,0);">
                            <h1 style="background: rgba(0,0,0,0.36);color: rgb(239,209,52);">All other sales can go home</h1>
                            <p style="background: rgba(0,0,0,0.36);color: #efd134;">Sales up to 60% on all summer items</p>
                            <p><a class="btn btn-primary" role="button" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" style="background: #2b2b28;" title="View sales" href="product.html">Shop now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<main>
    <h1>Women Shirts</h1>

    <div class="flexParent">

        <?php require_once '../../Product-page/php/womenShirtsPage.php' ?>

    </div>

</main>




<section style="margin: 0px;height: 72px;"></section>
<div>
    <div class="card-group" style="text-align: center;">
        <div class="card">
            <div class="card-body" data-bss-hover-animate="pulse" style="background: url(&quot;../assets/img/shoes.jpg&quot;) center / cover;text-align: center;">
                <h4 class="card-title" style="background: rgba(0,0,0,0.29);color: rgb(255,255,255);">Extended shoe collection</h4><button onclick="window.location.href='../shoes/index.php'" class="btn btn-primary" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" type="button" style="margin: 92px;background: #2b2b28;" title="Open colletion">Shoes</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body" data-bss-hover-animate="pulse" style="background: url(&quot;../assets/img/jacket.jpg&quot;) center / cover;">
                <h4 class="card-title" style="background: rgba(0,0,0,0.29);color: rgb(255,255,255);">Jacket for all needs</h4><button onclick="window.location.href='../menjackets/index.php'" class="btn btn-primary" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" type="button" style="margin: 92px;background: #2b2b28;" title="Open colletion">Jackets</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body" data-bss-hover-animate="pulse" style="background: url(&quot;../assets/img/goth%20model.jpg&quot;) top / cover;">
                <h4 class="card-title" style="background: rgba(0,0,0,0.29);color: rgb(255,255,255);">Styles to mix and match</h4><button onclick="window.location.href='../menpants/index.php'" class="btn btn-primary" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="pulse" type="button" style="margin: 92px;background: #2b2b28;" title="Open colletion">Styles</button>
            </div>
        </div>
    </div>
</div>


<div>
    <footer class="footer-dark" style="color: #e87fc9;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Help &amp; Information</h3>
                    <ul>
                        <li><a href="../contactPage.php">Contact us</a></li>
                        <li><a href="#">Development</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Team project members(Yunus Celik 1) © 2021</p>
        </div>
    </footer>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/cart.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/bs-init.js"></script>
<script src="../assets/js/Profile-Edit-Form.js"></script>
</body>

</html>