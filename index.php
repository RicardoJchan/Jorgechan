<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorgechan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="board-list">
        [ <a href="index.html">home</a> ] [ <a href="b/index.html">/b/</a> ] [ <a href="soybr/index.html">/soybr/</a> ]
        <span class="admin" role="button" tabindex="0">[Admin]</span>
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
            <li><a href="b/index.html" style="font-size: 14pt; font-weight: bold;">/b/ - Aleatório</a></li>
            <li><a href="soybr/index.html" style="font-size: 14pt; font-weight: bold;">/soybr/ - Soy Brasil</a></li>
        </ul>
    </div>

    <div class="footer">
        - jorgechan.org -
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
