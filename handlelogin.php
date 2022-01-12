<?php
    // ez egy egysoros komment
    /* ez egy komment blokk */
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    if(isset($_POST["exampleInputEmail1"]) && isset($_POST["exampleInputPassword1"])){
        // itt ki lehetne még nézni a string hosszát, stb, hogy jó-e
        // echo '<br />fasza';
        header('Location: dashboard.php');
    } else {
        // echo 'nem fasza';
        $message = urlencode("Elbasztad a logint dilo");
        header("Location: login.php?msg=".$message);
    }
?>