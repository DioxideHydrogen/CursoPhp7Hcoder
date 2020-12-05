<?php

 session_start();

 /**
 * Session unset (); -> Apaga todo o conteúdo das sessões
 * Session unset ($var) ; -> Apaga uma determinada sessão
 * 
 * OBS.: A sessão continua sendo a mesma
 */

 session_unset();

 echo $_SESSION["nome"];

 /**
  * Apaga toda a sessão.
  */
 session_destroy();