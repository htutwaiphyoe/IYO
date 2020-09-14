

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Poppins|Source+Serif+Pro&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/post_edit1.css"?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/notificationbox.css"?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/bootstraps/css/font-awesome-animation.css"?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/bootstraps/css/font-awesome.css"?>"/>
    <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/l-lin/font-awesome-animation/master/dist/font-awesome-animation.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="shortcut icon" type="photo/jpg" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
    <title>Event</title>
</head>

<body id="ok">

<?php if (isset($_SESSION['Login_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Login_Success");

        \app\config\Configs::deleteUserSession("Login_Success");
        ?></div>
<?php endif;?>

<?php if (isset($_SESSION['Register_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Register_Success");

        \app\config\Configs::deleteUserSession("Register_Success");
        ?></div>
<?php endif;?>
<?php if (isset($_SESSION['Create_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Create_Success");

        \app\config\Configs::deleteUserSession("Create_Success");
        ?></div>
<?php endif;?>
<?php if (isset($_SESSION['Delete_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Delete_Success");

        \app\config\Configs::deleteUserSession("Delete_Success");
        ?></div>
<?php endif;?>

<?php if (isset($_SESSION['Edit_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Edit_Success");

        \app\config\Configs::deleteUserSession("Edit_Success");
        ?></div>
<?php endif;?>

<?php if (isset($_SESSION['Noti_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Noti_Success");

        \app\config\Configs::deleteUserSession("Noti_Success");
        ?></div>
<?php endif;?>

<?php if (isset($_SESSION['Noti_Exit'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Noti_Exit");

        \app\config\Configs::deleteUserSession("Noti_Exit");
        ?></div>
<?php endif;?>
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
        <div class="logo">IYO


        </div>
        <div class="username"></div>
        <a class="nav-toggle">
            <div class="hamburger">
                <div class="bars"></div>
            </div>
        </a>
    </header>

    <div id="post--wrapper">
        <h3 class="heading">Our Events</h3>

            <div class="posts">

            </div>


         <?php foreach ($data as $event):?>
                <div class="posts">
                    <?php if (\app\config\Configs::getUserSession("Current_Admin")) :?>
                        <div class="post--control">
                            <a href="<?php echo \app\config\Configs::$urlroot."Event/Edit/".$event->eventid;?>" class="icon"><img src="<?php echo \app\config\Configs::$urlroot."assets/img/edit.svg"?>" alt=""></a>
                            <a href="<?php echo \app\config\Configs::$urlroot."Event/Delete/".$event->eventid;?>" class="icon"><img src="<?php echo \app\config\Configs::$urlroot."assets/img/delete.svg"?>" alt=""></a>
                        </div>
                    <?php else: ?>
                        <div class="post--control" style="justify-content: center">
                            <a class="button">
                                <span class="fa fa-bell faa-ring animated-hover"></span>
                            </a>


                        </div>
                    <?php endif;?>

                    <a href="<?php echo app\config\Configs::$urlroot."Event/Details/".$event->eventid?>" class="post__link t-left">
                        <div class="post--body container--fluid">

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12  post--img" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/upload/'.$event->image;?>);  background-size: cover; background-position: center; background-repeat: no-repeat; ">

                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12  post--content">
                                    <h5 class="heading--tertiary post__heading m-b--sm ">
                                        <?php echo $event->title;?>
                                    </h5>
                                    <p class="post__desp  m-b--sm">
                                        <?php echo $event->description;?>
                                    </p>
                                    <h5 class="heading--fourth post__speaker m-b--sm">
                                        Speaker : <?php echo $event->speaker;?>
                                    </h5>

                                    <h5 class="heading--fourth post__speaker m-b--sm">
                                        Date & Time : <?php echo $event->eventtime;?>
                                    </h5>

                                </div>

                            </div>
                        </div>
                    </a>

                </div>
            <?php endforeach;?>

    </div>


</main>

<?php foreach ($data as $event):?>
<?php if ($event->eventstate == 1):?>
<div class="bg-model">
    <div class="model-content">
        <div class="close">+</div>
        <img src="<?php echo \app\config\Configs::$urlroot.'assets/img/noti2.png'?>" alt="" class="noti-img">
        <p>Are you really interested in this event? let us remind you!</p>
        <form action="<?php echo \app\config\Configs::$urlroot."Event/Notification/".$event->eventid?>" method="post">
            <input type="hidden" name="hidden" value="<?php echo \app\config\Configs::getUserSession("Current_User");?>">
            <button type="submit">Get Notification</button>
        </form>
    </div>
</div>
<?php else: ?>
        <div class="bg-model">
            <div class="model-content">
                <div class="close">+</div>
                <img src="<?php echo \app\config\Configs::$urlroot.'assets/img/noti2.png'?>" alt="" class="noti-img">
                <p>Sorry, this event was over.</p>
                <p>Enjoy another events. Thank you!</p>




            </div>
        </div>
<?php endif;?>
<?php endforeach;?>


<div class="cursor"></div>




<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/post__edit.js"?>"></script>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/notifications.js"?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    var start = 0;
    var limit = 3;
    var reachedMax = false;

    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height())
            getData();
    });

    $(document).ready(function () {
        getData();
    });

    function getData() {
        if (reachedMax)
            return;

        $.ajax({
            url: 'http://localhost/IYO/Event',
            method: 'POST',
            dataType: 'text',
            data: {
                getData: 1,
                start: start,
                limit: limit
            },
            success: function(response) {
                if (response == "reachedMax")
                    reachedMax = true;
                else {
                    start += limit;
                    $("#post--wrapper").append(response);
                }
            }
        });
    }
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




</body>

</html>