@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Beranda</a></li>
            </ol>
        </div> 
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3> {{ $inventoryCount }} </h3>

          <p>Inventaris Barang</p>
        </div>
        <div class="icon">
          <i class="ion ion-filing"></i>
        </div>
        <a href="/inventories" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$employeeCount}}</h3>

          <p>Pegawai</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="/employees" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
  </div>
@endsection