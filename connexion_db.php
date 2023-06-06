<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=docteur;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch (Exception $e) {
    die('Erreur : ' . $e ->getMessage());
}
$sqlRequest = 'SELECT * FROM docteur_info';
$donnees = $db->prepare($sqlRequest);
$donnees->execute();
$infos = $donnees->fetchAll();

// On affiche chaque recette une à une
foreach ($infos as $info) {
?>
    <p><?php echo $info['nom']; ?></p>
<?php
}
?>