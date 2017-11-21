<?php
$this->session->set_userdata('link', 'penjualan'); 
	$this->load->view('templates/header');
	?>
	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Tabel Penjualan <?php echo tanggall(); ?></h2>   
					<h5>Welcome <?php echo $this->session->userdata('nama');  ?> , Love to see you back. </h5>
			</div>
			</div>
			<!-- /. ROW  -->
			<hr />

			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
								<div class="col-md-12 text-right" style="margin-top:20px;">
		<?php echo anchor(site_url("penjualan/tambah"),'<i class="fa fa-plus">&nbsp;Transaksi Baru</i>', 'class="btn btn-primary"');?>
	</div>
			
						<div class="panel-heading">
							 <h3 style="color: black;"><strong>List Penjualan</strong></h3>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th width="5%" style="text-align:center;">No</th>
			<th style="text-align:center; vertical-align:middle;">Nama Pegawai</th>
			<th style="text-align:center; vertical-align:middle;">Judul</th>
			<th style="text-align:center; vertical-align:middle;">Tema</th>
			<th style="text-align:center; vertical-align:middle;">Penulis</th>
			<th style="text-align:center; vertical-align:middle;">Harga</th>
			<th style="text-align:center; vertical-align:middle;">Tanggal Penjualan</th>
			<th style="text-align:center; vertical-align:middle;">Total</th>
			<th style="text-align:center; vertical-align:middle;">Aksi</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($penjualan as $key => $value) { ?>

			<tr>
				<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->nama; ?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->judul; ?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->tema; ?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->penulis; ?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->harga; ?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->tgl_penjualan; ?></td>
				<td align="center" style="vertical-align:middle;"><?php echo $value->total; ?></td>

				
				<td align="center" style="vertical-align:middle;">
				<?php echo anchor(site_url("penjualan/delete/".$value->no_penjualan),
					'<i class="fa fa-trash"></i>', 
					'class="btn btn-danger"');?>
					</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<?php 
$this->load->view('templates/footer');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	} );
</script>