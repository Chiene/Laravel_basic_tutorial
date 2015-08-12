@extends('layout')
@section('contents')
<h3>Message Board Example</h3>
<div class="row">
  <a class="btn btn-default" href="{{URL::to('/message/create')}}">L  eave a new message</a>
</div>
<br>
<div class="row jumbotron ">
<label> Display Message </label>
<table class="table">
<tr>
  <th>Username</th>
  <th>Message</th>
</tr>
  @foreach($message_view   as $key => $value)
    <tr>
      <td>{{ $value->name }}</td>
      <td>{{ $value->message }}</td>
    </tr>
  @endforeach

</table>
</div>

@stop