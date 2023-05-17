<!DOCTYPE html>
<html lang="engl">
    <head>
        <title> TEME</title>
        <link rel="stylesheet " text="text/css" href="style.css">
    </head>
    <body>
        <h2> Exercitii </h2>

    </body>
</html>
<?php
    echo ' 1.Rezultatul este : ' . ((34 + 2) - (8 + 3)); 
    echo "</br>";
    echo '2.Rezultatul este : ' . (10 + ((5 - 2) + (2 * 3))); 
    echo "</br>";
    echo '3.Rezultatul este : ' . 2 * (3 *5);
    echo "</br>";
    echo '4.Rezultatul este : ' . (2 +3) * 5;
    echo "</br>";
    echo '5.Rezultatul este : ' . pow(10,3); // 1000 => 10x10x10 = 1000
    echo "</br>";
    echo '6.Rezultatul este : ' . 4 * pow(3,3) + 2;  // 38 => (4 x 27) + 2 => 108 + 2 => 110
    echo "</br>";
    echo '7.Rezultatul este : ' . ((10 -2) +  (2 * 3)); 
    echo "</br>";
    echo '8.Rezultatul este : ' . number_format((10  * pow(2,5) + pow(2,6) + (3 + 1 )));

/*  Number format => formateaza numarul si elimina virgula, dupa avem 10 * 2 la putera 3 => 2x2x2 + 2 la puterea 3 la fel

            10 x 8 = 80 + 8 + 5 => 88 + 5 = 93

            In acest exercitiu nu era necesar formatarea dar l-am pus ca sa intelegeti la ce ne ajuta, mai jos, aveti un
        exercitiu cu number_format
  */
     echo  "</br>";
     echo'9.Rezultatul este : ' . number_format(4.80);
     echo  "</br>";
     $name = "Eduard";
     echo "10." . $name; // afisam Eduard => Putem folosi atat ghilimele duble cat si simple, dar nu COMBINATE!, ca produce o eroare fatala
     echo  "</br>";

     // 2. Adaugand 2 variabile si folosind simbolul .= ( punct si egal )
     $name_1 = "Eduard";
     $name_2 = " vrei o capsunica? ";
    echo "11." . $name_1.=$name_2;
    echo  "</br>";
    $n = "Salut ";
    $b = " Mihai !";
    echo "12. ".  $n . $b;
    echo  "</br>";

   // Utilizarea Heredoc
    echo "13.". <<< Alexandra
    Utilizand aceasta metoda putem afisa un string adica prin Heredoc  \r\n
    Alexandra;
     // nu trebuie sa existe spatiiiiiiiiiii !!!
     // Newdoc

    echo  "</br>";
    echo " 14." . <<< 'Alexandra'
    Textul la Newdoc, diferenta dintre acestea este ca la Heredoc nu se folosesc ghilimele, dar la Newdoc se folosesc
    Alexandra;
    echo  "</br>";

    // ARRAY Asociativ

    $id = [
        'id'=> 1,
        'name'=>'Mihai',
        'city'=>'Constanta',

    ];

    // ID => Key  => ( operator de asociere )
    // 1 => Valoare


    // Pentru a afisa putem folosi un foreach, 
    echo "15.";
    foreach($id as $key => $value){
      
        echo  $key . ":" . " " . $value. "," . " " ;
    }
    echo  "</br>";
    // afisare
    echo "16. ";
    echo  'Numele este :' .$id['name'] . "."; // afisam Numele intre paranteze patrate punem key ( name ) => intre ghilimele
    echo  "</br>";
    echo   'Locuieste in : '. $id['city'] . "."; // afisam Tara de origine intre paranteze patrate punem key ( country )=> intre ghilimele


    // Array indexat

        // lista de cumparaturi
        echo  "</br>";
        $list = ['Capsuni','Frisca','Lapte','Cirese']; // 3 elemente in lista !! ( totul incepe de la 0 nu de la 1 )

        echo "17.". $list[0]; // 0 este numar de index, adica totul incepe de la 0, nu de la 1 => "Painea" are nr 0, nu 1
        echo  "</br>";
        echo "<pre>"; // am afisat mai frumos
        print_r($list); // am afisat cu print_r  => keya si valoarea
        echo  "</br>";

 // Array in array

    $lista_masini = array(
    array('Model' => 'BMW', 'MERCEDES'),
    array('Model' => 'HYUNDAI', 'TESLA'),
    array('Model' => 'PASSAT', 'GOLF', 
    'sub_array' => array('roti' => 4), 
    'sub_sub_array' => array('culoare' => 'neagra')),
    
);
//print_r ( $lista_masini);
echo "18." ."Este o masina frumoasa " . $lista_masini[0]['Model'] . " -ul"; // afiseaza BMW din primul sub-tablou (sub-array)
echo "<br>";
echo "19." ."Masina mea este " . $lista_masini[2]['sub_sub_array']['culoare']; 
echo "<br>";

// Actualizarea unui array + adaugare unei noi valori

$familie = array('Mihai ','Claudia', 'Monica');
//print_r($familie);
echo  "20 ." .$familie[0]; 
echo "<br>";
print_r ($familie[0] = "Eva");
echo "<br>";
echo $familie[2] = "Patricia";
echo "<br>";
echo $familie[1] = "PITI";
 echo "<pre>";
var_dump($familie);

echo "<br>";
echo "21.". "Round : " .round(9898976.24321);
echo "<br>";
echo "22. " ."Round to 2 decimal places : ".round(9876666.54321,2) ;
echo "<br>";
echo "23. " ."Round half up :". round(4.5,0,PHP_ROUND_HALF_UP) ;
echo "<br>";
echo "24. " ."Round half down:" .round(10.5,0,PHP_ROUND_HALF_DOWN) ;
echo "<br>";
echo "25. " ."Round up :". ceil(1.23) ;
echo "<br>";
echo "26. "." Round down :" .floor(1.23) ;
echo "<br>";
echo "26. ". "Random number :" .mt_rand(1,15); //<!--refresh la pagina, se va schimba nr--->
echo "<br>";
echo "27. "."Exponential:" . pow(2,5);
echo "<br>";
echo "28. "."Square root :". sqrt(25);// <!--radacina patrata --->
echo "<br>";
echo "29. "."Is a number:". is_numeric(112) ;
echo "<br>";
echo "30. "."Format number:".number_format(123345.4489,2,',',' ');
echo "<br>";
echo "31. "."Date:".date('Y') ;
echo "<br>";
echo "32. "."Date with days:".date('Y-d') ;
echo "<br>";
echo "32. "."Date with days and month:". date('Y-d-m');
echo "<br>";
echo "33. "."Hour :". date('H:i:s');
echo "<br>";

 $produs="oreo";
 
 if($produs == 0){
    echo "34.".  "Produsul nu se mai afla in stock";

 }else{
    echo  "34."."Va rugam reveniti mai tarziu";
 }
 echo "<br>";
 /*+ inca un exercitiu, avem 2 variabile $nr_1 si $nr_2 => vreau sa verificati care numar este mai mare sau mai mic,
  o alta verificare sa fie daca sunt egale ( 30 = 30 ) sa fie afisat un mesaj corespunzator , si ultima => un mesaj de eroare
  */

$nr_1=30;
$nr_2=30;

if($nr_1 < $nr_2){
    echo  "35.". $nr_1 . "Este mai mic decat". $nr_2 ;
}elseif($nr_1 > $nr_2){
    echo  "35.". "Este mai mare decat". $nr_2 ;
}elseif ($nr_1 == $nr_2){
    echo  "35.". "Sunt egale";
}else{
    echo  "35."." Eroare";
}
echo "<br>";
/*
a, da si inca un exercitu cu calcularea :  "2023" + "douamidouazecisitrei" + "36star3" = ? 
( prefer sa il adaugati tot in git si sa nu va scape raspunsul unuia dintre "avansati" de aici :)
*/
$num1= (int)2023; // 2023
$num2=(int)"douamidouazecisitrei"; //0
$num3=(int)"36star3"; //36 din ce am inteles eu din manualul php 
 
$suma=$num1+ $num2+$num3;
echo "36.". "Rezultatul este :" .$suma;
 /*
  Conversia din Celsius in  Fahrenheit cu. urmatoarea formula 
   F = (C * 1.8) + 32  , + inca un exercitiu ( calculati cat la suta din 500 reprezinta numarul 125. ) 
     

*/
// Temperatura T în grade Fahrenheit (° F) este egală cu temperatura T în grade Celsius (° C) ori 1.8 plus 32:


function Fahrenheit($celsius) {
    $celsius = 15;
    $fahrenheit = ($celsius * 1.8) + 32;
    return $fahrenheit;
  }
  echo "<br>";
  $celsius = 15;
  $fahrenheit = Fahrenheit($celsius);
  echo"37." . $celsius . " grade Celsius este egal cu " . $fahrenheit . " grade Fahrenheit.";


  //+ inca un exercitiu ( calculati cat la suta din 500 reprezinta numarul 125. ) 
  echo "<br>";

  $total = 500;
  $numar = 125;

$procent = ($numar / $total) * 100;
echo "38.". $procent;














?>