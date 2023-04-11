<?php
// verificar se o formulário foi enviado
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // recuperar os valores do formulário
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  // verificar se o usuário e senha são válidos
  if($usuario == 'gatinho' && $senha == '123') {
    // iniciar a sessão e redirecionar para a página de bem vindo
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: bemvindo.php');
  } else {
    // exibir uma mensagem de erro caso as credenciais não sejam válidas
    $mensagem = 'Usuário ou senha inválidos';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <!-- Adicionando o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Adicionando o CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="login-panel panel panel-default text-center">
            <div class="panel-heading">
              <h3 class="panel-title">Faça Login</h3>
            </div>
            <div class="panel-body">
              <?php if(isset($mensagem)) { ?>
                <div class="alert alert-danger"><?php echo $mensagem ?></div>
              <?php } ?>
              <form action="login.php" method="post" role="form">
