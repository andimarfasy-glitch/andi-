<?php
   function hello()
   {
    echo "selamat datang";
   }
   hello();

   function tambah(int $a,int $b){
     $hasil= $a + $b; 
     return $hasil;
   }
   echo "<br><br>";
  echo tambah(12,8);

  function kali(int $a,int $b){
     $hasil= $a * $b; 
     return $hasil;
   }
   
   function bagi(int $a,int $b){
     $hasil= $a / $b; 
     return $hasil;
   }

   function kurang(int $a,int $b){
     $hasil= $a - $b; 
     return $hasil;
   }
   
  

   ?>

  <form method= "post">
    Masukkan angka 1 : <input type="number" name="angka1">
    Masukkan angka 2 : <input type="number" name="angka2">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
  if(isset($_POST["angka1"])){
    $newangka1 = $_POST["angka1"];
    $newangka2 = $_POST["angka2"];
    echo tambah($newangka1,$newangka2);
    echo"<br>";
    echo kali($newangka1,$newangka2);
     echo"<br>";
    echo bagi($newangka1,$newangka2);
     echo"<br>";
    echo kurang($newangka1,$newangka2);
  }
?>
