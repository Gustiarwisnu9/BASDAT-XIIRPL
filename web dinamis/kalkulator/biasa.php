<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Biasa</title>
    <style>
        * {
            margin:0;
            padding: 0;
        }
        body {
            background-color: lightblue;
            font-family: Arial, Helvetica, sans-serif;
        }
        .kalkulator {
            width:700px;
            height:200px;
            border:3px solid black;
            display:flex ;
            align-items: center;
            justify-content: center;
            margin: 250px auto;
            background-color: lightgreen;
            border-radius: 10px;
        }
        .tombol {
            display: flex;
            justify-content: space-around;
        }
        .hasil {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="kalkulator">
    <center><h1>KALKULATOR BIASA</h1> <br>
    <form>  <!-- Bersifat GET secara default tanpa harus method -->
        <input type="number" name="angka1">
        <select name="operator">
            <option selected disabled>Pilih Operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2">
        <div style="margin-top:10px;">
        <div class="tombol">
        <button type="reset">Clear</button>
        <button type="submit">Hitung</button>
        </div>
        </div>
        <!-- Logika Kalkulator Biasa -->
        <?php 
        if ($_GET): 
            $angka1 = (double) @$_GET['angka1'];
            $angka2 = (double) @$_GET['angka2'];
            $operator =  @$_GET['operator'];
            //buat logika untuk penjumlahan
            switch ($operator){
                 case '+':
                    $hasil = $angka1+$angka2;
                    break;
                 case'-':
                    $hasil = $angka1-$angka2;
                    break;
                 case '*':
                    $hasil = $angka1*$angka2;
                    break;
                 case '/':
                    $hasil = $angka1/$angka2;
                    break;
            }
        ?>
        <div class="hasil">
        <div style="margin-top:10px">
            HASIL : <strong><?php  echo $hasil?></strong>
            </div>
        </div>
        <?php 
        endif?>

        <!-- End Logika -->
    </form></center></div>

</body>
</html>