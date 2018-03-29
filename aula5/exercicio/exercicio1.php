<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php
      include_once './sections/head.php';
    ?>
  </head>
  <body>

    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-12">
            <?php
                include_once 'sections/menu.php';
                include_once 'sections/header.php';
            ?>
        </div>
			
        <hr>
        </div>
        </div>
	  </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-12 blog-main">
                <div class="blog-post">
                <h1 class="blog-post-title" >Exercício: Login</h1>
                  <div class="alert alert-success alert-dismissible" role="alert">
                      Autenticação realizada com sucesso!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="alert alert-danger alert-dismissible" role="alert">
                      Falha ao realizar autenticação!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="#" class="form-signin">
                      <div class="form-group">
                          <label for="email" class="mb-3">E-mail</label>
                          <input type="email" placeholder="E-mail" class="form-control" required autofocus>
                      </div>
                      <div class="form-group">
                          <label for="password" class="mb-3">Senha</label>
                          <input type="password" placeholder="Password" class="form-control" required>
                      </div>
                      <div class="form-group" class="mb-3">
                          <input type="submit" class="btn btn-info btn-lg btn-block">
                      </div>
                  </form>
                </div>
            </div>
        </div>

    <?php
        include_once './sections/footer.php';
    ?>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>