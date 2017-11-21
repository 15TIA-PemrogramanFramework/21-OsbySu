<?php 
$this->session->set_userdata('link', 'pegawai');
	$this->load->view('templates/header');
	?>
	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Tabel Pegawai <?php echo tanggall(); ?></h2>   
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
								<?php
									$a = $this->session->userdata('status'); 
								if( $a == 'admin') { 
			echo anchor(site_url("pegawai/tambah"),'<i class="fa fa-plus">&nbsp;Tambah Pegawai</i>', 'class="btn btn-primary"'); 
			}?>
	</div>
			
						<div class="panel-heading">
							 <h3 style="color: black;"><strong>List Pegawai</strong></h3>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
		<tr>
			<th style="text-align:center; vertical-align:middle;">No</th>
			<th style="text-align:center; vertical-align:middle;">Nama</th>
			<th style="text-align:center; vertical-align:middle;">Username</th>
			<th style="text-align:center; vertical-align:middle;">Password</th>
			
			<th style="text-align:center; vertical-align:middle;">Status</th>
			<th style="text-align:center; vertical-align:middle;">Aksi</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach ($pegawai as $key => $value) { ?>

			<tr>
				<td><?php echo $key+1;?></td>
				<td><?php echo $value->nama; ?></td>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->password; ?></td>
				<td><?php echo $value->status; ?></td>
				<td align="center" style="vertical-align:middle;">
				
				<?php
					$a = $this->session->userdata('status'); 
					if( $a == 'admin') { 
					 echo anchor(site_url("pegawai/edit/".$value->id_pegawai),
					'<i class="fa fa-pencil"></i>', 
					'class="btn btn-warning"');}?>
					 <?php 
					$a = $this->session->userdata('status'); 
					if( $a == 'admin') { 
					 echo anchor(site_url("pegawai/delete/".$value->id_pegawai),
					'<i class="fa fa-trash"></i>', 
					'class="btn btn-danger"');}?>
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