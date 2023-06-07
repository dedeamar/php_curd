<!DOCTYPE html>
<html>
<head>
	<meta charset="uf-8">
	<meta charset="viewport" content="width=device-width, intial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">Toko DD</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="BELANJA.html">BELANJA</a></li>
				<li><a href="KERANJANG.html"><i class="fas fa-shopping-basket"></i></a></li>
				<li class="active"><a href="SIGN.html">Sign Up</a></li>
			</ul>
		</div>
	</header>

	<!-- sign -->
	<div class="sign">
		<form class="" action="sign.html" method="post">
			<h1>Sign Up</h1>
			<input type="text" placeholder="Full Name" class="txtb">
			<input type="email" placeholder="Email" class="txtb">
			<input type="password" placeholder="Password" class="txtb">
			<input type="submit" value="Create Account" class="signup">
			<a href="#">Sudah punya akun?</a>
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>
    <style>
        body{
            background-color: lightblue;
        }
        * {
            
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
a {
	color: inherit;
	text-decoration: none;
}
.medsos {
	padding:5px 0;
	background-color: #38a49d;
}
.medsos ul li {
	display: inline-block;
	color: #fff;
	margin-right: 10px;
}
.container {
	width:80%;
	margin:0 auto;
}
.container:after {
	content:'';
	display: block;
	clear: both;
}
header h1 {
	float: left;
	padding:15px 0;
	color: #3baba4;
}
header ul {
	float: right;
}
header ul li {
	display: inline-block;
}
header ul li a {
	padding:25px 20px;
	display: inline-block;
	transition: 0.5s;
}
header ul li a:hover {
	background-color: #33847e;
	color: #fff;
	transform: scale(0.98);
}
.active {
	background-color: #00C1B3;
	color: #fff;
}
.banner {
	height: 60vh;
	background-image: url('../img/banner.jpg');
	background-size: cover;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}
.banner:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(0, 193, 179, .4);
}
.banner h2 {
	color: #fff;
	z-index: 1;
	padding: 20px 25px;
	border:3px solid #fff;
}
section {
	padding: 50px 0;
}
section h3 {
	text-align: center;
	padding: 20px 0;
	color:#00C1B3;
}
section {
	padding: 50px 0;
}
section h3 {
	text-align: center;
	padding: 20px 0;
	color: #00C1B3;
	margin-bottom: 25px;
}
.about,
.service {
	padding-bottom: 100px;
}
.about p {
	color:#666;
	word-spacing: 2px;
	line-height: 25px;
}
.service {
	background-color: #f9f9f9;
}
.box {
	color:#2ea59e;
}
.box:after {
	content: '';
	display: block;
	clear: both;

}
.box .col-4 {
	width: 25%;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.box .col-7 {
	width: 14%;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
.icon {
	width: 70px;
	height: 70px;
	border: 1px solid;
	border-radius: 50%;
	text-align: center;
	line-height: 70px;
	font-size: 20px;
	margin:0 auto;
}
.box .col-4 h4 {
	margin:20px 0;
}
.box .col-7 h4 {
	margin:25px 0;
}
footer {
	padding:30px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}

.label {
	background-color: #1f8881;
	color: #fff;
}
.gambargerak {
	margin: 100px;
}
@keyframes puterin {
	100% {
		transform: rotate(360deg);
	}
}

body {margin:0; font-family: sans-serif;}

.gambar {width: 90%; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr}

.gambar .foto img{width: 315px;}

.foto {border:1px black; margin:10px; text-align: center;}

.foto a:hover {
	background-color: green;
	color: #fff;
}

.foto a{border:1px solid green; padding:10px; color: white; background: #00C403;  text-decoration: none; border-radius: 20px; cursor: pointer;}

.foto {border: 1px solid #00C1B3; margin:10px;}

.foto p {
	color:#FF7476;
}

.foto h2 {
	color:#505050 ;
}

.rekomendasi {
	text-align: center;
	color: #00C1B3;
	margin-bottom: 25px;
}
.rekomendasi h3{padding:4px; color: white; background: #00C1B3;  text-decoration: none; cursor: pointer;}

.kategori {
	padding-bottom: 1px;
}

.kategori {
	background-color: #f9f9f9;
}
.info {
	text-align: center;
	color: #D5D5D5;
	padding: 176px;
}
.info h3 a{
color: #767676 ;
}

.sign {
	width: 300px;
	padding: 20px;
	text-align: center;
	background-color: #2e817b;
	position:absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	overflow: hidden;
}
.sign h1{
	margin-top: 100px;
	font-family: 'Permanent Marker', cursive;
	color: rgb(255, 223, 17);
	font-size: 40px;
}
.sign input{
	display: block;
	width: 100%;
	padding: 0 16px;
	height: 44px;
	text-align: center;
	box-sizing: border-box;
	outline: none;
	border: none;
	font-family: "monstserrat",sans-serif;
}
.txtb{
	margin: 20px 0;
	background: rgba(255, 255, 255, 0.5);
	border-radius: 6px;
}
.signup{
	margin-top: 60px;
	margin-bottom: 20px;
	background-color: #4898bc;
	color: #fff;
	border-radius: 44px;
	cursor: pointer;
	transition: 0.8s;
}
.signup:hover{
	transform: scale(0.96);
}
.sign a{
	text-decoration: none;
	color:#fff;
	font-family: "monstserrat", sans-serif;
	font-size: 14px;
	padding: 10px;
	transition: 0.8s;
	display: block;
}
.sign a:hover{
	background: rgba(0,0,0,.3);
}
    </style>
</body>
</html>