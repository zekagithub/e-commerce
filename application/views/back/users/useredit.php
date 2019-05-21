<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">user page</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" >
              <div class="box-body">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Adi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="<?php echo $melumat->adsoyad;?>" >
                    
                  </div>
                </div>  
                 
                   <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Email adresi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->email;?>" >
                  </div>
                </div>
                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Sifresi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->sifre;?>" >
                  </div>
                </div>    
                 <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">telefon</label> <div class="col-sm-10">
                <textarea  rows="3" class="form-control" disabled ><?php echo $melumat->telefon?></textarea>               
                 </div>
                </div>  
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">unvan</label> <div class="col-sm-10">
                <textarea  rows="3" class="form-control" disabled ><?php echo $melumat->unvan?></textarea>               
                 </div>
                </div>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Seher</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->seher;?>" >
                  </div>
                </div>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Ip unvani</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->ip;?>" >
                  </div>
                </div>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Poct</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->poct;?>" >
                  </div>
                </div>
                  <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">dogum tarixi</label> <div class="col-sm-10">
                    <input type="text" class="form-control" disabled  value="<?php echo $melumat->dtarix;?>" >
                  </div>
                </div>

                
                
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/users');?>">Geri qayit</a>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');