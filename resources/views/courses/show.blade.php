@extends('courses.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Cources Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $course->name }}</h5>
        <p class="card-text">description : {{ $course->desc }}</p>
        <p class="card-text">image : {{ $course->image }}</p>
        <p class="card-text">level : {{ $course->level }}</p>
        <p class="card-text">url : {{ $course->url }}</p>
  </div>
    </hr>
  </div>
</div>
