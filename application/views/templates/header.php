<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Salaf Book Store</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/') ?>css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/') ?>css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/') ?>css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url('assets/') ?>js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                	<a class="navbar-brand" href="<?php echo site_url('home'); ?>"><?php echo $this->session->userdata('status');  ?></a>
				</div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="<?php echo site_url('login/logout') ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url('assets/') ?>img/find_user.png" class="user-image img-responsive"/>
					</li>
				                   
                      <li>
                        <a <?php if($this->session->userdata('link') == 'penjualan') { ?> class="active-menu" <?php } ?>href="<?php echo site_url('penjualan'); ?>"><i class="fa fa-table fa-3x"></i> Table Penjualan</a>
                    </li>
                    <li>
                        <a <?php if($this->session->userdata('link') == 'pegawai') { ?> class="active-menu" <?php } ?> href="<?php echo site_url('pegawai'); ?>"><i class="fa fa-table fa-3x"></i> Table Pegawai</a>
                    </li>
                    <li  >
                        <a <?php if($this->session->userdata('link') == 'buku') { ?> class="active-menu" <?php } ?> href="<?php echo site_url('buku'); ?>"><i class="fa fa-table fa-3x"></i> Table Buku</a>
                    </li>	

                </ul>
               
            </div>
            
        </nav>