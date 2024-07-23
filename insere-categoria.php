<?php
include('controller/conexao.php');

$descricao = $_POST['descricao'];

echo "<h3>Descrição: $descricao</h3><br><br>";

$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";

//query executa comando SQL dentro do banco
if(mysqli_query($mysqli, $cad_categoria)){
    echo "<h1>Categoria cadastrada com sucesso!!</h1><br>";
}else{
    echo "Erro: " . $cad_categoria . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>