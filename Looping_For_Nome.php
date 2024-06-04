<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping For com nomes</title>
</head>
<body>
    <h3>LOOPING FOR COM NOMES</h3>

    <form name="nome" method="post" action="">
        <table>

            <tr>
              <td><label>Informe seu nome:  </label></td>
              <td><input type="text" name="nome" size="100"
              maxLength="100" required placeholder="Informe seu nome completo"></td>
            </tr>    

         <tr>
            <td colspan="2" align="center">
                <input type="submit" name="exibir" value="Exibir">
            </td>
        </tr>

</form>
<?php
   if(isset($_POST["exibir"])) // Se clicou o botão exibir
   {
       $nome = $_POST["nome"];
       for($contador = 1; $contador <10; $contador++)
       {
           echo "Nome: " . $nome . " " . $contador . "<br>";
       }
   }

   ?>







</table>

</body>
</html>