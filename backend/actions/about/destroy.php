<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../../storages/about/";
    
    if(!empty($about->image) && file_exists($storages . $about->image)){
        unlink($storages . $about->image);
    }

    $qDelete = "DELETE FROM abouts WHERE id = '$about->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));
    
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Dihapus');
                     window.location.href='../../pages/about/index.php';
                </script>
            ";
         }else{
             echo "
                <script>
                     alert('Data Gagal Dihapus');
                     window.location.href='../../pages/about/index.php';
                </script>
            ";
        }
?>