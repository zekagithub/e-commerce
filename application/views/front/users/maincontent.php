
<h1>Qeydiyyat formu</h1>
<p>Eger hesabiniz varsa,zehmet olmasa<a href="<?php echo base_url('giris');  ?>"><b>TIKLAYIN..</b></a>.</p>
		<div class="row">
			<?php echo $this->session->flashdata('xeta'); ?>

	
</div>


<form action="<?php echo base_url('qeydol');?>" method="post" class="form-horizontal">
<fieldset id="account">
<legend>Şexsi melumatlar</legend>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-firstname">Ad ve Soyad</label>
<div class="col-sm-10">
<input type="text" name="adsoyad" value="" placeholder="ad vesoyad" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
<div class="col-sm-10">
<input type="email" name="email" value="" placeholder="E-Mail" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-telephone">Telefon</label>
<div class="col-sm-10">
<input type="number" name="telefon" value="" placeholder="Telefon" required class="form-control" />
<input type="hidden" name="ip" value="<?php echo GetIP(); ?>">
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-telephone">Doğum Tarixi</label>
<div class="col-sm-10">
<input type="date" name="dogumtarixi" value="" required class="form-control" />
</div>
</div>
</fieldset>
<fieldset id="address">
<legend>Unvan Melumatlari</legend>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-address-1">Unvan</label>
<div class="col-sm-10">
<textarea name="unvan" rows="8" cols="80" required class="form-control"></textarea>
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label">Şeher</label>
<div class="col-sm-10">
<input type="text" name="seher" value="" required class="form-control" />
</div>
</div>


<div class="form-group required">
<label class="col-sm-2 control-label">Poct kodu</label>
<div class="col-sm-10">
<input type="number" name="poctkodu" value="" placeholder="Poct kodu" required class="form-control" />
</div>
</div>
</fieldset>
<fieldset>
<legend>Şifreniz</legend>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-password">Şifre</label>
<div class="col-sm-10">
<input type="password" name="sifre" value="" placeholder="Şifre" required class="form-control" />
</div>
</div>
<div class="form-group required">
<label class="col-sm-2 control-label" for="input-confirm">Şifre Tekrari</label>
<div class="col-sm-10">
<input type="password" name="confirm" value="" placeholder="Şifre Tekrarı" required class="form-control" />
</div>
</div>
</fieldset>
<div class="buttons">
<div class="pull-right"><span class="mg-add">Muqavileni oxudum<a href="" class="agree"><b>Gizlilik Muqavilesi</b></a></span>
<input type="checkbox" name="agree" value="1" required /> &nbsp; <input type="submit" value="Qeyd ol" class="btn btn-primary" />
</div>
</div>
</form>
