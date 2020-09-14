<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Poppins|Source+Serif+Pro&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/team.css"?>" />

    <title>َTeam</title>
    <link rel="shortcut icon" type="photo/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
</head>

<body>
<nav>
    <?php if (\app\config\Configs::getUserSession("Current_User") == false &&
        \app\config\Configs::getUserSession("Current_Admin") == false): ?>
        <ul class="nav-list ">
            <a href="<?php echo \app\config\Configs::$urlroot?>" class="nav-link">
                <li class="nav-item nav-active">Home</li>
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





                <a class="nav-link " style="cursor: pointer;">
                    <li class="nav-item darkmode">
                        <div class="item-text" style="display: inline-block;"></div>
                        <div class="darkmode-toggler"></div>
                    </li>
                </a>
            </ul>
        <?php endif;?>
    <?php endif;?>


</nav>

<header class="header">
    <div class="logo">IYO</div>
    <div class="username"></div>
    <a class="nav-toggle">
        <div class="hamburger">
            <div class="bars"></div>
        </div>
    </a>
</header>
<main class="main">

    <div style="height: 55px;">
    </div>

    <div class="container--fluid team">
        <div class="title--wrapper t-center m-b-md">
            <h2 class="team__title">
                President & Vice-Presidents
            </h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/zayyaminhtin.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Zay Ya Min Htin</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/nawzinpwintoo.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Naw Zin Pwint Oo</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/waiphyoeaung.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Wai Phyo Aung</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center view-all">
            <a href="#" class="btn btn-effect my-3 ">See All Members</a>
        </div>
    </div>
    <div class="container--fluid team">
        <div class="title--wrapper t-center m-b-md">
            <h2 class="team__title">
                Press & Media Team
            </h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/khantsoe.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Kyi Khaing Khant Soe</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/pyaehtookhant.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Pyae Htoo Khant</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/phyoeminkhant.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Phyo Min Khant</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center view-all">
            <a href="#" class="btn btn-effect my-3 ">See All Members</a>
        </div>
    </div>
    <div class="container--fluid team">
        <div class="title--wrapper t-center m-b-md">
            <h2 class="team__title">
                Public Relations Team
            </h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Lwin Moe Htet</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Min Kaung Thant</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Aung Wai Yan</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center view-all">
            <a href="#" class="btn btn-effect my-3 ">See All Members</a>
        </div>
    </div>
    <div class="container--fluid team">
        <div class="title--wrapper t-center m-b-md">
            <h2 class="team__title">
                Design Team
            </h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Min Kaung Thant</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Min Kaung Thant</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Zay Ye Bhone</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center view-all">
            <a href="#" class="btn btn-effect my-3 ">See All Members</a>
        </div>
    </div>
    <div class="container--fluid team">
        <div class="title--wrapper t-center m-b-md">
            <h2 class="team__title">
                Technical Support Team
            </h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Kyaw Zayar Htet</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Yoon Ei Phyo Naing</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card-container">
                    <div class="image">
                        <img src="<?php echo \app\config\Configs::$urlroot."assets/img/hero7.jpg"?>" alt="Photo" class="img-fluid gallery-image" />
                        <div class="image-text">
                            <p>Ei Mon San</p>

                            <div class="social-icon t-center">
                                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-square fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon twitter"><i class="fab fa-linkedin fa-1x "></i
                                    ></a>
                                <a href="#" class="social-icon instagram"><i class="fab fa-instagram fa-1x "></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center view-all">
            <a href="#" class="btn btn-effect my-3 ">See All Members</a>
        </div>
    </div>
</main>
<div class="cursor"></div>

<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/team.js"?>"></script>


</body>

</html>