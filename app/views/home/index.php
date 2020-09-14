



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Poppins|Source+Serif+Pro&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/fullpage.min.css"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/homepage.css"?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/page/dropdown.css"?>"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>َThe Inspiration Youth Organization</title>
    <link rel="shortcut icon" type="photo/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
</head>

<body>

<div class="preload_content">
    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>
</div>

<nav>
    <?php if (\app\config\Configs::getUserSession("Current_User") == false &&
        \app\config\Configs::getUserSession("Current_Admin") == false): ?>
        <ul class="nav-list ">
            <a href="<?php echo \app\config\Configs::$urlroot?>" class="nav-link">
                <li class="nav-item nav-active">Home </li>
            </a>



            <li class="nav-item dropdown">
                Member <img src="<?php echo \app\config\Configs::$urlroot."assets/img/Arrow.png"?>" alt="dropdown" class="arrow" />
                <ul class="dropdown--list">
                    <a href="<?php echo \app\config\Configs::$urlroot."User/Login"?>">
                        <li>Log in</li>
                    </a>
                    <a href="<?php echo \app\config\Configs::$urlroot."User/SignUp"?>">
                        <li>Sign up</li>
                    </a>

                </ul>
            </li>

            <a class="nav-link ">
                <li class="nav-item darkmode" style="cursor: pointer;">
                    <div class="item-text" style="display: inline-block;"></div>
                    <div class="darkmode-toggler"></div>
                </li>
            </a>
        </ul>
    <?php else: ?>

            <?php if (\app\config\Configs::getUserSession("Current_User")) :?>
                    <ul class="nav-list ">
                    <a href="<?php echo \app\config\Configs::$urlroot?>" class="nav-link">
                        <li class="nav-item nav-active">Home</li>
                    </a>
                    <a href="<?php echo \app\config\Configs::$urlroot."Event"?>" class="nav-link">
                        <li class="nav-item">Events</li>
                    </a>
                        <a href="<?php echo \app\config\Configs::$urlroot."Event/Team"?>" class="nav-link">
                            <li class="nav-item">Team</li>
                        </a>
                    <li class="nav-item dropdown">
                        <?php echo \app\config\Configs::getUserSession("Current_User");?>
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/Arrow.png"?>" alt="dropdown" class="arrow" />
                        <ul class="dropdown--list">

                            <a href="<?php echo \app\config\Configs::$urlroot."User/Logout"?>">
                                <li>Log out</li>
                            </a>
                        </ul>
                    </li>
                        <a class="nav-link ">
                            <li class="nav-item darkmode">
                                <div class="item-text" style="display: inline-block;"></div>
                                <div class="darkmode-toggler"></div>
                            </li>
                        </a>
                    </ul>
            <?php else:?>

                    <ul class="nav-list ">
                        <a href="<?php echo \app\config\Configs::$urlroot?>" class="nav-link">
                            <li class="nav-item nav-active">Home</li>
                        </a>
                        <a href="<?php echo \app\config\Configs::$urlroot."Event"?>" class="nav-link">
                            <li class="nav-item">Events</li>
                        </a>
                        <a href="<?php echo \app\config\Configs::$urlroot."Event/Team"?>" class="nav-link">
                            <li class="nav-item">Team</li>
                        </a>

                        <li class="nav-item dropdown">
                            <?php echo \app\config\Configs::getUserSession("Current_Admin");?>
                            <img src="<?php echo \app\config\Configs::$urlroot."assets/img/Arrow.png"?>" alt="dropdown" class="arrow" />
                            <ul class="dropdown--list">

                                <a href="<?php echo \app\config\Configs::$urlroot."User/Logout"?>">
                                    <li>Log out</li>
                                </a>
                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            Admin Panel
                            <img src="<?php echo \app\config\Configs::$urlroot."assets/img/Arrow.png"?>" alt="dropdown" class="arrow" />
                            <ul class="dropdown--list">

                                <a href="<?php echo \app\config\Configs::$urlroot."Event/Create"?>">
                                    <li>New Event</li>
                                </a>
                                <a href="<?php echo \app\config\Configs::$urlroot."Admin/Notification"?>">
                                    <li>Notifications</li>
                                </a>
                            </ul>

                        </li>





                        <a class="nav-link ">
                            <li class="nav-item darkmode">
                                <div class="item-text" style="display: inline-block;"></div>
                                <div class="darkmode-toggler"></div>
                            </li>
                        </a>
                    </ul>
        <?php endif;?>
    <?php endif;?>


</nav>

<main class="main ">
    <header class="header">
        <div class="logo">IYO</div>
        <div class="username"></div>
        <a class="nav-toggle">
            <div class="hamburger">
                <div class="bars"></div>
            </div>
        </a>
    </header>

    <div id="wrapper">
        <div class="section hero">
            <div class="text-slider-wrapper">
                <div class="text-slider">
                    <div class="text-slide">
                        <h1>
                            Life is<br /> evolving
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            find out <br /> your potential.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            stand at <br /> times of <br /> controversy.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            stretch to<br /> challenges.
                        </h1>
                    </div>
                    <div class="text-slide">
                        <h1>
                            discover <br /> who you are.
                        </h1>
                    </div>
                </div>
            </div>

            <div class="slider-control">
                <div class="prev">
                    <button type="button" class="btn--slide">
                        <ion-icon name="arrow-back"></ion-icon>
                    </button>
                </div>
                <div class="next">
                    <button type="button" class="btn--slide">
                        <ion-icon name="arrow-forward"></ion-icon>
                    </button>
                </div>
            </div>

            <div class="blocks">
                <div class="block-1"></div>
                <div class="block-2"></div>
                <div class="block-3"></div>
            </div>

            <div class="overlay"></div>

            <div class="image-slider">
                <div class="image-slide" id="one" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/img/hero4.jpg'?>) no-repeat 50% 50%; background-size: cover;"></div>
                <div class="image-slide" id="two" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/img/hero5.jpg'?>) no-repeat 50% 50%; background-size: cover;"></div>
                <div class="image-slide" id="three" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/img/hero6.jpg'?>) no-repeat 50% 50%; background-size: cover;"></div>
                <div class="image-slide" id="four" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/img/hero7.jpg'?>) no-repeat 50% 50%; background-size: cover;"></div>
                <div class="image-slide" id="five" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/img/hero8.jpg'?>) no-repeat 50% 50%; background-size: cover;"></div>
            </div>
        </div>
        <div class="section about">
            <div class="container--fluid about__wrapper" style="overflow: hidden">
                <div class="row about__body">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 about__image"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 about__content">
                        <div class="about__heading title--about">
                            <h5 class="about__heading--secondary">a little about us</h5>
                            <h1 class="about__heading--primary">Who We Are</h1>
                        </div>
                        <div class="about__para about--animate">
                            <p>
                                The Inspiration Youth Organization is a united association of active Youths
                                in Mandalay Technological University (MTU-COE).

                                Starting in 2018 as a university club, IYO was created to bring much needed youth development resources empowering young people to overcome personal, educational and professional development challenges.
                                In that time IYO has developed into a significant community of users who we like to call IYOers!


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section check">
            <div class="container--fluid check__wrapper" style="overflow:hidden;">
                <div class="row check__body">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 check__content">
                        <div class="check__heading t-center title--check">
                            <h5 class="check__heading--secondary">check out</h5>
                            <h1 class="check__heading--primary">Our Events</h1>
                        </div>
                        <div class="check__para check--animate">
                            <p class="m-b-sm ">
                                Activate your soft skills by going on an experience with events organised by IYO.
                                Our events provide you with the opportunities to live a shared responsibility
                                for the world and equip you with the tools to shape it for a better future.
                                We, IYO also lead to hold English Language contests to improve English skills intended to provide better international
                                communication of youths in our university.
                            </p>

                        </div>
                    </div>
                    <div
                        class="col-xs-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 check__image"
                    ></div>
                </div>
            </div>
        </div>
        <div class="section footer">
            <div class="register">
                <div class="container--fluid">
                    <div class="row">
                        <div class=" register-col  t-center d-flex flex-c j-c-c a-i-c">
                            <h3 class="register--title">Keep In Touch With Us</h3>

                            <div class="register--content">
                                <p class="register--para">
                                    To keep up with the latest trending events, pls register and become a member.
                                </p>
                                <a href="<?php echo \app\config\Configs::$urlroot."User/Signup"?>" class="check__btn register--btn "
                                >Register Here
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer--container t-center">
                <div class="container--fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 footer-col">
                            <h3 class="footer--logo">
                                <span>I</span>nspirational <br />
                                <span>Y</span>outh <br />
                                <span>O</span>rganization
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 footer-col address">
                            <p>Mandalay Technological University</p>
                            <p>Patheingyi Township</p>
                            <p>Mandalay</p>
                            <p>Myanmar</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 footer-col contact">
                            <a href="mailto:contactus@mtu.edu.mm" class="contact-link">contactus@mtu.edu.mm</a
                            >
                            <div class="social">
                                <a href="#" class="social-icon facebook"
                                ><i class="fab fa-facebook-f fa-2x"></i>
                                </a>
                                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in fa-2x"></i>
                                </a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-2x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section dev fp-auto-height">
            <div class="dev__info t-center"> Copyright &copy; 2019 <a class="dev__info--link">Mandalay Technological University</a> developed by <span class="dev__info--link">CEIT(MTU)</span>. &nbsp;Made with &nbsp;<i class="fas fa-heart"></i>.</div>
        </div>
    </div>
</main>
<div class="cursor "></div>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/fullpage.min.js"?>"></script>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/home1.js"?>"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js "></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js "></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
<script>
    var sickPrimary = {
        autoplay: true,
        autoplaySpeed: 2400,
        slidesToShow: 2,
        slidesToScroll: 1,
        speed: 1800,
        cssEase: "cubic-bezier(.84, 0, .08, .99)",
        asNavFor: ".text-slider",
        centerMode: true,
        prevArrow: $(".prev"),
        nextArrow: $(".next")
    };

    var sickSecondary = {
        autoplay: true,
        autoplaySpeed: 2400,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1800,
        cssEase: "cubic-bezier(.84, 0, .08, .99)",
        asNavFor: ".image-slider",
        prevArrow: $(".prev"),
        nextArrow: $(".next")
    };

    $(".image-slider").slick(sickPrimary);
    $(".text-slider").slick(sickSecondary);
</script>
</body>

</html>
