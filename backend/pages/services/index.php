<?php
include '../../partials/header.php';
$currentPage = 'services';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$services = "SELECT * FROM services";
$result = mysqli_query($connect, $services) or die(mysqli_error($connect));
?>

<!--  Content  -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Halaman Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Masukan Data Service</li>
        </ol>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Servis</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pekerjaan</th>
                                <th>Ikon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?=$item->job?></td>
                                    <td>
                                        <img src="../../../storages/services/<?=$item->icon?>" alt="Gambar" width="100" height="100">
                                    </td>
                                    <td>
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning">Edit</a>
                                        <a href="../../actions/services/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Hapus</a>
                                    </td>
                                </tr>

                            <?php
                                $no++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>