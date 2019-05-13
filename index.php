<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Ma page</h1>

        <p>
            <?php

                echo "Hello word";

                $boll = true;
                $int = 1.2;

                $content = "<p>Ceci est un paragraphe : $int</p>";
                $content2 = '<p>Ceci est un paragraphe : $int</p>';

                echo $content;
                // die("Fin du script"); // pour mettre fin à un script
                echo $content2;

                // Les constantes
                const NB_ARTICLES_NB = 6;
                // define ("DATABASE_NAME")

                var_dump($content);

                $ctn = "Bonjour ";
                $ctn1 = "tout le monde";

                echo $ctn . $ctn1;

                echo "<br>";

                // incrémentation et decrémentation

                $cpt = 5;

                echo $cpt ++;
                echo "<br>";
                echo $cpt;
                echo "<br>";
                echo ++$cpt;
                echo "<br>";
                echo --$cpt;
                echo "<br>";
                echo $cpt--;
                echo "<br>";
                echo $cpt;

                echo "<br>";

                // $nbr = 1;
                // $result = (1 === $nbr);
                // var_dump ($result);

                $nbr = 2;
                $result = ($nbr === 1);
                echo "resultat : " . $result . "|";


                $temp = -18;

                // if ($temp < 0 || $temp < 20) {
                //     echo "<p>La temperature est bonne</p>";
                // } elseif ($temp < 50) {
                //     echo "<p>La temperature es trop basse</p>";
                // } elseif ($temp = 0) {
                //     echo "<p>La temperature est gélé</p>";
                // } elseif ($temp >= 20 || $temp > 50) {
                //     echo "<p>La temperature est chaude</p>";
                // } else {
                //     echo "<p>helllo</p>";
                // }

                // $clim = ($temp < 20)? "<p>La temperature est bonne</p>" : "<p>La temperature est chaude</p>";

                // echo $clim;

                // if ($temp <= 20) {
                //     echo "<p>La temperature est bonne</p>";
                // } elseif ($temp > 50) {
                //     echo "<p>La temperature es trop basse</p>";
                // } elseif ($temp < 0) {
                //     echo "<p>La temperature est gélé</p>";
                // } elseif ($temp >= 20){
                //     echo "<p>La temperature est chaude</p>";
                // } else {

                // }

                // if ($temp > 0 && $temp < 20) {
                //     echo "<p>La temperature est bonne</p>";
                // } elseif ($temp > 50) {
                //     echo "<p>La temperature est trop chaude</p>";
                // } elseif ($temp <= 0) {
                //     echo "<p>La temperature est gélé</p>";
                // } else{
                //     echo "<p>La temperature est chaude</p>";
                // }

                if ($temp <= 0) {
                    echo "<p>La temperature est gélé</p>";
                } elseif ($temp < 20){
                    echo "<p>La temperature est bonne</p>";
                } elseif ($temp < 50) {
                    echo "<p>La temperature est chaude</p>";
                } else{
                    echo "<p>La temperature est trop chaude</p>";
                }

                

            ?>

        </p>
    </body>
</html>