
<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
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
		<label class="logo">PRODUK TERBARU</label>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="halaman_user.php">Product</a></li>
	
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
	height: 100%;
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
	color: black;
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
    <title>Toko gitar samuel</title>
    <style>
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #BA55D3;
      }
      
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
      background: gray;
    }
    table thead th {
        background-color:	#87CEFA;
        border: solid 1px none;
        color: white;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px none;
        color: white;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: cyan;
          color: black;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>

  <body>
    <center><h1> PRODUK TERBARU</h1><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Dekripsi</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>

    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_produk']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
          <td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td>
          <td>Rp <?php echo number_format($row['harga_jual'],0,',','.');?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
              <a href="cart.php?id=<?php echo $row['id']; ?>">Beli</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
      
  </body>
</html>