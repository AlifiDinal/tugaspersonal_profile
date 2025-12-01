<?php
    include '../../app.php';
    include './show.php';

    if(isset($_POST['tombol'])){
        $link = escapestring($_POST['link']);
       
        $iconNew = $socmeds->icon;
        $storages = "../../../storages/socmeds/";

        if(!empty($_FILES['icon']['tmp_name'])){
            $iconOld = $_FILES['icon']['tmp_name'];
            $iconNew = time() . '.png';
         
            if(!empty($socmeds->icon) && file_exists($storages . $socmeds->icon)){
                unlink($storages . $socmeds->icon);
           }

           move_uploaded_file($iconOld, $storages . $iconNew);
        }

        $qUpdate  = "UPDATE socmeds SET link='$link', icon='$iconNew' WHERE id='$id'";

        $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Diubah');
                     window.location.href='../../pages/socmeds/index.php';
                </script>
            ";
         }else{
                echo "
                    <script>
                        alert('Data Gagal Diubah');
                        window.location.href='../../pages/socmeds/create.php';
                    </script>
                ";
        }
    }
?>