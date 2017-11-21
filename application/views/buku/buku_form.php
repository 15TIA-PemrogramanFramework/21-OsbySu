<?php 
$this->session->set_userdata('link', 'buku');
	$this->load->view('templates/header');
	?>
	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Tabel Buku <?php echo tanggall(); ?></h2>   
					<h5>Welcome <?php echo $this->session->userdata('nama');  ?> , Love to see you back. </h5>
			</div>
			</div>
			<!-- /. ROW  -->
			<hr />

			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
			
						<div class="panel-heading">
							Tambah Buku
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<form action="<?php echo $action;  ?>" method="POST">
	<div class="form-group" style="padding-top:20px;">
		<label>Nama Buku</label>
		<input type="text" placeholder="Masukkan Judul Buku" value="<?php echo $judul; ?>" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Tema</label>
		<input type="text" placeholder="Masukkan Tema" value="<?php echo $tema; ?>" class="form-control" name="tema">
	</div>
	<div class="form-group">
		<label>Penulis</label>
		<input type="text" placeholder="Masukkan Penulis" value="<?php echo $penulis; ?>" class="form-control" name="penulis">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="text" placeholder="Masukkan Harga" value="<?php echo $harga; ?>" class="form-control" name="harga">
	</div>
	
	<div class="form-group">
		<label>Nama Supplier</label>
			<select name="id_supplier" id="status" class="form-control">
				<?php foreach ($supplier  as $key => $value) { ?>
					<option value="<?php echo $value->id_supplier; ?>"><?php echo $value->nama_supplier;?></option>
					<?php } ?>
			</select>
	</div>
	<input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('buku'); ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>