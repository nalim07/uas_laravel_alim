@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $product->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Barcode</label>
            <input type="text" name="barcode" class="form-control" placeholder="Price" value="{{ $product->barcode }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="price" value="{{ $product->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Stok</label>
            <input type="text" name="stock" class="form-control" placeholder="stok" value="{{ $product->stock }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Unit</label>
            <input type="text" name="unit" class="form-control" placeholder="unit" value="{{ $product->unit }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Picture</label>
            <img src="{{ asset('fotoproduct/'.$product->picture) }}" alt="" style="width: 40px;">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
