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
<h1>type maximun of multiplication </h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  max: <input type="text" name="fname"id='number'>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        
        
    } else {
       $h=$name;
       make_table($h);
    }
     
    
}
?>
    <?php



function make_table($h){

?>
    <table>
    
    <tr>
    <td style= color:purple>
       x
    </td>
    <?php
    
    ;
    $k=1;
    $x=0;
    $y=$h;
    //first line for loop
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
<?php

}


?>
 
    <script src="mathp.js"></script>
</body>
</html>
