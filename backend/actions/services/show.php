<?php
if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak bisa memilih ID ini');
            window.location.href = '../../pages/services/index.php'
        </script>
        ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM services WHERE id= '$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$services = $result->fetch_object();
if (!$services) {
    die("Data tidak ditemukan");
}
