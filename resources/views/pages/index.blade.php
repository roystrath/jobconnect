@extends('layouts.app')

<style>
    .bgimg-1 {
    background-image: url('{{URL::asset('images/mac.jpg')}}');
    min-height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>
{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')

<div class="bgimg-1 w3-display-container " id="home">
  <div class="w3-display-bottommiddle" style="white-space:nowrap; margin-bottom:50px">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity w3-text-blue">WELCOME TO <span class="w3-text-blue">JOBCONNECT</span> <span class="w3-text-blue">KENYA</span><br>
</div><br>
    <div class="w3-display-middle" style="white-space:nowrap;">
      <a href="/candidate_reg" class="w3-button w3-animate-opacity w3-blue w3-round-large w3-hover-border-red" style="text-decoration:none;">      <span class="w3-center w3-text-black">LOOKING FOR A JOB?</span></a>     <a href="/companies/create" class="w3-button w3-animate-opacity w3-blue w3-round-large w3-hover-border-red" style="text-decoration:none;"><span class="w3-center w3-animate W3-text-black">EMPLOYER REGISTRATION</span></a>
  </div>
</div>
@endsection 