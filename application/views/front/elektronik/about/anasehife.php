
<!DOCTYPE html>

<html dir="ltr" lang="tr">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>E-commerce |<?php echo $melumat->title; ?> </title>
<meta property="og:url"           content="<?php echo base_url('elektronikabout/');echo $melumat->sef?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $melumat->title?>"/>
<meta property="og:description"   content="<?php echo $melumat->title?>"" />
<meta property="og:image"         content="<?php echo base_url();echo $melumat->image1;?>" />
<meta name="description" content="content" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?php echo base_url(); ?>assets/front/image/favicon.ico" rel="icon" />
<?php $this->load->view('front/include/head');?>
</head>
<body class="product-product">
<!-- mobile -->
<div id="page">
<div class="shadow"></div>
<div class="toprow-1">
<a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>
</div>
<?php $this->load->view('front/include/header');?>
<?php $this->load->view('front/include/mobile_cat');?>
<div class="header_modules"></div>
<div id="container">
<div class="container">
<div class="row">
<div id="content" class="col-sm-12">
<?php $this->load->view('front/elektronik/about/breadcrumb');?>
<?php $this->load->view('front/elektronik/about/main_content');?>
</div>
</div>
</div>
</div>
<?php $this->load->view('front/include/footer');?>
<?php $this->load->view('front/include/script');?>
</div>
</body>
</html>
