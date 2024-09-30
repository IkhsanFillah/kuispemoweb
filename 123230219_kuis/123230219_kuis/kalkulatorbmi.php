<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="d-flex">
            <h2 class="h21 text-light">123230219</h2>
            <div class="nav1">
                <a href="home.php" class="text-light">Home</a>
                <a href="about.php" class="text-light ms-2">About</a>
                <a href="kalkulatorbmi.php" class="text-light ms-2">Kalkulator BMI</a>
            </div>
        </div>
    </nav>
    <section class="container">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $satu = 18.5;
            $dua = 24.9;
            $tiga = 29.9;


            $tb = $_POST['tb'];
            $bb = $_POST['bb'];
            $BMI = $bb / ($tb * $tb);

            $Kategori = "NORMAL";

            echo "<div class='card'>";
            echo "<div class='card-header text-center mb-5'><h1>Hasil BMI Anda</h1>";
            echo "<div class='card-body'>";
            echo "<h3>Nama           : " . ($_POST['nama']) . "</h3>";
            echo "<h3>Usia           : " . ($_POST['usia']) . "</h3>";
            echo "<h3>Jenis Kelamin  : " . ($_POST['JK']) . "</h3>";
            echo "<h3>BMI            : " . ($BMI) . "</h3>";
            echo "<h3>Kategori       : " . ($Kategori) . "</h3>";
            echo "<a href='kalkulatorbmi.php'><button class='btn btn-primary'>coba lagi</button></a>";
            echo "</div>";
            echo "</div>";
        } else {

        ?>
        <div>
            <h1 class="text-center">Hitung BMI Anda</h1>
        </div>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" require>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="text" class="form-control" id="usia" name="usia" require>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="JK" id="laki" value="laki-laki" require>
                    <label for="laki-laki" class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="JK" id="perempuan" value="perempuan" require>
                    <label for="perempuan" class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="tb" class="form-label">Tinggi Badan (cm)</label>
                <input type="text" class="form-control" id="tb" name="tb">
            </div>
            <div class="mb-3">
                <label for="bb" class="form-label">Berat Badan (kg)</label>
                <input type="text" class="form-control" id="bb" name="bb">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Hitung BMI</button>
                <button type="submit" class="btn btn-danger">Reset</button>
            </div>
        </form>
        <?php
        }
        ?>
    </section>
</body>
</html>