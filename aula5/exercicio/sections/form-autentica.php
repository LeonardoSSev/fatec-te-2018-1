<form action="/autentica.php" method="POST" class="form-signin">
    <div class="form-group">
        <label for="name" class="mb-3">Nome</label>
        <input type="text" placeholder="Nome" class="form-control" name="name" required autofocus>
    </div>
    <div class="form-group">
        <label for="login" class="mb-3">Login</label>
        <input type="text" placeholder="Login" class="form-control" name="login" required autofocus>
    </div>
    <div class="form-group">
        <label for="password" class="mb-3">Senha</label>
        <input type="password" placeholder="Password" class="form-control" name="password" required>
    </div>
    <div class="form-group" class="mb-3">
        <input type="submit" class="btn btn-info btn-lg btn-block">
    </div>
</form>