@extends('jobs.layout')
@section('content') 
<div class ="row">
<div class="col-lg-12">
<div class="pull-left">
    <h3>Add new Job </h3>
    </div>
    <div class="pull-right">
    <a class="btn btn-success" href="{{route('jobs.index')}}">Back to Jobs </a>
    </div>
    </div>
    </div>
    <form action="{{route('jobs.store')}}" method="POST">
    @csrf
    <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group">
    <strong>Description:</strong>
    <textarea name="description" placeholder="description" class="form-control"> </textarea>
    </div>
    </div>
    <div class="col-lg-12">
    <button type="submit" class="btn btn-primary">submit</button>
    </div>
    </div>


    @endsection