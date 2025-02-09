@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Pegawai</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Pegawai</li>
            </ol>
        </div> 
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <form action="/employees/{{ $employee->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label"> Nama Pegawai* </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pegawai" value="{{ old('name', $employee->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="NIP" class="form-label"> NIP Pegawai* </label>
                            <input type="text" name="NIP" id="NIP" class="form-control" placeholder="Masukkan NIP Pegawai" value="{{ old('NIP', $employee->NIP) }}">
                        </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/employees" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="sumbit" class="btn btn-sm btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection