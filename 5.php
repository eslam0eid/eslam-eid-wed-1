<?php


$array=[1 , 2 , 1 , 3 , 2 , 4 , 5 , 6 , 2];
for($i=0 ; $i < count($array) ; $i++)
{
if($array[$i] == $array[$i++])
{
    unset($array[$i++]);
}

}
print_r($array);