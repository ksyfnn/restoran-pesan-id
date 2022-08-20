<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Pesan.in</title>
</head>
<body>
	<header>
        <div class="logo">pesan<span class="in">.in</span></div>
            <nav>
                <ul>
                    <li><a href="/landingpage">Home</a></li>
                    <li><a href="#about" onclick="myFunction()">Menu</a></li>
                    <li><a href="/empty">My Cart</a></li>
                    <li><a href="/error">Payment</a></li>
                </ul>
            </nav>
        <div class="menu-toggle">
        	<i class="fa fa-bars"></i>
        </div>
    </header>
    <div class="button-head">
		<div class="dropdown">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"/></svg>
		</div>
		<div class="back">
			<a href="/landingpage"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM384 288H205.3l49.38 49.38c12.5 12.5 12.5 32.75 0 45.25s-32.75 12.5-45.25 0L105.4 278.6C97.4 270.7 96 260.9 96 256c0-4.883 1.391-14.66 9.398-22.65l103.1-103.1c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L205.3 224H384c17.69 0 32 14.33 32 32S401.7 288 384 288z"/></svg></a>
		</div>
    </div>
	<div class="container">
		<div class="card">
			<div class="head-card">
				<center>
                	<img src="image/dinein.png" alt="">
                </center>
            </div>
			<div class="content">
				<h2>Dine In</h2>
				<a href="menu" class="button-start">Start</a>
			</div>
		</div>
		<div class="card">
			<div class="head-card">
				<center>
                	<img src="image/takeaway.png" alt="">
                </center>
            </div>
			<div class="content">
				<h2>Take Away</h2>
				<a href="menu" class="button-start">Start</a>
			</div>
		</div>
	</div>

	 <!-- allert menu -->
	<script>
		function myFunction() {
	  	alert("u should chose the option, dinein or take away!!!");
	}
	</script>

</body>
</html>