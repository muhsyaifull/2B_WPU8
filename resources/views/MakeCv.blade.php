<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
</head>
<body>
    <h2>Buat CV</h2>
    <form method="post" action="/resume/store">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Deskripsi:</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Alamat:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="experience">Pengalaman:</label>
            <textarea name="experience" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="education">Pendidikan:</label>
            <textarea name="education" class="form-control" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="education">skill:</label>
            <textarea name="skill" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="education">nomor telepon:</label>
            <textarea name="no_telepon" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="education">email:</label>
            <textarea name="email" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan CV</button>
    </form>
</body>

</html>
