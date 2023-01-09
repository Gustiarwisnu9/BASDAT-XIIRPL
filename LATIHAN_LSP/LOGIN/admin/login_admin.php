<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FOR ADMIN</title>
    <style>
        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            justify-content: center;
            align-items: center;
            margin-top:300px;
            background: linear-gradient(90deg, hsla(217, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);
        }
        img {
            width: 60px;
            height: 60px;
        }
        .admin {
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
<center>
<body>
    <div class="admin">
    <h1>ADMIN ACCESS</h1>
    <img src="security.png">
    <form action="proses_admin.php" method="post">
        <table>
            <tr>
                <td>ADMIN</td>
                <td>:</td>
                <td><input type="text" name="admin"id="admin"></td>
            </tr>
            <tr>
                <td>PASS</td>
                <td>:</td>
                <td><input type="password" name="pass"id="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <div class="lgn">
                <td><input type="submit" value="login"></td> </div>
            </tr>
            <tr>
                <td>user klik <a href="../user/login.php">sini</a></td>
            </tr>
        </table>
    </form>
    </center>
    </div>
</body>
</html>