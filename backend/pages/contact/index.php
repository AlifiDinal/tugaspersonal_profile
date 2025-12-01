<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
$currentPage = 'contact';
include '../../partials/navbar.php';

// Ambil data contact dari database
$qContacts = "SELECT * FROM contact";
$result = mysqli_query($connect, $qContacts) or die(mysqli_error($connect));
?>

<!-- Content -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Halaman Contact</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Masukan Data Contact</li>
        </ol>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Contact</h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):
                            ?>
                                <tr>
                                 
                                    <td><?= $item->name ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->subject ?></td>
                                    <td><?= $item->message ?></td>
                                    <td>
                                        <a href="../../actions/contact/destroy.php?id=<?= $item->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus contact ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endwhile;

                            if ($no === 1): // Tidak ada data
                            ?>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data Contact.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>