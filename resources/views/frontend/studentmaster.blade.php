
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BcsGuide</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content="{{csrf_token()}}" />

  <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

  

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('student-dashboard')}}" class="nav-link">Home</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a  class="nav-link justify-content-center"><h4><strong>User Panel</strong></h4> </a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->

   <a href="{{route('student.logout')}}" class="ml-auto btn btn-primary"><i class="fas fa-sign-out-alt"></i></a>
  </nav>
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">Bcs GuideLine</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{Auth::user()->email}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('show-profile')}}" class="nav-link {{ Request::is('student/show-profile') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('syllabus')}}" class="nav-link {{ Request::is('bcs/syllabus') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Bcs Syllabus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>

          <li class="nav-item">
            <a href="{{route('model-test-form')}}" class="nav-link {{ Request::is('student/model-test-form','student/give-model-test/*','student/submit-test/*','student/view-ans/*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Model Test
                <span class="right badge badge-info">Test</span>
              </p>
            </a>
          </li>

         {{--  <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Marks
                <span class="right badge badge-success">Marks</span>
              </p>
            </a>
          </li> --}}

           <li class="nav-item">
            <a href="{{route('mistakes')}}" class="nav-link {{ Request::is('student/mistakes') ? 'active' : '' }}">
             <i class="nav-icon fas fa-times-circle" style="color: red;"></i>
              <p>
                Mistake List
                <span class="right badge badge-danger">{{$count}}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('show-current-affairs')}}" class="nav-link {{ Request::is('show-current-affairs') ? 'active' : '' }}">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                Current Affairs
                <span class="right badge badge-success">affairs</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('previous-bcs-ques',)}}" class="nav-link {{ Request::is('previous-bcs-ques','view-question/*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Previous Bcs Question
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('book-list')}}" class="nav-link {{ Request::is('book/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book-medical"></i>
              <p>
                Reference Book
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('videos-list')}}" class="nav-link {{ Request::is('videos/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Videos
                <span class="right badge badge-success">videos</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('subject-test-form')}}" class="nav-link {{ Request::is('student/subject-test-form','student/give-subject-test/*','student/submit-subject-test/*','student/view-sub-ans/*') ? 'active' : '' }}">
             <i class="nav-icon fas fa-cube"></i>
              <p>
                Subject Test
                <span class="right badge badge-">test</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('show-subjects')}}" class="nav-link {{ Request::is('subjects/all-subjects','chapter/chapter-list/*','read/details/*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Study
                <span class="right badge badge-secondary">study</span>
              </p>
            </a>
          </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

     <div class="content">
              
        @yield('content')
               
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">Bcs Guideline</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('js/toastr.min.js') }}"></script>

@include('includes.message')
</body>
</html>
