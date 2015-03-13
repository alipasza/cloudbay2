   <!-- Page content of course! -->
    <main class="bs-docs-masthead" id="content" role="main">
  <div class="container">
    <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">CloudBay</span>
    <p class="lead"><?php echo $this->ltext[Session::get("lang")]['index-title'];?><br> <?php echo $this->ltext[Session::get("lang")]['index-subtitle'];?></p>
    <p class="lead">
        <a class="btn btn-outline-inverse btn-lg" href="<?php echo URL; ?>login/register"><?php echo $this->ltext[Session::get("lang")]['index-createaccount'];?></a>

    </p>
    <p class="version">Currently v3.3.2</p>
    <div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div>

  </div>
</main>

<div class="bs-docs-featurette">
  <div class="container">
    <h2 class="bs-docs-featurette-title">Designed for everyone, everywhere.</h2>
    <p class="lead">Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.</p>

    <hr class="half-rule">

    <div class="row">
      <div class="col-sm-4">
        <img src="assets/img/sass-less.png" alt="Sass and Less support" class="img-responsive">
        <h3>Preprocessors</h3>
        <p>Bootstrap ships with vanilla CSS, but its source code utilizes the two most popular CSS preprocessors, <a href="../css/#less">Less</a> and <a href="../css/#sass">Sass</a>. Quickly get started with precompiled CSS or build on the source.</p>
      </div>
      <div class="col-sm-4">
        <img src="assets/img/devices.png" alt="Responsive across devices" class="img-responsive">
        <h3>One framework, every device.</h3>
        <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p>
      </div>
      <div class="col-sm-4">
        <img src="assets/img/components.png" alt="Components" class="img-responsive">
        <h3>Full of features</h3>
        <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p>
      </div>
    </div>

    <hr class="half-rule">

    <p class="lead">Bootstrap is open source. It's hosted, developed, and maintained on GitHub.</p>
    <a href="https://github.com/twbs/bootstrap" class="btn btn-outline btn-lg">View the GitHub project</a>
  </div>
</div>

<div class="bs-docs-featurette">
  <div class="container">
    <h2 class="bs-docs-featurette-title">Built with Bootstrap.</h2>
    <p class="lead">Millions of amazing sites across the web are being built with Bootstrap. Get started on your own with our growing <a href="../getting-started/#examples">collection of examples</a> or by exploring some of our favorites.</p>

    <hr class="half-rule">

    <div class="row bs-docs-featured-sites">

      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/10/29/lyft/" target="_blank" title="Lyft">
          <img src="http://expo.getbootstrap.com/thumbs/lyft-thumb.jpg" alt="Lyft" class="img-responsive">
        </a>
      </div>

      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/09/30/vogue/" target="_blank" title="Vogue">
          <img src="http://expo.getbootstrap.com/thumbs/vogue-thumb.jpg" alt="Vogue" class="img-responsive">
        </a>
      </div>

      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/03/13/riot-design/" target="_blank" title="Riot Design">
          <img src="http://expo.getbootstrap.com/thumbs/riot-thumb.jpg" alt="Riot Design" class="img-responsive">
        </a>
      </div>

      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/02/12/newsweek/" target="_blank" title="Newsweek">
          <img src="http://expo.getbootstrap.com/thumbs/newsweek-thumb.jpg" alt="Newsweek" class="img-responsive">
        </a>
      </div>

    </div>

    <hr class="half-rule">

    <p class="lead">We showcase dozens of inspiring projects built with Bootstrap on the Bootstrap Expo.</p>
    <a href="http://expo.getbootstrap.com" class="btn btn-outline btn-lg">Explore the Expo</a>
  </div>
</div>