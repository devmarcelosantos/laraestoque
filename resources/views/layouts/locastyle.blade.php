<!DOCTYPE html>
<html class="ls-theme-turquoise">
  <head>
    <title>LaraEstoque - Controle de Estoque</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.9.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
  </head>
  <body>
  <div class="ls-topbar ls-topbar-turquiose">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Links de apoio -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
      <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <span class="ls-name">Marcelo Santos</span>
      </a>
      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Editar Perfil</a></li>
          <li><a href="#">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <!-- Nome do produto/marca -->
    <h1 class="ls-brand-name">
      <a href="/" class="ls-ico-globe">
        LaraEstoque
      </a>
    </h1>
</div>  
<aside class="ls-sidebar">
  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos//pre-painel" class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>
      <nav class="ls-menu">
        <ul>
          <li><a href="/" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
          <li>
            <a href="#" class="ls-ico-cog" title="Produtos">Produtos</a>
            <ul>
              <li><a href="/products">Listar Produto</a></li>
              <li><a href="/products/add">Cadastrar Produto</a></li>
            </ul>
          </li>
          <li><a href="#" class="ls-ico-bukets" title="Estoque">Estoque</a></li>
        </ul>
      </nav>
  </div>
</aside>
    <main class="ls-main ">
      <div class="container-fluid">
        @yield('content')
      </div>
    </main>
    <aside class="ls-notification">
      <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
        <h3 class="ls-title-2">Notificações</h3>
        <ul>
          <li class="ls-dismissable">
            <a href="#">Sistema em fase de teste !</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Teste</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
        </ul>
      </nav>

      <nav class="ls-notification-list" id="ls-help-curtain" style="left: 1756px;">
        <h3 class="ls-title-2">Feedback</h3>
        <ul>
          <li><a href="#">&gt; quo fugiat facilis nulla perspiciatis consequatur</a></li>
          <li><a href="#">&gt; enim et labore repellat enim debitis</a></li>
        </ul>
      </nav>
    </aside>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.9.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>