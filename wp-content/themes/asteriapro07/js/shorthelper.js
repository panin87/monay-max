// JavaScript Document
jQuery(document).ready(function () {
var div ='<div id="ast_helper"><span class="help_close" style="">X</span><h3><span class="short_icon">?</span>Shortcode Helper</h3></div>';

//Shortcode Instructions
//-------------------------------

//Success
var success ='<div class="helpcontent"><p><span class="shrt_name">Success Content Box</span></br>Display Your content in a greenish message box. <a  target="_blank" href="http://i.imgur.com/tLFZg0p.png"><strong>Example</strong></a></br></br> <b>Usage:</b> Wrap your text with [success][/success]</br></br><small>If you want to insert html inside the shortcode switch to "Text" mode.</small></p></div>';
//Info
var info ='<div class="helpcontent"><p><span class="shrt_name">Info Content Box</span></br>Display Your content in a bluish message box. <a  target="_blank" href="http://i.imgur.com/5dScnr5.png"><strong>Example</strong></a></br></br> <b>Usage:</b> Wrap your text with [info][/info]</br></br><small>If you want to insert html inside the shortcode switch to "Text" mode.</small></p></div>';
//Warning
var warning ='<div class="helpcontent"><p><span class="shrt_name">Warning Content Box</span></br>Display Your content in an orange message box. <a  target="_blank" href="http://i.imgur.com/n2AC3us.png"><strong>Example</strong></a></br></br> <b>Usage:</b> Wrap your text with [warning][/warning]</br></br><small>If you want to insert html inside the shortcode switch to "Text" mode.</small></p></div>';
//Error
var error ='<div class="helpcontent"><p><span class="shrt_name">Error Content Box</span></br>Display Your content in an red message box. <a  target="_blank" href="http://i.imgur.com/7S2DOQM.png"><strong>Example</strong></a></br></br> <b>Usage:</b> Wrap your text with [error][/error]</br></br><small>If you want to insert html inside the shortcode switch to "Text" mode.</small></p></div>';
//Quote
var quote ='<div class="helpcontent"><p><span class="shrt_name">Quoute</span></br>Display your quote  with a beautiful quote icon. <a  target="_blank" href="http://i.imgur.com/hVX7J6U.png"><strong>Example</strong></a></br></br> <b>Usage:</b> Wrap your text  with [qoute][/quote]</small></p></div>';
//Divider
var divider ='<div class="helpcontent"><p><span class="shrt_name">Divider</span></br>Use this shortcode  to display a borderline or divider to divide your post. <a target="_blank" href="http://i.imgur.com/szqhrG3.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [divider style="solid" color="#eeeeee" width="1px"]</small></br></br><strong>Parameters:</strong></br><strong>style</strong>= solid, dashed, dotted, double, groove, ridge, inset, outset, none<br><strong>color</strong>= any hex color values.<br><strong>Width</strong> = any number of width in pixel. e.g: 5px</p></div>';
//Table
var table ='<div class="helpcontent"><p><span class="shrt_name">Table</span></br>Use this shortcode to display a table.  <a target="_blank" href="http://i.imgur.com/HX12jvK.png"><strong>Example</strong></a></br></br> <b>Usage:</b> [table cols="names,age,occupation" data="Jhon,25,Blogger,Sara,20,Model"]</small></br></p></div>';
//Column2
var col2 ='<div class="helpcontent"><p><span class="shrt_name">2 Columns</span></br>Use this shortcode to display text in 2 columns.  <a target="_blank" href="http://i.imgur.com/4sCL1Gx.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [divider style="solid" color="#eeeeee" width="1px"]</small></br></p></div>';
//Column3
var col3 ='<div class="helpcontent"><p><span class="shrt_name">3 Columns</span></br>Use this shortcode to display text in 3 columns.  <a target="_blank" href="http://i.imgur.com/YQ69SEx.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [divider style="solid" color="#eeeeee" width="1px"]</small></br></p></div>';
//Column4
var col4 ='<div class="helpcontent"><p><span class="shrt_name">4 Columns</span></br>Use this shortcode to display text in 4 columns.  <a target="_blank" href="http://i.imgur.com/x6IPOdq.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [divider style="solid" color="#eeeeee" width="1px"]</small></br></p></div>';
//Facebook
var fblike ='<div class="helpcontent"><p><span class="shrt_name">Facebook Like Button</span></br>Display a Facebook Like button anywhere in the post. <a target="_blank" href="http://i.imgur.com/kp9DD0A.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [fblike]</small></br></p></div>';
//Twitter
var tweet ='<div class="helpcontent"><p><span class="shrt_name">Tweet Button</span></br>Display a Twitter Tweet button anywhere in the post. <a target="_blank" href="http://i.imgur.com/OsmTJWO.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [tweet]</small></br></p></div>';
//Pinterest
var pinit ='<div class="helpcontent"><p><span class="shrt_name">Pinterest "Pint it" Button</span></br>Display a Pinterest Pin it button anywhere in the post. <a target="_blank" href="http://i.imgur.com/HDPdrEf.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [pinit]</small></br></p></div>';
//Google Plus
var gplus ='<div class="helpcontent"><p><span class="shrt_name">Google + Button</span></br>Display a Google plus shortcode button anywhere in your post. <a target="_blank" href="http://i.imgur.com/cgMgOyH.png"><strong>Example</strong></a></br></br> <b>Usage:</b>  [gplus]</small></br></p></div>';

//Slider
var slider ='<div class="helpcontent"><p><span class="shrt_name">Slider</span></br>Display an image slider anywhere in your post. <a target="_blank" href="http://i.imgur.com/3k5i4MZ.jpg"><strong>Example</strong></a></br></br> <b>Usage:</b>  to add a slider in your post, follow these steps(<a target="_blank" href="http://www.screenr.com/gQtH">Video Tutorial</a>): </br></p>\n\
<strong>Step 1:</strong> Click the "Slider Shortcode" button. This will be added to the post editor: [slider effect="random" pausetime="3000" autoplay="true" navigation="true"][/slider]</br>\n\
<strong>Step 2:</strong> Put your cursor right before [/slider]. <a target="_blank" href="http://i.imgur.com/JDMuQTF.gif">Like this</a></br> \n\
<strong>Step 3:</strong> Click the "Add Media" button and upload your images. Then hold the ctrl button from your keyboard and select the images that you want to display in your slider. Now click "Insert into Post" button.</br>\n\
<strong>Step 4:</strong> Thats all! You have successfully added a Slider in your post.  You can change the parameters of your slider if you want to customize the slider. \n\
</div>';

//List 1
var list1 ='<div class="helpcontent"><p><span class="shrt_name">List Style 1</span></br>Instead of typical circle list style you can display your lists with beautiful style.  <a target="_blank" href="http://i.imgur.com/sKVCqgu.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>  [list1]</br>&lt;li&gt;item1&lt;/li&gt; </br>&lt;li&gt;item2&lt;/li&gt; </br>&lt;li&gt;item3&lt;/li&gt;</br>[/list1]</small></br></p></div>';
//List 2
var list2 ='<div class="helpcontent"><p><span class="shrt_name">List Style 2</span></br>Instead of typical circle list style you can display your lists with beautiful style. <a target="_blank" href="http://i.imgur.com/cgMgOyH.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>  [list2]</br>&lt;li&gt;item1&lt;/li&gt; </br>&lt;li&gt;item2&lt;/li&gt; </br>&lt;li&gt;item3&lt;/li&gt;</br>[/list2]</small></br></p></div>';
//List 3
var list3 ='<div class="helpcontent"><p><span class="shrt_name">List Style 3</span></br>Instead of typical circle list style you can display your lists with beautiful style. <a target="_blank" href="http://i.imgur.com/cgMgOyH.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>    [list3]</br>&lt;li&gt;item1&lt;/li&gt; </br>&lt;li&gt;item2&lt;/li&gt; </br>&lt;li&gt;item3&lt;/li&gt;</br>[/list3]</small></br></p></div>';
//List 4
var list4 ='<div class="helpcontent"><p><span class="shrt_name">List Style 4</span></br>Instead of typical circle list style you can display your lists with beautiful style. <a target="_blank" href="http://i.imgur.com/cgMgOyH.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>    [list4]</br>&lt;li&gt;item1&lt;/li&gt; </br>&lt;li&gt;item2&lt;/li&gt; </br>&lt;li&gt;item3&lt;/li&gt;</br>[/list4]</small></br></p></div>';
//List 5
var list5 ='<div class="helpcontent"><p><span class="shrt_name">List Style5</span></br>Instead of typical circle list style you can display your lists with beautiful style. <a target="_blank" href="http://i.imgur.com/cgMgOyH.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>    [list5]</br>&lt;li&gt;item1&lt;/li&gt; </br>&lt;li&gt;item2&lt;/li&gt; </br>&lt;li&gt;item3&lt;/li&gt;</br>[/list5]</small></br></p></div>';

//Youtube Video
var youtube ='<div class="helpcontent"><p><span class="shrt_name">Responsive Youtube video </span></br>With this shortcode you can display youtube videos that are responsive to the screen size.</br></br> <b>Usage:</b></br>  [youtube width="100%" height="100%" autoplay="false"]https://www.youtube.com/watch?v=pwNMvUXTgDY[/youtube]</small></br></p></div>';
//Vimeo Video
var vimeo ='<div class="helpcontent"><p><span class="shrt_name">Responsive Vimeo video </span></br>With this shortcode you can display vimeo videos that are responsive to the screen size.</br></br> <b>Usage:</b></br>  [vimeo width="600" height="365" autoplay="false"]http://vimeo.com/4749536[/vimeo]</small></br></p></div>';

//Tabs
var tabs ='<div class="helpcontent"><p><span class="shrt_name">Tabs Shortcode </span></br>With this shortcode you can display your content in beautiful tabs. <a target="_blank" href="http://i.imgur.com/FVhoht2.png"><strong>Example</strong></a> </br></br> <b>Usage:</b></br>  [tabs titles="Tab One, Tab Two"]</br>[tab]Tab one content[/tab]</br>[tab]tab two content[/tab]</br>[/tabs]</small></br></p></div>';
//Toggle
var toggle ='<div class="helpcontent"><p><span class="shrt_name">Toggle Shortcode </span></br>With this shortcode you can display your content with show/Hide button. <a target="_blank" href="http://i.imgur.com/ghVOLbL.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>  [toggle title="Spoiler alert"]Your content which is by default hidden.[/toggle]</small></br></p></div>';
//Link Button
var button ='<div class="helpcontent"><p><span class="shrt_name">Link Button Shortcode </span></br>You can display colorful buttons with this shortcode. <a target="_blank" href="http://i.imgur.com/h29Gjnu.png"><strong>Example</strong></a></br></br> <b>Usage:</b></br>  [button background_color="#eb5c49" text_color="#ffffff" url="http://www.google.com" ][/button]</small></br></br><strong>Parameters:</strong></br><strong>background_color</strong>= any hex color value<br><strong>text_color</strong>= any hex color values.<br><strong>link</strong> = link of the button</p></div>';
//Call to Action
var callaction ='<div class="helpcontent"><p><span class="shrt_name">Call to Action </span></br>If you want to get your visitor\'s attention and urge your site\'s viewers of a sales promotion message to take an immediate action you should use this Element. <a target="_blank" href="http://i.imgur.com/TYi17Q4.png"><strong>Example</strong></a> </br></br> <b>Usage:</b></br>  [callaction url="http://www.google.com" background_color="#2dcb73" text_color="#ffffff" button_text="A Simple Button" button_background_color="#e64429" button_text_color="#ffffff"]Your Call to Action Text Message[/callaction]</small></br></br><strong>Parameters:</strong></br><strong>background_color</strong>= any hex color value<br><strong>text_color</strong>= any hex color values.<br><strong>link</strong> = link of the button<strong>button_background_color</strong>= any hex color value<br><strong>button_text_color</strong>= any hex color values.<br></p></div>';
//Iframe
var iframe ='<div class="helpcontent"><p><span class="shrt_name">Iframe Shortcode </span></br>With this shortcode, you can display any websites you want in your post using iframe. <a target="_blank" href="http://i.imgur.com/DC2F1T9.jpg"><strong>Example</strong></a>  </br></br> <b>Usage:</b></br>  [iframe url="http://www.beemp3.com" width="100%" height="500" frameborder="0"]</small></br></br><strong>Parameters:</strong></br><strong>url</strong>= url of the site that you want to display<br><strong>width</strong>= width in percent<br><strong>height</strong> = Height in number</br><strong>frameborder</strong>= any hex color value<br></p></div>';
//Countdown Content Shortcode
var countdown ='<div class="helpcontent"><p><span class="shrt_name">Countdown Content Shortcode </span></br>Countdown shortcode will hide your selected text and show it automatically on a certain date.   </br></br> <b>Usage:</b></br>  [countdown date="21" month="9" year="2015"]Your content that will be hidden and will be shown after the countdown ends.[/countdown]</small></p></div>';
//Featured Image
var featimage ='<div class="helpcontent"><p><span class="shrt_name">Featured Image </span></br>Displays the featured image of the post, if set any.  </br></br> <b>Usage:</b></br>  [featimage align="left"]</small></p></div>';


//SUCCESS
jQuery("#content_success").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(success);
});

//INFO
jQuery("#content_info").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(info);
});


//WARNING
jQuery("#content_warning").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(warning);
});

//Error
jQuery("#content_error").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(error);
});

//Error
jQuery("#content_quote").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(quote);
});

//Divider
jQuery("#content_divider").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(divider);
});

//Divider
jQuery("#content_table").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(table);
});


//Column2
jQuery("#content_col2").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(col2);
});


//Column3
jQuery("#content_col3").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(col3);
});


//Column4
jQuery("#content_col4").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(col4);
});




//FB Like
jQuery("#content_fblike").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(fblike);
});

//TWEET
jQuery("#content_tweet").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(tweet);
});

//PINTEREST
jQuery("#content_pinit").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(pinit);
});

//GOOGLE PLUS
jQuery("#content_gplus").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(gplus);
});

//SLIDER
jQuery("#content_slider").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(slider);
});

//List1
jQuery("#content_list1").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(list1);
});
//List2
jQuery("#content_list2").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(list2);
});
//List3
jQuery("#content_list3").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(list3);
});
//List4
jQuery("#content_list4").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(list4);
});
//List5
jQuery("#content_list5").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(list5);
});

//Youtube
jQuery("#content_youtube").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(youtube);
});
//Vimeo
jQuery("#content_vimeo").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(vimeo);
});


//Tabs
jQuery("#content_tabs").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(tabs);
});

//Toggle
jQuery("#content_toggle").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(toggle);
});


//Buttons
jQuery("#content_button").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(button);
});

//Call to Action
jQuery("#content_callaction").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(callaction);
});
//Iframe
jQuery("#content_iframe").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(iframe);
});
//Countdown
jQuery("#content_countdown").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(countdown);
});
//Featured Image
jQuery("#content_featimage").live('click', function(){
jQuery("#ast_helper").remove();
jQuery('#poststuff').prepend(div).find('#ast_helper').fadeIn();
jQuery( "#ast_helper" ).draggable();
jQuery(".help_close").click(function() {
  jQuery("#ast_helper" ).fadeOut('fast');
});
  jQuery(".helpcontent").remove();
  jQuery("#ast_helper").append(featimage);
});

});
