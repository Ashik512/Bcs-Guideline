@extends('frontend.studentmaster')

@section('content')

   <div class="">

            <h3 class="text-uppercase text-center my-3 text-info card p-2"><strong> Questions and Answers</strong></h3>
         
           <hr>
           
            <div class="row">
            	<div class="col-md-10 ml-5">
            		@php $i=1 @endphp
            		@foreach($questions as $question)
	            		<h6>{{$i++}}. {{ $question->question }}</h6>

    	              <div class="">
                        <input type="radio" name="{{$question->id}}" value="1">
                        @if($question->ans == '1')
                        <strong class="text-primary">{{ $question->opt1 }}</strong>
                        @else
                         {{ $question->opt1 }}
                        @endif
                      </div>
	                <div class="">
                      <input type="radio" name="{{$question->id}}" value="2">
                       @if($question->ans == '2')
                        <strong class="text-primary">{{ $question->opt2 }}</strong>
                        @else
                         {{ $question->opt2 }}
                        @endif
                    </div>
    	            <div class="">
                       <input type="radio" name="{{$question->id}}" value="3">
                        @if($question->ans == '3')
                        <strong class="text-primary">{{ $question->opt3 }}</strong>
                        @else
                         {{ $question->opt3}}
                        @endif
                    </div>
	                <div class="mb-2">
                      <input type="radio" name="{{$question->id}}" value="4">
                       @if($question->ans == '4')
                        <strong class="text-primary">{{ $question->opt4 }}</strong>
                        @else
                         {{ $question->opt4 }}
                        @endif
                    </div>
                    @endforeach
            	</div>

            </div>
            {{-- <a href="{{route('give-exam',$code)}}" class="btn btn-primary ml-4">Start Again</a> --}}
           
        </div>

@endsection