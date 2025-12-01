<?php
    include '../../app.php';
    include './show.php';

    
    $qDelete = "DELETE FROM contact WHERE id = '$contact->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));
    
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Dihapus');
                     window.location.href='../../pages/contact/index.php';
                </script>
            ";
         }else{
             echo "
                <script>
                     alert('Data Gagal Dihapus');
                     window.location.href='../../pages/contact/index.php';
                </script>
            ";
        }
?>