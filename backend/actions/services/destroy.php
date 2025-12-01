<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/services/";

//Hapus gambar jika aada
if (!empty($services->image) && file_exists($storages . $services->image)) {
    unlink($storages . $services->image);
}

//hapus data
$qDelete = "DELETE FROM services WHERE id = '$services->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

//cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    window.location.href='../../pages/services/index.php';
                </script>    
            ";
} else {
    echo "
                    <script>
                    alert('Data Gagal Dihapus');
                    window.location.href='../../pages/services/create.php';
                </script> 
                ";
}
