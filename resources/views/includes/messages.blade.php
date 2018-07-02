@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
    <div class="alert alert-success" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
        {{session('error')}}
    </div>
@endif