<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">GMF</a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems"
      aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarItems">
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="#">Hjem <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#about" onclick="$('#about').animatescroll({padding:50});" data-target="#about">Om meg</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Portefølje</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#contact" onclick="$('#contact').animatescroll({padding:50});">Kontakt</a>
          </li>
      </ul>
      <!-- Links -->

      <!-- Search form -->
      <!-- Probably dont need it
      <form class="form-inline">
          <input class="form-control mr-sm-2" type="text" placeholder="Søk" aria-label="Search">
      </form>
    -->
  </div>
  <!-- Collapsible content -->
</nav>
