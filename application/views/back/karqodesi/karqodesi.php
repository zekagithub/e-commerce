<?php $this->load->view('back/include/header');
$this->load->view('back/include/leftmenu');?>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                     <?php echo $this->session->flashdata('success');?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Karqolar desi listi</h3>
              <a href="<?=base_url('admin/karqodesiadd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> karqo qiymet  Elave et</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1"  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>s.no</th>
                  <th>Firma adi</th>
                  <th>Qiymet</th>
                  <th style="width:100px ">emeliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $say=1; $melumat=karqoet();foreach ($melumat as $melumat ) {?>
                  
                <tr>
                  <td><?php echo $say++;?> </td>
                  <td><?=$melumat->title?></td>
                  <td><?=$melumat->qiymet?></td>
                                 
                  <td>
                    <a href="<?php echo base_url('admin/editkarqodesi/'.$melumat->id.'');?>"><button class="btn btn-primary">Deyisdir</button></a>
                    <a href="<?php echo base_url('admin/karqodesidelete/'.$melumat->id.'/id/karqodesi');?>"><button class="btn btn-danger">Sil</button></a>
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