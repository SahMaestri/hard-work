<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Cadastro realizado com sucesso!</title>
    </head>
    <body>
        <?php
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $login = $_POST ["login"];
        $senha = $_POST ["senha"];
        $news = $_POST ["news"];
        $sexo = $_POST ["sexo"];

//Gravando no banco de dados ! conectando com o localhost - mysql
        $conexao = mysql_connect("localhost", "root"); //localhost é onde esta o banco de dados.
        if (!$conexao)
            die("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysql_error());

//conectando com a tabela do banco de dados
        $banco = mysql_select_db("clientes", $conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
        if (!$banco)
            die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> " . mysql_error());


//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
        $query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `login` , `senha` , `news` , `id` )
VALUES ('$nome', '$email', '$sexo', '$login', '$senha', '$news', '')";
        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
        ?>
    </body>
</html>