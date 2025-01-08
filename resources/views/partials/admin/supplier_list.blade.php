@extends('layouts.main')

@section('content')
@php
    $title = "Supplier List "
@endphp
<div class="container mt-4">
    <h2 class="mb-4">List Supplier</h2>

    <table id="suppliersTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Supplier</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $supplier->fullname }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->phone }}</td>
                <td>{{ $supplier->address }}</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-cart-shopping"></i> Lihat Produk
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('styles')

@endpush

{{-- {{ route('admin.supplier.products', $supplier->id) }} --}}