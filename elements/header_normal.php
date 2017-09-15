<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!--HOME PAGE HEADER LAYOUT-->

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-md-5">
				<h1 id="header-site-title" class="pull-left">
				<!-- LOGO SIZE SET IN CSS -->
<!-- 	<img id="brandLogo" class="img-responsive pull-left" src="<?=$this->getThemePath()?>/images/logo.png"> -->
					<a href="<?php echo DIR_REL; ?>/">
						FANNY LAM CHRISTIE
					</a>
				</h1>
            </div>
            
            <div class="col-xs-2 col-md-7 pull-right">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
            
        </div>
    </div>
</nav>