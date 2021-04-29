<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php
    $userName = $_GET["userName"];
    $password = $_GET["password"];

    if ($userName=="Beitar" && $password=="LoveBeitar")
        echo "<h1> Welcome ".$userName."</h1>";
    else {
        echo "<h1 style='color:red;'> NO You are Hapoel! You are not Beitar! </h1>";
        echo "<h1> If You Love Beitar Try Again With UserName: Beitar And Password: LoveBeitar</h1>";
    }
    ?>
</body>

</html>