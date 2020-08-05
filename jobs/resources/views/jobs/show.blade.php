    @extends ('jobs.layout')
@section('content')
<div class ="row">
<div class="col-lg-12">
<div class="pull-left">
    <h3>Show job</h3>
    </div>
    <div class="pull-right">
    <a class="btn btn-success" href="{{route('jobs.index')}}">Back to Job list</a>
    </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
    <strong>Name:</strong>
    {{ $job->name }}
    </div>
    </div>
    <div class="col-lg-12">
    <div class="form-group">
    <strong>Description:</strong>
    {{ $job->description }}
    </div>
    </div>

    </div>
@endsection