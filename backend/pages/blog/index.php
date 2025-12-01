<?php
   include '../../partials/header.php';
   include '../../partials/navbar.php';

   $currentPage = 'blog';

   include '../../partials/sidebar.php';
   
$qblogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $qblogs) or die(mysqli_error($connect));
?>

<!-- content -->
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Halaman Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Masukan Data Blog</li>
        </ol>

        <div class="row">
            <div class="col-12">   
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                         <h5>Data Table Blog</h5>
                        <br>
                        <a href="./create.php" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Penulis/Pembuat</th>
                                    <th>Judul</th>
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
                                        <td>
                                            <img src="../../../storages/blog/<?= $item->image ?>" alt="" width="100" height="100">
                                        </td>
                                        <td><?= $item->date ?></td>
                                        <td><?= $item->author ?></td>
                                        <td><?= $item->title ?></td>
                                        <td>
                                            <a href="./detail.php?id=<?= $item->id?>" class="btn btn-success">Detail</a>
                                            <a href="./edit.php?id=<?= $item->id?>" class="btn btn-warning">Edit</a>
                                             <a href="../../actions/blog/destroy.php?id=<?= $item->id?>"
                                            class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
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
        </div>
    </div>
</main>
  

<?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
?>
            
