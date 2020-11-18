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
        
        <h2>  Contatos</h2>
        <hr>
        
        <table border=0 width="100%" cellpadding="20">
          <tr>
          <td width="50%" align="center">
            <img src="./Imagens/email.jpg" width="40px">
            <font face="Arial" size= "4">contato@cleonails.com</font> 
          </td>
            <td width="50%" align="center">
              <img src="./Imagens/sapp 1.jpg" width= "40px">
              <font face="Arial" size= "4">(11) 9777-7777</font>
          </td>

          </tr>

        </table>

        <!-- Este formulario esta validando os dados inseridos no arquivo validar-comentario.php -->
        <form action="validar-comentario.php" method="POST">
          <h4>Nome: </h4>
          <input name="nome" type="text" style="width: 400px;">
          <h4>Mensagem </h4>
          <textarea name="msg" style="widows: 400px; ;"></textarea>

          <input name="enviar" type="submit"value="Enviar">
        </form>
        
        <br ><br> <br> <br> 
        
        <marquee id="cadastroMarq" behavior="scroll" direction="left"><img src="./Imagens/corrida_maluca2.jpg" alt="120px"></marquee>
        
          <footer id="rodape">
          <p><b>Formas de Pagamento</b></p>
                
          <img src="./Imagens/bandeira_cartao.png" width="190px">  
          <p>&copy; Recode Pro</p>
  
  
         </footer>
  </body>
</html>