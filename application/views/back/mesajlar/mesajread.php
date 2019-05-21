<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mesaj sehifesi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" >
              <div class="box-body">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Adi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="<?php echo $melumat->adsoyad;?>" >
                    <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                  </div>
                </div>  
                 
                   <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Email adresi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->email;?>" >
                  </div>
                </div>    
                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Movzu</label> <div class="col-sm-10">
                <textarea  rows="3" class="form-control" disabled ><?php echo $melumat->movzu?></textarea>               
                 </div>
                </div>  
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Mesaj</label> <div class="col-sm-10">
                <textarea  rows="3" class="form-control" disabled ><?php echo $melumat->mesaj?></textarea>               
                 </div>
                </div>
                
                
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/mesajlar');?>">Geri qayit</a>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');