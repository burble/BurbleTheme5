<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>


<footer id="footer-theme">
    
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php
                $a = new GlobalArea('Footer Site Title');
                $a->display();
                ?>
				<p style="color: white !important">Edward McCann</p>
				<i class="fa fa-phone-square" aria-hidden="true"></i>  <a href="">+44 (0)20 8985 3749</a>
				<i class="fa fa-envelope"></i>  <a href="">ed@edwardmccann.net</a>
            </div>
            <div class="col-sm-3 text-right">
	            <a href="http://www.burbleweb.com" target="_blank"><small>Design & Build by Burble</small></a>

<!--
                <?php
                $a = new GlobalArea('Footer Social');
                $a->display();
                ?>
-->
            </div>
        </div>
    </div>
    </section>

<!--
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <?php
            $a = new GlobalArea('Footer Legal');
            $a->display();
            ?>
            </div>
            <div class="col-sm-3">
                <?php
                $a = new GlobalArea('Footer Navigation');
                $a->display();
                ?>
            </div>
            <div class="col-sm-3">
                <?php
                $a = new GlobalArea('Footer Contact');
                $a->display();
                ?>
            </div>
        </div>
    </div>
    </section>
-->
</footer>

<!--
<footer id="burble-brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                 <span class="pull-right">
                   	<small>Design & Build by <a href="http://www.burbleweb.com" target="_blank">Burble</a></small>
                </span>
            </div>
        </div>
    </div>
</footer>
-->


<?php $this->inc('elements/footer_bottom.php');?>
