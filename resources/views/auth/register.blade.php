<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta charset="utf-8" />
 <meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
 <meta name="MobileOptimized" content="width" />
 <meta name="HandheldFriendly" content="true" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Agribchain|Home') }}</title>

    <style media="all">
   @import url("templates/core/modules/system/css/components/align.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/fieldgroup.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/container-inline.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/clearfix.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/details.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/hidden.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/item-list.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/js.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/nowrap.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/position-container.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/progress.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/reset-appearance.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/resize.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/sticky-header.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/tablesort.module_6602056c.css");
   @import url("templates/core/modules/system/css/components/tree-child.module_6602056c.css");
   @import url("templates/modules/panels/plugins/layouts/onecol/onecol_6602056c.css");
   </style>
    <style media="all">
   @import url("templates/themes/rose/css/bootstrap_6602056c.css");
   @import url("templates/themes/rose/css/animate_6602056c.css");
   @import url("templates/themes/rose/rs-plugin/css/settings_6602056c.css");
   @import url("templates/themes/rose/css/style_6602056c.css");
   @import url("templates/themes/rose/css/color_6602056c.css");
   @import url("templates/themes/rose/css/simpletextrotator_6602056c.css");
   @import url("templates/themes/rose/css/javascript_6602056c.css");
   @import url("templates/themes/rose/css/responsive_6602056c.css");
   @import url("templates/themes/rose/css/agribchain_6602056c.css");
   </style>

 <link rel="stylesheet" href="{{url('templates/others/css_5b3fce1e.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/css_b50095db.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/bootstrap/3.3.0/css/bootstrap.min.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/font-awesome/4.6.1/css/font-awesome.min.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/css_3e128f4e.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/css_ccc92c31.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/css_914f3d2a.css')}}" media="all" />
 <link rel="stylesheet" href="{{url('templates/others/css_435ca147.css')}}" media="all" />

 </head>
 <body class="home home-t-h body" class="toolbar-themes toolbar-no-tabs toolbar-no-icons toolbar-themes-admin-theme--seven path-frontpage has-glyphicons">

     <div id="preloader">
		 <div id="status" class="animated infinite pulse"></div>
	 </div>

 <a href="#main-content" class="visually-hidden focusable skip-link">
  Skip to ____ content
 </a>

 <header class="header ">
@include('layouts.header')


 </header>
 
 <div class="content">
     <div class="highlighted">
    


 </div>
            


        
        
                  
<div class="panel-display panel-1col clearfix">
    <div class="panel-panel panel-col">
<div>
<div class="block-region-middle">

  <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item" style="margin-top:1.9%">
                      <section class="features" id="services">
                          <div class="container">
                              <div class="heading-wrap col-md-12">
                                  <span class="section-subtitle-m section-subtitle-color">AgriBChain provides a simplified and structured value based supply chain ecosystem from producer to buyer. </span>
                              </div>
                              <!-- FEATURE ITEM -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                          </div>
                      </section>
                  </div>

</div></div>
    </div>
</div>


    

     <!-- *********************
            WIDGET CONTAINER
    ********************** -->
     <section class="footer-container no-pd-b">
      @include('layouts.footer')
     </section>
 </div> <!-- End Content -->


 <div class="back-to-top" id="backTop"><i class="icon-arrow-up4"></i></div>




 <script src="{{url('templates/core/assets/vendor/domready/ready.min_cdea8442.js')}}"></script>
 <script src="{{url('templates/core/assets/vendor/jquery/jquery.min_cdea77f8.js')}}"></script>
 <script src="{{url('templates/core/assets/vendor/underscore/underscore-min_cdea8541.js')}}"></script>
 <script src="{{url('templates/core/misc/drupalSettingsLoader_cdeaa207.js')}}"></script>
 <script src="{{url('templates/core/misc/drupal_cdeaa207.js')}}"></script>
 <script src="{{url('templates/themes/bootstrap/js/drupal.bootstrap_6602056c.js')}}"></script>
 <script src="{{url('templates/themes/bootstrap/js/attributes_6602056c.js')}}"></script>
 <script src="{{url('templates/themes/bootstrap/js/theme_6602056c.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery-1.11.2_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.flexslider_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.parallax-1.1.3_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.scrollto-1.4.3.1_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.localscroll-1.2.7_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.isotope_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.masonry.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/owl.carousel_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.countTo_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/tabby.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/wow_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/tweetie.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/instafeed.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.magnific-popup_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.simple-text-rotator_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/jquery.smoothscroll_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/validator.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/rs-plugin/js/jquery.themepunch.tools.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/rs-plugin/js/jquery.themepunch.revolution.min_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/functions_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/custom_1e449cfa.js')}}"></script>
 <script src="{{url('templates/themes/rose/js/agribchain_1e449cfa.js')}}"></script>
 <script src="{{url('templates/others/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
 <script src="{{url('templates/others/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js')}}"></script>
 <script src="{{url('templates/themes/bootstrap/js/popover_6602056c.js')}}"></script>
 <script src="{{url('templates/themes/bootstrap/js/tooltip_6602056c.js')}}"></script>

     

 </div></div></div></div></div></div>

 <script>
 document.querySelectorAll('a[href^="#"]').forEach(anchor => {
     anchor.addEventListener('click', function (e) {
         e.preventDefault();

         document.querySelector(this.getAttribute('href')).scrollIntoView({
             behavior: 'smooth'
         });
     });
 });
 </script>
 </body>
 </html>
 