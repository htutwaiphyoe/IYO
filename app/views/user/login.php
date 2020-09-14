<!--<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>َThe Inspiration of Youth Organization</title>
    <link rel="shortcut icon" type="photo/jpg" href="<?php /*echo \app\config\Configs::$urlroot."assets/img/iyo.jpg"*/?>"/>
    <link rel="stylesheet" href="<?php /*echo \app\config\Configs::$urlroot."assets/css/styleforlogin.css"*/?>" />
</head>

<body>
<form class="box" action="<?php /*echo \app\config\Configs::$urlroot."User/Login";*/?>" method="post">
    <div class="avatar">
        <img src="<?php /*echo \app\config\Configs::$urlroot."assets/img/undraw_male_avatar_323b.svg" */?>" alt="Avatar" class="avatar-img" />
    </div>

    <h5 class="form-title">SIGN IN</h5>
    <input required type="text" name="email" placeholder="Email" autocomplete="email"
        <?php /*echo !empty($data['email_error']) ? "is-invalid" : '';*/?>/>
    <?php /*echo !empty($data["email_error"]) ? $data["email_error"] : '';*/?>

    <input required type="password" name="password" placeholder="Password"
        <?php /*echo !empty($data['password_error']) ? "is-invalid" : ''; */?>/>
    <span class="text-danger"><?php /*echo !empty($data['password_error']) ? $data['password_error'] : '';*/?></span>

    <input type="submit" name="submit" value="SIGN IN" />

    <h5 class="login-title">
        Create an Account?
    </h5>
    <a href="<?php /*echo \app\config\Configs::$urlroot."User/SignUp"*/?>" class="login-link"><u>Sign Up </u></a>
</form>

<button id="toggle">dark mode</button>
<script src="<?php /*echo \app\config\Configs::$urlroot."assets/js/app.js"*/?>"></script>
</body>

</html>
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/favicon.ico"?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo \app\config\Configs::$urlroot."assets/img/favicon.ico"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/login3.css"?>" />


    <title>َLogin</title>
    <link rel="shortcut icon" type="photo/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>
</head>

<body>
<?php if (isset($_SESSION['Reset_Success'])):?>
    <div class="noti" style="z-index: 100"><?php echo \app\config\Configs::getFlashMessage("Reset_Success");

        \app\config\Configs::deleteUserSession("Reset_Success");
        ?></div>
<?php endif;?>
<div class="limiter">
    <div class="container-login">
        <div class="wrap-login">
            <div class="login-pic ">
                <img src="<?php echo \app\config\Configs::$urlroot."assets/img/img-01.png"?>" alt="IMG" />
            </div>

            <form class="login-form validate-form" action="<?php echo \app\config\Configs::$urlroot."User/Login";?>" method="post">
                    <span class="login-form-title">
              Member Login
                     </span>

                <div class="wrap-input validate-input">
                    <input required class="input" type="text" name="email" placeholder="Email"
                        <?php echo !empty($data['email_error']) ? "is-invalid" : '';?>/>
                    <span class="focus-input"></span>
                    <span class="symbol-input">
                <i class="fa fa-envelope"></i>
              </span>

                </div>
                <?php if (!empty($data['email_error'])) :?>
                    <span class="text-danger warning-info"><?php echo $data['email_error'];?></span>
                <?php else:?>
                    <span class="text-danger"><?php echo '';?></span>
                <?php endif; ?>
                <div class="wrap-input validate-input">
                    <div class="show-pwd">
                        <i class="fas fa-eye eye-icon"></i>
                    </div>
                    <input required class="input" type="password" name="password" placeholder="Password" id="pwd"
                        <?php echo !empty($data['password_error']) ? "is-invalid" : ''; ?>/>
                    <span class="focus-input"></span>
                    <span class="symbol-input">
                <i class="fa fa-lock"></i>

              </span>
                    <?php if (!empty($data['password_error'])) :?>
                        <span class="text-danger warning-info"><?php echo $data['password_error'];?></span>
                    <?php else:?>
                        <span class="text-danger"><?php echo '';?></span>
                    <?php endif; ?>
                </div>

                <div class="container-login-form-btn">
                    <button class="login-form-btn" type="submit" name="submit">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
                        <span class="txt1">
                Forgot
              </span>
                    <a class="txt2" href="<?php echo \app\config\Configs::$urlroot."User/Recovery"?>">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="<?php echo \app\config\Configs::$urlroot."User/SignUp"?>">
                        Create your Account

                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/reset1.js"?>"></script>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/flash.js"?>"></script>
</body>

</html>
`