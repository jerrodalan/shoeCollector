@extends('app')

@section('content')
<div class = "container-fluid" style=" background-image: url('/img/air-jordan-10-chicago.jpg'); background-size: 100% 100%; background-repeat:no-repeat; height: 500px;">
<div class="jumbotron"style=" color: #f0f0f0; background: none;">
	<h1 >Welcome to Shoe Collector</h1>
	<p>Your Home for the Latest Releases</p>
	<div class="row">
		<div class="col-sm-4">
		<button type="button" class="btn-primary">Pre-Order</button>
		</div>
	</div>


</div>
</div>
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
		<div class="row">
			<div class="col-md-4">
				<h2>Grow Affordably</h2>
				<p>
					Grow your shoe collection without breaking the bank. Our shoes are always priced less than
					the resale market. Save even more by pre-ordering.
				</p>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<img style="width:132px; height:132px;" src="/img/flowers12.svg">
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
			<div class ="col-md-4">
				<h2>Never Miss a Release</h2>
				<p>
					Sleep well saturday morning knowing you have the latest release on the way to your residence.
					Our pre-order option allows you to reserve a new release in your desired size. Skip the hassel
					and worry, and pay less.
				</p>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<img style="width:132px; height:132px;" src="/img/footwear24.svg">
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
			<div class ="col-md-4">
				<h2>Quick Delivery</h2>
				<p>
					Rock the shoes same day as if you bought it yourself. Shoes are dilivered in the same time-table
					as if you bought it from the leading shoe sites.
				</p>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<img style="width:132px; height:132px;" src="/img/deliverytruck5.svg">
					</div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>

</div>
<div class="container-fluid" style="background-color: #888a85">
	<h2>Why trust us?</h2>

</div>

<div class="container">
	<div class="page-header">
		<h2 class="text-center">Reliability</h2>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<ul style="list-style: none">
				<li><h3>100% Legit</h3></li>
				<li><h3>113 Satisfied Customers</h3></li>
				<li><h3>0 Flakes</h3></li>
			</ul>
		</div>
		<div class="col-sm-6">
			<img style="width:240px; height:400px; text-align: left" src="/img/legit.jpg">
		</div>
	</div>
</div>
@endsection