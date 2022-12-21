<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shotcut icon" href="/View/Modules/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/JoJo_Tarot/CSS/Styles.css">

        <title> JoJo's Bizarre Adventure - Tarot </title>

    </head>

    <body>

        <?php foreach($model->rows as $item): ?>

            <div id="container" style="order: 2;">

                <div id="box">  </div>

                <div id="card">

                    <div id="imagem" style="background-image: url(<?= $item->imagem ?>);">  </div>

                    <p style="font-size: 20px; color: #FFFFFF; margin-top: 5%; font-weight:bold;">
                        
                        <span style="color: #FF0000;"> Nome do Stand: </span> <span style="color: #FFFF00;"> <?= $item->nome_stand ?> </span> .
                    
                    </p>

                </div>

            </div>

            <form id="form_btn_anterior" method="POST" action="/" style="order: 1;"> 
        
                <button type="submit" name="id_carta" value="<?= $item->id - 1 ?>"> < </button>
        
            </form>

            <form id="form_btn_proximo" method="POST" action="/" style="order: 3;"> 
        
                <button type="submit" name="id_carta" value="<?= $item->id + 1 ?>"> > </button>

            </form>

        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>

            <div id="rows_null">

                <p style="font-size: 40px; color: #FFFFFF;">
                    
                    Site - Cartas: <a href="https://jjba.fandom.com/pt-br/wiki/As_22_Cartas_de_Tarot"> Clique aqui </a> .
                
                </p>

            </div>

        <?php endif ?>
        
    </body>

</html>