<?php

class ControllerAuth
{

    public function login()
    {
        require_once("../view/login/login.php");
    }

    public function regis()
    {
        require_once("../view/login/register.php");
    }

    public function proses_regis()
    {
        $sinyal = new Database;
        $db = $sinyal->getConnection();
        $username = $_POST['name'] ?? '';
        $password = $_POST['password'] ?? '';
        if (empty($username) || empty($password)) {
            header("Location: /register?error=empty_fields");
            exit();
        }
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $sql = "insert into usert VALUES (NULL, '$username','$password')";
        $query = mysqli_query($db, $sql);
        if ($query) {
            echo "<script>";
            echo 'alert("Berhasil Daftar.");';
            echo '</script>';
        } else {
            echo "<script>";
            echo 'alert("Pendaftaran Gagal.");';
            echo '</script>';
        }
    }
}
