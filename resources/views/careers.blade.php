@extends('layouts.master')
@section('title', 'Careers')

@section('content')

<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Careers</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- careers-page -->
	<div class="careers about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Careers</h3> 
			<h5>About Job</h5>
			<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas faucibus ipsum et libero euismod iaculis. Integer consectetur congue laoreet. Morbi eget leo elementum, vulputate eros et, egestas diam. Nam egestas, quam id viverra congue, elit mi eleifend libero, eget vulputate ante lorem vel quam. Sed suscipit ligula eu mi bibendum, vel mollis enim finibus. Suspendisse vitae est tortor. Donec aliquet leo vitae ligula mattis, vitae auctor mi pellentesque. Integer eu dui accumsan, convallis neque id, malesuada urna. </p>
			<div class="w3careers-row">
				<h5>Here  are some Career Solutions :</h5>
				<div class="col-md-6 w3careers-grids">
					<h6>1. INNOVATION</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices orci at augue sollicitudin, sed rhoncus leo dictum. Duis sed elit tempus, convallis elit eget, ornare nibh. Sed eu risus eget magna condimentum blandit.  </p>
				</div>
				<div class="col-md-6 w3careers-grids">
					<h6>2. NEW TRENDS</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices orci at augue sollicitudin, sed rhoncus leo dictum. Duis sed elit tempus, convallis elit eget, ornare nibh. Sed eu risus eget magna condimentum blandit.  </p>
				</div>
				<div class="col-md-6 w3careers-grids">
					<h6>3. OPENNESS</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices orci at augue sollicitudin, sed rhoncus leo dictum. Duis sed elit tempus, convallis elit eget, ornare nibh. Sed eu risus eget magna condimentum blandit.  </p>
				</div>
				<div class="col-md-6 w3careers-grids">
					<h6>4. OWNERSHIP</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices orci at augue sollicitudin, sed rhoncus leo dictum. Duis sed elit tempus, convallis elit eget, ornare nibh. Sed eu risus eget magna condimentum blandit.  </p>
				</div>
				<div class="col-md-6 w3careers-grids">
					<h6>5. HONESTY</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices orci at augue sollicitudin, sed rhoncus leo dictum. Duis sed elit tempus, convallis elit eget, ornare nibh. Sed eu risus eget magna condimentum blandit.  </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //careers-page -->  
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul> 
			</div> 
			<div class="col-md-6 subscribe-right">
				<h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>  
				<form action="#" method="post"> 
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div> 
				</form> 
				<img src="images/i1.png" class="sub-w3lsimg" alt=""/>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //subscribe -->
@endsection