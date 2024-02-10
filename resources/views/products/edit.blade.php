@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $product->name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Barcode</label>
                <input type="text" name="barcode" class="form-control" placeholder="Price"
                    value="{{ $product->barcode }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="price" value="{{ $product->price }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stock" class="form-control" placeholder="stok" value="{{ $product->stock }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Unit</label>
                <input type="number" name="unit" class="form-control" placeholder="unit" value="{{ $product->unit }}">
            </div>
            <div class="col">
                <select name="id_categorie" id="id_categorie" class="form-select">
                    <option selected>select category</option>
                    @foreach ($datacategorie as $data)
                        <option value="{{ $data->id }}" {{ ($product->id_categorie == $data->id ? 'selected' : 'null')}}>{{ $data->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="picture" class="form-control" placeholder="Gambar/Foto">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
