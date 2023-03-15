<?php
//beecrowd 1013
 $values = readline();
 $values = explode(" ", $values);
 $maior = -99999999;
 
 for($x = 0; $x < count($values); $x++){
    if($maior < $values[$x]){
         $maior = $values[$x];
     }
 }
 echo "$maior eh o maior\n";

?>

<?php
//beecrowd 1018
$notas = intval(fgets(STDIN));

echo "$notas\n";

$notas100 = (intdiv($notas,100));
 $notas = $notas%100;

$notas50 = (intdiv($notas,50));
 $notas = $notas%50;

$notas20 = (intdiv($notas,20));
 $notas = $notas%20;

$notas10 = (intdiv($notas,10));
 $notas = $notas%10;

$notas5 = (intdiv($notas,5));
 $notas = $notas%5;

$notas2 = (intdiv($notas,2));
 $notas = $notas%2;

$notas1 = (intdiv($notas,1));
 $notas = $notas%1;

 echo "$notas100 nota(s) de R$ 100,00\n";
 echo "$notas50 nota(s) de R$ 50,00\n";
 echo "$notas20 nota(s) de R$ 20,00\n";
 echo "$notas10 nota(s) de R$ 10,00\n";
 echo "$notas5 nota(s) de R$ 5,00\n";
 echo "$notas2 nota(s) de R$ 2,00\n";
 echo "$notas1 nota(s) de R$ 1,00\n";
 
?>

<?php
//beecrowd 1133
$v1 = intval(fgets(STDIN));
$v2 = intval(fgets(STDIN));

if($v1 < $v2){
   for($n = $v1+1;$n < $v2;$n++){
    if($n % 5 == 2 || $n % 5 == 3){
      echo "$n\n";
   }
  }
}elseif($v1 > $v2){
   for($n = $v2+1;$n < $v1;$n++){
     if($n % 5 == 2 || $n % 5 == 3){
      echo "$n\n";
   }
  }
}

?>

<?php
//beecrowd 1101
while (true) {
  $pares = fgets(STDIN);
  $parzin = explode(" ", $pares);
  $pares1 = intval($parzin[0]); 
  $pares2 = intval($parzin[1]); 
    
    if($pares1 <= 0 || $pares2 <= 0) {
       break;
    }
     if($pares1 > $pares2) {
       $par1 = $pares1;
       $pares1 = $pares2;
       $pares2 = $par1;
      }
       $par = 0;
       $seq = "";
      for($i = $pares1; $i <= $pares2;$i++) {
        $seq.=$i." ";
        $par += $i;    
    }     
   echo $seq."Sum=".$par."\n";
}
?>

<?php
//beecrowd 1789
while($lesma = fgets(STDIN)){
$lesmaq = (int) $lesma;
$lesmas = fgets(STDIN);
$arr = explode(" ",$lesmas);
$arr = array_map('intval',$arr);
asort($arr);
$final = implode(" ",$arr);
$ultimo_num = end($arr);
 
if($ultimo_num < 10){
   echo "1"."\n";
  }
   elseif($ultimo_num >= 10 && $ultimo_num < 20){
   echo "2"."\n";
  }
   elseif($ultimo_num >= 20 ){
   echo "3"."\n";
  }
 } 

?>

<?php
//beecrowd 1071
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));
$arr = range($y+1,$x);
  
   $soma = 0;
  for($i = $y+1;$i < $x;$i++){     
    if($i % 2 != 0){     
      $soma += $i;
    }   
  }
echo $soma."\n";


?>
