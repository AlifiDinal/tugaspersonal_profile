<?php
    include '../../app.php';

    if(isset($_POST['tombol'])){
       
        $title = escapestring($_POST['title']);
        $job = escapestring($_POST['job']);
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew =  time() . ".png";
        
        $storages = "../../../storages/projects/";

        if(move_uploaded_file($imageOld, $storages . $imageNew)){
             $qInsert ="INSERT INTO projects(title, job, image)
             VALUES ('$title', '$job', '$imageNew')";
              

            mysqli_query($connect, $qInsert) or die(mysqli_eror($connect));
            echo "
                <script>
                     alert('Data Berhasil Ditambah');
                     window.location.href='../../pages/projects/index.php';
                </script>
            ";
        }else{
             echo "
                <script>
                     alert('Data Gagal Ditambah');
                     window.location.href='../../pages/projects/create.php';
                </script>
            ";
        }
    }

?>