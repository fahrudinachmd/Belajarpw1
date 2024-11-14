<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #3498db;
            font-size: 24px;
        }
        label {
            font-size: 14px;
            color: #333;
        }
        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .lulus {
            color: #2ecc71;
        }
        .gagal {
            color: #e74c3c;
        }
        .error {
            color: #f39c12;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Penilaian Siswa</h1>

    <form method="POST">
        <label for="nilai">Masukkan Nilai Ujian:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>

        <input type="submit" value="Cek Nilai">
    </form>

    <?php
    // Mengecek apakah form sudah disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Mengambil nilai ujian dari input form
        $nilai = $_POST['nilai'];

        // Memeriksa apakah nilai valid
        if ($nilai < 0 || $nilai > 100) {
            echo "<div class='error'>Masukkan nilai antara 0 dan 100!</div>";
        } else {
            // Logika untuk menentukan kelulusan siswa berdasarkan nilai
            if ($nilai >= 90) {
                echo "<div class='result lulus'>Nilai Anda: <strong>$nilai</strong> = A (Lulus)</div>";
            } elseif ($nilai >= 80) {
                echo "<div class='result lulus'>Nilai Anda: <strong>$nilai</strong> = B (Lulus)</div>";
            } elseif ($nilai >= 70) {
                echo "<div class='result lulus'>Nilai Anda: <strong>$nilai</strong> = C (Lulus)</div>";
            } elseif ($nilai >= 60) {
                echo "<div class='result gagal'>Nilai Anda: <strong>$nilai</strong> = D (Tidak Lulus)</div>";
            } else {
                echo "<div class='result gagal'>Nilai Anda: <strong>$nilai</strong> = E (Tidak Lulus)</div>";
            }
        }
    }
    ?>
</div>

</body>
</html>
