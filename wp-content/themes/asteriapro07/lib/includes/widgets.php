<?php

/*
 *CUSTOM 125x125 AD
 */
add_action( 'widgets_init', 'thn_ad125x125_widgets' );

/*
 * Register widget.
 */
function thn_ad125x125_widgets() {
	register_widget( 'thn_Ad125x125_Widget' );
}

/*
 * Widget class.
 */
class thn_ad125x125_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_Ad125x125_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_ad125x125_widget', 'description' => __('A asteria widget that allows the display and configuration of of a single 125x125 Banner.', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 125, 'height' => 125, 'id_base' => 'thn_ad125_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_ad125x125_widget', __('Custom 125x125 Ad*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$ad = $instance['ad'];
		$link = $instance['link'];
		$ad2 = $instance['ad2'];
		$link2 = $instance['link2'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ads-125x125">';

		/* Display Ad */
		if ( $link )
			echo '<a target="_blank" href="' . $link . '"><img src="' . $ad . '" width="125" height="125"  /></a>';
			
		elseif ( $ad )
		 	echo '<img src="' . $ad . '" width="125" height="125" alt="" />';
			
				/* Display Ad */
		if ( $link2 )
			echo '<a target="_blank" href="' . $link2 . '"><img src="' . $ad2 . '" width="125" height="125"  /></a>';
			
		elseif ( $ad2 )
		 	echo '<img src="' . $ad2 . '" width="125" height="125" alt="" />';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['ad'] = $new_instance['ad'];
		$instance['link'] = $new_instance['link'];
		$instance['ad2'] = $new_instance['ad2'];
		$instance['link2'] = $new_instance['link2'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'ad' => get_template_directory_uri()."/images/defaults/banner_200.jpg",
		'link' => 'http://www.towfiqi.com',
		'ad2' => get_template_directory_uri()."/images/defaults/banner_200.jpg",
		'link2' => 'http://www.towfiqi.com',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>


		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>
		<strong><?php _e('1st Ad block','asteria');?></strong>
		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad' ); ?>"><?php _e('Ad image url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad' ); ?>" name="<?php echo $this->get_field_name( 'ad' ); ?>" value="<?php echo $instance['ad']; ?>" type="text" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Ad link url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" type="text" />
		</p>
        
        
        <strong><?php _e('2nd Ad block','asteria');?></strong>        
        		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad2' ); ?>"><?php _e('Ad image url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad2' ); ?>" name="<?php echo $this->get_field_name( 'ad2' ); ?>" value="<?php echo $instance['ad2']; ?>" type="text" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link2' ); ?>"><?php _e('Ad link url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link2' ); ?>" name="<?php echo $this->get_field_name( 'link2' ); ?>" value="<?php echo $instance['link2']; ?>" type="text" />
		</p>
		
	<?php
	}

}

/*
 *CUSTOM 250x250 AD
 */
add_action( 'widgets_init', 'thn_ad250x250_widgets' );

/*
 * Register widget.
 */
function thn_ad250x250_widgets() {
	register_widget( 'thn_Ad250x250_Widget' );
}

/*
 * Widget class.
 */
class thn_ad250x250_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_Ad250x250_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_ad250x250_widget', 'description' => __('A asteria widget that allows the display and configuration of of a single 250x250 Banner.', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 250, 'height' => 250, 'id_base' => 'thn_ad250_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_ad250x250_widget', __('Custom 250x250 Ad*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$ad = $instance['ad'];
		$link = $instance['link'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ads-250x250">';

		/* Display Ad */
		if ( $link )
			echo '<a target="_blank" href="' . $link . '"><img src="' . $ad . '" width="250" height="250"  alt="" /></a>';
			
		elseif ( $ad )
		 	echo '<img src="' . $ad . '" width="250" height="250" alt="" />';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['ad'] = $new_instance['ad'];
		$instance['link'] = $new_instance['link'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'ad' => get_template_directory_uri()."/images/defaults/banner_200.jpg",
		'link' => 'http://www.towfiqi.com',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad' ); ?>"><?php _e('Ad image url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad' ); ?>" name="<?php echo $this->get_field_name( 'ad' ); ?>" value="<?php echo $instance['ad']; ?>" type="text" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Ad link url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" type="text" />
		</p>
		
	<?php
	}

}

/*
 *CUSTOM 160x600 AD
 */
add_action( 'widgets_init', 'thn_ad160x600_widgets' );

/*
 * Register widget.
 */
function thn_ad160x600_widgets() {
	register_widget( 'thn_Ad160x600_Widget' );
}

/*
 * Widget class.
 */
class thn_ad160x600_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_Ad160x600_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_ad160x600_widget', 'description' => __('A asteria widget that allows the display and configuration of of a single 160x600 Banner.', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_ad160x600_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_ad160x600_widget', __('Custom 160x600 Ad*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$ad = $instance['ad'];
		$link = $instance['link'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ads-160x600">';

		/* Display Ad */
		if ( $link )
			echo '<a target="_blank" href="' . $link . '"><img src="' . $ad . '" width="160" height="600" /></a>';
			
		elseif ( $ad )
		 	echo '<img src="' . $ad . '" width="160" height="600" />';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['ad'] = $new_instance['ad'];
		$instance['link'] = $new_instance['link'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'ad' => get_template_directory_uri()."/images/defaults/banner_600.jpg",
		'link' => 'http://www.towfiqi.com',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Ad image url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'ad' ); ?>"><?php _e('Ad image url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'ad' ); ?>" name="<?php echo $this->get_field_name( 'ad' ); ?>" value="<?php echo $instance['ad']; ?>" type="text" />
		</p>
		
		<!-- Ad link url: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e('Ad link url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" type="text" />
		</p>
		
	<?php
	}

}

/* ---------------------------- */
/* -------- Popular Posts Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'thn_pop_widgets' );

/*
 * Register widget.
 */
function thn_pop_widgets() {
	register_widget( 'thn_pop_Widget' );
}

/*
 * Widget class.
 */
class thn_pop_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_pop_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_pop_widget', 'description' => __('An asteria widget that displays the most popular posts of the site, Based on the comments count ', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_pop_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_pop_widget', __('Popular Posts Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$type = $instance['type'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_pop">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&orderby=comment_count&posts_per_page=' . $num);
		
		echo '<ul class="ast_wdgt_'.$type.'">';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		
		if ( $type == 'layout1') {
			
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}else{
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('medium') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='medium') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}
		
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		if ( ( $type == 'layout1') || ( $type == 'layout2')) {
		echo ''. asteria_excerpt('asteria_excerptlength_index', 'asteria_excerptmore') . '';
		}else{
		
		echo '';	
		}
		echo '</div>';
		echo '</li>';

    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		$instance['type'] = $new_instance['type'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		'type' => 'layout1',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>


		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" type="text" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e('Layout Type:', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" class="widefat">
				<option <?php if ( 'layout1' == $instance['type'] ) echo 'selected="selected"'; ?>>layout1</option>
				<option <?php if ( 'layout2' == $instance['type'] ) echo 'selected="selected"'; ?>>layout2</option>
                <option <?php if ( 'layout3' == $instance['type'] ) echo 'selected="selected"'; ?>>layout3</option>
			</select>
		</p>
		
		
	<?php
	}

}



/* ---------------------------- */
/* -------- Random Posts Widget -------- */
/* ---------------------------- */

add_action( 'widgets_init', 'thn_rand_widgets' );

/*
 * Register widget.
 */
function thn_rand_widgets() {
	register_widget( 'thn_rand_Widget' );
}

/*
 * Widget class.
 */
class thn_rand_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_rand_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_rand_widget', 'description' => __('A asteria widget that displays the random posts of the site', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_rand_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_rand_widget', __('Random Posts Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$type = $instance['type'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_rand">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&orderby=rand&posts_per_page=' . $num);
		
		echo '<ul class="ast_wdgt_'.$type.'">';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		
		if ( 'layout1' == $type) {
			
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}else{
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('medium') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='medium') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}
		
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		if ( ($type == 'layout1') || ($type == 'layout2')) {
		echo ''. asteria_excerpt('asteria_excerptlength_index', 'asteria_excerptmore') . '';
		}else{
		
		echo '';	
		}
		echo '</div>';
		echo '</li>';
    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		$instance['type'] = $new_instance['type'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		'type' => 'layout1'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" type="text" />
		</p>
        
		<p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e('Layout Type:', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" class="widefat">
				<option <?php if ( 'layout1' == $instance['type'] ) echo 'selected="selected"'; ?>>layout1</option>
				<option <?php if ( 'layout2' == $instance['type'] ) echo 'selected="selected"'; ?>>layout2</option>
                <option <?php if ( 'layout3' == $instance['type'] ) echo 'selected="selected"'; ?>>layout3</option>
			</select>
		</p>
		
	<?php
	}

}




/* ---------------------------- */
/* -------- Recent Posts Widget -------- */
/* ---------------------------- */

add_action( 'widgets_init', 'ast_recent_widgets' );

/*
 * Register widget.
 */
function ast_recent_widgets() {
	register_widget( 'ast_recent_Widget' );
}

/*
 * Widget class.
 */
class ast_recent_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ast_recent_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'ast_recent_widget', 'description' => __('An asteria widget that displays the recent posts of your site', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'ast_recent_widget' );

		/* Create the widget */
		$this->WP_Widget( 'ast_recent_widget', __('Recent Posts Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$type = $instance['type'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ast_recent">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&posts_per_page=' . $num);
		
		echo '<ul class="ast_wdgt_'.$type.'">';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		
		if ( 'layout1' == $instance['type']) {
			
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}else{
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('medium') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='medium') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}
		
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		if ( ($instance['type'] == 'layout1') || ($instance['type'] == 'layout2')) {
		echo ''. asteria_excerpt('asteria_excerptlength_index', 'asteria_excerptmore') . '';
		}else{
		
		echo '';	
		}
		echo '</div>';
		echo '</li>';
    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		$instance['type'] = $new_instance['type'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		'type' => 'layout1'
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" type="text" />
		</p>
        
        <p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e('Layout Type:', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" class="widefat">
				<option <?php if ( 'layout1' == $instance['type'] ) echo 'selected="selected"'; ?>>layout1</option>
				<option <?php if ( 'layout2' == $instance['type'] ) echo 'selected="selected"'; ?>>layout2</option>
                <option <?php if ( 'layout3' == $instance['type'] ) echo 'selected="selected"'; ?>>layout3</option>
			</select>
		</p>
		
		
	<?php
	}

}



/*
	/* ---------------------------- */
	/* -------- Featured Posts Widget -------- */
	/* ---------------------------- */
add_action( 'widgets_init', 'thn_feat_widgets' );

/*
 * Register widget.
 */
function thn_feat_widgets() {
	register_widget( 'thn_feat_Widget' );
}

/*
 * Widget class.
 */
class thn_feat_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_feat_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_feat_widget', 'description' => __('A asteria widget that displays the featured posts from your selected category', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'thn_feat_widget' );

		/* Create the widget */
		$this->WP_Widget( 'thn_feat_widget', __('Featured Posts Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$cat = $instance['cat'];
		$type = $instance['type'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="thn_feat">';

		/* Display Posts */
		if ( $num )
		$popular = new WP_Query('ignore_sticky_posts=1&cat=' . $cat .' &posts_per_page=' . $num);
		echo '<ul class="ast_wdgt_'.$type.'">';
		while ($popular->have_posts()) : $popular->the_post();
		echo '<li>';
		echo '<a class="thn_wgt_thumb" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">';
		
		if ( 'layout1' == $type ) {
			
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('thumbnail') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='thumbnail') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}else{
		if ( has_post_thumbnail() ) :
		echo ''. the_post_thumbnail('medium') . '';
		elseif($photo = asteria_get_images('numberposts=1', true)):
		echo ''. wp_get_attachment_image($photo[0]->ID , $size='medium') . '';
		else :
		echo '<img src="'.get_template_directory_uri().'/images/blank_img.png" alt="'.get_the_title().'" class="thumbnail"/>';
		endif;
		}
		
		echo '</a>';
		echo '<div class="widget_content">';
		echo '<a class="thn_wgt_tt" href="' . get_permalink(get_the_ID()) . '" title="' . get_the_title() . '">' . get_the_title() . '</a><br />' ;
		if ( ($type == 'layout1') || ($type == 'layout2')) {
		echo ''. asteria_excerpt('asteria_excerptlength_index', 'asteria_excerptmore') . '';
		}else{
		
		echo '';	
		}
		echo '</div>';
		echo '</li>';
    
		endwhile;
		
		echo '</ul>';
			
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		$instance['cat'] = $new_instance['cat'];
		$instance['type'] = $new_instance['type'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 3,
		'cat' => '',
		'type' => 'layout1',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>
        
        <!-- Category of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'cat' ); ?>"><?php _e('Category:', 'asteria') ?></label>
            <?php wp_dropdown_categories( array( 'name' => $this->get_field_name('cat'), 'selected' => $instance['cat'] ) ); ?>
			
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Number of Posts:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" type="text" />
		</p>
		
        <p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e('Layout Type:', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" class="widefat">
				<option <?php if ( 'layout1' == $instance['type'] ) echo 'selected="selected"'; ?>>layout1</option>
				<option <?php if ( 'layout2' == $instance['type'] ) echo 'selected="selected"'; ?>>layout2</option>
                <option <?php if ( 'layout3' == $instance['type'] ) echo 'selected="selected"'; ?>>layout3</option>
			</select>
		</p>
		
	<?php
	}

}

/*
	/* ---------------------------- */
	/* -------- Flickr Photostream Widget -------- */
	/* ---------------------------- */
add_action( 'widgets_init', 'thn_flckr_widgets' );

/*
 * Register widget.
 */
function thn_flckr_widgets() {
	register_widget( 'thn_flckr_Widget' );
}

/*
 * Widget class.
 */
class thn_flckr_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function thn_flckr_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'thn_flckr_widget', 'description' => __('A asteria widget that displays Flickr image stream from your Flickr account', 'asteria') );

		/* Widget control settings */
		/* Create the widget */
		$this->WP_Widget( 'thn_flckr_widget', __('Flickr Photostream Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$flickrID = $instance['flickrID'];
		$postcount = $instance['postcount'];
		$type = $instance['type'];
		$display = $instance['display'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		/* Display Flickr Photos */
		 ?>
			
			<div id="flickr_badge_wrapper" class="clearfix">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $postcount ?>&amp;display=<?php echo $display ?>&amp;size=s&amp;layout=x&amp;source=<?php echo $type ?>&amp;<?php echo $type ?>=<?php echo $flickrID ?>"></script>
			</div>
		
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['flickrID'] = strip_tags( $new_instance['flickrID'] );
		$instance['postcount'] = $new_instance['postcount'];
		$instance['type'] = $new_instance['type'];
		$instance['display'] = $new_instance['display'];

		/* No need to strip tags for.. */

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
		'title' => 'My Photostream',
		'flickrID' => '82938015@N00',
		'postcount' => '9',
		'type' => 'user',
		'display' => 'random',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Flickr ID: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'flickrID' ); ?>"><?php _e('Flickr ID:', 'asteria') ?> (<a href="http://idgettr.com/">idGettr</a>)</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'flickrID' ); ?>" name="<?php echo $this->get_field_name( 'flickrID' ); ?>" value="<?php echo $instance['flickrID']; ?>" type="text" />
		</p>
		
		<!-- Postcount: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'postcount' ); ?>"><?php _e('Number of Photos:', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'postcount' ); ?>" name="<?php echo $this->get_field_name( 'postcount' ); ?>" class="widefat">
				<option <?php if ( '3' == $instance['postcount'] ) echo 'selected="selected"'; ?>>3</option>
				<option <?php if ( '6' == $instance['postcount'] ) echo 'selected="selected"'; ?>>6</option>
				<option <?php if ( '9' == $instance['postcount'] ) echo 'selected="selected"'; ?>>9</option>
			</select>
		</p>
		
		<!-- Type: Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e('Type (user or group):', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" class="widefat">
				<option <?php if ( 'user' == $instance['type'] ) echo 'selected="selected"'; ?>>user</option>
				<option <?php if ( 'group' == $instance['type'] ) echo 'selected="selected"'; ?>>group</option>
			</select>
		</p>
		
		<!-- Display: Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id( 'display' ); ?>"><?php _e('Display (random or latest):', 'asteria') ?></label>
			<select id="<?php echo $this->get_field_id( 'display' ); ?>" name="<?php echo $this->get_field_name( 'display' ); ?>" class="widefat">
				<option <?php if ( 'random' == $instance['display'] ) echo 'selected="selected"'; ?>>random</option>
				<option <?php if ( 'latest' == $instance['display'] ) echo 'selected="selected"'; ?>>latest</option>
			</select>
		</p>
		
	<?php
	}
}



/* ---------------------------- */
/* -------- Facebook Likebox Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'ast_fb_widgets' );

/*
 * Register widget.
 */
function ast_fb_widgets() {
	register_widget( 'ast_fb_Widget' );
}

/*
 * Widget class.
 */
class ast_fb_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ast_fb_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'ast_fb_widget', 'description' => __('An Asteria widget that displays Facebook Likebox of your Facebook Page', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'ast_fb_widget' );

		/* Create the widget */
		$this->WP_Widget( 'ast_fb_widget', __('Facebook Likebox Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$height = $instance['height'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ast_fb">';

		/* Display Facebook Iframe */
	
		echo '<iframe class="single_iframe" src="//www.facebook.com/plugins/likebox.php?href='.$num.'&amp;width=960&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" frameborder="0" style="border:none; overflow:hidden; width:100%; height:'.$height.';" allowTransparency="true"></iframe>';

		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		
		$instance['height'] = $new_instance['height'];

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 'https://www.facebook.com/pages/Towfiq-I/180981878579536',
		'height' => '200px'
		
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Facebook Page url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" type="text" />
		</p>
        
        <!-- Number of Posts: Text Input -->
        <p>
			<label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php _e('Height of the like Box', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" value="<?php echo $instance['height']; ?>" type="text" />
		</p>
		
		
	<?php
	}

}


/* ---------------------------- */
/* -------- Google Plus Followers Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'ast_gplus_widgets' );

/*
 * Register widget.
 */
function ast_gplus_widgets() {
	register_widget( 'ast_gplus_Widget' );
}

/*
 * Widget class.
 */
class ast_gplus_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ast_gplus_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'ast_gplus_widget', 'description' => __('An Asteria widget that displays your Google Plus Followers', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'ast_gplus_widget' );

		/* Create the widget */
		$this->WP_Widget( 'ast_gplus_widget', __('Google Plus Followers Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = $instance['num'];
		$templatepath = get_template_directory_uri();

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ast_gplus">';


		echo '<script type="text/javascript">
      (function() {
        window.___gcfg = {\'lang\': \'en\'};
        var po = document.createElement(\'script\');
        po.type = \'text/javascript\';
        po.async = true;
        po.src = \'https://apis.google.com/js/plusone.js\';
        var s = document.getElementsByTagName(\'script\')[0];
        s.parentNode.insertBefore(po, s);
      })();
    </script><div class="wc-gplusmod"><div class="g-plus" data-action="followers" data-height="290" data-href="'.$num.'?prsrc=2" data-source="blogger:blog:followers" data-width="290"></div></div>';

		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );

		/* No need to strip tags */
		$instance['num'] = $new_instance['num'];
		

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'num' => 'https://plus.google.com/u/0/114788083723678273482');
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" />
		</p>

		<!-- Number of Posts: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'num' ); ?>"><?php _e('Google Plus Url:', 'asteria') ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" value="<?php echo $instance['num']; ?>" type="text" />
		</p>
        
        
		
		
	<?php
	}

}





/* ---------------------------- */
/* -------- Image Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'ast_image_widgets' );

function asteria_wdScript(){
  wp_enqueue_media();
  wp_enqueue_script('adsScript', get_template_directory_uri() . '/js/imageupload.js');
}
add_action('admin_enqueue_scripts', 'asteria_wdScript');

/*
 * Register widget.
 */
function ast_image_widgets() {
	register_widget( 'ast_image_Widget' );
}

/*
 * Widget class.
 */
class ast_image_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ast_image_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'ast_image_widget', 'description' => __('An Asteria Image to display a single image', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'ast_image_widget' );

		/* Create the widget */
		$this->WP_Widget( 'ast_image_widget', __('Image Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$num = esc_url($instance['image_uri']);
		$link = esc_url($instance['link']);

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ast_image">';
		if ($link ) {
		echo '<a href="'.$link.'"><img style="max-width: 100%; height:auto;" src="'.$num.'" /></a>';
		}else{
		echo '<img style="max-width: 100%; height:auto;" src="'.$num.'" />';
		}
		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
        $instance['title'] = strip_tags( $new_instance['title'] );
		
        $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
		
		$instance['link'] = strip_tags( $new_instance['link'] );

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'image_uri' => '',
		'link' => ''
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'asteria'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
    </p>
    <p>
        <a href="<?php if(!empty($instance['link'])){echo $instance['link'];} ?>"><img class="custom_media_image" src="<?php if(!empty($instance['image_uri'])){echo $instance['image_uri'];} ?>" style="margin:0;padding:0;max-width:150px;float:left;display:block; padding:10px; margin-bottom:15px; background:#fff;border:none" /></a>
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>"><br />
          <input type="button" value="<?php _e( 'Upload Image', 'asteria' ); ?>" class="button custom_media_upload" id="custom_image_uploader"/>

    </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Image Link', 'asteria'); ?></label><br />
        <input type="text" class="widefat" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php echo $instance['link']; ?>">
        </p>
		
		
	<?php
	}

}




/* ---------------------------- */
/* -------- Image Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'ast_bio_widgets' );


/*
 * Register widget.
 */
function ast_bio_widgets() {
	register_widget( 'ast_bio_Widget' );
}

/*
 * Widget class.
 */
class ast_bio_widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ast_bio_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'ast_bio_widget', 'description' => __('An Asteria Biography widget to display your biography', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'ast_bio_widget' );

		/* Create the widget */
		$this->WP_Widget( 'ast_bio_widget', __('Biography Widget*', 'asteria'), $widget_ops );
	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image_uri = esc_url($instance['image_uri']);
		$name = $instance['name'];
		$occu = $instance['occu'];		
		$bio = $instance['bio'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			
		/* Display a containing div */
		echo '<div class="ast_bio">';

		echo '<img alt="'.$name.'" class="ast_bioimg" src="'.$image_uri.'" />';
		
		echo '<div class="ast_biotxt"><h3>'.$name.'</h3><span class="ast_bioccu">'.$occu.'</span>'.$bio.'</div>';

		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
        $instance['title'] = strip_tags( $new_instance['title'] );
		
        $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
        $instance['name'] = strip_tags( $new_instance['name'] );
        $instance['occu'] = strip_tags( $new_instance['occu'] );
		$instance['bio'] = $new_instance['bio'] ;

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'image_uri' => '',
		'name' => 'Jhon Doe',
		'occu' => 'Blogger',
		'bio' => ''
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'asteria'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
    </p>
    <p>
        <img class="custom_media_image" src="<?php if(!empty($instance['image_uri'])){echo $instance['image_uri'];} ?>" style="margin:0;padding:0;max-width:150px;float:left;display:block; padding:10px; margin-bottom:15px; background:#fff;border:none" />
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>"><br />
          <input type="button" value="<?php _e( 'Upload Image', 'asteria' ); ?>" class="button custom_media_upload" id="custom_image_uploader"/>

    </p>
    
    <p>
      <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'asteria'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('name'); ?>" id="<?php echo $this->get_field_id('name'); ?>" value="<?php echo $instance['name']; ?>" class="widefat" />
    </p>
    
    <p>
      <label for="<?php echo $this->get_field_id('occu'); ?>"><?php _e('Occupation', 'asteria'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('occu'); ?>" id="<?php echo $this->get_field_id('occu'); ?>" value="<?php echo $instance['occu']; ?>" class="widefat" />
    </p>
        
        <p>
        <label><?php _e('Description', 'asteria'); ?></label><br />
        <textarea class="widefat" rows="4" cols="20" id="<?php echo $this->get_field_id('bio'); ?>" name="<?php echo $this->get_field_name('bio'); ?>"><?php echo $instance['bio']; ?></textarea>
        </p>
		
		
	<?php
	}

}



/* ---------------------------- */
/* -------- Coundown Widget -------- */
/* ---------------------------- */
add_action( 'widgets_init', 'ast_countdown_widgets' );

function asteria_datepicker(){
  wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('astdate', get_template_directory_uri() . '/js/date.js');
}
add_action('admin_enqueue_scripts', 'asteria_datepicker');
/*
 * Register widget.
 */
function ast_countdown_widgets() {
	register_widget( 'ast_countdown_Widget' );
}

/*
 * Widget class.
 */
class ast_countdown_Widget extends WP_Widget {

	/* ---------------------------- */
	/* -------- Widget setup -------- */
	/* ---------------------------- */
	
	function ast_countdown_widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'ast_countdown_widget', 'description' => __('An Asteria widget to display a Countdown', 'asteria') );

		/* Widget control settings */
		//$control_ops = array( 'width' => 160, 'height' => 600, 'id_base' => 'ast_countdown_widget' );

		/* Create the widget */
		$this->WP_Widget( 'ast_countdown_widget', __('Countdown Widget*', 'asteria'), $widget_ops );

	}

	/* ---------------------------- */
	/* ------- Display Widget -------- */
	/* ---------------------------- */
	
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$desc = $instance['desc'];
		$day = $instance['day'];
		$hour = $instance['hour'];
		$minute = $instance['minute'];
		$seconds = $instance['seconds'];		

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
			

			
		/* Display a containing div */
 
		echo '<div class="ast_countdown">
		<ul id="countdown">
			<li>
				<span class="days">00</span>
				<p class="timeRefDays">days</p>
			</li>
			<li>
				<span class="hours">00</span>
				<p class="timeRefHours">hours</p>
			</li>
			<li>
				<span class="minutes">00</span>
				<p class="timeRefMinutes">minutes</p>
			</li>
			<li>
				<span class="seconds">00</span>
				<p class="timeRefSeconds">seconds</p>
			</li>
		</ul>';
		if ( $desc ) {
		echo '<div class="ast_count">'.$desc.' </div>';
		}
		echo '<script type="text/javascript">jQuery(window).ready(function() {jQuery("#countdown").countdown({
				date: "'.$day.' '.$hour.':'.$minute.':'.$seconds.'",
				format: "on"});
			});</script>';

		echo '</div>';

		/* After widget (defined by themes). */
		echo $after_widget;
	}


	/* ---------------------------- */
	/* ------- Update Widget -------- */
	/* ---------------------------- */
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['desc'] = $new_instance['desc'] ;		
        $instance['day'] = strip_tags( $new_instance['day'] );
		$instance['hour'] = strip_tags( $new_instance['hour'] );
		$instance['minute'] = strip_tags( $new_instance['minute'] );
		$instance['seconds'] = strip_tags( $new_instance['seconds'] );

		return $instance;
	}
	
	/* ---------------------------- */
	/* ------- Widget Settings ------- */
	/* ---------------------------- */
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	
	function form( $instance ) {
	
		/* Set up some default widget settings. */
		$defaults = array(
		'title' => '',
		'desc' => '',		
		'day' => '31 august 2013',
		'hour' => '00',
		'minute' => '00',
		'seconds' => '00'
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'asteria'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
    </p>
    
    <p>
	<style type="text/css">#ui-datepicker-div{ padding:15px; background:#fff; color:#777; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;-webkit-box-shadow:0 0 3px #aaa;-moz-box-shadow:0 0 3px #aaa;box-shadow:0 0 3px #aaa;}.ui-datepicker-prev{display: block;float: left; cursor:pointer;}.ui-datepicker-next{display: block;float: right; cursor:pointer;}.ui-datepicker-title{clear: both;padding-top: 5px;text-align: center;background: #f3f3f3;}.ui-state-active{padding: 2px;background: #21759b;color: #fff;text-decoration: none;}</style>
    <label><?php _e('Set Countdown Date', 'asteria'); ?></label><br />
        <input style="display:inline;" type="text" class="widefat ast_date" name="<?php echo $this->get_field_name('day'); ?>" id="<?php echo $this->get_field_id('day'); ?>" value="<?php echo $instance['day']; ?>"></p>
        
        <p>
        <label><?php _e('Description', 'asteria'); ?></label><br />
        <textarea class="widefat" rows="4" cols="20" id="<?php echo $this->get_field_id('desc'); ?>" name="<?php echo $this->get_field_name('desc'); ?>"><?php echo $instance['desc']; ?></textarea>
        </p>
        
        <p>
        <label><?php _e('Set Countdown Time', 'asteria'); ?></label><br />
        <input style="display:inline;" type="text" size="3" name="<?php echo $this->get_field_name('hour'); ?>" id="<?php echo $this->get_field_id('hour'); ?>" value="<?php echo $instance['hour']; ?>">:
        <input style="display:inline;" type="text" size="3" name="<?php echo $this->get_field_name('minute'); ?>" id="<?php echo $this->get_field_id('minute'); ?>" value="<?php echo $instance['minute']; ?>">:
        <input style="display:inline;" type="text" size="3" name="<?php echo $this->get_field_name('seconds'); ?>" id="<?php echo $this->get_field_id('seconds'); ?>" value="<?php echo $instance['seconds']; ?>">
        <div>
        <span style="width:50px; text-align:center; display: inline-block;">Hours</span>
        <span style="width:50px; text-align:center; margin-right:5px;display: inline-block;">Minutes</span>
        <span style="width:50px; text-align:center;display: inline-block;">Seconds</span>
        </div>


    </p>
        
		
		
	<?php
	}

}


/* ---------------------------- */
/* -------- Pinterest Widget -------- */
/* ---------------------------- */
include_once(ABSPATH . WPINC . '/feed.php');

class Pinterest_Pinboard_Widget extends WP_Widget {

    /**
     * Widget settings.
     */
    protected $widget = array(
            // Default title for the widget in the sidebar.
            'title' => 'Recent pins',

            // Default widget settings.
            'username' => 'pinterest',
            'num' => 12,
            'new_window' => 0,

            // The widget description used in the admin area.
            'description' => 'Adds a Pinterest Pinboard widget to your sidebar',

            // RSS cache lifetime in seconds.
            'cache_lifetime' => 900,

            // Pinterest url
            'pinterest_feed_url' => 'http://pinterest.com/%s/feed.rss'
    );
    
    var $start_time;
    var $protocol;

    function Pinterest_Pinboard_Widget() {
        $id = str_replace('_', '-', get_class($this));
        parent::WP_Widget(
                $id,
                'Pinterest Pinboard*',
                $options = array(
                    'description' => $this->widget['description']
                )
        );
        $this->start_time = microtime(true);
        $this->protocol = $this->is_secure() ? 'https://' : 'http://';
    }
    
    function form($instance) {
        // load current values or set to default.
        $title = array_key_exists('title', $instance) ? esc_attr($instance['title']) : $this->widget['title'];
        $username = array_key_exists('username', $instance) ? esc_attr($instance['username']) : $this->widget['username'];
        $num = array_key_exists('num', $instance) ? esc_attr($instance['num']) : $this->widget['num'];
        $new_window = array_key_exists('new_window', $instance) ? esc_attr($instance['new_window']) : $this->widget['new_window'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'asteria'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title', 'asteria'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('username'); ?>"><?php _e('Username:', 'asteria'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username', 'asteria'); ?>" type="text" value="<?php echo $username; ?>" />
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id('num'); ?>"><?php _e('Number of Pins', 'asteria'); ?></label>
            <input id="<?php echo $this->get_field_id('num'); ?>" name="<?php echo $this->get_field_name('num'); ?>" type="text" value="<?php echo $num; ?>" size="3" />
        </p>
        <p>
            <input id="<?php echo $this->get_field_id('new_window'); ?>" name="<?php echo $this->get_field_name('new_window', 'asteria'); ?>" type="checkbox" <?php if ($new_window) { ?>checked="checked" <?php } ?> />
            <label for="<?php echo $this->get_field_id('new_window'); ?>"><?php _e('Open links in a new window?', 'asteria'); ?></label>
        </p>        
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['username'] = strip_tags($new_instance['username']);
        $instance['num'] = strip_tags($new_instance['num']);
        $instance['new_window'] = isset($new_instance['new_window']) ? 1 : 0;
        return $instance;
    }
    
    function widget($args, $instance) {
        extract($args);
        echo($before_widget);
        $title = apply_filters('widget_title', $instance['title']);
        echo($before_title . $title . $after_title);
        ?>
        <div id="pinterest-pinboard-widget-container">
            <div class="pinboard">
            <?php

            // Get the RSS.
            $username = $instance['username'];
            $num = $instance['num'];
            $new_window = $instance['new_window'];
            $pins = $this->get_pins($username, $num);
            if (is_null($pins)) {
                echo("Unable to load Pinterest pins for '$username'\n");
            } else {
                // Render the pinboard.
                $count = 0;
                foreach ($pins as $pin) {

                    $title = $pin['title'];
                    $url = $pin['url'];
                    $image = $pin['image'];
                    echo("<a href=\"$url\"");
                    if ($new_window) {
                        echo(" target=\"_blank\"");
                    }
                    echo("><img src=\"$image\" alt=\"$title\" title=\"$title\" /></a>");
                    $count++;

                }
            }
            ?>
            </div>
            <div class="pin_link">
                <a class="pin_logo" href="<?php echo($this->protocol) ?>pinterest.com/<?php echo($username) ?>/">
                    <img src="<?php echo($this->protocol) ?>passets-cdn.pinterest.com/images/small-p-button.png" width="16" height="16" alt="Follow Me on Pinterest" />
                </a>
                <span class="pin_text"><a target="_blank" href="http://pinterest.com/<?php echo($username) ?>/" <?php if ($new_window) { ?>target="_blank"<?php } ?>><?php _e("More Pins" ,"asteria") ?></a></span>
            </div>
        </div>
        <?php
        echo($this->get_footer());
        echo($after_widget);
    }
    
    /**
     * Retrieve RSS feed for username, and parse the data needed from it.
     * Returns null on error, otherwise a hash of pins.
     */
    function get_pins($username, $num) {

        // Set caching.
        add_filter('wp_feed_cache_transient_lifetime', create_function('$a', 'return '. $this->widget['cache_lifetime'] .';'));

        // Get the RSS feed.
        $url = sprintf($this->widget['pinterest_feed_url'], $username);
        $rss = fetch_feed($url);
        if (is_wp_error($rss)) {
            return null;
        }
        
        $maxitems = $rss->get_item_quantity($num);
        $rss_items = $rss->get_items(0, $maxitems);
        
        $pins;
        if (is_null($rss_items)) {
            $pins = null;
        } else {
            // Pattern to replace for the images.
            $search = array('_b.jpg');
            $replace = array('_t.jpg');
            // Add http replace is running secure.
            if ($this->is_secure()) {
                array_push($search, 'http://');
                array_push($replace, $this->protocol);
            }
            $pins = array();
            foreach ($rss_items as $item) {
                $title = $item->get_title();
                $description = $item->get_description();
                $url = $item->get_permalink();
                if (preg_match_all('/<img src="([^"]*)".*>/i', $description, $matches)) {
                    $image = str_replace($search, $replace, $matches[1][0]);
                }
                array_push($pins, array(
                    'title' => $title,
                    'image' => $image,
                    'url' => $url
                ));
            }
        }
        return $pins;
    }
    
    /**
     * Determine the running plugin's version.
     */
    function get_version() {
        $headers = array(
            'Version' => 'Version'
        );
        $plugin_data = get_file_data(__FILE__, $headers);
        $plugin_version = $plugin_data['Version'];
        return $plugin_version;
    }

    /**
     * Render HTML comment footer for debugging purposes.
     */
    function get_footer() {
        $execution_time = (microtime(true) - $this->start_time) * 1e6;
        return '<!-- '.
               'Plugin ID: '. $this->id .' // '.
               'Version: '. $this->get_version() .' // '.
               'Execution Time: '. $execution_time .' (ms) '.
               "-->\n";
    }
    
    /**
     * Check if the server is running SSL.
     */
    function is_secure() {
        return !empty($_SERVER['HTTPS'])
            && $_SERVER['HTTPS'] !== 'off'
            || $_SERVER['SERVER_PORT'] == 443;
    } 

}

// Register the widget.
add_action('widgets_init', create_function('', 'return register_widget("Pinterest_Pinboard_Widget");'));


?>
