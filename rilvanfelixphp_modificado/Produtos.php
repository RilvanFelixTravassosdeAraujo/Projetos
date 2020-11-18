<?php

//Esta linha abaixo esta fazendo a conexão com o banco de dados atraves do arquivo db_connect.php
require_once('db_connect.php');

?>

<!DOCTYPE html>
  <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cleo Nails</title>
       <link rel="stylesheet" href="./Estilo/link.css">
       <script src="./js/produtos.js"></script>  
      </head>
    <body>
      <!--Inicio do menu-->
        <table class="fundo" width="100%" >
              <tr>
              <div class= "menu">
              <div class= "submenu"><td align="center" width="25"><a href="Cleo_Nails.php"><img width="100px" src="./Imagens/Cleo 9.png"></a></td></div>
              <div class= "submenu"></div><td align="center" width="25"><a href="Produtos.php">Produtos</a></td></div> 
              <div class= "submenu"></div><td align="center" width="25"><a href="loja.php">Nossas lojas</a></td></div>
              <div class= "submenu"><td align="center" width="25"><a href="Contato.php">Contato</a></td></div>   
              </div>
          </tr>
        </table>
          <!--Fim do menu-->
        <header>
        <h2> Produtos</h2>
        </header>
        <hr>
        
        <div class="categorias">
           <h3>Categorias</h3> 
           <ul>
            <input onclick="exibir_categoria('gel')" type="radio" id="nail" name="produto">
            <label for="nail">Gel alongamento de unha(4)</label><br>
            <input onclick="exibir_categoria('alicate')" type="radio" id="pliers" name="produto">
            <label for="pliers">Alicate de unha(4)</label><br>
            <input onclick="exibir_categoria('motor')"type="radio" id="motornail" name="produto">
            <label for="motornail">Motor de unha profissional(4)</label><br> 
            <input onclick="exibir_categoria('esmalte')" type="radio" id="enamel" name="produto">
            <label for="enamel">Esmalte(4)</label><br><br>  
            
             </ul>
            </div>
            
            <?php
            
            $sql = "select * from produto";
            $result = $conn->query($sql);

            if($result->num_rows > 0){           
            while($rows = $result->fetch_assoc()){
           ?>
               
               <table border=0 width="100%" cellpadding=>
              
              <tr>
                <td width="20%" align="center" valign="bottom">
                <div class="produto" > 
                <div class="boxproduto" id="<?php echo $rows["categoria"] ?>" style="display: block">
                <img src= "<?php echo $rows["imagem"] ?>"width="120px" onmouseover="bigImg(this)" onmouseout="normalImg(this)"  >
                 <br>
                 <div class="descricao"><?php echo $rows["descricao"] ?></div>
                 <hr> 
                 <div class="nome"><strike>R$ <?php echo $rows["preco"] ?></strike></div>
                 <div class="preço final">R$ <?php echo $rows["preco final"] ?></div>
                 <br>
                </div>
                </td>
                </tr>
                </table>
          <?php
            }
           }else{
           echo "Nenhum produto cadastrado!";
           }
           ?>
            
            
        
        <br ><br> <br> 
        
          <marquee id="cadastroMarq" behavior="scroll" direction="left"><img src="./Imagens/corrida_maluca6.jpg "width="250px" alt="120px"></marquee>
          <footer id="rodape">
          <p><b>Formas de Pagamento</b></p>
                
          <img src="./Imagens/bandeira_cartao.png" width="190px">  
          <p>&copy; Recode Pro</p>
  
  
         </footer>
  </body>
</html>