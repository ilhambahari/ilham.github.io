<?php 
	
	function en()
	{
		$title = 'Cashier Application';
		$contact = 'contact';
		$description = 
		'
			<h3> Cashier applications use PHP, MySQL and AJAX </h3>

			<p>
				The cashier application can be used for your business reports
				<br>
			<ul>
				<li>
					<table>
						<tr>
							<td> 1. Login : - using ajax validation </td>
						</tr>
					</table>
				</li>
					
				<li>
					<table>
						<tr>
							<td> 2. Dashboard : </td>
							<td> - Displays all sales information
						</tr>
						<tr>
							<td> </td>
							<td> - Displays today Sales </td>
						</tr>
						<tr>
							<td> </td>
							<td> - Displays information on goods (capital, stock) </td>
						</tr>
					</table>
				</li>
				<li>
				<table>
					<tr>
						<td> 3. Cashier : </td>
						<td> - Using ajax </td>
					</tr>
					<tr>
						<td> </td>
						<td> - Search for items </td>
					</tr>
					<tr>
						<td> </td>
						<td> - Add items to cart </td>
					</tr>
					<tr>
						<td> </td>
						<td> - Count transactions </td>
					</tr>
				</table>
				</li>

				<li>
					<table>
						<tr>
							<td>4. Item :</td>
							<td>- CRUD item, search and pagination using ajax</td>
						</tr>
					</table>
				</li>

				<li>
					<table>
						<tr>
							<td> 5. Report : </td>
							<td> - search for transactions based on time </td>
						</tr>
						<tr>
							<td> </td>
							<td> - read purchase report </td>
						</tr>
						<tr>
							<td> </td>
							<td> - delete purchases individually or by time </td>
						</tr>
						<tr>
							<td> </td>
							<td> - export excel and pdf reports </td>
						</tr>
					</table>
				</li>
			</ul>
			</p>

			<h5> Link : </h5>
			<ul>
				<li>- <a href="https://kasir.kopiham.space" target="blank">Demo cashier application</a></li>
			</ul>
		';
		$project = [
			'Cashier',
			'CRUD Items',
			'Sales report',
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
		$title = 'Aplikasi Kasir';
		$contact = 'Kontak';
		$description = 
		'
			<h3> Aplikasi kasir menggunakan PHP, MySQL dan AJAX </h3>

			<p>
				Aplikasi kasir dapat digunakan untuk laporan usaha anda
				<br>
				<ul>
				<li>
					<table>
						<tr>
							<td>1. Login :  - menggunakan validasi ajax</td>
						</tr>
					</table>
				</li>
				<li>
					<table>
						<tr>
							<td>2. Dashboard : </td>
							<td>- Menampilkan Informasi semua penjualan
						</tr>
						<tr>
							<td></td>
							<td>- Menampilkan Penjualan hari ini</td>
						</tr>
						<tr>
							<td></td>
							<td>- Menampilkan Informasi Barang (modal, stok)</td>
						</tr>
					</table>			   
				</li>
				<li>
					<table>
						<tr>
							<td>3. Kasir : </td>
							<td>- Menggunakan ajax</td>
						</tr>
						<tr>
							<td></td>
							<td>- Pencarian barang</td>
						</tr>
						<tr>
							<td></td>
							<td>- Tambah barang ke keranjang</td>
						</tr>
						<tr>
							<td></td>
							<td>- Hitung transaksi</td>
						</tr>
					</table>			   
				</li>

				<li>
					<table>
						<tr>
							<td>4. Barang</td>
							<td>- CRUD barang, search dan pagination menggunakan ajax</td>
						</tr>
					</table>
				</li>
				
				<li>
					<table>
						<tr>
							<td>4. Laporan : </td>
							<td>- pencarian transaksi berdasarkan waktu</td>
						</tr>
						<tr>
							<td></td>
							<td>- read laporan pembelian</td>
						</tr>
						<tr>
							<td></td>
							<td>- hapus pembelian satu per satu atau berdasarkan waktu</td>
						</tr>
						<tr>
							<td></td>
							<td>- export laporan excel dan PDF</td>
						</tr>
					</table>			   
				</li>
				</ul>
			</p>

			<h5> Teknologi: </h5>
			<ul>
			<li> - PHP </li>
			<li> - jQuery </li>
			<li> - Ajax </li>
			<li> - MySQL </li>
			<li> - Chart.js </li>
			</ul>

			<h5> Link : </h5>
			<ul>
				<li>- <a href="https://kasir.kopiham.space" target="blank">Demo aplikasi kasir</a></li>
			</ul>
		';
		$project = [	
			'Kasir',
			'CRUD Barang',
			'Laporan Penjualan',		
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
			<img src="../images/kasir/1.PNG">
		</div>
		
		<?= $data['description']; ?>

		<h5>Login</h5>
		<div class="img-container">
			<img src="../images/kasir/5.PNG">
		</div>

		<h5>Admin Dashboard</h5>
		<div class="img-container">
			<img src="../images/kasir/2.PNG">
		</div>

		<h5><?= $data['project'][0]; ?></h5>
		<div class="img-container">
			<img src="../images/kasir/1.PNG">
		</div>

		<h5><?= $data['project'][1]; ?></h5>
		<div class="img-container">
			<img src="../images/kasir/4.PNG">
		</div>

		<h5><?= $data['project'][2]; ?></h5>
		<div class="img-container">
			<img src="../images/kasir/3.PNG">
		</div>
	</div>

</body>
</html>