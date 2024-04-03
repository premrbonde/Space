<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['uaddr']) && isset($_POST['umobno'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    function validate_username($username){
        return preg_match('/^[a-zA-Z0-9]+$/', $username);
    }

    function validate_password($password){
        return strlen($password) >= 8;
    }

    function validate_phone_number($phone_number){
        return preg_match('/^\d{10}$/', $phone_number);
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $name = validate($_POST['name']);
    $uaddr = validate($_POST['uaddr']);
    $umobno = validate($_POST['umobno']);
    $re_pass = validate($_POST['re_password']);

    $user_data = 'uname='. $uname. '&name='. $name.  '&uaddr='. $uaddr. '&umobno='. $umobno;
    $user_data1 = '&name='. $name.  '&uaddr='. $uaddr. '&umobno='. $umobno;
    $user_data2 = 'uname='. $uname. '&name='. $name.  '&uaddr='. $uaddr;
    $user_data3 = '&name='. $name.  '&uaddr='. $uaddr. '&umobno='. $umobno;

    if (empty($uname) || !validate_username($uname)) {
        header("Location: signup.php?error=Username Should Contain Only Letters And Numbers&$user_data");
        exit();
    } elseif (empty($pass) || !validate_password($pass)) {
        header("Location: signup.php?error=Password Length Should Be Atleast 8 Characters&$user_data");
        exit();
    } elseif (empty($uaddr)) {
        header("Location: signup.php?error=Address Is Required&$user_data");
        exit();
    } elseif (empty($umobno) || !validate_phone_number($umobno)) {
        header("Location: signup.php?error=Invalid Mobile Number&$user_data");
        exit();
    } else if(empty($name)){
        header("Location: signup.php?error=Name Is Required&$user_data");
        exit();
    }elseif (empty($re_pass) || $pass !== $re_pass) {
        header("Location: signup.php?error=Confirm Password Do Not Match Password&$user_data");
        exit();
    } elseif (empty($name)) {
        header("Location: signup.php?error=Invalid Name&$user_data");
        exit();
    } else if(empty($umobno)){
        header("Location: signup.php?error=Mobile Is Required&$user_data");
        exit();
    }else if(empty($re_pass)){
        header("Location: signup.php?error=Confirm Password Is Required&$user_data");
        exit();
    } else {
        try {
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "SELECT * FROM users WHERE user_name=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $uname);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                header("Location: signup.php?error=The username Is Taken! Try Another&$user_data1");
                exit();
            } else {
               $sql2 = "INSERT INTO users(user_name, password, name, address, mobileno) VALUES(?, ?, ?, ?, ?)";
               $stmt2 = $conn->prepare($sql2);
               $stmt2->bind_param("sssss", $uname, $hashed_password, $name, $uaddr, $umobno);
               $stmt2->execute();
               if ($stmt2->affected_rows > 0) {
                    $_SESSION['user_name'] = $uname; // Fix: using $row['user_name'] which is not defined
                    $_SESSION['name'] = $name;
                    $_SESSION['id'] = $stmt2->insert_id; // Fix: using $row['id'] which is not defined
                    $_SESSION['address'] = $uaddr;
                    $_SESSION['mobileno'] = $umobno;
                    header("Location: signup.php?success=Account Has Been Created Successfully!");
                    exit();
               } else {
                    header("Location: signup.php?error=Unknown Error Occurred&$user_data");
                    exit();
               }
            }
        } catch (Exception $e) {
            header("Location: signup.php?error=Database error occurred: " . $e->getMessage());
            exit();
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
?>
