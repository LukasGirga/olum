<?php
require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olum.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">
    <script src="https://kit.fontawesome.com/936cc78463.js" crossorigin="anonymous"></script>
    <script>
        function myFunction(){
            var x = document.getElementById('mMenu');
            if(x.style.display === "block"){
                x.style.display = "none";
            } else{
                x.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <?php
    include('../app/views/header.php');
    include('../app/views/content.php');
    include('../app/views/footer.php');
    ?>
</body>