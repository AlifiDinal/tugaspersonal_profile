<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../../storages/projects/";
    
    if(!empty($projects->image) && file_exists($storages . $projects->image)){
        unlink($storages . $projects->image);
    }

    $qDelete = "DELETE FROM projects WHERE id = '$projects->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));
    
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Dihapus');
                     window.location.href='../../pages/projects/index.php';
                </script>
            ";
         }else{
             echo "
                <script>
                     alert('Data Gagal Dihapus');
                     window.location.href='../../pages/projects/index.php';
                </script>
            ";
        }
?>