<?php

session_start();

if (isset($_POST['submit'])) {
   $name = htmlspecialchars($_POST['username']);
   $password = $_POST['password'];

   if ($name == 'John' && $password == '12345') {
     $_SESSION['username'] = $name;
     header('Location: ./home.php');
   }
   else{
    echo "Invalid Credentials";
   }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div style="margin:2rem 0;">
            <label for="name">Name</label>
            <input type="text" name="username">
        </div>

        <div style="margin:2rem 0;">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
</body>

</html>