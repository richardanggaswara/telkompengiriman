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
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css" />
		<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
		<script type="text/javascript">
			$(function() {
				var date = $('#datetime').datepicker({ dateFormat: 'yy-mm-dd', 
					pickTime: false,
					changeYear: true,
					changeMonth: true,
				}).val();
			});
		</script>
		<script>
			function openDialog () {
				$('#windowTitleDialog').modal('show'); 
				};
			function closeDialog () {
				$('#windowTitleDialog').modal('hide'); 
				};
			function okClicked () {
				document.title = document.getElementById ("xlInput").value;
				closeDialog ();
				};
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
									<li><a href="features-tabs.html"><span> Nota</span></a></li>
									<li><a href="searchbarang"><span> Barang</span></a></li>
									<li><a href="features-toggle.html"><span> History</span></a></li>	
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
							<span class="title">Form Input Perusahaan Rekan Jasa</span>
							<span class="subtitle">Form input perusahaan jasa rekan Telkom</span>
						</div>
						<?php echo validation_errors('<p class="error">'); ?>
						<?php echo form_open('inputrekan'); ?>
							<div class="span5">
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="namaperusahaanjasa"><b>Nama Perusahaan</b></label>
							  <div class="controls">
								<input id="namaperusahaanjasa" name="namaperusahaanjasa" type="text" placeholder="nama" class="input-large" value="<?php echo set_value('namaperusahaanjasa'); ?>" required="">
								<p class="help-block">Tuliskan nama perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="kodeperusahaan"><b>Kode Perusahaan</b></label>
							  <div class="controls">
								<input id="kodeperusahaan" name="kodeperusahaan" type="text" placeholder="kode" value="<?php echo set_value('kodeperusahaan'); ?>" class="input-large" required="">
								<p class="help-block">Tuliskan kode perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="emailperusahaan"><b>Alamat Email</b></label>
							  <div class="controls">
								<input id="emailperusahaan" name="emailperusahaan" type="text" placeholder="email" value="<?php echo set_value('emailperusahaan'); ?>" class="input-large" required="">
								<p class="help-block">Tuliskan alamat email perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <label class="control-label" for="sektorindustri"><b>Sektor Industri</b></label>
							  <div class="controls">
								<select id="sektorindustri" name="sektorindustri" value="<?php echo set_value('sektorindustri'); ?>" class="input-large">
								  <option>Penerbitan</option>
								  <option>Transportasi</option>
								  <option>Peralatan Kantor</option>
								  <option>Peralatan Komunikasi</option>
								  <option>Peralatan Elektronik</option>
								</select>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <label class="control-label" for="subsektorindustri"><b>SubSektor Industri</b></label>
							  <div class="controls">
								<select id="subsektorindustri" name="subsektorindustri" value="<?php echo set_value('subsektorindustri'); ?>" class="input-large">
								  <option>Periklanan</option>
								  <option>Penerbitan</option>
								   <option>Komputer dan Piranti Lunak</option>
								  <option>Televisi dan Radio</option>
								   <option>Riset dan Pengembangan</option>
								   <option>Pengiriman dan Jasa</option>
								</select>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <div class="controls">
							   <label class="control-label"><b>Tanggal</b></label>
									<input type="text" id="datetime" name="tanggalberdiri" value="<?php echo set_value('tanggalberdiri'); ?>"></input>
							  </div>
							</div>
							
							<!-- Select Basic -->

							<!-- Textarea -->
							<div class="control-group">
							  <label class="control-label" for="alamatperusahaan"><b>Alamat Perusahaan</b></label>
							  <div class="controls">                     
								<textarea id="alamatperusahaan" name="alamatperusahaan" value="<?php echo set_value('alamatperusahaan'); ?>" ></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="idprov"><b>Provinsi</b></label>
							  <div class="controls">
								<?php 
									$idprov=$this->db->select('idprov');
									$this->db->select('yuridiksi');
									$provinsi = $this->db->get('provinsi');
									foreach($provinsi->result() as $row){
									$reject[$row->idprov] = $row->yuridiksi;
									}
									$choose = array($idprov);
									echo form_dropdown('idprov',$reject,$choose);?>
							  </div>
							</div>
							</div>
							<div class="span5">
							<div class="control-group">
							  <label class="control-label" for="teleponperusahaan"><b>Telepon Perusahaan</b></label>
							  <div class="controls">
								<input id="teleponperusahaan" name="teleponperusahaan" value="<?php echo set_value('teleponperusahaan'); ?>" type="text" placeholder="telepon" class="input-large" required="">
								<p class="help-block">Tuliskan nomor telepon perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="papanperusahaan"><b>Papan Perusahaan</b></label>
							  <div class="controls">
								<input id="papanperusahaan" name="papanperusahaan" type="text" value="<?php echo set_value('papanperusahaan'); ?>" placeholder="papan" class="input-large" required="">
								<p class="help-block">Tuliskan papan perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="bidangusaha"><b>Bidang Usaha</b></label>
							  <div class="controls">
								<input id="bidangusaha" name="bidangusaha" type="text" placeholder="bidang usaha" value="<?php echo set_value('bidangusaha'); ?>" class="input-large">
								<p class="help-block">Tuliskan bidang usaha perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="npwp"><b>NPWP</b></label>
							  <div class="controls">
								<input id="npwp" name="npwp" type="text" placeholder="NPWP" class="input-large" value="<?php echo set_value('npwp'); ?>" required="">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="npkp"><b>NPKP</b></label>
							  <div class="controls">
								<input id="npkp" name="npkp" type="text" placeholder="NPKP" class="input-large" value="<?php echo set_value('npkp'); ?>">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="biroperusahaan"><b>Biro Administrasi Efek</b></label>
							  <div class="controls">
								<input id="biroperusahaan" name="biroperusahaan" type="text" placeholder="biro" class="input-large" value="<?php echo set_value('biroperusahaan'); ?>" required="">
								
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="faksimile"><b>Faximile</b></label>
							  <div class="controls">
								<input id="faksimile" name="faksimile" type="text" placeholder="faksimile" value="<?php echo set_value('faksimile'); ?>" class="input-large" required="">
								<p class="help-block">Tuliskan nomor faksimile perusahaan rekan Telkom</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="websiteperusahaan"><b>Website</b></label>
							  <div class="controls">
								<input id="websiteperusahaan" name="websiteperusahaan" type="text" placeholder="website" value="<?php echo set_value('websiteperusahaan'); ?>" class="input-large">
								<p class="help-block">Tuliskan nama website perusahaan rekan Telkom </p>
							  </div>
							</div>
							
							<!-- Button (Double) -->
							<div class="control-group">
							  <label class="control-label" for="simpan"></label>
							  <div class="controls">
								<button id="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
								
							  </div>
							</div>
							</div>
							<?php echo form_close(); ?>
				
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