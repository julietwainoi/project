@extends ('jobs.layout')
@section('content')
<div class ="row">
<div class="col-lg-12">
<div class="pull-left">
    <h3>Edit job</h3>
    </div>
    <div class="pull-right">
    <a class="btn btn-success" href="{{route('jobs.index')}}">Back to Job list</a>
    </div>
    </div>
    </div>

    <form action="{{route('jobs.update',$job->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name"  value="{{$job->name}}" class="form-control" placeholder="Name">
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group">
    <strong>Description:</strong>
    <textarea name="description" placeholder="description" class="form-control">{{ $job->description }}</textarea>
    </div>
    </div>
    <div class="col-lg-12">
    <button type="submit" class="btn btn-primary">submit</button>
    </div>
    </div>

    
    </div>
    @endsection
    