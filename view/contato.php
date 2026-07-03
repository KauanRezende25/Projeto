<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/contato.css">
    <title>Contato</title>
</head>
<body>
    <?php
     if($_SERVER['HTTP_HOST']=='localhost')
            define('BASE', 'http://localhost/Projeto/');
        else
            define('BASE', 'http://' . $_SERVER['HTTP_HOST']. '/');

        include_once('../template/header.php');
        include_once('../template/util.php');
    ?>
    <div class="corpo-contato">
        <div class="sobre">
            <h1> Sobre nós </h1>
            <p> Na Disabore Gourmet, cada receita é preparada com ingredientes selecionados 
                e muito cuidado para proporcionar uma experiência única. Nosso cardápio reúne 
                deliciosas pizzas artesanais, opções doces e salgadas, bordas recheadas, calzones e 
                bebidas para acompanhar cada momento.</p>
        </div>
        <div class="local">
            <div class="texto-local">
                <h1> Quer nos visitar? </h1>
                <p> Além do delivery, você também pode nos visitar na Rua Governador Roberto Silveira, Nº 462,
                    bairro Santa Teresa, CEP: 28460-000, Miracema/Rio de Janeiro e aproveitar um ambiente acolhedor. 
                    Também disponibilizamos nosso espaço para aniversários, confraternizações e pequenas comemorações, 
                    tornando seus momentos especiais ainda mais saborosos. Esperamos por você!</p>
            </div>
            <div class="foto-local">
                <img src="#">
            </div>
        </div>
        <div class="contato">
            <h1> Contatos </h1>
            <p> Entre em contato conosco! </p>
             <div class="iconesCt"> 
                    <a href="https://wa.me/5522992549393">
                    <i class="bi bi-whatsapp"></i>
                    Whatsapp
                    </a>
                    <a href="#">
                    <i class="bi bi-facebook"></i>
                    Facebook
                    </a>
                    <a href="https://www.instagram.com/disaboregourmet/">
                    <i class="bi bi-instagram"></i>
                    Instagram
                    </a>
                </div>
        </div>


    </div>

    <?php
        include_once('../template/footer.php');
    ?>
</body>
</html>