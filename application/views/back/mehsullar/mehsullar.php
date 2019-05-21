<?php $this->load->view('back/include/header');
$this->load->view('back/include/leftmenu');?>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                     <?php echo $this->session->flashdata('success');?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mehsullar listi</h3>
              <a href="<?=base_url('admin/mehsuladd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Elave et</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1"  class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>s.no</th>
                  <th>Mehsul adi</th>
                  <th>Kateqoriya</th>
                  <th>Melumat</th>
                  <th>Qiymet</th>
                  <th>status</th>
                  <th style="width:100px ">emeliyyat</th>
                </tr>
                </thead>
                <tbody>
                  <?php $say=1;foreach ($melumat as $melumat ) {?>
                  
                <tr>
                  <td><?php echo $say++;?> </td>
                  <td><?php echo $melumat->title; ?></td>
                  <td><?php echo kateqoriyaal($melumat->kat_id)->title;?></td>
                  <td><?php echo $melumat->melumat;?></td>
                  <td><?=$melumat->price;?> Man</td>
                  <td> 
                   <input class="toggle_check"
                   data-onstyle="success"  
                    data-on="aktiv" 
                    data-off="passiv" 
                    data-offstyle="danger"
                    data-toggle="toggle"
 
                    type="checkbox"
                    dataID="<?php echo $melumat->id;?>"
                    dataURL="<?php echo base_url('admin/karqoset'); ?>" 
                     <?php echo ($melumat->status==1) ? "checked" : "";?>>
                     </td>                  
                  <td>
                    <a href="<?php echo base_url('admin/editproduct/'.$melumat->id.'');?>"><button class="btn btn-primary">Deyisdir</button></a>
                    <a href="<?php echo base_url('admin/productdelete/'.$melumat->id.'/id/products');?>"><button class="btn btn-danger">Sil</button></a>
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