@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>苗苗博客欢迎你</h1>
    <p class="lead">
      您好，欢迎使用苗苗博客
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>  
@stop