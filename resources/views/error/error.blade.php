<!DOCTYPE html>
<html>
<head>
	<title>404 not found</title>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300&display=swap');

		body{
			margin: auto;
		}

		.container{
			display: flex;
			justify-content: center;
			padding: 100px;
		}

		#logo{
			font-family: 'Inknut Antiqua', serif;
		}

		.text{
			padding: 50px;
		}

		.text .logo{
			color: #D1A506;
		}

		span{
			color: #D1A506;
		}

		img{
			float: right; 
			width: 400px;
			height: 500px;
			object-fit: cover;
		}
	</style>

</head>
<body>

	<div class="container">
			<div class="text">			
				<h1 id="logo">pesan<span class="logo">.id</span></h1><br>
				<h1><b>404. </b><span>that's an error</span></h1><br>
				<h3>The requested URL <br>/badpage was not found on <br>this server. <span>That's all we <br>know.</span></h3>
			</div>

			<div class="image">			
					<img src="service/error.png">
			</div>
	</div>

</body>
</html>