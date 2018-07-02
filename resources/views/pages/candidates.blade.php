@extends('layouts.app')

{{-- SHOW THE BASIC HOME WELCOME JUMBOTRON WITH LOGIN AND REGISTER BUTTONS --}}
@section('content')

<div class="w3-container">
  <h2>Potential Employees List</h2>
  <h2 class="w3-center">Potential Employees' List</h2>
  <ul class="w3-ul w3-card-4">
    <li class="w3-bar">
      <img src="img_avatar2.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Mike</span><br>
        <span>Web Designer</span>
      </div>
    </li>

    <li class="w3-bar">
      <img src="img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Jill</span><br>
        <span>Support</span>
      </div>
    </li>

    <li class="w3-bar">
      <img src="img_avatar6.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Jane</span><br>
        <span>Accountant</span>
      </div>
    </li>
  </ul>
</div>

@endsection