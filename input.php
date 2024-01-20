<?php
include './koneksi.php';

if (!empty($_POST['save'])) {
    $idMhs = $_POST['mahasiswa'];
    $idMatkul = $_POST['matkul'];

    $a = mysqli_query($koneksi, "INSERT INTO matkul_mhs (id_mhs, id_matkul) VALUES ('$idMhs', '$idMatkul')");

    if ($a) {
        header('location:index.php');
    } else {
        echo mysqli_error($koneksi);
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input SKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-8 col-sm-10 col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Input SKS</h2>
                    <form method="post">
                        <div class="mb-3">
                            <label for="mahasiswa" class="form-label">Mahasiswa</label>
                            <select name="mahasiswa" id="mahasiswa" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php
                                $data = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');

                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <option value="<?= $d['id_mhs']; ?>"><?= $d['nama']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="matkul" class="form-label">Matkul</label>
                            <select name="matkul" id="matkul" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php
                                $data = mysqli_query($koneksi, 'SELECT * FROM matkul JOIN sks ON sks.id_sks=matkul.id_sks');

                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <option value="<?= $d['id_matkul']; ?>"><?= $d['nama']; ?> (<?= $d['jml_sks']; ?> SKS)</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" name="save" class="btn btn-primary" value="SUBMIT" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>