<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mehsul elave et</h3>
            </div>
            
            <form class="form-horizontal" action="<?php echo base_url('admin/mehsuladded');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul adi</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="title"  >
                  
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
                    <input type="text" class="form-control" name="qiymet"  >
                  
                  </div>
               
                  <label class="col-sm-2 control-label">Mehsul tarixi</label>

                  <div class="col-sm-3">
                   <input type="date" name="tarix">
                  </div>
            </div>
                 <div class="form-group">
                  <label  class="col-sm-2 control-label " >Sekil 1</label>

                  <div class="col-sm-3">
                    <input type="file" class="form-control" name="sekil1"  >
                  
                  </div>
               
                  <label class="col-sm-2 control-label">Sekil 2</label>

                  <div class="col-sm-3">
                   <input type="file" name="sekil2">
                  </div>
            </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label " >Sekil 3</label>

                  <div class="col-sm-3">
                    <input type="file" class="form-control" name="sekil3"  >
                  
                  </div>
               
                  <label class="col-sm-2 control-label">Sekil 4</label>

                  <div class="col-sm-3">
                   <input type="file" name="sekil4">
                  </div>
            </div>
            <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul melumati</label>

                  <div class="col-sm-10">
                    <textarea name="melumat" id="editor1" class="form-control"></textarea>
                  
                  </div>
               
                 
            </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label " >Mehsul aciqlamasi</label>

                  <div class="col-sm-10">
                    <textarea name="aciqlama" id="editor2" rows="3" class="form-control"></textarea>
                  
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