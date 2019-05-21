<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">karqo qiymet deyisdir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/karqodesiupdate');?>" method="post"">
              <div class="box-body">
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Firma adi</label> 
                 <div class="col-sm-4">
                    <select name="karqo_id" class="form-control">
                      <?php $karqo=karqocek();foreach ($karqo as $karqo) {
                      if ($karqo->id==$melumat->karqo_id) {?>
                       
                      <option selected value="<?php echo $karqo->id;?>"><?php echo $karqo->title?></option>
                      <?php }else{ ?>
                      <option value="<?php echo $karqo->id;?>"><?php echo $karqo->title?></option>
           <?php } } ?>
                    </select>

                    <input type="hidden" class="form-control" name="id" value="<?php echo $melumat->id;?>" >
                  </div>
                </div> 
                  <div class="form-group" >
                
                     <label for="inputEmail3" class="col-sm-2 control-label">Qiymet</label> 
                        <div class="col-sm-4">
                       <input type="text" name="price" value="<?php echo $melumat->qiymet?>"  class="form-control">
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