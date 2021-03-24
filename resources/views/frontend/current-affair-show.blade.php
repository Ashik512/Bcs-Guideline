@extends('frontend.studentmaster')

@section('content')
  <div>

   <h4 class="text-uppercase text-center my-3 text-info card p-2"> Current Affairs</strong></h4>

  <div class="row ml-2 my-1 mr-2">
    <div class="col-md-12 p-1">

      @foreach($affair_list as $list)
      <div class="ml-2 border p-2">

         <h5>
          <span><img class="mr-1" style="width:15px" src="{{asset('assets/images/hand.png')}}">
          </span>
          {{$list->title}}
         </h5>

         <p>Ans: {{$list->ans}}</p>
        <p>hints: {{$list->hints}}</p>
      </div>
      @endforeach

      {{ $affair_list->links() }}
    </div>
  </div>
</div>

@endsection