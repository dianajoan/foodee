@extends('layouts.master')
@section('title') Careers @endsection

@section('content')

<!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-46">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Careers in the Restaurant</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Careers</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url({{ asset('images/bg-breadcrumbs.jpg' ) }});"></div>
        </div>
      </section>
      <!-- careers-->
      <section class="section section-md section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="{{ asset('images/about-1-519x446.jpg') }}" alt="" width="519" height="446"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h2>Current Vacancies</h2>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Management</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Kitchen</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Others</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>We have opened the following positions in our restaurant, we need people who are skilled and have the potential to work and confortable with with environment to send their most updated resume and academic documents via email by clicking on the apply button below.</p>
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Assistant Manager</li>
                        <li>Accountant</li>
                      </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="mailto:info@gmail.com">Apply</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="{{ route('contact') }}">Contact us</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <p>We have opened the following positions in our restaurant, we need people who are skilled and have the potential to work and confortable with with environment to send their most updated resume and academic documents via email by clicking on the apply button below.</p>
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Cooks</li>
                        <li>Sous Chef</li>
                        <li>Chefs</li>
                        <li>Commis - 1,2,3</li>
                      </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="mailto:info@gmail.com">Apply now</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="{{ route('contact') }}">Contact us</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p>We have opened the following positions in our restaurant, we need people who are skilled and have the potential to work and confortable with with environment to send their most updated resume and academic documents via email by clicking on the apply button below.</p>
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Waiters/Waitresses</li>
                        <li>Cleaners</li>
                        <li>Dish washers</li>
                      </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="mailto:info@gmail.com">Apply now</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="{{ route('contact') }}">Contact us</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url({{ asset('images/banner/background-03-1920x310.jpg') }} ); background-image: -webkit-image-set( url({{ asset('images/banner/background-03-1920x310.jpg 1x') }} ), url({{ asset('images/banner/background-03-3840x620.jpg 2x') }} )"><img src="{{ asset('images/banner/foreground-03-1600x310.png') }}" srcset="{{ asset('images/banner/foreground-03-1600x310.png 1x') }}, {{ asset('images/banner/foreground-03-3200x620.png 2x') }}" alt="" width="1600" height="310"></a>
@endsection