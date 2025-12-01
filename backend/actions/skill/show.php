<?php
if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak bisa memilih ID ini');
            window.location.href = '../../pages/skill/index.php'
        </script>
        ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM skill WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$Skill = $result->fetch_object();
if (!$Skill) {
    die("Data tidak ditemukan");
}

?>
