@extends('backend.layouts.main')
@section('title', 'List User - MPMK')
@section('head')
    <h1 class="h3 mb-0 text-gray-800">Device</h1>
    <a href="{{ route('backend.device.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Tambah
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card card-primary">
                <div class="card-header">
                    <i class="fas fa-microchip"></i> Daftar Device
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>NO</th>
                                <th>IMAGE</th>
                                <th>DEVICE ID</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                @if ($model->count() == 0)
                                    <tr>
                                        <td colspan="5" class="text-center">Data kosong</td>
                                    </tr>
                                @endif
                                @foreach ($model as $device)
                                    <tr>
                                        <td>
                                            {{ ($model->currentpage() - 1) * $model->perpage() + $loop->index + 1 }}
                                        </td>
                                        <td>
                                            <img src="{{ asset($device->image) }}" alt="{{ $device->device_id }}"
                                                class="img img-fluid">
                                        </td>
                                        <td>{{ $device->device_id }}</td>
                                        <td>{!! $device->getStatus() !!}</td>
                                        <td>
                                            <a href="{{ route('backend.device.edit', $device) }}"
                                                class="btn btn-warning btn-sm mt-1 mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form class="d-inline"
                                                action="{{ route('backend.device.destroy', compact('device')) }}"
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
