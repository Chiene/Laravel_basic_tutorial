@extends('layout')
@section('contents')

<h3>Leave a message</h3>
<div class="row jumbotron">

{!! Form::open(['url' => '/message', 'files' => true, 'method' => 'post', 'class' => 'form-horizontal ' ]) !!}
  <div class="form-group">
    <label>Username: </label>  
    <input class="form-control" name="username"/ >  
  </div>
    <div class="form-group">
    <label>Message: </label>  
    <input class="form-control" name="message"/ >  
  </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">submit</button>
    </div>
{!! Form::close() !!}
</div>
@stop