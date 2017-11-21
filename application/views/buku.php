<?php 
$this->load->view('templates/header');
?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px; margin-bottom:20px;">
		<?php echo anchor(site_url("mahasiswa/tambah"),'<i class="fa fa-plus">&nbsp;Tambah Data</i>', 'class="btn btn-primary"');?>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Tema</th>
			<th>Penulis</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($buku as $key => $value) { ?>

			<tr>
				<td><?php echo $value->id_buku; ?></td>
				<td><?php echo $value->judul; ?></td>
				<td><?php echo $value->tema; ?></td>
				<td><?php echo $value->id_penulis; ?></td>
				<td><?php echo $value->harga; ?></td>
				<td>
				<?php echo anchor(site_url("buku/edit/".$value->id),
					'<i class="fa fa-pencil"></i>', 
					'class="btn btn-warning"');?>
				<?php echo anchor(site_url("buku/delete/".$value->id),
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