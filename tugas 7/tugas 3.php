<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Nama Hari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
        .valid {
            color: #2ecc71;
        }
        .error {
            color: #e74c3c;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Menampilkan Nama Hari</h1>

    <form method="POST">
        <label for="day">Masukkan Nomor Hari (1-7):</label>
        <input type="number" id="day" name="day" min="1" max="7" required>

        <input type="submit" value="Tampilkan Hari">
    </form>

    <?php
    // Mengecek apakah form sudah disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Mengambil input hari dari form
        $day = $_POST['day'];

        // Menggunakan switch-case untuk menentukan nama hari
        switch ($day) {
            case 1:
                $day_name = "Senin";
                break;
            case 2:
                $day_name = "Selasa";
                break;
            case 3:
                $day_name = "Rabu";
                break;
            case 4:
                $day_name = "Kamis";
                break;
            case 5:
                $day_name = "Jumat";
                break;
            case 6:
                $day_name = "Sabtu";
                break;
            case 7:
                $day_name = "Minggu";
                break;
            default:
                $day_name = "Input tidak valid! Harap masukkan angka antara 1 sampai 7.";
        }

        // Menampilkan hasil
        if ($day >= 1 && $day <= 7) {
            echo "<div class='result valid'>Hari ke-$day adalah <strong>$day_name</strong>.</div>";
        } else {
            echo "<div class='result error'>$day_name</div>";
        }
    }
    ?>
</div>

</body>
</html>
