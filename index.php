<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Brain Twister</title>
        <!--CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    </head>
    <body class="main-layout">
        <!--NavBar-->
        <header>
            <div class="header-top">
                <?php include('Header.php') ?>
                <section class="slider_section">
                    <div class="banner_main">

                        <div class="container">

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="text-bg">
                                        <h1>Welcome to  <br> <strong >Brain Twister</strong></h1>
                                        <span></span>
                                        <a href="index.php#contact">Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="text-img">
                                        <figure><img src="images/img.jpg" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            </div>
            </div>
        </header>
        <!--Contenct-->
        <!--About-->
        <div id="about" class="about">
            <div class="container">
                <div class="row">

                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <div class="about-box">
                            <h3> ABOUT US</h3>
                            <span>all games here</span>
                            <p>At the Brain Twister page, our aim is to offer recreation that shows you that we really care! Not only have we got the best of them already added, but we can also guarantee that they are more coming on its way. We as a team decided to build something which is light hearted as well informational. Our team consists of 5 members each dedicated in different domains.

Our aim is to continue providing our customers with products that keep them happy as well as let them know their capabilities. User satisfaction is our priority and we are open to all types of discussion and suggestions.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Games-->
        <div id="games" class="We_are">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Games</h2>
                            <span>Click to play game</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="first-slide slideImg" src="images/typing.png" alt="First slide">
                                    <div class="container">
                                        <div class="carousel-caption relative">
                                            <a href="Typing.php" class="gameLink">Typing Test</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="second-slide slideImg" src="images/memory.png" alt="Second slide">
                                    <div class="container">
                                        <div class="carousel-caption relative">
                                            <a href="Memory.php" class="gameLink">Memory Game</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- contact us-->
        <div id="contact" class="contact" style="background: url(images/contact.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                </div>
                <div class="white_bg">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="contact">

                                <form action="contactus.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Name" type="text" name="name" minlength="3" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Phone" type="text" name="phone" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Email" type="text" name="email" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="textarea" placeholder="Message" type="text" name="message" minlength="10" required></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="send">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="rable-box">
                                <figure><img src="images/contact1.jpg" alt="#" />
                            </div>
                        </div>
                    </div>
                    <div class="error">
                        <?php if (isset($_SESSION['error'])) {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        } ?>
                    </div>
                    <div class="success">
                        <?php if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include('Footer.php') ?>

        <!--JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
