@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Inventaris Barang</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inventaris</a></li>
            </ol>
        </div> 
@endsection


{{-- .Main content inventory --}}
@section('content')

{{-- Toast berhasil tambah, edit dan hapus  --}}
@if (session('success'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    iconColor: 'white',
                    customClass: {
                        popup: 'colored-toast',
                    },
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                });
                (async () => {
                    await Toast.fire({
                        icon: 'success',
                        title: '{{(session('success'))}}',
                    })
                })()
            </script>
        @endif 
        @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    iconColor: 'white',
                    customClass: {
                        popup: 'colored-toast',
                    },
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                });
                (async () => {
                    await Toast.fire({
                        icon: 'error',
                        title: '{{(session('error'))}}',
                    })
                })()
        </script> 
        @endif
{{-- End Toast berhasil tambah, edit dan hapus  --}}

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <div>
                        <a href="/inventories/create" class="btn btn-sm btn-primary me-5 active">
                            Tambah Barang
                        </a>
                        <a href="/cetak" target="_blank" class="btn btn-sm btn-secondary me-5 active">
                            Print <i class="fas fa-print"></i>
                        </a>
                        <button class="btn btn-sm btn-danger" onclick="exportPDF()">
                            <i class="fas fa-file-pdf"></i> Export PDF
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" > 
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="align-middle">No</th>
                                    <th class="align-middle">Kode</th>
                                    <th class="align-middle">Nama Barang</th>
                                    <th class="align-middle">Type</th>
                                    <th class="align-middle">No Sertifikat</th>
                                    <th class="align-middle">No Polisi</th>
                                    <th class="align-middle">No Rangka</th>
                                    <th class="align-middle">Asal Perolehan</th>
                                    <th class="align-middle">Tahun Pembelian</th>
                                    <th class="align-middle">Keadaan</th>
                                    <th class="align-middle">Jumlah</th>
                                    <th class="align-middle">Harga</th>
                                    <th class="align-middle">Penanggung Jawab</th>
                                    <th style="width: 10%" class="align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventories as $inventory)
                                    <tr>
                                        <td>{{ ($inventories->currentPage() - 1) * $inventories->perPage() + $loop->index + 1 }}</td>
                                        <td>{{ $inventory->kode_barang }}</td>
                                        <td>{{ $inventory->nama_barang }}</td>
                                        <td>{{ $inventory->merk_tipe }}</td>
                                        <td>{{ $inventory->no_sertifikat_pabrik_chasis_mesin ?? '-' }}</td>
                                        <td>{{ $inventory->no_polisi ?? '-'}}</td>
                                        <td>{{ $inventory->no_rangka ?? '-'}}</td>
                                        <td>{{ $inventory->asal_perolehan }}</td>
                                        <td>{{ $inventory->tahun_pembelian }}</td>
                                        <td>{{ $inventory->keadaan_barang_status }}</td>
                                        <td>{{ $inventory->jumlah_barang }}</td>
                                        <td>Rp {{ number_format($inventory->harga_barang, 0, ',', '.') }}</td>
                                        <td>{{ $inventory->employee->name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/inventories/edit/{{ $inventory->id }}" class="btn btn-sm btn-warning btn-icon mr-2" title="Edit">
                                                    <i class="fas fa-edit fa-xs"></i>
                                                </a>
                                                <form action="/inventories/{{ $inventory->id }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Hapus">
                                                        <i class="fas fa-trash-alt fa-xs"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>                                                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                </div>
                {{-- pagination --}}
                <div class="card-footer">
                    {{$inventories->links('pagination::bootstrap-5')}} 
                </div>
                {{-- end pagination --}}
            </div>
        </div>
    </div>
@endsection
