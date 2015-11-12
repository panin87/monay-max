<?php global $asteria;?>

<?php $tabs = $asteria['home_sort_id']; if(!empty($tabs['tabs'])){ ?>
<!--Home Tabs START-->
<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_tabs'])) ) { ?>
<?php }else{ ?>
 <?php if (!empty ($asteria['tab_blockid'])) { ?>   
    <div class="centerfix">
    <div class="home_tabs">
        <div class="home_tabs_wrap">
            <div class="center">
            
            <div id="tab-bottom-container" class='tab-container'>
                <ul class='etabs'>
                    <?php foreach ((array)$asteria['tab_blockid'] as $arr){ ?>
                    <?php $tabid = strtolower($arr['tab_text_field_id']); $tabid = str_replace(" ", "", $tabid); ?>
                   <li class='tab theme_about'><a class="accordion-header" href="#tabs-<?php echo $tabid ?>"><?php echo $arr['tab_text_field_id']; ?></a></li>
                   <?php }?>
                </ul>
            
                 <div class='panel-container'>
                   <?php foreach ((array)$asteria['tab_blockid'] as $arr){ ?>
                    <?php $tabid = strtolower($arr['tab_text_field_id']); $tabid = str_replace(" ", "", $tabid); ?>
                     <div class="accordion-content" id="tabs-<?php echo $tabid ?>">
                     <?php $tabcontent = html_entity_decode($arr['tab_textarea_field_id']); $tabcontent = stripslashes($tabcontent); echo do_shortcode($tabcontent); ?>
                    </div>
                    <?php }?>
                 </div> 
            </div>
            </div>
         </div>   
        </div>
    </div>
<?php }?>    
<?php }?>
<!--Home Tabs END-->
<?php }?>
