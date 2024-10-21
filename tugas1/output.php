<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran - Bule Racing Garage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Hasil Pendaftaran - Bule Racing Garage</h2>
        <div class="output-container">
            <h3>Data yang Anda Masukkan:</h3>
            <p><strong>Nama Lengkap:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
            <p><strong>Nomor HP:</strong> <?php echo htmlspecialchars($_POST['telpon']); ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($_POST['kelamin']); ?></p>
            <p><strong>Layanan:</strong> 
                <?php
                    if (!empty($_POST['layanan'])) {
                        echo htmlspecialchars(implode(', ', $_POST['layanan']));
                    } else {
                        echo 'Tidak ada layanan yang dipilih';
                    }
                ?>
            </p>
            <p><strong>Jenis Motor:</strong> <?php echo htmlspecialchars($_POST['motor']); ?></p>
            <p><strong>Keterangan Tambahan:</strong> 
                <?php
                    echo !empty($_POST['keterangan']) ? htmlspecialchars($_POST['keterangan']) : 'Tidak ada keterangan tambahan';
                ?>
            </p>
        </div>

    </div>

</body>
</html>
