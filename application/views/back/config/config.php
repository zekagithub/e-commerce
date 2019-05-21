<?php $this->load->view('back/include/header');
$this->load->view('back/include/leftmenu');?>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sayt ayarlar listi</h3>
            </div>
            <?php echo $this->session->flashdata('success');?>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>s.no</th>
                  <th>Sayt title</th>
                  <th>sayt url</th>
                  <th>sayt telefon</th>
                  <th>sayt mail</th>
                  <th>unvan</th>
                  <th>emeliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $say=1;foreach ($melumat as $melumat ) {?>
                  
                <tr>
                  <td><?php echo $say++;?> </td>
                  <td><?php echo $melumat->title?>
                  </td>
                  <td><?php echo $melumat->url?></td>
                  <td> <?php echo $melumat->telefon?></td>
                  <td> <?php echo $melumat->mail?></td>
                  <td><?php echo $melumat->inform?></td>
                  <td><a href="<?php echo base_url('admin/editconfig/'.$melumat->id.'');?>"><button class="btn btn-primary">Deyisdir</button></a></td>
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



<?php $this->load->view('back/include/footer');
?>