<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Member - Bule Racing Garage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Pendaftaran Member - Bule Racing Garage</h2>
        <form id="registrasi" action="output.php" method="POST">

            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telpon">Nomor HP:</label>
            <input type="number" id="telpon" name="telpon" required>

            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" id="laki" name="kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>

                <input type="radio" id="perempuan" name="kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>

            <label>Layanan yang diinginkan:</label>
            <div class="checkbox-group">
                <input type="checkbox" id="tune-up" name="layanan[]" value="Tune-Up">
                <label for="tune-up">Tune-Up</label>

                <input type="checkbox" id="modifikasi" name="layanan[]" value="Modifikasi">
                <label for="modifikasi">Modifikasi</label>

                <input type="checkbox" id="paint" name="layanan[]" value=" Repaint">
                <label for="paint">Repaint</label>
            </div>

            <label for="motor">Jenis Motor:</label>
            <select id="motor" name="motor" required>
                <option value="kopling">Kopling</option>
                <option value="bebek">Bebek</option>
                <option value="matic">Matic</option>
            </select>

            <label for="keterangan">Keterangan Tambahan:</label>
            <textarea id="keterangan" name="keterangan" rows="4"></textarea>

            <input type="submit" value="Daftar Sekarang"><br>
            <input type="reset" value="Bersihkan">

        </form>
    </div>

</body>
</html>
