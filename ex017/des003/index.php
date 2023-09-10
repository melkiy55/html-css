<pre>
<?php 
$inicio = date("m-d-y", strtotime("-7 days"));
   $fim = date("m-d-y");
      $url =



      $dados = json_decode(file_get_contents($url), true);
       
      $cotaçao = $dados ["value"] [0] ["cotacaoCompra"];
      
      echo "A cotação foi de $cotaçao";



?>
</pre>