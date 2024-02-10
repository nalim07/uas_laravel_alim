@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @forelse ($data as $rs)
                            <tr>
                                <td>{{ $rs->name }}</td>
                                <td>{{ $rs->barcode }}</td>
                                <td>{{ $rs->price }}</td>
                                <td>{{ $rs->stock }}</td>
                                <td>{{ $rs->unit }}</td>
                                <td>{{ $rs->categories->name }}</td>
                                <td></td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="5">Product not found</td>
                            </tr>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
@endsection
