<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Ubah Data Socmeds</h5>
            </div>
            <div class="card-body">
                 <?php 
                    include '../../actions/socmeds/show.php';
                ?>
                 <form action="../../actions/socmeds/update.php?id=<?= $socmeds->id?>" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                       <label for="linkinput" class="form-label">Link Socmeds</label>
                       <input type="link" name="link" class="form-control" id="linkinput" 
                       required value="<?= $socmeds->link?>">
                    </div>

                     <div class="mb-3">
                         <img class="w-25" src="../../../storages/socmeds/<?= $socmeds->icon?>" alt="">
                       <label for="iconinput" class="form-label">Pilih Gambar</label>
                       <input type="file" name="icon" class="form-control" id="iconinput">
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