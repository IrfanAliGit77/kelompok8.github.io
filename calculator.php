<!-- PHP untuk menghilangkan semua text errorr -->
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING))
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styleCal.css">
  <script language="javascript" src="./calculator.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <title>Kalkulator Scientific</title>
  <style type="text/css">
    .tab{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        background-color: lightskyblue;
    }

    .teh, .ted {
        text-align: left;
        padding: 16px;
    }

    .ter:nth-child(even){
        background-color: #f2f2f2;
    }
    form{
      text-align: left;
    }
    .calculator{
      margin-left: 37%;
    }
    body{
      background-color: #80BD9E;
    }
  </style>
</head>
<body>
  <br>
  <h1>TABEL BIODATA MAHASISWA</h1>
  <form method="get">
    <tr>
        <td> Pilih Absen </td>
        <td> <input type="number" name="absen"> </td>
      </tr>
      <tr>
        <td> <input type="submit" name="tambah" value=" Tampilkan "> </td>
      </tr>
  </form><br>
  <table class="tab">
    <tr class="ter">
      <th class="teh"> NIM </th>
      <th class="teh"> Nama </th>
      <th class="teh"> Kelas </th>
      <th class="teh"> Absen </th>
      <th class="teh"> Alamat </th>
      <th class="teh"> Email </th>
      <th class="teh"> Tanggal Lahir </th>
    </tr>
    <?php 
      include "koneksi.php";

      $absen = $_GET['absen'];

      $query = "SELECT * FROM biodata WHERE absen = $absen";
      $result = mysqli_query($connect, $query);

      if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr class="ter">
      <td class="ted"> <?php echo $row["nim"] ?> </td>
      <td class="ted"> <?php echo $row["nama"] ?> </td>
      <td class="ted"> <?php echo $row["kelas"] ?> </td>
      <td class="ted"> <?php echo $row["absen"] ?> </td>
      <td class="ted"> <?php echo $row["alamat"] ?> </td>
      <td class="ted"> <?php echo $row["email"] ?> </td>
      <td class="ted"> <?php echo $row["tanggalLahir"] ?> </td>
    <?php
        }
      }
      else{
        echo "Silahkan Pilih Absen Terlebih Dahulu";
      }
    ?>
    </tr>
  </table>
<br>
<h1>CALCULATOR SCIENTIFIC</h1><br><br>
    <form name="sci-calc">
 <table class="calculator" cellspacing="0" cellpadding="1" >
   <tr>
     <td colspan="5"><input id="display" name="display" value="0" size="28" maxlength="25"></td>
   </tr>
   <tr>
     <td><input type="button" class="btnTop" name="btnTop" value="C" onclick="this.form.display.value=  0 "></td>
     <td><input type="button" class="btnTop" name="btnTop" value="<--" onclick="deleteChar(this.form.display)"></td>
     <td><input type="button" class="btnTop" name="btnTop" value="=" onclick="if(checkNum(this.form.display.value)) { compute(this.form) }"></td>
     <td><input type="button" class="btnOpps" name="btnOpps" value="&#960;" onclick="addChar(this.form.display,'3.14159265359')"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="%" onclick=" percent(this.form.display)"></td>
   </tr>
   <tr>
     <td><input type="button" class="btnNum" name="btnNum" value="7" onclick="addChar(this.form.display, '7')"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="8" onclick="addChar(this.form.display, '8')"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="9" onclick="addChar(this.form.display, '9')"></td>
     <td><input type="button" class="btnOpps" name="btnOpps" value="x&#94;" onclick="if(checkNum(this.form.display.value)) { exp(this.form) }"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="/" onclick="addChar(this.form.display, '/')"></td>
   <tr>
     <td><input type="button" class="btnNum" name="btnNum" value="4" onclick="addChar(this.form.display, '4')"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="5" onclick="addChar(this.form.display, '5')"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="6" onclick="addChar(this.form.display, '6')"></td>
     <td><input type="button" class="btnOpps" name="btnOpps" value="ln" onclick="if(checkNum(this.form.display.value)) { ln(this.form) }"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="*" onclick="addChar(this.form.display, '*')"></td>
   </tr>
   <tr>
     <td><input type="button" class="btnNum" name="btnNum" value="1" onclick="addChar(this.form.display, '1')"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="2" onclick="addChar(this.form.display, '2')"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="3" onclick="addChar(this.form.display, '3')"></td>
     <td><input type="button" class="btnOpps" name="btnOpps" value="&radic;" onclick="if(checkNum(this.form.display.value)) { sqrt(this.form) }"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="-" onclick="addChar(this.form.display, '-')"></td>
   </tr>
   <tr>
     <td><input type="button" class="btnMath" name="btnMath" value="&#177" onclick="changeSign(this.form.display)"></td>
     <td><input type="button" class="btnNum" name="btnNum" value="0" onclick="addChar(this.form.display, '0')"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="&#46;" onclick="addChar(this.form.display, '&#46;')"></td>
     <td><input type="button" class="btnOpps" name="btnOpps" value="x&#50;" onclick="if(checkNum(this.form.display.value)) { square(this.form) }"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="+" onclick="addChar(this.form.display, '+')"></td>
   </tr>
   <tr>
     <td><input type="button" class="btnMath" name="btnMath" value="(" onclick="addChar(this.form.display, '(')"></td>
     <td><input type="button" class="btnMath" name="btnMath" value=")" onclick="addChar(this.form.display,')')"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="cos" onclick="if(checkNum(this.form.display.value)) { cos(this.form) }"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="sin" onclick="if(checkNum(this.form.display.value)) { sin(this.form) }"></td>
     <td><input type="button" class="btnMath" name="btnMath" value="tan" onclick="if(checkNum(this.form.display.value)) { tan(this.form) }"></td>
  </tr>
 </tabel>
</form>
  </div>
  <img src="lampu.png" width="30%" height="30%" align="right">
  <table>
    <tr>
      <a href="landingPage.php" class="btn btn-danger">Kembali Ke Menu Utama</a>
    </tr>
  </table>
</body>
</html>