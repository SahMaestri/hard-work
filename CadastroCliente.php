<html>
    <head>
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

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>CADASTRO DE CLIENTES </title>
        <style type="text/css">
            <!--
            .style1 {
                color: #FF0000;
                font-size: x-small;
            }
            .style3 {color: #0000FF; font-size: x-small; }
        </style>
        <script type="text/javascript">
            function validaCampo()
            {
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
                    return true;
            }
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
        </script>
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
                        <a href="../getting-started/"></a>
                    </li>
                    <li>
                        <a href="../css/"></a>
                    </li>
                    <li>
                        <a href="ofertas.php">Ofertas</a>
                    </li>
                    <li class="active">
                        <a href="CadastroCliente.php"> Cadastrar-se</a>
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
                <div ><div ><div ></div><script>var z = document.createElement("script");


                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(z, s);</script></div></div>





            </div>
        </div>
        <form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo();
                return false;">
            <table width="625" border="0">
                <tr>
                    <td width="69">Nome:</td>
                    <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="text" id="email" size="70" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Sexo:</td>
                    <td><input name="sexo" type="radio" value="Masculino" checked="checked" />
                        Masculino
                        <input name="sexo" type="radio" value="Feminino" />
                        Feminino <span class="style1">*</span> </td>
                </tr>

                <tr>
                    <td>Login:</td>
                    <td><input name="login" type="text" id="login" maxlength="12" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Senha:</td>
                    <td><input name="senha" type="password" id="senha" maxlength="12" />
                        <span class="style1">*</span></td>
                </tr>

                <tr>
                    <td>ConfirmeSenha:</td>
                    <td><input name="senha" type="password" id="senha" maxlength="12" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td colspan="2"><p>
                            <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />


                            <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />


                            <span class="style1">* Campos com * sao obrigatorios!          </span></p>
                        <p>  </p></td>
                </tr>
            </table>
        </form>



        <div class="container">
            <h3> Trabalho final Senac Informática</h3>
        </div>
    </div>
</body>
</html>

