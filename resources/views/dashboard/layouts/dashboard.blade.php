
<!DOCTYPE html>
<!-- saved from url=(0038)http://127.0.0.1:8000/dashboard#/admin -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="x7DJ4JIy4De2Y9GLcC5C1S4j01UPDZtGVkzPgNs6">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/backend/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/backend/logo.png" type="image/x-icon">
    <title>kishor kontho</title>

    <!--Google font-->
    <link href="/assets/backend/css" rel="stylesheet">
    <link href="/assets/backend/css(1)" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/fontawesome.css">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/icofont.css">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/themify.css">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/flag-icon.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/bootstrap.css">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="/assets/backend/responsive.css">

    <link rel="stylesheet" type="text/css" href="/assets/backend/custom.css">
    <script src="/assets/backend/sa.js"></script>
    <script src="/assets/backend/js/app.js" defer></script>

    @stack('js')
    <!-- latest jquery-->
    {{-- <script src="/assets/backend/jq.js"></script> --}}

    <!-- Bootstrap js-->
    {{-- <script src="/assets/backend/bootstrap.bundle.min.js"></script> --}}
    <!-- Theme js-->
    {{-- <script src="/assets/backend/script.js" defer=""></script> --}}

</head>

<body main-theme-layout="main-theme-layout-4" class="print-reset" cz-shortcut-listen="true">
    @if(session()->has('success'))
        <script >
            setTimeout(() => {
                window.s_alert("{{session()->get('success')}}")
            }, 300);
        </script>
    @endif
    @if(session()->has('errors'))
        <script >
            setTimeout(() => {
                window.s_alert("there is an error","error")
            }, 300);
        </script>
    @endif
    <!--page-wrapper Start-->
    <div class="page-wrapper" id="app">
        <div>
            @include('dashboard.layouts.top_header')
            <!--Page Body Start-->
            <div class="page-body-wrapper" id="page_body_wrapper">
                <div>
                    @include('dashboard.layouts.left_sidebar')
                    <div class="page-body print-m-0 print-reset">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!--Page Body Ends-->
        </div>
    </div>
    <!--page-wrapper Ends-->
</body>


</html>
