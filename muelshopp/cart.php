<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <!-- header -->
 <head>
 <div class="main">
	<div class="navbar">
		<label class="logo">SAMUEL SHOP</label>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="halaman_user.php">Product</a></li>
			<li><a href="">Admin Page</a></li>
		</ul>
	</div>	
</header>

<body>
<center>
	<br/>
	<div style='width: 350px;
	background: lightblue;
	margin: 30px auto;
	padding: 30px 20px;
	;'>
	<h3>Pembelian</h3>
	<form method="post" action="halaman_terimakasih.php">
		<table>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="number" name="nama"></td>
			</tr>
				<td>Pembayaran</td>
				<td valign="top"> 
			     <label><input type="checkbox" class="radio" name="bidang" value="Gizi">Gopay</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Gigi">Dana</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Kandungan">ATM</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Virus">Paypal</label><br>
                 <label><input type="checkbox" class="radio" name="bidang" value="Mukjizat">COD</label><br>
			    </td>
			</tr>
            <tr>
				<td>No WA</td>
				<td><input type="number" name="nama"></td>
</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="nama"></td>
			</tr>
				<td><input type="submit" value="Beli"><td>
			</tr>		
		</table>
	</form>
</div>
</center>

<div class="content">
<button type="button"><span></span><a href="halaman_user.php">KEMBALI</a></button>
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
	top: 185px;
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


<script type="text/javascript">
	// the selector will match all input controls of type :checkbox
	// and attach a click event handler 
	$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
</body>
</html>