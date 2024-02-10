@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0">List Product</h1>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
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
                        <th>Picture</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Unit</th>
                        <th>Categorie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data->count() > 0)
                        @foreach ($data as $key => $rs)
                            <tr>
                                <td class="align-middle">{{ $data->firstItem() + $key }}</td>
                                <td class="align-middle">
                                    <img src="{{ asset('fotoproduct/' . $rs->picture) }}" alt=""
                                        style="width: 40px;">
                                </td>
                                <td class="align-middle">{{ $rs->name }}</td>
                                <td class="align-middle">{{ $rs->barcode }}</td>
                                <td class="align-middle">{{ $rs->price }}</td>
                                <td class="align-middle">{{ $rs->stock }}</td>
                                <td class="align-middle">{{ $rs->unit }}</td>
                                <td class="align-middle">{{ $rs->categories->name }}</td>
                                <td class="align-middle">
                                    {{-- Button Action --}}
                                    <a href="{{ route('products.show', $rs->id) }}" type="button"
                                        class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('products.edit', $rs->id) }}" type="button"
                                        class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button"
                                        class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                    </form>
                                    {{-- Button Action End --}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Product not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    {{ $data->links() }}
@endsection
