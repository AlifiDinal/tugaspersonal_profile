<?php
session_start();
include '../../app.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $qSelect = "SELECT * FROM users WHERE email ='$email'";
    $result = mysqli_query($connect, $qSelect);
      
    if($result->num_rows > 0){
        $row = $result->fetch_object();

        if(password_verify($password, $row->password)){
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $row->username;

            echo "
                <script>
                    alert('Berhasil Login');
                    window.location.href='../../pages/dashboard/index.php';
                </script>    
            ";
        }else{
            echo "
                <script>
                    alert('Password Salah');
                    window.location.href='../../pages/auth/login.php';
                </script>
            ";   
        }
    }else{
        echo "
            <script>
                alert('Email salah atau belum terdaftar');
                window.location.href='../../pages/auth/login.php';
            </script>
        ";
    }
}
?>