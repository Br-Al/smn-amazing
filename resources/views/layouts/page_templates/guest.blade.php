@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
	<div class="carousel slide" data-ride="carousel" id="main-slider" style="height: 600px;">
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
          	<img src="{{asset('material')}}/img/cover.jpg" class="d-block img-fluid" style="height: 600px; width:100%;">
          	<div class="carousel-caption d-none d-md-block justify-content-center">
				
				<h1 class="text-white text-center">{{ __('Welcome to TongusT') }}</h1>
				
          	</div>
          </div>
          <div class="carousel-item">
          	<img src="{{asset('material')}}/img/imac1.png" class="d-block img-fluid"  style="height: 600px; width:100%;">
          	<div class="carousel-caption d-none d-md-block">
				<h1 class="text-white text-center">{{ __('Welcome to TongusT') }}</h1>
          		
          	</div>
          </div>
          <div class="carousel-item">
          	<img src="{{asset('material')}}/img/login.jpg" class="d-block img-fluid"  style="height: 600px; width:100%;">
          	<div class="carousel-caption d-none d-md-block">
				<h1 class="text-white text-center">{{ __('Welcome to TongusT') }}</h1>
          		
          	</div>
          </div>
      </div>
  </div>
  <div class="page-header login-page header-filter w-100" filter-color="black" style="align-items: center; position: absolute; padding-top: 0px !important;" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
