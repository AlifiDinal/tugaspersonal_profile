<?php
    if(!isset($_GET['id'])){
        echo "
            <script>
                alert('Tidaak Bisa Memilih Id ini');
                window.location.href = '../../pages/socmeds/index,php';  
            </script>
        ";
    }

    $id = $_GET['id'];
    $qSelect = "SELECT * FROM socmeds WHERE  id = '$id'";

    $result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

    $socmeds = $result->fetch_object();
    if(!$socmeds){
            die("Data Tidak Ditemukan");
    }
?>