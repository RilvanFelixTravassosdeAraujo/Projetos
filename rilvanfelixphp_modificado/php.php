 
            <?php
            $sql = "select* from produtos";
            $result= $conn→query($sql);

           if($result→num_row > 1){
           while($rows = $result→fetch_assoc()){
           
           ?>
             <div class="produto"> 
                <div class="boxproduto" id="<?php echo $rows["categoria"] ?>" style="display: block";>
                 <img src="<?php echo $rows["imagem"] ?>"width="120px" onmouseover="bigImg(this)" onmouseout="normalImg(this)"  >
                 <br>
                 <div class="descricao"><?php echo $rows["descricao"] ?></div>
                 <hr> 
                 <div class="preco"><?php echo $rows["preco"] ?></div>
                 <div class="preço final"><?php echo $rows["preco final"] ?></div>
                 <br>
                </div>
                </td>
          
          
          <?php
          }
           }else{
           echo "Nenhum produto cadastrado!";
           }
            
            
            ?>