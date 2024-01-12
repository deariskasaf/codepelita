<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL MAGANG</title>
</head>
<body>
    <h1>PPDB SMK SYAFI'I AKROM</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No.Hp</th>
            <th>Pilihan Jurusan</th>
            <th>Jalur Pendaftaran</th>
            <th>Nama Asal Sekolah</th>
            <th>Alamat Asal Sekolah</th>
            <th>Dimanakah Anda Mendapatkan Info Tentang SMK SYAFI'I AKROM</th>
</tr>
<?php $i = 1; ?>
<?php foreach($karyawan as $row) : ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row['Nama']; ?></td>
        <td><?= $row['Tempat_lahir']; ?></td>
        <td><?= $row['Tanggal_Lahir']; ?></td>
        <td><?= $row['Alamat']; ?></td>
        <td><?= $row['No.Hp_siswa']; ?></td>
        <td><?= $row['Pilihan_jurusan']; ?></td>
        <td><?= $row['Jalur_Pendaftaran']; ?></td>
        <td><?= $row['Nama_Asal_Sekolah']; ?></td>
        <td><?= $row['Alamat_Asal_Sekolah']; ?></td>
        <td><?= $row['Dimanakah_Anda_Mendapatkan_Info_Tentang_SMKSA']; ?></td>
</tr>



<?php $i; ?>
<?php endforeach; ?>
</table>




    
</body>
</html>