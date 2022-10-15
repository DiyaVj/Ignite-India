<?php
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

//database
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
     $stmt = $conn->prepare("insert into contact(name, email, text)
        values(?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $text);
        $stmt->execute();
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
?>