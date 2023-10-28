@extends('layouts.app')
  

  
@section('contents')
  <div class="row">
  <marquee><h1>Welcome Back!!! Dear {{ auth()->user()->name }}</h1></marquee>
  <img src="https://www.atatus.com/glossary/content/images/2021/07/CRUD.jpeg" height="460px" width="1900px"></img>
  </div>
@endsection