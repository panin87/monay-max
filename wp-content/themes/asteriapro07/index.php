<?php get_header(); ?>
<?php global $asteria;?>
<?php if ( is_home() ) { ?>
<div class="fixed_site">
	<div class="fixed_wrap fixindex">
<!--Slider Area-->
<div id="slidera">
<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_slide'])) ) { ?>
	<?php }else{ ?>
    <?php $slidertype = $asteria['slider_type_id']; ?>
    <?php get_template_part(''.$slidertype.''); ?>
<?php } ?>
</div>

<?php
$home_blocks = $asteria['home_sort_id'];

if ($home_blocks):

foreach ($home_blocks as $key=>$value) {

    switch($key) {
	//Blocks
    case 'blocks':
    ?>
	<div class="home_blocks ast_blocks"><?php get_template_part('frontpage/content','blocks'); ?></div>
	
    <?php
    //Welcome Text
	break;
    case 'welcome-text':
    ?>
    <div class="home_blocks welcmblock"><?php get_template_part('frontpage/content','welcome-text'); ?></div>
    
    <?php
	//Tabs
    break;
    case 'tabs':
    ?>
    <div class="home_blocks"><?php get_template_part('frontpage/content','tabs'); ?></div>
    
    <?php
	//Front Page Posts
    break;
    case 'posts':
    ?>
<div class="home_blocks postsblck"><?php $homeposts = $asteria['home_sort_id']; if(!empty($homeposts['posts'])){ ?>
        <!--Latest Posts-->
            <?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_frontposts'])) ) { ?>
            <?php }else{ ?>
            <?php get_template_part('layout'.$asteria['front_layout_id'].''); ?>
            <?php } ?>
        <!--Latest Posts END-->
        <?php } ?></div>
    <?php
	//Location Map
    break;
    case 'location-map':
    ?>
    <div class="home_blocks mapblck"><?php get_template_part('frontpage/content','location-map'); ?></div>

    <?php
	//Call to Action
    break;
    case 'call-to-action':
    ?>
    <div class="home_blocks actionblck"><?php get_template_part('frontpage/content','call-to-action'); ?></div>

    <?php
	//Frontpage Widget Area
    break;
    case 'frontpage-widgets-area':
    ?>
    <div class="home_blocks fntwdgtblck"><?php get_template_part('frontpage/content','frontpage-widgets-area'); ?></div>  
    <?php
    break;

    }

}

endif;
?>
<?php }else{ ?>
<div class="fixed_site">
	<div class="fixed_wrap fixindex">
<?php get_template_part('layout1'); ?> 
	</div>
</div>
<?php } ?>

</div>
</div>
<?php get_footer(); ?>