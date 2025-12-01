<?php
    include '../../app.php';

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
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew =  time() . ".png";
        
        $storages = "../../../storages/about/";

        if(move_uploaded_file($imageOld, $storages . $imageNew)){
            $qInsert = "INSERT INTO abouts(description, name, born, address, zib_code, email, phone,
            total_project, work, image) VALUES ('$description', '$name', '$born', '$address',
            '$zib_code', '$email', '$phone', '$total_project', '$work', '$imageNew')";

            mysqli_query($connect, $qInsert) or die(mysqli_eror($connect));
            echo "
                <script>
                     alert('Data Berhasil Ditambah');
                     window.location.href='../../pages/about/index.php';
                </script>
            ";
        }else{
             echo "
                <script>
                     alert('Data Gagal Ditambah');
                     window.location.href='../../pages/about/create.php';
                </script>
            ";
        }
    }

?>