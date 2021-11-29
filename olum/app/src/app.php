<?php
if(isset($_POST['submit'])){
    
    $vardas=trim($_POST['vardas']);
    $email=trim($_POST['email']);
    $numeris=trim($_POST['numeris'] ?? "");
    $message=trim($_POST['message']);

if(!empty($vardas) && !empty($email) && !empty($numeris) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        include 'db.php';
}
}
}



?>