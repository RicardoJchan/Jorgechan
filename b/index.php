<?php require_once '../config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>/b/ - Aleatório - Jorgechan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="board-list">
        [ <a href="../index.php">home</a> ] [ <a href="index.php">/b/</a> ] [ <a href="../soybr/index.php">/soybr/</a> ]
        
        <?php if (isAdmin()): ?>
            <span class="admin" style="color: green;">[Admin: ON]</span>
            <a href="../logout.php" style="font-size: 8pt;">(sair)</a>
        <?php else: ?>
            <a href="../login.php" class="admin" style="text-decoration:none;">[Admin]</a>
        <?php endif; ?>
    </div>

    <div class="board-title">/b/ - Aleatório</div>

    <div class="banner">
        <img src="../790c8191287a389131ccb943681ac8e0.gif" alt="banner" class="banner-img">
        <div class="banner-text">/b/ — O coração do Jorgechan</div>
    </div>

    <div class="post-form-container">
        <form action="#" method="get">
            <table class="post-form">
                <tr><td class="label">Nome</td><td><input type="text" name="name" value="Anônimo"></td></tr>
                <tr><td class="label">Assunto</td><td><input type="text" name="subject"> <input type="submit" value="Postar"></td></tr>
                <tr><td class="label">Comentário</td><td><textarea name="comment" cols="35" rows="5"></textarea></td></tr>
            </table>
        </form>
    </div>

    <hr>
    <div class="thread">
        <div class="post op">
            <div class="post-info">
                <span class="subject">Dúvida relógio</span> <span class="name">Anônimo</span> 16/01/26(Sex)14:30:00 No.123456
            </div>
            <div class="post-body">
                Alguém sabe onde vende o relógio do Jorgito original?
            </div>
        </div>
    </div>
</body>
</html>
