<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat Pengumuman</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .message {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .details {
            text-align: left;
            margin-bottom: 20px;
        }

        .details p {
            margin: 5px 0;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://www.uhb.ac.id/site/assets/files/2071/logo_uhb_r.420x0-is-pid1040.png" alt="UHB" width="100">
        </div>
        <div class="message">
            <?php
            // Pesan berdasarkan status penerimaan
            if ($diterima) {
                $pesan = 'Selamat! Anda diterima sebagai mahasiswa.';
                $status = 'Diterima';
                $warna = '#4CAF50';
            } else {
                $pesan = 'Maaf, Anda tidak diterima sebagai mahasiswa.';
                $status = 'Tidak Diterima';
                $warna = '#f44336';
            }
            echo "<p style='color: $warna;'>$status</p>";
            echo "<p>$pesan</p>";
            ?>
        </div>
        <div class="details">
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>NIM:</strong> <?= $nim ?></p>
            <p><strong>Program Studi:</strong> <?= $prodi ?></p>
        </div>
        <div>
            <a href="#" class="button">Siakad</a>
            <a href="#" class="button">Scalsa</a>
        </div>
    </div>
</body>

</html>
