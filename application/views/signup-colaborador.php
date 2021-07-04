<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $titulo ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      form{
        background: #fff;
        border-radius: 20px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background: #28a745">
    <form class="form-signin" method="post" action="<?= base_url()?>index.php/SignupColaborador/storeColaborador">

      <svg width="82" height="82" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
      </svg>

      <br><br>
    	<h1 class="h3 mb-3 font-weight-normal">Por favor, inscreva-se</h1>

    	<label for="inputNome" class="sr-only">Nome</label>
    	<input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome" required autofocus>
    	
      <label for="inputEmail" class="sr-only">Email</label>
    	<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
    	
      <label for="inputSenha" class="sr-only">Senha</label>
    	<input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required>
      
      <input type="checkbox" onclick="mostrarSenha()"> Mostrar senha
      <script>
        function mostrarSenha(){
          var tipo = document.getElementById("inputSenha");
          if(tipo.type == "password"){
            tipo.type = "text";
          }else{
            tipo.type = "password";
          }
        }
      </script>

    	<p>
        <a href="<?= base_url()?>index.php/logincolaborador">Já tem uma conta?</a>
      </p>
      <button class="btn btn-lg btn-dark btn-block" type="submit">Cadastre-se</button>
      <p class="mt-5 mb-3 text-muted">DeGust&copy;Todos os direitos reservados.</p>
    </form>
</body>
</html>
