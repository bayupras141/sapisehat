@csrf
@if (isset($sapi))
    @method('PUT')
@endif
<div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" name="kode"
        @if (isset($sapi)) value="{{ $sapi->kode }}" @else value="{{ old('kode') }}" @endif>
    @error('kode')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender" id="gender" class="form-control">
        <option value="">-- Pilih Gender --</option>
        @foreach ($genders as $gender)
            <option value="{{ $gender }}" 
            @if (isset($sapi) && $sapi->gender == $gender) selected @endif>{{ $gender }}
            </option>
        @endforeach
    </select>
    @error('gender')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="device">Device</label>
    <input type="device" class="form-control" name="device"
    @if (isset($sapi)) value="{{ $sapi->device }}" @else value="{{ old('device') }}" @endif>
    @error('device')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>