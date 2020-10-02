<?php

$theme="white";
if(!empty($_GET)){
    if(isset($_GET["page"])){
        switch ($_GET["page"]) {
            case "home":
                header('Location: index.php');
              break;
            case "about":
                header('Location: about.php');
              break;
            case "news":
                header('Location: news.php');
              break;
            case "contacts":
                header('Location: contacts.php');
            break;
            default:
            header('Location: index.php');
          }
    }





    if($_GET['theme']=="dark"){
        $theme="black";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
</head>
<body style="background-color:<?=$theme?>">
    <?php include "header.php" ?>
    <container>
    <h1>home page</h1>
    <a href="index.php?theme=dark">dark</a>
    <a href="index.php?theme=light">light</a>
    </container>
    <?php include "footer.php" ?>
</body>
</html>