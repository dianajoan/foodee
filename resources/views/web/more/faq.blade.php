@extends('layouts.master')
@section('title') FAQ @endsection

@section('content')

	<!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-46">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">FAQ of the Restaurant</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Technical Questions</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url({{ asset('images/bg-breadcrumbs.jpg' ) }});"></div>
        </div>
      </section>

	<!-- faq-page -->
	<div class="faq-w3agile about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Frequently asked questions(FAQ)</h3> 
			<ul class="faq">
				<li class="item1"><a href="#" title="click here">How do i print a recipe?</a>
					<ul>
						<li class="subitem1"><p> Printing directly from any recipe page is easy. Simply click the Printer icon button located on the recipe page, located above the recipe ingredients. You will then be taken to a Print Preview page, and then can click Print..</p></li>										
					</ul>
				</li>
				<li class="item2"><a href="#" title="click here">Help, My recipe won't print my recipes</a>
					<ul>
						<li class="subitem1"><p> Some browsers have difficulty with page formats and only read the advertising and framing on the page, not the recipe. An easy way to print the recipe is to use a printer-friendly format. You can use our printer­friendly option by clicking on the Print button located above the recipe ingredients..</p></li>										
					</ul>
				</li>
				<li class="item3"><a href="#" title="click here">I can't add recipes to my favourites</a>
					<ul>
						<li class="subitem1"><p>If you are having trouble adding recipes to your Favorites, please ensure you are viewing EatingWell on a Supported Browser. If you are, and you are still not able to save recipes to your Favorites, please ensure you have Cookies and JavaScript enabled on your browser. If you are still having problems, please email us at Feedback@foodee.com..</p></li>										
					</ul>
				</li>
			</ul> 
			<!-- script for tabs -->
			<script type="text/javascript">
				$(function() {
				
					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');
					
					menu_ul.hide();
				
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>
			<!-- script for tabs -->   
		</div>
	</div>
	<!-- //faq-page -->
<a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url({{ asset('images/banner/background-03-1920x310.jpg') }} ); background-image: -webkit-image-set( url({{ asset('images/banner/background-03-1920x310.jpg 1x') }} ), url({{ asset('images/banner/background-03-3840x620.jpg 2x') }} )"><img src="{{ asset('images/banner/foreground-03-1600x310.png') }}" srcset="{{ asset('images/banner/foreground-03-1600x310.png 1x') }}, {{ asset('images/banner/foreground-03-3200x620.png 2x') }}" alt="" width="1600" height="310"></a>
@endsection