<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function katalog()
    {
        $items = [
            ['kode' => 'K001', 'nama_item' => 'Nasi Goreng Special', 'kategori' => 'Food',  'harga' => 20000, 'diskon_persen' => 10],
            ['kode' => 'K002', 'nama_item' => 'Es Teh Manis',        'kategori' => 'Drink', 'harga' => 5000,  'diskon_persen' => 5],
            ['kode' => 'K003', 'nama_item' => 'Ayam Bakar',          'kategori' => 'Food',  'harga' => 25000, 'diskon_persen' => 25], // >= 20% (Baris Merah Muda)
            ['kode' => 'K004', 'nama_item' => 'Kopi Latte',          'kategori' => 'Drink', 'harga' => 18000, 'diskon_persen' => 15],
            ['kode' => 'K005', 'nama_item' => 'Pizza Personal',      'kategori' => 'Food',  'harga' => 50000, 'diskon_persen' => 20], // >= 20% (Baris Merah Muda)
        ];

        return view('penjualan.katalog', compact('items'));
    }
}