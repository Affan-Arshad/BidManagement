@extends('layouts.child')

@section('fixed-content')
    <h3>Bidders</h3>
    <hr>
    <table
    data-toggle="table"
    data-mobile-responsive="true" data-search="true" class="table-counter">
        <thead>
            <tr>
                <th>#</th>
                <th data-sortable="true">Name</th>
                <th data-sortable="true" class="fitToContent">Proposal Count</th>
                <th class="fitToContent">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bidders as $bidder)
            <tr>
                <td class="fitToContent"></td>
                <td class="link">
                    <a data-name="{{ $bidder->name }}" class="btn text-left" href="/bidders/{{ $bidder->id }}">{{ $bidder->name }}</a>
                </td>
                <td class="fitToContent">{{ count($bidder->proposals) }}</td>
                <td class="fitToContent">
                    <a class="btn text-warning" href="/bidders/{{ $bidder->id }}/edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form class="d-inline-block" action="/bidders/{{ $bidder->id }}" method="POST" onsubmit="confirmDelete(event, '{{ $bidder->name }}')">
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