@extends('layouts.app')
@section('title','Buat Kategori')

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

        <form method="POST" action="{{ route('categories.store') }}">

            @csrf

<div class="mb-3">
    <label for="name" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
</div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
  </div>

        </form>
    </div>

</div>

@endsection
