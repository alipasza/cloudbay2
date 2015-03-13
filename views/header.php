<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CloudBay</title>
        <!-- ikona na zakladce w WebBrowser -->
        <link rel="icon" href="<?php echo URL; ?>public/images/cloudbay-favicon.png" type="image/png">
        <!-- css-y -->
        <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/docs.min.css" rel="stylesheet">

        <!-- skrypty -->
        <script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>public/js/bootstrap.min.js "></script>
        <script src="<?php echo URL; ?>public/js/ie-emulation-modes-warning.js"></script>

        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" '
                . 'src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
    </head>
    <body id="<?php echo $bodyName; ?>" class="bs-docs-home">
        <a id="skippy" class="sr-only sr-only-focusable" href="#content"><div class="container"><span class="skiplink-text">Skip to main content</span></div></a>

        <!-- Docs master nav -->
        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../" class="navbar-brand">CloudBay</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo URL; ?>services"><?php echo $this->ltext[Session::get("lang")]['header-services']; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo URL; ?>customers"><?php echo $this->ltext[Session::get("lang")]['header-customers']; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo URL; ?>community"><?php echo $this->ltext[Session::get("lang")]['header-community']; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo URL; ?>live"><?php echo $this->ltext[Session::get("lang")]['header-training']; ?></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=<?php echo URL . 'index?lang=PL'; ?> onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');"><?php echo $this->ltext[Session::get("lang")]['header-login']; ?></a></li>
                        <li>

                            <div class="btn-group pull-right" role="group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href=<?php echo URL . 'index?lang=PL'; ?>>
                                    <?php echo Session::get("lang"); ?>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href=<?php echo URL . 'index?lang=PL'; ?>>PL</a></li>
                                    <li><a href=<?php echo URL . 'index?lang=EN'; ?>>EN</a></li>
                                    <li><a href=<?php echo URL . 'index?lang=DE'; ?>>DE</a></li>
                                    <li><a href=<?php echo URL . 'index?lang=RU'; ?>>RU</a></li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </nav>
            </div>
        </header>
