
<h1>Giriş Formu</h1>
<p>Eğer hesabınız yoxdursa, Zehmet olmasa <a href="<?php echo base_url('qeydiyyat'); ?>"><b>TIKLAYIN..</b></a></p>
<?php echo $this->session->flashdata('xeta');?>
<form action="<?php echo base_url('usergiris'); ?>" method="post" class="form-horizontal">
<fieldset id="account">
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
<div class="col-sm-5">
<input type="email" name="email" value="" placeholder="E-Mail" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-password">Şifre</label>
<div class="col-sm-5">
<input type="password" name="sifre" value="" placeholder="Şifre" required class="form-control" />
</div>
</div>
</fieldset>
<div class="buttons">
<div class="pull-right">
<input type="submit" value="Giriş et" class="btn btn-primary" />
</div>
</div>
</form>
