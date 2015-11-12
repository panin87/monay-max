<?php global $asteria;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=UTF-8" />	
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php get_template_part('style');?>
<?php wp_head(); ?>
</head>
<body class="ast_maintanace">
<div class="center">
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