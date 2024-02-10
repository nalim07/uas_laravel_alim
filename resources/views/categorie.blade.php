@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Categorie</h1>
        <a href="{{ route('addcategorie') }}" class="btn btn-primary">Add</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name Categorie</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $row)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $row->name }}</td>
                    <td class="align-middle">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
