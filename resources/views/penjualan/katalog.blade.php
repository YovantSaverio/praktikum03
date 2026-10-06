@extends('layouts.main')

@section('title', 'Katalog Praktikum Penjualan')

@section('content')
<h2>Katalog Praktikum</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Item</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Harga Bersih</th>
        </tr>
    </thead>
    <tbody>
        @forelse($items as $item)
            @php
                $harga_bersih = $item['harga'] - ($item['harga'] * ($item['diskon_persen'] / 100));
            @endphp

            <tr style="{{ $item['diskon_persen'] >= 20 ? 'background-color: #ffccd5;' : '' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['kode'] }}</td>
                <td>{{ $item['nama_item'] }}</td>
                <td>{{ $item['kategori'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                <td>{{ $item['diskon_persen'] }}%</td>
                <td>Rp {{ number_format($harga_bersih, 0, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align: center;">Tidak ada data barang.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection