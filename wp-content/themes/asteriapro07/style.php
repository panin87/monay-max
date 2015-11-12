<?php global $asteria;?>
<style type="text/css">
/*USER'S CUSTOM CSS---------------------------------------------------------*/
<?php if ( ! empty ( $asteria['custom-css'] ) ) { ?><?php echo $asteria['custom-css']; ?><?php } ?>
/*---------------------------------------------------------*/

<?php if(($asteria['site_width_id'] == "1")) {?>
body .fixed_site .header .center{width:100%!important;}
.single #content{ margin-top:10px;}
.header , .header2, .header3, .header4{ margin-top:30px;}
.widget_corner{ display:none;}
.page #content{ margin-top:20px;}
.edit_wrap{border-color: transparent;}
.comments_template{ margin-bottom:40px;}

#sidebar { border-left:1px solid rgba(0, 0, 0, 0.05);}
#sidebar .widget{ padding-bottom:0px!important}
.page-template-page-leftsidebar-php #sidebar{border-right:1px solid rgba(0, 0, 0, 0.05);border-left:none;}
.page-template-page-leftsidebar-php #sidebar .widget_wrap{ padding-left:0!important;}
#sidebar .widget .widgettitle, #home_widgets .widget .widgettitle{text-align: right;padding-bottom: 30px;border-bottom: 1px solid; border-color:rgba(0, 0, 0, 0.05);}
#sidebar .widget{ background:none!important; padding-bottom:0;}
#sidebar .widget_wrap{width:88%!important; padding:0!important; padding-left:12%!important;}
#sidebar #searchform div{border:1px solid rgba(0, 0, 0, 0.05)}

.fixed_site{width: 80%;margin: 0 auto;}
body .fixed_site .center, body .fixed_site .midrow_wrap, body .fixed_site .header3 .top_head .center{ width:95%!important;}
.fixed_wrap{width: 100%;float: left;background: #fff;}
.fixed_site #footer{ margin-top:0;}
.footefixed{ margin-bottom:40px;}

.single_post{ background:none;}
.lay3 .hentry{ margin-bottom:15px;}
.lay4 .hentry, .lay5 .single_post{border-bottom:1px solid rgba(0, 0, 0, 0.07); background:none;}
.lay4 .hentry:last-child, .lay5 .single_post:last-child{border:none;}
.author_posts{ background:none;border-bottom: 1px solid rgba(0, 0, 0, 0.07);border-top: 1px solid rgba(0, 0, 0, 0.07);}
.lay5 .single_post{ margin-bottom:0;}
.more-link, .moretag{background: rgba(0, 0, 0, 0.07);}
.lay2 .hentry, .lay3 .hentry{background: rgba(0, 0, 0, 0.03);}
.author #content{ margin-top:0!important;}

#ast_nextprev{ margin-top:0;border-bottom: 1px solid rgba(0, 0, 0, 0.07);}
.share_this, #ast_related{border-bottom: 1px solid rgba(0, 0, 0, 0.07);border-top: 1px solid rgba(0, 0, 0, 0.07); background:none;}
.comments_template #comments, #comments_ping, #reply-title{border-bottom: 1px solid rgba(0, 0, 0, 0.07); padding-bottom:20px; border-top:none;}

.comment-body{border-bottom: 1px solid rgba(0, 0, 0, 0.07);}
.comment-form-comment textarea, .comm_wrap input{background: rgba(0, 0, 0, 0.03);border: 1px solid rgba(0, 0, 0, 0.07);-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.03) inset;-moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.03) inset;box-shadow: 0 0 5px rgba(0, 0, 0, 0.03) inset;}

.ast_pagenav .current{color: #fff;background: <?php echo $asteria['sec_color_id']; ?>;}
.ast_pagenav .pagi_border dt{ background:rgba(0, 0, 0, 0.1);}
.home_tabs{ background:none;}

#sidebar .widget .widgettitle{ margin-right:10%;}
#accordion img{ max-width:940px!important;}
body .fixed_site .header3 .center{width:100%!important;}

.comment-form-comment textarea, .comm_wrap input{border-top: 1px solid rgba(0, 0, 0, 0.1)!important;border-left: 1px solid rgba(0, 0, 0, 0.1)!important;border-right: 1px solid rgba(0, 0, 0, 0.1)!important;}
#sidebar .widget{ margin-top:20px;}
.edit_wrap{ border-color:transparent;}
body .share_this{ background-color:transparent!important;}
body .author_posts{ background:none!important;}
.ast_map{ margin-bottom:0!important;}
.lay1 .ast_vid, .lay2 .ast_vid, .lay3 .ast_vid, .lay4 .ast_vid, .lay6 .ast_vid{ max-height:235px;}
.page-numbers{ background-color:rgba(0, 0, 0, 0.02)!important;}
body #home_widgets .widget{background-color: transparent!important;border: 1px solid rgba(0, 0, 0, 0.04);}
body #home_widgets .widget{width:30.6%!important;}
<?php } ?>
/*-----------------------------Single Post Background------------------------------------*/
<?php if ( is_single() || is_page() ) { ?>
body.postid-<?php global $wp_query; $postid = $wp_query->post->ID; echo $postid;?>, body.page-id-<?php global $wp_query; $postid = $wp_query->post->ID; echo $postid;?>{ 
background:<?php global $wp_query; $postid = $wp_query->post->ID; $bgcolor = get_post_meta( $postid, 'ast_bg_color_id', true );?> <?php if ( ! empty ( $bgcolor ) ) { ?> <?php echo $bgcolor ?> <?php } ?>
<?php global $wp_query; $postid = $wp_query->post->ID; $imgbg = get_post_meta( $postid, 'ast_bg_field', true ); ?>
<?php if ( ! empty ( $imgbg ) ) { ?>url('<?php echo $imgbg['url'];?>') <?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta( $postid, 'ast_radio_field_id3', true );?> <?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta( $postid, 'ast_radio_field_id4', true );?>
<?php } ?>!important;}

<?php } ?>
/*-----------------------------INDIVIDUAL PAGE HEADER------------------------------------*/
<?php if ( is_single() || is_page() ) { ?>
<?php global $wp_query; $postid = $wp_query->post->ID; $headbg = get_post_meta( $postid, 'ast_head_field', true ); ?>
<?php if ( ! empty ( $headbg ) ) { ?>
body.page-id-<?php global $wp_query; $postid = $wp_query->post->ID; echo $postid;?> .page_tt{ background:url('<?php echo $headbg['url'];?>') <?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta( $postid, 'ast_radio_field_id6', true );?>!important; <?php if ( ! empty ( $headbg ) ) { ?>
min-height: <?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta( $postid, 'ast_headheight', true );?>}
<?php } ?>
<?php } ?>
body.page-id-<?php global $wp_query; $postid = $wp_query->post->ID; echo $postid;?> .page_tt h1{text-align:<?php global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta( $postid, 'ast_pagetitle', true );?>!important;}
<?php } ?>

/*--------------SLIDER HEIGHT---------------*/
#zn_nivo, .slider-wrapper, .slide_wrap, .banner ul li, #accordion, .kwicks li, #accordion{height:<?php echo $asteria['slide_height']; ?>!important;}
#accordion, .kwicks.horizontal li{min-height:<?php echo $asteria['slide_height']; ?>!important;}
/*--------------CALL TO ACTION---------------*/
.home_action{background:<?php echo $asteria['callbg_color_id']; ?>!important;}
.home_action_button{background:<?php echo $asteria['callbttn_color_id']; ?>!important; }
.home_action_button a{color:<?php echo $asteria['callbttntext_color_id']; ?>!important;}

/*------------------------------------SITE TITLE------------------------------------------*/
<?php $logofont = $asteria['logo_font_id']; ?>
.logo h1, .logo h2{font-size:<?php echo $logofont['font-size']; ?>!important;}
.logo h1 a, .logo h2 a, .ast_maintanace .logo h1 a{font-family:'<?php echo $logofont['font-family']; ?>'!important;color:<?php echo $logofont['color']; ?>!important; font-weight:<?php echo $logofont['font-weight']; ?>!important;}

.nivo-caption h3, #accordion h3, .banner .sld_layout2 h3, .banner .sld_layout3 h3{font-family:'<?php echo $logofont['font-family']; ?>'!important;}
.sld_layout2 h3, .sld_layout3 h3, .acc-sld_layout2 h3, .acc-sld_layout3 h3, .wrap-sld_layout2 h3, .wrap-sld_layout3 h3{font-size:<?php echo $asteria['slidefont_size_id']; ?>!important;}
/*---------------TYPOGRAPHY------------*/
/*Content Font*/
<?php if (!empty ($asteria['content_font_id'])) { ?>
<?php $bodyfont = $asteria['content_font_id'];  ?>
body{font-family:'<?php echo $bodyfont['font-family']; ?>', Arial, Helvetica!important; font-size:<?php echo $bodyfont['font-size']; ?>!important;}
<?php  } ?>
body{ color:<?php echo $asteria['primtxt_color_id']; ?>!important;}

/*Post Title Font*/
<?php if (!empty ($asteria['ptitle_font_id'])) { ?>
<?php $ptitlefont = $asteria['ptitle_font_id']; ?>
h1, h2, h3, h4, h5, h6, #topmenu ul li a, .text_block, .lay1_title h3, #sidebar .widget .widgettitle, .left_arro, .right_arro, #submit, .widget_calendar caption, .rel_content a, #ast_related ul li a, .fourofour a{font-family:'<?php echo $ptitlefont['font-family']; ?>', Arial, Helvetica!important; font-weight:normal;}

/*Woocommerce*/
.woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3{font-family:'<?php echo $ptitlefont; ?>', Arial, Helvetica!important;}
<?php  } ?>

/*Menu Font Size*/
body #topmenu ul li a{ font-size:<?php echo $asteria['menu_size_id']; ?>!important;}
body #topmenu ul li ul li a{ font-size:16px!important;}
/*Post Title Font Size*/
.lay1 h2.postitle a, .lay2 h2.postitle a, .lay3 h2.postitle a, .lay4 h2.postitle a, .lay5 h2.postitle a, .lay6 h2.postitle a{ font-size:<?php echo $asteria['ptitle_size_id']; ?>;font-weight:<?php echo $asteria['ptitle_weight_id']; ?>!important;}

body .page_tt .postitle{font-size:<?php echo $asteria['pgtitle_size_id']; ?>!important; font-weight:<?php echo $asteria['pgtitle_weight_id']; ?>!important;}


/*------------------------------------ROUNDED CORNERS------------------------------------------*/
<?php if (!empty ($asteria['rounded_id'])) { ?>
.midrow_block, .lay1 .hentry img, .lay1 .imgwrap, .lay1 .img_hover, .lay1 .post_image, .lay1 .hentry, .home_action, .home_action_button, .page .single_post, .single_post, #sidebar .widget, #sidebar #searchform div, #sidebar #searchsubmit, #footer #searchsubmit, #submit, .comment-form-comment textarea, #ast_nextprev, #ast_nextprev .ast-next img, .related_img img, #ast_related, .avatar img, .related_img, .comment-body, .comm_wrap input, .ast_bioimg, .tabs-container, .lgn_toggle, .trigger_wrap, .lgn_scs, .lgn_info, .lgn_wng, .lgn_err, .ast_table, .single_post .scl_button a, .ast_shrt_action, .act_right a, .ast_slide_wrap .ast_slider, .ast_slider .nivo-caption, .lay4 .hentry, .lay4 .post_image, .lay4 .hentry img, .entry-content .cont_inpt, .entry-content textarea, .contact_submit input, .entry-content .contact_verify input, .lay2 .hentry, .lay2 .imgwrap, .lay3 .imgwrap, .lay3 .hentry, .lay3 .hentry img, .lay5 .single_post, .nivo-caption .sld_layout1 h3 a, .nivo-caption .sld_layout1 p, .banner .sld_layout1 p, .banner .sld_layout1 h3 a, .acc-sld_layout1 h3 a, .acc-sld_layout1 p, .share_this, .under-construction-inner, .ast_countdown li, #home_widgets .widget, .search_term{-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;}


#sidebar .widget, #ast_related{ overflow:hidden;}

.ast-prev, .left_arro, .search_term #searchform #s, .error_msg #searchform #s{-webkit-border-radius: 5px 0 0 5px;-moz-border-radius: 5px 0 0 5px;border-radius: 5px 0 0 5px;}
.ast-next, .right_arro, .search_term #searchsubmit, .error_msg #searchsubmit{-webkit-border-radius: 0 5px 5px 0;-moz-border-radius: 0 5px 5px 0;border-radius: 0 5px 5px 0;}

.lgn_toggle_content, .footefixed, .author_posts{-webkit-border-radius: 0 0 5px 5px;-moz-border-radius: 0 0 5px 5px;border-radius: 0 0 5px 5px;}

.tabs-container .tabs, .author_div{-webkit-border-radius: 5px 5px 0 0;-moz-border-radius: 5px 5px 0 0;border-radius: 5px 5px 0 0;}
.more-link, .moretag{-webkit-border-radius: 5px 0 0 0;-moz-border-radius: 5px 0 0 0;border-radius: 5px 0 0 0;}

<?php if(($asteria['site_width_id'] == "1")) {?>
.header5 #topmenu, .fixindex{-webkit-border-radius: 5px 5px 0 0;-moz-border-radius: 5px 5px 0 0;border-radius: 5px 5px 0 0;}
#slidera{width:100.05%;}
<?php } ?>

<?php if(($asteria['site_width_id'] == "2")) {?>
body .single_post{-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;}
<?php } ?>

<?php if (!empty ($asteria['social_single_id'])  && ($asteria['site_width_id'] == "1")) { ?>
body .single_post{-webkit-border-radius:5px 5px 0 0 ; -moz-border-radius:5px 5px 0 0 ; border-radius:5px 5px 0 0 ;}
<?php } ?>


<?php if(($asteria['head_type_id'] == "head1")) {?>
.head_soc a:last-child{-webkit-border-radius: 0 5px 0 0;-moz-border-radius: 0 5px 0 0;border-radius: 0 5px 0 0;}
.head_soc {-webkit-border-radius: 0 5px 0 5px;-moz-border-radius: 0 5px 0 5px;border-radius: 0 5px 0 5px;}

	<?php if(($asteria['site_width_id'] == "1")) {?>
	#zn_nivo, .slider-wrapper, .slide_wrap, .page_tt, .singlefx, #slide_acord{-webkit-border-radius: 5px 5px 0 0;-moz-border-radius: 5px 5px 0 0;border-radius: 5px 5px 0 0;}
	<?php } ?>
<?php } ?>


.header2, .header3, .header3 .top_head, .header4{-webkit-border-radius: 5px 5px 0 0;-moz-border-radius: 5px 5px 0 0;border-radius: 5px 5px 0 0;}
.header2 .head_soc a, .header3 .head_soc a{ -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;}
<?php } ?>
/*------------------------------------DROP SHADOW------------------------------------------*/
<?php if (!empty ($asteria['shadow_id'])) { ?>
<?php if(($asteria['site_width_id'] == "1")) {?>
.fixindex, .footefixed, .singlefx{-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);}
<?php } ?>

<?php if(($asteria['site_width_id'] == "2")) {?>
.lay1 .post_image, .home_action, .home_action_button, .page .single_post, .single_post, #sidebar .widget, #sidebar #searchsubmit, #footer #searchsubmit, #submit, .comment-form-comment textarea, #ast_nextprev, #ast_nextprev .ast-next img, .related_img img, #ast_related, .avatar img, .related_img, .comment-body, .comm_wrap input, .ast_bioimg, .tabs-container, .lgn_toggle, .trigger_wrap, .lgn_scs, .lgn_info, .lgn_wng, .lgn_err, .ast_table, .single_post .scl_button a, .ast_shrt_action, .act_right a, .ast_slide_wrap .ast_slider, .ast_slider .nivo-caption, .lay4 .post_image, .lay2 .imgwrap, .lay3 .hentry, .lay5 .single_post, .nivo-caption .sld_layout1 h3 a, .nivo-caption .sld_layout1 p, .banner .sld_layout1 p, .banner .sld_layout1 h3 a, .acc-sld_layout1 h3 a, .acc-sld_layout1 p, .under-construction-inner, .ast_countdown li, #home_widgets .widget, .search_term, .page-numbers, .header4, .header2, .lay4 .hentry{-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);}

.entry-content .cont_inpt, .entry-content textarea, .contact_submit input, .entry-content .contact_verify input, #sidebar #searchform div, .comm_wrap input, .comment-form-comment textarea{-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2) inset ;-moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.2) inset;box-shadow: 0 0 3px rgba(0, 0, 0, 0.2) inset;}

.page_tt{-webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2) inset;-moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2) inset;box-shadow: 0 0 15px rgba(0, 0, 0, 0.2) inset;}
<?php } ?>
<?php } ?>
/*------------------------------------ELEMENTS COLORS------------------------------------------*/
/*SOCIAL SHARE BUTTONS COLOR*/
body .social_buttons div i, body .social_buttons div a{color:<?php echo $asteria['social_color_id']; ?>!important;}

/*PRIMARY ELEMENT*/
#ast_nextprev, #ast_related ul li.active, .single_post .tabs li.active, .single_post .tabs li, .trigger_wrap, .single_post, .comment-body, #ast_related, #ast_related ul, .comm_wrap input, .comment-form-comment textarea, .lay4 .hentry, .lay2 .hentry, .lay3 .hentry, .search_term, .author_div, .to_top, .ast_blocks{background-color:<?php echo $asteria['prim_color_id']; ?>!important;}

<?php if(($asteria['site_width_id'] == "1")) {?>
.fixed_wrap{background-color:<?php echo $asteria['prim_color_id']; ?>!important;}
<?php } ?>
.widget_corner{border-color: transparent transparent <?php echo $asteria['prim_color_id']; ?> transparent!important;}

/*SECONDARY ELEMENT*/
.header4 #topmenu ul li:hover, .nivo-caption .sld_layout1 p, .banner .sld_layout1 p, .acc-sld_layout2 p, .header4 #topmenu .sub-menu, .acc-sld_layout1 p{ border-color:<?php echo $asteria['sec_color_id']; ?>!important;}
#topmenu ul li ul li a:hover, .nivo-caption .sld_layout1 h3 a, .nivo-controlNav a.active, .banner .sld_layout1 h3 a, .acc-sld_layout1 h3 a, .tab.active, .thn_post_wrap .more-link:hover, .moretag:hover, #submit, .page_tt, #searchsubmit, .contact_submit input, .pad_menutitle, .to_top:hover, .page-numbers:hover, .ast_pagenav .current, .progrssn, #simple-menu, .wpcf7-submit{background-color:<?php echo $asteria['sec_color_id']; ?>!important;}

.nivo-caption p a, .banner .sld_layout1 p a, .banner .sld_layout2 p a, .banner .wrap-sld_layout3 p a, .acord_text p a, .lay2 h2 a, .lay3 h2 a, .lay4 h2 a, .lay5 .postitle a, #ast_nextprev .ast-prev:hover .left_arro i, #ast_nextprev .ast-next:hover .right_arro i, .rel_content a, #reply-title small a, .logged-in-as a, .thn_post_wrap a:link, .thn_post_wrap a:visited, .single_metainfo a i:hover, .edit_wrap i:hover, .single_post .postitle, #sidebar .widget .widgettitle, #sidebar .widget .widgettitle a, #home_widgets .widget a:link, #home_widgets .widget a:visited, #home_widgets .widget .thn_wgt_tt, #sidebar .widget .thn_wgt_tt, #footer .widget .thn_wgt_tt, .widget_calendar td a, .astwt_iframe a, .ast_countdown li, .ast_biotxt a, .ast_bio .ast_biotxt h3, .search_term h2, .author_right h2, .author_right a, #contact_block .widgettitle, #contact_block a:link, #contact_block a:visited, .copytext a, .ast_maintanace .logo h1 a, #ast_nextprev .ast-prev:hover .left_arro i, #ast_nextprev .ast-next:hover .right_arro i, .single_metainfo a:hover, .post_meta a:hover, .social_buttons div a:hover i, .social_buttons div a:hover, .widgets p a, .tagcloud a, .text_block a:link, .text_block a:visited{color:<?php echo $asteria['sec_color_id']; ?>!important;}



.rel_content .rel_more:hover{border-color: transparent transparent <?php echo $asteria['sec_color_id']; ?> transparent!important;}
.tab.active .tab_arrow{border-color: <?php echo $asteria['sec_color_id']; ?> transparent transparent transparent!important;}

.single_post_content a{ color:<?php echo $asteria['sec_color_id']; ?>!important;}

.midrow_block:hover .mid_block_content a, .midrow_block:hover h3{color:<?php echo $asteria['sectxt_color_id']; ?>!important;}
.midrow_block:hover .block_img{border-color:<?php echo $asteria['sectxt_color_id']; ?>!important;}

/*SIDEBAR COLOR*/
<?php if(($asteria['site_width_id'] == "2")) {?>
#home_widgets .widget, #sidebar .widget{ background-color:<?php echo $asteria['sidebar_color_id']; ?>!important;}
<?php } ?>
#home_widgets .widget, .page-numbers{ background-color:<?php echo $asteria['sidebar_color_id']; ?>!important;}

.more-link, .moretag, .left_arro, .right_arro, .share_this, .commentlist .logged-in-as, .author_posts, #contact_block .widget, .under-construction-inner #countdown_mntnc li, .gall_dash{ background-color:<?php echo $asteria['sidebar_color_id']; ?>!important;}

.edit_wrap{border-color: transparent <?php echo $asteria['sidebar_color_id']; ?> transparent transparent!important;}
.rel_content .rel_more{border-color: transparent transparent <?php echo $asteria['sidebar_color_id']; ?> transparent!important;}
<?php if(($asteria['site_width_id'] == "2")) {?>
.comm_wrap input, .comment-form-comment textarea{ border-bottom-color:<?php echo $asteria['sidebar_color_id']; ?>!important;}
<?php } ?>
/*HEADER COLOR*/
.header2, .header3, .header4, .header3 #topmenu, .header5 #topmenu, .header3 .top_head{ background-color:<?php echo $asteria['head_color_id']; ?>!important;}

/*FOOTER COLOR*/
#footer{ background-color:<?php echo $asteria['footer_color_id']; ?>!important;}

/*Post Icons Color*/
.rel_content .rel_more i, .single_metainfo i, .comm_meta_reply i{}

/*Leave a Reply Text Color*/
.comments_template #comments, #comments_ping, #reply-title, .related_h3{ color:<?php echo $asteria['leavreplytxt_color_id']; ?>!important;}

/*Single Post icons Color*/
.single_metainfo i{color:<?php echo $asteria['posticon_color_id']; ?>!important;}
/*Footer Social Color*/
.head_soc a{color:<?php echo $asteria['social_color_id']; ?>!important;}

/*------------------------------------TEXT COLORS------------------------------------------*/
/*Body Text Color*/
body, .single_metainfo, .single_post .single_metainfo a, .midrow_blocks a{color:<?php echo $asteria['primtxt_color_id']; ?>!important;}

/*Menu Text Color*/
body .header a, body .header2 a, body .header3 a, body .header4 a, body .header5 a, body .header2 .head_contact, body .head_contact, body .topsearch #s{ color:<?php echo $asteria['menutxt_color_id']; ?>;}

/*Text Color on Secondary Element*/
#submit, #searchsubmit, .page_tt, body #topmenu ul li ul li a:hover, .tab a.active, #ast_nextprev .ast-prev:hover .left_arro, #ast_nextprev .ast-next:hover .right_arro, .page-numbers:hover, .more-link, .moretag, #simple-menu, #simple-menu i{color:<?php echo $asteria['sectxt_color_id']; ?>!important;}

#topmenu ul li ul li a{color:<?php echo $asteria['submenutxt_color_id']; ?>;background: <?php echo $asteria['head_color_id']; ?> url("<?php echo get_template_directory_uri(); ?>/images/submenu.png") repeat!important;}

.nivo-caption .sld_layout1 h3 a, .nivo-controlNav a.active, .banner .sld_layout1 h3 a, .acc-sld_layout1 h3 a, .tab.active, .thn_post_wrap .more-link:hover, .moretag:hover, #submit, .page_tt, #searchsubmit, .contact_submit input, .pad_menutitle, .to_top:hover, .page-numbers:hover, .ast_pagenav .current, .progrssn, #simple-menu{color:<?php echo $asteria['sectxt_color_id']; ?>!important;}

/*Sidebar Text Color*/
.more-link, .moretag, #sidebar .widget, #home_widgets .widget a:link, #home_widgets .widget a:visited, #home_widgets{color:<?php echo $asteria['sidebartxt_color_id']; ?>!important;}

#sidebar .widget, #home_widgets .widget a:link, #home_widgets .widget a:visited, #home_widgets .widget{color:<?php echo $asteria['sidebartxt_color_id']; ?>!important;}

/*Post Title, Sidebar Widget Titles,*/
#sidebar .widget .widgettitle, #home_widgets .widget .widgettitle, .single_post .postitle, .ast_bio .ast_biotxt h3, .ast_biotxt a, .rel_content a, .copytext a, .thn_post_wrap a:link, .thn_post_wrap a:visited, .widget_calendar td a, #home_widgets .widget .thn_wgt_tt, #sidebar .widget .thn_wgt_tt, #footer .widget .thn_wgt_tt, .nivo-caption p a, .banner .sld_layout1 p a, .banner .sld_layout2 p a, .banner .wrap-sld_layout3 p a, .acord_text p a, .lay2 h2 a, .lay3 h2 a, .lay4 h2 a, .lay5 .postitle a, #ast_nextprev .ast-prev:hover .left_arro i, #ast_nextprev .ast-next:hover .right_arro i, .rel_content a, #reply-title small a, .logged-in-as a, .thn_post_wrap a:link, .thn_post_wrap a:visited, .single_metainfo a i:hover, .edit_wrap i:hover, .widget_calendar td a, .astwt_iframe a, .ast_countdown li, .search_term h2, .author_right h2, .author_right a, #contact_block .widgettitle, #contact_block a:link, #contact_block a:visited, .copytext a, .commentmetadata a{color:<?php echo $asteria['sec_color_id']; ?>!important;}

/*Woocommerce*/
.woocommerce div.product .product_title, .woocommerce-page div.product .product_title, .woocommerce #content div.product .product_title, .woocommerce-page #content div.product .product_title, .product_meta a, .woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3{color:<?php echo $asteria['sec_color_id']; ?>!important;}
.woocommerce ul.products li.product h3, .woocommerce-page ul.products li.product h3{ font-size:<?php echo $asteria['ptitle_size_id']; ?>!important;}

/*Footer Widget*/
#footer .widgets .widget ul li a{color:<?php echo $asteria['footwdgtxt_color_id']; ?>!important;}
#footer .widgets .widgettitle, #midrow .widgets .widgettitle a{color:<?php echo $asteria['footwdgtxt_hover_color_id']; ?>!important;}


<?php if(($asteria['site_width_id'] == "1")) {?>
@media screen and (max-width: 1200px){
body .fixed_site{ width:95%!important; margin: 0 auto;}
}
<?php } ?>

/*Others*/
/*Welcome Text Background*/
.text_block{ background-color:<?php echo $asteria['welcome_color_id']; ?>!important;}
<?php if(($asteria['post_gallery_id'] == "1")) {?>
/*Gallery*/
.gallery-caption{ display:none;}
.gallery{ float:left; margin:20px auto!important; width:100%;}
body .gallery-item{text-align: center;width: 50px!important; height:45px;display: inline-block;margin: 10px 5px; float:none!important;}
.ast_gall{ position:relative;width:100%; min-height:300px; text-align:left; overflow:hidden; max-width:1000px; margin:0 auto;}
.ast_cap{position: absolute;background-color: rgba(0, 0, 0, 0.6);color:#fff;padding: 15px;bottom: 0;width:100%;}
body #mainImage{margin: 0 auto;display: block;border: none!important;}
.gall_dash{width: 100%;text-align: center; background:#f1f2f3; max-width:1000px; margin:0 auto;}
.gall_dash img{opacity:0.6; border:none!important;}
.gall_dash img:hover, .gall_dash .gall_active{opacity:1;}
<?php } ?>
</style>