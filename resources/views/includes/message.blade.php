@if(Session::has('success'))

    <script>
        toastr.success("{!! Session::get('success')  !!}");
    </script>

@endif

@if(Session('error'))

    <script>
        toastr.error("{!! Session::get('error')  !!}");
    </script>
     {{-- <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">×</a>
        {{Session('warning')}}
    </div> --}}
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <a href="#" class="close" data-dismiss="alert">×</a>
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif