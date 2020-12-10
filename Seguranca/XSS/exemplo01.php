<form method="post">
    <input type="text" name="busca">
    <input type="submit" value="Buscar">
</form>

<?php 

    if(isset($_POST["busca"])) echo strip_tags($_POST["busca"]);