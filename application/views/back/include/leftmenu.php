
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/back/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
       
        </div>
      </div>
   
 
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="">
          <a href="<?php echo base_url('admin/homepage');?>"><i class="fa fa-dashboard"></i> <span>Anasehife</span></a>
        
        </li>
         
         
         
          <li>
          <a href="<?php echo base_url('admin/config');?>"> <i class="fa fa-cog"></i> <span>Sayt ayarlari</span></a>
        </li>  
           <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Mehsullar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/mehsullar');?>"><i class="fa fa-circle-o"></i> Mehsul listi</a></li>
          
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Karqo emeliyyatlari</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/karqolist');?>"><i class="fa fa-circle-o"></i> Karqo listi</a></li>
            <li><a href="<?php echo base_url('admin/karqodesi');?>"><i class="fa fa-circle-o"></i> Karqo desi</a></li>
          </ul>
        </li> 
         <li class="treeview">
          <a href="#">
           <i class="fas fa-university"></i> <span>Bank emeliyyatlari</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/bank');?>"><i class="fas fa-university"></i> Bank listi</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
           <i class="fa fa-cogs" ></i>
<span>Umumi  emeliyyatlari</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/gizlilik');?>"><i class="fa fa-circle-o"></i>Gizlilik muqavilesi</a></li>
            <li><a href="<?php echo base_url('admin/satis');?>"><i class="fa fa-circle-o"></i>Satis muqavilesi</a></li>
            <li><a href="<?php echo base_url('admin/suallar');?>"><i class="fa fa-circle-o"></i>Suallar </a></li>
              <li><a href="<?php echo base_url('admin/qaranti');?>"><i class="fa fa-circle-o"></i>Qaranti ve iade </a></li>
              <li><a href="<?php echo base_url('admin/smedia');?>"><i class="fa fa-circle-o"></i>Sosial mediya </a></li>
          
          </ul> 
        
        </li>
         <li class="treeview">
          <a href="#">
           <i class="fas fa-university"></i> <span>Mesajlar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/mesajlar');?>"><i class="fas fa-message"></i> mesaj listi</a></li>
          
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
           <i class="fas fa-users"></i> <span>Userler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/users');?>"><i class="fas fa-users"></i> Userler listi</a></li>
          
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
           <i class="fas fa-comments"></i> <span>Comments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/comments');?>"><i class="fas fa-users"></i> comment listi</a></li>
          
          </ul>
        </li>
          <li>
          <a href="<?php echo base_url('admin/cixis');?>"> <i class="fa fa-sign-out"></i> <span>Cixis</span></a>
          
        
        </li>
        <li class="header">
          Funksiyalar:
        </li>
   

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!--ana baslangic qismi-->

   <div class="content-wrapper">
    <section class="content-header">
      <h1>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
