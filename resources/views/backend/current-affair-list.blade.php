@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-10 ">

<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">Current Affair List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Title</th>
                  <th>Ans</th>
                  <th>Hints</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                @php
                 $i=1;
                @endphp
                
                @foreach($affairs as $affair)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$affair->title}}</td>
                  <td>{{$affair->ans}}</td>
                  <td>{{$affair->hints}}</td>
                 
                  <td>
                    <a href="{{route('edit-current-affair',$affair->id)}}" class="btn btn-primary btn-sm mr-1">Edit</a>
                    <a href="{{route('delete-current-affair',$affair->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                  

                </tr>
                @endforeach

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>

      </div>
       

@endsection