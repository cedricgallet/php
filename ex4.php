<?php
$string = (string) 'chaine de caractère';
$int = (int) 2;
$float = (int) 1.2;
$boolean = (boolean) false;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4 php</title>
</head>
<body>

<p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.  
Les afficher.</p>


<?php
echo $string;
echo '<br>';
echo $int;
echo '<br>';
echo $float;
echo '<br>';
echo $boolean;
var_dump($float);
?>
<!-- var dump permet de debugger et d'afficher la valeur et son type -->
</body>
</html>