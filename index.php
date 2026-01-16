<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jorgechan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="board-list">
        [ <a href="index.php">home</a> ] [ <a href="b/index.php">/b/</a> ] [ <a href="soybr/index.php">/soybr/</a> ]
        
        <?php if (isAdmin()): ?>
            <span class="admin" style="color: green;">[Admin: ON]</span>
            <a href="logout.php" style="font-size: 8pt;">(sair)</a>
        <?php else: ?>
            <a href="login.php" class="admin" style="text-decoration:none;">[Admin]</a>
        <?php endif; ?>
    </div>

    <header>
        <div class="logo-container">
            <img src="790c8191287a389131ccb943681ac8e0.gif" alt="Jorgito" class="mascot">
            <div class="logo-text">JORGECHAN</div>
        </div>
        <p>A desunião perfeita</p>
    </header>

    <div style="text-align: center; margin-top: 40px;">
        <h3>Boards Ativas:</h3>
        <ul style="list-style: none; padding: 0;">
            <li><a href="b/index.php" style="font-size: 14pt; font-weight: bold;">/b/ - Aleatório</a></li>
            <li><a href="soybr/index.php" style="font-size: 14pt; font-weight: bold;">/soybr/ - Soy Brasil</a></li>
        </ul>
    </div>

    <div class="footer"> - jorgechan.org - </div>
</body>
</html>
