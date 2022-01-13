<?php
require_once('./includes/arrayEleve.php');

if(!isset($_GET['id']) || $_GET['id'] > count($students) -1){
    header('Location: error.php?infos=errorURL');
}

$student = $students[$_GET['id']];

require __DIR__ . '/partials/header.php';
?>


<div id="container">
    <a href="./index.php">Retour à la liste</a>
    <h1><?= $student['sexe']." ".$student['nom']." ".$student['prenom'] ?></h1>
    <h3><?= "L'élève a ".$student['age']." ans" ?></h3>
    <p><?= $student['sexe']." habite à ".$student['ville'] ?></p>
    <p><?= "Ses passions sont :" ?></p>
    <ol><?php
        for($i = 0; $i < count($student['passions']); $i++){?>
            <li><?= ucfirst($student['passions'][$i]) ?></li><?php
        }?>
    </ol>
</div>

<?php
require __DIR__ . '/partials/footer.php';