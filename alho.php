<div class="faixa">Alho</div>
<hr/>
<div class="produto">
    <div class="imagem">
        <img src="assets/img/alho.jpg">
    </div>
    <div class="detalhes">
        <br>
        <h2>a partir de R$ 25,00</h2><br><br>
        
        <p><em>Ingredientes: Mussarela com alho frito.</em></p>
        <br>
        <form action="checkout.php" method="get">
            <div>
                <legend>Escolha o tamanho:</legend>
                <input type="hidden" name="nome" value="Pizza Sabor Alho">
                <input type="radio" name="tam" class="soma" id="p" value="25" required> 
                <label for="p">Pequena</label>
                <input type="radio" name="tam" class="soma" id="m" value="32" required> 
                <label for="p">Média</label>
                <input type="radio" name="tam" class="soma" id="g" value="40" required> 
                <label for="p">Grande</label>
            </div><br>
            <div>
                <legend>Borda Recheada:</legend>
                <input type="radio" name="borda" class="soma" id="sim" value="7" required> 
                <label for="sim">Sim</label>
                <input type="radio" name="borda" class="soma" id="nao" value="0" required> 
                <label for="nao">Não</label>        
            </div><br>
            <div>
                <h2>Valor: 
                    <input type="text" id="total" name="preco" value="0"></h2>
            </div>
            <br>
            <div class="button">
                <input type="submit" id="btnSubmit" value="Comprar">    
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/valor.js"></script>
</div>
