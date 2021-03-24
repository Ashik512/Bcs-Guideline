@extends('frontend.studentmaster')

@section('content')

<div class="">
          
          <form id="SubmitAns" action="{{route('submit-ans',$code)}}" method="POST">
            @csrf

            <h3 class="text-uppercase text-center my-3 text-info">Test Your Knowledge </h3>
            <div class="row">
              <div class="col-md-4 col-lg-4">
                  <div class="text-center"><b>Name: {{Auth::user()->name}}</b></div>
              </div>
              <div class="col-md-4">
                  <div class="text-center"><b>Model Test Name: {{$name->model_name}}</b></div>
              </div>
              <div class="col-md-4">
                  <div class="text-center"><b>Full Marks: {{$total_ques}}</b></div>
              </div>
            </div><hr>
          
           
           <div class="row">
              <div class="col-md-10 ml-5">
                @php $i=1 @endphp
                @foreach($questions as $question)
                  <h5>{{$i++}}. {{ $question->question }}</h5>

                       <div class="">
                        <input type="radio" name="{{$question->id}}" value="1"> {{ $question->opt1 }}
                      </div>
                       <div class="">
                        <input type="radio" name="{{$question->id}}" value="2"> {{ $question->opt2 }}</div>
                       <div class="">
                        <input type="radio" name="{{$question->id}}" value="3"> {{ $question->opt3 }}
                      </div>
                       <div class="mb-2">
                        <input type="radio" name="{{$question->id}}" value="4"> {{ $question->opt4 }}</div>
                       {{--  <div class="mb-2">

                          <input type="text" class="id" value="{{$question->id}}">
                         <a id="review" class="btn btn-outline-info">Add to Review*</a>
                   </div> --}}
                    @endforeach
              </div>

            </div>
            
           <div class="ml-4 my-3">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>

          </form>
         

        </div>
{{-- 
      <script type="text/javascript">
      $(document).ready(function() {
        $("#review").click(function() {
          //event.preventDefault();
        
           var str = $("input.id").val();
           alert(str);

         /*$.ajax({
             url: '/student/submit-test/'+str,
             type: 'GET',
             success:function(response){
              //alert('Done');
              if(response.success)
                   alert(response.message);
            }
        });*/
           
        });
          
        
        });
     
</script> --}}


@endsection