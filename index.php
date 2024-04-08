<?php
$titrePage = "Introduction au PHP";
$nom = "MBIANDA";
$prenom ="Fredy";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titrePage; ?></title>
</head>

<body>
    <?php 
    
    //echo "<h1> Superbe introduction </h1>"; 
    //if  (isset($nom)){
      //  echo 'Oui cette variable existe';
        //    } else {
          //      echo 'non, cette variable n\'existe pas';
            //}

for ($i=5; $i >= 1 ; $i--) { 
                echo "<h$i> Hello World !<h$i>";
            }
            
    ?>

    
</body>

</html>




