<?php
    include_once './assets/sections/header.php';
    include_once '../sections/menu.php';
?>

	<div class="container">
		<div class="row">
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Autenticação realizada com sucesso!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
            <div class="col-12 col-md-2"></div>
        </div>
	</div>

<?php
	include_once './assets/sections/footer.php'
?>