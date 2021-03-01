<?php


$a=[ 9 , 4 , 7 , 43 , 13 , 24 , 80 , 120 ];
$min=$a[0];
$max=$a[4];
for($i=1 ; $i < count($a) ; $i++)
{
    if($a[$i] < $min )
    {
       $min= $a[$i];
    }
    if($a[$i] > $max )
    {
        $max =$a[$i];
    }

}
    echo "min is $min";
    echo " <br>";
    echo "max is $max";




