<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

@include('admin.includes.default-head')

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
