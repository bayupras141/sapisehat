@extends('backend.layouts.main')
@section('title', 'List User - MPMK')
@section('head')
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
    <a href="{{ route('backend.user.index') }}" class="btn btn-default">
        <i class="fas fa-arrow-left"></i>
        Kembali
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-primary">
                <form action="{{ route('backend.user.update', $user) }}" class="form" method="POST">
                    <div class="card-header">
                        <i class="fas fa-users"></i> Ubah Pengguna
                    </div>
                    <div class="card-body">
                        @include('backend.user.form')
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">
                            <i class="fas fa-check"></i>
                            Simpan
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
