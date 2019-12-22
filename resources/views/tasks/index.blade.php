@extends('layouts.child')

@section('fixed-content')
<h3>Tasks</h3>
<hr>

@include('partials.addTask')

@include('partials.listTasks')

@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection