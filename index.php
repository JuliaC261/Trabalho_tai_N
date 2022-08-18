 <?php

    $dados = array("numerodoregistro" => "0", "modelo" => "Uno", "fabricante" => "Fiat", "cor" => "Prata", "portas" => "4", "ano"=>"2018");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";
      
    $dados = array("numerodoregistro" => "1", "modelo" => "Fiesta", "fabricante" => "Ford", "cor" => "Preto", "portas" => "2", "ano"=>"2016");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    $dados = array("numerodoregistro" => "2", "modelo" => "Doblo", "fabricante" => "Fiat", "cor" => "Verde", "portas" => "4", "ano"=>"2013");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";
      
    $dados = array("numerodoregistro" => "3", "modelo" => "Celta", "fabricante" => "GM", "cor" => "Preto", "portas" => "2", "ano"=>"2012");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    $dados = array("numerodoregistro" => "4", "modelo" => "March", "fabricante" => "Nissan", "cor" => "Prata", "portas" => "2", "ano"=>"2016");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    $dados = array("numerodoregistro" => "5", "modelo" => "Cobalt", "fabricante" => "GM", "cor" => "Branco", "portas" => "2", "ano"=>"2012");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    $dados = array("numerodoregistro" => "6", "modelo" => "Ranger", "fabricante" => "Ford", "cor" => "Prata", "portas" => "4", "ano"=>"2018");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    $dados = array("numerodoregistro" => "7", "modelo" => "Trail Blazer", "fabricante" => "GM", "cor" => "Branco", "portas" => "4", "ano"=>"2020");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";


    $dados = array("numerodoregistro" => "8", "modelo" => "Ecosport", "fabricante" => "Ford", "cor" => "Preto", "portas" => "4", "ano"=>"2018");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    $dados = array("numerodoregistro" => "9", "modelo" => "Tucson", "fabricante" => "Hyundai", "cor" => "Vinho", "portas" => "4", "ano"=>"2020");

    echo "Número do registro: ".$dados['numerodoregistro']."<br/>"; 
    echo "O modelo do carro é: ".$dados['modelo']."<br/>";
    echo "A marca do carro é: ".$dados['fabricante']."<br/>";
    echo "Cor: ".$dados['cor']."<br />";
    echo "Quantas portas o carro possui: ".$dados['portas']."<br/>";
    echo "Ano: ".$dados['ano']."<br/>";
    echo "<hr>";

    ?>

    <html>
    <body>
      <form method="post">
        <input type='text' name="texto" placeholder='Escreva a sua palavra!'>
        <input type="submit" value="Submit" />
        </form>
      <?php 
      $letra = $_POST['texto'];
      $letra = str_replace('a','?',$letra);
      $letra = str_replace('e','?',$letra);
      $letra = str_replace('i','?',$letra);
      $letra = str_replace('o','?',$letra);
      $letra = str_replace('u','?',$letra);
      echo $letra;

    ?>
      </body>
    </html>
