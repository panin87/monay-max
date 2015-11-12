<?php global $asteria;?>
<?php $frontwidget = $asteria['home_sort_id']; if(!empty($frontwidget['frontpage-widgets-area'])){ ?>
<!--Homepage Widgets-->
	<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_frontwdgt'])) ) { ?>
    <?php }else{ ?>
    <div class="home_sidebar">
        <div id="home_widgets">
            <div class="center">
                <div class="widgets"><ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(__('Home Widgets', 'asteria')) ) : ?><?php endif; ?></ul></div>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>