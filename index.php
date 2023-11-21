<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Form Peminjaman</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        .form-error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Form Peminjaman</h1>
    <form action="proses_input.php" method="post">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telp:</label>
            <input type="number" name="no_telp" id="no_telp" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <div class="form-group">
            <label for="jml_pinjaman">Jumlah Pinjaman:</label>
            <input type="number" name="jml_pinjaman" id="jml_pinjaman" required>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>