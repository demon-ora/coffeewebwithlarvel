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
				
				<h2 class="text-center">Welcome  - <a href="{{url('/home/logout')}}">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                @foreach ( $blogs as $blog )
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="{{asset('storage/imgg/'.$blog->image)}}" alt="">
                    <h2>{{$blog->title}}
                        <br>
                        <small>{{$blog->dob}}</small>
                    </h2>
                    <p>{{$blog->des}}</p>
                    <hr>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- /.container -->
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{url('forntend/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('forntend/js/bootstrap.min.js')}}"></script>

</body>

</html>

