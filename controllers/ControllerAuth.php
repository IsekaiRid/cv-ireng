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
        $sql = "insert into usert VALUES (NULL, '$username','$$hashedPassword')";
        $query = mysqli_query($db, $sql);
        if ($query) {
            $_SESSION['alert'] = [
                'title' => "Registration successful!",
                'message' => "You can now log in.",
                'icon' => "success"
            ];
            header("Location: /register");
            exit();
        } else {
            $_SESSION['alert'] = [
                'title' => "Registration erro",
                'message' => "You can now log in.",
                'icon' => "danger"
            ];
            header("Location: /");
            exit();
        }
    }


    public function login_proses()
    {
        $sinyal = new Database;
        $db = $sinyal->getConnection();
        $username = $_POST['name'] ?? '';
        $password = $_POST['password'] ?? '';
        $sql = "SELECT * FROM usert WHERE nama='$username'";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($query);
        $datapassword = isset($data['pw']) ? $data['pw'] : "";
        if (password_verify($password, $datapassword)) {
            $_SESSION['alert'] = [
                'title' => "Login successful!",
                'message' => "You can now log in.",
                'icon' => "success"
            ];
            header("Location: /");
            exit();
        } else {
            $_SESSION['alert'] = [
                'title' => "login erro",
                'message' => "You can now log in.",
                'icon' => "error"
            ];
            header("Location: /");
            exit();
        }
    }
}
