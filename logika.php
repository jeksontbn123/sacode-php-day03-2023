<?php 
// cara penulisan array lama
$namaSiswa = array("Sboss", "jekson", "Acho");

// cara penulisan baru
$nama = ["Sboss", "Jekson", "Acho" ];

// var_dump($namaSiswa);

echo "<br>".$nama[0];
echo "<br>".$nama[1];
echo "<br>".$nama[2];

foreach($nama as $siswa)
{
    echo "<br>" .$siswa; 
}

// array multi demensi
$namaSacode =[
    [
        "namadepan" => "Jekson",
        "namabelakang" => "Tabuni",
        "usia" => "30",
        "alamat" => "Doyo Kab. Sentani"
    ],
    [
        "namadepan" => "Sboss",
        "namabelakang" => "Papua",
        "usia" => "30",
        "alamat" => "Doyo Kab. Sentani"
    ]
];

// Tampilkan data
$i = 0; foreach($namaSacode as $nama)
{
    echo "<br> <br> <br>Siswa No" .++$i ."<br>";
    echo "Nama : ". $nama["namadepan"]." ". $nama["namabelakang"] ."<br>";
    echo "Usia : ". $nama["usia"]."<br>";
    echo "Alamat : ". $nama["alamat"]."<br>";
}
?>

