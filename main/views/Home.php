<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Telkom Pengiriman Barang</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/social-icons.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/easing.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/custom.js"></script>
		<script src="<?php $base_url;?>/assets/js/jquery.isotope.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/nivo-slider.css" type="text/css" media="screen" />
		<script src="<?php echo base_url();?>/assets/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/tabs.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<link rel="stylesheet" media="screen" href="<?php echo base_url();?>/assets/css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="<?php echo base_url();?>/assets/css/superfish-left.css" /> 
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/superfish-1.4.8/js/supersubs.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="<?php echo base_url();?>/assets/js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		
		

	</head>
	
	<body class="home">

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="home"><img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" alt="Telkom Pengiriman Barang" /></a>
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
			
			
			

			<!-- Slider -->
			<div id="slider-block">
				<div id="slider-holder">
					<div id="slider">
						<a href="http://www.telkom.co.id/"><img src="<?php echo base_url();?>/assets/img/bg/1357895179.png" title="PT. Telekomunikasi Indonesia, Tbk. Operator Telekomunikasi, Informasi, Media & Edutaintment, dan Services (TIMES)" alt="" /></a>
						<a href="http://www.telkom.co.id/"><img src="<?php echo base_url();?>/assets/img/bg/1358336869.png" title="PT. Telekomunikasi Indonesia International are one of the subsidiaries of PT Telekomunikasi Indonesia Tbk." alt="" /></a>
						<a href="http://www.telkom.co.id/"><img src="<?php echo base_url();?>/assets/img/bg/1369099683.png" title="Layanan informasi merupakan model bisnis yang dikembangkan Telkom dalam ranah New Economy Business ('NEB')." alt="" /></a>
						<a href="http://www.telkom.co.id/"><img src="<?php echo base_url();?>/assets/img/bg/1369107231.png" title="Media merupakan salah satu model bisnis Telkom yang dikembangkan sebagai bagian dari NEB." alt="" /></a>
					</div>
				</div>
			</div>
			<!-- ENDS Slider -->
			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- headline -->
					<div class="clear"></div>
					<div id="headline">
						<span class="main">Logistik Barang</span>
						<span class="sub">Report Penugasan Keluar Masuk Barang, Pencarian dan data laporan Permintaan Layanan dan Bukti Serah Terima Barang dan atau Jasa</span>
								</div>
					<!-- ENDS headline -->
					
					<!-- content -->
					<div id="content">
						
							<!-- TABS -->
							<!-- the tabs -->
							<ul class="tabs">
								<li><a href="#"><span>Halaman Bersangkutan</span></a></li>
								<li><a href="#"><span>Informasi</span></a></li>
								<li><a href="#"><span>Berita Terbaru</span></a></li>
							</ul>
							
							<!-- tab "panes" -->
							<div class="panes">
							
								<!-- Posts -->
								<div>
									<ul class="blocks-thumbs thumbs-rollover">
										<li>
											<a title="An image"><img src="<?php echo base_url();?>/assets/img/bg/telin.png" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">TELECOMMUNICATION</a>
												Telekomunikasi merupakan bagian bisnis legacy Telkom. Sebagai ikon bisnis perusahaan, Telkom melayani sambungan telepon kabel tidak bergerak Plain Ordinary Telephone Service ("POTS"), telepon nirkabel tidak bergerak, layanan komunikasi data, broadband, satelit, penyewaan jaringan dan interkoneksi, serta telepon yang dilayani Anak Perusahaan Telkomsel. 
											</div>
											<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
										</li>
										<li>
											<a title="An image"><img src="<?php echo base_url();?>/assets/img/bg/telkom1.png" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">INFORMATION</a>
												Layanan informasi merupakan model bisnis yang dikembangkan Telkom dalam ranah New Economy Business ("NEB"). Layanan ini memiliki karakteristik sebagai layanan terintegrasi bagi kemudahan proses kerja dan transaksi yang mencakup Value Added Services ("VAS") dan Managed Application/IT Outsourcing ("ITO"), e-Payment dan IT enabler Services ("ITeS").
											</div>
											<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
										</li>
										<li>
											<a title="An image"><img src="<?php echo base_url();?>/assets/img/bg/telkomvison.png" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Bisnis Utama : TV Berbayar</a>
												Services menjadi salah satu model bisnis Telkom yang berorientasi kepada pelanggan. Ini sejalan dengan Customer Portfolio Telkom kepada pelanggan Personal, Consumer/Home, SME, Enterprise, Wholesale, dan Internasional. Komitmen kami untuk mendukung mobilitas dan konektivitas tanpa batas diyakini akan meningkatkan kepercayaan pelanggan ritel .
											</div>
											<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
										</li>
									</ul>
								</div>
								<!-- ENDS posts -->
								
								<!-- Information  -->
								<div>
									<div class="plain-text">
										<h6>Bisnis Utama : Telekomunikasi International</h6> 
										<p>PT Telekomunikasi Indonesia International or further called as "Telin" are one of the subsidiaries of PT Telekomunikasi Indonesia Tbk. (Telkom) an Indonesia's largest telecommunication and network provider. Telin's focus is as an international carrier services and strategic investment in international telecommunication business serves as Telkom’s business arms in managing and developing its business lines abroad. </p>
										<p>Telin manages several subsidiaries, namely AriaWest International Finance BV in Amsterdam that focuses on financial sector, Telekomunikasi Indonesia International Pte. Ltd. in Singapore (Telin Singapore) and Telekomunikasi Indonesia International (Hongkong) Limited (Telin Hong Kong) that just started to operate in the end of 2010. The two-telecommunication subsidiaries will serve function as our main gateways to international telecommunication market. In addition to those subsidiaries, Telin dominates 29.71% shares of the Scicom (MSC) Berhad Malaysia, the largest contact center for outsourcing service providers in Malaysia.</p>
										<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
									</div>
								</div>
								<!-- ENDS Information -->

								<!-- Posts -->
								<div>
									<ul class="blocks-thumbs thumbs-rollover">
										<li>
											<a title="An image"><img src="<?php echo base_url();?>/assets/img/bg/telkomsel2.png" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Telekomunikasi Selular yang Menyatukan Bangsa</a>
												Telkomsel didirikan pada tahun 1995 sebagai wujud semangat inovasi untuk mengembangkan telekomunikasi Indonesia yang terdepan. Untuk  mencapai visi tersebut, Telkomsel terus memacu pertumbuhan telekomunikasi di seluruh penjuru Indonesia secara pesat dan memberdayakan masyarakat. Telkomsel telah menjadi pelopor untuk berbagai teknologi telekomunikasi selular.
											</div>
											<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
										</li>
										<li>
											<a title="An image"><img src="<?php echo base_url();?>/assets/img/bg/metra.png" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">PT Multimedia Nusantara (METRA)</a>
												METRA didirikan pada tanggal 28 Mei 1997 dengan portofolio bisnis Pay TV. Pada tahun 2003 PT Telekomunikasi Indonesia Tbk mengakuisisi 99,99 % saham METRA dan mulai mengembangkan bisnis Calling Card berbasis Switch dan VoIP. Pada tahun 2005, METRA telah mulai melakukan ekspansi usaha dibidang jaringan komunikasi data berbasis satelit VSAT (Very Small Aperture Terminal).
											</div>
											<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
										</li>
										<li>
											<a title="An image"><img src="<?php echo base_url();?>/assets/img/bg/infomedia.png" alt="Post" /></a>
											<div class="excerpt">
												<a href="single.html" class="header">Information & Communication Services Solution</a>
												Pesatnya perkembangan yang terjadi dalam dunia informasi dan telekomunikasi telah mendorong PT Infomedia Nusantara (Infomedia) melakukan Transformasi Bisnis untuk menjawab tren bisnis serta tuntutan kebutuhan jaringan informasi mobile dan digital dewasa ini, dengan mengubah 3 Pilar Bisnis Infomedia, yaitu Layanan Direktori, Layanan Contact Center dan Layanan Konten.
											</div>
										<!--	<a class="link-button"><span>Read more &#8594;</span></a>-->
										</li>
									</ul>
								</div>
								<!-- ENDS posts -->
								
								
							</div>
							<!-- ENDS TABS -->
		
		
		
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
					<div id="to-top" class="poshytip" title="Kembali ke Atas"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	
	</body>
</html>