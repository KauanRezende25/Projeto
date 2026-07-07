<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/itemPedido.css">
    <title>Contato</title>
</head>
<body>
    <?php
     if($_SERVER['HTTP_HOST']=='localhost')
            define('BASE', 'http://localhost/Projeto/');
        else
            define('BASE', 'http://' . $_SERVER['HTTP_HOST']. '/');

        include_once('../template/header.php');
    ?>
    <div class="corpo-item">

        <div class="box-voltar">
            <i class="bi bi-arrow-left-short"></i>
            <p> Detalhes do produto </p>
        </div>

        <div class="info-prod">
             <?php
                include('../template/opcao.php');
            ?>
        </div>
        
        <div class="box-adicionais">
            <?php
                include('../template/adicionais.php');
            ?>
        </div>

    </div>

    <?php
        include_once('../template/footer.php');
    ?>
</body>
</html>