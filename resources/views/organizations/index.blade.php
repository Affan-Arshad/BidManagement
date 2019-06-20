@extends('child')

@section('fixed-content')
    <h3>Organizations</h3>
    <hr>
    <table class="table organizations table-hover table-borderless">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orgs as $org)
            <tr>
                <td>{{$org->name}}</td>
                <td class="fitToContent">
                    <a class="btn btn-info" href="/organizations/{{$org->id}}">View Bids</a>
                    <a class="btn btn-warning" href="/organizations/{{$org->id}}/edit">Edit</a>
                    <form class="d-inline-block" action="/organizations/{{$org->id}}" method="POST" id="del{{$org->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{$org->id}})">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/organizations/create">Add new Organization</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection