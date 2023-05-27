@csrf
@if (isset($user))
    @method('PUT')
@endif
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"
        @if (isset($user)) value="{{ $user->name }}" @else value="{{ old('name') }}" @endif">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email"
        @if (isset($user)) value="{{ $user->email }}" @else value="{{ old('email') }}" @endif">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="role">Hak Akses</label>
    <select name="role" id="role" class="form-control">
        <option value="">-- Pilih Role --</option>
        <option @if(isset($user) && $user->role == "admin") selected @endif value="admin">Admin</option>
        <option @if(isset($user) && $user->role == "user") selected @endif value="user">User</option>
    </select>
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
    @if (isset($user))
        <span class="text-warning">
            * ) Kosongi apabila password tetap
        </span>
        <br>
    @endif
    @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
