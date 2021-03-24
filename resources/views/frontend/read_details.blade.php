@extends('frontend.studentmaster')

@section('content')
  <div>

   <h4 class="text-uppercase text-center my-3 text-info card p-2">Chapter Details</strong></h4>

  <div class="row ml-2 my-1 mr-2">
    <div class="col-md-12 p-1">
         <h4 class="text-success">{{$chapter_name}}</h4>
         <hr>
      @foreach($details as $detail)
      <div class="ml-2 border p-2">

         <h5>
          <span><img class="mr-1" style="width:15px" src="{{asset('assets/images/hand.png')}}">
          </span>
          {{$detail->chapter_title}}
         </h5>

         <p>{!!$detail->chapter_details!!}</p>
        
      </div>
      @endforeach

      {{ $details->links() }}
    </div>
  </div>
</div>

@endsection