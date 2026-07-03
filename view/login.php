<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login</title>
</head>

<body>
    <?php
        include_once("./link.php");
    ?>
    <main class="main">
        <div class="total">
            <img class="logo" src="../image/logo.png" alt="logo">
            <div class="cadastro">
                <p>Não tem uma conta?</p> <a href="../view/cadastro.php">Cadastre-se aqui</a>
            </div>
            <form class="forms" action="" method="post">
                <div class="inputs">
                    <input class="input" type="email" name="email" id="email" placeholder="E-mail" required> <br>
                    <div class="senhas">
                        <input class="input senha" type="password" name="senha" id="senha" placeholder="Senha" required>
                        <i id="olho" class="bi bi-eye olho" onclick="mostrarSenha('olho', 'senha')"></i>
                    </div>
                </div>
                <button class="botao" type="submit">Entrar</button> 
            </form>
            <div class="esqueciSenha">
                 <p>Esqueceu sua senha?</p><a href="">Recuperar acesso</a>
            </div>
            <div class="centralizarlinha">
                <div class="linha"></div>
                <p>Ou</p>
                <div class="linha"></div>
            </div>
            <button class="entrarGoogle">
                <img src="../image/google.png" alt="google" class="google" >
                Entrar com o Google
            </button>

            
        </div>
    </main>
    <script src="../js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
     <?php include_once(ROOT_PATH . "template/footer.php")?>
</body>
</html>