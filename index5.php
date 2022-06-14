<!DOCTYPE html>
<?php
//Conexão
require_once 'db_connect.php';

//Sessão
session_start();

//botão enviar
if(isset($_POST['btn-entrar'])):
    //se(existir( na variável global post[este índice]))
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($login) or empty($senha)):
            $erros[] = "<li> O campo login/senha precisa ser preenchido.</li>";
        endif;
endif;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login</h1>
<h2>Senha</h2>
    <?php
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;

    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">
       Login: <input type="text" name="login" id=""><br>
       Senha: <input type="password" name="senha" id=""><br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
    
</body>
</html>