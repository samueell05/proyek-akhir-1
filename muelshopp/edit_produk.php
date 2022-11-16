<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOKO GITAR SS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
<div class="main">
	<div class="navbar">
		<label class="logo">Samuel SHOP</label>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="halaman_user.php">Product</a></li>
			<li><a href="login.php">Admin Page</a></li>
		</ul>
	</div>	


<style>
	* {
	margin: 0;
	padding: 0;
	text-decoration: none;
}

.main {
	width: cover;
	height: cover;
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
	background: cyan;
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
	background: cyan;
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


  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Produk <?php echo $data['nama_produk']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
          <label>Harga Beli</label>
         <input type="text" name="harga_beli" required=""value="<?php echo $data['harga_beli']; ?>" />
        </div>
        <div>
          <label>Harga Jual</label>
         <input type="text" name="harga_jual" required="" value="<?php echo $data['harga_jual']; ?>"/>
        </div>
        <div>
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['gambar_produk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar_produk" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>