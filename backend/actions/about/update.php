<?php
    include '../../app.php';
    include './show.php';

    if(isset($_POST['tombol'])){
        $description = escapestring($_POST['description']);
        $name = escapestring($_POST['name']);
        $born = escapestring($_POST['born']);
        $address = escapestring($_POST['address']);
        $zib_code = escapestring($_POST['zib_code']);
        $email = escapestring($_POST['email']);
        $phone = escapestring($_POST['phone']);
        $total_project = escapestring($_POST['total_project']);
        $work = escapestring($_POST['work']);
        
        $imageNew = $about->image;
        $storages = "../../../storages/about/";

        if(!empty($_FILES['image']['tmp_name'])){
            $imageOld = $_FILES['image']['tmp_name'];
            $imageNew = time() . '.png';
         
            if(!empty($about->image) && file_exists($storages . $about->image)){
                unlink($storages . $about->image);
           }

           move_uploaded_file($imageOld, $storages . $imageNew);
        }

        $qUpdate  = "UPDATE abouts SET description='$description', name='$name', born='$born', address='$address',
        zib_code='$zib_code', email='$email', phone='$phone', total_project='$total_project',
        work='$work', image='$imageNew' WHERE id='$id'";

        $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
        if($result){
              echo "
                <script>
                     alert('Data Berhasil Diubah');
                     window.location.href='../../pages/about/index.php';
                </script>
            ";
         }else{
             echo "
                <script>
                     alert('Data Gagal Diubah');
                     window.location.href='../../pages/about/create.php';
                </script>
            ";
        }
    }
?>