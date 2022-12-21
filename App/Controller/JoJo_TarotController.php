<?php

namespace App\Controller;

use App\Model\JoJo_TarotModel;

class JoJo_TarotController extends Controller
{

    public static function JoJo_TarotPage()
    {

        $model = new JoJo_TarotModel();

        if(isset($_POST["id_carta"]))
        {

            $model->id = $_POST["id_carta"];

        }

        $model->GetByID($model->id);

        parent::render("JoJo_Tarot/JoJo_Tarot", $model);

    }

}

?>