<div class="box latest">
<div class="box-heading">
<h3>Son Elave olunan mehsullar</h3></div>
<div class="box-content">
<div class="latest-scroll">

<?php $melumat=mehsulcek();foreach ($melumat as $melumat) {?>

<div>
	<?php if($melumat->kat_id==1){ ?>
<div class="product-thumb transition maxheight1">
<div class="quick_info">
<div id="quickview_latest_" class="quickview-style">
<div>
<div class="left col-sm-4">
<div class="quickview_image image">
<a href="<?php echo base_url('eynekabout/');echo $melumat->sef;?>"><img alt="<?php echo $melumat->title?>" title="<?php echo $melumat->title?>" class="img-responsive" src="<?php echo base_url(); echo $melumat->tmb1;?>"|></a>
</div>
</div>
<div class="right col-sm-8">
<h2><?php echo $melumat->title ?></h2>
<div class="inf">
<div class="price">
<span class="price-new"><?php echo $melumat->price;?> Man</span>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="clear"></div>
<div class="rating text-center">
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
<div class="col-sm-12">
<div class="quickview_description description">
<<?php echo $melumat->description;?> Man
</div>
</div>
</div>
</div>
</div>
<div class="sale">Bax</div>
<div class="image">
<a href="<?php echo base_url('eynekabout/');echo $melumat->sef;?>"><img src="<?php echo base_url();echo $melumat->tmb1?>" alt="#" title="#" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price"><span class="price-new"><?php echo $melumat->price;?> Man</span></div>
<div class="name">
<a href="<?php echo base_url('eynekabout/');echo $melumat->sef;?>">
<?php echo $melumat->title;?></a>
</div>
<div class="description">
<?php echo $melumat->description;?>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
<a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
<i class="flaticon-tick7"></i>
</a>
</div>
<div class="rating text-center">
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
</div>
<div class="clear"></div>
</div>
</div>
<?php }elseif($melumat->kat_id==3){ ?>
<div class="product-thumb transition maxheight1">
<div class="quick_info">
<div id="quickview_latest_" class="quickview-style">
<div>
<div class="left col-sm-4">
<div class="quickview_image image">
<a href="<?php echo base_url('elektronikabout/');echo $melumat->sef;?>"><img alt="<?php echo $melumat->title?>" title="<?php echo $melumat->title?>" class="img-responsive" src="<?php echo base_url(); echo $melumat->tmb1;?>"|></a>
</div>
</div>
<div class="right col-sm-8">
<h2><?php echo $melumat->title ?></h2>
<div class="inf">
<div class="price">
<span class="price-new"><?php echo $melumat->price;?> Man</span>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="clear"></div>
<div class="rating text-center">
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
<div class="col-sm-12">
<div class="quickview_description description">
<<?php echo $melumat->description;?> Man
</div>
</div>
</div>
</div>
</div>
<div class="sale">Bax</div>
<div class="image">
<a href="<?php echo base_url('eynekabout/');echo $melumat->sef;?>"><img src="<?php echo base_url();echo $melumat->tmb1?>" alt="#" title="#" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price"><span class="price-new"><?php echo $melumat->price;?> Man</span></div>
<div class="name">
<a href="<?php echo base_url('elektronikabout/');echo $melumat->sef;?>"><?php echo $melumat->title ?></a>
</div>
<div class="description">
<?php echo $melumat->description;?>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
<a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
<i class="flaticon-tick7"></i>
</a>
</div>
<div class="rating text-center">
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
</div>
<div class="clear"></div>
</div>
</div>
<?php }elseif($melumat->kat_id==4){ ?>

<div class="product-thumb transition maxheight1">
<div class="quick_info">
<div id="quickview_latest_" class="quickview-style">
<div>
<div class="left col-sm-4">
<div class="quickview_image image">
<a href="<?php echo base_url('saatabout/');echo $melumat->sef;?>"><img alt="<?php echo $melumat->title ?>" title="<?php echo $melumat->title ?>" class="img-responsive" src="<?php echo base_url(); echo $melumat->tmb1;?>"|></a>
</div>
</div>
<div class="right col-sm-8">
<h2><?php echo $melumat->title ?></h2>
<div class="inf">
<div class="price">
<span class="price-new"><?php echo $melumat->price;?> Man</span>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="clear"></div>
<div class="rating text-center">
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
<div class="col-sm-12">
<div class="quickview_description description">
<<?php echo $melumat->description;?> Man
</div>
</div>
</div>
</div>
</div>
<div class="sale">Bax</div>
<div class="image">
<a href="<?php echo base_url('saatabout/');echo $melumat->sef;?>"><img src="<?php echo base_url();echo $melumat->tmb1?>" alt="<?php echo $melumat->title; ?>" title="<?php echo $melumat->title; ?>" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price"><span class="price-new"><?php echo $melumat->price;?> Man</span></div>
<div class="name">
<a href="<?php echo base_url('saatabout/');echo $melumat->sef;?>"><?php echo $melumat->title ?></a>
</div>
<div class="description">
<?php echo $melumat->description;?>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
<a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
<i class="flaticon-tick7"></i>
</a>
</div>
<div class="rating text-center">
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
</div>
<div class="clear"></div>
</div>
</div>
<?php }elseif($melumat->kat_id=5){ ?>
<div class="product-thumb transition maxheight1">
<div class="quick_info">
<div id="quickview_latest_" class="quickview-style">
<div>
<div class="left col-sm-4">
<div class="quickview_image image">
<a href="<?php echo base_url('xususigunlerabout/');echo $melumat->sef;?>"><img alt="<?php echo $melumat->title;?>" title="<?php echo $melumat->title;?>" class="img-responsive" src="<?php echo base_url(); echo $melumat->tmb1;?>"|></a>
</div>
</div>
<div class="right col-sm-8">
<h2><?php echo $melumat->title ?></h2>
<div class="inf">
<div class="price">
<span class="price-new"><?php echo $melumat->price;?> Man</span>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="clear"></div>
<div class="rating text-center">
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
<div class="col-sm-12">
<div class="quickview_description description">
<<?php echo $melumat->description;?> Man
</div>
</div>
</div>
</div>
</div>
<div class="sale">Bax</div>
<div class="image">
<a href="<?php echo base_url('xususigunlerabout/');echo $melumat->sef;?>"><img src="<?php echo base_url();echo $melumat->tmb1?>" alt="<?php echo $melumat->title;?>" title="<?php echo $melumat->title;?>" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price"><span class="price-new"><?php echo $melumat->price;?> Man</span></div>
<div class="name">
<a href="<?php echo base_url('xususigunlerabout/');echo $melumat->sef;?>"><?php echo $melumat->title ?></a>
</div>
<div class="description">
<?php echo $melumat->description;?>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
<a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
<i class="flaticon-tick7"></i>
</a>
</div>
<div class="rating text-center">
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
</div>
<div class="clear"></div>
</div>
</div>
<?php }elseif($melumat->kat_id==6){ ?>
<div class="product-thumb transition maxheight1">
<div class="quick_info">
<div id="quickview_latest_" class="quickview-style">
<div>
<div class="left col-sm-4">
<div class="quickview_image image">
<a href="<?php echo base_url('specialabout/');echo $melumat->sef;?>"><img alt="<?php $melumat->title;?>" title="<?php $melumat->title;?>" class="img-responsive" src="<?php echo base_url(); echo $melumat->tmb1;?>"|></a>
</div>
</div>
<div class="right col-sm-8">
<h2><?php echo $melumat->title ?></h2>
<div class="inf">
<div class="price">
<span class="price-new"><?php echo $melumat->price;?> Man</span>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
</div>
<div class="clear"></div>
<div class="rating text-center">
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
<div class="col-sm-12">
<div class="quickview_description description">
<<?php echo $melumat->description;?> Man
</div>
</div>
</div>
</div>
</div>
<div class="sale">Bax</div>
<div class="image">
<a href="<?php echo base_url('specialabout/');echo $melumat->sef;?>"><img src="<?php echo base_url();echo $melumat->tmb1?>" alt="<?php echo $melumat->title;?>" title="<?php echo $melumat->title;?>" class="img-responsive"/></a>
</div>
<div class="caption">
<div class="price"><span class="price-new"><?php echo $melumat->price;?> Man</span></div>
<div class="name">
<a href="<?php echo base_url('specialabout/');echo $melumat->sef;?>"><?php echo $melumat->title ?></a>
</div>
<div class="description">
<?php echo $melumat->description;?>
</div>
</div>
<div class="cart-button text-center">
<button class="btn btn-add" type="button" title="Sepete Ekle" data-toggle="tooltip" onclick="parent.location='#'">
<i class="flaticon-shopping232"></i>
</button>
<a class="quickview quickview-latest btn" data-toggle="tooltip" title="Hızlı İncele" href="#quickview_latest_1" data-original-title="Quick View">
<i class="flaticon-tick7"></i>
</a>
</div>
<div class="rating text-center">
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
<span class="fa fa-stack">
<i class="fa fa-star fa-stack-2x"></i>
<i class="fa fa-star-o fa-stack-2x"></i>
</span>
</div>
<div class="clear"></div>
</div>
</div>
<?php }} ?>
</div>
</div>
</div>
