<?php
   if(isset($_POST["buton"])){
       $s1=$_POST["sayi1"];
       $s2=$_POST["sayi2"];
       $top=$s1+$s2;
       $cikar=$s1-$s2;
       $carp=$s1*$s2;
       $bol=$s1/$s2;

       echo("toplam".$top)."<br>";
       echo("çıkarma".$cikar)."<br>";
       echo("çarpma".$carp)."<br>";
       echo("bol".$bol)."<br>";
   }