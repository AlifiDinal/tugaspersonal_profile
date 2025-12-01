<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qblog = "SELECT * FROM blogs";
$result = mysqli_query($connect, $qblog) or die(mysqli_error($connect));
?>

<!--  Content  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Blog</h5>
            </div>
            <div class="card-body">
                 <form action="../../actions/blog/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                       <label for="authorinput" class="form-label">Nama  Pembuat</label>
                       <input type="text" name="author" class="form-control" id="authorinput" placeholder="Masukan Nama Pembuat"
                       required>
                    </div>

                    <div class="mb-3">
                       <label for="dateinput" class="form-label">Tanggal </label>
                       <input type="date" name="date" class="form-control" id="dateinput" placeholder="Masukin Tanggal Pembuatan"
                       required>
                    </div>
                   
                    <div class="mb-3">
                       <label for="titleinput" class="form-label">Judul</label>
                       <input type="text" name="title" class="form-control" id="titleinput" placeholder="Masukan judul"
                       required>
                    </div>                 

                      <div class="mb-3">
                       <label for="descriptioninput" class="form-label">Deskripsi</label>
                       <textarea name="description"  id="descriptioninput" class="form-control" placeholder="Masukan deskripsi" rows="5">
                       </textarea>
                    </div>

                     <div class="mb-3">
                       <label for="imageinput" class="form-label"> Gambar</label>
                       <input type="file" name="image" class="form-control" id="imageinput" placeholder="Masukan Gambar "
                       required>
                    </div>

                    <button typ="submid" class="btn btn-success" name="tombol">Tambah</button>
                    <a href="./index.php" class="btn btn-primary">Kembali</a>

                 </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>