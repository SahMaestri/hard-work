
<html>
    <head>



        <title>Ofertas</title>
        <style>

        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/docs.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <style>
            .carousel-inner img{
                margin: auto

            }
        </style>

    </style>
</head>



<body >
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Home</a>
        </div>
        <nav id="bs-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="../css/"></a>
                </li>
                <li>
                    <a href="ofertas.php">Ofertas</a>
                </li>
                <li class="active">
                    <a href="_user-form.php"> Cadastrar-se</a>
                </li>
                <li>
                    <a href="FaleConosco.php">Fale conosco</a>
                </li>
            </ul>

        </nav>


    </div>
    <div class="bs-docs-header" id="content" tabindex="-1">
        <div class="container">
            <h1>Speed Veículos</h1>
            <p>A loja com maior número de vendas da região,os melhores preços e as maiores ofertas!</p>
            <div ><div id="azcarbon"></div><script>var z = document.createElement("script");


                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(z, s);</script></div></div>





    </div>


    <div class="container">

        <form method="POST" action="user_save.php">
            <div class="form-group">
                <label>Nome</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
            </div>
            <div class="form-group">
                <label>Confirmar Senha</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                       placeholder="Confirmar Senha">
            </div>
            <button type="submit" id="btn-user-submit" class="btn btn-default">Cadastrar</button>
        </form>
    </div>
    <script>
        $('#btn-cadastrar').click(function () {
            if (document.cadastro.nome.value == "")
            {
                alert("O Campo nome é obrigatório!");
                return false;
            }
            else
            if (document.cadastro.email.value == "")
            {
                alert("O Campo email e obrigatorio");
                return false;
            }
            else
            if (document.cadastro.login.value == "")
            {
                alert("O Campo Login é obrigatório!");
                return false;
            }
            else
            if (document.cadastro.senha.value == "")
            {
                alert("Digite uma senha!");
                return false;
            }
            else
            if (document.cadastro.senha_confirma.value == "senha")
            {
                alert("As senhas não são iguais!");
                return false;
            }
            else
                return true;

        })
    </script>

</body>
</html>
