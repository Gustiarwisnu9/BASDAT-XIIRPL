<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get dan Post</title>
</head>
<body>
    <form action="">
        <div>
            <label for="Nama">Nama</label><br>
            <input type="text" name="nama" placeholder="masukin nama">
        </div>
        <div>
            <label for="Email">Email</label><br>
            <input type="email" name="email" placeholder="masukin email">
        </div><br>
        <div>
            <button>Submit</button>
        </div>

        <!-- @berfungsi untuk mengubah -->
        <?php
        $nama = @$_GET['nama'];
        $email = @$_GET['email'];

        echo "Nama = {$nama} <br> ";
        echo "Email = {$email}";

        ?>

    </form>
</body>
</html>