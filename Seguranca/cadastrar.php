<?php
$secret = "secret-key";
$response = $_POST["g-recaptcha-response"];
$url = "https://www.google.com/recaptcha/api/siteverify";

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POSTFIELDS => http_build_query(array(
        "secret" => $secret,
        "response" => $response,
        "remoteip"=> $_SERVER["REMOTE_ADDR"]
    ))
));
$result = json_decode(curl_exec($ch), true);
curl_close($ch);
if($result["success"] === true){
    echo "OK : " . $_POST["email"];
} else {
    header("Location: exemplo04.php");
}

