@extends('layouts.app')

{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')
    <div class="w3-card-4 w3-animate-zoom w3-round-large w3-border-black" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
            <div class="w3-center"><br>
                <img src="{{URL::asset('images/company.png')}}" alt="Log In To Vote" style="width:30%" class="w3-circle w3-margin-top">
            </div>

            <form method="post" class="w3-container" action="">
                <div class="w3-section">
                    <h4 style="text-align: center" class="w3-text-blue w3-border-bottom w3-border-blue"><b>Register Your Organization Here</b></h4>
                    <label class="w3-text-blue"><b>Organization Name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue" type="text" placeholder="" name="orgname" required>
                    <label class="w3-text-blue"><b>Organization Location</b></label>
                    <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" placeholder="" name="location" required>
                    <label class="w3-text-blue"><b>Field(s) of Interest</b></label>
                    <input class="w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue" type="text" placeholder="" name="interests" required>
                    <label class="w3-text-blue"><b>Contact Email</b></label>
                    <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" placeholder="" name="email" required>
                    <label class="w3-text-blue"><b>Choose Password</b></label>
                    <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" placeholder="" name="password" required>
                    <button class="w3-button w3-block w3-round-large w3-blue w3-section w3-padding" type="submit" name="Submit" value="Submit"><b>Register      <i class="fa fa-sign-in"  style="font-size:18px;"></i></b></button>
                    <a href="/index" class="w3-bar-item w3-button w3-round-large w3-blue" style="width:100%"><b>Back Home       <i class="fa fa-home" style="font-size:18px;"></i> </b></a>
                    <!--                <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
                </div>
            </form>
        </div>
@endsection