@extends('backend.layouts.main')
@section('title', 'Detail Sapi - MPMK')
@section('head')
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
    <a href="{{ route('backend.sapi.index') }}" class="btn btn-default">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 mt-2">
            <div class="card card-primary">
                <div class="card-body">
                    <img src="{{ $sapi->url }}" alt="Gambar Sapi" class="img img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-2">
            <div class="card card-primary">
                <div class="card-header">
                    <img src="{{ asset('img/cow-logo.png') }}" alt="logo" class="icon-mini grayscale">
                    Detail Sapi
                </div>
                <div class="card-body">
                    <div class="table-responsive mb-2">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>KODE</th>
                                    <td>{{ $sapi->kode }}</td>
                                </tr>
                                <tr>
                                    <th>GENDER</th>
                                    <td>{{ $sapi->gender }}</td>
                                </tr>
                                <tr>
                                    <th>DEVICE</th>
                                    <td>{{ $sapi->device }}</td>
                                </tr>
                                <tr>
                                    <th>KONDISI</th>
                                    <td>{!! $sapi->getCondition() !!}</td>
                                </tr>
                                <tr>
                                    <th>CREATED AT</th>
                                    <td>{{ \App\Helpers\Formatter::date($sapi->created_at) }}</td>
                                </tr>
                                <tr>
                                    <th>UPDATED AT</th>
                                    <td>{{ \App\Helpers\Formatter::date($sapi->updated_at) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="catatan-tab" data-toggle="tab" data-target="#catatan"
                                type="button" role="tab" aria-controls="catatan" aria-selected="true">
                                <i class="fas fa-book"></i> Catatan
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="vaksin-tab" data-toggle="tab" data-target="#vaksin"
                                type="button" role="tab" aria-controls="vaksin" aria-selected="false">
                                <i class="fas fa-syringe"></i> Vaksin
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="grafik-tab" data-toggle="tab" data-target="#grafik"
                                type="button" role="tab" aria-controls="grafik" aria-selected="false">
                                <i class="fas fa-chart-line"></i> Tabel
                            </button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tabel-tab" data-toggle="tab" data-target="#tabel"
                                type="button" role="tab" aria-controls="tabel" aria-selected="false">
                                <i class="fas fa-chart"></i> Tabel
                            </button>
                        </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @include('backend.sapi.catatan.index')
                        @include('backend.sapi.vaksin.index')
                        @include('backend.sapi.grafik.index')
                        <!-- @include('backend.sapi.tabel.index') -->
                    </div>
                    @include('backend.sapi.catatan.create')
                    @include('backend.sapi.vaksin.create')
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
