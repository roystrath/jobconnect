@extends('layouts.app')

{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')
<div class="w3-card-4 w3-round-large w3-border-black" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
            <div class="w3-center"><br>
                <img src="{{URL::asset('images/company.png')}}" alt="" style="width:30%" class="w3-circle w3-margin-top">
            </div>
    <div class="w3-container">
        {{-- <h2 class="w3-center">Edit Company Profile</h2> --}}
        {!! Form::open(['action'=> ['CompaniesController@update', $companies->id], 'method'=>'POST']) !!}
            <div class="w3-section">
                <h2 style="text-align: center" class="w3-text-blue w3-border-bottom w3-border-blue"><b>Edit Company Profile</b></h2>
                {{Form::label('name', 'Organization Name:', ['class'=>'w3-text-blue'])}}
                {{Form::text('name', $companies->name, ['class'=>'w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue', 'placeholder'=>''])}}
                {{Form::label('location', 'Organization Location:', ['class'=>'w3-text-blue'])}}
                {{Form::text('location', $companies->location, ['class'=>'w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue', 'placeholder'=>''])}}
                {{Form::label('interests', 'Field(s) of Interest:', ['class'=>'w3-text-blue'])}}
                {{Form::textarea('interests', $companies->interests, ['id'=>'article-ckeditor', 'class'=>'w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue', 'placeholder'=>''])}}
                {{Form::label('email', 'Contact Email:', ['class'=>'w3-text-blue'])}}
                {{Form::email('email', $companies->email, ['class'=>'w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue', 'placeholder'=>''])}}
                {{-- {{Form::label('password', 'New Password:', ['class'=>'w3-text-blue'])}} --}}
                {{-- {{Form::text('password', $companies->password, ['class'=>'w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue', 'placeholder'=>''])}} --}}
                {{-- {{Form::label('password', 'Password:', ['class'=>'w3-text-blue'])}}
                {{Form::password('password', ['class'=>'w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue', 'placeholder'=>''])}} --}}
                
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class'=>'w3-button w3-block w3-round-large w3-blue w3-section w3-padding'])}}
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection