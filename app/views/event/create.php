<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Poppins|Source+Serif+Pro&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/admin.css"?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/flash.css"?>"/>

    <link rel="shortcut icon" type="photo/jpg" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
    <title>New Post</title>
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

    <div id="wrapper">
        <div class="add_post">
            <h3 class=" heading_post">Create Event</h3>
            <form action="<?php echo \app\config\Configs::$urlroot."Event/Create"?>" method="post" enctype="multipart/form-data">
                <div class="formgroup">
                    <h5 class="heading--tertiary formgroup__title">Title</h5>
                    <label for="title">
                        <input type="text" name="title" class="input--text"  required>
                    </label>
                </div>

                <div class="formgroup">
                    <h5 class="heading--tertiary formgroup__title">Description</h5>
                    <label for="desp">
                            <textarea name="desp"  cols="30" rows="10" required>

                        </textarea>
                    </label>
                </div>

                <div class="formgroup">
                    <h5 class="heading--tertiary formgroup__title">Speaker</h5>
                    <label for="speaker">
                        <input type="text" name="speaker" class="input--text" required>
                    </label>
                </div>

                <div class="formgroup">
                    <h5 class="heading--tertiary formgroup__title">Date</h5>
                    <label for="date">
                        <input type="text" name="date" class="input--text"  required>

                    </label>

                </div>

                <div class="formgroup">
                    <h5 class="heading--tertiary formgroup__title">Event Detail</h5>
                    <label for="detail">
                        <textarea name="content" id="" cols="30" rows="20" required>

                        </textarea>
                    </label>
                </div>

                <div class="formgroup">
                    <label for="image">
                        <input type="file" name="file" class="choose-img" placeholder="Choose File" required>
                        <!--<button type="button"  class="custom-button">CHOOSE A FILE</button>
                        <span class="custom-text">No file chosen,yet.</span>-->
                    </label>
                </div>
                <button type="submit" name="submit" class="create_post">Create</button>
            </form>
        </div>
    </div>

    </div>
</main>
<div class="cursor"></div>


<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/admin.js"?>"></script>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/flash.js"?>"></script>


</body>

</html>