<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Gais</title>
    <style>
        body {
            margin:200px auto;
            justify-content: center;
            align-items: center;
            margin-top:300px;
            background: linear-gradient(90deg, hsla(217, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);
        }
        img {
            width: 55px;
            height: 55px;
        }
        .user {
            width:400px;
                height: 320px;
                border: 1px solid black;
                margin-top:-100px;
                background-color: #08AEEA;
                background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
                border-radius: 5px;
                box-shadow: 7px 9px 9px rgba(0,0,0,0.8);
                padding: 10px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a {
            text-decoration: none; 
            font-weight: bolder;
            color: red;
        }
    </style>
</head>
<body>
    <center>
        <div class="user">
    <h1>USER ACCESS</h1>
    <img src="profile-user.png">
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>EMAIL</td>
                <td>:</td>
                <td><input type="email" name="email"id="email"></td>
            </tr>
            <tr>
                <td>PASS</td>
                <td>:</td>
                <td><input type="password" name="pass"id="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>
            <tr>
                <td>admin klik <a href="../admin/">sini</a></td>
            </tr>
        </table>
    </form>
    </div>
</center>
</body>
</html>