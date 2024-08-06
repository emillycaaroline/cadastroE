<!DOCTYPE html>
<html lang="pt-br">

<head>
<style>
        body{
            text-align: center;
            color: palevioletred;
        }
        section{
            
        
            margin-left: 500px;
            margin-right: 500px;
            border-radius: 50px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="center">
            <h1>Cadastro de categoria</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-categoria.php" method="post">
            <label for="">Descrição</label>
            <input type="text" name="descricao" style="border-radius: 10px;">
            <input type="submit" value="Cadastrar" style="border-radius: 7px;">

        </form>
    </section>
</body>

</html>