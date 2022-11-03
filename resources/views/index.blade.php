<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/ico/apple-icon-120.html') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/page-misc.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- END: Custom CSS-->


  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <script>

    let mailSubscribe = "{{ route('mailSubscribe') }}",
    token = "{{ csrf_token() }}";
</script>
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Coming soon page-->
          <div class="misc-wrapper">
            <a class="brand-logo" href="{{ env('APP_URL') }}">
              <h2 class="brand-text text-primary ms-1">Code Crew</h2>
            </a>
            <div class="misc-inner p-2 p-sm-3">
              <div class="w-100 text-center">
                <h2 class="mb-1">Yakında Sizinleyiz✨🎉</h2>
                <p class="mb-3">Mükemmel şeyleri oluşturmak zaman alır! Size en mükemmeli ulaştırmak için çabalıyoruz.</p>
                <p class="mb-3">En ön koltuktan yerinizi ayırtın.</p>
                <form class="row row-cols-md-auto row justify-content-center align-items-center m-0 mb-2 gx-3" action="javascript:void(0)">
                  <div class="col-12 m-0 mb-1">
                    <input class="form-control" id="email" type="text" placeholder="eposta@x.x"/>
                  </div>
                  <div class="col-12 d-md-block d-grid ps-md-0 ps-auto">
                    <button class="btn btn-primary mb-1 btn-sm-block submitEmail"  type="submit">Yerini Ayırt</button>
                  </div>
                </form>
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_TBKozE.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;margin-left:50px;"  loop  autoplay></lottie-player>
              </div>
            </div>
          </div>
          <!-- / Coming soon page-->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/app.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-dark/page-misc-coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jun 2022 20:52:50 GMT -->
</html>