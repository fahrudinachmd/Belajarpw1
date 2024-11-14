<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kalkulator PHP</h1>

    <form method="POST">
        <label for="angka1">Angka Pertama:</label>
        <input type="number" id="angka1" name="angka1" required>

        <label for="angka2">Angka Kedua:</label>
        <input type="number" id="angka2" name="angka2" required>

        <label for="operasi">Pilih Operasi:</label>
        <select id="operasi" name="operasi" required>
            <option value="tambah">Penjumlahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (×)</option>
            <option value="bagi">Pembagian (÷)</option>
        </select>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Mengambil input dari form
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;
        $error = "";

        // Melakukan perhitungan berdasarkan operasi yang dipilih
        if ($operasi == 'tambah') {
            $hasil = $angka1 + $angka2;
        } elseif ($operasi == 'kurang') {
            $hasil = $angka1 - $angka2;
        } elseif ($operasi == 'kali') {
            $hasil = $angka1 * $angka2;
        } elseif ($operasi == 'bagi') {
            // Menambahkan pengecekan jika angka2 adalah 0
            if ($angka2 == 0) {
                $error = "Tidak bisa membagi dengan 0!";
            } else {
                $hasil = $angka1 / $angka2;
            }
        }

        // Menampilkan hasil perhitungan
        if ($error != "") {
            echo "<div class='result' style='color: red;'>$error</div>";
        } else {
            echo "<div class='result'>Hasil: $angka1 ";
            if ($operasi == 'tambah') {
                echo "+";
            } elseif ($operasi == 'kurang') {
                echo "-";
            } elseif ($operasi == 'kali') {
                echo "×";
            } elseif ($operasi == 'bagi') {
                echo "÷";
            }
            echo " $angka2 = $hasil</div>";
        }
    }
    ?>
</div>

</body>
</html>
