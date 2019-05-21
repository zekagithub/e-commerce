<?php $this->load->view('back/include/header');
$this->load->view('back/include/leftmenu');?>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                     <?php echo $this->session->flashdata('success');?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Qaranti muqavile listi</h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1"  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>s.no</th>
                  <th>Basliq</th>
                  <th>desc</th>
                  <th style="width:40px ">emeliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $say=1; foreach ($melumat as $melumat ) {?>
                  
                <tr>
                  <td><?php echo $say++;?> </td>
                  <td><?=$melumat->title?></td>
                  <td><?=$melumat->description?></td>
                                 
                  <td>
                    <a href="<?php echo base_url('admin/qarantiedit/'.$melumat->id.'');?>"><button class="btn btn-primary">Deyisdir</button></a>
                   
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
<?php $this->load->view('back/include/footer');
?>