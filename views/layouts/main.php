<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <!-- LINK REFERENCES -->
    <link rel="stylesheet" type="text/css" href="teaserTemplate/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="teaserTemplate/https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="teaserTemplate/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="teaserTemplate/css/responsive.css" rel="stylesheet" />
    <!-- END LINK REFERENCES -->

    <script type="text/javascript" src="teaserTemplate/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="teaserTemplate/js/bootstrap.js"></script>
    <script type="text/javascript" src="teaserTemplate/js/custom.js"></script>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.html">
                        <img src="teaserTemplate/images/logo.png" alt="" />
                    </a>
                    <div class="navbar-collapse" id="">
                        <ul class="navbar-nav justify-content-between ">
                            <div class="User_option">
                                <li class="">
                                    <a class="mr-4" href="">
                                        Login
                                    </a>
                                    <a class="" href="">
                                        Sign up
                                    </a>
                                </li>
                            </div>
                        </ul>

                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <span class="s-1">

                                </span>
                                <span class="s-2">

                                </span>
                                <span class="s-3">

                                </span>
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a href="#">HOME</a>
                                <a href="#">ABOUT</a>
                                <a href="#">HOUSE</a>
                                <a href="#">PRICING</a>
                                <a href="#">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-md-1">
                        <div class="detail-box">
                            <h1>
                                <span> Modern</span> <br>
                                Apartment <br>
                                House
                            </h1>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of
                            </p>
                            <div class="btn-box">
                                <a href="" class="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- find section -->
    <section class="find_section ">
        <div class="container">
            <form action="">
                <div class=" form-row">
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Serach Your Categories ">
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Location ">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="">
                            search
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </section>


    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <section class="contact_section ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Get In Touch
                </h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">->
                </div>
                <div class="col-lg-4 col-md-5 ">
                    <div class="form_container">
                        <form action="">
                            <div>
                                <input type="text" placeholder="Name" />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message" />
                            </div>
                            <div class="d-flex ">
                                <button>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end contact section -->



    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            About Apartment
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="teaserTemplate/images/location.png" width="18px" alt="">
                            </div>
                            <p>
                                Address
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="teaserTemplate/images/phone.png" width="12px" alt="">
                            </div>
                            <p>
                                +01 1234567890
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/mail.png" width="18px" alt="">
                            </div>
                            <p>
                                demo@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            Information
                        </h5>
                        <p>
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_links">
                        <h5>
                            Useful Link
                        </h5>
                        <ul>
                            <li>
                                <a href="">
                                    There are many
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    variations of
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    passages of
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Lorem Ipsum
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    available, but
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    the i
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <img src="images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>