<?php $this->load->view('back/include/header');
$this->load->view('back/include/leftmenu');?>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                     <?php echo $this->session->flashdata('success');?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mesaj listi</h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1"  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>s.no</th>
                  <th>Gonderen</th>
                  <th>Email adresi</th>
                  <th>Movzu</th>
                  <th>status</th>
                  <th style="width:40px ">emeliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $say=1; foreach ($melumat as $melumat ) {?>
                  
                <tr>
                  <td><?php echo $say++;?> </td>
                  <td><?=$melumat->adsoyad?></td>
                  <td><?=$melumat->email?></td>
                  <td><?=$melumat->movzu?></td>
                           <td>
                            <?php if($melumat->status==1){ ?> 
                             <a class="btn btn-success">mesaj oxunmus</a></td>
                             <?php } else{?>
                               <a class="btn btn-warning">mesaj oxunmamis</a></td>  
                               <?php } ?>     
      

                  <td>
                    <a href="<?php echo base_url('admin/mesajedit/'.$melumat->id.'');?>"><button class="btn btn-primary">Oxu</button></a>
                    <a href="<?php echo base_url('admin/mesajdelete/'.$melumat->id.'/id/mesajlar');?>"><button class="btn btn-danger">Sil</button></a>
                  </td>
               
                </tr>
                <?php } ?>
               
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
"

<?php $this->load->view('back/include/footer');
?>