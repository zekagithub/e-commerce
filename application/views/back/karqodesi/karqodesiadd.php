<?php $this->load->view('back/include/header'); ?>
<?php $this->load->view('back/include/leftmenu'); ?>
<section class="content">
 
      <div class="row">
        <div class="col-md-8">
                  <div class="box box-solid">
                        <div class="box-body">
                              <form method="post" action="<?= base_url('admin/karqodesiadded');?>">
                                     <div class="form-group">
                                          <label>Karqo basliq</label>
                                         <select name="karqo_id" class="form-control">
                                          <?php $melumat=karqocek(); 
                                         foreach($melumat as $melumat){?>
                                          <option value="<?php echo $melumat->id ?>"><?php echo $melumat->title?></option>
                                        <?php } ?>


                                         </select>
                                          
                                    </div>
                                    <div class="form-group">
                                          <label>Qiymet</label>
                                          <input type="text" name="price"  class="form-control">
                                          
                                    </div>
                                 
                                    <div class="form-group">
                                      <a type="submit" href="<?=base_url('admin/karqodesi');?>" class="btn btn-warning" >Legv et
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