<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="Zq8ISeWNApl98I76fbhYHrS2IQI4mIlGYzSAA03u">
    <title>Mophy | Dashboard</title>
	
	<meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
	
	
	
	 
						<link href="{{ asset('admin/public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css' )}} " rel="stylesheet" type="text/css"/>
						<link href="{{ asset('admin/public/vendor/jqvmap/css/jqvmap.min.css' )}} " rel="stylesheet" type="text/css"/>
						<link href="{{ asset('admin/public/vendor/chartist/css/chartist.min.css' )}} " rel="stylesheet" type="text/css"/>
						<link href="{{ asset('admin/public/vendor/owl-carousel/owl.carousel.css' )}} " rel="stylesheet" type="text/css"/>
				

	
	 
					<link href="{{asset('admin/public/css/style.css')}}" rel="stylesheet" type="text/css"/>


				 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
				    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



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
	            <script src="{{ asset( 'admin/public/vendor/global/global.min.js' )}} " type="text/javascript"></script>
				<script src="{{ asset( 'admin/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/vendor/chart.js/Chart.bundle.min.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/vendor/owl-carousel/owl.carousel.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/vendor/peity/jquery.peity.min.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/vendor/apexchart/apexchart.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/js/dashboard/dashboard-1.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/js/custom.js' )}} " type="text/javascript"></script>
				<script src="{{asset( 'admin/public/js/deznav-init.js' )}} " type="text/javascript"></script>






                
	</body>

</html>
