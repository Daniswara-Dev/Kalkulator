<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="css/ui.css">
</head>
<body>
    <h2>KALKULATOR</h2>
    <form action="" method="post">
        angka1 <input type="text" name="angka1"><br>
        <br>
        angka2 <input type="text" name="angka2"><br>
        <br>
        operator <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit" name="eksekusi">Eksekusi</button>
    </form>

    <?php
    if(isset($_POST['eksekusi'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        // penjumlahan
        if ($operator == "+") {
            $hasil = $angka1 + $angka2;
        }

        // Pengurangan
        else if ($operator == "-") {
            $hasil = $angka1 - $angka2;
        }

        // Perkalian
        else if ($operator == "*") {
            $hasil = $angka1 * $angka2;
        }

        // Pembagian
        else if ($operator == "/") {
            $hasil = $angka1 / $angka2;  
        }

       echo "<div class='hasil'>";
       echo "<p>$angka1 $operator $angka2</p>";
       echo "<h3>= $hasil</h3>";
       echo "</div>";

    }
    ?>
</body>
</html>