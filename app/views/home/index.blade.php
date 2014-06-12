@extends('layouts.default')

@section('content')

{{ Form::open(array('url' => '/')) }}
{{ Form::text('cid', '', array('placeholder' => 'Customer ID')) }}
{{ Form::text('cname', '', array('placeholder' => 'Customer Name')) }}
{{ Form::submit('Add name', array('class' => 'btn btn-success')) }}
{{ Form::close() }}

@stop