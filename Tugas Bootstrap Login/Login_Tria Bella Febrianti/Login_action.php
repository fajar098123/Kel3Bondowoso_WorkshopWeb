<?php
    $login =  [
        [
            'username' => "Bella",
            'password' => "123",
            'level' => "1"
        ],
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: web_boostrap");
                die();
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
?>