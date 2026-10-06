@extends('layouts.main')

@section('title', 'Daftar Supplier')

@section('content')
<h2>Daftar Supplier</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($supplier as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['kontak'] }}</td>
            <td>{{ $s['alamat'] }}</td>
            <td>
                <span class="{{ $s['is_active'] ? 'badge-success' : 'badge-secondary' }}">
                    {{ $s['is_active'] ? 'Aktif' : 'Non-Aktif' }}
                </span>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align: center;">Tidak ada data supplier.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top: 20px;">
    <p><strong>Total Supplier:</strong> {{ count($supplier) }}</p>
</div>
@endsection