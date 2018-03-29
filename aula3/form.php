<!DOCTYPE html>
<html/>
    <head>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-12 blog-main">
                <form action="recebe-dados.php" method="GET" class="form-signin">
                    <div class="form-group">
                        <label for="from" class="mb-3">De:</label>
                        <input type="text" name="from" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="to" class="mb-3">Para:</label>
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
                    <div class="form-group" class="mb-3">
                        <input type="submit" class="btn btn-info btn-lg btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>