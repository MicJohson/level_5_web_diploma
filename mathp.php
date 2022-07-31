<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mathp.css">
<style>
table, th, td,tr {
   
  border: 1px  solid black;
  border-collapse: collapse;
}
td {
    text-align:center
}
</style>
</head>
<body>

    <table>
    
    <tr>
    <td style= color:purple>
       x
    </td>
    <?php
    $h=12;
    $k=1;
    $x=0;
    $y=$h;
    
    while($k!=$h+1){ ?>
    
    <td style= color:red>
        
    <?php
        echo $k;
        $k++;
        
        ?>
      
    </td>
        <?php
    } 
    ?>
    </tr>
    
    <?php





while($x<=$h){
 
if($y>=$h){
$y=1;
$x++;

?>
</tr>
<tr>


<?php
if($x!=$h+1){

    ?>
    <td style= color:blue>
        
    <?php

echo $x
      ?>

    </td>
    <td style= color:purple>
        <?php
echo $x*$y;
}
?>
</td>

<?php



}
else{
  
    
    $y++;
    ?>

    <td style= color:purple>
    <?php
    echo $x*$y;
    ?>
    </td>
    
    <?php
}}
?>


</table>
</body>
</html>
