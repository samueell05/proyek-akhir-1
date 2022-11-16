<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOKO gitar ss</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
<div class="main">
	<div class="navbar">
		<label class="logo">TOKOH GITAR </label>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="halaman_user.php">Product</a></li>
			<li><a href="">Admin </a></li>
		</ul>
	</div>	
	<div class="content">
	<p>SELAMAT DATANG DI TOKO GITAR SAYA. TEKAN TOMBOL DIBAWAH INI UNTUK MELIHAT PRODUK GITAR TERBARU.</p>
	<div>
		<button type="button"><span></span><a href="halaman_user.php">Lihat Produk terbaru</a></button>
</div>

<style>
	* {
	margin: 0;
	padding: 0;
	text-decoration: none;
}

.main {
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0 ,0 ,0 ,0.75),rgba(0, 0, 0, 0.75)), url(img/onlineshop.jpg);
	background-size: cover;
	background-position: center;
}

.navbar {
	width: 85%;
	margin: auto;
	padding: 35px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.logo {
	font-size: 36px;
	color: white;
	font-weight: bold;
	width: 120px;
	cursor: pointer;
}

.navbar ul li{
	list-style: none;
	display: inline-block;
	margin: 0 20px;
	position: relative;
}

.navbar ul li a {
	color: white;
	text-transform: uppercase;
}

.navbar ul li::after {
	content: '';
	height: 3px;
	width: 0;
	background: red;
	position: absolute;
	left: 0;
	bottom: -10px;
	transition: 0.5s;
}

.navbar ul li:hover::after {
	width: 100%;
}

.content {
	top: 50%;
	width: 100%;
	text-align: center;
	color: white;
	position: absolute;
	transform: translateY(-50%);
}

button {
	width: 200px;
	margin: 20px 10px;
	padding: 15px 0;
	text-align: center;
	text-transform: uppercase;
	font-weight: bold;
	color: white;
	background: transparent;
	border: 3px solid cyan;
	position: relative;
	cursor: pointer;
	border-radius: 10px;
	overflow: hidden;
}

span {
	height: 100%;
	width: 0;
	left: 0;
	bottom: 0;
	z-index: -1;
	position: absolute;
	border-radius: 10px;
	background: pink;
	transition: 0.5s;
}

button:hover span {
	width: 100%;
}

button:hover {
	border: none;
}

</style>
</body>
</html>

