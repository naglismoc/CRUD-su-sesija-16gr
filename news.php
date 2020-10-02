<?php
// print_r($_GET['amount']);
$value=0;
if(isset($_GET["currency"])){
    if($_GET["currency"]=="USD"){
       $value = convertToUsd();
    }
    if($_GET["currency"]=="POUND"){
        $value = convertToPound();
     }


}
function convertToUsd(){
   return  $_GET["amount"]*0.93;
    
}
function convertToPound(){
    return  $_GET["amount"]*1.25;
     
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News</title>
</head>
<body>
    <?php include "header.php" ?>
    <container>
        <h1>News. we got currency converter!</h1>
        <form action="">
            <label for="fname">Currency:</label>
            <input type="text"  name="currency">
            <label for="fname">Amount:</label>
            <input type="text"  name="amount">
            <input type="submit" value="Skaiciuoti">
        </form>
        <h1><?=$value?></h1>
    </container>
    <?php include "footer.php" ?>
</body>
</html>