@extends('layouts.child')

@section('fixed-content')
    <h3>
        Bids
        <a class="btn btn-success float-right" href="/bids/create?org=3">
            <i class="fas fa-plus"></i>
        </a>
    </h3>
    
    <hr>

    <table
    data-toggle="table"
    data-mobile-responsive="true" data-search="true" class="table-counter">
        <thead>
            <tr>
                <th>#</th>
                <th data-sortable="true">Name</th>
                <th data-sortable="true">Organization</th>
                <th data-sortable="true">Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bids as $bid)
            <tr>
                <td class="fitToContent"></td>
                <td class="link">
                    <a data-name="{{ $bid->name }}" class="btn text-left" href="/bids/{{ $bid->id }}">{{ $bid->name }}</a>
                </td>
                <td class="link">
                    <a data-name="{{ $bid->organization->name }}" class="btn text-left" href="/organizations/{{ $bid->organization->id }}">{{ $bid->organization->name }}</a>
                </td>
                <td>
                    {{ $bid->category }}
                </td>
                <td class="fitToContent">
                    @include('partials.link', ['link' => $bid->link])
                    
                    <a class="btn text-warning" href="/bids/{{ $bid->id }}/edit">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form class="d-inline-block" action="/bids/{{ $bid->id }}" method="POST" onsubmit="confirmDelete(event, '{{ $bid->name }}')">
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
        <tfoot>
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/bids/create?org=3">Add new Bid</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection