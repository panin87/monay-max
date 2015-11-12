<div id="ast_related_wrap">
<h3 class="related_h3"><?php _e('Related Posts' , 'asteria'); ?></h3>
<div id="ast_related">


<?php
$backup = $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'showposts'=>3, // Number of related posts that will be shown.
		'ignore_sticky_posts'=>1
	);
$my_query = new wp_query($args);	
$title_query = new wp_query($args);
	if( $my_query->have_posts() ) {
		echo '<ul class="rel_eq">';
		while ($title_query->have_posts()) {
			$title_query->the_post();

		?>
<li>
<a href="#rel_<?php the_id(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

</li>

		<?php
		}
	echo '</ul>';
	}


$post = $backup;
wp_reset_query(); 
	}


?>



<?php
$backup = $post;
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

	$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'showposts'=>3, // Number of related posts that will be shown.
		'ignore_sticky_posts'=>1
	);

$my_query = new wp_query($args);
	if( $my_query->have_posts() ) {
		echo '<div class="panel-container rel_eq">';
		while ($my_query->have_posts()) {
			$my_query->the_post();

		?>
<div id="rel_<?php the_id(); ?>" class="rel_tab">

            	<?php if ( has_post_thumbnail() ) : ?>
                <div class="related_img">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?>
                </a>
                </div>
                <?php elseif($photo = asteria_get_images('numberposts=1', true)): ?>
                
                <div class="related_img">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo wp_get_attachment_image($photo[0]->ID ,'medium'); ?></a>
                </div>
                <?php else : ?>
            	<div class="related_img">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blank_img.png" alt="<?php the_title_attribute(); ?>" class="thumbnail"/></a></div>
            	<?php endif; ?>




<div class="rel_content">
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<?php asteria_excerpt('asteria_excerptlength_teaser', 'asteria_excerptmore'); ?> 
<a href="<?php the_permalink() ?>" class="rel_more" title="<?php _e('Read More' , 'asteria'); ?>"><i class="fa-arrow-right"></i></a>
</div>

</div>

		<?php
		}
	echo '</div>';
	}
}
$post = $backup;
wp_reset_query(); 


?>
</div>
</div>