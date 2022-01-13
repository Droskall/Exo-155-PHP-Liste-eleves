<?php
$message = "";
if(isset($_GET['infos']) && is_string($_GET['infos'])){
    $get = $_GET['infos'];
    if($get === "errorURL"){
        $message = "Tu vas te prendre un coup de HACHE SI TU CONTINUE GAMIN !!!!";
    }
}

require __DIR__ . '/partials/header.php';
?>

    <div id="container">
        <div id="error">
            <p><?= $message ?></p>
        </div>
    </div>

<?php
require __DIR__. '/partials/footer.php';