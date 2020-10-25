<?php 
	
	function en()
	{
		$title = 'Candidate employee App';
		$contact = 'contact';
		$description = 
		'
			<h3>Employee recommendation application for training at PT Daya Adicipta Motora, Honda</h3>

			<p>	
				The application serves to determine employees for training based on the employee job group
			</p>
			<p>- Admin</p>
			<li> Dashboard </li>
			<li> Manage Profile data </li>
			<li> Manage Menu data </li>
			<li> Manage Trainer data </li>
			<li> Manage employee data </li>
			<li> Import Employees from Excel file </li>
			<li> Manage job data </li>
			<li> Export Employees to Excel and PDF </li>
			<p> - Trainer </p>		
			<li> Manage Profile data </li>
			<li> Manage employee data by group training positions </li>
			<li> Manage batch data </li>
			<li> Export Employees to Excel and PDF </li>

			<h5>Technologies:</h5>
			<ul>
				<li> - PHP </li>
				<li> - Codeiginter </li>
				<li> - jQuery </li>
				<li> - MySQL </li>
				<li> - DataTables </li>
			</ul>

		';
		$project = [];

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
		$title = 'Aplikasi rekomendasi calon pegawai';
		$contact = 'Kontak';
		$description = 
		'
			<h3> Aplikasi rekomendasi karyawan untuk pelatihan di PT Daya Adicipta Motora, Honda </h3>

			<p>
				Aplikasi berfungsi untuk menentukan karyawan pada pelatihan berdasarkan kelompok jabatan karyawan tersebut
			</p>
			<p> - Admin </p>
			<li> Dashboard </li>
			<li> Kelola data Profile </li>
			<li> Kelola data Menu </li>
			<li> Kelola data Trainer </li>
			<li> Kelola data karyawan </li>
			<li> Import Karyawan dari file Excel </li>
			<li> Kelola data jabatan </li>
			<li> Export Karyawan ke Excel dan PDF </li>
			<p> - Trainer </p>
			<li> Kelola data Profile </li>
			<li> Kelola data karyawan berdasarkan kelompok jabatan training </li>
			<li> Kelola data batch </li>
			<li> Export Karyawan ke Excel dan PDF </li>

			<h5> Teknologi: </h5>
			<ul>
			<li> - PHP </li>
			<li> - Codeiginter </li>
			<li> - jQuery </li>
			<li> - MySQL </li>
			<li> - DataTables </li>
			</ul>
		';
		$project = [];

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
			<img src="../images/honda/honda.PNG">
		</div>
		
		<?= $data['description']; ?>
	</div>

</body>
</html>