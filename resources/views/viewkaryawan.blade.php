@extends('layouts.main')

@section('title', 'Daftar Karyawan')

@section('content')
<h2>Daftar Karyawan</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($karyawan as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k['nama'] }}</td>
            <td>{{ $k['jabatan'] }}</td>
            <td>{{ $k['email'] }}</td>
            <td>
                <span class="{{ $k['is_active'] ? 'badge-success' : 'badge-secondary' }}">
                    {{ $k['is_active'] ? 'Aktif' : 'Non-Aktif' }}
                </span>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align: center;">Tidak ada data karyawan.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div style="margin-top: 20px;">
    <p><strong>Total Karyawan:</strong> {{ count($karyawan) }}</p>
</div>
@endsection