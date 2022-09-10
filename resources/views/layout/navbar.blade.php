<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pesan.in</title>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<!-- faveicon -->
	<link rel="icon" href="bgbanner/logo.png">
	<script src="jquery.js"></script>
</head>
<body>
	<header>
        <div class="logo">pesan<span class="in">.in</span></div>
            <nav>
                <ul>
                    <li><a href="/landingpage">Home</a></li>
                    <li><a href="" onclick="myScript()">Menu</a></li>
                    <li><a href="/empty">My Cart</a></li>
                    <li><a href="/error">Payment</a></li>
                    <li><div class="dropdown">
  							<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span>lang</span>
							</button>
						  	<ul class="dropdown-menu">
							    <li><a class="dropdown-item" href="#">English</a></li>
							    <li><a class="dropdown-item" href="#">Indonesia</a></li>
							</ul>
						</div>
					</li>
                </ul>
            </nav>
            <div class="menu-toggle">
            	<i class="fa fa-bars"></i>
        	</div>
    </header>
    @yield('content')
</body>
</html>