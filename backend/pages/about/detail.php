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
                <h5>DitaAil Data About</h5>
            </div>
            <div class="card-body">
                <?php 
                    include '../../actions/about/show.php';
                ?>
                 <form>

                   <div class="mb-3">
                       <label for="descriptioninput" class="form-label">Desctipsi</label>
                       <textarea name="description"  id="descriptioninput" class="form-control" placeholder="Masukan Descripsi" rows="5" disabled><?= $about->description?></textarea >
                    </div>


                    <div class="mb-3">
                       <label for="nameinput" class="form-label">Nama</label>
                       <input type="text" class="form-control" value="<?= $about->name?>" disabled>
                    </div>

                    <div class="mb-3">
                       <label for="borninput" class="form-label">Tanggal Lahir</label>
                       <input type="date" class="form-control" value="<?= $about->born?>" disabled>
                    </div>
                    
                  
                    <div class="mb-3">
                       <label for="zib_codeinput" class="form-label">Kode Pos</label>
                       <input type="number" class="form-control" value="<?= $about->zib_code?>" disabled>
                       
                    </div>

                    <div class="mb-3">
                       <label for="emailinput" class="form-label">email</label>
                       <input type="email"  class="form-control" value="<?= $about->email?>" disabled>
                        
                    </div>
                    <div class="mb-3">
                       <label for="phoneinput" class="form-label">No Telpone</label>
                       <input type="text" class="form-control"   value="<?= $about->phone?>" disabled>
                    
                    </div>
                    <div class="mb-3">
                       <label for="total_projectinput" class="form-label">Total Project</label>
                       <input type="number" class="form-control"  value="<?= $about->total_project?>" disabled>
                       
                    </div>

                     <div class="mb-3">
                       <label for="workinput" class="form-label">Pekerjaan Sekarang</label>
                       <input type="text"  class="form-control"value="<?= $about->work?>" disabled>
                        
                    </div>

                      <div class="mb-3">
                       <label for="addressinput" class="form-label">Alamat</label>
                       <textarea  class="form-control" placeholder="Masukan Alamat" rows="5" disabled><?= $about->address?></textarea >
                    </div>

                     <div class="mb-3"> 
                       <h6>Gambar</h6>
                        <img class="w-25" src="../../../storages/about/<?= $about->image?>" alt="">
                      
                      
                    </div>

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