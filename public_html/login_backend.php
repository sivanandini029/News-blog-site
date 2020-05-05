<?php
session_start();
include('config.php');
if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = 'select * from registered_users;';
    $result = mysqli_query($conn, $sql) or die('select query failed');
    $output = '<b style="color:red;">either username or password is invalid</b>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (strcasecmp($row['username'], $user) == 0 && strcasecmp($row['password'], $pass) == 0) {
                $_SESSION['username'] = $user;
                $_SESSION['userid'] = $row['user_id'];
                $output = '';
                break;
            }
        }
    }
    echo $output;
}
if (isset($_POST['registerUser']) && isset($_POST['registerPass']) && isset($_POST['registerName']) && isset($_POST['registerEmail'])) {
    $name = $_POST['registerName'];
    $user = $_POST['registerUser'];
    $pass = $_POST['registerPass'];
    $email = $_POST['registerEmail'];
    $output = 'Registered Successfully.';
    $sql = "insert into registered_users(name,username,password,email)values('{$name}','{$user}','{$pass}','{$email}')";
    $result = mysqli_query($conn, $sql) or die('Already Registered');
    echo $output;
}
