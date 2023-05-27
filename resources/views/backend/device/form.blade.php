@csrf
@if (isset($device))
    @method('PUT')
@endif
<div class="form-group">
    <label for="device_id">Device ID</label>
    <input type="text" class="form-control" name="device_id"
        @if (isset($device)) value="{{ $device->device_id }}" @else value="{{ old('device_id') }}" @endif">
    @error('device_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="file">Image</label>
    <input type="file" class="form-control" name="file" accept="image/*">
    @if (isset($device))
        <span class="text-warning">
            * ) Kosongi apabila gambar tetap
        </span>
        <br>
    @endif
    @error('file')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
