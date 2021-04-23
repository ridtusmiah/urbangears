<!DOCTYPE html>
<html lang="en" class="h-100">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
@include('admin.includes.singlehead')
    
</head>

<body class="h-100">

yield('content')

<script src="{{ asset('admin/public/vendor/global/global.min.js ')}}" type="text/javascript"></script>
					<script src="{{ asset('admin/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js ')}}" type="text/javascript"></script>
				<script src="{{ asset('admin/public/js/custom.js ')}}" type="text/javascript"></script>
				<script src="{{ asset('admin/public/js/deznav-init.js ')}} " type="text/javascript"></script>
	</body>


</html>