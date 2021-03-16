<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Página de Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nome de usuário" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Senha" />
            </div>
            <input type="submit" value="Entrar" class="btn solid" />
          </form>
        </div>
      </div>
      

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo por aqui ?</h3>
            <p>
              Cadastre-se em nossa plataforma para poder usufruir de todos os recursos!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="../cadastro/index.php">Cadastro</a>
            </button>
          </div>
          <img src="../../../img/log.svg" class="image" alt="" />
        </div>

      </div>
    </div>
  </body>
</html>