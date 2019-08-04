@extends('layouts.child')

@section('fixed-content')
    <h3>Bidders</h3>
    <hr>
    <table class="table bidders table-hover table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bidders as $bidder)
            <tr>
                <td class="link">
                    <a class="btn text-left" href="/bidders/{{$bidder->id}}">{{$bidder->name}}</a>
                </td>
                <td class="fitToContent">
                    <a class="btn btn-warning" href="/bidders/{{$bidder->id}}/edit">Edit</a>
                    <form class="d-inline-block" action="/bidders/{{$bidder->id}}" method="POST" onsubmit="confirmDelete(event)">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{-- <tfoot>
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/bidders/create">Add new Bidder</a>
                </td>
            </tr>
        </tfoot> --}}
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection