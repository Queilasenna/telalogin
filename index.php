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
      .btn {
        background-color:blueviolet;
        color:aliceblue;
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
              <form action="login.php" method="post" role="form">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Usuário" name="usuario" type="text" autofocus>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                  </div>
                  <button type="submit" class="btn">Login</button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Adicionando o JavaScript do Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
