<?php
    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa"; /// karena query ke tabel mahasiswa
    $mahasiswas = tampildata($qmahasiswa); /// menghasilkan data mahasiswa dalam wadah
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | WEB INFORMATIKA 2026</title>
</head>
<body>
    <h1>
        WEB INFORMATIKA 2026             
    </h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td>
                <a href="profile.php">Profile</a>
            </td>
            <td>
                <a href="contact.php">Contact</a>
            </td>
            <td>
                <a href="mahasiswa.php">Data Mahasiswa</a>
            </td>
        </tr>
    </table>
    <h3>Data Mahasiswa</h3>
    <a href="inputdata.php">
        <button>Tambah Data</button>
    </a>
    <br>
    <br>
    <table border="1" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>       
        </tr> 
        <?php 
            $no = 1;
            foreach($mahasiswas as $mhs)
            {
        ?>       
            <tr>
                <td align="center"><?= $no ?></td>
                <td><?= $mhs["nama"] ?></td>
                <td align="center"><?= $mhs["nim"] ?></td>
                <td align="center"><?= $mhs["jurusan"] ?></td>
                <td align="center"><?= $mhs["email"] ?></td>
                <td><?= $mhs["no_hp"] ?></td>
                <td><img src="assets/images/<?= $mhs["foto"] ?>" width="70px" height="70px" /></td>
                <td>
                    <a href="ubahdata.php?id=<?= $mhs["id"] ?>"><button>Edit</button></a> | <a href="hapusdata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yaqueeenn??')" ><button>Hapus</button></a>
                </td>
            </tr>
        <?php
            $no++;
            }
        ?>
        
    </table>
    <hr/>
</body>
</html>