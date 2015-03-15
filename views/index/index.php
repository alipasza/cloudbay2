<!-- view/index/index.php -->
<main class="bs-docs-masthead" id="content" role="main">
    <div class="container">
        <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">CloudBay</span>
        <p class="lead"><?php echo $this->ltext[Session::get("lang")]['index-title']; ?><br> <?php echo $this->ltext[Session::get("lang")]['index-subtitle']; ?></p>
        <p class="lead">
            <a class="btn btn-outline-inverse btn-lg" href="<?php echo URL; ?>login/register"><?php echo $this->ltext[Session::get("lang")]['index-createaccount']; ?></a>

        </p>
        <p class="version">Currently v3.3.2</p>
    </div>
</main>
<!--2 szyba -->
<div class="bs-docs-featurette">
    <div class="container">
        <h2 class="bs-docs-featurette-title">Designed for everyone, everywhere, anyhow.</h2>
        <p class="lead">cloudBay provides front-end web site fast and easy. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.</p>

        <hr class="half-rule">

        <div class="row">
            <div class="col-sm-4">
                <img src="<?php echo URL; ?>public/ico/lamp.png" alt="Vsion">
                <h3>Vision</h3>
                <p>Your vision is our mission ! In a perfect world there would be no need for any IT system. Unfortunately, we can not change the world, but we can try to offer the perfect solution .</p>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo URL; ?>public/ico/thinking-gears.png" alt="Responsive across devices">
                <h3>One CRM, every device.</h3>
                <p>There's a difference between a business management or operations strategy and a Customer Relationship strategy. We're sure that the common goal we all have is that we want to get and keep customers. A CRM strategy and solution will enable that effectively and efficiently.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?php echo URL; ?>public/ico/application-gears.png" alt=Benefit">
                <h3>Benefit</h3>
                <p>If you’re not familiar with the advantages of a customer relationship management system here are a few that can motivate any business: Customer Acquisition, Customer Satisfaction, Competitive Advantage, Efficiency, Security ...</p>
            </div>
        </div>

        <hr class="half-rule">

        <p class="lead">cloudBay is for everyone.<br> It's hosted, developed, and maintained in Cloud from Microsoft Azure or Google Cloud.</p>
        <a href="../" class="btn btn-outline btn-lg">View our projects</a>
    </div>
</div>
<!--3 szyba -->
<div class="bs-docs-featurette" <strong style="background-color: #99EDAE;"></strong> <!-- #AAF9CC ; #8CF6EA ; #BFC0F9-->
    <div class="container">
        <h2 class="bs-docs-featurette-title">Create your firm with cloudBay.</h2>
        <p class="lead">Millions of clients across the web are being in your reach. Get started on your own with our growing <a href="../">collection of examples</a> or by exploring some of our favorites.</p>

        <hr class="half-rule">

        <div class="row bs-docs-featured-sites">

            <div class="col-xs-6 col-sm-3" class="mar-right-20">
                <a href="http://expo.getbootstrap.com/2014/10/29/lyft/" target="_blank" title="Lyft">
                    <img src="<?php echo URL; ?>public/images/lyft-thumb.jpg" alt="Lyft" class="img-responsive">
                </a>
            </div>
            
            <div class="col-xs-6 col-sm-3">
                <a href="http://expo.getbootstrap.com/2014/09/30/vogue/" target="_blank" title="Vogue">
                    <img src="<?php echo URL; ?>public/images/vogue-thumb.jpg" alt="Vogue" class="img-responsive">
                </a>
            </div>

            <div class="col-xs-6 col-sm-3">
                <a href="http://expo.getbootstrap.com/2014/03/13/riot-design/" target="_blank" title="Riot Design">
                    <img src="<?php echo URL; ?>public/images/riot-thumb.jpg" alt="Riot Design" class="img-responsive">
                </a>
            </div>

            <div class="col-xs-6 col-sm-3">
                <a href="http://expo.getbootstrap.com/2014/02/12/newsweek/" target="_blank" title="Newsweek">
                    <img src="<?php echo URL; ?>public/images/newsweek-thumb.jpg" alt="Newsweek" class="img-responsive">
                </a>
            </div>

        </div>

        <hr class="half-rule">

        <p class="lead">We support dozens of inspiring projects built with CRM.</p>
        <a href="../" class="btn btn-outline btn-lg">Explore the CRM</a>
    </div>
</div>
