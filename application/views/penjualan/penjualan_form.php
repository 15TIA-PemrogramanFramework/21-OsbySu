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

<!--banner-->
<!--//banner-->
<!--faq-->
<div class="blank">
	<div class="blank-page" style="padding-right:40px; padding-left:40px;">
		<div class="tab-content" style="margin-bottom:30px;">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="<?php echo $action;?>" method="POST">

							<!--<div class="form-group mb-n">
							<label class="col-md-2 control-label">Kode Buku</label>
							<div class="col-md-8">
								<input type="text" class="form-control1" placeholder="" disabled="">
							</div>
						</div>-->
						<div class="form-group">
							<label for="focusedinput" class="col-sm-1 control-label">Judul</label>
							<select name="id_buku" id="buku" class="form-control">
                                                   <?php foreach ($buku as $key => $value) { ?>
								<option value="<?php echo $value->id_buku; ?>"><?php echo $value->judul;?>
								</option>
								<?php } ?>
                                                </select>
                                            </div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-1 control-label">Pegawai</label>
							<select name="id_pegawai" id="pegawai" class="form-control">
								<?php foreach ($pegawai as $key => $value) { ?>
								<option value="<?php echo $value->id_pegawai; ?>"><?php echo $value->nama;?></option>
								<?php } ?>
							</select></div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-0 control-label">Tanggal</label>
								<input type="date" name="tgl_penjualan" class="form-control2" id="focusedinput" placeholder="" value="<?php echo $tgl_penjualan;?>">
							</div></div>

						<div class="form-group">
							<label for="focusedinput" class="col-sm-0 control-label">Pembayaran</label>
							<div class="col-sm-0">
								<input class="col-sm-4" type="text" name="total" class="form-control" id="focusedinput" placeholder="" value="<?php echo $total;?>">
							</div>
						</div>
						<input type="hidden" name="no_penjualan" value="<?php echo $no_penjualan; ?>">
					</div>
					
				</div>
				<div class="bs-example" data-example-id="form-validation-states-with-icons">
					<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
				</div>

				<div class="panel-footer">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2" style="margin-top:15px;">
							<center>
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
								<a href="<?php echo site_url('penjualan'); ?>" class="btn btn-default">Kembali</a>
								<input type="reset" class="btn-inverse btn">
							</center>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php
	$this->load->view('Templates/Footer');
	?>