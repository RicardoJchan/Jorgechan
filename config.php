<?php
// htdocs/config.php
session_start();

// Sua senha secreta
$senha_mestra = "linkpark1";

// Função para verificar se o usuário é admin
function isAdmin() {
    return isset($_SESSION['jorge_admin']) && $_SESSION['jorge_admin'] === true;
}
?>
