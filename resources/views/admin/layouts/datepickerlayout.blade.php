<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="Zq8ISeWNApl98I76fbhYHrS2IQI4mIlGYzSAA03u">
    <title>Mophy | Form Pickers</title>
	
	<meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
	
	
	
	 
						<link href="{{asset('admin/public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/public/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/public/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/public/vendor/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/public/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/public/vendor/pickadate/themes/default.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/public/vendor/pickadate/themes/default.date.css')}}" rel="stylesheet" type="text/css"/>
						<link href="{{asset('admin/https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet" type="text/css"/>
				

	
	 
					<link href="{{asset('admin/public/css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
@include("admin.includes.preloader")
    <!--*******************
        Preloader end
    ********************--> 

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
@include('admin.includes.navheader')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
@include('admin.includes.chatbox')
		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
@include('admin.includes.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <!--**********************************
    Sidebar start
***********************************-->
@include('admin.includes.nav')
<!--**********************************
    Sidebar end
***********************************-->        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
                        <!-- row -->
    @yield('content')

        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

		<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	   






                <script src="{{asset('admin/public/vendor/global/global.min.js')}}" type="text/javascript"></script>
          <script src="{{asset('admin/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/moment/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/jquery-asColor/jquery-asColor.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/jquery-asGradient/jquery-asGradient.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/pickadate/picker.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/pickadate/picker.time.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/vendor/pickadate/picker.date.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/plugins-init/bs-daterange-picker-init.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/plugins-init/clock-picker-init.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/plugins-init/jquery-asColorPicker.init.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/plugins-init/material-date-picker-init.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/plugins-init/pickadate-init.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/custom.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/public/js/deznav-init.js')}}" type="text/javascript"></script>
	</body>

</html>
