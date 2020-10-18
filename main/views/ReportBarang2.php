<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Telkom Pengiriman Barang</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/social-icons.css" type="text/css" media="screen" />
		<style type="text/css">
			@import "<?php echo base_url();?>/assets/datatables/css/demo_page.css";
			@import "http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.23/themes/smoothness/jquery-ui.css";
			@import "<?php echo base_url();?>/assets/datatables/css/jquery.dataTables.css";
			@import "<?php echo base_url();?>/assets/datatables/css/dataTables.tabletools.css";
			@import "<?php echo base_url();?>/assets/datatables/css/dataTables.editor.css";
		</style>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/easing.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/custom.js"></script>
		<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo base_url();?>assets/datatables/js/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.23/jquery-ui.min.js"></script>
		<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo base_url();?>assets/datatables/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo base_url();?>assets/datatables/js/dataTables.tabletools.min.js"></script>
		<script type="text/javascript" language="javascript" charset="utf-8" src="<?php echo base_url();?>assets/datatables/js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>assets/datatables/js/table.kirimbarang.js"></script>
		<!-- Isotope -->
		<script src="<?php echo base_url();?>/assets/js/jquery.isotope.min.js"></script>
		
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->
		
		
		<!-- Nivo slider -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/nivo-slider.css" type="text/css" media="screen" />
		<script src="<?php echo base_url();?>/assets/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?php echo base_url();?>/assets/css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="<?php echo base_url();?>/assets/css/superfish-left.css" /> 
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="<?php echo base_url();?>/assets/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	</head>
	
	<body>

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="index.html"><img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" alt="Nova" /></a>
					<!-- search -->
					<div class="top-search">
						<form  method="get" id="searchform" action="#">
							<div>
								<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
					<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><a href="home">Home<span class="subheader">Welcome</span></a></li>
							<li><a href="features.html">Pencarian<span class="subheader">Pencarian menurut</span></a>
								<ul>
									<li><a href="features-tabs.html"><span> Nota</span></a></li>
									<li><a href="searchbarang"><span> Barang</span></a></li>
									<li><a href="features-toggle.html"><span> History</span></a></li>	
									<li><a href="perusahaanjasa"><span> Jasa Pengiriman</span></a></li>
									<li><a href="perusahaanrekan"><span> Perusahaan Rekan</span></a></li>
								</ul>
							</li>
							<li><a href="#">Logistik Gudang<span class="subheader">Logistik gudang</span></a></li>
							<li><a href="#">Printout Laporan <span class="subheader">Daftar laporan</span></a>
								<ul>
									<li><a href="features-columns.html"><span> Laporan Keuangan Logistik Gudang</span></a></li>
									<li><a href="features-accordion.html"><span> Laporan Bukti Serah-Terima Barang</span></a></li>
									<li><a href="features-columns.html"><span>Laporan Bukti Konosemen Barang</span></a></li>
									<li><a href="features-accordion.html"><span> Laporan Form LOGKON</span></a></li>
								</ul>
							</li>
							<li><a href="#">Identitas Pegawai<span class="subheader">Login bersangkutan</span></a>
								<ul>
									<li><a href="kolompekerjaan"><span> Kolom Pekerjaan</span></a></li>
									<li><a href="reportbarang"><span> Report Barang </span></a></li>
									<li><a href="home/logout"><span> Logout </span></a></li>
								</ul>
							</li>
							<li><a href="#">Input Data<span class="subheader">Input Data melalui</span></a>
								<ul>
									<li><a href="inputpegawai"><span>Data Pegawai</span></a></li>
									<li><a href="inputrekan"><span>Data Jasa Pengiriman</span></a></li>
									<li><a href="inputperusahaan"><span>Data Perusahaan Rekan</span></a></li>
								</ul>
							</li>
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->
			
			
			

			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- content -->
					<div id="content">
						
						<!-- title -->
						<div id="page-title">
							<span class="title">Report Barang</span>
							<span class="subtitle">Status <i>report barang</i></span>
						</div>
						<!-- ENDS title -->

						
		
						<!-- gallery-->
						<div id="dt_example">
							<table cellpadding="0" cellspacing="0" border="0" class="display" id="kirimbarang" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Barang</th>
						<th>No Ijin Perusahaan</th>
						<th>No Ijin Jasa</th>
						<th>ID Kirim Prov</th>
						<th>ID Dari Prov</th>
						<th>Pegawai Jasa</th>
						<th>Pegawai Telkom</th>
						<th>Tanggal Kirim</th>
						<th>Alamat Tujuan</th>
						<th>Status Kirim</th>
						<th>Status Terima</th>
					</tr>
				</thead>
			</table>
							</div>
						<div class="spacer"></div>
			
			
						<!-- ENDS gallery -->	
						
						
						<!-- pagination -->	
						<div class="clear"></div>
						<!-- ENDS pagination -->
									
						
					</div>
					<!-- ENDS content -->

				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			
			<!-- Twitter -->

			<!-- ENDS Twitter -->

			
			<!-- FOOTER -->
			<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
						<li class="col">
							<h6>Pages</h6>
							<ul>
								<li class="page_item"><a href="home">Home</a></li>
								<li class="page_item"><a href="#">Pencarian</a></li>
								<li class="page_item"><a href="#">Logistik Gudang</a></li>
								<li class="page_item"><a href="#">Printout Laporan</a></li>
								<li class="page_item"><a href="#">Identitas Pegawai</a></li>
								<li class="page_item"><a href="#">Kolom Developer</a></li>
							</ul>
						</li>
						
						<li class="col">
							<h6>Kategori</h6>
							<ul>
								<li><a href="#">Pencarian Nota</a></li>
								<li><a href="searchbarang">Pencarian Barang</a></li>
								<li><a href="#">Pencarian History</a></li>								
								<li><a href="perusahaanjasa">Pencarian Jasa Pengiriman</a></li>
								<li><a href="perusahaanrekan">Pencarian Perusahaan Rekan</a></li>
								<li><a href="#/">Laporan Keuangan Logistik Gudang</a></li>
								<li><a href="#">Laporan Bukti Serah-Terima Barang</a></li>
								<li><a href="#">Laporan Bukti Konosemen Barang</a></li>
								<li><a href="#/">Laporan Form LOGKON</a></li>
							</ul>
						</li>
						<li class="col">
							<h6>Kategori</h6>
							<ul>
								<li><a href="kolompekerjaan">Kolom Pekerjaan</a></li>
								<li><a href="reportbarang">Report Barang</a></li>
							</ul></li>
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<div id="bottom-text">&copy Copyright 2013 Ryan Raharjo all rights reserved. themes By <a href="http://www.luiszuno.com"> Luiszuno.com</a> </div>
					<!-- Social -->
					<div id="to-top" class="poshytip" title="Kembali ke Atas" href="#"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	
	</body>
</html>