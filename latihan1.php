<?php
$mahasiswa = [
	[
    "nama"      => "Tauhid Izzan", 
	"nim"       => "21.51.0017", 
	"jurusan"   => "Sistem Informasi", 
	"email"     => "tauhid_21510017@stimata.ac.id",
	"gambar"    => "gambar1.jpg"
    ],
	
    [
    "nama"      =>  "Abdullah", 
	"nim"       =>  "12345678", 
	"jurusan"   =>  "Teknologi Informasi", 
	"email"     => "tes@email.com",
	"gambar"    => "gambar2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ul>

    <?php
        foreach ($mahasiswa as $mhs):
    
    ?>
    
     <li>
     <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim= <?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    
    <?php endforeach; ?>
    </ul>

</body>
</html>