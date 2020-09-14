<div class="posts">
   <?php use app\config\Configs;

    if (\app\config\Configs::getUserSession("Current_Admin")) :?>
        <div class="post--control">
            <a href="<?php echo \app\config\Configs::$urlroot."Event/Edit/".$eventid ?>" class="icon"><img src="<?php echo \app\config\Configs::$urlroot."assets/img/edit.svg"?>" alt=""></a>
            <a href="<?php echo \app\config\Configs::$urlroot."Event/Delete/".$eventid?>" class="icon"><img src="<?php echo \app\config\Configs::$urlroot."assets/img/delete.svg"?>" alt=""></a>
        </div>
    <?php else: ?>
        <div class="post--control" style="justify-content: center">
            <a class="button">
                <span class="fa fa-bell faa-ring animated-hover"></span>
            </a>


        </div>
    <?php endif;?>

    <a href="<?php echo app\config\Configs::$urlroot."Event/Details/".$eventid; ?>" class="post__link t-left">
        <div class="post--body container--fluid">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12  post--img" style="background: url(<?php echo \app\config\Configs::$urlroot.'assets/upload/'.$image;?>);  background-size: cover; background-position: center; background-repeat: no-repeat; ">

                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12  post--content">
                    <h5 class="heading--tertiary post__heading m-b--sm ">
                        <?php echo $title;?>
                    </h5>
                    <p class="post__desp  m-b--sm">
                        <?php echo $description;?>
                    </p>
                    <h5 class="heading--fourth post__speaker m-b--sm">
                        Speaker : <?php echo $speaker;?>
                    </h5>

                    <h5 class="heading--fourth post__speaker m-b--sm">
                        Date & Time : <?php echo $eventtime;?>
                    </h5>

                </div>

            </div>
        </div>
   </a>

</div>
