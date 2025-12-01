<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qProjects = "SELECT * FROM projects";
$result = mysqli_query($connect, $qProjects) or die(mysqli_error($connect));
?>

<!--  Content  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Projects</h5>
            </div>
            <div class="card-body">
                 <form action="../../actions/projects/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                       <label for="titleinput" class="form-label">Judul</label>
                       <input type="text" name="title" class="form-control" id="titleinput" placeholder="Masukan Judul"
                       required>
                    </div>                   
                   
                    <div class="mb-3">
                       <label for="jobinput" class="form-label">Pekerjaan</label>
                       <input type="text" name="job" class="form-control" id="jobinput" placeholder="Masukan Pekerjaan"
                       required>
                    </div>                 

                    <div class="mb-3">
                       <label for="imageinput" class="form-label">Gambar</label>
                       <input type="file" name="image" class="form-control" id="imageinput" placeholder="Masukan Gambar"
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