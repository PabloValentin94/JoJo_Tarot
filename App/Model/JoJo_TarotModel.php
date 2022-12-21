<?php

namespace App\Model;

use App\DAO\JoJo_TarotDAO;

class JoJo_TarotModel extends Model
{

    public int $id = 1;

    public function GetByID(int $id)
    {

        $dao = new JoJo_TarotDAO();

        $this->rows = $dao->SelectByID($id);

    }

}

?>