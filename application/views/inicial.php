<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets2/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href="<?= base_url('assets2/css/business-frontpage.css') ?>" rel="stylesheet">
  	<title>Pagina inicial - DeGust</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top py-3 mb-5">
	    <div class="container">
	      <a class="navbar-brand" href="#">DeGust</a>
	    </div>
	</nav>

  <!-- Header -->
  <header class="bg-success py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Bem-vindo ao <span class="text-dark">DeGust</span></h1>
          <p class="lead mb-4 text-white-50">Sua plataforma destinada à realização e colaboração de pesquisas voltadas para a degustação de alimentos e análise de resultados no IFRN-Campus Apodi.</p>
        </div>
      </div>
    </div>
  </header>

  <section class="py-4 py-md-13">
      <div class="container 2">
          <div class="row">
            <div class="col-12 col-md-6">
              <!-- Icon -->
              <div class="icon text-success mb-3">
                <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="green"></path><path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="green" opacity=".3"></path></g></svg>
              </div>
              <!-- Heading -->
              <h3>
                Participe das pesquisas
              </h3>
              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Seja um colaborador, baseado nas degustações que você já realizou contribua com sua opinião participando de pesquisas já criadas <br> Entre utilizando o botão logo abaixo.
              </p>
              <div class="py-3 mb-6 mb-md-0">
              	<a href="<?= base_url('')?>index.php/logincolaborador" class="btn btn-success">Login Colaborador</a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <!-- Icon -->
              <div class="icon text-success mb-3">
                <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z" fill="green"></path><path d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z" fill="green" opacity=".3"></path></g></svg>
              </div>
              <!-- Heading -->
              <h3>
                Crie suas pesquisas
              </h3>
              <!-- Text -->
              <p class="text-muted mb-6 mb-md-0">
                Seja um pesquisador, crie pesquisas de acordo com suas necessidades e analise os resultados obtidos ao final da pesquisa.<br> Entre utilizando o botão logo abaixo.
              </p>
              <div class="py-3 mb-6 mb-md-0">
              	<a href="<?= base_url('')?>index.php/loginpesquisador" class="btn btn-success">Login Pesquisador</a>
              </div>
            </div>
        </div> <!-- / .container -->
    </section>

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">DeGust&copy;Todos os direitos reservados.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets2/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>