<!DOCTYPE html>
<html>
  <head>
    <!-- Material disponibilizado pelo professor Anderson Macedo -->
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
      <!-- target="_blank"= abre a pag em outra guia -->
        <h1 style="text-align: center">Programação Web II - Pedido de compra</h1>
        <a href="carrinho.php" target="_self" style="margin-left: 10px;">Carrinho</a>
        <a href="categoria.php" target="_self" style="margin-left: 1px;" >Categoria</a>
        <a href="marca.php" target="_self" style="margin-left: 1px;" >marcas</a>
        <a href="produtos.php" target="_self" style="margin-left: 1px;" >produtos</a>
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <?php require_once('controller/produtos-busca.php'); ?>
        </div>
    </section>

  </body>
</html>
