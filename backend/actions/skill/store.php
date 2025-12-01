<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $skill = escapeString($_POST['skill']);
    $percent = escapeString($_POST['percent']);
    $descripion = escapeString($_POST['descripion']);

    $qInsert = "INSERT INTO skill (skill, percent, description) VALUES('$skill', '$percent', '$descripton')";

    if (mysqli_query($connect, $qInsert)) {
        echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href='../../pages/skill/index.php';
                </script>    
            ";
    } else {
        echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    window.location.href='../../pages/skill/create.php';
                </script> 
                ";
    }
}
