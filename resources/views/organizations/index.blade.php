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
                <td class="actions">
                    <a class="btn btn-info" href="/organizations/{{$org->id}}">View Bids</a>
                    <a class="btn btn-warning" href="/organizations/{{$org->id}}/edit">Edit</a>
                    <a class="btn btn-danger" href="/organizations/{{$org->id}}">Delete</a>
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