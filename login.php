<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['senha'] === $senha_mestra) {
        $_SESSION['jorge_admin'] = true;
        header("Location: index.php"); // Volta para a home após logar
        exit;
    } else {
        $erro = "Senha incorreta, meu nobre.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login Admin</title></head>
<body>
    <form method="POST">
        <h3>Acesso Restrito</h3>
        <?php if(isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>
        <input type="password" name="senha" placeholder="Digite a senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
