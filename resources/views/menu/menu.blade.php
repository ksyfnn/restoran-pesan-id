<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	<link rel="stylesheet" type="text/css" href="styleMenu.css">
	<!-- bosster -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<header>
        <div class="logo">pesan<span class="in">.in</span></div>
            <nav>
                <ul>
                    <li><a href="/landingpage">Home</a></li>
                    <li><a href="" onclick="myFunction()">Menu</a></li>
                    <li><a href="/empty">My Cart</a></li>
                    <li><a href="/error">Payment</a></li>
                </ul>
            </nav>
        <div class="menu-toggle">
        	<i class="fa fa-bars"></i>
        </div>
    </header> 
    <span>
    	<div class="container">    		
    		<div class="text-discount">
    			<p>don't miss the discount</p>
    		</div>    		
    	</div>
    </span>

    <section class="sec-block">
    	<div class="container text-center">
    		<div class="card mb-3 m-auto">
			  <div class="row g-0">
			    <div class="col-md-6">
			      <img src="gambar menu/hot coffe.jpg" class="img-fluid rounded-end">
			    </div>
			    <div class="col-5" style=" margin: auto;">
			      <div class="card-body">
			        <h5 class="card-title">hot coffe</h5>
			        <p class="card-text">Rp 24.000,00</p>
			        <p class="card-text">Rp 18.000,00</p>
			        <p class="line"></p>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="card mb-3">
			  <div class="row g-0">
			    <div class="col-md-6">
			      <img src="gambar menu/rendang.jpg" class="img-fluid rounded-end">
			    </div>
			    <div class="col-5" style=" margin: auto;">
			      <div class="card-body">
			        <h5 class="card-title">rendang</h5>
			        <p class="card-text">Rp 38.000,00</p>
			        <p class="card-text">Rp 28.500,00</p>
			        <p class="line"></p>
			      </div>
			    </div>
			  </div>
			</div>
    	</div>
    </section>

     <!-- allert menu -->
	<script>
		function myFunction() {
	  	alert("you've been here in menu page");
	}
	</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>