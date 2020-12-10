<?php

?>
<head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
  </head>
<form id='demo-form' action="cadastrar.php" method="post">
    <div class="g-recaptcha" data-sitekey='public-key'>
    <input type="email" name="email">
    <button type="submit">Enviar</button>
</form>