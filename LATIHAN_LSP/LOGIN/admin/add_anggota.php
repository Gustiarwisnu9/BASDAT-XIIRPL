<html>
    <head>
        <title>tambah data anggota</title>
        <style>
            body {
                width: 90%;
                height: 60%;
                text-align: center;
                justify-content: center;
                align-items: center;
                margin-left: 100px;
                margin-top:-40px;
                background-image: linear-gradient( 293.5deg,  rgba(181,149,208,1) 3.2%, rgba(251,148,207,1) 9.9%, rgba(181,149,208,1) 22.9%, rgba(251,148,207,1) 36.4%, rgba(181,149,208,1) 50.1%, rgba(251,148,207,1) 61.1%, rgba(181,149,208,1) 71.2%, rgba(251,148,207,1) 84.2%, rgba(181,149,208,1) 92.2% );
                
            }

            h1 {
                margin-top: 20px;
                text-shadow: 2px 2px 1px grey;
                font-size: 35px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .container {
                width:400px;
                height: 405px;
                border: 1px solid black;
                margin:200px auto;
                background-color: #08AEEA;
                background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);
                border-radius: 5px;
                box-shadow: 7px 9px 9px rgba(0,0,0,0.8);
                padding: 10px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>
    </head>
    <center>
    <body>
        <div class="container">
        <h1>TAMBAH DATA ANGGOTA</h1>
        <form action="proses-tambah-anggota.php" method="post">
            <label>Nama</label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>No Telepon</label>
            <br>
            <input type="number" name="no_telp">
            <br>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat">
            <br>
            <label>Email</label>
            <br>
            <input type="text" name="email">
            <br>
            <label>Password</label>
            <br>
            <input type="text" name="password">
            <br>
            </br>
            <input type="submit" value="submit">
            <td>
            </td>
             <input type="reset" value="cancel">
        </form>
        </div>
        </center>
    </body>
</html>
