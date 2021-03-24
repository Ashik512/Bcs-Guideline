
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BcsGuide</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  
 
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-envelope"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.home')}}" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->

   <a href="{{route('admin.logout')}}" class="ml-auto btn btn-primary">Logout</a>
  </nav>
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('assets/images/AdminLTELogo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Bcs Guideline</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ashik</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href=" {{route('add-modeltest-form')}} " class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Add Model Test Name
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{route('model-list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Model Test List
                <span class="right badge badge-info">List</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('add-model-question-form')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add ModelTest Question
                <span class="right badge badge-success">Add</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('view-model-question')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                View Model Question
                <span class="right badge badge-danger">View</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('add-subject-question-form')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Subject Question
                <span class="right badge badge-success">Add</span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('current-affair-form')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Current Affairs
                <span class="right badge badge-dark">current</span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('current-affair-list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Current Affair List
                <span class="right badge badge-info">list</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('bcs-no-form')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Bcs No
                <span class="right badge badge-info"></span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('bcs-list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Bcs List
                <span class="right badge badge-info">List</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('add-previous-question-form',)}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add previous year question
                <span class="right badge badge-info"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('view-previous-question')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                View previous Question
                <span class="right badge badge-danger">View</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('add-book-form')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Book
                <span class="right badge badge-danger">View</span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('videos-create')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Videos
                <span class="right badge badge-info">videos</span>
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="{{route('add-subject-form')}}" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>
                Add subject
                <span class="right badge badge-success">subject</span>
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{route('add-chapter-form')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Chapter
                <span class="right badge badge-primary">chapter</span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{route('add-details-form')}}" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Add Details
                <span class="right badge badge-primary">chapter</span>
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
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">Bcs Guideline Admin</a>.</strong> All rights
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
