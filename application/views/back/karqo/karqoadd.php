<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Karqo elave et</h3>
            </div>
            
            <form class="form-horizontal" action="<?php echo base_url('admin/karqoadded');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label " >Karqo basliqi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title"  >
                  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekil</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                  </div>
                </div> 
           
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/karqolist');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Elave et</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');