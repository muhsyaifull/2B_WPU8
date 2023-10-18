<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing head content) ... -->
</head>
<body>
    <!-- ... (your existing navbar and other content) ... -->

    <!-- Edit Profile Form -->
    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form method="POST" action="{{ route('profile.update', ['id' => $profile->id]) }}">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $profile->nama }}">
            </div>

            <!-- Tempat Lahir -->
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $profile->tempat_lahir }}">
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $profile->tanggal_lahir }}">
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki" {{ $profile->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $profile->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <!-- Agama -->
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="{{ $profile->agama }}">
            </div>

            <!-- No Telepon -->
            <div class="mb-3">
                <label for="no_telepon" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $profile->no_telepon }}">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $profile->email }}">
            </div>

            <!-- Alamat (you can choose to keep it as text or use separate fields for address) -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat">{{ $profile->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save Change</button>
        </form>
    </div>

    <!-- ... (your existing footer and script tags) ... -->
</body>
</html>
