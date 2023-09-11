<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Skylark candidate Portal') }}</title>
    <link rel="icon" href="{{asset('adminassets/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="{{asset('adminassets/plugins/fonticon/fonts.googleapis.comIcons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('adminassets/plugins/fonticon/fonts.googleapislatin.css')}}" rel="stylesheet" type="text/css">
<!-- Bootstrap Core Css -->
<link href="{{asset('adminassets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<!-- Waves Effect Css -->
<link href="{{asset('adminassets/plugins/node-waves/waves.css')}}" rel="stylesheet" />
<!-- Animation Css -->
<link href="{{asset('adminassets/plugins/animate-css/animate.css')}}" rel="stylesheet" />
<!-- Morris Chart Css-->
<link href="{{asset('adminassets/plugins/morrisjs/morris.css')}}" rel="stylesheet" />
<!-- Custom Css -->
<link href="{{asset('adminassets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('adminassets/css/custom.css')}}" rel="stylesheet">
    <!-- Colorpicker Css -->
    <link href="{{asset('adminassets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" />
<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{asset('adminassets/css/themes/all-themes.css')}}" rel="stylesheet" />
    <!-- Dropzone Css -->
    <link href="{{asset('adminassets/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
    <!-- Multi Select Css -->
    <link href="{{asset('adminassets/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href="{{asset('adminassets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<!-- JQuery DataTable Css -->
<link href="{{asset('adminassets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet" />    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest('admin')
                            <!--<li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
                            </li>-->
                        @else
                        @include('admin.index')                      
                          
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <!-- Jquery Core Js -->
    <script src="{{asset('adminassets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminassets/summernote/dist/summernote-lite.js')}}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{asset('adminassets/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Select Plugin Js -->
    <script src="{{asset('adminassets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('adminassets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('adminassets/plugins/node-waves/waves.js')}}"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('adminassets/plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <!-- Morris Plugin Js -->
    <script src="{{asset('adminassets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/morrisjs/morris.js')}}"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('adminassets/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->  
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('adminassets/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('adminassets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <script src="{{asset('adminassets/js/admin.js')}}"></script>
    <script src="{{asset('adminassets/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{asset('adminassets/js/demo.js')}}"></script>    
    <script src="{{asset('adminassets/js/pages/ui/modals.js')}}"></script>    
    <!-- Dropzone Plugin Js -->
    <script src="{{asset('adminassets/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('adminassets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <!--<script src="{{asset('adminassets/plugins/ckeditor/ckeditor.js')}}"></script>-->
    <script src="{{asset('adminassets/plugins/tinymce/tinymce.js')}}"></script>
    <script src="{{asset('adminassets/js/pages/forms/editors.js')}}"></script>
    <!-- Bootstrap Colorpicker Js -->
    <script src="{{asset('adminassets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
    <!-- Input Mask Plugin Js -->
    <script src="{{asset('adminassets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
    <script src="{{asset('adminassets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('adminassets/plugins/nouislider/nouislider.js')}}"></script>
    <!-- noUISlider Plugin Js -->
    <link href="{{asset('adminassets/summernote/dist/summernote-lite.css')}}" rel="stylesheet">
    <script>
      $('#ckeditor_full').summernote({                
        height: 200
      });
    </script>
    
@yield('pageScript')
</body>
</html>
