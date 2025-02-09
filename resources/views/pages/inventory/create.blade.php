@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Barang</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Inventaris</li>
            </ol>
        </div> 
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <form action="/inventories/store" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_barang" class="form-label"> Nama Barang* </label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Masukkan nama barang" value="{{ old('nama_barang') }}">
                        </div>
                        <div class="form-group">
                            <label for="merk_tipe" class="form-label"> Type* </label>
                            <input type="text" name="merk_tipe" id="merk_tipe" class="form-control" placeholder="Masukkan Tipe/Merk barang" value="{{ old('merk_tipe') }}">
                        </div>
                        <div class="form-group">
                            <label for="no_sertifikat_pabrik_chasis_mesin" class="form-label"> No Sertifikat </label>
                            <input type="text" name="no_sertifikat_pabrik_chasis_mesin" id="no_sertifikat_pabrik_chasis_mesin" class="form-control" placeholder="Masukkan No.Sertifikat/Pabrik/Chasis/Mesin barang" value="{{ old('no_sertifikat_pabrik_chasis_mesin') }}">
                        </div>
                        <div class="form-group">
                            <label for="no_polisi" class="form-label"> No Polisi </label>
                            <input type="text" name="no_polisi" id="no_polisi" class="form-control" placeholder="Masukkan No. Polisi" value="{{ old('no_polisi') }}">
                        </div>
                        <div class="form-group">
                            <label for="no_rangka" class="form-label"> No rangka </label>
                            <input type="text" name="no_rangka" id="no_rangka" class="form-control" placeholder="Masukkan No. Rangka" value="{{ old('no_rangka') }}">
                        </div>
                        <div class="form-group">
                            <label for="asal_perolehan" class="form-label"> Asal Perolehan* </label>
                            <input type="text" name="asal_perolehan" id="asal_perolehan" class="form-control" placeholder="Masukkan Asal Perolehan" value="{{ old('asal_perolehan') }}">
                        </div>
                        <div class="form-group">
                            <label for="tahun_pembelian" class="form-label"> Tahun Pembelian* </label>
                            <input type="number" name="tahun_pembelian" id="tahun_pembelian" class="form-control" placeholder="Masukkan Tahun Pembelian" value="{{ old('tahun_pembelian') }}">
                        </div>
                        <div class="form-group">
                            <label for="keadaan_barang_status" class="form-label"> Keadaan Barang* </label>
                            <select name="keadaan_barang_status" id="keadaan_barang_status" class="form-control">
                                <option value="Baik" {{ old('keadaan_barang_status') == 'Baik' ? 'selected' : '' }}>Baik</option>
                                <option value="Rusak" {{ old('keadaan_barang_status') == 'Rusak' ? 'selected' : '' }}>Rusak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_barang" class="form-label"> Jumlah Barang* </label>
                            <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control" placeholder="Masukkan Jumlah Barang" value="{{ old('jumlah_barang') }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_barang" class="form-label"> Harga Barang* </label>
                            <input type="number" name="harga_barang" id="harga_barang" class="form-control" placeholder="Masukkan Harga Barang" value="{{ old('harga_barang') }}">
                        </div>
                        <div class="form-group">
                            <label for="employee_id" class="form-label"> Penanggung Jawab* </label>
                            <select name="employee_id" id="employee_id" class="form-control custom-select" value="{{ old('employee_id') }}">
                               @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}"> {{ $employee->name }} </option>
                               @endforeach
                            </select>
                        </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/inventories" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="sumbit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection