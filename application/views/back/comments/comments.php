<?php $this->load->view('back/include/header');
$this->load->view('back/include/leftmenu');?>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                     <?php echo $this->session->flashdata('success');?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Serh  listi</h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1"  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>s.no</th>
                  <th>Adsoyad</th>
                  <th>Serh</th>
                  <th>tarix</th>
                  <th style="width:40px ">emeliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $say=1; foreach ($melumat as $melumat ) {?>
                  
                <tr>
                  <td><?php echo $say++;?> </td>
                  <td><?=$melumat->adsoyad?></td>
                  <td><?=$melumat->comment?></td>
                  <td><?=$melumat->tarix?></td>
                              
      

                  <td>
                    <a href="<?php echo base_url('admin/commentedit/'.$melumat->id.'');?>"><button class="btn btn-primary">Oxu</button></a>
                    <a href="<?php echo base_url('admin/commentdelete/'.$melumat->id.'/id/comments');?>"><button class="btn btn-danger">Sil</button></a>
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