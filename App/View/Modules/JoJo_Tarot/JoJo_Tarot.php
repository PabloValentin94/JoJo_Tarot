<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shotcut icon" href="/View/Modules/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/JoJo_Tarot/CSS/Styles.css">

        <title> JoJo's Bizarre Adventure - Tarot </title>

    </head>

    <body>

        <?php if(count($model->rows) == 0): ?>

            <div id="rows_null">

                <p style="font-size: 40px; color: #FFFFFF;">
                    
                    Site - Cartas: <a href="https://jjba.fandom.com/pt-br/wiki/As_22_Cartas_de_Tarot"> Clique aqui </a> .
                
                </p>

            </div>

        <?php else: ?>

            <div id="container" style="order: 2;">

                <div id="box">  </div>

                <div id="card">

                    <div id="imagem" style="background-image: url(<?= $model->rows[0]->imagem ?>);">  </div>

                    <p style="font-size: 20px; color: #FFFFFF; margin-top: 5%; font-weight:bold;">
                        
                        <span style="color: #FF0000;"> Nome do Stand: </span> <span style="color: #FFFF00;"> <?= $model->rows[0]->nome_stand ?> </span>
                    
                    </p>

                </div>

            </div>

            <form class="button" method="POST" action="/" style="order: 1;"> 
        
                <button type="submit" name="id_carta" value="<?= $model->rows[0]->id - 1 ?>"> < </button>
        
            </form>

            <form class="button" method="POST" action="/" style="order: 3;"> 
        
                <button type="submit" name="id_carta" value="<?= $model->rows[0]->id + 1 ?>"> > </button>

            </form>

        <?php endif ?>
        
    </body>

</html>
