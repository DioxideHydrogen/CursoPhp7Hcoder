<?php

function trataNome( $nome ){
    if( !$nome ) {
        throw new Exception( "Nenhum nome foi informado <Br>", 1 );
    }
    echo ucfirst($nome)."<br>";
}

try {
    trataNome("Joao");
    trataNome("");
} catch ( Exception $e ){
    echo $e->getMessage();
} finally {
    echo "Executou o bloco try!"; // Email pro admin ... quit()
}