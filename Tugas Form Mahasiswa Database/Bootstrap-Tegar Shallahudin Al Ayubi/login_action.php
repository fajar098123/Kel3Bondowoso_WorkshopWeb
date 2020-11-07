<?php
    $login =  [
        [
            'username' => "tegar",
            'password' => "12345",
            'level' => "1"
        ],
        [
            'username' => "udin",
            'password' => "12345",
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'Karyawan';
                header("Location: web_bootstrap/dashboard.php");
                die();
        }else {
            echo "Username atau password salah";
            die();
        }    
    }
?>