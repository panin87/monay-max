<?php global $asteria;?>

<?php $callaction = $asteria['home_sort_id']; if(!empty($callaction['call-to-action'])){ ?>
<!--Call to Action START-->
    <div class="center">
    <div class="home_action">
    <div class="home_action_left"><?php echo $asteria['call_textarea_id']; ?></div>
    <div class="home_action_right"><div class="home_action_button_wrap"><div class="home_action_button"><a <?php if (!empty ($asteria['call_url_id'])) { ?>href="<?php echo ($asteria['call_url_id']); ?>"<?php } ?>><?php echo ($asteria['call_text_id']); ?></a></div></div></div>
    </div>
    </div>
    <!--Call to Action END-->

<?php } ?>