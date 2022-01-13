<?php
function addListStudent(){
    require_once('./includes/arrayEleve.php');
    $i = 0;
    foreach($students as $student){
        $st = $student['sexe']." ".$student['nom']." ".$student['prenom'];
        echo "<li><a href='profil.php?id=$i' title='$st'>-$st</a></li><br>";
        $i++;
    }
}
require __DIR__ . '/partials/header.php';
?>

<div id="container">
    <div id="title">
        <h1>Les élèves :</h1>
    </div>
    <ol>
        <?php addListStudent() ?>
    </ol>
</div>

<?php
require __DIR__ . '/partials/footer.php';
