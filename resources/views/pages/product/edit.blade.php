@extends('layouts.default')
@section('title', 'Halaman Product | Update')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Update Barang</strong>
            <small>{{ $item->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product.update', $item->id) }}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-lable">Name</label>
                    <input type="text" name="name" value="{{ old('name') ?? $item->name }}"
                        class="form-control @error('name') is invalid
                @enderror" />
                    @error('name')
                        <div class="text-mute">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-lable">Type</label>
                    <input type="text" name="type" value="{{ old('type') ?? $item->type }}"
                        class="form-control @error('type') is invalid
                @enderror" />
                    @error('type')
                        <div class="text-mute">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-lable">Deskripsi Barang</label>
                    <textarea id="cekEditor" name="description" class="form-control  @error('description') is invalid
@enderror">{{ old('description') ?? $item->description }}</textarea>
                    @error('description')
                        <div class="text-mute">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-lable">Harga Barang</label>
                    <input type="number" name="price" value="{{ old('price') ?? $item->price }}"
                        class="form-control @error('price') is invalid
                @enderror" />
                    @error('price')
                        <div class="text-mute">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class="form-control-lable">Kuantitas barang</label>
                    <input type="number" name="quantity" value="{{ old('quantity') ?? $item->quantity }}"
                        class="form-control @error('quantity') is invalid
                @enderror" />
                    @error('quantity')
                        <div class="text-mute">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Update Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
