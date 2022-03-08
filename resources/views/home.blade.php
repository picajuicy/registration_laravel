@extends('layouts.app')
@section('content')


<h1>Hi this is {{ Auth::user()->name }} page</h1>


@endsection