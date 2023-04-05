<?php

include('inc/connDB.inc.php');

$term = str_replace("-",' ',htmlspecialchars($_GET["term"]));
$place = str_replace("-",' ',htmlspecialchars($_GET["place"]));
$order = str_replace("-",' ',htmlspecialchars($_GET["orde"]));

$sql = "SELECT * FROM job WHERE title LIKE '%".$term."%' AND place LIKE '%".$place."%' ".$order.";";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job <?php echo ucwords(str_replace("/", " ",str_replace("-", " ",$term)))." in ".ucwords(str_replace("/"," ",str_replace("-"," ",$place))); ?> </title>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="search/css/content.css">
    <link rel="stylesheet" href="search/css/form.css">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f1d5b849e9.js" crossorigin="anonymous"></script>
    <script src="js/func.js"></script>

    <script>
        function search(){
        location.href = 'http://localhost/dashboard/Project/search.php?term='+document.getElementById('dimm').value.replace(' ','-').replace(/\W+/g,'-')+'&orde=ORDER-BY-date-ASC&place='+document.getElementById('dovm').value;
        }

        function order_by(){
        location.href = 'http://localhost/dashboard/Project/search.php?term=<?php echo str_replace(" ","-",$term) ?>&orde='+document.getElementById('orde').value+'&place=<?php echo str_replace(" ","-",$place) ?>';
        }
    </script>
</head>
<body style="background #f6f7f8">
    
    <?php require_once("search/header_search.php"); ?>
    <div class="hero-body">
        <div class="container">
            <h1 class="title-desc" style="text-align: center; margin-bottom: 20px">
                Job <span style="color:#b5b5b5; font-weight. 500"><?php echo ucfirst(str_replace("/", " ",str_replace("-", " ",$term)))." in ".ucfirst(str_replace("/"," ",str_replace("-"," ",$place))); ?></span>
            </h1>
            <?php require_once("search/content.php"); ?>
        </div>
    </div>

    <script src='js/bulma.js'></script>

    <?php include("inc/closeDB.inc.php"); ?>

</body>
</html>