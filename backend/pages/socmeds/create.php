<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<!--  Content  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Socmeds</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/socmeds/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="linkInput" class="form-label">Link Socmeds</label>
                        <input type="link" name="link" class="form-control" id="linkInput" placeholder="Masukan Link" required>
                    </div>

                    <div class="mb-3">
                       <label for="iconinput" class="form-label">Gambar</label>
                       <input type="file" name="icon" class="form-control" id="iconinput" placeholder="Masukan Gambar"
                       required>
                    </div>       

                    <button type="submit" class="btn btn-success" name="tombol" name="tombol">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>