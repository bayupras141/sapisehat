@extends('backend.layouts.main')
@section('title', 'List User - MPMK')
@section('head')
    <h1 class="h3 mb-0 text-gray-800">Sapi</h1>
    <a href="{{ route('backend.sapi.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Tambah
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-primary">
                <div class="card-header">
                    <img src="{{ asset('img/cow-logo.png') }}" alt="logo" class="icon-mini grayscale">
                    Daftar Sapi
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>NO</th>
                                <th>KODE</th>
                                <th>GENDER</th>
                                <th>KONDISI</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                @if ($model->count() == 0)
                                    <tr>
                                        <td colspan="5" class="text-center">Data kosong</td>
                                    </tr>
                                @endif
                                @foreach ($model as $sapi)
                                    <tr>
                                        <td>
                                            {{ ($model->currentpage() - 1) * $model->perpage() + $loop->index + 1 }}
                                        </td>
                                        <td>{{ $sapi->kode }}</td>
                                        <td>{{ $sapi->gender }}</td>
                                        <td>{!! $sapi->getCondition() !!}</td>
                                        <td>
                                            <a href="{{ route('backend.sapi.edit', $sapi) }}"
                                                class="btn btn-warning btn-sm mt-1 mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('backend.sapi.show', $sapi) }}"
                                                class="btn btn-primary btn-sm mt-1 mr-1">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <form class="d-inline"
                                                action="{{ route('backend.sapi.destroy', compact('sapi')) }}"
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
