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
          <li class="nav__items"><a class="text-white nav-links" href="#Features">Features</a></li>
          <li class="nav__items"><a class="text-white nav-links" href="#Pricing">Pricing</a></li>
          <li class="nav__items"><a class="text-white nav-links" href="#Contact">Contact</a></li>
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
        <li class="nav__items"><a class="text-blue-dark nav-links" href="#Features">Features</a></li>
        <li class="nav__items"><a class="text-blue-dark nav-links" href="#Pricing">Pricing</a></li>
        <li class="nav__items"><a class="text-blue-dark nav-links" href="#Contact">Contact</a></li>
        <li class="nav__items"><a class="text-white nav-links" href="#">Credits</a></li>
        <a class="text-white" href="<?php echo INCLUDE_PATH; ?>login"><button class="btn-login">Login</button></a>
      </ul>
    </nav>
  </header><!--header-->

<section class="banner">
    <main class="banner__content">
      <h1 class="title text-blue-dark">A Simple Bookmark Manager</h1>
      <p class="content text-gray">
        A clean and simple interface to organize your favourite websites. Open a new 
        browser tab and see your sites load instantly. Try it for free.
      </p>

      <button class="banner__btns">Get it on Chrome</button>
      <button class="banner__btns">Get it on Firefox</button>
    </main><!--banner__content-->

    <div class="banner__img-box">
      <img class="banner__img m-auto" src="<?php echo INCLUDE_PATH; ?>assets/images/illustration-hero.svg" alt="Illustration hero">
      <img class="banner__bg-el" src="<?php echo INCLUDE_PATH; ?>assets/images/bg-el.svg" alt="Background element">
    </div><!--banner__img-box-->
  </section><!--banner-->

  <br>

  <section class="features" id="Features">
    <h2 class="subtitle text-blue-dark">Features</h2>
    <p class="content m-y-24 text-gray">
      Our aim is to make it quick and easy for you to access your favourite websites. 
      Your bookmarks sync between your devices so you can access them on the go.
    </p><!--content-->

    <ul class="features__list m-y-48">
      <li data-id="8" class="features__item features__item--selected">
        Simple Bookmarking
        <span></span>
      </li>
      <li data-id="11" class="features__item">
        Speedy Searching
        <span></span>
      </li>
      <li data-id="14" class="features__item">
        Easy Sharing
        <span></span>
      </li>
    </ul>

    <main class="features__tab  features__tab--active">
      <img class="features__tab__img" src="<?php echo INCLUDE_PATH; ?>assets/images/illustration-features-tab-1.svg" alt="Feature Tab 1">

      <div class="features__tab__content">
        <h3 class="subtitle text-blue-dark">Bookmark in one click</h3>

        <p class="features__tab__content">
          Organize your bookmarks however you like. Our simple drag-and-drop interface 
          gives you complete control over how you manage your favourite sites.
        </p><!--content-->

        <button class="features__tab__btn">More Info</button>
      </div>
    </main><!--features__tab-->

    <main class="features__tab">
      <img class="features__tab__img" src="<?php echo INCLUDE_PATH; ?>assets/images/illustration-features-tab-2.svg" alt="Feature Tab 1">

      <div class="features__tab__content">
        <h3 class="subtitle text-blue-dark">Intelligent search</h3>

        <p class="features__tab__content">
          Our powerful search feature will help you find saved sites in no time at all. 
          No need to trawl through all of your bookmarks.
        </p><!--content-->

        <button class="features__tab__btn">More Info</button>
      </div>
    </main><!--features__tab-->

    <main class="features__tab">
      <img class="features__tab__img" src="<?php echo INCLUDE_PATH; ?>assets/images/illustration-features-tab-3.svg" alt="Feature Tab 1">

      <div class="features__tab__content">
        <h3 class="subtitle text-blue-dark">Share your bookmarks</h3>

        <p class="features__tab__content">
          Easily share your bookmarks and collections with others. Create a shareable 
          link that you can send at the click of a button.
        </p><!--content-->

        <button class="features__tab__btn">More Info</button>
      </div>
    </main><!--features__tab-->
  </section><!--features-->

  <section class="extensions" id="Pricing">
    <header class="extensions__desc">
      <h2 class="title text-blue-dark">Download the extension</h2>
      <p class="content text-gray">
        We’ve got more browsers in the pipeline. Please do let us know if you’ve 
        got a favourite you’d like us to prioritize.
      </p><!--content-->
    </header><!--extensions__desc-->

    <aside class="extensions__card">
      <img class="extensions__img" src="<?php echo INCLUDE_PATH; ?>assets/images/logo-chrome.svg" alt="Logo Google Chrome">
      <h3 class="subtitle text-blue-dark">Add to Chrome</h3>
      <p class="subcontent text-gray">
        Minimum version 62
      </p><!--subcontent-->
      <hr class="extensions__card__line">
      <button class="extensions__btn">Add & Install Extension</button>
    </aside><!--extensions__card-->

    <aside class="extensions__card">
      <img class="extensions__img" src="<?php echo INCLUDE_PATH; ?>assets/images/logo-firefox.svg" alt="Logo Google Chrome">
      <h3 class="subtitle text-blue-dark">Add to Firefox</h3>
      <p class="subcontent text-gray">
        Minimum version 55
      </p><!--subcontent-->
      <hr class="extensions__card__line">
      <button class="extensions__btn">Add & Install Extension</button>
    </aside><!--extensions__card-->
    
    <aside class="extensions__card">
      <img class="extensions__img" src="<?php echo INCLUDE_PATH; ?>assets/images/logo-opera.svg" alt="Logo Google Chrome">
      <h3 class="subtitle text-blue-dark">Add to Opera</h3>
      <p class="subcontent text-gray">
        Minimum version 46
      </p><!--subcontent-->
      <hr class="extensions__card__line">
      <button class="extensions__btn">Add & Install Extension</button>
    </aside><!--extensions__card-->
  </section><!--extensions-->

  <section class="questions">
    <h2 class="subtitle text-blue-dark">Frequently Asked Questions</h2>
    <p class="content text-gray">
      Here are some of our FAQs. If you have any other questions you’d like 
      answered please feel free to email us.
    </p>

    <ul class="questions__list-quest">
      <li class="questions__quest">
        <button class="questions__quest__btn content">What is Bookmark? <i id="icon" class="fas fa-chevron-down"></i></button>
        <p class="questions__anwers subcontent text-gray">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt 
          justo eget ultricies fringilla. Phasellus blandit ipsum quis quam ornare mattis.
        </p>
      </li>
      <li class="questions__quest">
        <button class="questions__quest__btn content">How can I request a new browser? <i id="icon" class="fas fa-chevron-down"></i></button>
        <p class="questions__anwers subcontent text-gray">
          Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula. 
          Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, 
          ultricies non ligula. Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies. 
          Mauris augue massa, ultricies non ligula. Suspendisse imperdiet.
        </p>
      </li>
      <li class="questions__quest">
        <button class="questions__quest__btn content">Is there a mobile app? <i id="icon" class="fas fa-chevron-down"></i></button>
        <p class="questions__anwers subcontent text-gray">
          Sed consectetur quam id neque fermentum accumsan. Praesent luctus vestibulum dolor, ut condimentum 
          urna vulputate eget. Cras in ligula quis est pharetra mattis sit amet pharetra purus. Sed 
          sollicitudin ex et ultricies bibendum.
        </p>
      </li>
      <li class="questions__quest">
        <button class="questions__quest__btn content">What about other Chromium browsers? <i id="icon" class="fas fa-chevron-down"></i></button>
        <p class="questions__anwers subcontent text-gray">
          Integer condimentum ipsum id imperdiet finibus. Vivamus in placerat mi, at euismod dui. Aliquam 
          vitae neque eget nisl gravida pellentesque non ut velit.
        </p>
      </li>
    </ul>

    <button class="questions__btn">More Info</button>
  </section><!--questions-->

  <section class="contact-form" id="Contact">
    <h2 class="title">35,000+ already joined</h2>
    <p class="content">
      Stay up-to-date with what we’re doing
    </p><!--content-->

    <form class="contact-form__form" method="POST" action="">
      <input class="contact-form__input" required type="text" name="nome" id="nome" placeholder="Your name..." />
      <input class="contact-form__input" required type="email" name="email" id="email" placeholder="Your E-mail..." />
      <input class="contact-form__input" required type="tel" name="telefone" id="telefone" placeholder="Phone" />
      <textarea class="contact-form__textarea" required name="mensagem" id="mensagem" placeholder="Your Message..."></textarea>

      <button class="contact-form__submit" type="submit" name="sendForm">Send E-mail</button>
      <div class="contact-form__box-loading">
        <div class="contact-form__loading-spin"></div>
        <span>Carregando...</span>
      </div><!--contact-form__box-loading
      
    </form><!--contact-form__form-->
  </section><!--contact-form-->
  
  <footer class="footer">
    <nav class="footer__nav">
      <ul class="footer__list-links">
        <li class="footer__list-links__link"><img src="<?php echo INCLUDE_PATH; ?>assets/images/logo-bookmark-white.svg" alt="Logo da Bookmark" /></li>
        <li class="footer__list-links__link"><a class="text-white nav-links" href="#Features">Features</a></li>
        <li class="footer__list-links__link"><a class="text-white nav-links" href="#Pricing">Pricing</a></li>
        <li class="footer__list-links__link"><a class="text-white nav-links" href="#Contact">Contact</a></li>
      </ul><!--footer__list-links-->

      <ul class="footer__list-social">
        <li class="footer__list-social__link">
          <a class="text-white" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="footer__list-social__link">
          <a class="text-white" target="_blank" href="https://pt-br.facebook.com/"><i class="fab fa-facebook-square"></i></a>
        </li>
      </ul><!--footer__list-social-->
    </nav><!--footer__nav-->
  </footer><!--footer-->