<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Telkom Pengiriman Barang</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/social-icons.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" type="text/css" media="screen" />
		<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>/assets/datatables/css/demo_page.css";
			@import "<?php echo base_url();?>/assets/datatables/css/demo_table_jui.css";
			@import "<?php echo base_url();?>/assets/datatables/css/jquery-ui-1.8.4.custom.css";
			@import "<?php echo base_url();?>/assets/datatables/css/TableTools_JUI.css";
		</style>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/easing.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/custom.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/assets/datatables/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/assets/datatables/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/assets/datatables/js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>/assets/datatables/js/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#example').dataTable( {
					"bJQueryUI": true,
					"sPaginationType": "full_numbers",
					"sDom": '<"H"Tfr>t<"F"ip>',
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "searchbarang/searchbar",
					"oTableTools": {
						"aButtons": [
							"copy", "csv", "xls", "pdf",
							{
								"sExtends":    "collection",
								"sButtonText": "Save",
								"aButtons":    [ "csv", "xls", "pdf" ]
							}
						]
					}
				 } );
				} );
		</script>
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
		<!-- ENDS Fancybox -->
		
		

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
			
			
		
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- content -->
					<div id="content">
						
						<!-- title -->
						<div id="page-title">
							<span class="title">Input Data Pegawai Telkom</span>
							<span class="subtitle">Input data pegawai Telkom penugasan gudang</span>
						</div>
						

							<?php echo validation_errors('<p class="error">'); ?>
							<?php echo form_open('inputpegawai'); ?>
							<div class="span5">
							<div class="control-group">
							  <label class="control-label" for="nikkepegawaian"><b>NIK Pegawai</b></label>
							  <div class="controls">
								<input id="nikkepegawaian" name="nikkepegawaian" value="<?php echo set_value('nikkepegawaian'); ?>" type="text" placeholder="NIK" class="input-large" required="">
								<p class="help-block">Input Nomor Induk Kepegawaian</p>
							  </div>
							</div>

							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="namapegawai"><b>Nama Pegawai</b></label>
							  <div class="controls">
								<input id="namapegawai" name="namapegawai" value="<?php echo set_value('namapegawai'); ?>" type="text" placeholder="nama" class="input-large" required="">
								<p class="help-block">Input nama pegawai</p>
							  </div>
							</div>

							<!-- Password input-->
							<div class="control-group">
							  <label class="control-label" for="passwordpegawai"><b>Password</b></label>
							  <div class="controls">
								<input id="passwordpegawai" name="passwordpegawai" value="<?php echo set_value('passwordpegawai'); ?>" type="password" placeholder="password" class="input-large" required="">
								<p class="help-block">Input password pegawai</p>
							  </div>
							</div>

							<!-- Password input-->
							<div class="control-group">
							  <label class="control-label" for="passwordconfirm"><b>Konfirmasi Password</b></label>
							  <div class="controls">
								<input id="passwordconfirm" name="passwordconfirm" value="<?php echo set_value('passwordconfirm'); ?>" type="password" placeholder="password" class="input-large" required="">
								<?php echo form_error('passwordconfirm'); ?>
								<p class="help-block">Masukkan lagi password</p>
							  </div>
							</div>

							<!-- Textarea -->
							<div class="control-group">
							  <label class="control-label" for="alamatpegawai"><b>Alamat Pegawai</b></label>
							  <div class="controls">                     
								<textarea id="alamatpegawai" name="alamatpegawai" value="<?php echo set_value('alamatpegawai'); ?>" required=""></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="filebutton">File Button</label>
							  <div class="controls">
								<input id="filebutton" name="filebutton" class="input-file" type="file">
							  </div>
							</div>
						</div>
						<div class="span5">

							<div class="control-group">
							  <label class="control-label" for="telponrumahpeg"><b>Telepon Rumah</b></label>
							  <div class="controls">
								<input id="telponrumahpeg" name="telponrumahpeg" value="<?php echo set_value('telponrumahpeg'); ?>" type="text" placeholder="telepon rumah" class="input-large">
								<p class="help-block">Input nomor telepon rumah</p>
							  </div>
							</div>

							<!-- Prepended text-->
							<div class="control-group">
							  <label class="control-label" for="telponhppeg"><b>Handphone Pegawai</b></label>
							  <div class="controls">
								<div class="input-prepend">
								  <span class="add-on">+62</span>
								  <input id="telponhppeg" name="telponhppeg" value="<?php echo set_value('telponhppeg'); ?>" class="input-large" placeholder="nomor handphone" type="text" required="">
								</div>
								<p class="help-block">Input nomor handphone</p>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <label class="control-label" for="statuspeg"><b>Status Pegawai</b></label>
							  <div class="controls">
								<select id="statuspeg" name="statuspeg" value="<?php echo set_value('statuspeg'); ?>" class="input-large">
								  <option>Belum Menikah</option>
								  <option>Sudah Menikah</option>
								</select>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <label class="control-label" for="jabatanpeg"><b>Jabatan Pegawai</b></label>
							  <div class="controls">
								<select id="jabatanpeg" name="jabatanpeg" value="<?php echo set_value('jabatanpeg'); ?>" class="input-xlarge">
								  <option>Manager</option>
								  <option>Kepala Cabang Telkom</option>
								  <option>OFF-1</option>
								  <option>OFF-2</option>
								  <option>OFF-3</option>
								</select>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <label class="control-label" for="divisipekerjaanpeg"><b>Divisi Pekerjaan</b></label>
							  <div class="controls">
								<select id="divisipekerjaanpeg" name="divisipekerjaanpeg" value="<?php echo set_value('divisipekerjaanpeg'); ?>" class="input-large">
								  <option>Telkom Inventory Unit</option>
								  <option>Telkom Sales Management</option>
								  <option>Telkom Customer Service</option>
								  <option>Telkom IT Center</option>
								</select>
							  </div>
							</div>

							<!-- Select Basic -->
							<div class="control-group">
							  <label class="control-label" for="nodivisi"><b>Divisi</b></label>
							  <div class="controls">
								<select id="nodivisi" name="nodivisi" value="<?php echo set_value('nodivisi'); ?>" class="input-large">
								  <option value="1">Divisi Akses</option>
								  <option value="2">Divisi Infratel</option>
								  <option value="3">Divisi Multimedia</option>
								  <option value="4">Divisi Telkom Flexi</option>
								</select>
							  </div>
							</div>

							<!-- Button Drop Down -->
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="emailpegawai"><b>Email Pegawai</b></label>
							  <div class="controls">
								<input id="emailpegawai" value="<?php echo set_value('emailpegawai'); ?>" name="emailpegawai" type="text" placeholder="email" class="input-large" required="">
								<p class="help-block">Input email Pegawai </p>
							  </div>
							</div>

							<!-- Button (Double) -->
							

							<!-- File Button --> 
							
							<div class="control-group">
							  <label class="control-label" for="save"></label>
							  <div class="controls">
								<button id="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
							  </div>
							</div>
							</div>
							<?php echo form_close(); ?>

							
						
						<!-- pagination -->	
						<div class="clear"></div>
						<!-- ENDS pagination -->
									
						
					
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