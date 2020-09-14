<?php if ($eventstate == 1):?>
    <div class="bg-model">
        <div class="model-content">
            <div class="close">+</div>
            <img src="<?php echo \app\config\Configs::$urlroot.'assets/img/noti2.png'?>" alt="" class="noti-img">
            <p>Are you really interested in this event? let us remind you!</p>
            <form action="<?php echo \app\config\Configs::$urlroot."Event/Notification/".$eventid; ?>" method="post">
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

