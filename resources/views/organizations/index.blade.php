@extends('layouts.child')

@section('fixed-content')
    <h3>
        Organizations
        <a class="btn btn-success float-right" href="/organizations/create">
            <i class="fas fa-plus"></i>
        </a>
    </h3>
    <hr>
    <table data-toggle="table" data-search="true" class="table-counter">
        <thead>
            <tr>
                <th>#</th>
                <th data-sortable="true">Name</th>
                <th class="fitToContent">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orgs as $org)
            <tr>
                <td class="fitToContent"></td>
                <td class="link">
                    <a data-name="{{$org->name}}" class="btn text-left" href="/organizations/{{$org->id}}">{{$org->name}}</a>
                </td>
                <td class="fitToContent">
                    <a class="btn text-warning" href="/organizations/{{$org->id}}/edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form class="d-inline-block" action="/organizations/{{$org->id}}" method="POST" onsubmit="confirmDelete(event, '{{$org->name}}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-danger">
                                <i class="fas fa-trash"></i>
                        </button>
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