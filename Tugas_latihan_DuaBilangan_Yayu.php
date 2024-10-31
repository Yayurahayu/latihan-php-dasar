<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Bilangan</title>
</head>
<body>
    <h1>Penjumlahan Dua Bilangan</h1>
    <form method="post" action="">
        <label for="bilangan1">Bilangan Pertama:</label>
        <input type="number" name="bilangan1" required>
        <br><br>
        <label for="bilangan2">Bilangan Kedua:</label>
        <input type="number" name="bilangan2" required>
        <br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $hasil = $bilangan1 + $bilangan2;
        echo "<h2>Hasil Penjumlahan: $hasil</h2>";
    }
    ?>
</body>
</html>