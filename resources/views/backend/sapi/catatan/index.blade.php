<div class="tab-pane fade show active pt-4" id="catatan" role="tabpanel" aria-labelledby="catatan-tab">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-catatan-create">
        <i class="fas fa-plus"></i> Tambah
    </button>

    <div class="mt-3">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>TANGGAL</th>
                    <th>CATATAN</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                    @if ($sapi->catatan->count() == 0)
                        <tr>
                            <td colspan="3" class="text-center">Data Kosong</td>
                        </tr>
                    @endif
                    @foreach ($sapi->catatan as $catatan)
                        <tr>
                            <td>{{ \App\Helpers\Formatter::date($catatan->tanggal) }}</td>
                            <td>{{ $catatan->catatan }}</td>
                            <td>
                                <form action="{{ route('backend.catatan.destroy', compact('sapi', 'catatan')) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Yakin ingin menjalankan aksi ini ? ketika aksi dijalankan data tidak akan bisa dikembalikan.')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
