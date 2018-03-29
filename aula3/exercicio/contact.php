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
                <h1 class="blog-post-title" >Exercício: E-mail</h1>
                <form action="email.php" method="POST" class="form-signin">
                    <div class="form-group">
                        <label for="from" class="mb-3">Nome do remetente:</label>
                        <input type="text" name="from" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="to" class="mb-3">E-mail do remetente:</label>
                        <input type="text" name="to" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="mb-3">Assunto:</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="mb-3">Mensagem:</label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>
                    <input type="hidden" name="REMOTE_ADDR" value="<?=$_SERVER['REMOTE_ADDR']?>">
                    <input type="hidden" name="REMOTE_USER" value="<?=$_SERVER['REMOTE_USER']?>">
                    <input type="hidden" name="SERVER_NAME" value="<?=$_SERVER['SERVER_NAME']?>">
                    <input type="hidden" name="SERVER_ADDR" value="<?=$_SERVER['SERVER_ADDR']?>">
                    <div class="form-group" class="mb-3">
                        <input type="submit" class="btn btn-info btn-lg btn-block">
                    </div>
                </form>
                </div>
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