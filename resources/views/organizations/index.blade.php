@extends('child')

@section('fixed-content')
    <h3>Organizations</h3>
    <table class="table">
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
                <td>
                    <a href="/organizations/{{$org->id}}">View</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/organiztions/create">Add new Organization</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection