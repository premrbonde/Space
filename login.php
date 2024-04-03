<?php 
session_start(); 
include "db_conn.php";

$max_login_attempts = 3;
$lockout_duration = 60;
$username_pattern = '/^[a-zA-Z0-9]+$/';

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= $max_login_attempts) {
        if (isset($_SESSION['lockout_time']) && time() < $_SESSION['lockout_time'] + $lockout_duration) {
            header("Location: index.php?error=Maximum Number Of Login Attempts Exceeded. Please Try Again Later.&disabled=true");
            exit();
        } else {
            unset($_SESSION['login_attempts']);
            unset($_SESSION['lockout_time']);
        }
    }

    if (empty($uname)) {
        header("Location: index.php?error=User Name Is Required");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Password Is Required");
        exit();
    } elseif (!preg_match($username_pattern, $uname)) {
        header("Location: index.php?error=Username Should Contain Only Letters And Numbers");
        exit();
    } else {
        try {
            $sql = "SELECT * FROM users WHERE user_name=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $uname);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if (password_verify($pass, $row['password'])) {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['address'] = $row['address'];
                    $_SESSION['mobileno'] = $row['mobileno'];

                    unset($_SESSION['login_attempts']);
                    unset($_SESSION['lockout_time']);

                    header("Location: home.php");
                    exit();
                } else {
                    if (isset($_SESSION['login_attempts'])) {
                        $_SESSION['login_attempts']++;
                    } else {
                        $_SESSION['login_attempts'] = 1;
                    }
                    if ($_SESSION['login_attempts'] >= $max_login_attempts) {
                        $_SESSION['lockout_time'] = time();
                    }
                    header("Location: index.php?error=Incorrect User Name or Password");
                    exit();
                }
            } else {
                if (isset($_SESSION['login_attempts'])) {
                    $_SESSION['login_attempts']++;
                } else {
                    $_SESSION['login_attempts'] = 1;
                }
                if ($_SESSION['login_attempts'] >= $max_login_attempts) {
                    $_SESSION['lockout_time'] = time();
                }
                header("Location: index.php?error=Incorrect User Name or Password");
                exit();
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
