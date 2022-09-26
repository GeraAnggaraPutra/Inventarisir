@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Barang
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembelian</label>
                            <input type="text" class="form-control " name="tanggal" value="{{ $barang->tanggal }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nama_barang" value="{{ $barang->nama_barang }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Spesifikasi Barang</label>
                            <input type="text" class="form-control " name="spesifikasi_barang" value="{{ $barang->spesifikasi_barang }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="text" class="form-control " name="jumlah" value="{{ $barang->jumlah }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Serial Number</label>
                            <input type="text" class="form-control " name="serial_number" value="{{ $barang->serial_number }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control " name="harga" value="{{ $barang->harga }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keadaan Barang</label>
                            <input type="text" class="form-control " name="keadaan_barang" value="{{ $barang->keadaan_barang }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control " name="lokasi" value="{{ $barang->lokasi }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('barang.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection