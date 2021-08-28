<header class="header">
    <a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>assets/images/logo-bookmark.svg" alt="Logo Boockmark" /></a>

    <div class="nav-mobile-box">
      <button class="btn-menu-open"><i class="fas fa-bars"></i></button>
      <nav class="nav-mobile p-res-48">
        <header class="nav-mobile__header">
          <a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>assets/images/logo-bookmark-white.svg" alt="Logo Boockmark" /></a>
          <button class="btn-menu-close"><i class="fas fa-times"></i></button>
        </header><!--nav-mobile__header-->

        <ul class="nav-mobile__nav">
          <li class="nav__items"><a class="text-white nav-links" href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
          <li class="nav__items"><a class="text-white nav-links" href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
          <a class="text-white" href="<?php echo INCLUDE_PATH; ?>login"><button class="btn-login">Login</button></a>
        </ul><!--nav-mobile__nav-->

        <footer class="nav-mobile__footer">
          <a class="icons text-white" href="https://pt-br.facebook.com/"><i class="fab fa-facebook-square"></i></a>
          <a class="icons text-white" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        </footer><!--nav-mobile__footer-->
      </nav><!--nav-mobile-->
    </div><!--"nav-mobile-box-->

    <nav class="nav-desktop">
      <ul class="nav-desktop__list">
        <li class="nav__items"><a class="text-blue-dark nav-links" href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
        <a class="text-white" href="<?php echo INCLUDE_PATH; ?>login"><button class="btn-login">Login</button></a>
      </ul>
    </nav>
</header><!--header-->

<section class="error">
  <div>
    <h1 class="title text-red">Essa página não existe :(</h1>
    <a class="error__btn-link" href="<?php echo INCLUDE_PATH; ?>">Voltar pra home</a>
  </div>
  <div class="error__line"></div>
  <img class="error__img" src="<?php echo INCLUDE_PATH; ?>assets/images/404.svg" alt="Erro 404 (Página não encontrada!)" />
</section><!--error-->