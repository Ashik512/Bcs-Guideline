@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-10 ">

<div class="card">

            <div class="card-header bg-primary">
              <h3 class="card-title">Reference Book List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Book Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @php
                 $i=1;
                @endphp
                
                @foreach($books as $book)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$book->book_name}}</td>
                  <td> <a href="{{route('download-book',$book->file)}}">Download</a></td>
                  
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