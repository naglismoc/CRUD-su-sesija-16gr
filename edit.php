<?php
session_start();

?>
  <?php include "header.php" ?><br><br>
<form action="contacts.php">
        <label for="fname">Vardas:</label>
        <input type="text"  name="fname" value="<?=$_SESSION['people'][$_GET['update']]['name']?>">
        <label for="lname">Pavarde:</label>
        <input type="text"  name="lname" value="<?=$_SESSION['people'][$_GET['update']]['surname']?>">
        <label for="address">Adresas:</label>
        <input type="text"  name="address" value="<?=$_SESSION['people'][$_GET['update']]['address']?>">
        <input type="hidden" name="id" value="<?=$_GET["update"]?>">
        <input type="submit" value="Submit">
    </form>
    <?php include "footer.php" ?>