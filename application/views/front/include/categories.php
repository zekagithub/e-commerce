
  <div class="box category info">
  <div class="box-heading">
  <h3><i class="flaticon-show5"></i>Kateqoriyalar</h3>
  </div>
  <div class="box-content">
  <div class="box-category">
  <ul class="menu">
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
  </div>
