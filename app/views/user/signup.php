<!--<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>َThe Inspiration of Youth Organization</title>
    <link rel="shortcut icon" type="photo/jpg" href="<?php /*echo \app\config\Configs::$urlroot."assets/img/iyo.jpg"*/?>"/>
    <link rel="stylesheet" href="<?php /*echo \app\config\Configs::$urlroot."assets/css/style.css"*/?>" />
</head>

<body>
<form class="box" action="<?php /*echo \app\config\Configs::$urlroot."User/SignUp";*/?>" method="post">
    <div class="avatar">
        <img src="<?php /*echo \app\config\Configs::$urlroot."assets/img/undraw_male_avatar_323b.svg" */?>" alt="Avatar" class="avatar-img" />
    </div>

    <h5 class="form-title">Sign Up</h5>
    <input required type="text" name="name" placeholder="Username" <?php /*echo !empty($data['name_error']) ? "is-invalid" : ''; */?>/>
    <span><i><?php /*echo !empty($data['name_error']) ? $data['name_error'] : ''; */?></i></span>
    <input required type="text" name="email" placeholder="Email"  <?php /*echo !empty($data['email_error']) ? "is-invalid" : '';*/?>/>
    <?php /*echo !empty($data['email_error']) ? $data['email_error'] : '';*/?>
    <input required type="password" name="password" placeholder="Create Password" <?php /*echo !empty($data['password_error']) ? "is-invalid" : ''; */?>/>
    <span class="text-danger"><?php /*echo !empty($data['password_error']) ? $data['password_error'] : '';*/?></span>
    <input required type="password" name="confirmpassword" placeholder="Confirm Password"  <?php /*echo !empty($data['confirmpassword_error']) ? "is-invalid" : ''; */?>/>
    <span class="text-danger"><?php /*echo !empty($data['confirmpassword_error']) ? $data['confirmpassword_error'] : '';*/?></span>
    <input type="submit" name="submit" value="Create Account" />

    <h5 class="login-title">
        Already Have an account?
    </h5>
    <a href="<?php /*echo \app\config\Configs::$urlroot."User/Login"*/?>" class="login-link"><u>Log in </u></a>
</form>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/favicon.ico"?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo \app\config\Configs::$urlroot."assets/img/favicon.ico"?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo \app\config\Configs::$urlroot."assets/css/pages/login3.css"?>" />

    <title>َSign Up</title>
    <link rel="shortcut icon" type="photo/png" href="<?php echo \app\config\Configs::$urlroot."assets/img/iyologo.png"?>"/>

</head>

<body>
<div class="limiter">
    <div class="container-login">
        <div class="wrap-login">
            <div class="login-pic ">
                <img src="<?php echo \app\config\Configs::$urlroot."assets/img/img-01.png"?>" alt="IMG" />
            </div>

            <form class="login-form validate-form" action="<?php echo \app\config\Configs::$urlroot."User/SignUp";?>" method="post">
                    <span class="login-form-title">
              Sign Up Here
            </span>

                <div class="wrap-input validate-input">
                    <input required class="input" type="text" name="name" placeholder="Username"
                        <?php echo !empty($data['name_error']) ? "is-invalid" : ''; ?>/>
                    <span class="focus-input"></span>
                    <span class="symbol-input">
                <i class="fas fa-user"></i>
              </span>

                </div>
                <?php if (!empty($data['name_error'])) :?>
                    <span class="text-danger warning-info"><?php echo $data['name_error'];?></span>
                <?php else:?>
                    <span class="text-danger"><?php echo '';?></span>
                <?php endif; ?>

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
                    <input required class="input" type="password" name="password" placeholder="Create Password" id="pwd"
                        <?php echo !empty($data['password_error']) ? "is-invalid" : ''; ?>/>
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
                    <div class="show-pwd">
                        <i class="fas fa-eye eye-icon"></i>
                    </div>
                    <input required class="input" type="password" name="confirmpassword" placeholder="Confirm Password" id="pwd"
                        <?php echo !empty($data['confirmpassword_error']) ? "is-invalid" : ''; ?>/>
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
                    <button class="login-form-btn">
                        Sign Up
                    </button>
                </div>

              <!--  <div class="text-center p-t-12">
                        <span class="txt1">
                Forgot
              </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>-->
                <!--<span class="text-danger">Username incorrect</span>-->
                <div class="text-center p-t-136">
                    <a class="txt2" href="<?php echo \app\config\Configs::$urlroot."User/Login"?>">
                        Already Have an account&nbsp;?&nbsp;Login

                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo \app\config\Configs::$urlroot."assets/js/pages/reset1.js"?>"></script>
</body>

</html>
`













<!--<form action="<?php /*echo \app\config\Configs::$urlroot."User/SignUp";*/?>" method="post">
    <div class="form-group mt-5">
        <label for="exampleInputName">Username</label>
        <input type="text" class="form-control" id="exampleInputName"  placeholder="Enter username" name="name"
            <?php /*echo !empty($data['name_error']) ? "is-invalid" : ''; */?> >
        <span class="text-danger"><?php /*echo !empty($data['name_error']) ? $data['name_error'] : ''; */?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email"
            <?php /*echo !empty($data['email_error']) ? "is-invalid" : ''; */?>>
        <span class="text-danger"><?php /*echo !empty($data['email_error']) ? $data['email_error'] : ''; */?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"
            <?php /*echo !empty($data['password_error']) ? "is-invalid" : ''; */?>>
        <span class="text-danger"><?php /*echo !empty($data['password_error']) ? $data['password_error'] : ''; */?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword2">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="confirmpassword"
            <?php /*echo !empty($data['confirmpassword_error']) ? "is-invalid" : ''; */?>>
        <span class="text-danger"><?php /*echo !empty($data['confirmpassword_error']) ? $data['confirmpassword_error'] : ''; */?></span>
    </div>
    <div class="row no-gutters">
        <a href="<?php /*echo URLROOT.'User/Login' */?>">Already have an account? Login in</a>
        <button type="submit" class="btn btn-primary ml-auto">Submit</button>
    </div>

</form>-->