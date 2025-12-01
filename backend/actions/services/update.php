<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $job = escapeString($_POST['job']);
     
    $iconNew = $services->icon;
    $storages = "../../../storages/services/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['icon']['tmp_name'])) {
        $iconOld = $_FILES['icon']['tmp_name'];
        $iconNew = time() . '.png';

        //hapus gambar lama jika ada
        if (!empty($services->icon) && file_exists($storages . $services->icon)) {
            unlink($storages . $services->icon);
        }

        //simpan gambr baru
        move_uploaded_file($iconOld, $storages . $iconNew);
    }

    $qUpdate = "UPDATE services SET job='$job', icon='$iconNew' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href='../../pages/services/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    window.location.href='../../pages/services/create.php';
                </script> 
                ";
    }
}
