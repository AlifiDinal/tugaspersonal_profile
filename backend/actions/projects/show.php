<?php
    if(!isset($_GET['id'])){
        echo "
            <script>
                alert('Tidaak Bisa Memilih Id ini');
                window.location.href = '../../pages/projects/index,php';  
            </script>
        ";
    }

    $id = $_GET['id'];
    $qSelect = "SELECT * FROM projects WHERE  id = '$id'";

    $result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

    $projects = $result->fetch_object();
    if(!$projects){
            die("Data Tidak Ditemukan");
    }
?>