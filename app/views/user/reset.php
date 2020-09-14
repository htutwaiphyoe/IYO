<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/favicon.ico"?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo \app\config\Configs::$urlroot."assets/img/favicon.ico"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/reset2.css"?>" />
    <title>َReset Password</title>
    <link rel="shortcut icon" type="photo/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>

</head>

<body>
<div class="limiter">
    <div class="container-login">
        <div class="wrap-login" style="display: flex;justify-content: center;align-items: center;">
            <form class="login-form validate-form" action="<?php echo \app\config\Configs::$urlroot."User/Reset";?>" method="post">
                <span class="login-form-title">
              Confirm Your Password
            </span>

            <div class="wrap-input validate-input">
                <input required class="input" type="text" name="code" placeholder="Confirmation Code"
                    <?php echo !empty($data['reset_code_error']) ? "is-invalid" : '';?>/>
                <span class="focus-input"></span>
                <span class="symbol-input">
                        <i class="fa fa-lock"></i>
              </span>
            </div>
            <?php if (!empty($data['reset_code_error'])) :?>
                <span class="text-danger warning-info"><?php echo $data['reset_code_error'];?></span>
            <?php else:?>
                <span class="text-danger"><?php echo '';?></span>
            <?php endif; ?>
            <div class="wrap-input validate-input">
                <input required class="input" type="password" name="password" placeholder="Enter new password"
                    <?php echo !empty($data['password_error']) ? "is-invalid" : '';?>/>
                <span class="focus-input"></span>
                <span class="symbol-input">
                        <i class="fa fa-lock"></i>
              </span>
            </div>
            <?php if (!empty($data['password_error'])) :?>
                <span class="text-danger warning-info"><?php echo $data['password_error'];?></span>
            <?php else:?>
                <span class="text-danger"><?php echo '';?></span>
            <?php endif; ?>
            <div class="wrap-input validate-input">
                <input required class="input" type="password" name="confirmpassword" placeholder="Confirm new password"
                    <?php echo !empty($data['confirmpassword_error']) ? "is-invalid" : '';?>/>
                <span class="focus-input"></span>
                <span class="symbol-input">
                        <i class="fa fa-lock"></i>
              </span>
            </div>
            <?php if (!empty($data['confirmpassword_error'])) :?>
                <span class="text-danger warning-info"><?php echo $data['confirmpassword_error'];?></span>
            <?php else:?>
                <span class="text-danger"><?php echo '';?></span>
            <?php endif; ?>


            <div class="container-login-form-btn">
                <button class="login-form-btn" type="submit" name="submit">
                    Confirm
                </button>
            </div>



            <div class="text-center p-t-50">
                <a class="txt2" href="#">


                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
    </div>
</div>
</div>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/reset.js"?>"></script>
</body>

</html>