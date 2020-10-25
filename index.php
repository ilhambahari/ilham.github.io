<?php 
	session_start();

	if(!isset($_GET['lang'])){
		$get = "";
		require 'en.php';
	}else{
		$get = "?lang=$_GET[lang]";
		if($_GET['lang'] == 'en'){
			require 'en.php';
		}else{
			require 'id.php';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Moch Ilham Bahari</title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="default.css">
	<link id="theme-style" rel="stylesheet" type="text/css" href="">
</head>
<body>

	<section class="s1">
		<div class="main-container">
			<div class="greeting-wrapper">
				<h1><?= $title; ?></h1>
			</div>


			<div class="intro-wrapper">
				<div class="nav-wrapper">

					<!-- Link around dots-wrapper added after tutorial video -->
					<a href="index.html">
						<div class="dots-wrapper">
							<div id="dot-1" class="browser-dot"></div>
							<div id="dot-2" class="browser-dot"></div>
							<div id="dot-3" class="browser-dot"></div>
						</div>
					</a>
					

					<ul id="navigation">
						<li><a href="#contact"><?= $contact; ?></a></li>
						<li>
							<select type="text" name="bahasa" onchange="location = this.value;">
								<option value="" selected disabled><?= $language; ?></option>
								<option value="?lang=en">EN</option>	
								<option value="?lang=id">ID</option>	
							</select>
						</li>

					</ul>
				</div>

				<div class="left-column">
					<img id="profile_pic" src="images/ilham.jpg">
					<h5 style="text-align: center;line-height: 0;"><?= $theme; ?></h5>

					<div id="theme-options-wrapper">
						<div data-mode="light" id="light-mode" class="theme-dot"></div>
						<div data-mode="blue" id="blue-mode" class="theme-dot"></div>
						<div data-mode="green" id="green-mode" class="theme-dot"></div>
						<div data-mode="purple" id="purple-mode" class="theme-dot"></div>
					</div>

					<p id="settings-note"><?= $setting_note; ?></p>
				</div>

				<div class="right-column">

					<div id="preview-shadow">
						<div id="preview">
							<div id="corner-tl" class="corner"></div>
							<div id="corner-tr" class="corner"></div>
							<?= $what_id_do; ?>
							<div id="corner-br" class="corner"></div>
							<div id="corner-bl" class="corner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="s2">
		<div class="main-container">

			<div class="about-wrapper">
				<div class="about-me">
					<?= $about_me; ?>

					<div id="skills">
						<ul>
							<li>PHP</li>
							<li>JavaScript</li>
							<li>jQuery</li>
							<li>Vue JS</li>
							<li>Laravel</li>
							<li>Codeigniter</li>
							<li>Bootstrap</li>
						</ul>

						<ul>
							<li>HTML/CSS</li>
							<li>Midtrans API</li>
							<li>Morris JS</li>
							<li>PWA</li>
							<li>GIT</li>
							<li>MySQL</li>
						</ul>

					</div>

				</div>

				
				<div class="social-links">
					<!-- <img id="social_img" src="images/follow.jpg"> -->
					<h3><?= $find_me; ?></h3>
					<a target="_blank" href="https://www.instagram.com/m_ilhambahari">Instagram: @m_ilhambahari</a>
					<br>
					<a target="_blank" href="https://www.kopiham.space">Blog: kopiham.space</a>
					<br>
					<a target="_blank" href="https://www.linkedin.com/in/moch-ilham-bahari-01655512b/">LinkedIn: ilhambahari</a>
					<br>
					<a target="_blank" href="https://github.com/ilhambahari">Github: ilhambahari</a>
				</div>
			</div>

		</div>
	</section>

	<section class="s1">
		<div class="main-container">
			<h3 style="text-align: center;"><?= $project; ?></h3>

			<div class="post-wrapper">

				<div>
					<div class="post">
						<img class="thumbnail" src="images/honda/honda.PNG">
						<div class="post-preview">
							<?= $project3; ?>
						</div>
					</div>
				</div>

				<div>
					<div class="post">
						<img class="thumbnail" src="images/kasir/1.PNG">
						<div class="post-preview">
							<?= $project2; ?>
						</div>
					</div>
				</div>

				<div>
					<div class="post">
						<img class="thumbnail" src="images/pembayaran-spp/snap midtrans.PNG">
						<div class="post-preview">
							<?= $project1; ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section class="s2" id="kontak">
		<div class="main-container">
			<a href=""></a>
			<h3 style="text-align: center;">Get In Touch</h3>

			<form id="contact-form" action="mail.php" method="post">
				<a name="contact"></a>

				<label>Name</label>
				<input class="input-field" type="text" name="nama">

				<label>Subject</label>
				<input class="input-field" type="text" name="subject">

				<label>Email</label>
				<input class="input-field" type="text" name="email">

				<label>Message</label>
				<textarea class="input-field" name="pesan"></textarea>

				<input id="submit-btn" type="submit" value="Send" style="cursor: pointer;">
			</form>
		</div>
	</section> 

	<script type="text/javascript" src="script.js"></script>

</body>
</html>