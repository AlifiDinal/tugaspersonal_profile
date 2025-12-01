<?php
include '../../partials/header.php';
$currentPage = 'resume';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qResume = "SELECT * FROM resumes";
$result = mysqli_query($connect, $qResume) or die(mysqli_error($connect));
?>

<!--  Content  -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Halaman Resume</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Masukan Data Resume</li>
        </ol>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Riwayat</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Pekerjaan</th>
                                <th>Tempat</th>
                                <th>Deskripsi</th>
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
                                    <td><?= $item->date ?></td>
                                    <td><?= $item->job ?></td>
                                    <td><?= $item->place ?></td>
                                    <td style="width: 345px;"><?= $item->description ?></td>
                                    <td>
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning">Edit</a>
                                        <a href="../../actions/resume/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Hapus</a>
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