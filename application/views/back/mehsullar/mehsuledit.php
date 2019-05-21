<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mehsulu deyisdir</h3>
            </div>
            
            <form class="form-horizontal" action="<?php echo base_url('admin/mehsulupdate');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul adi</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="title" value="<?php echo $melumat->title?>" >
                    <input type="hidden" class="form-control" name="id" value="<?php echo $melumat->id?>"  >
                  
                  </div>
               
                  <label class="col-sm-2 control-label">Kateqoriya</label>

                  <div class="col-sm-3">
                   <select class="form-control" name="kat_id">
                    <?php $kateqoriya=kateqoriyacek();foreach($kateqoriya as $kateqoriya){?>
                     <option value="<?=$kateqoriya->id?>"><?=$kateqoriya->title?></option>
                     <?php } ?>
                    
                   </select>
                  </div>
            </div>
               <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul qiymet</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="qiymet" value="<?php echo $melumat->price ?>"  >
                  
                  </div>
               
                  <label class="col-sm-2 control-label">Mehsul tarixi</label>

                  <div class="col-sm-3">
                   <input type="date" name="tarix" value="<?php echo $melumat->date ?>">
                  </div>
            </div>
                 <div class="form-group">
                  <label  class="col-sm-2 control-label " >Sekil 1</label>

                  <div class="col-sm-3">
                    <input type="file" class="form-control" name="sekil1"  >
                    <br>
                    <img src="<?php echo base_url();echo $melumat->mini1;?>">
                    <p class="text-blue">Movcud sekil</p>
                    <p class="text-red">Deyisdirmeseniz sekil secmeyin</p>
                  
                  </div>
               
                  <label class="col-sm-2 control-label">Sekil 2</label>

                  <div class="col-sm-3">
                   <input type="file" name="sekil2">
                   <br>
                    <img src="<?php echo base_url();echo $melumat->mini2;?>">
                    <p class="text-blue">Movcud sekil</p>
                    <p class="text-red">Deyisdirmeseniz sekil secmeyin</p>
                  </div>
            </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label " >Sekil 3</label>

                  <div class="col-sm-3">
                    <input type="file" class="form-control" name="sekil3"  >
                  <br>
                    <img src="<?php echo base_url();echo $melumat->mini3;?>">
                    <p class="text-blue">Movcud sekil</p>
                    <p class="text-red">Deyisdirmeseniz sekil secmeyin</p>
                  </div>
               
                  <label class="col-sm-2 control-label">Sekil 4</label>

                  <div class="col-sm-3">
                   <input type="file" name="sekil4">
                   <br>
                    <img src="<?php echo base_url();echo $melumat->mini4;?>">
                    <p class="text-blue">Movcud sekil</p>
                    <p class="text-red">Deyisdirmeseniz sekil secmeyin</p>
                  </div>
            </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul melumati</label>

                  <div class="col-sm-10">
                    <textarea name="melumat" id="editor1" class="form-control"><?php echo $melumat->melumat?></textarea>
                  
                  </div>
               
                 
            </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul aciqlamasi</label>

                  <div class="col-sm-10">
                    <textarea name="aciqlama" id="editor2" rows="3" class="form-control"><?php echo $melumat->description;?></textarea>
                  
                  </div>
               
                 
            </div>
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/mehsullar');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Elave et</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');