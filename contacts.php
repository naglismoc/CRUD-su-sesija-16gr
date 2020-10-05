<?php
// sukuriama sesija, zmoniu masyvas, startiniai vartotojai
session_start();
// $_SESSION["people"]=[]; //užmokentuoti po pirmo sukurimo
// $_SESSION["id"]=0; //užmokentuoti po pirmo sukurimo
// $person = array
//     (
//         "name"=>"Petras",
//         "surname"=>"Juozapavicius",
//         "address"=>"Sauletekio al. 17, Vilnius"
//     );
        //=======demo useriu iadinimas=======
    // $_SESSION["people"][$_SESSION["id"]]=$person; 
    // $_SESSION["id"]+=1;
    // $_SESSION["people"][$_SESSION["id"]]=$person;
    // $_SESSION["id"]+=1;
        //=======demo useriu iadinimas=======

// nuo cia vyksta naujo vartotojo irasymas
    if(isset($_GET['fname'])){
        if($_GET['fname']!="" && $_GET['lname']!="" &&$_GET['address']!=""){
            $person["name"]=$_GET["fname"];
            $person["surname"]=$_GET['lname'];
            $person["address"]=$_GET["address"];
            if(isset($_GET["id"])){
                $person["id"]=$_GET["id"];
            }
            save($person);
        }
    }
  
    function save($person){
        if(isset($person["id"])){
            $_SESSION["people"][$person["id"]]=$person;    
        }else{
            $_SESSION["people"][ $_SESSION["id"]]=$person;
            $_SESSION["id"]+=1;
        }
    }

    if(isset($_GET['delete'])){
        unset($_SESSION['people'][$_GET['delete']]);
        }

    // session_unset();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
</head>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
</style>
<body>
    <?php include "header.php" ?>
    <container>
    <h1>contacts</h1>
    <form action="">
        <label for="fname">Vardas:</label>
        <input type="text"  name="fname">
        <label for="lname">Pavarde:</label>
        <input type="text"  name="lname">
        <label for="address">Adresas:</label>
        <input type="text"  name="address">
        <input type="submit" value="Submit">
    </form>
    <table>
  <tr>
    <th>Id</th>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>Adresas</th>
    <th>delete</th>
    <th>edit</th>
</tr>
  <!-- ------------------------------------------------------ -->
  
  <?php
  foreach ($_SESSION["people"] as $key => $person) {?>
     
    <tr>    
        <td><?=$key?></td>
        <td><?=$person["name"]?></td>
        <td><?=$person["surname"]?></td>
        <td><?=$person["address"]?></td>
        <td><form action=''>
            <input type="hidden" name="delete" value="<?=$key?>">
            <input type="submit" value="Delete">
        </form></td>
        <td><form action='edit.php'>
            <input type="hidden" name="update" value="<?=$key?>">
            <input type="submit" value="update">
        </form></td>
    </tr>
  <?php
}?>
  <!-- ------------------------------------------------------ -->
</table><br><br>
    </container>
    <?php include "footer.php" ?>
</body>
</html>