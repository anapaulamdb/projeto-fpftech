<!DOCTYPE HTML>
<HEAD>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/produtos.css">
</HEAD>
<?php
    include "menu/menunav.php";
?>
<div class="conteiner-p linha">
    <div class="caixa-detalhes">
        <div class="meio">
            <br><br>
            <h1>Ótima escolha!</h1>
            <p class="texto">Obrigado por comprar conosco!<br>
            Preencha seus dados para finalizar sua compra.</p><br>
        </div>
        <div class="meio destaque">
            <h2>Sua Compra</h2>
    
            <?php 
                $tamanho = $_GET['tam'];
                $borda = $_GET['borda'];
                if($tamanho >19 && $tamanho <26){
                    $tamanho = "Pequena";
                }
                else if($tamanho >26 && $tamanho <33){
                    $tamanho = "Média";
                }
                else{
                   $tamanho = "Grande";
                }

                if($borda==7){
                    $borda = "Sim";
                }else{
                    $borda = "Não";
                }
                ?>
        <div class="linha">
            <h3>Produto:</h3>
            <p><em><?= $_GET['nome'] ?> </em></p>
        </div>
        <div class="linha">
            <h3>Tamanho:</h3>
            <p><em><?= $tamanho ?> </em></p>
        </div>
        <div class="linha">
            <h3>Borda Recheada:</h3>
            <p><em><?= $borda ?> </em></p>
        </div>
        <div class="linha">
            <h3>Preço:</h3>
            <p><em><?= $_GET['preco'] ?> </em></p>
        </div>
     </div>
    </div>
    <div class="caixa-info">
        <form class="destaque" action="final">
                <h2>Dados pessoais</h2>
                <!--<form action="../control/usuarioController.php" method="post">-->
                <div class="linha">
                    <label>Nome Completo</label>
                    <input name="nome">
                    <label>Sexo</label>
                    <input type="radio" name="sexo" id="feminino" value="f">
                    <label for="feminino">F</label>
                    <input type="radio" name="sexo" id="masculino" value="m">
                    <label for="Masculino">M</label>
                </div>
                <div class="linha">
                    <label>Data de Nascimento</label>
                    <input type="date" name="data">
                    <label>Telefone</label>
                    <input name="fone">
                </div>
                <div class="linha">
                    <label>Endereço</label>
                    <input name="end">
                    <label>CEP</label>
                    <input name="cep">
                </div>
                <div>
                    <label>Ponto de Referência</label>
                    <input name="ref">
                </div>
                <div>
                    <label>E-mail</label>
                    <input type="email" name="email">
                    <label>Senha</label>
                    <input type="password" name="senha">
                </div>        
                <h2>Cartão de crédito</h2>
                    <div class="linha">
                        <label for="numero-cartao">Número - CVV</label>
                        <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        <label for="bandeira-cartao">Bandeira</label>
                        <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                        <option value="master">MasterCard</option>
                        <option value="visa">VISA</option>
                        <option value="amex">American Express</option>
                        </select>
                    </div>
                        <div class="form-group">
                        <label for="validade-cartao">Validade</label>
                        <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                    </div>
            <br>
            
                <div class="button">
                    <input type="submit" id="btnSubmit" value="Confirmar Pedido">    
                </div>
        </form>
    </div>
</div>
<?php include "footer/footer.php";