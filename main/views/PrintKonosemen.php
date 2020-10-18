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
		<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
		
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
							<span class="title">Print Daftar Konosemen Barang</span>
							<span class="subtitle">Daftar Konosemen Barang Kirim-Terima</span>
						</div>
						<div id="printableArea">
							<div class="span12">
								<div class="span2 pull-left">
									<img src="<?php echo base_url();?>assets/img/logoprintable.png">
								</div>
								<div class="span7 pull-left">
									<h4>PT (Persero) TELEKOMUNIKASI INDONESIA, Tbk.</h4>
									<h3><?php 
									$iddivre=$this->db->select('iddivre');								
									$divc=$this->db->select('divre');		
									$divre = $this->db->get('divre');
									foreach($divre->result() as $row){
									$reject[$row->iddivre] = $row->divre;
									}
									$choose = array($iddivre);
									echo form_dropdown('iddivre',$reject,$choose,'style="width: 300px; font-size: 20px;color:black;"');
									?></h3>
									<textarea  class="span5"></textarea>
									<h3>DAFTAR KONOSEMEN BARANG</h3>
								</div>
							</div>
							<div class="span12">
								<div><label class="pull-left span2"><b>No.Logkon :</b></label><input type="text"/></div>
								<div><label class="pull-left span2"><b>No.Dok.Kirim :</b></label><input type="text"/></div>
								<div><label class="pull-left span2"><b>No.Order :</b></label><input type="text"/></div>
								<div><label class="pull-left span2"><b>Jenis Layanan :</b></label><input type="text"/></div>
								<div><label class="pull-left span2"><b>Pengirim :</b></label><input type="text"/></div>
								<div><label class="pull-left span2"><b>Tujuan :</b></label><textarea></textarea></div>
								</div>
							<table border="1" class="span12">
								<tr>
								<th>NO</th>
								<th>Item ID</th>
								<th>Item Description</th>
								<th>Satuan</th>
								<th>Matl Type</th>
								<th>Loc Detail</th>
								<th>Jlh Kirim</th>
								<th>Jlh Terima</th>
								</tr>
								<tr>
								<td>1</td>
								<td><?php 
									$idbarang=$this->db->select('idbarang');
									$this->db->select('kodeproduksi');
									$barang = $this->db->get('barang');	
									foreach($barang->result() as $row){
									$reject2[$row->idbarang] = $row->kodeproduksi;
									}
									$choose2 = array($idbarang);
									echo form_dropdown('idbarang',$reject2,$choose2,'style="width:80px;font-size: 15px;color:black;"');
									?></td>
								<td><?php 
									$idbarang=$this->db->select('idbarang');
									$this->db->select('namabarang');
									$barang = $this->db->get('barang');	
									foreach($barang->result() as $row){
									$reject3[$row->idbarang] = $row->namabarang;
									}
									$choose3 = array($idbarang);
									echo form_dropdown('idbarang',$reject3,$choose3,'style="width:180px;font-size: 15px;color:black;"');
									?></td>
								<td><select style="width:80px;"><option>BUAH</option></select></td>
								<td><select style="width:80px;"><option>AA</option><option>AB</option><option>BA</option><option>BB</option></select></td>
								<td><select style="width:80px;"><option>GAUP</option><option>GAT</option><option>GE</option><option>GAS</option></select></td>
								<td><input style="width:80px;" type="text"/></td>
								<td><input style="width:80px;" type="text"/></td>
								</tr>
								</table>
								<h5>Apabila barang sudah diterima, mohon form LOGKON ini di fax ke : (0411) 86755&nbsp;&nbsp;&nbsp;&nbsp;Makassar,</h5>
								<table border="1" class="span11">
								<tr>
								<td>Dikirim Via:</td>
								<td>..........................</td>
								<td>Tgl :</td>
								<td>..........................</td>
								<td>Oleh :</td>
								<td>..........................</td>
								</tr>
								<tr>
								<td>Nomor</td>
								<td>..........................</td>
								<td>Panjang</td>
								<td>..........................</td>
								</tr>
								<tr>
								<td>Jenis</td>
								<td>..........................</td>
								<td>Lebar</td>
								<td>..........................</td>
								</tr>
								<tr>
								<td>Banyaknya :</td>
								<td>..........................</td>
								<td>Tinggi :</td>
								<td>..........................</td>
								</tr>

								</table>
								<div class="pull-right">Makassar,</div>
								<table class="span11" >
								<tr>
								<td style="border:none;">Expeditur</td>
								<td style="border:none;">Pengirim</td>
								<td style="border:none;">Bendawisesa</td>
								<td style="border:none;">Bendareksa</td>
								<td style="border:none;">Penerima</td>
								</tr>
								<tr>
								<td style="border:none;">(..........)</td>
								<td style="border:none;">(..........)</td>
								<td style="border:none;">(..........)</td>
								<td style="border:none;">(..........)</td>
								<td style="border:none;">(..........)</td>
								</tr>
								</table>
							</div>	
							
							</div>
							<button onclick="printDiv('printableArea')" class="btn btn-success">Print</button>
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