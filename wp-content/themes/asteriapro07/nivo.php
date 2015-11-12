<?php global $asteria;?>

<?php if($asteria['slider_type_id'] == "noslider" ) { ?>
<?php } else { ?>
<?php if (!empty ($asteria['slides'])) { ?>
<div class="slide_wrap">
<div class="slider-wrapper theme-default">
<div class="pbar_wrap"><div class="prog_wrap"><div class="progrssn" style="width:10%;"></div></div><div class="pbar" id='astbar'>0%</div></div>
<div id="zn_nivo" class="zn_nivo">
			<?php foreach ((array)$asteria['slides'] as $arr){ ?>
            
				<?php if (!empty ($arr['slide_url'])) { ?>
					<a href="<?php echo $arr['slide_url']; ?>" title="<?php echo $arr['slide_title']; ?>">
					<img src="<?php echo $arr['slide_image_url']; ?>" alt="<?php echo $arr['slide_title']; ?>" title="#nv_<?php echo $arr['slide_image_id']; ?>"/>
					</a>
				<?php } else { ?>
					<img src="<?php echo $arr['slide_image_url']; ?>" alt="<?php echo $arr['slide_title']; ?>" title="#nv_<?php echo $arr['slide_image_id']; ?>"/>						
				<?php } ?>


			<?php } ?>

	</div>	
  			<?php foreach ((array)$asteria['slides'] as $arr){ ?>    

					<div id="nv_<?php echo $arr['slide_image_id']; ?>" class="nivo-html-caption sld_<?php echo $arr['slide_content_id']; ?>">
                    <div class="nivoinner sld_<?php echo $arr['slide_content_id']; ?>">
					<h3 class="entry-title"><a <?php if (!empty ($arr['slide_url'])) { ?>href="<?php echo $arr['slide_url']; ?>"<?php } ?>><?php echo $arr['slide_title']; ?></a></h3>
							<p><?php echo $arr['slide_description']; ?></p>
                     </div>
					</div>

          	<?php } ?>
		

	
</div>
</div>
	<?php }else{ ?>
    
<div class="slide_wrap">
<div class="slider-wrapper theme-default">
<div class="pbar_wrap"><div class="prog_wrap"><div class="progrssn" style="width:10%;"></div></div><div class="pbar" id='astbar'>0%</div></div>
            
            <div id="zn_nivo" class="zn_nivo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide1.jpg" alt="Lorem Ipsum Dolor Sit Amet" title="#nv_1"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide2.jpg" alt="This is the Second Slide" title="#nv_2"/>	
            <a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/images/slides/slide3.jpg" alt="You can also add Links to your slides" title="#nv_3"/></a>
            </div>	

            <div id="nv_1">
            <div class="nivoinner sld_layout2">
            <h3 class="entry-title"><a>Lorem Ipsum Dolor Sit Amet</a></h3>
                    <p>This is the first slide</p>
             </div>
            </div>
            
            <div id="nv_2">
            <div class="nivoinner sld_layout3">
            <h3 class="entry-title"><a>The Second Slide</a></h3>
                    <p>You can change how the content of the slider looks.</p>
             </div>
            </div>
            
            <div id="nv_3">
            <div class="nivoinner sld_layout1">
            <h3 class="entry-title"><a href="<?php echo esc_url( home_url( '/' ) );?>">You can also add Links</a></h3>
                    <p>This slide contains a link in it's title and image.</p>
             </div>
            </div>

</div>
</div>
    
	<?php } ?>
	
<?php } ?>