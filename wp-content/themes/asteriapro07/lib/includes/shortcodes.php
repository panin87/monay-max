<?php


add_action('admin_head', 'my_print_shortcodes_in_js');
function my_print_shortcodes_in_js(){
wp_enqueue_script('helper_js',get_template_directory_uri().'/js/shorthelper.js');
wp_enqueue_style('helper_css',get_template_directory_uri().'/css/shortcodes.css');

}



/*------------------------------------------------------*/



/**Shortcode Support in Text Widget **/
add_filter('widget_text', 'do_shortcode');
/**THERON SHORTCODES **/

/**Success Alert **/
/**USAGE: [success]Your info success message[/success]**/
function thn_scs( $atts, $content = null ) {
		return '<div class="lgn_scs">'.do_shortcode($content).'</div>';
}
add_shortcode( 'success', 'thn_scs' );


/**Info Alert **/
/**USAGE: [info]Your info alert message[/info]**/
function thn_info( $atts, $content = null ) {
		return '<div class="lgn_info">'.do_shortcode($content).'</div>';
}
add_shortcode( 'info', 'thn_info' );


/**Warning Alert **/
/**USAGE: [warning]Your warning alert message[/warning]**/
function thn_wng( $atts, $content = null ) {
		return '<div class="lgn_wng">'.do_shortcode($content).'</div>';
}
add_shortcode( 'warning', 'thn_wng' );



/**Error Alert **/
/**USAGE: [error]Your error alert message[/error]**/
function thn_err( $atts, $content = null ) {
		return '<div class="lgn_err">'.do_shortcode($content).'</div>';
}
add_shortcode( 'error', 'thn_err' );


/**Quote Shortcode **/
/**USAGE: [quote]Your Quote[/quote]**/
function thn_quote( $atts, $content = null ) {
		return '<div class="lgn_quote">'.do_shortcode($content).'</div>';
}
add_shortcode( 'quote', 'thn_quote' );


/**Divider Shortcode **/
/**USAGE: [divider]**/
function thn_divider( $atts, $content = null ) {
		extract(shortcode_atts(array(
		'style' => 'solid',
		'width' => '1px',
		'color' => '#eeeeee',
	), $atts));
	
		return '<div class="ast_divide" style="clear:both;border-bottom: '.$width.' '.$style.' '.$color.'; width:100%; height:2px; margin:15px 0;"></div>';
}
add_shortcode( 'divider', 'thn_divider' );



/**Slider Shortcode **/
/**USAGE: [slider]**/
function thn_slider( $atts, $content = null ) {
		extract(shortcode_atts(array(
		'effect' => 'slide',
		'pausetime' => '3000',
		'autoplay' => 'true',
		'navigation' => 'true'
	), $atts));
	$content= preg_replace('<<br />>', '', $content);
		return '<div class="ast_slide_wrap"><div class="ast_slider">'.$content.'</div></div><script>jQuery(function(){jQuery(".ast_slider").nivoSlider({ effect :"'.$effect.'", pauseTime: '.$pausetime.', directionNav: '.$navigation.'});   });</script>';
}
add_shortcode( 'slider', 'thn_slider' );



/**FACEBOOK LIKE BUTTON **/
/**USAGE: [fblike]**/
function thn_facelike() {
   return '<iframe src="//www.facebook.com/plugins/like.php?href='.urlencode(get_permalink()).'&amp;width=450&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" style="border:none; overflow:hidden; width:450px; height:21px;"></iframe>';
}
add_shortcode('fblike', 'thn_facelike');


/**TWITTER TWEET BUTTON **/
/**USAGE: [tweet]**/
function thn_tweet() {
	
   return '<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';
}
add_shortcode('tweet', 'thn_tweet');


/**Pinterest BUTTON **/
/**USAGE: [pinit]**/
function thn_pinit() {
	
   return '<a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a><script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>';
}
add_shortcode('pinit', 'thn_pinit');

/**Google Plus BUTTON **/
/**USAGE: [gplus]**/
function thn_gplus() {
	
   return '<div style="width:75px; float:left;" class="gplus_wrap"><div class="g-plusone" data-size="medium"></div></div><script type="text/javascript">
  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>';
}
add_shortcode('gplus', 'thn_gplus');


/**List Style 1 **/
/**USAGE: 
[list1]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list1]
**/
function thn_list1_func($atts, $content) {
	
	$return_html = '<ul class="list1">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list1', 'thn_list1_func');


/**List Style 2 **/
/**USAGE: 
[list2]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list2]
**/
function thn_list2_func($atts, $content) {
	
	$return_html = '<ul class="list2">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list2', 'thn_list2_func');


/**List Style 3 **/
/**USAGE: 
[list3]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list3]
**/
function thn_list3_func($atts, $content) {
	
	$return_html = '<ul class="list3">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list3', 'thn_list3_func');



/**List Style 4 **/
/**USAGE: 
[list4]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list4]
**/
function thn_list4_func($atts, $content) {
	
	$return_html = '<ul class="list4">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list4', 'thn_list4_func');


/**List Style 5 **/
/**USAGE: 
[list5]
<li>Item #1 - This area is for your first items description could be text or HTML</li>
[/list5]
**/
function thn_list5_func($atts, $content) {
	
	$return_html = '<ul class="list5">'.html_entity_decode(strip_tags($content,'<li><a>')).'</ul>';
	
	return $return_html;
}
add_shortcode('list5', 'thn_list5_func');



/**Youtube Video Shortcode **/
/**USAGE: [youtube width="640" height="385" video_id="EhkHFenJ3rM"]
**/
function thn_youtube_func($atts, $content) {

	//extract short code attr
	extract(shortcode_atts(array(
		'width' => '100%',
		'height' => '100%',
		'autoplay' => 'true',
	), $atts));
	
	$content = strip_tags($content);
	$content =str_replace('https://www.youtube.com/watch?v=', '//www.youtube.com/embed/', $content);
	if ($autoplay == 'true'){
		$autoplay= 1;
		}elseif ($autoplay == 'false'){
		$autoplay= 0;	
		}
	$return_html = '<div style="clear:both;"></div><div class="ast_vid"><div class="responsive-container"><iframe class="vid_iframe" style=" width: '.$width.'; height: '.$height.';" src="'.$content.'?autoplay='.$autoplay.'" allowfullscreen></iframe></div></div>';
	
	return $return_html;
}
add_shortcode('youtube', 'thn_youtube_func');




/**Vimeo Video Shortcode **/
/**USAGE: [vimeo width="640" height="385" video_id="11770385"]
**/
function thn_vimeo_func($atts, $content) {

	//extract short code attr
	extract(shortcode_atts(array(
		'width' => '100%',
		'height' => '100%',
		'autoplay' => 'true',
	), $atts));
	
	$content = strip_tags($content);
	$content =str_replace('http://vimeo.com/', '//player.vimeo.com/video/', $content);
	if ($autoplay == 'true'){
		$autoplay= 1;
		}elseif ($autoplay == 'false'){
		$autoplay= 0;	
		}
	
	$return_html = '<div style="clear:both;"></div><div class="ast_vid"><div class="responsive-container"><iframe class="vid_iframe" style=" width: '.$width.'; height: '.$height.';" src="'.$content.'?title=1&amp;byline=0&amp;portrait=0&amp;color=00adef&amp;autoplay='.$autoplay.'"></iframe></div></div>';
	
	return $return_html;
}
add_shortcode('vimeo', 'thn_vimeo_func');



/**2 columns **/
/**USAGE: [col2]your text[/col2]
**/
function thn_col2_func( $atts, $content = null ) {
		return '<span class="col2">'.do_shortcode($content).'</span>';
}
add_shortcode( 'col2', 'thn_col2_func' );


/**3 columns **/
/**USAGE: [col3]your text[/col3]
**/
function thn_col3_func( $atts, $content = null ) {
		return '<span class="col3">'.do_shortcode($content).'</span>';
}
add_shortcode( 'col3', 'thn_col3_func' );



/**4 columns **/
/**USAGE: [col4]your text[/col4]
**/
function thn_col4_func( $atts, $content = null ) {
		return '<span class="col4">'.do_shortcode($content).'</span>';
}
add_shortcode( 'col4', 'thn_col4_func' );



/**Tabs **/
/**USAGE: [tabs titles="Tab One, Tab Two"][tab]your content[/tab][tab]your content[/tab][/tabs]
**/
function thn_tabs($atts, $content = null) {
	extract(shortcode_atts(array(
		"titles" => '',
	), $atts));
	$titlearr=explode(',',$titles);
	$html='<div class="tabs-container"><ul class="tabs ">';
	foreach($titlearr as $title){

		$html.='<li class="tabli"><a href="#">'.$title.'</a></li>';

	}
	$html.='</ul><div class="lgn_tab">'.do_shortcode($content).'</div></div>';
	return $html;
}
add_shortcode('tabs', 'thn_tabs');
function thn_tab($atts, $content = null) {
	return '<div>'.do_shortcode($content).'</div>';
}
add_shortcode('tab', 'thn_tab');

/**Toggles **/
/**USAGE: [toggle title="ToggleMe"]your content[/toggle]
**/
function thn_toggle($atts, $content = null) {
	extract(shortcode_atts(array(
		"title" => '',
	), $atts));
	$titlearr=explode(',',$title);
	$html='<div class="lgn_toggle"><div class="trigger_wrap">';
	foreach($titlearr as $title){
		$html.='<a class="trigger">'.$title.'</a></div>';
	}
	$html.='<div class="lgn_toggle_content">'.do_shortcode($content).'</div></div>';
	return $html;
}
add_shortcode('toggle', 'thn_toggle');



/**Custom Button Shortcode **/
/**USAGE: [button class="violet"][/button]
**/
function thn_button_func($atts, $content = null) {

	//extract short code attr
	extract(shortcode_atts(array( 
	'url' => 'http://www.google.com',
	'background_color' => '#2dcb73'	,
	'text_color' => '#ffffff'
	), $atts));
	
	$return_html = '<div class="scl_button"><span><a target="_blank" style="background:'.$background_color.';color:'.$text_color.';" href="'.$url.'">'.$content.'</a></span></div><div style="clear:both"></div>';
	
	return $return_html;
}

add_shortcode('button', 'thn_button_func');


/**Custom Button Shortcode **/
/**USAGE: [button class="violet"][/button]
**/
function thn_callaction_func($atts, $content = null) {

	//extract short code attr
	extract(shortcode_atts(array( 
	'url' => 'http://www.google.com', 
	'button_text' => 'My Button',
	'button_background_color' => '#e64429',
	'button_text_color' => '#ffffff'	,
	'background_color' => '#2dcb73'	,
	'text_color' => '#ffffff'
	), $atts));
	
	$return_html = '<div style="background:'.$background_color.';color:'.$text_color.'!important;" class="ast_shrt_action"><div class="act_left">'.$content.'</div><div class="act_right"><a style="background:'.$button_background_color.';color:'.$button_text_color.';" href="'.$url.'">'.$button_text.'</a></div></div><div style="clear:both"></div>';
	
	return $return_html;
}

add_shortcode('callaction', 'thn_callaction_func');

/**Table Shortcode **/
/**USAGE: [table]
**/
function thn_table_func( $atts ) {
    extract( shortcode_atts( array(
        'cols' => 'none',
        'data' => 'none',
    ), $atts ) );
    $cols = explode(',',$cols);
    $data = explode(',',$data);
    $total = count($cols);
	$output = "";
    $output .= '<table class="ast_table"><tr class="th">';
    foreach($cols as $col):
        $output .= '<td>'.$col.'</td>';
    endforeach;
    $output .= '</tr><tr>';
    $counter = 1;
    foreach($data as $datum):
        $output .= '<td>'.$datum.'</td>';
        if($counter%$total==0):
            $output .= '</tr>';
        endif;
        $counter++;
    endforeach;
        $output .= '</table>';
    return $output;
}
add_shortcode( 'table', 'thn_table_func' );


/**CIframe Shortcode **/
/**USAGE: [iframe url=""][/button]
**/
function thn_iframe_func($atts, $content=null) {
          extract(shortcode_atts(array(
               'url'      => 'http://www.beemp3.com',
               'scrolling'      => 'yes',
               'width'      => '100%',
               'height'      => '500',
			   'frameborder'      => '0'
          ), $atts));
          if (empty($url)) return '<!-- Iframe: You did not enter a valid URL -->';
     return '<iframe src="'.$url.'" title="" scrolling="'.$scrolling.'" frameborder="'.$frameborder.'" style="margin:15px 0;width:'.$width.';height:'.$height.'px;"><a href="'.$url.'" target="_blank">'.$url.'</a></iframe>';
    }

add_shortcode('iframe', 'thn_iframe_func');

/**Countdown content Shortcode **/
/**USAGE: [countdown month="" date="" year=""][/countdown]
**/
function thn_countdown_func($atts, $content = null){
  extract(shortcode_atts(array(
     'month' => '',
     'day'   => '',
     'year'  => ''
    ), $atts));
    $remain = ceil((mktime( 0,0,0,(int)$month,(int)$day,(int)$year) - time())/86400);
    if( $remain > 1 ){
        return $daysremain = "<div class=\"event\">Just <b>($remain)</b> days until content is available</div>";
    }else if($remain == 1 ){
        return $daysremain = "<div class=\"event\">Just <b>($remain)</b> day until content is available</div>";
    }else{
        return $content;
    }
}
add_shortcode('countdown', 'thn_countdown_func');


/**Featured Image SHORTCODE **/
/** [featimage align="left"]
USAGE: [adsense]**/
function thn_featimage($atts) {

	//extract short code attr
	extract(shortcode_atts(array('align' => 'left'), $atts));
	
if (has_post_thumbnail() ) {
    $image_id = get_post_thumbnail_id();  
    $image_url = wp_get_attachment_image_src($image_id,'full');  
    $image_url = $image_url[0]; 
    $result = '<img src="'.$image_url.'" style="float:'.$align.'" />';
    return $result;
}
return;
}

add_shortcode('featimage', 'thn_featimage');


/**GOOGLE AD SENSE SHORTCODE **/
/** [adsense id="3637220125174754" slot="4668915978" width="480" height="60"]
USAGE: [adsense]**/
function thn_showads($atts) {

	//extract short code attr
	extract(shortcode_atts(array('id' => '3637220125174754', 'slot' => '4668915978', 'width' => '480', 'height' => '60'), $atts));
	
    return '<script type="text/javascript"><!--
google_ad_client = "pub-'.$id.'";
google_ad_slot = "'.$slot.'";
google_ad_width = '.$width.';
google_ad_height = '.$height.';
//-->
</script><script type="text/javascript"src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
';
}

add_shortcode('adsense', 'thn_showads');





if(strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/post.php') || strstr($_SERVER['REQUEST_URI'], 'wp-admin/edit.php')) {

/*TINY MCE Success Button*/
function thn_add_success_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_success_plugin');  
   add_filter('mce_buttons_3', 'thn_register_success_button');  
  }  
}  
function thn_register_success_button($buttons) {  
    array_push($buttons, "success");  
    return $buttons;  
 }  
  

function thn_add_success_plugin($plugin_array) {  
  $plugin_array['success'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_success_button');

/*TINY MCE INFO Button*/
function thn_add_info_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_info_plugin');  
   add_filter('mce_buttons_3', 'thn_register_info_button');  
  }  
}  
function thn_register_info_button($buttons) {  
    array_push($buttons, "info");  
    return $buttons;  
 }  
  

function thn_add_info_plugin($plugin_array) {  
  $plugin_array['info'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_info_button');


/*TINY MCE Warning Button*/
function thn_add_warning_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_warning_plugin');  
   add_filter('mce_buttons_3', 'thn_register_warning_button');  
  }  
}  
function thn_register_warning_button($buttons) {  
    array_push($buttons, "warning");  
    return $buttons;  
 }  
  

function thn_add_warning_plugin($plugin_array) {  
  $plugin_array['warning'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_warning_button');


/*TINY MCE Error Button*/
function thn_add_error_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_error_plugin');  
   add_filter('mce_buttons_3', 'thn_register_error_button');  
  }  
}  
function thn_register_error_button($buttons) {  
    array_push($buttons, "error");  
    return $buttons;  
 }  
function thn_add_error_plugin($plugin_array) {  
  $plugin_array['error'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_error_button');

/*TINY MCE Quote Button*/
function thn_add_quote_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_quote_plugin');  
   add_filter('mce_buttons_3', 'thn_register_quote_button');  
  }  
}  
function thn_register_quote_button($buttons) {  
    array_push($buttons, "quote");  
    return $buttons;  
 }  
function thn_add_quote_plugin($plugin_array) {  
  $plugin_array['quote'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_quote_button');

/*TINY MCE Divider Button*/
function thn_add_divider_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_divider_plugin');  
   add_filter('mce_buttons_3', 'thn_register_divider_button');  
  }  
}  
function thn_register_divider_button($buttons) {  
    array_push($buttons, "divider");  
    return $buttons;  
 }  
function thn_add_divider_plugin($plugin_array) {  
  $plugin_array['divider'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_divider_button');

/*TINY Table Button*/
function thn_add_table_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_table_plugin');  
   add_filter('mce_buttons_3', 'thn_register_table_button');  
  }  
}  
function thn_register_table_button($buttons) {  
    array_push($buttons, "table");  
    return $buttons;  
 }  
function thn_add_table_plugin($plugin_array) {  
  $plugin_array['table'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_table_button');


/*TINY Column2 Button*/
function thn_add_col2_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_col2_plugin');  
   add_filter('mce_buttons_3', 'thn_register_col2_button');  
  }  
}  
function thn_register_col2_button($buttons) {  
    array_push($buttons, "col2");  
    return $buttons;  
 }  
function thn_add_col2_plugin($plugin_array) {  
  $plugin_array['col2'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_col2_button');

/*TINY Column3 Button*/
function thn_add_col3_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_col3_plugin');  
   add_filter('mce_buttons_3', 'thn_register_col3_button');  
  }  
}  
function thn_register_col3_button($buttons) {  
    array_push($buttons, "col3");  
    return $buttons;  
 }  
function thn_add_col3_plugin($plugin_array) {  
  $plugin_array['col3'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_col3_button');

/*TINY Column4 Button*/
function thn_add_col4_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_col4_plugin');  
   add_filter('mce_buttons_3', 'thn_register_col4_button');  
  }  
}  
function thn_register_col4_button($buttons) {  
    array_push($buttons, "col4");  
    return $buttons;  
 }  
function thn_add_col4_plugin($plugin_array) {  
  $plugin_array['col4'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_col4_button');




/*TINY Facebook Like Button*/
function thn_add_fblike_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_fblike_plugin');  
   add_filter('mce_buttons_3', 'thn_register_fblike_button');  
  }  
}  
function thn_register_fblike_button($buttons) {  
    array_push($buttons, "fblike");  
    return $buttons;  
 }  
function thn_add_fblike_plugin($plugin_array) {  
  $plugin_array['fblike'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_fblike_button');


/*TINY TWEET Button*/
function thn_add_tweet_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_tweet_plugin');  
   add_filter('mce_buttons_3', 'thn_register_tweet_button');  
  }  
}  
function thn_register_tweet_button($buttons) {  
    array_push($buttons, "tweet");  
    return $buttons;  
 }  
function thn_add_tweet_plugin($plugin_array) {  
  $plugin_array['tweet'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_tweet_button');


/*Pinterest Button*/
function thn_add_pinit_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_pinit_plugin');  
   add_filter('mce_buttons_3', 'thn_register_pinit_button');  
  }  
}  
function thn_register_pinit_button($buttons) {  
    array_push($buttons, "pinit");  
    return $buttons;  
 }  
function thn_add_pinit_plugin($plugin_array) {  
  $plugin_array['pinit'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_pinit_button');


/*Google Plus Button*/
function thn_add_gplus_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_gplus_plugin');  
   add_filter('mce_buttons_3', 'thn_register_gplus_button');  
  }  
}  
function thn_register_gplus_button($buttons) {  
    array_push($buttons, "gplus");  
    return $buttons;  
 }  
function thn_add_gplus_plugin($plugin_array) {  
  $plugin_array['gplus'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_gplus_button');


/*Slider Button*/
function thn_add_slider_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_slider_plugin');  
   add_filter('mce_buttons_3', 'thn_register_slider_button');  
  }  
}  
function thn_register_slider_button($buttons) {  
    array_push($buttons, "slider");  
    return $buttons;  
 }  
function thn_add_slider_plugin($plugin_array) {  
  $plugin_array['slider'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_slider_button');


/*TINY List 1 Button*/
function thn_add_list1_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list1_plugin');  
   add_filter('mce_buttons_4', 'thn_register_list1_button');  
  }  
}  
function thn_register_list1_button($buttons) {  
    array_push($buttons, "list1");  
    return $buttons;  
 }  
function thn_add_list1_plugin($plugin_array) {  
  $plugin_array['list1'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list1_button');

/*TINY List 2 Button*/
function thn_add_list2_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list2_plugin');  
   add_filter('mce_buttons_4', 'thn_register_list2_button');  
  }  
}  
function thn_register_list2_button($buttons) {  
    array_push($buttons, "list2");  
    return $buttons;  
 }  
function thn_add_list2_plugin($plugin_array) {  
  $plugin_array['list2'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list2_button');

/*TINY List 3 Button*/
function thn_add_list3_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list3_plugin');  
   add_filter('mce_buttons_4', 'thn_register_list3_button');  
  }  
}  
function thn_register_list3_button($buttons) {  
    array_push($buttons, "list3");  
    return $buttons;  
 }  
function thn_add_list3_plugin($plugin_array) {  
  $plugin_array['list3'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list3_button');

/*TINY List 4 Button*/
function thn_add_list4_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list4_plugin');  
   add_filter('mce_buttons_4', 'thn_register_list4_button');  
  }  
}  
function thn_register_list4_button($buttons) {  
    array_push($buttons, "list4");  
    return $buttons;  
 }  
function thn_add_list4_plugin($plugin_array) {  
  $plugin_array['list4'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list4_button');

/*TINY List 5 Button*/
function thn_add_list5_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_list5_plugin');  
   add_filter('mce_buttons_4', 'thn_register_list5_button');  
  }  
}  
function thn_register_list5_button($buttons) {  
    array_push($buttons, "list5");  
    return $buttons;  
 }  
function thn_add_list5_plugin($plugin_array) {  
  $plugin_array['list5'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_list5_button');

/*TINY youtube Button*/
function thn_add_youtube_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_youtube_plugin');  
   add_filter('mce_buttons_4', 'thn_register_youtube_button');  
  }  
}  
function thn_register_youtube_button($buttons) {  
    array_push($buttons, "youtube");  
    return $buttons;  
 }  
function thn_add_youtube_plugin($plugin_array) {  
  $plugin_array['youtube'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_youtube_button');


/*TINY Vimeo Button*/
function thn_add_vimeo_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_vimeo_plugin');  
   add_filter('mce_buttons_4', 'thn_register_vimeo_button');  
  }  
}  
function thn_register_vimeo_button($buttons) {  
    array_push($buttons, "vimeo");  
    return $buttons;  
 }  
function thn_add_vimeo_plugin($plugin_array) {  
  $plugin_array['vimeo'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_vimeo_button');



/*TINY Tabs Button*/
function thn_add_tabs_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_tabs_plugin');  
   add_filter('mce_buttons_4', 'thn_register_tabs_button');  
  }  
}  
function thn_register_tabs_button($buttons) {  
    array_push($buttons, "tabs");  
    return $buttons;  
 }  
function thn_add_tabs_plugin($plugin_array) {  
  $plugin_array['tabs'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_tabs_button');

/*TINY Toggle Button*/
function thn_add_toggle_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_toggle_plugin');  
   add_filter('mce_buttons_4', 'thn_register_toggle_button');  
  }  
}  
function thn_register_toggle_button($buttons) {  
    array_push($buttons, "toggle");  
    return $buttons;  
 }  
function thn_add_toggle_plugin($plugin_array) {  
  $plugin_array['toggle'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_toggle_button');

/*TINY buttons Button*/
function thn_add_button_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_button_plugin');  
   add_filter('mce_buttons_4', 'thn_register_button_button');  
  }  
}  
function thn_register_button_button($buttons) {  
    array_push($buttons, "button");  
    return $buttons;  
 }  
function thn_add_button_plugin($plugin_array) {  
  $plugin_array['button'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_button_button');
	
/*TINY Call to Action Button*/
function thn_add_callaction_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_callaction_plugin');  
   add_filter('mce_buttons_4', 'thn_register_callaction_button');  
  }  
}  
function thn_register_callaction_button($buttons) {  
    array_push($buttons, "callaction");  
    return $buttons;  
 }  
function thn_add_callaction_plugin($plugin_array) {  
  $plugin_array['callaction'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_callaction_button');	


/*TINY Iframe Button*/
function thn_add_iframe_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_iframe_plugin');  
   add_filter('mce_buttons_4', 'thn_register_iframe_button');  
  }  
}  
function thn_register_iframe_button($buttons) {  
    array_push($buttons, "iframe");  
    return $buttons;  
 }  
function thn_add_iframe_plugin($plugin_array) {  
  $plugin_array['iframe'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}
add_action('init', 'thn_add_iframe_button');	


/*TINY MCE Countdown Button*/
function thn_add_countdown_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_countdown_plugin');  
   add_filter('mce_buttons_4', 'thn_register_countdown_button');  
  }  
}  
function thn_register_countdown_button($buttons) {  
    array_push($buttons, "countdown");  
    return $buttons;  
 }  
function thn_add_countdown_plugin($plugin_array) {  
  $plugin_array['countdown'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_countdown_button'); 	


/*TINY MCE Featured Image Button*/
function thn_add_featimage_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_featimage_plugin');  
   add_filter('mce_buttons_4', 'thn_register_featimage_button');  
  }  
}  
function thn_register_featimage_button($buttons) {  
    array_push($buttons, "featimage");  
    return $buttons;  
 }  
function thn_add_featimage_plugin($plugin_array) {  
  $plugin_array['featimage'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_featimage_button');


/*TINY MCE Adsense Button*/
function thn_add_adsense_button() {  
  if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
 {  
   add_filter('mce_external_plugins', 'thn_add_adsense_plugin');  
   add_filter('mce_buttons_4', 'thn_register_adsense_button');  
  }  
}  
function thn_register_adsense_button($buttons) {  
    array_push($buttons, "adsense");  
    return $buttons;  
 }  
function thn_add_adsense_plugin($plugin_array) {  
  $plugin_array['adsense'] = get_template_directory_uri().'/js/buttons.js';  
   return $plugin_array;  
}

add_action('init', 'thn_add_adsense_button'); 	
	
}