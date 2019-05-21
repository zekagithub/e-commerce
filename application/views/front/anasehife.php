<!DOCTYPE html>
<html dir="ltr" lang="tr">
<head>
  <?php $this->load->view('front/include/head');?>
<body class="common-home">
 <?php $this->load->view('front/include/header'); ?>
<?php $this->load->view('front/include/mobile_cat');?>
<div class="header_modules"></div>
<div id="container">
<div class="container">
<div class="row">
<aside id="column-left" class="col-sm-3 ">
 <?php $this->load->view('front/include/categories');?>
<?php $this->load->view('front/include/user');?>
<?php $this->load->view('front/include/specials');?>
<?php $this->load->view('front/include/best_seller');?>
</aside>
<div id="content" class="col-sm-9">
<?php $this->load->view('front/include/gallery');?>
<?php $this->load->view('front/include/banner');?>
<?php $this->load->view('front/include/latest'); ?>
<?php $this->load->view('front/include/featured');?>
</div>
</div>
</div>
</div>
<?php $this->load->view('front/include/footer');?>
<?php $this->load->view('front/include/script');?>
</div>
</body>
</html>
