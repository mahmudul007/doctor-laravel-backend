@extends('layouts.layouts')
@section('content')


<div class="card text-center">
    <div class="card-header">
     Welcome to my profile
    </div>
    <div class="card-body">
        <img width="150" height="150" src={{ $doctor->img }} alt="" srcset="">
      <h5 class="card-title">Dr.{{ $doctor->doc_name }} {{ $doctor->description }}</h5>
      <p class="card-text">Department:{{ $doctor->dept}}</p>
      <a href="/doctor/editdoc/{{ $doctor->id }}" class="btn btn-primary" >Update availability</a>
    </div>
    <div class="card-footer text-muted">
     <p>Available:{{ $doctor->available }}</p>
    </div>
  </div>
    
@endsection