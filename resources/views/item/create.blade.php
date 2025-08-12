@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="justify-content-center">

            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <h1 style="text-align: center">Tambah Data</h1>
        <form method="POST" action="{{ route('items.store') }}">

            @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Nama barang</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Kategori</label>
    <select class="form-select" name="category_id" id="category_id" required>
        @foreach ( $categories as $category )
        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} >
            {{ $category->name }}

        </option>
        @endforeach
    </select>
  </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" id="stock" class="form-control">
    </div>
    <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input type="text" name="unit" id="unit" class="form-control">
    </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
  </div>

        </form>
    </div>

</div>

@endsection
