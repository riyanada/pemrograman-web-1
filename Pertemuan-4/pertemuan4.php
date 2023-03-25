<?php 
// //for
// for ($i=0; $i < 10; $i++) { 
//     echo "Ini perulangan ke-$i <br>";
// }

// //while
// $a=1;
// while ($a < 10) {
//     echo "Ini perulangan While ke-$a <br>";
//     $a++;
// }

// //do
// $b=1;
// do {
//     echo "Ini perulangan do-While ke-$b <br>";
//     $b++;
// } while ($b <= 10);


// $array = ['Januari', 'Febuari', 'Maret'];

// foreach ($array as $key => $value) {
//     echo $key . " => " . $value . "<br>";
// }

// for ($i=0; $i < 3; $i++) { 
//     for ($j=0; $j < 5; $j++) { 
//         echo "Ini Perulangan ke-$i, $j <br>";
//     }
// }


//Pertemuan 4 quiz 1
for ($i = 1; $i <= 9; $i++) {
    if ($i % 3 == 1) { 
        for ($j = 1; $j <= $i; $j++) {
            echo "+ ";
        }
    } elseif ($i % 3 == 2) { 
        for ($j = 1; $j <= $i; $j++) {
            echo "- &nbsp;"; 
        }
    } else {
        for ($j = 1; $j <= $i; $j++) { 
            echo "* ";
        }
    }
    echo "<br>";
}

//quiz 2
for ($a = 1; $a <= 9; $a++) {
  for ($b= $a; $b <= 9; $b++) {
    echo $b;
  }
  echo "<br>";
}
echo "0";
