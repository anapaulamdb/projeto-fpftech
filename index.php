<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Pizzaria Mix</title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    
</head>
<body>
    <?php
        include "menu/menunav.php";
        require "control/rotaController.php";
        $rota = new Rota();
        $pagina = "inicio";
        if(isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
        }
        switch($pagina){
            /* case "inicio":
                $rota->inicio(); 
                break;
                Fatal error: Cannot redeclare class rota in C:\wamp\www\PROJETO\control\rotaController.php on line 3
            */
            case "checkout":
                $rota->checkout();
                break;
            case "pizzas": 
                $rota->pizzas(); 
                break;
            case "tradicionais": 
                $rota->tradicionais(); 
                break;
            case "especiais": 
                $rota->especiais(); 
                break;
            case "contato": 
                $rota->contato(); 
                break;
            case "sobre": 
                $rota->sobre(); 
                break;
            case "alho": 
                $rota->alho(); 
                break;
            case "atum": 
                $rota->atum(); 
                break;
            case "banana": 
                $rota->banana(); 
                break;
            case "calabresa": 
                $rota->calabresa(); 
                break;
            case "marguerita": 
                $rota->marguerita(); 
                break;
            case "milho": 
                $rota->milho(); 
                break;
            case "mussarela": 
                $rota->mussarela(); 
                break;
            case "napolitana": 
                $rota->napolitana(); 
                break;
            case "quatroqueijo": 
                $rota->quatroqueijo(); 
                break;
        }
    if($pagina=="inicio"){
    ?>   
    
    <div class="conteiner-m">
        <div class="principal">
        </div>
        <div class="imgs linha">
            <div class="animacao slide"></div>
            <div class="imagem-g">
                <img class="imagem promo">
            </div>
        </div>
    </div>
    
</body>
<?php
    }
	include "footer/footer.php";
?>
      
</html>