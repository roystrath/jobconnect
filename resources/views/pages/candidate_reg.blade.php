@extends('layouts.app')

{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')
    <div class="w3-card-4 w3-animate-zoom w3-round-large w3-border-black" style="max-width:800px; margin-left:auto; margin-right:auto; margin-top:50px;">
            <div class="w3-center"><br>
                <img src="{{URL::asset('images/reg.png')}}" alt="User Registration" style="width:20%" class="w3-circle w3-margin-top">
            </div>

            <form method="post" class="w3-container" action="">
                <h4 style="text-align: center" class=" w3-text-blue w3-border-bottom w3-border-blue"><b>Register Your Credentials Here</b></h4>
                <div class="w3-row-padding">
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Official Name </b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" placeholder="First Name Surname Last Name" name="name" required>
                    </div>
                    {{-- <div class="w3-half">
                        <label class="w3-text-blue"><b>Last Name</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" placeholder="" name="lname" required>
                    </div> --}}

                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Official Email</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="email" placeholder="" name="email" required>
                    </div>

                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Location (County)</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" name="location" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Phone Number</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="number" name="phone" placeholder="e.g. 0711223344" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Age</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="number" name="age" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Gender: </b></label>
                        <input class="w3-radio" type="radio" name="gender" value="male" required>
                        <label>Male</label>

                        <input class="w3-radio" type="radio" name="gender" value="female" required>
                        <label class="w3-text-black">Female</label>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>University Attended</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" name="university" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Course Taken</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" name="course" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Graduation Year</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="number" name="graduation" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Previous Company (N/A if none)</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" name="previous_company" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Fields of Interest</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="text" name="interests" required>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Your Availability: </b></label>
                        <input class="w3-radio" type="radio" name="availability" value="full-time" required>
                        <label>Full-time</label>
                        <input class="w3-radio" type="radio" name="availability" value="part-time" required>
                        <label class="w3-text-black">Part-time</label>
                    </div>
                    <div class="w3-half">
                        <label class="w3-text-blue"><b>Attach Resume</b></label>
                        <input class="w3-input w3-border w3-round-large w3-border-blue" type="file" name="resume" required>
                    </div>


                    <button class="w3-button w3-block w3-blue w3-round-large w3-section w3-padding" type="submit" name="Submit" value="Submit"><b>Register      <i class="fa fa-sign-in"  style="font-size:18px;"></i></b></button>
                    <a href="/index" class="w3-bar-item w3-button w3-blue w3-round-large" style="width:100%"><b>Back Home       <i class="fa fa-home" style="font-size:18px;"></i> </b></a>
                    <!--                <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
                </div>
            </form>
        </div>

@endsection