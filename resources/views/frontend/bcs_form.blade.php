@extends('frontend.studentmaster')

@section('content')

  <div class="row justify-content-around">
	<div class="col-md-10 ">

 {{--  @include('includes.message') --}}
<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">Previous Question List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Bcs No.</th>
                  <th>Bcs Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @php
                 $i=1;
                @endphp
                
                @foreach($bcs as $bcs)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$bcs->bcs_no}}</td>
                  <td>{{$bcs->bcs_name}}</td>
                 
                  <td>
                    <a href="{{route('view-question',$bcs->bcs_no)}}" class="btn btn-primary btn-sm mr-1">view Question</a>
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