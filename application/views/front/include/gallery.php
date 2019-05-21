<div class="fluid_container">
<div class="camera_container">
<div id="camera_wrap_0">
<?php $melumat=gallerycek(); foreach ($melumat as $melumat ) {?>

<div title="slide-1" data-thumb="<?php echo base_url();echo $melumat->image1;?>" data-src="<?php echo base_url();echo $melumat->image1;?>">
<div class="camera_caption fadeIn">
<h2><?php echo $melumat->title?></h2>
<a href="#">Bax </a>
</div>
</div>
<?php } ?>
</div>
</div>
<div class="clear"></div>
</div>