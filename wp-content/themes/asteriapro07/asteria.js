// JavaScript Document
jQuery(window).ready(function() {

	//Text Animation Color
	jQuery('.single_metainfo .catag_list a, .auth_meta, .meta_comm a, .post_meta a').hover(function(){
		jQuery(this).stop().animate({"opacity": "1", "color":sechover }, 200);
	}, function(){
		jQuery(this).stop().animate({ "color":primarytext }, 200);
	});
	//Single Social buttons Animation
	jQuery('.social_buttons div a').hover(function(){
	jQuery(this).find('i').stop().animate({ "color":primarycolor }, 200);
	}, function(){
	jQuery(this).find('i').stop().animate({ "color":socialbuttons }, 200);	
	});
	//Sidebar item hover animation
	jQuery('#sidebar .widgets .widget li').hover(function(){
	jQuery(this).find('a, i').animate({ "color":sechover }, 200);
	}, function(){
	jQuery(this).find('a, i').animate({ "color":primarytext }, 200);	
	});
	//Block Animation
	if (jQuery(window).width() > 480) {
	jQuery('.midrow_block').hover(function(){
	jQuery(this).stop().animate({ "color":sechovertext, "backgroundColor":sechover, "paddingTop":"0px" }, 200);
	jQuery(this).find('.icon_wrap i').animate({ "color":sechovertext }, 200);
	jQuery(this).find('.midrow_block:hover .block_img').animate({ "borderColor":sechovertext }, 200);
	}, function(){
	jQuery(this).stop().animate({ "color":primarytext, "backgroundColor":"transparent", "paddingTop":"2%" }, 200);	
	jQuery(this).find('.icon_wrap i').animate({ "color":"rgba(0, 0, 0, 0.15)" }, 200);
	jQuery(this).find('.midrow_block:hover .block_img').animate({ "borderColor":"rgba(0, 0, 0, 0.15)" }, 200);
	});
	}
	//Related Animation
	jQuery('.nav-box').hover(function(){
		jQuery(this).find('.wporglbl').fadeIn(200);
	}, function(){
		jQuery(this).stop().animate({ "color":primarytext, "backgroundColor":primardefault }, 200);
	});
	//Sidebar & Home Widget Hover Animation
	jQuery('#home_widgets .widget li a, #sidebar .widget li a').hover(function(){
	jQuery(this).stop().animate({ "color":sechover}, 200);
	}, function(){
	jQuery(this).stop().animate({ "color":sidebarcolor}, 200);	
	});
	//Footer Widget color Animation
	jQuery('#footer .widgets .widget ul li a').hover(function(){
	jQuery(this).stop().animate({ "color":footwidgethover}, 200);
	}, function(){
	jQuery(this).stop().animate({ "color":footwidget}, 200);	
	});
	//Footer Menu Animation
	jQuery('#footmenu ul li a').hover(function(){
	jQuery(this).stop().animate({ "color":sechover}, 200);
	}, function(){
	jQuery(this).stop().animate({ "color":primarytext}, 200);	
	});
	//MENU Animation
	if (jQuery(window).width() > 768) {
	jQuery('#topmenu ul > li').hoverIntent(function(){
	jQuery(this).find('.sub-menu:first, ul.children:first').slideDown({ duration: 200});
		jQuery(this).find('a').not('.sub-menu a, ul.children a').stop().animate({"color":primarycolor}, 200);
	}, function(){
	jQuery(this).find('.sub-menu:first, ul.children:first').slideUp({ duration: 200});	
		jQuery(this).find('a').not('.sub-menu a, ul.children a').stop().animate({"color":menutext}, 200);
	
	});

	jQuery('#topmenu ul li').not('#topmenu ul li ul li').hover(function(){
	jQuery(this).addClass('menu_hover');
	}, function(){
	jQuery(this).removeClass('menu_hover');	
	});
	jQuery('#topmenu li').has("ul").addClass('zn_parent_menu');
	jQuery('.zn_parent_menu > a').append('<span><i class="fa-angle-down"></i></span>');
	}
	
	//Slider Navigation Animation
	jQuery('#zn_nivo').hover(function(){
	jQuery(this).find('.nivo-directionNav').stop().animate({ "opacity":"1" }, 300);
	}, function(){
	jQuery(this).find('.nivo-directionNav').stop().animate({ "opacity":"0" }, 300);	
	});
	
	//Slider empty content
	jQuery('.acord_text p:empty, .acord_text h3 a:empty, .uninner h3 a:empty, .nivoinner h3 a:empty').css({"display":"none"});

//Widget image opacity animation
jQuery('.widget_wrap a img').hover(function(){
	jQuery(this).stop().animate({ "opacity":"0.7" }, 300);
	}, function(){
	jQuery(this).stop().animate({ "opacity":"1" }, 300);	
});

	
//Layout1 Animation
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

jQuery('.lay1 .postitle a:empty').closest("h2").addClass('no_title');
jQuery('.no_title').css({"padding":"0"});


//Pagination
if ( jQuery('.ast_pagenav').children().length < 7 ) {
jQuery('.ast_pagenav .page-numbers:last-child').css({'marginRight':'0'});
jQuery('.ast_pagenav .page-numbers').wrapAll('<div class="pagi_border" />');
jQuery('.pagi_border').append('<dt />');
var sum=0;
jQuery('.ast_pagenav .page-numbers').each( function(){ sum += jQuery(this).outerWidth( true ); });
jQuery('.ast_pagenav .pagi_border').width( sum );
}

//Call to Action 
jQuery('.home_action_left').each(function (){
    var callheight = jQuery(this) .height();
        jQuery('.home_action_right') .css({'height': callheight});
});


//Related Tabs
    if (jQuery('#ast_related:has(*)').length) {
		jQuery('#ast_related').easytabs({transitionIn: 'fadeIn', transitionOut: 'fadeOut', transitionInEasing : 'linear'});
	}else{
		jQuery('#ast_related_wrap').remove(); 		
	}


// TO_TOP
jQuery(window).bind("scroll", function() {
    if (jQuery(this).scrollTop() > 800) {
        jQuery(".to_top").fadeIn('slow');
    } else {
        jQuery(".to_top").fadeOut('fast');
    }
});
jQuery(".to_top").click(function() {
  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});


//Sidebar widget padding fix
jQuery('.widget').not(':has(.widgettitle)').addClass('untitled');
jQuery('.rel_eq').equalHeights();

//Hide Homepage Elemnts if empty
jQuery('.home_blocks').each(function () {
	if(jQuery(this).html().length > 3) {
		jQuery(this).addClass('activeblock');
		}
});


jQuery('.lay1, .lay2, .lay3, .lay4, .lay5, .lay6').not(':has(.hentry)').css({"display":"none"});


//WAYPOINT ANIMATIONS
if (jQuery(window).width() > 480) {	
jQuery('.home_tabs .center, .midrow_block, .home .lay4').css({"opacity":"0", "marginTop":"60px"});

jQuery('.midrow_block').css({"marginTop":"60px"})
jQuery('.midrow_blocks').waypoint(function() {
  jQuery('.midrow_block:eq(0)').animate({"opacity":"1", "marginTop":"0px"});
    jQuery('.midrow_block:eq(1)').delay(150).animate({"opacity":"1", "marginTop":"0px"});
	  jQuery('.midrow_block:eq(2)').delay(300).animate({"opacity":"1", "marginTop":"0px"});
	    jQuery('.midrow_block:eq(3)').delay(450).animate({"opacity":"1", "marginTop":"0px"});
  
}, { offset: '80%' });

//Posts Animation
jQuery('.home .lay1 .hentry:eq(0) , .home .lay1 .hentry:eq(1) , .home .lay1 .hentry:eq(2), .homeposts_title').css({"opacity":"0","marginTop":"60px"})
jQuery('.home .lay1').waypoint(function() {
  jQuery('.home .homeposts_title').animate({"opacity":"1", "marginTop":"0px"});
  	jQuery('.home .lay1 .hentry:eq(0)').delay(150).animate({"opacity":"1", "marginTop":"0px"});
    	jQuery('.home .lay1 .hentry:eq(1)').delay(300).animate({"opacity":"1", "marginTop":"0px"});
	 		jQuery('.home .lay1 .hentry:eq(2)').delay(450).animate({"opacity":"1", "marginTop":"0px"});
  }, { offset: '90%' });

//Call to Action
jQuery('.home_action').css({"opacity":"0"})
jQuery('.home_action').waypoint(function() {
  jQuery(this).animate({"opacity":"1"});}, { offset: '90%' });

//Home Widgets Animation
jQuery('#home_widgets .widget:eq(0) , #home_widgets .widget:eq(1) , #home_widgets .widget:eq(2)').css({"opacity":"0","marginTop":"60px"})
jQuery('#home_widgets').waypoint(function() {
  jQuery('#home_widgets .widget:eq(0)').animate({"opacity":"1", "marginTop":"0px"});
    jQuery('#home_widgets .widget:eq(1)').delay(150).animate({"opacity":"1", "marginTop":"0px"});
	  jQuery('#home_widgets .widget:eq(2)').delay(300).animate({"opacity":"1", "marginTop":"0px"});
  
}, { offset: '90%' });

jQuery('.home_tabs .center, .lay4').waypoint(function() {
  jQuery(this).animate({"opacity":"1", "marginTop":"0px"});
}, { offset: '90%' });
}

//Layout6 Animation
	jQuery('.lay6 .hentry .imgwrap').hoverIntent(function(){
	jQuery(this).find('.postitle').fadeOut(200);
	jQuery(this).find('.postitle').delay(50).css({"display":"none","width":"92%", "height":"80%", "paddingTop":"20%", "textAlign":"center", "background":"rgba(0, 0, 0, 0.4)", "bottom":"-10px"});
	jQuery(this).find('.postitle').fadeIn(200);
	var titlehref= jQuery(this).find('.postitle a').attr('href');
	jQuery(this).find('.postitle a').append('<div class="icon_wrap"><div class="icon_round"><a href="'+titlehref+'"><i class="fa-link fa-2x"></i></a></div></div>')
	}, function(){
	jQuery(this).find('.postitle').css({"display":"none","width":"auto%", "height":"auto", "paddingTop":"0", "textAlign":"left", "background":"none", "bottom":"0px"});
	jQuery(this).find('.postitle').delay(10).fadeIn(400);
	jQuery(this).find(".icon_wrap").remove();
	});



//Next Previous post button Link
    var link = jQuery('.ast-next > a').attr('href');
    jQuery('.right_arro').attr('href', link);

    var link = jQuery('.ast-prev > a').attr('href');
    jQuery('.left_arro').attr('href', link);

//Gallery Template
jQuery("#sidebar .widget_pages ul li a, #sidebar .widget_meta ul li a, #sidebar .widget_nav_menu ul li a, #sidebar .widget_categories ul li a, #sidebar .widget_recent_entries ul li a, #sidebar .widget_recent_comments ul li, #sidebar .widget_archive ul li, #sidebar .widget_rss ul li").prepend('<i class="fa-double-angle-right"></i> ')
jQuery('#sidebar .fa-double-angle-right').css({"opacity":"0.5"})

//Columns Shortcode Clear
jQuery('.col2:eq(1), .col2:eq(3), .col2:eq(5), .col2:eq(7), .col2:eq(9), .col2:eq(11), .col2:eq(13), .col2:eq(15)').after('<div style="clear:both" />');
jQuery('.col3:eq(2), .col3:eq(5), .col3:eq(8), .col3:eq(11), .col3:eq(14), .col3:eq(17), .col3:eq(20), .col3:eq(23)').after('<div style="clear:both" />');
jQuery('.col4:eq(3), .col4:eq(7), .col4:eq(11), .col4:eq(15), .col3:eq(19), .col4:eq(23), .col4:eq(27), .col4:eq(31)').after('<div style="clear:both" />');

//Responsive Video Shortcode

jQuery('.vid_iframe').each(function () {
	var vidheights = jQuery(this).height();
jQuery(this).closest('.ast_vid').css({ 'height':vidheights});

});

//Shortcode JS
//Tabs Javascript
 jQuery(".lgn_tab p:empty").remove();
 var i = 1; 
 jQuery(".tabs-container .tabli a").each(function (){jQuery(this).attr('href', '#tab-'+i+''); i++;});
 	
 var i = 1; 
 jQuery(".lgn_tab div").each(function (){jQuery(this).attr('id', 'tab-'+i+''); i++;});
	
 var i = 1; 
 jQuery(".tabs-container").each(function (){jQuery(this).attr('id', 'tabs-container_'+i+''); i++;});

jQuery('#tabs-container_1, #tabs-container_2, #tabs-container_3, #tabs-container_4, #tabs-container_5, #tabs-container_5').easytabs();
	
	//Toggle Shortcode
	jQuery('.lgn_toggle_content').hide(); // Hide even though it's already hidden
	jQuery('.trigger').click(function() {
    jQuery(this).closest('.lgn_toggle').find('.lgn_toggle_content').slideToggle("fast"); // First click should toggle to 'show'
	  return false;
   });
   	jQuery('.lgn_toggle a').toggle(function(){
	jQuery(this).addClass('down');
	}, function(){
	jQuery(this).removeClass('down');	
	});

//Mobile Menu

	//jQuery("#topmenu").attr("id","sidr");
	var padmenu = jQuery("#simple-menu").html();
	jQuery('#simple-menu').sidr({
      name: 'sidr-main',
      source: '#topmenu'
    });
	jQuery(".sidr").prepend("<div class='pad_menutitle'>"+padmenu+"<span><i class='fa-times'></i></span></div>");
	
	jQuery(".pad_menutitle span").click(function() {
		jQuery.sidr('close', 'sidr-main')
		preventDefaultEvents: false;
		
});


//NivoSlider Navigation Bug Fix
if (jQuery(window).width() < 480) {
	jQuery(".nivo-control").text('');
}

//slider porgressbar loader
jQuery(function () {
    var n = 0,
        $imgs = jQuery('.slider-wrapper img'),
        val = 100 / $imgs.length,
        $bar = jQuery('#astbar');
		$progrssn = jQuery('.progrssn');

    $imgs.load(function () {
        n = n + val;
        // for displaying purposes
		$progrssn.width(n + '%');
		var numTruncated = parseFloat(n).toFixed(1);
        $bar.text(numTruncated);
    });
    
});
jQuery('.slider-wrapper').waitForImages(function() {
	jQuery("#zn_nivo, .nivo-controlNav, #slide_acord, .nivoinner").css({"display":"block"});
    jQuery(".pbar_wrap").fadeOut();
});

jQuery(window).load(function(){
jQuery('.nivo-controlNav').css({"display":"block"});
});	
//load yanone font by default
if (jQuery('#redux-google-fonts-css').length){}else{
    jQuery("h2, .mid_block_content h3, .widgettitle, .postitle, body .fixed_site .header4 #topmenu ul li a, .text_block, .lay1_title h3, #sidebar .widget .widgettitle, .left_arro, .right_arro, #submit, .widget_calendar caption, .rel_content a, #ast_related ul li a, .fourofour a").attr('style', 'font-family: "kaffeesatzthin"!important');
}

//Remove margin from homeblocks after ast_blocks
jQuery(".ast_blocks").next('.home_blocks').css({"marginTop":"0"});
});