<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sticky Expanding Sidebar Navigation Plugin Example</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{url('forntend/css/ss-menu.css')}}" />
<link href="{{url('forntend/css/bootstrap.min.css')}}" rel="stylesheet">
<style>
body {background-image: repeating-linear-gradient(249deg, transparent 0px, transparent 3px,rgb(255,255,255) 3px, rgb(255,255,255) 32px),repeating-linear-gradient(307deg, transparent 0px, transparent 3px,rgb(255,255,255) 3px, rgb(255,255,255) 32px),linear-gradient(90deg, hsl(191,85%,78%),hsl(242.429,85%,78%),hsl(293.857,85%,78%),hsl(345.286,85%,78%),hsl(36.714,85%,78%),hsl(88.143,85%,78%),hsl(139.571,85%,78%));height: 100vh; font-family: 'Inter'; }
.container { margin: 50px auto; max-width: 1000px; }
.col{background-color:black;color:white;}

</style>
</head>

<body>
<nav class="ss-menu ">
    <ul>
      <li><a href="{{url('/dashboard')}}"><i class="fa fa-user"></i> Dashboarduser</a></li>
      <li><a href="{{url('/dashboardcontact')}}"><i class="fa fa-phone"></i> Contact</a></li>
      <li><a href="{{url('/dashboardblog')}}"><i class="fa fa-blog"></i>BLOG</a></li>
      <li><a href="{{url('/dashboard/logout')}}"><i class="fa fa-coffee"></i> logOUT</a></li>
     </ul>
      </nav>
      <div class="container">

        <a href="{{url('/')}}/reg"  style="text-decoration: none;"  >Add user</a>

        <form action="{{url('/')}}/dashboardblog" method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control" placeholder="Title"style="width:50%;" name="title" >
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Title" style="width:50%;" name="dob" min="<?php echo date("Y-m-d"); ?>" >
              </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
              </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="des"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form><br><br>
          <table class="table table-sm ">
            <thead>
              <tr class="col" >
                <th>ID</th>
                <th>Title</th>
                <th>DOb</th>
                <th>Image</th>
                <th>Des</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $blogs as $blog )
                <tr>
                  <td>{{$blog->id}}</td>
                  <td>{{$blog->title}}</td>
                  <td>{{$blog->dob}}</td>
                  <td><img src="{{asset('storage/imgg/'.$blog->image)}}" height="50" width="50" style="object-fit: cover;"></td>
                  <td>{{$blog->des}}</td>
                  <td>
                    <a href="{{url('/dashboardblog/delete')}}/{{$blog->id}}" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt fa-2x"></i></a></td>
                   <td> <a href="{{url('/dashboardblog/edit')}}/{{$blog->id}}"><button type="button" class="btn btn-warning">edit</button></a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
      </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{url('forntend/js/jquery.ss.menu.js')}}"></script>
<script>
         $(document).ready(function(){

           $(".ss-menu").ssMenu();

         });

      </script>
</body>
</html>
