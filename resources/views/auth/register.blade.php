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
        <form action="{{ route('register') }}" method="POST">
                @csrf

                <h2>Register</h2>

                <label class="form-label" for="name">Nama</label>
                <input class="form-control" type="text" name="name" required value="{{ old('name') }}">

                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" required value="{{ old('email') }}">

                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" name="password" required>

                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input class="form-control" type="password" name="password_confirmation" required>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>

            </form>
        </div>
    </div>

@endsection
