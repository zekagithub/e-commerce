<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sayt ayarlarini deyisdir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/karqoupdate');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Firma adi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $melumat->title;?>" >
                    <input type="hidden" class="form-control" name="id" value="<?php echo $melumat->id;?>" >
                  </div>
                </div>  
                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">sekil</label>                 <div class="col-sm-10">
                    <input type="file" class="form-control" name="sekil">
                
                  </div>
                </div>
                   <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Movcud Sekil</label>
                  <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->mini); ?>" class="profile-user-image image-responsive">
                    <p class="text-blue">Deyisdirmeseniz sekil secmeyin</p>
                  </div>
                </div>   
              </div>
                
            
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/karqolist');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');