<?php
    include '../../app.php';
    include './show.php';

    if(isset($_POST['tombol'])){
        $title = escapestring($_POST['title']);
        $job = escapestring($_POST['job']);

        $imageNew = $projects->image;
        $storages = "../../../storages/projects/";

        if(!empty($_FILES['image']['tmp_name'])){
            $imageOld = $_FILES['image']['tmp_name'];
            $imageNew = time() . '.png';
         
            if(!empty($projects->image) && file_exists($storages . $projects->image)){
                unlink($storages . $projects->image);
           }

           move_uploaded_file($imageOld, $storages . $imageNew);
        }

        $qUpdate  = "UPDATE projects SET title='$title', job='$job',
        image='$imageNew' WHERE id='$id'";

        $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Diubah');
                     window.location.href='../../pages/projects/index.php';
                </script>
            ";
         }else{
                echo "
                    <script>
                        alert('Data Gagal Diubah');
                        window.location.href='../../pages/projects/create.php';
                    </script>
                ";
        }
    }
?>