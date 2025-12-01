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
                <h5>Ditail Data Blog</h5>
            </div>
            <div class="card-body">
                <?php 
                    include '../../actions/blog/show.php';
                ?>
                 <form>

                   <div class="mb-3">
                       <label for="descriptioninput" class="form-label">Desctipsi</label>
                       <textarea name="description"  id="descriptioninput" class="form-control" placeholder="Masukan Descripsi" rows="5" disabled><?= $blog->description?></textarea >
                    </div>

                    <div class="mb-3">
                       <label for="dateinput" class="form-label">Tanggal</label>
                       <input type="date" name="date" class="form-control" value="<?= $blog->date?>" disabled>
                    </div>
                    
                  
                    <div class="mb-3">
                       <label for="authorinput" class="form-label">Penulis</label>
                       <input type="text"  name="author" class="form-control" value="<?= $blog->author?>" disabled>
                       
                    </div>

                    <div class="mb-3">
                       <label for="titleinput" class="form-label">Judul</label>
                       <input type="title"  name="title" class="form-control" value="<?= $blog->title?>" disabled>

                     <div class="mb-3"> 
                       <h6>Gambar</h6>
                        <img class="w-25" src="../../../storages/blog/<?= $blog->image?>" alt="">
                      
                      
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