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
@endsection