@extends('layout/navbar')
@section('content')

    <div class="text">
        <h1>where to eat?</h1>
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
				<a href="/menu" class="button-start">Start</a>
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
				<a href="/menu" class="button-start">Start</a>
			</div>
		</div>
	</div>

	<script>
        $(document).ready(function () {
            $(".menu-toggle").click(function () {
                $('nav').toggleClass('active');
            })
        })

        function myScript(){
        	alert("ups, u should chose the option dinein or takeaway");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@endsection