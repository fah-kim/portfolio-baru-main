@extends('layouts.app')
@section('title','Daftar Barang')

@section('content')



<div class="container mt-5">

@guest
<a href="{{ route('show.login') }}" class="btn btn-primary me-3">Login</a>
<a href="{{ route('show.register') }}" class="btn btn-primary">Registrasi</a>
<br>
<br>
@endguest

@auth
<h3 class="mt-5 mb-3 fs-3">Halo, {{ Auth::user()->name }}!</h3>
<br><br>
{{-- <form action="{{ route('logout') }}" method="POST" class="mb-3">
    @csrf
    <button class="btn btn-warning me-3">Logout</button>
</form> --}}

    @endauth



    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Satuan</th>
                @auth
                <th>Aksi</th>
                @endauth
            </tr>
        </thead>

        <tbody>
            @forelse ($items as $item )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name ?? '-' }}</td>
                <td>{{ $item->stock }}</td>
                <td>{{ $item->unit }}</td>
                @auth

                <td>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>

                @endauth
            </tr>
            @empty
            <tr>
                <td colspan="5">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $items->links() }}
</div>

</table>


@endsection
