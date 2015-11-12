<?php global $asteria;?>
<?php if($asteria['slider_type_id'] == "nivo"){ ?>
<script type="text/javascript">
    jQuery(window).ready(function() {
		// nivoslider init
		jQuery('#zn_nivo').nivoSlider({
				effect: 'random',
				animSpeed:700,
				pauseTime:<?php echo $asteria['n_slide_time_id']; ?>,
				startSlide:0,
				slices:10,
				directionNav:true,
				directionNavHide:true,
				controlNav:true,
				controlNavThumbs:false,
				keyboardNav:true,
				pauseOnHover:true,
				captionOpacity:0.8,
				afterLoad: function(){
						if (jQuery(window).width() < 480) {
					jQuery(".nivo-caption").animate({"opacity": "1", "right":"0"}, {easing:"easeOutBack", duration: 500});
						}else{
					jQuery(".nivo-caption").animate({"opacity": "1", "right":"11%"}, {easing:"easeOutBack", duration: 500});	
					jQuery(".nivo-caption").has('.sld_layout3').addClass('sld3wrap');
							}
				},
				beforeChange: function(){
					jQuery(".nivo-caption").animate({right:"-500px"}, {easing:"easeInBack", duration: 500});
					//jQuery(".nivo-caption").delay(400).removeClass('sld3wrap');
					jQuery('.nivo-caption').animate({"opacity": "0"}, 100);
					jQuery('.nivo-caption').delay(500).queue(function(next){
						jQuery(this).removeClass("sld3wrap");next();});

				},
				afterChange: function(){
						if (jQuery(window).width() < 480) {
					jQuery(".nivo-caption").animate({"opacity": "1", "right":"0"}, {easing:"easeOutBack", duration: 500});
						}else{
					jQuery(".nivo-caption").animate({"opacity": "1", "right":"11%"}, {easing:"easeOutBack", duration: 500});	
					jQuery(".nivo-caption").has('.sld_layout3').addClass('sld3wrap');	
							}
				}
			});
	});
</script>
<?php } ?>
<?php if($asteria['slider_type_id'] == "unslider"){ ?>
<script type="text/javascript">
    jQuery(window).load(function() {
		//UnSlider
		jQuery('.banner').unslider({delay: <?php echo $asteria['n_slide_time_id']; ?>, arrows: false,fluid: true,dots: true,autoplay: true });
	});
</script>
<?php } ?>

<?php if($asteria['slider_type_id'] == "accordion"){ ?>
<script type="text/javascript">
    jQuery(window).load(function() {
		//Accordion
		if (jQuery(window).width() > 500) {
		jQuery('.kwicks').kwicks({maxSize : '80%', behavior: 'menu', spacing: 0});
		} else {
		jQuery(".kwicks .dlthref").attr("href", "#");
		var index = jQuery('.kwicks').kwicks({maxSize : '80%', spacing: 0, behavior: 'slideshow'});
		jQuery('.kwicks').kwicks('select', 1);	
		}
	});
</script>
<?php } ?>

<?php /*?><!------------------------------------------------------------Other Javascripts--------------------------------------------------------><?php */?>
<script type="text/javascript">
//Sidebar List style type
<?php if(($asteria['site_width_id'] == "1") || (!get_option( 'asteria' )) ) {?>
jQuery('#sidebar .widgets .widget li').prepend('<i class="fa-angle-double-right"></i> ');
<?php } ?>

//Header4 Fix
jQuery(window).bind("load", function() {
var headheight = (jQuery(".logo").outerHeight());
var logowidth = (jQuery(".logo").outerWidth());
var menuwidth = (jQuery("#topmenu").outerWidth());
if (logowidth + menuwidth <1100 ){
//var headheight = (jQuery(".header4").outerHeight());

jQuery(".header4 #topmenu").css({"minHeight":headheight});
jQuery(".header4 #topmenu ul li ul, .header4 .head_soc").css({"top": headheight + 'px'});
jQuery(".header4 #topmenu ul li").css({"paddingTop": "0px", "paddingBottom": "0px","height":headheight - 3 + 'px', "line-height" :headheight - 3 + 'px'});
jQuery(".header4 #topmenu ul li ul li ul").css({"marginTop": '-' + headheight + 'px'});
}else{
	jQuery(".header4 #topmenu").addClass('bigmenu');
	}
});


//Hide Slider until its loaded
jQuery('#zn_nivo, .nivo-controlNav').css({"display":"none"});	
var galleryloadergif = "<?php echo get_template_directory_uri(); ?>/images/newloader.gif";

//The Colors-------------------------------------------
	var primarytext = "<?php echo $asteria['primtxt_color_id']; ?>";
	var sechovertext = "<?php echo $asteria['sectxt_color_id']; ?>";	
	var menutext = "<?php echo $asteria['menutxt_color_id']; ?>";
	var footwidget ="<?php echo $asteria['footwdgtxt_color_id']; ?>";
	var footwidgethover ="<?php echo $asteria['footwdgtxt_hover_color_id']; ?>";	
	var sidebarcolor ="<?php echo $asteria['sidebartxt_color_id']; ?>";
			
	var primarycolor = "<?php echo $asteria['sec_color_id']; ?>";
	var primardefault = "<?php echo $asteria['prim_color_id']; ?>";
	var sechover = "<?php echo $asteria['sec_color_id']; ?>";
	var socialbuttons ="#cccccc";
	
	

<?php if (!empty ($asteria['hide_tabs'])) { ?>
//Frontpage Tabs
jQuery('#tab-bottom-container').easytabs({transitionIn: 'fadeIn', transitionOut: 'fadeOut', transitionInEasing : 'linear'});
jQuery('#tab-bottom-container .tab').append('<span class="tab_arrow" />');
<?php } ?>
	//Midrow Blocks Equal Width
	if(jQuery('.midrow_block').length == 4){ jQuery('.midrow_blocks').addClass('fourblocks'); }
	if(jQuery('.midrow_block').length == 3){ jQuery('.midrow_blocks').addClass('threeblocks'); }
	if(jQuery('.midrow_block').length == 2){ jQuery('.midrow_blocks').addClass('twoblocks'); }
	if(jQuery('.midrow_block').length == 1){ jQuery('.midrow_blocks').addClass('oneblock'); }


<?php if((!empty($asteria['offline_id']))){ ?>
jQuery(window).ready(function() {jQuery("#countdown_mntnc").countdown({
	date: "<?php echo $asteria['offline_date_id']; ?> <?php echo $asteria['offline_time_id'];?>:00",
	format: "on"});
});
<?php } ?>

<?php if(is_home()) { ?>
	<?php $map = $asteria['home_sort_id']; if(!empty($map['location-map'])){ ?>
	//Map
	jQuery('#asthemap').initMap({type : 'roadmap', options : { zoom: 15, scrollwheel: false }, center : [ <?php echo $asteria['map_latlong_id']; ?> ], markers : { marker1 : { position: [ <?php echo $asteria['map_latlong_id']; ?> ], info_window : { content :'<?php echo $asteria['map_textarea_id']; ?>',showOn: 'mouseover',hideOn: 'mouseout',maxWidth: 250,zIndex: 2} }}});
	//Maps Margin fix when its in the bottom
	jQuery('.home_blocks:last-child').has('.ast_map').addClass('lastmap');
	jQuery('.lastmap .ast_map').css({"marginBottom":"0"});
	<?php } ?>	
<?php } ?>	
<?php if(($asteria['front_layout_id'] == "3") || ($asteria['front_layout_id'] == "6")){ ?>
	<?php if(is_home()) { ?>
	//Layout3 Masonry
	var container = document.querySelector('.lay3_wrap, .lay6_wrap');
	var msnry;
	imagesLoaded( container, function() {
		new Masonry( container, {
	  // options
	  itemSelector: '.hentry'
	});
	});
	<?php } ?>
<?php } ?>

<?php if(($asteria['cat_layout_id'] == "3") || ($asteria['cat_layout_id'] == "6")){ ?>
	<?php if(is_category() || (is_tag()) || (is_archive())) { ?>
	//Layout3 Masonry
	var container = document.querySelector('.lay3_wrap, .lay6_wrap');
	var msnry;
	imagesLoaded( container, function() {
		new Masonry( container, {
	  // options
	  itemSelector: '.hentry'
	});
	});
	<?php } ?>
<?php } ?>


<?php if (!empty ($asteria['ajax_id'])) { ?>
//AJAX PAGINATION
jQuery(document).ready(function(){

jQuery('.ast_pagenav span').replaceWith(function() {
		var pathname = window.location.pathname;
    var url = (jQuery(this).text());
	 <?php global $wp; $current_url = add_query_arg( $wp->query_string, '', home_url('/', $wp->request ) ); ?>
	 if (jQuery("span.page-numbers").prev().length === 0) {
    return '<a class="page-numbers current" href="<?php echo $current_url ?><?php if(is_category() || is_search() || is_author()) { ?>&paged=1<?php }else{ ?>?paged=1<?php } ?>" target="_blank">' + url + '</a>';
	 }else{
		    return '<a class="page-numbers current" href="<?php echo $current_url ?>" target="_blank">' + url + '</a>'; 
	 }
});

jQuery('.ast_pagenav span.page-numbers').each(function () {
	var pathname = window.location.pathname;
	
    var href = jQuery(this).attr('href');
	<?php if(is_category() || is_search() || is_author()) {  ?>
	jQuery(this).attr('href', href + '&paged=1');
	<?php }else{ ?>
    jQuery(this).attr('href', href + '?paged=1');
	<?php } ?>	
});

jQuery('.ast_pagenav a').each(function(){
        
	<?php if(is_category() || is_search() || is_author()) {  ?>
	this.href = this.href.replace('/page/', '&paged=');
	<?php }else{ ?>
    this.href = this.href.replace('/page/', '?paged=');
	<?php } ?>
});
    jQuery('.ast_pagenav a').on('click', function(e)  {
	jQuery('.ast_pagenav a, span.page-numbers').removeClass('current'); // remove if already existant
    jQuery(this).addClass('current');


	e.preventDefault();

	
	<?php wp_reset_query();
	$template = get_post_meta( get_the_ID(), '_wp_page_template', true );
	
	if( is_author() || ($template == 'page-blog.php' ) ){  ?>
	//Layout 4 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay4_inner').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay4_inner .hentry', function(){
    jQuery('.lay4_inner').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 4 Ajax END
	<?php }else{ ?>
	
	
<?php if(($asteria['cat_layout_id'] == "1") && (!is_home())){ ?>
	//Layout 1 Ajax
			var link = jQuery(this).attr('href');
	jQuery('.lay1_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay1_wrap .hentry', function(){
		
	if (jQuery(window).width() < 360) {
		var divs = jQuery(".lay1 .hentry");
		for(var i = 0; i < divs.length; i+=1) {
		  divs.slice(i, i+1).wrapAll("<div class='ast_row'></div>");
		}		
			}else if (jQuery(window).width() < 480) {
		var divs = jQuery(".lay1 .hentry");
		for(var i = 0; i < divs.length; i+=2) {
		  divs.slice(i, i+2).wrapAll("<div class='ast_row'></div>");
		}
			}else{
		var divs = jQuery(".lay1 .hentry");
		for(var i = 0; i < divs.length; i+=3) {
		  divs.slice(i, i+3).wrapAll("<div class='ast_row'></div>");
		}
	}
			  
	if (jQuery(window).width() > 360) {			  
		jQuery('.lay1_wrap').fadeIn(500); 
		jQuery(".hentry").hide().each(function() {
		jQuery(this).fadeIn(500, "easeInSine");
		});
	}
	//Layout 1 Ajax END
<?php }elseif(($asteria['front_layout_id'] == "1") && (is_home())){ ?>
	//Layout 1 Ajax
			var link = jQuery(this).attr('href');
	jQuery('.lay1_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay1_wrap .hentry', function(){
		
	if (jQuery(window).width() < 360) {
		var divs = jQuery(".lay1 .hentry");
		for(var i = 0; i < divs.length; i+=1) {
		  divs.slice(i, i+1).wrapAll("<div class='ast_row'></div>");
		}		
			}else if (jQuery(window).width() < 480) {
		var divs = jQuery(".lay1 .hentry");
		for(var i = 0; i < divs.length; i+=2) {
		  divs.slice(i, i+2).wrapAll("<div class='ast_row'></div>");
		}
			}else{
		var divs = jQuery(".lay1 .hentry");
		for(var i = 0; i < divs.length; i+=3) {
		  divs.slice(i, i+3).wrapAll("<div class='ast_row'></div>");
		}
	}
			  
	if (jQuery(window).width() > 360) {			  
		jQuery('.lay1_wrap').fadeIn(500); 
		jQuery(".hentry").hide().each(function() {
		jQuery(this).fadeIn(500, "easeInSine");
		});
			var divheight = jQuery('.lay1 .ast_row .hentry:eq(0)').outerHeight();
		//jQuery(".ast_row").height(divheight);
		jQuery(window).resize(function() {
		var divheight = jQuery('.lay1 .ast_row .hentry:eq(0)').outerHeight();
		//jQuery(".ast_row").height(divheight);
		});
	}
	//Layout 1 Ajax END
<?php } ?>



<?php if(($asteria['cat_layout_id'] == "2") && (!is_home())){ ?>
	//Layout 2 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay2_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay2_wrap .hentry', function(){
    jQuery('.lay2_wrap').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 2 Ajax END
<?php }elseif(($asteria['front_layout_id'] == "2") && (is_home())){ ?>
	//Layout 2 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay2_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay2_wrap .hentry', function(){
    jQuery('.lay2_wrap').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 2 Ajax END
<?php } ?>

<?php if(($asteria['cat_layout_id'] == "3") && (!is_home())){ ?>
	//Layout 3 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay3_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay3_wrap .hentry', function(){
		
jQuery('.lay3_wrap').masonry({ itemSelector: '.hentry' });
    jQuery('.lay3_wrap').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 3 Ajax END
<?php }elseif(($asteria['front_layout_id'] == "3") && (is_home())){ ?>
	//Layout 3 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay3_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay3_wrap .hentry', function(){
		
jQuery('.lay3_wrap').masonry({ itemSelector: '.hentry' });
    jQuery('.lay3_wrap').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 3 Ajax END
<?php } ?>
	
<?php if(($asteria['cat_layout_id'] == "4") && (!is_home())){ ?>
	//Layout 4 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay4_inner').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay4_inner .hentry', function(){
    jQuery('.lay4_inner').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 4 Ajax END
<?php }elseif(($asteria['front_layout_id'] == "4") && (is_home())){ ?>
	//Layout 4 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay4_inner').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay4_inner .hentry', function(){
    jQuery('.lay4_inner').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 4 Ajax END
<?php } ?>

<?php if(($asteria['cat_layout_id'] == "5") && (!is_home())){ ?>	
	//Layout 5 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay5_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay5_wrap .single_post', function(){
    jQuery('.lay5_wrap').fadeIn(500); 
	jQuery(".single_post").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 5 Ajax END
<?php }elseif(($asteria['front_layout_id'] == "5") && (is_home())){ ?>
	//Layout 5 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay5_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay5_wrap .single_post', function(){
    jQuery('.lay5_wrap').fadeIn(500); 
	jQuery(".single_post").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 5 Ajax END
<?php } ?>

<?php if(($asteria['cat_layout_id'] == "6") && (!is_home())){ ?>	
	//Layout 6 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay6_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay6_wrap .hentry', function(){
		jQuery('.lay6_wrap').masonry({ itemSelector: '.hentry' });
    jQuery('.lay6_wrap').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 6 Ajax END	
<?php }elseif(($asteria['front_layout_id'] == "6") && (is_home())){ ?>
	//Layout 6 Ajax
	var link = jQuery(this).attr('href');
	jQuery('.lay6_wrap').html('<div class="ast_ajaxwrap"><div class="ast_ajax"></div></div>').load(link + '.lay6_wrap .hentry', function(){
		jQuery('.lay6_wrap').masonry({ itemSelector: '.hentry' });
    jQuery('.lay6_wrap').fadeIn(500); 
	jQuery(".hentry").hide().each(function() {
  	jQuery(this).fadeIn(500, "easeInSine");
	});
	//Layout 6 Ajax END	
<?php } ?>	


<?php } ?>	
	
	});

    });

});  // end ready function
<?php } ?>
</script> 