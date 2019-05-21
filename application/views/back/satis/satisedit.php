<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">satis muqavilesini deyisdir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/satisupdate');?>" method="post"">
              <div class="box-body">
                 <div class="form-group">
                                          <label>Muqavile basliq</label>
                                          <input type="text" name="title" value="<?php echo $melumat->title;?>"  class="form-control"> 
                                          <input type="hidden" name="id" value="<?php echo $melumat->id;?>"  class="form-control">
                                          
                                    </div>
                    <div class="form-group">
                                          <label>Description</label>
                                         <textarea rows="3" name="description" id="editor1" class="form-control"><?php echo $melumat->description?></textarea>
                                          
                                    </div>
                
                
                
            
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/satis');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');