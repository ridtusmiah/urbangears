<!DOCTYPE html>
<html lang="en" class="h-100">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mophy | Page Login</title>
    <meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/public/images/favicon.png ')}}">
    <link href="{{ asset('admin/public/css/style.css ')}}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
			<div class="col-md-6">
  <div class="authincation-content">
      <div class="row no-gutters">
          <div class="col-xl-12">
              <div class="auth-form">
                  <div class="text-center mb-3">
                    <a href="index.html"><img src="public/images/logo-full.png" alt=""></a>
                  </div>
                  <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                  <form method="POST" action="{{URL::to('userLogin')}}">
                    {{ csrf_field() }}
                    @if(Session::has('msg'))
                    <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Error!</strong> Invalid Email or Password
                  </div>
                  @endif
                      <div class="form-group">
                          <label class="mb-1 text-white"><strong>User Name</strong></label>
                          <input type="text" name="username" class="form-control" value="" placeholder="Nucleya">
                      </div>
                      <div class="form-group">
                          <label class="mb-1 text-white"><strong>Password</strong></label>
                          <input type="password" name="password" class="form-control" placeholder="*****" value="">
                      </div>
                      <div class="form-row d-flex justify-content-between mt-4 mb-2">
                          <div class="form-group">
                              <div class="custom-control custom-checkbox ml-1 text-white">
                                <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <a class="text-white" href="page-forgot-password.html">Forgot Password?</a>
                          </div>
                      </div>
                      <div class="text-center">
                          <button type="submit" value="submit" name="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                      </div>
                  </form>
                  <div class="new-account mt-3">
                      <p class="text-white">Don't havasdasde an account? <a class="text-white" href="{{('registration')}}" >Sign up</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
            </div>
        </div>
    </div>
<script src="{{ asset('admin/public/vendor/global/global.min.js ')}}" type="text/javascript"></script>
					<script src="{{ asset('admin/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js ')}}" type="text/javascript"></script>
				<script src="{{ asset('admin/public/js/custom.js ')}}" type="text/javascript"></script>
				<script src="{{ asset('admin/public/js/deznav-init.js ')}} " type="text/javascript"></script>
	</body>


</html>
