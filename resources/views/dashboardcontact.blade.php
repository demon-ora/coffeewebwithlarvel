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
            <li><a href="#1"><i class="fab fa-js"></i> JavaScript</a></li>
            <li><a href="#1"><span class="ss-badge">6</span> <i class="fab fa-html5"></i> HTML5</a></li>
            <li><a href="#1"><i class="fab fa-css3"></i> CSS3</a></li>
            <li><a href="#1"><i class="fab fa-react"></i> React</a></li>
            <li><a href="#1"><i class="fab fa-angular"></i> Angular</a></li>
            <li><a href="#1"><i class="fab fa-vuejs"></i> Vue.js</a></li>
            <li><a href="#1"><i class="fas fa-cogs"></i> Settings</a></li>
            <li><a href="#1"><i class="fas fa-address-book"></i> Contact</a></li>
            <li><a href="#1"><i class="fas fa-sign-in-alt"></i> Sign-in</a></li>
         </ul>
      </nav>
      <div class="container">

        <a href="{{url('/')}}/contact"  style="text-decoration: none;"  >Add user</a>

        <table class="table table-sm ">
            <thead>
              <tr class="col" >
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $contacts as $contact )
                <tr>
                  <td>{{$contact->id}}</td>
                  <td>{{$contact->name}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->message}}</td>
                  <td>
                    <a href="{{url('/dashboardcontact/delete')}}/{{$contact->id}}" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt fa-2x"></i></a></td>
                   <td> <a href="{{url('/dashboardcontact/edit')}}/{{$contact->id}}"><button type="button" class="btn btn-warning">edit</button></a>
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
