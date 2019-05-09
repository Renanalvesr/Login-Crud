<h1 style="text-align: center">Bem Vindo</h1>
<form method="post" action="login.php">
    <label class="badge badge-secondary">Usuário</label>
    <input type="text" name="usuario" placeholder="Nome do Usuário" class="form-control">
    <br>
    <label class="badge badge-secondary">Senha</label>
    <input type="password" name="senha" placeholder="Senha" class="form-control">
    <br>
    <?php if (isset($_GET['erro'])) { ?>
        <div class="alert alert-warning" role="alert">
            Usuário ou senha invalidos.
        </div>
    <?php } ?>
    <input type="submit" class="btn btn-success" value="Entrar" class="form-control">
</form>