<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - About us</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('forntend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('forntend/css/business-casual.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">The Perfect COFFEE</div>
    <div class="address-bar">1234 Nepal  | Lalitpur Patan dhoka, AB 9391 | 231.213.121</div>

    <!-- Navigation -->
@include('nav')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    @if (session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error')}}</div>
                @elseif (session()->has('errorno'))
                <div class="alert alert-danger">{{session()->get('errorno')}}</div>
                @elseif (session()->has('fail'))
                <div class="alert alert-danger">{{session()->get('fail')}}</div>
                @endif	
					<hr>
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
					<div id="add_err2"></div>
                    <hr>       
                    <form role="form" method="post" action="{{url('/')}}/login" >
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
					
					<div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
					</div>

					
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect COFFEE 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('forntend/js/bootstrap.min.js')}}"></script>

</body>

</html>
