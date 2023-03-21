<?php 

    $namaSiswa = ['elia', 'obet', 'aldi', 'grace', 'delvi', 'paul', 'melpen'];

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
            "usia" => "33",
            "alamat" => "Doyo Kab. Sentani"
        ],
        [
            "namadepan" => "Aldi",
            "namabelakang" => "BHC",
            "usia" => "31",
            "alamat" => "Doyo Kab. Sentani"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data Dari Array</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body{
            background-color: #717171;
            color: white;
            /* font-family: Impact; */
        }
        table, tr, td, th{
            border : 1px solid black;            
        }
        table{
            text-align: center;
            width: 100%;
            padding-top: 25px;
         
        }
        th{
            background-color:blue ;
            font-family: Impact;
        }
    </style>

</head>
<body>
    <h3>Data Siswa</h3>
    <table class="table-auto border border-solid">
        <tr class="border-solid">
            <td>No</td>
            <td>Nama</td>          
        </tr>
        <?php $i=0; foreach($namaSiswa as $siswa) : ?>
        <tr class="border-solid">
            <td> <?php echo ++$i ?></td>
            <td> <?php echo $siswa ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <br> <br> <br>
    <h3>Data Lengkap Siswa</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Usia</th>
        </tr>
        <?php $i=0; foreach($namaSacode as $siswa) : ?>
            <tr>
                <td><?= ++$i ?></td>
                <td><?= $siswa['namadepan']?><?=$siswa['namabelakang']?></td>
                <td><?= $siswa['alamat'] ?></td>
                <td><?= $siswa['usia']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>