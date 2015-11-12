<?php global $asteria;?>

<?php $map = $asteria['home_sort_id']; if(!empty($map['location-map'])){ ?>
<!--Homepage MAP START-->
	<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_map'])) ) { ?>
    <?php }else{ ?>
    <div class="centerfix">
        <div class="ast_map">
            <div class="lay1_title"><?php echo $asteria['map_title_id']; ?></div>
        	<div id="asthemap"></div>
         </div>
     </div>

    <?php } ?>
<!--Homepage MAP END-->
<?php } ?>
