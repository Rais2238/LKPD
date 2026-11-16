<?php
$nama = "Muhammad Rais Purwadi";
$kelas = "XI RPL";
$hobi = "Bermain Alat Musik";
$warna_latar = "red";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #f4f4f4; font-family: Arial; 
        }
        .kartu {
            background-color: <?php echo $warna_latar; ?>;
            color: white;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <h2><?php echo $nama; ?></h2>
        <p>Kelas: <?php echo $kelas; ?></p>
        <hr>
        <p>Hobi: <?php echo $hobi; ?></p>
    </div>
</body>
</html>