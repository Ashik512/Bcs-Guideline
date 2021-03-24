@extends('backend.adminmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-12">

{{--   @include('includes.message') --}}
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
                  <th>Bcs No</th>
                  <th>Question</th>
                  <th>Option-1</th>
                  <th>Option-2</th>
                  <th>Option-3</th>
                  <th>Option-4</th>
                  <th>Ans</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @php
                 $i=1;
                @endphp
                
                @foreach($questions as $question)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$question->bcsno}}</td>
                  <td>{{$question->question}}</td>
                  <td>{{$question->opt1}}</td>
                  <td>{{$question->opt2}}</td>
                  <td>{{$question->opt3}}</td>
                  <td>{{$question->opt4}}</td>
                  <td>{{$question->ans}}</td>
                 
                  <td>
                    <a href="{{route('edit-previous-question',$question->id)}}" class="btn btn-primary btn-sm mr-1">Edit</a>
                    <a href="{{route('delete-previous-question',$question->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-sm">Delete</a>
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