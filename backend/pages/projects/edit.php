<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Ubah Data Projects</h5>
            </div>
            <div class="card-body">
                 <?php 
                    include '../../actions/projects/show.php';
                ?>
                 <form action="../../actions/projects/update.php?id=<?= $projects->id?>" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                       <label for="titleinput" class="form-label">Judul</label>
                       <input type="text" name="title" class="form-control" id="itleinput" 
                       required value="<?= $projects->title?>">
                    </div>

                     <div class="mb-3">
                       <label for="jobinput" class="form-label">Pekerjaan</label>
                       <input type="text" name="job" class="form-control" id="jobinput" 
                       required value="<?= $projects->job?>">
                    </div>


                     <div class="mb-3">
                         <img class="w-25" src="../../../storages/projects/<?= $projects->image?>" alt="">
                       <label for="imageinput" class="form-label">Pilih Gambar</label>
                       <input type="file" name="image" class="form-control" id="imageinput">
                    </div>

                    <button typ="submid" class="btn btn-success" name="tombol">Ubah</button>
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