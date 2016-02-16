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
               <!-- gets page url, places it after /es/ (in Spanish subdirectory) -->
<a href="../es/" id="language-button" class="btn btn-default">
<!-- Warning!: with subdirectories added, this url will stop working -->
  Español
</a>

				<p><h2><a href="index.html">Ticha</a></h2></p>
				<p><h4>a digital text explorer for Colonial Zapotec</h4></p>

			</div>
			<div class="navbar-collapse collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="index_new.html">Home</a></li>-->
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">The project</a></li>
					<li><a href="team.html">The team</a></li>
					<li><a href="acknowledgements.html">Acknowledgements</a></li>
                    <li><a href="form.html">Contact us</a></li>
                  </ul>
				  </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Colonial Zapotec<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="linguistic.html">Linguistic background</a></li>
                    <li><a href="context.html">Cultural context</a></li>
                  </ul>
				</li>
				<li class="dropdown">
                  <a href="texts.html" class="dropdown-toggle" data-toggle="dropdown">Explore texts<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-header"><a href="texts.html">Explore texts</a></li>
					<li class="divider"></li>
                    <li class="dropdown-header"><a href="arte.html">Arte en lengua zapoteca</a></li>
					<!--<li><a href="cordova.html">About Juan de Cordova</a></li>-->
				            <li><a href="outline.html">Outline</a></li>
                    <li><a href="arte_pdf.html">PDF</a></li>
                    <li><a href="sample_arte.html">Sample page</a></li>
                    <li><a href="arte_original.html">Transcription</a></li>
                    <li><a href="reg_spanish.html">Regularized Spanish</a></li>
					<li class="divider"></li>
                    <li class="dropdown-header"><a href="doctrina.html">Doctrina christiana en lengua castellana y çapoteca</a></li>
					          <li><a href="feria.html">About Pedro de Feria</a></li>
                    <li><a href="doctrina_pdf.html">PDF</a></li>
                    <li><a href="sample_doctrina.html">Sample page</a></li>
					<li class="divider"></li>
                    <li class="dropdown-header"><a href="handwritten.html">Handwritten texts</a></li>
                    <li><a href="handwritten_texts.html">Available manuscripts</a></li>
                    <li><a href="sample_handwritten.html">Sample manuscript</a></li>
	                   <li><a href="timeline.html">Timeline of handwritten texts</a></li>
                  </ul>
				</li>
				<!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="bibliography.html">Bibliography</a></li>
                    <li><a href="download.html">Download files</a></li>
                  </ul>
				</li> -->
        <li><a href="bibliography.html">Bibliography</a></li>
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

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        </li>
            </ul> <!-- end navbar -->
            </div><!-- end div class="navbar collapse" -->
          </div>
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
