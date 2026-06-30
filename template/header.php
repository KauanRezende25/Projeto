<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/Projeto/styles/header.css">

</head>
<body>
    <header class="cabecalho">
        <div class="cabecalhoTotal">
            
            <!-- BARRA SUPERIOR: Isola a logo e o hambúrguer para ficarem sempre alinhados na mesma linha -->
            <div class="barra-topo">
                <div class="image">
                    <img class="logo" alt="logo" src="../image/logo.png">
                </div>
                
                <button type="button" id="botao-hamburguer" class="botao-hamburguer">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            
            <!-- STATUS DA LOJA: Fica logo abaixo da barra superior -->
            <div class="statusLoja">
                <button type="button" id='aberto' class='abrirLoja aberto'>Aberto</button>
            </div>

            <!-- MENU MOBILE: Quando abrir, ele vai se posicionar abaixo de tudo de forma limpa -->
            <nav id="menu-mobile" class="cabecalhoInfos">
                <button type="button" class='buttonsobrenos'>Cardápio</button>
                <button type="button" class='buttonsobrenos'>Sobre-Nós</button>
                <div class="carrinhoElements">
                    <button type="button" class='carrinho'><i class="bi bi-cart4"></i></button>
                    <p class="qntCarrinho">0</p>
                </div>
            </nav>

        </div>
    </header>
    <script src="../js/abrirLoja.js"></script>
</body>
</html>