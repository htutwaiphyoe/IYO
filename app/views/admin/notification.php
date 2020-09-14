<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Poppins|Source+Serif+Pro&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/notifications_panel.css"?>" />
    <title>َNotifications</title>
    <link rel="shortcut icon" type="photo/jpg" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
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
    <ul class="nav-toggle" style="cursor: pointer">
        <div class="hamburger">
            <div class="bars"></div>
        </div>
    </ul>
</header>

<main class="main">
    <?php foreach ($data['event'] as $event):?>
    <div class=" table-wrap" >

        <div class="table-content">
            <h2 class="table_title t-center">
                <?php echo $event->title?>

            </h2>

            <div class="responsiveTbl">
                <table border="0" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th> Name</th>
                        <th>Send</th>
                        <th>Remove</th>

                    </tr>
                    </thead>
                 <?php foreach ($data['users'] as $user): ?>
                    <?php if($event->eventid == $user->eventid):?>
                    <tbody>
                    <tr>
                        <td class="table_no">
                            <?php echo $user->notiid?>
                        </td>
                        <td class="table_name">
                            <?php echo $user->email?>
                        </td>
                        <form action="<?php echo \app\config\Configs::$urlroot."Admin/Notification"?>" method="post">
                            <input type="hidden" name="email" value="<?php echo $user->email?>">
                            <input type="hidden" name="notiid" value="<?php echo $user->notiid?>">
                            <?php if($user->state == 1):?>
                        <td>
                            <button name="send" class="btn send"><span class="btn__text">Send</span><i class="fas fa-location-arrow"></i></span></button>
                        </td>
                            <?php else:?>
                            <td>
                                <button name="send" class="btn send" disabled><span class="btn__text">Sent</span><i class="fas fa-location-arrow"></i></span></button>
                            </td>
                            <?php endif;?>

                        <td>
                            <button name="remove" class="btn remove"><span class="btn__text"> Remove</span><i class="fas fa-times"></i></span></button>
                        </td>
                        </form>
                    </tr>



                    </tbody>
                    <?php endif; ?>
                  <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
    <?php endforeach;?>

</main>
<div class="cursor"></div>

<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/notification_panel.js"?>"></script>
</body>

</html>