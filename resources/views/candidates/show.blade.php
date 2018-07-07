@extends('layouts.app')

{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')
    <div class="w3-container">
    {{-- <h2>{{$companies->name}}</h2> --}}
        {{-- <div class="w3-center"> --}}
            
        {{-- </div> --}}
            <div class="w3-card-4 w3-round-large w3-border-black w3-center" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
            <div class="w3-center"><br>
                <img src="{{URL::asset('images/company.png')}}" alt="" style="width:30%" class="w3-circle w3-margin-top">
            </div>
                <div class="w3-section">
                    <h4  class="w3-text-blue w3-border-bottom w3-border-blue"><b>{{$companies->name}} - Our Profile</b></h4><br>
                    <label class="w3-text-blue"><b>Name : {{$companies->name}}</b></label><br>
                    
                    <label class="w3-text-blue"><b>Location : {{$companies->location}}</b></label><br>
                    
                    <label class="w3-text-blue"><b>Fields of Interest : {!!$companies->interests!!}</b></label><br>
                    
                    <label class="w3-text-blue"><b>Contact Email : {{$companies->email}}</b></label><br>
                <small class="w3-text-blue">Updated at: {{$companies->updated_at}}</small><br><br>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $companies->user_id)
                    <div class="w3-center">
                        <a href="/companies/{{$companies->id}}/edit" class="w3-bar-item w3-button w3-blue w3-center" style="max-width:600px; margin-left:auto; margin-right:auto;text-decoration:none;margin-bottom:5px"><b>Edit       <i class="fa fa-edit"></i></b></a><br>
                        <?php //Auth::user()->id,if equal to companies->user_id ?>
                        {!! Form::open(['action'=>['CompaniesController@destroy', $companies->id], 'method'=>'POST', 'class'=>'w3-center']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger'])!!}
                        {!! Form::close() !!}
                     </div>
                     @endif
                @endif
                <a href="/companies" class="w3-bar-item w3-button w3-blue w3-center" style="text-decoration:none;"><b>Back       <i class="fa fa-backward"></i></b></a>
                    <br>
                 </div>
            </div>
    </div>

@endsection


