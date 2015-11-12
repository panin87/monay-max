<?php global $asteria;?>

<?php if (!empty ($asteria['slides'])) { ?>
<div class="slide_wrap">
        <div class="slider-wrapper theme-default">
        <div class="pbar_wrap"><div class="prog_wrap"><div class="progrssn" style="width:10%;"></div></div><div class="pbar" id='astbar'>0%</div></div>
            <div id="slide_acord">
            
                 <div id="accordion">
                    <ul class=" kwicks horizontal">
                            <?php foreach ((array)$asteria['slides'] as $arr){ ?>
                     <li>
                    
                    <div class="acord_text acc-sld_<?php echo $arr['slide_content_id']; ?>">
                    
                               <h3 class="entry-title">
                               <a <?php if (!empty ($arr['slide_url'])) { ?>href="<?php echo $arr['slide_url']; ?>"<?php } ?>><?php echo $arr['slide_title']; ?></a>
                               </h3>
                               <p><?php echo $arr['slide_description']; ?></p>
                     </div>
                     
                    <?php if (!empty ($arr['slide_url'])) { ?>
                    <a class="dlthref" href="<?php echo $arr['slide_url']; ?>"><img src="<?php echo $arr['slide_image_url']; ?>" alt="<?php echo $arr['slide_title']; ?>"/></a>
                    <?php }else{ ?>
                     <img src="<?php echo $arr['slide_image_url']; ?>" alt="<?php echo $arr['slide_title']; ?>"/>
                      <?php } ?>
                      
                     </li>
                    <?php } ?>
                    </ul>
                </div>
                    
            </div>
        
        </div>
        
</div>
<?php } ?>
