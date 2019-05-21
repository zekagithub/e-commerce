  <div class="box specials">
  <div class="box-heading">
  <h3>Özel Gün Mehsullari</h3></div>
  <div class="box-content">
  <div class="product-layout">
  <div class="bestseller-slider">

  <div>
    <?php $melumat=mehsulcek();foreach($melumat as $melumat){ ?>
    <?php if ($melumat->kat_id==5) {?>
    
  <div class="product-thumb transition equal-height-767">
  <div class="sale">Bax</div>
  <div class="image">
  <a href="#"><img src="<?php echo base_url();echo $melumat->mini1;?>" alt="<?php echo $melumat->title ?>" title="<?php echo $melumat->title ?>" class="img-responsive"/></a>
  </div>
  <div class="caption">
  <div class="price">
  <span class="price-new"><?php echo $melumat->price;?> Man</span>
  </div>
  <div class="name">
  <a href="#"><?php echo $melumat->title; ?></a>
  </div>
  <div class="rating">
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
  </div>
  <div class="cart-button">
  </div>
  <div class="clear"></div>
  </div>
  <?php }} ?>

  </div>

  </div>
  </div>
  </div>
  </div>