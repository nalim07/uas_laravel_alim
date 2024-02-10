@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="barcode" class="form-control" placeholder="Barcode">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                                <div class="col">
                                    <input type="number" name="stock" class="form-control" placeholder="Stock">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="number" name="unit" class="form-control" placeholder="Unit">
                                </div>
                                <div class="col">
                                    <select name="id_categorie" id="id_categorie" class="custom-select">
                                        <option selected>Select Category</option>
                                        @foreach ($datacategorie as $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="file" name="picture" class="form-control" placeholder="Uploud picture">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
