@extends('frontend.studentmaster')

@section('content')

<div class="">
          
         <h3 class="text-uppercase text-center my-3 text-info card p-2"><strong>{{$id}}th Bcs Questions</strong></h3>
           <div class="row">
              <div class="col-md-10 ml-5">
                @php $i=1 @endphp
                @foreach($questions as $question)
                  <h5>{{$i++}}. {{ $question->question }}</h5>

                       <div class="">
                        <input type="radio" name="ans" value="A">(A)- {{ $question->opt1 }}
                      </div>
                       <div class="">
                        <input type="radio" name="ans" value="B">(B)- {{ $question->opt2 }}</div>
                       <div class="">
                        <input type="radio" name="ans" value="C">(C)- {{ $question->opt3 }}
                      </div>
                       <div class="">
                        <input type="radio" name="ans" value="D">(D)- {{ $question->opt4 }}</div>
                        <div class="mb-2">
                          <p>Ans:{{$question->ans}}</p>
                        </div>
                       {{--  <div class="mb-2">

                          <input type="text" class="id" value="{{$question->id}}">
                         <a id="review" class="btn btn-outline-info">Add to Review*</a>
                   </div> --}}
                    @endforeach
              </div>

            </div>
            
           {{-- <div class="ml-4 my-3">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div> --}}
         

        </div>

@endsection