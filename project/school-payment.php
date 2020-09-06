<?php 
	
	function en()
	{
		$title = 'School Payment';
		$contact = 'contact';
		$description = 
		'
			<h3>The SPP payment application uses PHP and the Midtrans payment gateway</h3>

			<p>	
				SPP payments can be made at Indomaret, Alfamaret, bank transfers and via digital wallets such as Ovo, GoPay, Dana
			</p>
			<p>- Admin</p>
			<li>Dashboard</li>
			<li>Manage student data</li>
			<li>Manage payment data</li>
			<li>Manage transaction data</li>
			<li>Manage transaction detail data</li>
			<li>Search for transactions on midtrans</li>
			<p> - Students </p>
			<li> Displays a list of student bills </li>
			<li> Student profile </li>
			<li> Displays payment in full and payment history </li>
			<li> Make payments using midtrans </li>

			<h5>Technologies:</h5>
			<ul>
				<li>- PHP</li>
				<li>- jQuery</li>
				<li>- MySQL</li>
				<li>- Morris.js</li>
				<li>- Payment Gateway Midtrans</li>
			</ul>
		';
		$project = [
			'Student Bills',
			'Student Payment Page',
			'Select Bill',
			'Payment Details',
			'Midtrans Payment Process',
			'Payment confirmation'
		];

		$output = [
			'title' => $title,
			'contact' => $contact,
			'description' => $description,
			'project' => $project,
		];

		return $output;
	}

	function id()
	{
		$title = 'School Payment';
		$contact = 'contact';
		$description = 
		'
			<h3> Aplikasi pembayaran SPP menggunakan PHP dan gateway pembayaran Midtrans </h3>

			<p>
			Pembayaran SPP dapat dilakukan di Indomaret, Alfamaret, transfer bank dan melalui dompet digital seperti Ovo, GoPay, Dana
			</p>
			<p> - Admin </p>
			<li> Dasbor </li>
			<li> Kelola data siswa </li>
			<li> Kelola data pembayaran </li>
			<li> Kelola data transaksi </li>
			<li> Kelola data detail transaksi </li>
			<li> Menelusuri transaksi di midtrans </li>
			<p> - Siswa </p>
			<li> Menampilkan daftar tagihan siswa </li>
			<li> Profil siswa </li>
			<li> Menampilkan pembayaran secara penuh dan riwayat pembayaran </li>
			<li> Lakukan pembayaran menggunakan midtrans </li>

			<h5> Teknologi: </h5>
			<ul>
			<li> - PHP </li>
			<li> - jQuery </li>
			<li> - MySQL </li>
			<li> - Morris.js </li>
			<li> - Payment Gateway Midtrans </li>
			</ul>
		';
		$project = [
			'Tagihan Siswa',
			'Halaman Pembayaran Siswa',
			'Pilih Tagihanl',
			'Detail Pembayaran',
			'Proses Pembayaran Midtrans',
			'Konfirmasi Pembayaran'
		];

		$output = [
			'title' => $title,
			'contact' => $contact,
			'description' => $description,
			'project' => $project,
		];

		return $output;
	}

	if(!isset($_GET['lang'])){
		$data = en();
	}else{
		if($_GET['lang'] == 'en'){
			$data = en();
		}else{
			$data = id();
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../default.css">


	<style type="text/css">
		.img-container{
			max-width: 600px;
		}

		img{
			width: 100%
		}

	</style>

</head>
<body>
	<div class="nav-wrapper">

		<!-- Link around dots-wrapper added after tutorial video -->
		<a href="../">
			<div class="dots-wrapper">
				<div id="dot-1" class="browser-dot"></div>
				<div id="dot-2" class="browser-dot"></div>
				<div id="dot-3" class="browser-dot"></div>
			</div>
		</a>

		<ul id="navigation">
			<li><a href="../#contact"><?= $data['contact']; ?></a></li>

		</ul>
	</div>

	<div class="main-container">
		<br>

		<div class="img-container">
			<img src="../images/pembayaran-spp/snap midtrans.PNG">
		</div>
		
		<?= $data['description']; ?>

		<h5>Admin Dashboard</h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/dashboard.PNG">
		</div>

		<h5><?= $data['project'][0]; ?></h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/tagihan.PNG">
		</div>

		<h5><?= $data['project'][1]; ?></h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/pembayaran.PNG">
		</div>

		<h5><?= $data['project'][2]; ?></h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/modal bayar.PNG">
		</div>

		<h5><?= $data['project'][3]; ?></h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/bayar.PNG">
		</div>

		<h5><?= $data['project'][4]; ?></h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/snap midtrans.PNG">
		</div>

		<h5><?= $data['project'][5]; ?></h5>
		<div class="img-container">
			<img src="../images/pembayaran-spp/konfirmasi.PNG">
		</div>

	</div>

</body>
</html>