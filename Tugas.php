<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF007F;}
</style>
</head>
<body>

<?php
$nimErr = $namaErr = $emailErr = $alamatErr = $noHpErr = $prodiErr = "";
$nim = $nama = $email = $alamat = $noHp = $prodi = "";
$nim_Default = $name_Default = $email_Default = $alamat_Default = $noHp_Default = $prodi_Default ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["nim"])) {
    $nimErr = "NIM wajib diisi";
    $nim_Default = 22090154;
  } else {
    $nim = test_input($_POST["nim"]);
    $nim_Default = 22090154;
  }
  if (empty($_POST["nama"])) {
    $namaErr = "Nama wajib diisi";
    $name_Default = "Mario Firdaus Robby Akbar";
  } else {
    $nama = test_input($_POST["nama"]);
    $name_Default = "Mario Firdaus Robby Akbar";
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email wajib diisi";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["alamat"])) {
    $alamatErr = "Alamat wajib diisi";
  } else {
    $alamat = test_input($_POST["alamat"]);
  }

  if (empty($_POST["noHp"])) {
    $noHpErr = "NoHp wajib diisi";
  } else {
    $noHp = test_input($_POST["noHp"]);
  }

    if (empty($_POST["prodi"])) {
      $prodiErr = "Prodi wajib diisi";
    } else {
      $prodi = test_input($_POST["prodi"]);
    }
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Form Validasi PHP</h2>
<p><span class="error">* kolom yang harus diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NIM: <input type="text" name="nim">
  <span class="error">* <?php echo $nimErr;?></span>
  <br><br>
  Nama: <input type="text" name="nama">
  <span class="error">* <?php echo $namaErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Alamat: <input type="text" name="alamat">
  <span class="error">* <?php echo $alamatErr;?></span>
  <br><br>
  noHp: <input type="text" name="noHp">
  <span class="error">* <?php echo $noHpErr;?></span>
  <br><br>
  prodi: <input type="text" name="prodi">
  <span class="error">* <?php echo $prodiErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Kirim">
</form>

<?php
 echo "<h2>Your Input</h2>";
 echo $nim_Default . "<br>";
 echo $name_Default . "<br>";
  echo "<h2>Your Input</h2>";
  echo $nim . "<br>";
  echo $nama . "<br>";
  echo $email . "<br>";
  echo $alamat . "<br>";
  echo $noHp . "<br>";
  echo $prodi . "<br>";
?>

</body>
</html>