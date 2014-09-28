@extends('admin.inc.layout')

@section('content')
<div class="starter-template">
    <h1>Admin dashboard</h1>
    @if(Session::get('success') != null)
    <div class="alert alert-success" role="alert">{{ Session::get('success')}}</div>
    @endif
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>
@stop