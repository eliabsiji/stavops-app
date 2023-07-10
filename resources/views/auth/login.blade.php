<!DOCTYPE html>

<html lang="en" >
    <!--begin::Head-->
    
<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/authentication/layouts/creative/sign-in.html')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 04:07:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8"/>
       
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
     
        <link rel="shortcut icon" href="{{ asset('html/assets/assets/media/logos/favicon.ico')}}"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="{{ asset('html/assets/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
                            <link href="{{ asset('html/assets/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
        
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->            
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html')}}?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
<style>
    body {
        background-image: url('{{ asset('html/assets/assets/media/auth/bg4.jpg')}}');
    }

    [data-bs-theme="dark"] body {
        background-image: url('{{ asset('html/assets/assets/media/auth/bg4-dark.jpg')}}');
    }
</style>
<!--end::Page bg image-->

<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-column-fluid flex-lg-row">
    <!--begin::Aside-->
    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">              
        <!--begin::Aside-->
        <div class="d-flex flex-center flex-lg-start flex-column">              
            <!--begin::Logo-->
            <a href="{{ asset('html/assets/index.html')}}" class="mb-7">
                <img alt="Logo" src="{{ asset('html/assets/assets/media/logos/custom-3.svg')}}"/>
            </a>    
            <!--end::Logo-->            

            <!--begin::Title-->
            <h2 class="text-white fw-normal m-0"> 
                Branding tools designed for your business
            </h2>  
            <!--end::Title-->         
        </div>
        <!--begin::Aside-->    
    </div>
    <!--begin::Aside-->

    <!--begin::Body-->
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <!--begin::Card-->
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <!--begin::Wrapper-->
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate"  method="POST" action="{{ route('login') }}">
  
        @csrf
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">
            Sign In
        </h1>
        <!--end::Title-->

       
    </div>
    <!--begin::Heading-->

    <!--begin::Separator-->
    <div class="separator separator-content my-14">
        <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
    </div>
    <!--end::Separator-->

    <!--begin::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/> 
        <!--end::Email-->
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
    </div>

    <!--end::Input group--->
    <div class="fv-row mb-3">    
        <!--begin::Password-->
        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
        <!--end::Password-->
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <!--end::Input group--->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>

        <!--begin::Link-->
        <a href="reset-password.html')}}" class="link-primary">
            Forgot Password ?
        </a>
        <!--end::Link-->
    </div>
    <!--end::Wrapper-->    

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
            
<!--begin::Indicator label-->
<span class="indicator-label">
    Sign In</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->        </button>
    </div>
    <!--end::Submit button-->

    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">
        Not a Member yet?

        <a href="{{ route('register') }}" class="link-primary">
            Sign up
        </a>
    </div>
    <!--end::Sign up-->
</form>
<!--end::Form-->     

            </div>
            <!--end::Wrapper-->

            <!--begin::Footer-->  
            <div class="d-flex flex-stack px-lg-10">
             
                <!--begin::Links-->
                <div class="d-flex fw-semibold text-primary fs-base gap-5">
                    <a href="{{ asset('html/assets/pages/team.html')}}" target="_blank">Terms</a>

                    <a href="{{ asset('html/assets/pages/pricing/column.html')}}" target="_blank">Plans</a>
                    
                    <a href="{{ asset('html/assets/pages/contact.html')}}" target="_blank">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - Sign-in--></div>
<!--end::Root-->
        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "{{ asset('html/assets/assets/index.html')}}";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="{{ asset('html/assets/assets/plugins/global/plugins.bundle.js')}}"></script>
                            <script src="{{ asset('html/assets/assets/js/scripts.bundle.js')}}"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="{{ asset('html/assets/assets/js/custom/authentication/sign-in/general.js')}}"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->


</html>