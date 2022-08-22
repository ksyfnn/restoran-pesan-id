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
    
     <!-- menu bawah -->
    <section class="sec-block">
    	<div class="main">
		<div class="food"><h1>food</h1></div>
		<div class="breakfast"><h1>breakfast</h1></div>
		<div class="drink"><h1>drink</h1></div>
	</div>

	<!-- 1 -->
	<div class="body">
		<div class="pict-left"><img src="gambar menu/waffle.jpg"></div>
		<div class="text-left">
			<div class="title-left">waffle trouble</div>
			<p id="statement-left">Waffles are desserts made of leavened dough or dough cooked between two plates that are patterned to give them a distinctive size, shape and surface feel. There are many variations based on the type of waffle grill and .</p>
		</div>
		<div class="p-button-left">
			<div class="price-left"><p>rp.16.000,00</p></div>
			<div class="button-left">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 2 -->
	<div class="body">
		<div class="pict-right"><img src="gambar menu/milk.jpg"></div>
		<div class="text-right">
			<div class="title-right">milk</div>
			<p id="statement-right">Milk is a white, nutritious liquid produced by the mammary glands of mammals, including humans. Milk is the main source of nutrition for babies before they can digest solid food.</p>
		</div>
		<div class="p-button-right">
			<div class="price-right"><p>rp.16.000,00</p></div>
			<div class="button-right">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>	
	<!-- 3 -->
	<div class="body">
		<div class="pict-left"><img src="gambar menu/toast bread.jpg"></div>
		<div class="text-left">
			<div class="title-left">toast bread</div>
			<p id="statement-left">Toast refers to a piece of bread that is baked or baked by a thermal radiation process so that the bread becomes more browned and crispy.</p>
		</div>
		<div class="p-button-left">
			<div class="price-left"><p>rp.16.000,00</p></div>
			<div class="button-left">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 4 -->
	<div class="body">
		<div class="pict-right"><img src="gambar menu/tea.jpg"></div>
		<div class="text-right">
			<div class="title-right">tea</div>
			<p id="statement-right">Tea is a beverage that contains caffeine, an infusion made by brewing the dried leaves, shoots, or petioles of the Camellia sinensis plant with hot water.</p>
		</div>
		<div class="p-button-right">
			<div class="price-right"><p>rp.16.000,00</p></div>
			<div class="button-right">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>	
	<!-- 5 -->
	<div class="body">
		<div class="pict-left"><img src="gambar menu/croissant.jpg"></div>
		<div class="text-left">
			<div class="title-left">croissant</div>
			<p id="statement-left">Croissant originating from France, so named because of its shape resembles a crescent moon. According to legend, this bread came from Europe to celebrate the victory of the Franks over the Umayyad forces</p>
		</div>
		<div class="p-button-left">
			<div class="price-left"><p>rp.16.000,00</p></div>
			<div class="button-left">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 6 -->
	<div class="body">
		<div class="pict-right"><img src="gambar menu/hot coffe.jpg"></div>
		<div class="text-right">
			<div class="title-right">hot coffe</div>
			<p id="statement-right">Croissant originating from France, so named because of its shape resembles a crescent moon. According to legend, this bread came from Europe to celebrate the victory of the Franks over the Umayyad forces</p>
		</div>
		<div class="p-button-right">
			<div class="price-right"><p>rp.16.000,00</p></div>
			<div class="button-right">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>	
	<!-- 7 -->
	<div class="body">
		<div class="pict-left"><img src="gambar menu/pancakes.jpg"></div>
		<div class="text-left">
			<div class="title-left">pancake</div>
			<p id="statement-left">Pancakes or pancakes are cakes made from flour, chicken eggs, sugar and milk. The ingredients are mixed with water to form a thick dough which is fried on a flat pan that is lightly greased with oil.</p>
		</div>
		<div class="p-button-left">
			<div class="price-left"><p>rp.16.000,00</p></div>
			<div class="button-left">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 8 -->
	<div class="body">
		<div class="pict-right"><img src="gambar menu/chocolate.jpg"></div>
		<div class="text-right">
			<div class="title-right">chocolate</div>
			<p id="statement-right">Hot chocolate is a hot drink made from cocoa or cocoa powder and sugar, with warm water or milk. Several studies have shown that hot chocolate is healthful because of the antioxidants contained in cocoa.</p>
		</div>
		<div class="p-button-right">
			<div class="price-right"><p>rp.16.000,00</p></div>
			<div class="button-right">
				<ul>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- plus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM224 368C237.3 368 248 357.3 248 344V280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H248V168C248 154.7 237.3 144 224 144C210.7 144 200 154.7 200 168V232H136C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H200V344C200 357.3 210.7 368 224 368z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- minus --><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM136 232C122.7 232 112 242.7 112 256C112 269.3 122.7 280 136 280H312C325.3 280 336 269.3 336 256C336 242.7 325.3 232 312 232H136z"/></svg></li>
				</ul>
			</div>
		</div>
	</div>	

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
