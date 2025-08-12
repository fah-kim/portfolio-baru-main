@extends('layouts.app')

@section('content')



<div class="container">
    <h2 class="text-center">Daftar data</h2>

    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">+ Tambah Barang</a>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3 ">+ Tambah Kategori</a>

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
                <th>Aksi</th>
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
                <td>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
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
