<?php 
$this->session->set_userdata('link', 'customer');
$this->load->view('templates/header'); ?>
<form action="<?php echo $action;  ?>" method="POST">
	<div class="form-group" style="padding-top:20px;">
		<label>Nama</label>
		<input type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" placeholder="Masukkan username" value="<?php echo $jk; ?>" class="form-control" name="jk">
	</div>
	<div class="form-group">
		<label>No Telepon</label>
		<input type="text" placeholder="Masukkan password" value="<?php echo $no_telp; ?>" class="form-control" name="no_telp">
	</div>
	<input type="hidden" name="id" value="<?php echo $id_customer; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('customer'); ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>