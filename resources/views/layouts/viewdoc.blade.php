<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
<link rel="stylesheet" href="{{URL::to('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="{{URL::to('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="" class="nav-link">Home</a>
            </li>
           
          </ul>
      
      
      
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
          
            <li class="nav-item">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
          
                    </ul>
          
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
          
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
          
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="" class="brand-link">
            <span class="brand-text font-weight-light">ZRP Reference Information </br> System</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panelv mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                
                 <img src="{{URL::to('dist/img/flag.png')}}" class="img-circlev elevation-2" alt="User Image">
              </div>
              
            </div>
      
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
      
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <style>
li {
  position: relative; /* necessary for positioning the :after */
}

.done {
  list-style: none; /* remove normal bullet for done items */
}

.done:after {
  content: "";
  background-color: transparent;
  
  /* position the checkbox */
  position: absolute;
  left: -16px;
  top: 0px;

  /* setting the checkbox */
    /* short arm */
  width: 5px;
  border-bottom: 3px solid #4D7C2A;
    /* long arm */
  height: 11px;
  border-right: 3px solid #4D7C2A;
  
  /* rotate the mirrored L to make it a checkbox */
  transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
                            </style>
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                      src="{{URL::to('dist/img/logo.jpeg')}}"
                             alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center">ZRP</h3>
      
                      <p class="text-muted text-center">In Second Republic</p>
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Policing for Peace</b> <a class="float-right"><lable class="done"></lable></a>
                        </li>
                        <li class="list-group-item">
                          <b>Economic Recovery</b> <a class="float-right"><lable class="done"></lable></a>
                        </li>
                        <li class="list-group-item">
                          <b>Prosperity</b> <a class="float-right"><lable class="done"></lable></a>
                        </li>
                      </ul>
      
                      <a href="" class="btn btn-primary btn-block"><b></b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
      
                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        @guest
                        @else
                        @if($email=="jerritachibhabha@gmail.com")<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Upload Content</a></li>@endif
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Search Content</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#viewcontent" data-toggle="tab">View Content</a></li>
                        
                        @endguest
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Post -->
                          <div class="post">
                     
                    
                            <main class="py-4">
                                @yield('content')
                            </main>
                        
                        
                        
                        
                        </div>
                          <!-- /.post -->
      
                          <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->
                       
      
                        <div class="tab-pane" id="settings">
                          @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                         @endif
                          <form class="form-horizontal" method="POST" action="{{route('upload_content')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" required id="inputName" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="reference" class="col-sm-2 col-form-label">Reference</label>
                                <div class="col-sm-10">
                                  <input type="text" name="reference" class="form-control" required id="reference" placeholder="Reference Number">
                                </div>
                              </div>
                            <div class="form-group row">
                              <label for="description" class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description" required placeholder="Description"></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="file_name" class="col-sm-2 col-form-label">File Content</label>
                              <div class="col-sm-10">
                                <input type="file" id="file_name" name="file_name" class="form-control" required id="inputSkills" placeholder="File">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Upload</button>
                              </div>
                            </div>
                          </form>
                        </div>

                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                      
                            <style>
                                * {
                                  box-sizing: border-box;
                                }
                                
                                #myInput {
                                  background-image: url('/css/searchicon.png');
                                  background-position: 10px 10px;
                                  background-repeat: no-repeat;
                                  width: 100%;
                                  font-size: 16px;
                                  padding: 12px 20px 12px 40px;
                                  border: 1px solid #ddd;
                                  margin-bottom: 12px;
                                }
                                
                                #myTable {
                                  border-collapse: collapse;
                                  width: 100%;
                                  border: 1px solid #ddd;
                                  font-size: 18px;
                                }
                                
                                #myTable th, #myTable td {
                                  text-align: left;
                                  padding: 12px;
                                }
                                
                                #myTable tr {
                                  border-bottom: 1px solid #ddd;
                                }
                                
                                #myTable tr.header, #myTable tr:hover {
                                  background-color: #f1f1f1;
                                }
                                </style>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Unified search.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:25%;">Name</th>
    <th style="width:25%;">Reference</th>
    <th style="width:30%;">Description</th>
    <th style="width:20%;">Action</th>
  </tr>
  @isset($content)
  @foreach($content as $key => $cont)
  <tr>
  <td>{{$cont->name}}</td>
  <td>{{$cont->reference}}</td>
  <td>{{$cont->description}}</td>
  <td><a class="nav-link" href="{{route('viewdoc',$cont->id)}}"><input type="button" class="btn btn-success" value="view"></a></td>
  </tr>
  @endforeach
  {!! $content->render() !!}
  @endisset
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
                        </div>
<div class="tab-pane" id="viewcontent">
                        <table class="table" width="100%">
                            <tr>
                                <td width="70%">
                      <embed src="{{URL::to('files/uploads/'.$docname)}}" type="application/pdf"   height="700px" width="100%">  
                                </td>
                                <td width="30%">
                                <form class="form-horizontal" method="POST" action="{{route('take_notes')}}">
                                      @csrf
                                      <div class="form-group row">
                                        <div class="col-sm-10">
                                        <input type="hidden" name="doc_id" value="{{$id}}">
                                        <input type="hidden" name="email" value="{{$email}}">
                                          <textarea class="form-control" id="notes" name="notes" required placeholder="Notes"></textarea>
                                      </div>
                                      </div>
                                    
                                      <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                          <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                      </div>
                                    </form>
                                  </br>
                                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Unified search.." title="Type in a name">
                                     
                                  <table id="myTable">
                                      
                                      <tr class="header">
                                        <th style="width:25%;">Notes</th>
                                      </tr>
                                      @foreach($notes as $key => $nott)
                                      <tr>
                                        <td>{{$nott->notes}} </td>
                                    </tr>
                                      @endforeach
                                    </table>
                                </td>
                            </tr>
                        </table>
                      </div>





                   


                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0
          </div>
          <strong>Copyright &copy; 2020 <a href="">ZRP</a>.</strong> All rights
          reserved.
        </footer>
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->



























       
    </div>
    <!-- jQuery -->
<script src="{{URL::to('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('dist/js/demo.js')}}"></script>
</body>
</html>
