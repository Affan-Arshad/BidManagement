@extends('master')

@section('content')

    @hasSection('fixed-content')
    <div class="container p-5">
        @yield('fixed-content')
    </div>
    @endif

    @hasSection('fluid-content')
    <div class="container-fluid p-5">
        @yield('fluid-content')
    </div>
    @endif

@endsection