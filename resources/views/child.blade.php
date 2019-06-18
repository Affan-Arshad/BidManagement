@extends('master')

@section('content')

    @hasSection('fixed-content')
    <div class="container p-5">
            
        @if(Session::has('messages'))
            @foreach (Session::get('messages') as $msgList)
                @foreach($msgList as $type => $msg)
        <p class="alert alert-{{$type}}">{{ $msg }}</p>
                @endforeach
            @endforeach
        @endif

        @yield('fixed-content')
    </div>
    @endif

    @hasSection('fluid-content')
    <div class="container-fluid p-5">
        @yield('fluid-content')
    </div>
    @endif

@endsection