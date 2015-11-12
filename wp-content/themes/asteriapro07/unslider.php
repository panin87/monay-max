<?php global $asteria;?>

<?php if (!empty ($asteria['slides'])) { ?>
<div class="slide_wrap unslidewrap">
    <div class="slider-wrapper unslidewrap">
        <div id="ast_unslider" class="banner">
                        <ul>
                   		 <?php foreach ((array)$asteria['slides'] as $arr){ ?>
        
                            <li style="background:url('<?php echo $arr['slide_image_url']; ?>') no-repeat;">
                                <div class="uninner wrap-sld_<?php echo $arr['slide_content_id']; ?>">
                                    <div class="inner sld_<?php echo $arr['slide_content_id']; ?>">
                                    
                                        <h3>
                                        <a <?php if (!empty ($arr['slide_url'])) { ?>href="<?php echo $arr['slide_url']; ?>"<?php } ?>><?php echo $arr['slide_title']; ?></a></h3>
                                        <p><?php  echo $arr['slide_description'] ?></p>
            
                                    </div>
                                </div>
                             </li>
                    <?php } ?>
                        </ul>
            </div>	
    </div>
</div>
	<?php } ?>