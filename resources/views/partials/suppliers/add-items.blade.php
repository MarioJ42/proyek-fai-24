@extends('home.index')

@section('content')
@if(session('success'))
<div class="alert alert-success mt-4">
    {{ session('success') }}
</div>
@endif
<div class="container mt-4">
    <h2 class="mb-4">Input Produk Biji Kopi</h2>
    <form action="{{ route('supplier.storeProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Nama Produk -->
        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Masukkan nama produk" required>
        </div>
        
        <!-- Orientation -->
        <div class="mb-3">
            <label for="orientation" class="form-label">Orientation</label>
            <textarea name="orientation" id="orientation" class="form-control" rows="3" placeholder="Masukkan orientation produk" required></textarea>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Produk</label>
            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Masukkan deskripsi produk" required></textarea>
        </div>
        
        <!-- Harga -->
        <div class="mb-3">
            <label for="price" class="form-label">Harga (Rp)</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga produk" required>
        </div>

        <!-- Stok -->
        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan jumlah stok" required>
        </div>

        <!-- Diskon -->
        <div class="mb-3">
            <label for="discount" class="form-label">Diskon (%)</label>
            <input type="number" name="discount" id="discount" class="form-control" placeholder="Masukkan diskon (opsional)">
        </div>

        <!-- Gambar Produk -->
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary" style="background-color: #a77057; border: none">Simpan Produk</button>
    </form>
</div>
@endsection