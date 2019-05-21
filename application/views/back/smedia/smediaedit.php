<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sosial mediya deyisdir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/smediaupdate');?>" method="post"">
              <div class="box-body">
                 <div class="form-group">
                                          <label>Smedia adi</label>
                                          <input type="text" name="title" value="<?php echo $melumat->title;?>"  class="form-control"> 
                                          <input type="hidden" name="id" value="<?php echo $melumat->id;?>"  class="form-control">
                                          
                                    </div>
                    <div class="form-group">
                                          <label>Url</label>
                                          <input type="text" name="url" value="<?php echo $melumat->url;?>"  class="form-control"> 
                                          
                                    </div>
                
                
                
            
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/smedia');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');