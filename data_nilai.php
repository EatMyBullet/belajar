<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <scrip src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div>&nbsp;</div>
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-gray ">
                <h4 style="text-align: center;margin-bottom: 5px">TABEL DATA NILAI MAHASISWA</h4>
            </div>
            <div class="card-header bg-gray">
            <a href="index.php" class="btn btn-primary btn-mb">Tambah Data</a>
            </div>
           
            <div class="card body">
                <table class="table table-bordered">
                    <tr>
                        <th>NPM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>KELAS</th>
                        <th>MATA KULIAH</th>
                        <th>HARIAN</th>
                        <th>TUGAS</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>RATA-RATA</th>
                        <th>AKSI</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi, "select * from nilai");
                    $no = 1;
                    while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                            <td><?php echo $row[6]; ?></td>
                            <td><?php echo $row[7]; ?></td>
                            <td><?php echo $row[8]; ?></td>
                            <td>
                                <a href="edit_nilai.php?npm=<?php echo $row[0]?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?npm=<?php echo $row[0]?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>

