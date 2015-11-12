<?php global $asteria;?>
<div class="header2">
<div class="top_head">
    <div class="center">
	<!--MENU START--> 
        <!--MOBILE MENU START--><a id="simple-menu" href="#sidr"><i class="fa-align-justify"></i> <?php _e('Menu' , 'asteria'); ?></a><!--MOBILE MENU END--> 
    <div id="topmenu"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?></div>
    <!--MENU END-->

    </div>
</div>

    <div class="center">
    <!--LOGO START-->  
    <div class="logo">
    <?php $logo = $asteria['logo_image_id']; if(!empty($logo['url'])){ ?>
    	<?php $logo = $asteria['logo_image_id']; ?>
    	<a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo['url']; ?>" /></a>
    <?php }else{ ?>
			<?php if ( is_home() ) { ?>   
            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
            <?php }else{ ?>
            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
            <?php } ?>
    
    <?php } ?>
    </div>
    <!--LOGO END-->
    
		<!--SOCIAL ICONS START-->
        <div class="head_soc">
        <?php if(!empty($asteria['facebook_field_id'])){ ?><a target="_blank" class="ast_fb" href="<?php echo $asteria['facebook_field_id']; ?>"><i class="fa-facebook"></i></a><?php } ?>
        <?php if(!empty($asteria['twitter_field_id'])){ ?><a target="_blank" class="ast_twt" href="<?php echo $asteria['twitter_field_id']; ?>"><i class="fa-twitter"></i></a><?php } ?>
        <?php if(!empty($asteria['gplus_field_id'])){ ?><a target="_blank" class="ast_gplus" href="<?php echo $asteria['gplus_field_id']; ?>"><i class="fa-google-plus"></i></a> <?php } ?>
        <?php if(!empty($asteria['youtube_field_id'])){ ?><a target="_blank" class="ast_ytb" href="<?php echo $asteria['youtube_field_id']; ?>"><i class="fa-youtube-play"></i></a><?php } ?>
        <?php if(!empty($asteria['flickr_field_id'])){ ?><a target="_blank" class="ast_flckr" href="<?php echo $asteria['flickr_field_id']; ?>"><i class="fa-flickr"></i></a><?php } ?>
        <?php if(!empty($asteria['linkedin_field_id'])){ ?><a target="_blank" class="ast_lnkdin" href="<?php echo $asteria['linkedin_field_id']; ?>"><i class="fa-linkedin"></i></a><?php } ?>
        <?php if(!empty($asteria['pinterest_field_id'])){ ?><a target="_blank" class="ast_pin" href="<?php echo $asteria['pinterest_field_id']; ?>"><i class="fa-pinterest"></i></a><?php } ?>
        <?php if(!empty($asteria['tumblr_field_id'])){ ?><a target="_blank" class="ast_tmblr" href="<?php echo $asteria['tumblr_field_id']; ?>"><i class="fa-tumblr"></i></a><?php } ?>
        <?php if(!empty($asteria['instagram_field_id'])){ ?><a target="_blank" class="ast_insta" href="<?php echo $asteria['instagram_field_id']; ?>"><i class="fa-instagram"></i></a><?php } ?>  
        <?php if(!empty($asteria['rss_field_id'])){ ?><a target="_blank" class="ast_rss" href="<?php echo $asteria['rss_field_id']; ?>"><i class="fa-rss"></i></a><?php } ?>   
        </div>
        <!--SOCIAL ICONS END-->


    </div>
</div>