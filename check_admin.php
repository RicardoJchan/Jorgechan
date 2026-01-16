<?php
// check_admin.php
header('Content-Type: application/json');

// A senha que antes estava no script do index.html
$senha_secreta = "linkpark1"; 

$dados = json_decode(file_get_contents('php://input'), true);
$tentativa = $dados['password'] ?? '';

if ($tentativa === $senha_secreta) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
