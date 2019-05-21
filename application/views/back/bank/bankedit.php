<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Bank deyisdirme </h3>
            </div>
            
            <form class="form-horizontal" action="<?php echo base_url('admin/bankupdate');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label " >Bank adi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?=$melumat->title;?>" name="title"  >
                    <input type="hidden" class="form-control" required="" value="<?=$melumat->id;?>" name="id"  >
                  
                  </div>
                </div> <div class="form-group">
                  <label  class="col-sm-2 control-label " >Sobe adi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?=$melumat->sobe?>" name="sobe"  >
                  
                  </div>
                </div> <div class="form-group">
                  <label  class="col-sm-2 control-label " >Iban no</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?=$melumat->sobe?>" name="iban"  >
                  
                  </div>
                </div> <div class="form-group">
                  <label  class="col-sm-2 control-label " >Hesab no</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?=$melumat->sobe?>" name="hesab"  >
                  
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sekil</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Movcud Sekil</label>

                  <div class="col-sm-10">
                    <p class="text-aqua">Deyisdirmeseniz sekil secmeyin</p>
                    <img src="<?=base_url();echo $melumat->mini?>"">
                  </div>
                </div> 
           
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/bank');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');