@extends('layouts.default')

@section('content')

<div class="container">
    <div class="span4 well">
        <legend>Add a User</legend>
        {{ Form::open(array('url' => '/')) }}
        {{ Form::text('username', '', array('placeholder' => 'User Name')) }}
        {{ Form::password('password', '', array('placeholder' => 'Password')) }}
        {{ Form::text('email', '', array('placeholder' => 'Email')) }}
        {{ Form::submit('Add name', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
    <div class="span4 well">
        @if($errors->any())
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        @endif
    </div>
</div>

@stop