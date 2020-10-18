<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Telkom Pengiriman Barang</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/social-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css" />
		<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
		<script type="text/javascript">
					$(function(){
						$("#barang").autocomplete({
						source: "kolompekerjaan/get_barang" 
					});
					$("#pegawaipengirim").autocomplete({
						source: "kolompekerjaan/get_pegawaijasa" 
					});
					$("#pegawaipenerima").autocomplete({
						source: "kolompekerjaan/get_pegawaitelkom" 
					});
				});
			</script>
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
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/tabs.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/superfish-left.css" /> 		<script type="text/javascript" src="<?php echo base_url();?>assets/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/superfish-1.4.8/js/supersubs.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
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
							<li><a href="#">Pencarian<span class="subheader">Pencarian menurut</span></a>
								<ul>
									<li><a href="nota"><span> Nota</span></a></li>
									<li><a href="searchbarang"><span> Barang</span></a></li>
									<li><a href="history"><span> History</span></a></li>	
									<li><a href="perusahaanjasa"><span> Jasa Pengiriman</span></a></li>
									<li><a href="perusahaanrekan"><span> Perusahaan Rekan</span></a></li>
								</ul>
							</li>
							<li><a href="#">Printout Laporan <span class="subheader">Daftar laporan</span></a>
								<ul>
									<li><a href="konosemen"><span>Laporan Bukti Konosemen Barang</span></a></li>
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
							<span class="title">Form Input Kolom Kerja</span>
							<span class="subtitle">Form input kolom kerja kirim barang</span>
						</div>
						<?php echo validation_errors('<p class="error">'); ?>
							<?php echo form_open('kolompekerjaan'); ?>
							<div class="span5">
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="namaperusahaan"><b>Nama Barang Kirim</b></label>
							  <div class="controls">
								<input id="barang" name="namabarang" type="text" placeholder="barang" class="input-large" value="<?php echo set_value('namabarang'); ?>" required="">
								<p class="help-block">Tuliskan nama barang yang akan dikirim</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="namaperusahaanpembuat"><b>Perusahaan Pembuat</b></label>
							 <div class="controls">
								<?php 
									$noijinperusahaan=$this->db->select('noijinperusahaan');
									$this->db->select('namaperusahaan');
									$perusahaanpembuat = $this->db->get('perusahaanpembuat');
									foreach($perusahaanpembuat->result() as $row){
									$reject[$row->noijinperusahaan] = $row->namaperusahaan;
									}
									$choose = array($noijinperusahaan);
									echo form_dropdown('noijinperusahaan',$reject,$choose);?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="namaperusahaanjasa"><b>Perusahaan Jasa Kirim</b></label>
							 <div class="controls">
								<?php 
									$noijinjasa=$this->db->select('noijinjasa');
									$this->db->select('namaperusahaanjasa');
									$perusahaanjasa = $this->db->get('perusahaanjasa');
									foreach($perusahaanjasa->result() as $row){
									$rejecter[$row->noijinjasa] = $row->namaperusahaanjasa;
									}
									$chooser = array($noijinjasa);
									echo form_dropdown('noijinjasa',$rejecter,$chooser);?>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="idprov"><b>Provinsi Kirim</b></label>
							  <div class="controls">
								<?php 
									$idprov=$this->db->select('idprov');
									$this->db->select('yuridiksi');
									$provinsi = $this->db->get('provinsi');
									foreach($provinsi->result() as $row){
									$reject[$row->idprov] = $row->yuridiksi;
									}
									$choose = array($idprov);
									echo form_dropdown('idprovkirim',$reject,$choose);?>
							  </div>
							</div>
							</div>
							<div class="span5">
							<div class="control-group">
							  <label class="control-label" for="idprov"><b>Provinsi Asal</b></label>
							  <div class="controls">
								<?php 
									$idprov=$this->db->select('idprov');
									$this->db->select('yuridiksi');
									$provinsi = $this->db->get('provinsi');
									foreach($provinsi->result() as $row){
									$reject[$row->idprov] = $row->yuridiksi;
									}
									$choose = array($idprov);
									echo form_dropdown('idprovdari',$reject,$choose);?>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="alamatkirim"><b>Alamat Kirim</b></label>
							  <div class="controls">                     
								<textarea id="alamatkirim" name="alamatkirim" value="<?php echo set_value('alamatkirim'); ?>" ></textarea>
							  </div>
							</div>
							
							
							
							<div class="control-group">
							  <label class="control-label" for="pegawaijasapengirim"><b>Pegawai Jasa Pengirim</b></label>
							  <div class="controls">
								<input id="pegawaipengirim" name="pegawaijasapengirim" value="<?php echo set_value('pegawaijasapengirim'); ?>" type="text" placeholder="nama pegawai jasa" class="input-large" required="">
								<p class="help-block">Tuliskan pegawai Jasa kirim</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="pegawaitelkompenerima"><b>Pegawai Telkom Terima</b></label>
							  <div class="controls">
								<input id="pegawaipenerima" name="pegawaitelkompenerima" type="text" value="<?php echo set_value('pegawaitelkompenerima'); ?>" placeholder="nama pegawai telkom" class="input-large" required="">
								<p class="help-block">Tuliskan pegawai Telkom terima</p>
							  </div>
							</div>
							
							<!-- Button (Double) -->
							<div class="control-group">
							  <label class="control-label" for="simpan"></label>
							  <div class="controls">
								<button id="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
								<button id="kosongkan" name="kosongkan" class="btn btn-danger">Kosongkan</button>
							  </div>
							</div>
							</div>
							<?php echo form_close(); ?>
						<!-- pagination -->	
						<div class="clear"></div>
						<!-- ENDS pagination -->
									
						
					</div>
					<!-- ENDS content -->

				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->

			
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