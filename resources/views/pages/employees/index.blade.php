@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Pegawai</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
            </ol>
        </div> 
@endsection

@section('content')
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
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="/employees/create" class="btn btn-sm btn-primary">
                        Tambah Pegawai
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>NIP Pegawai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ ($employees->currentPage() - 1) * $employees->perPage() + $loop->index + 1 }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->NIP }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/employees/edit/{{ $employee->id }}" class="btn btn-sm btn-warning mr-2">
                                                <i class="fas fa-edit fa-xs"></i>
                                            </a>
                                            <form action="/employees/{{ $employee->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
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
                <div class="card-footer">
                    {{ $employees->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection