<?php global $asteria;?>
<div class="lay6">
<div class="center">

<?php if ( is_home() ) { ?>
    <div class="lay1_title">
	<?php echo $asteria['posts_title_id']; ?>
    </div>
<?php }?>

<div class="lay6_wrap">

                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                
                <?php global $wp_query; $postid = $wp_query->post->ID; $astvidthumb = get_post_meta( $postid, 'ast_videolink', true ); ?>
                <?php if ( ! empty ( $astvidthumb ) ) { ?>
                 <div class="vidwrap">
				<!--VIDEO THUMBNAIL--> 
                <?php $astvidthumb =str_replace('https://www.youtube.com/watch?v=', '//www.youtube.com/embed/', $astvidthumb);?>                    
               <div class="ast_vid"><div class="responsive-container"><iframe src="<?php echo $astvidthumb; ?>?rel=0&amp;autohide=1&amp;showinfo=0"></iframe></div></div>
                    
				<h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 				</div>              
               <?php } else { ?>               
 
            
                <div class="post_image">
                    
                     <!--CALL TO POST IMAGE-->
                    <?php if ( has_post_thumbnail() ) : ?>
                    
                    <div class="imgwrap">  
                                        
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a>
                    <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </div>
					<?php elseif($photo = asteria_get_images('numberposts=1', true)): ?>
    
    
                    <div class="imgwrap"> 
                                         
                    <a href="<?php the_permalink();?>"><?php echo wp_get_attachment_image($photo[0]->ID ,'medium'); ?></a>
                    <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <?php else : ?>
                    
                    <div class="imgwrap">
                    
                    <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blank_img.png" alt="<?php the_title_attribute(); ?>" class="thn_thumbnail"/></a>
                    <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </div>   
                             
                    <?php endif; ?>
                    
                </div>
                
				<?php } ?>
                
                


                
                        </div>
            <?php endwhile ?> 

            <?php endif ?>
</div>
<!--PAGINATION START-->
<div class="ast_pagenav">
	<?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'show_all'     => true,
                'prev_next'    => false
            
            ) );
    ?>
</div>
<!--PAGINATION END-->

<?php wp_reset_query(); ?>
            <div class="hidden_nav"><?php paginate_links(); ?></div>

    </div>
    </div>