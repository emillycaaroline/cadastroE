<?php
//inclui e avalia o arquivo especificado durante a execução do script, garantindo que o arquivo seja incluído apenas uma vez
include_once('controller/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        body{
            text-align: center;
            color: palevioletred;
        }
        section{
            
            border:  2px;
            
            margin-left: 500px;
            margin-right: 500px;
            border-radius: 50px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="center">
            <h1>Cadastro de produtos</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-produto.php" method="post">
            Nome: <input type="text" name="nome" style="border-radius: 10px;"><br>
            Descrição: <input type="text" name="descricao" style="border-radius: 10px;"><br>
            estoque: <input type="number" name="estoque" style="border-radius: 10px;"><br>
            preço: <input type="number" name="preco" min="0.00" max="100000.00" step="0.01" style="border-radius: 10px;"><br>

            Categoria:
            <select name="seleciona_categoria" id="" style="border-radius: 10px;">
                <option value="">Selecione</option>
                <?php
                //Pega os itens presentes no banco de dados e exibe na pagina para selecionar
                $resultado_categoria = "SELECT * FROM `categoria`";
                $resultcategoria = mysqli_query($mysqli, $resultado_categoria);

                //while =  repete um bloco de código enquanto uma condição especificada for verdadeira
                while ($row_categorias = mysqli_fetch_assoc($resultcategoria)) {
                ?>

                    <option value=" <?php echo $row_categorias['IDCATEGORIA']; ?> "><?php echo $row_categorias['DESCRICAO']; ?></option>

                <?php
                }
                ?>
            </select><br>

            Marca:
            <select name="seleciona_marca" id="" style="border-radius: 10px;">
                <option value="">Selecione</option>
                <?php
                $resultado_marca = "SELECT * FROM `marca`";
                $resultmarca = mysqli_query($mysqli, $resultado_marca);
                while ($row_marcas = mysqli_fetch_assoc($resultmarca)) {
                ?>

                    <option value=" <?php echo $row_marcas['IDMARCA']; ?> "><?php echo $row_marcas['DESCRICAO']; ?></option>

                <?php
                }
                ?>
            </select>

            <br><br>

            <input type="submit" value="cadastrar" style="border-radius: 7px;">

        </form>
    </section>
</body>

</html>