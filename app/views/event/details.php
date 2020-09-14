<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Poppins|Source+Serif+Pro&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/post__detail.css"?>"/>
    <link rel="shortcut icon" type="photo/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
    <title><?php echo $data->title?></title>
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

    <div class="post--wrapper">
        <div class="post">
            <h1 class="post__heading"><?php echo $data->title;?></h1>
            <h4 class="post__desp m-b--sm">
                <?php echo $data->description;?>
            </h4>
            <h5 class="post__speaker m-b-md"><?php echo $data->speaker;?></h5>
            <div class="post__image m-b-md" style="background:url(<?php echo \app\config\Configs::$urlroot."assets/upload/".$data->image?>); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
            <p class="post__detail">
                &nbsp;<?php echo $data->content;?>
            </p>
        </div>
    </div>
</main>
<div class="cursor"></div>

<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/post__edit.js"?>"></script>

</body>

</html>