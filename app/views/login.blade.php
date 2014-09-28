@extends('inc.layout')

@section('content')
<div class="starter-template">
    <h1>Login</h1>
    @if(Session::get('error') != null)
    <div class="alert alert-warning" role="alert">{{ Session::get('error') }}</div>
    @endif
    {{ Form::open(array('url' => 'login')) }}
    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::submit('Login', array('class' => 'btn btn-default')) }}
    </div>
    {{ Form::close() }}
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>
@stop