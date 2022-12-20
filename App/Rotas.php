<?php

use App\Controller\JoJo_TarotController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        JoJo_TarotController::JoJo_TarotPage();
    break;

    default:
        echo "Error 404;";

}

?>