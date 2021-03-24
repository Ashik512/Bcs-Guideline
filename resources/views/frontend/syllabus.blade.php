@extends('frontend.studentmaster')

@section('content')

<div class="row justify-content-around">
	<div class="col-md-10 ">

<div class="card my-2">

            <div class="card-header bg-primary">
              <h3 class="card-title align-content-center">Bcs Syllybus</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
                
                
                <tr>
                  <td>Syllabus</td>
                  <td> <a href="{{asset('assets/file/syllabus.pdf')}}">Download</a></td>
                  
                </tr>
                

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>

      </div>
       

@endsection