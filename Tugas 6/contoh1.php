<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Menggunakan PHP</title>
</head>
<body>
    <?
    echo "Hello Mahasiswa"
    ?>
<h2>Daftar Mahasiswa</h2>
    <ol>
        <?php
        for ($i =1; $i <=50; $i++)
            {
                echo "<li>Nama ke-$i</li>";
            }
        ?>

</body>
</html>
