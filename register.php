<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $newUsername = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $newPassword = $_POST['password'];
    $conpassword= $_POST['conpassword'];
    
    $insertSql = "INSERT INTO register (name, email, phone, password, conpassword) 
                  VALUES ('$newUsername', '$email', '$phone', '$newPassword', '$conpassword')";
    if ($conn->query($insertSql) === TRUE) {
       
        echo "Signup successful!";
        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
