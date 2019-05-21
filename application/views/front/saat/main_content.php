
<div class="row">
<?php  $result=0; if ($melumat>$count=$result['COUNT(*)']){ foreach($melumat as $melumat){?>	

<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="product-thumb maxheight1">
<div class="image">
<a href="<?php echo base_url('saatabout/');echo $melumat->sef; ?>">
<img src="<?php echo base_url();echo $melumat->mini1; ?>" alt="<?php echo $melumat->title?>" title="<?php echo $melumat->title?>" class="img-responsive"/>
</a>
</div>
<div>
<div class="caption">
<div class="price price-product">
<span class="price-new"><?php echo $melumat->price?> Man</span>
</div>
<div class="name name-product">
<a href="<?php echo base_url('saatabout/');echo $melumat->sef; ?>"><?php echo $melumat->title?></a>
</div>
<div class="description">
<?php echo $melumat->description?>
</div>
</div>
<div class="cart-button">
<button class="btn btn-add" type="button" title="Sebete elave et" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="rating">
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i></span>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<?php }}else{ ?>

<div class="product-layout product-grid col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Melumat <br>Sehife bosdur </div>
</div>
<?php } ?>
</div>
<div class="row">
<div class="col-sm-12 text-right">
<?php echo $linkler; ?>
</div>
</div>
</div>
</div>
</div>
