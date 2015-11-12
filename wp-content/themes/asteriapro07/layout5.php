<?php global $asteria;?>
<div id="content" class="lay5">
<div class="center">
<div class="single_wrap<?php if ( !is_active_sidebar( 'sidebar' ) ) { ?> no_sidebar<?php } ?>">
<div class="lay5_wrap">
                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
<div class="single_post">
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                
<?php if ( is_user_logged_in() || is_admin() ) { ?><div class="edit_wrap"><a href="<?php echo get_edit_post_link( ); ?>"><i title="<?php _e('Edit This','asteria'); ?>" class="fa-edit"></i></a></div><?php } ?>
        
                <div class="single_post_content">
                <h2 class="postitle"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <div class="single_metainfo">
                    <i class="fa-calendar"></i><a class="comm_date"><?php the_time( get_option('date_format') ); ?></a>
                    <i class="fa-user"></i><?php global $authordata;
		$post_author = "<a class='auth_meta' href=\"".get_author_posts_url( $authordata->ID, $authordata->user_nicename )."\">".get_the_author()."</a>\r\n";
		echo $post_author; ?>
                    <i class="fa-comments"></i><?php if (!empty($post->post_password)) { ?>
                <?php } else { ?><div class="meta_comm"><?php comments_popup_link( __('0 Comment', 'asteria'), __('1 Comment', 'asteria'), __('% Comments', 'asteria'), '', __('Off' , 'asteria')); ?></div><?php } ?>
                
                  <i class="fa-th-list"></i><div class="catag_list"><?php the_category(', '); ?></div>
               	</div>                
                    <div class="thn_post_wrap">
					<?php the_content(); ?> </div> 
                    <div style="clear:both"></div>
                    <div class="thn_post_wrap"><?php wp_link_pages('<p class="pages"><strong>'.__('Pages:').'</strong> ', '</p>', 'number'); ?></div>
                    
                    
                </div>
                
                
                
                        </div>
                </div>
            <?php endwhile ?> 

			<div class="comments_template"><?php comments_template('',true); ?></div>
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

    </div>
   
    <!--PAGE END-->


<?php get_sidebar();?>
</div>
</div>