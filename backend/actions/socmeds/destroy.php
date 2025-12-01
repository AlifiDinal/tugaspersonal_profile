<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../../storages/socmeds/";
    
    if(!empty($socmeds->icon) && file_exists($storages . $socmeds->icon)){
        unlink($storages . $socmeds->icon);
    }

    $qDelete = "DELETE FROM socmeds WHERE id = '$socmeds->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));
    
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Dihapus');
                     window.location.href='../../pages/socmeds/index.php';
                </script>
            ";
         }else{
             echo "
                <script>
                     alert('Data Gagal Dihapus');
                     window.location.href='../../pages/socmeds/index.php';
                </script>
            ";
        }
?>