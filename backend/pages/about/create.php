<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qAbout = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
?>

<!--  Content  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data About</h5>
            </div>
            <div class="card-body">
                 <form action="../../actions/about/store.php" method="POST" enctype="multipart/form-data">
                     <div>
                        <div class="mb-3">
                       <label for="descriptioninput" class="form-label">Desctipsi</label>
                       <textarea name="description"  id="descriptioninput" class="form-control" placeholder="Masukan Descripsi" rows="5"><?= $about->description?></textarea >
                    </div>

                    <div class="mb-3">
                       <label for="nameinput" class="form-label">Nama</label>
                       <input type="text" name="name" class="form-control" id="nameinput" placeholder="Masukan Nama"
                       required>
                    </div>

                    <div class="mb-3">
                       <label for="borninput" class="form-label">Tanggal Lahir</label>
                       <input type="date" name="born" class="form-control" id="borninput" placeholder="Masukin Tanggal Lahir Anda"
                       required>
                    </div>
                    
                  
                    <div class="mb-3">
                       <label for="zib_codeinput" class="form-label">Kode Pos</label>
                       <input type="number" name="zib_code" class="form-control" id="zib_codeinput" placeholder="Masukan Kode Pos"
                       required>
                    </div>

                    <div class="mb-3">
                       <label for="emailinput" class="form-label">email</label>
                       <input type="email" name="email" class="form-control" id="emailinput" placeholder="Masukan Email"
                       required>
                    </div>
                    <div class="mb-3">
                       <label for="phoneinput" class="form-label">No Telpone</label>
                       <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="Masukan No Telpon"
                       required>
                    </div>
                    <div class="mb-3">
                       <label for="total_projectinput" class="form-label">Total Project</label>
                       <input type="number" name="total_project" class="form-control" id="total_projectinput" placeholder="Masukan Total project"
                       required>
                    </div>

                     <div class="mb-3">
                       <label for="workinput" class="form-label">Pekerjaan Sekarang</label>
                       <input type="text" name="work" class="form-control" id="workinput" placeholder="Masukan Pekerjaan Anda Sekarang"
                       required>
                    </div>

                      <div class="mb-3">
                       <label for="addressinput" class="form-label">Alamat</label>
                       <textarea name="address"  id="addressinput" class="form-control" placeholder="Masukan Alamat" rows="5">
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