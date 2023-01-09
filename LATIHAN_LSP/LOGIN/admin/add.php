<html>
    <head>
        <title>tambah data buku</title>
        <style>

            body {
                text-align: center;
                justify-content: center;
                align-items: center;
                margin:200px;
                background-image: linear-gradient( 293.5deg,  rgba(181,149,208,1) 3.2%, rgba(251,148,207,1) 9.9%, rgba(181,149,208,1) 22.9%, rgba(251,148,207,1) 36.4%, rgba(181,149,208,1) 50.1%, rgba(251,148,207,1) 61.1%, rgba(181,149,208,1) 71.2%, rgba(251,148,207,1) 84.2%, rgba(181,149,208,1) 92.2% );
                
            }

            h1 {
                margin-top: 20px;
                text-shadow: 2px 2px 1px grey;
                font-size: 35px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .form {
                width:400px;
                height: 320px;
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
    <body>
       <div class="form">
           <h1>TAMBAH DATA BUKU</h1>
           <form action="proses-tambah.php" method="post">
            <table style="width: 10px;">
            <div class="tambah">
            <label>Judul Buku</label>
            <br>
            <input type="text" name="judul_buku">
            <br>
            <label>Pengarang</label>
            <br>
            <input type="text" name="pengarang">
            <br>
            <label>Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit">
            <br>
            <label>Penerbit</label>
            <br>
            <input type="text" name="penerbit">
            <br>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="cancel">
            </div>
            </table>
        </form>
        </div>
        </form>
    </body>
</html>
