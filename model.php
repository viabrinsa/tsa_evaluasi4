<?php
    //buat koneksi dengan database mqsql
    function buatKoneksi(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "dts_tsa";
        return mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    }
    function login(){
    include "model.php"; 
    $username = $_POST['username']; 
    $password = md5($_POST['password']); 
 
    $query = "select * from user where username ='$username' and 
    password='$password'"; 
    $result = mysqli_query($connect,$query); 
    $fechResult = mysqli_fetch_assoc($result); 
    $rowcount = mysqli_num_rows($result); 
 
    if ($rowcount>0) { 
        session_start(); 
        $_SESSION['username'] = $username; 
        $_SESSION['status'] = 'login'; 
    } 
 
    if ($fechResult['role']=='admin') { 
        header("Location: berandaadmin.php");  
    }elseif ($fechResult['role']=='user') { 
        header("Location: berandauser.php");    
    } 
    else { 
        header("Location: formlogin.php");
        // echo '<script type ="text/JavaScript">';  
        // echo 'alert("Username atau Password Anda Salah")';  
        // echo '</script>'; 
    } 
 
    mysqli_close($connect); 
    }
?>