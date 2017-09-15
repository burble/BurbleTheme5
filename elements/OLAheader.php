<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<?php 
  $u = new User();
 
  if ($u->isLoggedIn()) { ?>
    <style type="text/css">
	    .navbar-fixed-top { top: 50px !important;}
	    body {padding-top: 50px;}
    </style>
<?php } ?>

<header>
	<nav class="navbar navbar-default navbar-fixed-top shadebottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
				<a href=".."><h1 id="header-site-title" class="pull-left">
				
				<!-- LOGO SIZE SET IN CSS -->
				<img id="brandLogo" class="img-responsive pull-left" src="<?=$this->getThemePath()?>/images/logo.png">
				
				EDWARD McCANN<span class="hidden-xs"> - Architecture & Design</span>
				
				</h1></a>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-4 pull-right text-right">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
<!--
			<ul class="pull-right">
				<li>
					<a href="#projects">Projects</a>
				</li>
				<li>
					<a href="">About</a>
				</li>
				<li>
					<a href="">Contact</a>
				</li>
			</ul>
-->

            </div>
            
        </div>
    </div>
	</nav>
</header>
