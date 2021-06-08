<?php
$int1 = (int) null;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5 php</title>
</head>
<body>

<p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.  
Donner une valeur à cette variable et l'afficher.</p>

<?php

var_dump ($int1);
echo '<br>';
$int1 = 42;
var_dump ($int1);
settype($int1,'string');
var_dump ($int1);
?>

</body>
</html>