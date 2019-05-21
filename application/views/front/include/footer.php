<footer>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="footer-line"></div>
</div>
<div class="col-lg-2 col-md-2 col-sm-4">
<div class="footer_box">
<h5>Melumatlar</h5>
<ul class="list-unstyled">
<li><a href="#">Elaqe</a></li>
<li><a href="#">Gizlilik Muqavilesi</a></li>
<li><a href="#">Satış Muqavilesi</a></li>
<li><a href="#">Suallar</a></li>
<li><a href="#">Garanti ve İade Muqavilesi</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-4">
<div class="footer_box">
<h5>Kateqoriyalar</h5>
<ul class="list-unstyled">
 <?php $kateqoriya=kateqoriyacek(); foreach ($kateqoriya as $kateqoriya) {?>
    <?php if($kateqoriya->id==1){?>
  
  <li><a href="<?php echo base_url('eynek'); ?>"><i class="fa fa-chevron-right"></i><?php echo $kateqoriya->title; ?></a></li>
  <?php } elseif($kateqoriya->id==3){?>
      <li><a href="<?php echo base_url('elektronik'); ?>"><i class="fa fa-chevron-right"></i><?php echo $kateqoriya->title; ?></a></li>
      <?php }elseif($kateqoriya->id==4){ ?>
      <li><a href="<?php echo base_url('saat'); ?>"><i class="fa fa-chevron-right"></i><?php echo $kateqoriya->title; ?></a></li>
            <?php } elseif($kateqoriya->id==5){ ?>
     <li><a href="<?php echo base_url('xususi'); ?>"><i class="fa fa-chevron-right"></i><?php echo $kateqoriya->title; ?></a></li>
         <?php } elseif($kateqoriya->id==6){ ?>
     <li><a href="<?php echo base_url('special'); ?>"><i class="fa fa-chevron-right"></i><?php echo $kateqoriya->title; ?></a></li>
  <?php } } ?>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-4">
<div class="footer_box">
<h5>Kategoriler</h5>
<ul class="list-unstyled">
<li><a href="#">Yüzük</a></li>
<li><a href="#">Özel Günler</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-2 col-sm-4">
<div class="footer_box">
<h5>Kategoriler</h5>
<ul class="list-unstyled">
<li><a href="#">Kişiye Özel Tasarımlar</a></li>
</ul>
</div>
</div>
<div class="col-sm-1"></div>
<div class="col-lg-2 col-md-2 col-sm-4 border">
<div class="footer_box">
<h5>Sosyal Medya</h5>
<ul class="list-unstyled social">
<li><a href="#" target="_blank" rel="nofollow"><span class="fa fa-facebook"></span>Facebook</a></li>
<li><a href="#" target="_blank" rel="nofollow"><span class="fa fa-twitter"></span>Twitter</a></li>
<li><a href="#" target="_blank" rel="nofollow"><span class="fa fa-instagram"></span>Instagram</a></li>
</ul>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="footer-line"></div>
</div>
</div>
<img src="" alt="Zeka Memmedov">Coding by <a href="https://google.com" target="_blank"> Zeka Memmedov</a><br /> Butun huquqlar qorunur. &copy; <?php echo date('Y');?>
</div>
</div>
</footer>
