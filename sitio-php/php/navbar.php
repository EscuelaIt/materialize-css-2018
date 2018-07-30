<header class="navbar-fixed">
  <nav>
    <div class="nav-wrapper  container">
      <a href="index.php" class="brand-logo  left">
        <img src="./img/marathons-logo.svg" alt="Maratones">
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger  right">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right  hide-on-med-and-down  desktop-nav">
        <?php require './php/menu.php'; ?>
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
    <?php require './php/menu.php'; ?>
  </ul>
</header>
