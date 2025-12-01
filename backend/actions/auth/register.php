<?php
    include '../../app.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    

    $qInsert = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

    if (mysqli_query($connect, $qInsert)) {
        echo "
            <script>
                alert('Akun Berhasil Dibuat');
                window.location.href='../../pages/auth/login.php';
            </script>    
        ";
    } else {
        echo "
            <script>
                alert('Akun Gagal Dibuat : " . mysqli_error($connect) . "');
                window.location.href='../../pages/auth/register.php';
            </script> 
    ";
}
}

?>