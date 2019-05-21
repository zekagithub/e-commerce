
<div class="container">
<div class="row">
	<?php echo $this->session->flashdata('xeta');?>

<div id="content" class="col-sm-12 product_page">
<div class="row product-content-columns">
<div class="col-sm-5 col-lg-7 product_page-left">
<div id="default_gallery" class="product-gallery">
<div class="image-thumb">
<ul id="image-additional">
<li>
<a href="" data-image="<?php echo base_url();echo $melumat->image1?>"
data-zoom-image="<?php echo base_url();echo $melumat->image1?>">
<img src="<?php echo base_url();echo $melumat->mini1?>"/>
</a>
</li>
<li>
<a href="" data-image="<?php echo base_url();echo $melumat->image2?>"
data-zoom-image="<?php echo base_url();echo $melumat->image2?>">
<img src="<?php echo base_url();echo $melumat->mini2?>"/>
</li>
<li>
<a href="" data-image="<?php echo base_url();echo $melumat->image3?>"
data-zoom-image="<?php echo base_url();echo $melumat->image3?>">
<img src="<?php echo base_url();echo $melumat->mini3?>" alt=""/>
</li>
<li>
<a href="" data-image="<?php echo base_url();echo $melumat->image4?>"
data-zoom-image="<?php echo base_url();echo $melumat->image4?>">
<img src="<?php echo base_url();echo $melumat->mini4?>" alt="#"/>
</li>
</ul>
</div>
<div class="image">
<img id="gallery_zoom" class="resim" value="<?php echo base_url();echo $melumat->mini1?>" src="<?php echo base_url();echo $melumat->image1?>" data-zoom-image="<?php echo base_url();echo $melumat->image1?>" alt="#"/>
</div>
</div>
<div id="full_gallery">
<ul id="gallery">
<li>
<a href="<?php echo base_url();echo $melumat->image1?>" data-something="something" data-another-thing="anotherthing"><img src="<?php echo base_url();echo $melumat->image1?>" title="<?php echo base_url();echo $melumat->title?>" alt="#"/></a>
</li>
<li>
<a href="<?php echo base_url();echo $melumat->image2?>" data-something="something1" data-another-thing="anotherthing1"><img src="<?php echo base_url();echo $melumat->image2?>" alt="#"/></a>
</li>
<li>
<a href="<?php echo base_url();echo $melumat->image3?>" data-something="something1" data-another-thing="anotherthing1"><img src="<?php echo base_url();echo $melumat->image3?>" alt="#"/></a>
</li>
<li>
<a href="<?php echo base_url();echo $melumat->image4?>" data-something="something1" data-another-thing="anotherthing1"><img src="<?php echo base_url();echo $melumat->image4?>" alt="#"/></a>
</li>
</ul>
</div>
</div>
<div class="col-sm-7 col-lg-5 product_page-right">
<div class="general_info product-info">
<h1 class="product-title baslik" value="<?php echo $melumat->title;?>"><?php echo $melumat->title; ?></h1>
<div class="rating-section product-rating-status">
<div class="rating">
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i>
<i class="fa fa-star-o fa-stack-1x"></i></span>
</div>
</div>
<div class="price-section">
<span class="price-new fiyat" value="<?php echo $melumat->price;?>"><?php echo $melumat->price;?> Man</span>
<div class="reward-block">
</div>
</div>
<?php echo $melumat->melumat;?>
</div>
<div id="product">
<div class="form-group form-horizontal">
<input type="hidden" name="product_id" class="product_id" value="id"/>
<?php if($info=$this->session->userdata('usergiris')){?>
<input type="hidden" class="uyeid" value="#">
<button type="button" id="button-cart" productid="<?php echo $melumat->id?>" value="<?php echo $melumat->id?>" class="btn btn-add addToCart">Sebete Elave et</button>
<?php }else{ ?>

<a href="<?php echo base_url('giris'); ?>" class="btn btn-primary" id="button-cart">Mehsulu almaq ucun giris edin</a>
<?php } ?>
</div>
</div>
</div>
</div>
<div id="tab-description" class="product-desc product-section">
<h3 class="product-section_title">Xususiyetler</h3>
<?php $melumat->description;?>
<div class="clearfix"></div>
</div>
<div id="tab-review" class="product-reviews product-section">
<div id="review">

<h3 class="product-section_title">Serhler( <?php  $say=commentnumber($melumat->id); echo $say; ?> )</h3>
<?php  $serh=commentselect($melumat->sef);foreach($serh as $serh){?>

<div class="review-item">
<div class="row">
<div class="col-sm-3">
<div class="review-score">
<?php for ($i=0; $serh->rating>$i ; $i++) { ?>

<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
<?php } ?>
</div>
<div class="review-author"><strong><?php echo $serh->adsoyad ; ?></strong></div>
<div class="review-date"><?php echo $serh->tarix ; ?></div>
</div>
<div class="col-sm-9">
<?php echo $serh->comment ; ?>
</div>
</div>
</div>
<?php } ?>

<div class="text-right"></div>
</div>
<form action="<?php echo base_url('comments'); ?>" method="POST" class="form-horizontal">
<div id="review"></div>
<div class="review-form-title">
<h3 class="product-section_title" id="reviews_form_title">Serh Yazın</h3>
</div>
<div class="product-review-form" id="reviews_form">

<div class="form-group required">
<label class="control-label col-sm-2 col-sm-offset-2" for="input-name">Ad və soyad</label>
<div class="col-sm-6">
<input type="text" name="adsoyad" id="input-name" required class="form-control">
</div>
</div>
<div class="form-group required">
<label class="control-label col-sm-2 col-sm-offset-2" for="input-review">Şərhiniz</label>
<div class="col-sm-6">
<textarea name="yorum" rows="5" id="input-review" required class="form-control"></textarea>
</div>
</div>
<div class="form-group required">
<label class="control-label col-sm-2 col-sm-offset-2">Qiymetiniz</label>
<div class="col-sm-6">&nbsp;&nbsp;&nbsp; Pis&nbsp;
<input type="radio" name="rating" value="1"/>&nbsp;
<input type="radio" name="rating" value="2"/>&nbsp;
<input type="radio" name="rating" value="3"/>&nbsp;
<input type="radio" name="rating" value="4"/>&nbsp;
<input type="radio" name="rating" required value="5"/>&nbsp;Yaxşı
</div>
</div>
<div class="form-group">
<div class="col-sm-9 col-sm-offset-3">
<div class="pull-right">
<button type="submit" id="button-review" class="btn btn-primary">Şerh et</button>
<input type="hidden" name="urunid" value="<?php echo $melumat->id; ?>">
<input type="hidden" name="url" value="<?php echo base_url('eynekabout'); ?>">
<input type="hidden" name="link" value="<?php echo $melumat->sef; ?>">
<input type="hidden" name="ip" value="<?php echo GetIP(); ?>">
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
