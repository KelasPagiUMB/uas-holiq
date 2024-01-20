<?php
include './koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-8 col-sm-10 col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Daftar Data</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Matkul</th>
                                <th>SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';

                            $data = mysqli_query($koneksi, 'select mahasiswa.nama, matkul.nama AS matkul, sks.jml_sks AS sks FROM mahasiswa JOIN matkul_mhs AS krs ON krs.id_mhs=mahasiswa.id_mhs JOIN matkul ON krs.id_matkul=matkul.id_matkul JOIN sks ON sks.id_sks=matkul.id_sks;');

                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?= $d['nama']; ?></td>
                                    <td><?= $d['matkul']; ?></td>
                                    <td><?= $d['sks']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>