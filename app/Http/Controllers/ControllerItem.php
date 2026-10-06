<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerItem extends Controller
{
    public function index()
    {
        $kategori = "Elektronik & Aksesoris";
        $items = [
            ['id' => 1, 'nama' => 'Laptop', 'harga' => 8500000, 'stok' => 4, 'is_active' => true],
            ['id' => 2, 'nama' => 'Mouse', 'harga' => 125000, 'stok' => 15, 'is_active' => true],
            ['id' => 3, 'nama' => 'Flashdisk', 'harga' => 85000, 'stok' => 0, 'is_active' => false],
        ];

        return view('viewitem', compact('kategori', 'items'));
    }

    public function karyawan()
    {
        $karyawan = [
            ['id' => 1, 'nama' => 'Budi Santoso', 'jabatan' => 'Manager', 'email' => 'budi@gmail.com', 'is_active' => true],
            ['id' => 2, 'nama' => 'Siti Aminah', 'jabatan' => 'Staff Admin', 'email' => 'siti@gmail.com', 'is_active' => true],
            ['id' => 3, 'nama' => 'Andi Wijaya', 'jabatan' => 'Gudang', 'email' => 'andi@gmail.com', 'is_active' => false],
        ];

        return view('viewkaryawan', compact('karyawan'));
    }

    public function supplier()
    {
        $supplier = [
            ['id' => 1, 'nama' => 'PT Elektronik Jaya', 'kontak' => '08123456789', 'alamat' => 'Jakarta', 'is_active' => true],
            ['id' => 2, 'nama' => 'CV Maju Bersama', 'kontak' => '08987654321', 'alamat' => 'Surabaya', 'is_active' => true],
            ['id' => 3, 'nama' => 'Distributor Gadget', 'kontak' => '08555555555', 'alamat' => 'Bandung', 'is_active' => false],
        ];

        return view('viewsupplier', compact('supplier'));
    }
}