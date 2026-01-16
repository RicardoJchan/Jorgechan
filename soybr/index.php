<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/soybr/ - Soy Brasil - Jorgechan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="board-list">
        [ <a href="../index.html">home</a> ] [ <a href="../b/index.html">/b/</a> ] [ <a href="index.html">/soybr/</a> ]
        <span class="admin">[Admin: linkpark1]</span>
    </div>

    <div class="board-title">/soybr/ - Soy Brasil</div>

    <div class="banner">
        <img src="../790c8191287a389131ccb943681ac8e0.gif" alt="banner" class="banner-img">
        <div class="banner-text">/soybr/ — Discussões sobre soja e memes</div>
    </div>

    <div class="post-form-container">
        <form action="#" method="get">
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
                    <td><textarea name="comento" rows="4" placeholder="Escreva aqui..."></textarea></td>
                </tr>
                <tr>
                    <td class="label">Arquivo</td>
                    <td><input type="file" name="upfile"></td>
                </tr>
            </table>
        </form>
    </div>

    <hr>

    <div class="thread">
        <div class="post op">
            <div class="file-info">Arquivo: <a href="#">brasil_soy.png</a> (80 KB, 500x500)</div>
            <div class="post-info">
                <span class="subject">Tópico de Discussão de Soybeans</span> 
                <span class="name">Anônimo</span> 
                05/23/24(Qui)14:20:00 No.88776655 [ <a href="#">Responder</a> ]
            </div>
            <div class="post-body">
                Discussão oficial sobre a safra de soja brasileira e memes relacionados.
            </div>
        </div>
        
        <div class="post reply" style="margin-left: 50px;">
            <div class="post-info">
                <span class="name">Anônimo</span> 
                05/23/24(Qui)14:25:00 No.88776656
            </div>
            <div class="post-body">
                O Jorgito gosta de soja?
            </div>
        </div>
    </div>

    <div class="footer">
        [ <a href="index.html">1</a> ] [ <a href="#">2</a> ]
    </div>
<script>
(function(){
  const pwd = "linkpark1";
  function setAdmin(on){
    if(on){
      document.documentElement.classList.add('admin-mode');
      document.querySelectorAll('.admin').forEach(el => el.textContent = '[Admin: ON]');
      sessionStorage.setItem('jorge_admin','1');
    } else {
      document.documentElement.classList.remove('admin-mode');
      document.querySelectorAll('.admin').forEach(el => el.textContent = '[Admin]');
      sessionStorage.removeItem('jorge_admin');
    }
  }

  function ask(e){
    const attempt = prompt('digite a senha meu nobre');
    if(attempt === pwd){
      setAdmin(true);
      alert('Modo admin ativado');
    } else {
      alert('Senha incorreta');
      setAdmin(false);
    }
  }

  document.addEventListener('click', function(e){
    if(e.target && e.target.classList && e.target.classList.contains('admin')){
      ask(e);
    }
  });

  document.addEventListener('keydown', function(e){
    if((e.key === 'Enter' || e.key === ' ') && document.activeElement && document.activeElement.classList.contains('admin')){
      e.preventDefault();
      ask();
    }
  });

  if(sessionStorage.getItem('jorge_admin') === '1'){
    setAdmin(true);
  }
})();
</script>
</body>
</html>
