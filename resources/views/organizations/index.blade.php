@extends('layouts.child')

@section('fixed-content')
    <h3>Organizations</h3>
    <a class="btn btn-success" href="/organizations/create">Add new Organization</a>
    <hr>
    <table data-toggle="table" data-search="true">
        <thead>
            <tr>
                <th>Name</th>
                <th class="fitToContent">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orgs as $org)
            <tr>
                <td class="link">
                    <a class="btn text-left" href="/organizations/{{$org->id}}">{{$org->name}}</a>
                </td>
                <td class="fitToContent">
                    <a class="btn btn-warning" href="/organizations/{{$org->id}}/edit">Edit</a>
                    <form class="d-inline-block" action="/organizations/{{$org->id}}" method="POST" onsubmit="confirmDelete(event)">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
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