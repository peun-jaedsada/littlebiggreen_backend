<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Backend Little-Big-Green</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ url('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
        @stack('css')

    </head>

    <body>
        <div id="wrapper">
            
            @include('backend.layouts.navbar')
            @include('backend.layouts.sidebar')
            <div class="content-page">
               
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div> 
                @include('backend.layouts.footer')
            </div>
        </div>
        {{-- <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div> --}}
        <div class="rightbar-overlay"></div>
        <script src="{{ url('assets/js/vendor.min.js') }}"></script>
        <script src="{{ url('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ url('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        {{-- <script src="{{ url('assets/libs/flot-charts/jquery.flot.js') }}"></script> --}}
        {{-- <script src="{{ url('assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
        <script src="{{ url('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ url('assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
        <script src="{{ url('assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script> --}}
        {{-- <script src="{{ url('assets/js/pages/dashboard-1.init.js') }}"></script> --}}
        <script src="{{ url('assets/js/app.min.js') }}"></script>
        <script src="{{ url('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

        <script src="{{ url('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{ url('assets/libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{ url('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{ url('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{ url('assets/js/pages/datatables.init.js')}}"></script>
        {{-- <script src="{{url('assets/js/vendor.min.js')}}"></script> --}}

        <!-- Plugins js-->
        <script src="{{url('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{url('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{url('assets/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
        {{-- <script src="{{url('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script> --}}
        
        <!-- Init js-->
        <script src="{{url('assets/js/pages/form-pickers.init.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets/js/app.min.js')}}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="{{url('assets/libs/dropify/dropify.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            // $('.datetime-datepicker').datepicker();
            $('.datetime-datepicker').datepicker({
                format: 'yyyy-mm-d',
            });
        </script>
        <script>
            $('.dropify').dropify();
        </script>
        <script>
            $('#span-spinner').hide();
            $('#btn-submit').click(()=>{
                $('#span-submit').hide();
                $('#span-spinner').show();
            })
        </script>
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };
            CKEDITOR.replace('my-editor', options);
        </script>
        @stack('js')
    </body>
</html>