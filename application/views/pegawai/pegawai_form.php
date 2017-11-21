<?php 
$this->session->set_userdata('link', 'pegawai');
	$this->load->view('templates/header');
	?>
	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Tabel Pegawai <?php echo tanggall(); ?></h2>   
					<h5>Welcome <?php echo $this->session->userdata('nama');  ?>, Love to see you back. </h5>
			</div>
			</div>
			<!-- /. ROW  -->
			<hr />

			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
								<div class="col-md-12 text-right" style="margin-top:20px;">
		<?php echo anchor(site_url("penjualan/tambah"),'<i class="fa fa-plus">&nbsp;Tambah Pegawai</i>', 'class="btn btn-primary"');?>
	</div>
			
						<div class="panel-heading">
							 <h3 style="color: black;"><strong>Form Pegawai</strong></h3></div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<form action="<?php echo $action;  ?>" method="POST">
	<div class="form-group" style="padding-top:20px;">
		<label>Nama</label>
		<input type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" placeholder="Masukkan username" value="<?php echo $username; ?>" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" placeholder="Masukkan password" value="<?php echo $password; ?>" class="form-control" name="password">
	</div>
	<div class="form-group">
	<label for="focusedinput" class="col-sm-1 control-label">Status</label>
							<select name="status" id="pegawai" class="form-control">
							<option value="admin">Admin</option>
							<option value="pegawai">Pegawai</option>
							</select></div>
						
	<input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('pegawai'); ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>