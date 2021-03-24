@extends('frontend.studentmaster')

@section('content')

   <div class="">

            <h3 class="text-uppercase text-center my-3 text-info card p-2"><strong>{{$count}} Mistakes</strong></h3>
         
           <hr>
           
            <div class="row">
            	<div class="col-md-10 ml-5">
            		
                @php $i=1 @endphp
            		@foreach($mistakes as $mistake)
	            		<h6>
                    <span>
                    <a href="{{route('delete-mistake',$mistake->id)}}" onclick="return confirm('Are you sure to delete?');" class="btn btn-sm">
                      <img style="width:15px" src="{{asset('assets/images/delete.jpg')}} " alt="Delete">
                    </a>
                  </span>
                   {{$i++}}. {{ $mistake->question }}
                  
                 </h6>

    	              <div class="ml-5">
                        <input type="radio" name="{{$mistake->id}}" value="1">
                        @if($mistake->ans == '1')
                        <strong class="text-primary">{{$mistake->opt1}}</strong>
                        @else
                         {{ $mistake->opt1 }}
                        @endif
                      </div>
	                <div class="ml-5">
                      <input type="radio" name="{{$mistake->id}}" value="2">
                       @if($mistake->ans == '2')
                        <strong class="text-primary">{{ $mistake->opt2 }}</strong>
                        @else
                         {{ $mistake->opt2 }}
                        @endif
                    </div>
    	            <div class="ml-5">
                       <input type="radio" name="{{$mistake->id}}" value="3">
                        @if($mistake->ans == '3')
                        <strong class="text-primary">{{ $mistake->opt3 }}</strong>
                        @else
                         {{ $mistake->opt3}}
                        @endif
                    </div>
	                <div class="mb-2 ml-5">
                      <input type="radio" name="{{$mistake->id}}" value="4">
                       @if($mistake->ans == '4')
                        <strong class="text-primary">{{ $mistake->opt4 }}</strong>
                        @else
                         {{ $mistake->opt4 }}
                        @endif
                    </div>
                    @endforeach

            	</div>

            </div>
            {{-- <a href="{{route('give-exam',$code)}}" class="btn btn-primary ml-4">Start Again</a> --}}
           
        </div>

@endsection