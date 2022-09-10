<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleEmpty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Pesan.in</title>
    <!-- faveicon -->
    <link rel="icon" href="bgbanner/logo.png">
</head>
<body>
    <header>
        <div class="logo">pesan<span class="in">.in</span></div>
            <nav>
                <ul>
                    <li><a href="/landingpage">Home</a></li>
                    <li><a href="" onclick="myFunction()">Menu</a></li>
                    <li><a href="">My Cart</a></li>
                    <li><a href="/error">Payment</a></li>
                </ul>
            </nav>
    </header>
    <div class="button-head">
        <div class="back">
            <a href="">
                <i class="fa-solid fa-circle-arrow-left fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="cart-empty">
        <h1>My Cart</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="text">
                <p>Oh noo...  :(</p>
                <h1>Cart Is Empty</h1>
                <p>Go find some delicious food/drink </p>
            </div>
            <div class="head-card">
                <center>
                    <img src="bgbanner/empty.png">
                </center>
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