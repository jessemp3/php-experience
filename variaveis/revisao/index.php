<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>revisão</title>
    <style>

        body{
            background-color: black;
            color: white;
            text-align: center;
        }

        #ola{
            color: red;
        }

    </style>
</head
<body>

    <?php
        $linguagem = "PHP";
        $numero = 10;
        $myLanguages = ["typeScript" , "Node" , "PHP"];
        $today = Date("d/m/y");
        $hours = date_default_timezone_set('America/Sao_Paulo');
        $hoursFormated = date('h:i:s a');

    echo "<h1 id='ola'>Olá, $linguagem!</h1>";
    echo "<h2>$linguagem é $numero</h2>";
    echo "<h3>Eu programo em $myLanguages[0] em $myLanguages[1] e em $myLanguages[2]</h3>";
    echo  "<h4>Hoje é dia $today</h4>";
    echo "<h5>Agora são $hoursFormated</h5>";

    ?>
</body>
</html>