<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Tabuada</h1>
<form action="tabuada.php" method = "GET">
<div>
<label for="numero" name= "numero" >Insira o Numero</label>
<input type="number_format" name="numero">
<button type="submit" class="btn btn-primary">Resultado</button>
<button type="reset" class="btn btn-warning">Limpar</button>
</div>
</form>
<?php
$numero = filter_input(INPUT_GET, "numero",FILTER_SANITIZE_NUMBER_INT);
for ($x = 0; $x<=10; $x++){
$resultado = $numero * $x;
echo "$x*$numero = $resultado <br> ";}
?>
</body>
</html>