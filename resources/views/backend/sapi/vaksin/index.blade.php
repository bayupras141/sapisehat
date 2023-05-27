<div class="tab-pane fade pt-4" id="vaksin" role="tabpanel" aria-labelledby="vaksin-tab">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-vaksin-create">
        <i class="fas fa-plus"></i> Tambah
    </button>

    <div class="mt-3">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>DOSIS KE</th>
                    <th>JENIS</th>
                    <th>TANGGAL</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                    @if ($sapi->vaksin->count() == 0)
                        <tr>
                            <td colspan="4" class="text-center">Data Kosong</td>
                        </tr>
                    @endif
                    @foreach ($sapi->vaksin as $vaksin)
                        <tr>
                            <td>{{ $vaksin->dosis }}</td>
                            <td>{{ $vaksin->jenisVaksinLabel }}</td>
                            <td>{{ \App\Helpers\Formatter::date($vaksin->tanggal) }}</td>
                            <td>
                                <form action="{{ route('backend.vaksin.destroy', compact('sapi', 'vaksin')) }}"
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
