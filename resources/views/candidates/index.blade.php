@extends('layouts.app')

{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')
    <div class="w3-container">
       <br>
        <h2 class="w3-center w3-padding"><br>Potential Employers' List</h2>
        
        @if(count($companies)> 0)
            <ul class="w3-ul w3-card-4" style="width:50%; margin: auto;
            width: 70%; border: 3px solid-blue; padding: 10px;">
                @foreach($companies as $company)
                    <li class="w3-bar">
                    <a href="/companies/{{$company->id}}" style="text-decoration:none;">
                    <img src="{{URL::asset('images/company.png')}}" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
                    <div class="w3-bar-item">
                    <span class="w3-large w3-text-blue">{{$company->name}}</span><br>
                    <span>{{$company->location}}</span>
                    </div>
                </a>
                    </li>
                @endforeach
                
            </ul>
            <div class="w3-center" style="width:50%; margin: auto;
            width: 12%; border: 3px solid-blue; padding: 10px;">
                <div class="pagination"> {!!$companies->links()!!}</div>
             {{-- <div class="w3-bar"> {!!$companies->links()!!}</div> --}}
            </div>
    </div>
        @else
            <ul class="w3-ul w3-card-4 w3-center" style="width:50%; margin: auto;
            width: 70%; border: 3px solid-blue; padding: 10px;">
                
            <h4 class="w3-text-blue">Sorry, No companies to display</h4>
            </ul>
        @endif
</div>
@endsection