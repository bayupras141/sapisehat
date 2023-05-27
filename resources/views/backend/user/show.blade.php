@extends('backend.layouts.main')
@section('title', 'List User - MPMK')
@section('head')
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
    <a href="{{ route('backend.user.index') }}" class="btn btn-default">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-primary">
                <div class="card-header">
                    <i class="fas fa-users"></i> Detail Pengguna
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>NAME</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>EMAIL</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>ROLE</th>
                                    <td>{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <th>CREATED AT</th>
                                    <td>{{ \App\Helpers\Formatter::date($user->created_at) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
