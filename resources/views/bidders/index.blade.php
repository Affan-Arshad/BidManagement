@extends('child')

@section('fixed-content')
    <h3>Bidders</h3>
    <hr>
    <table class="table bidders table-hover table-borderless">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bidders as $bidder)
            <tr>
                <td>{{$bidder->name}}</td>
                <td class="fitToContent">
                    <!-- <a class="btn btn-info" href="/bidders/{{$bidder->id}}">View Bids</a> -->
                    <!-- <a class="btn btn-warning" href="/bidders/{{$bidder->id}}/edit">Edit</a> -->
                    <form class="d-inline-block" action="/bidders/{{$bidder->id}}" method="POST" id="del{{$bidder->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{$bidder->id}})">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <!-- <tfoot>
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/bidders/create">Add new Bidder</a>
                </td>
            </tr>
        </tfoot> -->
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection