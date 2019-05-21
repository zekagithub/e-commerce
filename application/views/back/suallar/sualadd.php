<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>
<section class="content">
 
      <div class="row">
        <div class="col-md-8">
                  <div class="box box-solid">
                        <div class="box-body">
                              <form method="post" action="<?= base_url('admin/sualadded');?>">
                                     <div class="form-group">
                                          <label>Sual basliq</label>
                                          <input type="text" name="title"  class="form-control">
                                          
                                    </div>
                                    <div class="form-group">
                                          <label>cavab</label>
                                         <textarea rows="3" name="description" id="editor1" class="form-control"></textarea>
                                          
                                    </div>
                                 
                                    <div class="form-group">
                                      <a type="submit" href="<?=base_url('admin/suallar');?>" class="btn btn-warning" >Legv et
                                        </a>
                                          <button type="submit" class=" btn-flat btn-success btn btn-right">Elave et</button>
                                          
                                    </div> 
                                  
                                          
                                          
                                   
                              </form>
                              
                        </div>
                        
                  </div>

          
        </div>
      
     
      </div>


  </section>
<?php $this->load->view('back/include/footer');