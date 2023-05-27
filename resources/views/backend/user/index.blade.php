@extends('backend.layouts.main')
@section('title', 'List User - MPMK')
@section('head')
    <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
    <a href="{{ route('backend.user.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Tambah
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-primary">
                <div class="card-header">
                    <i class="fas fa-users"></i> Daftar Pengguna
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>NO</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                @if ($model->count() == 0)
                                    <tr>
                                        <td colspan="4" class="text-center">Data kosong</td>
                                    </tr>
                                @endif
                                @foreach ($model as $user)
                                    <tr>
                                        <td>
                                            {{ ($model->currentpage() - 1) * $model->perpage() + $loop->index + 1 }}

                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <a href="{{ route('backend.user.edit', $user) }}"
                                                class="btn btn-warning btn-sm mt-1 mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('backend.user.show', $user) }}"
                                                class="btn btn-primary btn-sm mt-1 mr-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form class="d-inline"
                                                action="{{ route('backend.user.destroy', compact('user')) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm mt-1 mr-1"
                                                    onclick="return confirm('Yakin ingin menjalankan aksi ini ? ketika aksi dijalankan data tidak akan bisa dikembalikan.')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $model->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
