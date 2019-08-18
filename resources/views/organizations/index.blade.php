@extends('layouts.child')

@section('fixed-content')
    <h3>
        Organizations
        <a class="btn btn-success float-right" href="/organizations/create">Add new Organization</a>
    </h3>
    <hr>
    <table data-toggle="table" data-search="true">
        <thead>
            <tr>
                <th data-sortable="true">Name</th>
                <th class="fitToContent">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orgs as $org)
            <tr>
                <td class="link">
                    <a data-name="{{$org->name}}" class="btn text-left" href="/organizations/{{$org->id}}">{{$org->name}}</a>
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
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection