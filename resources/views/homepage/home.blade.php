@extends('layouts.app')

@section('content')
<div class="container mt-4">
<a href="{{ route('show.login') }}" class="btn btn-primary">Login</a>
<a href="{{ route('show.register') }}" class="btn btn-primary">Register</a>
<a href="{{ route('items.index') }}" class="btn btn-success">Daftar barang</a>

</div>

@endsection
