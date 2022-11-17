<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan metode POST</title>
</head>
<body>
    <h1>Menggunakan Metode POST</h1>
    <form method="POST">
        <!-- Passing Data di dalam body request tanpa menampilkan secara url -->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div> <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div> <br>
            <button>Login</button>
        </div>
        <?php
        $email = @$_POST['email'];
        $password = @$_POST['password'];

        echo "Email = {$email} <br>";
        echo "Password = {$password}";

        ?>
    </form>
</body>
</html>


