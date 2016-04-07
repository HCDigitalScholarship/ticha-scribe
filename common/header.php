<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <!-- Le styles -->
    <?php
    queue_css_url('http://fonts.googleapis.com/css?family=Oxygen');
    queue_css_url('http://fonts.googleapis.com/css?family=Inconsolata');
    queue_css_url('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    queue_css_file(array(
    //    'bootstrap',
        'bootstrap_journal',
	'font-awesome',
        'style',
	'ol',
	'custom',
	'small_nav',
    ));
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php
    // jQuery is enabled by default in Omeka and in most themes.
    // queue_js_url('https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    // queue_js_url('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js');
    queue_js_file(array(
        'bootstrap.min',
        'jquery.bxSlider.min',
//	'hide_ticha',
    ));
    echo head_js();
    ?>
</head>

<?php
    echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass));
    require_once getcwd().'/plugins/Scripto/libraries/Scripto.php';
    $scripto = ScriptoPlugin::getScripto();
?>

<!--    <div id="wrap" class="container">-->
<header>
<nav class="navbar navbar-inverse" role="navigation">
       

<!--	 <div class="container">
             Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
<!--	        <ul class="nav nav-pills pull-right">

                    <//?php if ($scripto->isLoggedIn()): ?>
                    <li class="dropdown"><a href="#" class="btn btn-default dropdown-toggle" id="signin-button" data-toggle="dropdown"><//?php echo $scripto->getUserName(); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto">Your Contributions</a></li>
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto/watchlist">Your Watchlist</a></li>
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto/recent-changes">Recent Changes</a></li>
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto/logout">Logout</a></li>
                        </ul>
                    </li>

                    <//?php else: ?>

                    <li>
                    <a href="<//?php echo WEB_ROOT; ?>/scripto/login" class="btn btn-default" id="signin-button">Sign in or register</a>
                    </li>

                    <//?php endif; ?>
                    </ul>-->

                <!--<a class="navbar-brand" href="index_new.html">
                    <img src="../img/logo2_long.png" alt="" height="120" width="380">
                </a>-->
               <!-- gets page url, places it after /es/ (in Spanish subdirectory) -->
<!--<a href="../es/" id="language-button" class="btn btn-default">
 Warning: with subdirectories added, this url will stop working 
  Español
</a>-->
 <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--<a class="navbar-brand" href="index_new.html">
                    <img src="../img/logo2_long.png" alt="" height="120" width="380">
                </a>-->
                <!-- get page url, places it back to / (main directory is English version when implemented) -->
<!--<a href="../en/about.html" id="language-button" class="btn btn-default">
 Warning!: with subdirectories added, this url will stop working 
  English
</a>-->

				<p><h2><a href="https://ticha.haverford.edu/es/">Ticha</a></h2></p>
				<p><h4>un explorador digital de texto para el zapoteco colonial</h4></p>

			</div>
			<div class="navbar-collapse collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="index_new.html">Home</a></li>-->
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acerca de Ticha<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://ticha.haverford.edu/es/about.html">El proyecto</a></li>
					<li><a href="https://ticha.haverford.edu/es/team.html">El equipo</a></li>
					<li><a href="https://ticha.haverford.edu/es/acknowledgements.html">Agradecimientos</a></li>
                    <li><a href="https://ticha.haverford.edu/es/form.html">Contacto</a></li>
                  </ul>
				  </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Zapoteco colonial<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://ticha.haverford.edu/es/linguistic.html">Formación linguistica</a></li>
                    <li><a href="https://ticha.haverford.edu/es/context.html">Contexto cultural</a></li>
                  </ul>
				</li>
				<li class="dropdown">
                  <a href="texts.html" class="dropdown-toggle" data-toggle="dropdown">Explora los textos<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-header"><a href="https://ticha.haverford.edu/es/texts.html">Explora los textos</a></li>
					<li class="divider"></li>
                    <li class="dropdown-header"><a href="https://ticha.haverford.edu/es/arte.html">Arte en lengua zapoteca</a></li>
					<!--<li><a href="cordova.html">About Juan de Cordova</a></li>-->
				            <li><a href="https://ticha.haverford.edu/es/outline.html">Esquema</a></li>
                    <li><a href="https://ticha.haverford.edu/es/arte_pdf.html">PDF</a></li>
                    <li><a href="https://ticha.haverford.edu/es/sample_arte.html">El ejemplo de una página</a></li>
                    <li><a href="https://ticha.haverford.edu/es/arte_original.html">Transcripción</a></li>
                    <li><a href="https://ticha.haverford.edu/es/reg_spanish.html">Español regularizado</a></li>
					<li class="divider"></li>
                    <li class="dropdown-header"><a href="https://ticha.haverford.edu/es/doctrina.html">Doctrina christiana en lengua castellana y çapoteca</a></li>
					          <li><a href="https://ticha.haverford.edu/es/feria.html">Sobre Pedro de Feria</a></li>
                    <li><a href="https://ticha.haverford.edu/es/doctrina_pdf.html">PDF</a></li>
                    <li><a href="https://ticha.haverford.edu/es/sample_doctrina.html">El ejemplo de una página</a></li>
					<li class="divider"></li>
                    <li class="dropdown-header"><a href="http://new-ticha.haverford.edu/es/handwritten.html">Textos en manoescrita</a></li>
                    <li><a href="https://ticha.haverford.edu/es/handwritten_texts.html">Manuscritos disponibles</a></li>
                    <li><a href="https://ticha.haverford.edu/es/sample_handwritten.html">Ejemplos de manuscritos</a></li>
                    <li><a href="https://ticha.haverford.edu/es/timeline.html">Cronología de los documentos</a></li>
                  </ul>
				</li>
				<!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="bibliography.html">Bibliography</a></li>
                    <li><a href="download.html">Download files</a></li>
                  </ul>
				</li> -->
        <li><a href="https://ticha.haverford.edu/es/bibliography.html">Bibliografía</a></li>
        <li>
            <a href="https://www.facebook.com/TichaColonialZapotecTextExplorer" target="blank" class="btn btn-social-icon btn-facebook">
                <i class="fa fa-facebook fb-follow"></i>
            </a>
        </li>
        <li>
             <!-- <a href="https://twitter.com/intent/tweet?button_hashtag=ticha" class="twitter-hashtag-button" data-url="http://ticha.haverford.edu">Tweet #ticha</a> -->
              <a href="https://twitter.com/intent/tweet?button_hashtag=ticha&text=http://ticha.haverford.edu" class="btn btn-social-icon btn-twitter" data-url="http://ticha.haverford.edu">
                <i class="fa fa-twitter"></i>
            </a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs'); </script>

        </li>
            </ul> <!-- end navbar -->

            </div><!-- end div class="navbar collapse" -->
          </div>
    </nav>
    </nav>

</header>
      <!--  <header id="header" role="banner">

            <div id="sublinks" class="masthead clearfix">

                <ul class="nav nav-pills pull-right">

                    <?php if ($scripto->isLoggedIn()): ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong><?php echo $scripto->getUserName(); ?></strong><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto">Your Contributions</a></li>
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto/watchlist">Your Watchlist</a></li>
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto/recent-changes">Recent Changes</a></li>
                            <li><a href="<?php echo WEB_ROOT; ?>/scripto/logout">Logout</a></li>
                        </ul>
                    </li>

                    <?php else: ?>

                    <li>
                    <a href="<?php echo WEB_ROOT; ?>/scripto/login"><strong>Sign in or register</strong></a>
                    </li>

                    <?php endif; ?>
                </ul>

                <a href="<?php echo WEB_ROOT; ?>"><img src="<?php echo img('sub.png'); ?>" alt="Scribe: an Omeka theme" title="Scribe: an Omeka theme" width="960" height="80" border="0"></a>
            </div>

        </header>--><!-- end header -->

        <article id="content">

            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
