<div class="modal" tabindex="-1" id="modal-vaksin-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-syringe"></i>
                    Tambah Vaksin
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.vaksin.store', $sapi) }}" class="form" method="POST">
                    @csrf()
                    <input type="hidden" name="sapi_id" value="{{ $sapi->id }}">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="dosis">Dosis Ke</label>
                        <input type="number" name="dosis" class="form-control" value="{{ $sapi->getNextDosis() }}"
                            readonly required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Vaksin</label>
                        <select name="jenis" id="jenis" class="form-control" required>
                            <option value="">-- PILIH JENIS VAKSIN --</option>
                            @foreach (\App\Models\SapiVaksin::LIST_VAKSIN as $key => $vaksin)
                                <option value="{{ $key }}">{{ $vaksin }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
