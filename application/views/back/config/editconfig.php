<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>

 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sayt ayarlarini deyisdir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/configupdate');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">saytin basliqi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?php echo $melumat->title;?>" >
                    <input type="hidden" class="form-control" name="id" value="<?php echo $melumat->id;?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">sayt url</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="url" value="<?php echo $melumat->url;?>">
                  </div>
                </div> <div class="form-group">
                  <label class="col-sm-2 control-label">sayt telefon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" value="<?php echo $melumat->telefon;?>">
                  </div>
                </div> <div class="form-group">
                  <label class="col-sm-2 control-label">sayt unvan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="unvan" value="<?php echo $melumat->inform;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">sayt mail</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mail" value="<?php echo $melumat->mail;?>">
                  </div>
                </div> 
                 <div class="form-group">
                  <label class="col-sm-2 control-label">sayt description</label>

                  <div class="col-sm-10">
                           <textarea rows="3" id="editor1" class="form-control" name="desc"><?=$melumat->sayt_desc?></textarea>
                         </div>
                </div>
              
              </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('admin/config');?>">Legv et</a>
                  <button type="submit" class="btn btn-info primary-right">Deyisdir</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<?php $this->load->view('back/include/footer');