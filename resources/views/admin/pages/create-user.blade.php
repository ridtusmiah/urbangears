<!DOCTYPE html>
<html lang="en" class="h-100">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                    <form method="POST" action="{{ URL::to('storeUser') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Username</strong></label>
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" value="Password">
                        </div>
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Gender</strong></label>
                             <div class="row">
                 
                  <div class="col-sm-9">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="male" checked="">
                      <label class="form-check-label">
                       Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="female">
                      <label class="form-check-label">
                        Female
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled="">
                      <label class="form-check-label">
                        Third disabled radio
                      </label>
                    </div>
                  </div>
                </div>
                          </div>
                        <div
                        <div class="form-group">
                            <label class="mb-1 text-white"><strong>Role</strong></label>
                            <select name="role" class="form-control default-select" id="sel1">
                              <option value="admin">Admin</option>
                              <option value="moderator">Moderator</option>
                              <option value="Staff">Staff</option>
                              <option value="Customer">Customer</option>
                            </select>
                          </div>
                        <div
                         class="text-center mt-4">
                            <button type="submit" value="submit" name="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p class="text-white">Already have an account? <a class="text-white" href="{{('/')}}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
<script src="{{ asset('public/vendor/global/global.min.js" type="text/javascript')}}"></script>
					<script src="{{ asset('public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
				<script src="{{ asset('public/js/custom.js" type="text/javascript')}}"></script>
				<script src="{{ asset('public/js/deznav-init.js" type="text/javascript')}}"></script>
	</body>



</html>
