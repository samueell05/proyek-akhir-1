<!DOCTYPE html>
<html lang="eng">
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
<div class="main">
	<div class="navbar">
		<label class="logo">samuel gitar SHOP</label>
		<ul>
            <li><a href="index.php">Home</a></li>
			
		</ul>
	</div>	
</head>
<body>
    <center>
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Terima Kasih Telah Belanja Di Toko Kami.</h1>
                <h1>Pesanan Anda Sedang Di Proses mohon menunggu :)</h1>
            </form>
</center>
<div class="content">
<button type="button"><span></span><a href="index.php">KEMBALI</a></button>
</div>
        </div>
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
    top: 130px;
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
    .container{
    width: 400px;
    display: flex;
    max-width: 850px;
    background: pink;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1,);
}


h1{
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
    
}


</style>
</body>
</html>

