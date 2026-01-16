<?php require_once '../config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/soybr/ - Soy Brasil - Jorgechan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="<?php echo isAdmin() ? 'admin-mode' : ''; ?>">

    <div class="board-list">
        [ <a href="../index.php">home</a> ] [ <a href="../b/index.php">/b/</a> ] [ <a href="index.php">/soybr/</a> ]
        
        <?php if (isAdmin()): ?>
            <span class="admin" style="color: green;">[Admin: ON]</span>
            <a href="../logout.php" style="font-size: 8pt; color: #6b2b2b;">(sair)</a>
        <?php else: ?>
            <a href="../login.php" class="admin" style="text-decoration:none;">[Admin]</a>
        <?php endif; ?>
    </div>

    <div class="board-title">/soybr/ - Soy Brasil</div>

    <div class="banner">
        <img src="../790c8191287a389131ccb943681ac8e0.gif" alt="banner" class="banner-img">
        <div class="banner-text">/soybr/ — Discussões sobre soja e memes</div>
    </div>

    <div class="post-form-container">
        <form action="#" method="POST">
            <table class="post-form">
                <tr>
                    <td class="label">Nome</td>
                    <td><input type="text" name="name" value="Anônimo"></td>
                </tr>
                <tr>
                    <td class="label">Assunto</td>
                    <td><input type="text" name="subject"> <input type="submit" value="Postar"></td>
                </tr>
                <tr>
                    <td class="label">Comentário</td>
                    <td><textarea name="comment" cols="35" rows="5"></textarea></td>
                </tr>
            </table>
        </form>
    </div>

    <hr>

    <div class="thread">
        <div class="post op">
            <div class="post-info">
                <span class="subject">Dúvida Soja</span> <span class="name">Anônimo</span> 15/01/26(Qui)14:25:00 No.88776656
            </div>
            <div class="post-body">
                O Jorgito gosta de soja?
            </div>
        </div>
    </div>

    <div class="footer">
        [ <a href="index.php">1</a> ] [ <a href="#">2</a> ]
    </div>

</body>
</html>
