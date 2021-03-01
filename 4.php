<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table , th , td{
       border:1px solid ;
   }
   th{
       background-color: greenyellow;
       color: red;
   }
   </style>
</head>
<body>
<table style="width: 100%;">
<th class="text-center">
1
</th><th class="text-center">
2
</th><th class="text-center">
3
</th><th class="text-center">
4
</th><th class="text-center">
5
</th><th class="text-center">
6
</th><th class="text-center">
7
</th><th class="text-center">
8
</th><th class="text-center">
9
</th><th class="text-center">
10
</th>
<th class="text-center">
11
</th>
<th class="text-center">
12
</th>
<th>
<?php
for($i=1 ; $i<=12 ; $i++){  ?>
    <tr>
   <?php for($j=1 ; $j<=12 ; $j++) {    ?>
        <td>
     <?php 
      
      for($i=1 ; $i<=12 ; $i++)
      {
          $s=$i*$j;
          echo "$i * $j =$s <br> <hr> ";
      }
       ?>
       
        </td>
    <?php } ?>
    </tr>
<?php } ?>
</th>


</table>
</body>
</html>